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
        Schema::create('devisteams', function (Blueprint $table) {
            $table->id();
            $table->enum('profil', ['particulier', 'entreprise']); // Profil sélectionné
            $table->string('nom'); // Nom de l'utilisateur
            $table->string('prenom'); // Prénom de l'utilisateur
            $table->string('email'); // Email unique
            $table->string('telephone'); // Numéro de téléphone
            $table->integer('nbrepers'); // Nombre de personnes
            $table->string('typedactivite'); // Type d'activité
            $table->date('apartir'); // Date de début
            $table->date('jusquau'); // Date de fin
            $table->text('message'); // Message
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('devisteams');
    }
};
