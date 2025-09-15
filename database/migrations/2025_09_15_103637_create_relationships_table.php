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
        Schema::create('relationships', function (Blueprint $table) {
            $table->id();
            $table->foreignId('peer_id')->constrained(
                table: 'person',
                indexName: 'id'
            );
            $table->foreignId('student_id')->constrained(
                table: 'person',
                indexName: 'id'
            );
            $table->foreignId('peerage_id')->constrained(
                table: 'peerage',
                indexName: 'id'
            );
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('status')->nullable();
            $table->string('notes')->nullable();
            $table->softDeletes('deleted_at', precision: 0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('relationships');
    }
};
