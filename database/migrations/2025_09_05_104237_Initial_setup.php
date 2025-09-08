<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('_user_', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('email');
            $table->text('password');
        });

        Schema::create('_history_', function (Blueprint $table) {
            $table->id();
            $table->foreign('item')->references('id')->on('regaliaitem');
            $table->foreign('person')->references('id')->on('person');
            $table->foreign('peerage')->references('id')->on('peerage');
            $table->date('date')->nullable();
            $table->text('notes')->nullable();
        });

        Schema::peerage('_peerage_', function (Blueprint $table) {
            $table->id();
            $table->text('peerage');
        });

        Schema::person('_person_', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->integer('CanonLoreId')->nullable();
        });

        Schema::create('_regaliaitem_', function (Blueprint $table) {
            $table->id();
            $table->text('Name')->nullable();
            $table->text('Description')->nullable();
            $table->foreign('type')->references('id')->on('regaliatype');
        });

        Schema::create('_regaliatype_', function (Blueprint $table) {
            $table->id();
            $table->text('type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_user_');
        Schema::dropIfExists('_history_');
        Schema::dropIfExists('_peerage_');
        Schema::dropIfExists('_person_');
        Schema::dropIfExists('_regaliaitem_');
        Schema::dropIfExists('_regaliatype_');
    }
};
