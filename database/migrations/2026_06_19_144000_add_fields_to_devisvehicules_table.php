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
        Schema::table('devisvehicules', function (Blueprint $table) {
            $table->foreignId('vehicule_id')->nullable()->constrained('vehicules')->onDelete('set null');
            $table->time('heure_prise_en_charge')->nullable();
            $table->string('lieu_prise_en_charge')->nullable();
            $table->string('lieu_restitution')->nullable();
            $table->boolean('avec_chauffeur')->default(false);
            $table->decimal('prix_total', 10, 2)->nullable();
            $table->string('statut')->default('en_attente'); // en_attente, confirme, annule
            
            // On peut rendre nullable les anciens champs s'ils ne sont plus utilisés, 
            // ou les garder pour l'historique
            $table->string('marque')->nullable()->change();
            $table->string('nomvehicule')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Remplir les valeurs NULL avec une valeur par défaut pour éviter l'erreur "Not null violation" lors du rollback (PostgreSQL / MySQL)
        \Illuminate\Support\Facades\DB::table('devisvehicules')->whereNull('marque')->update(['marque' => 'N/A']);
        \Illuminate\Support\Facades\DB::table('devisvehicules')->whereNull('nomvehicule')->update(['nomvehicule' => 'N/A']);

        Schema::table('devisvehicules', function (Blueprint $table) {
            $table->dropForeign(['vehicule_id']);
            $table->dropColumn([
                'vehicule_id',
                'heure_prise_en_charge',
                'lieu_prise_en_charge',
                'lieu_restitution',
                'avec_chauffeur',
                'prix_total',
                'statut'
            ]);
            $table->string('marque')->nullable(false)->change();
            $table->string('nomvehicule')->nullable(false)->change();
        });
    }
};
