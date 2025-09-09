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
        Schema::create('regaliaitem', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->unsignedBigInteger('type');
            $table->foreign('type')->references('id')->on('regaliatype');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('regaliaitem');
    }
};
