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
        Schema::create('vehicules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categorie_vehicule_id')->constrained('categorie_vehicules')->onDelete('cascade');
            $table->string('nom');
            $table->integer('portes')->default(4);
            $table->integer('valises')->default(3);
            $table->integer('sieges')->default(5);
            $table->string('boite_vitesse')->default('Manuelle');
            $table->string('energie')->default('Essence');
            $table->boolean('climatisation')->default(true);
            $table->integer('prix_jour');
            $table->string('image')->nullable();
            $table->boolean('statut')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicules');
    }
};
