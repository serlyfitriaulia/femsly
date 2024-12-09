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
        Schema::create('film_aktors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_film')->constrained('film')->onDelete('cascade');
            $table->foreignId('id_aktor')->constrained('aktor')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('film_aktors');
    }
};
