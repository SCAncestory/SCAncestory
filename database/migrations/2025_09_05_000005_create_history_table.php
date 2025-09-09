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

        Schema::create('history', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->unsignedBigInteger('item');
            $table->unsignedBigInteger('person');
            $table->unsignedBigInteger('peerage');
            $table->date('date')->nullable();
            $table->text('notes')->nullable();

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
        Schema::dropIfExists('history');
    }
};
