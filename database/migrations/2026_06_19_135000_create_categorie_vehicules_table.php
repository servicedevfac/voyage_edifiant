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
        Schema::create('categorie_vehicules', function (Blueprint $table) {
            $table->id();
            $table->string('nom'); // ex: Citadine, SUV, 4x4, Mini Bus
            $table->string('image')->nullable(); // L'image ou l'icône de la catégorie
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categorie_vehicules');
    }
};
