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
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('email');
            $table->text('password');
            $table->timestamps();
        });

        Schema::create('peerage', function (Blueprint $table) {
            $table->id();
            $table->text('peerage');
            $table->timestamps();
        });

        Schema::create('person', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->integer('CanonLoreId')->nullable();
            $table->timestamps();
        });

        Schema::create('regaliatype', function (Blueprint $table) {
            $table->id();
            $table->text('type');
            $table->timestamps();
        });

        Schema::create('regaliaitem', function (Blueprint $table) {
            $table->id();
            $table->text('Name')->nullable();
            $table->text('Description')->nullable();
            $table->unsignedBigInteger('type');
            $table->foreign('type')->references('id')->on('regaliatype');
            $table->timestamps();
        });

        Schema::create('history', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('item');
            $table->unsignedBigInteger('person');
            $table->unsignedBigInteger('peerage');
            $table->date('date')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();

            $table->foreign('item')->references('id')->on('regaliaitem');
            $table->foreign('person')->references('id')->on('person');
            $table->foreign('peerage')->references('id')->on('peerage');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
        Schema::dropIfExists('history');
        Schema::dropIfExists('peerage');
        Schema::dropIfExists('person');
        Schema::dropIfExists('regaliaitem');
        Schema::dropIfExists('regaliatype');
    }
};
