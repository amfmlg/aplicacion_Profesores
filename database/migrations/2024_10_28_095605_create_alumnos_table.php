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
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->foreignId('profesor_id')->onDelete('cascade');
            $table->foreignId('curso_id')->onDelete('cascade');
            $table->timestamps();
            $table->string('title', 255);
            $table->string('password', 255);
            $table->boolean('EsProfe')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos');
    }
};
