<?php

namespace Database\Seeders;

use App\Models\Devisvehicule;
use Illuminate\Database\Seeder;

class DevisvehiculeSeeder extends Seeder
{
    public function run(): void
    {
        $reservations = [
            [
                'nom' => 'Bamba',
                'prenom' => 'Moussa',
                'email' => 'moussa.bamba@gmail.com',
                'numerotel' => '0707891234',
                'numeropiece' => 'CI-2024-456789',
                'marque' => 'Toyota',
                'nomvehicule' => 'Land Cruiser',
                'datedebut' => '2026-07-01',
                'datefin' => '2026-07-05',
                'message' => 'Je souhaite louer un Land Cruiser pour un voyage d\'affaires à San Pedro. Besoin d\'un chauffeur expérimenté connaissant bien la route.',
            ],
            [
                'nom' => 'Yao',
                'prenom' => 'Christelle',
                'email' => 'christelle.yao@hotmail.com',
                'numerotel' => '0505432167',
                'numeropiece' => 'CI-2023-123456',
                'marque' => 'Mercedes',
                'nomvehicule' => 'Classe V',
                'datedebut' => '2026-07-15',
                'datefin' => '2026-07-15',
                'message' => 'Besoin d\'un van Mercedes pour le transport des garçons et filles d\'honneur le jour de mon mariage à la Riviera Palmeraie.',
            ],
            [
                'nom' => 'Coulibaly',
                'prenom' => 'Seydou',
                'email' => 'seydou.coulibaly@yahoo.fr',
                'numerotel' => '0101567890',
                'numeropiece' => 'CI-2025-987654',
                'marque' => 'Hyundai',
                'nomvehicule' => 'Tucson',
                'datedebut' => '2026-08-10',
                'datefin' => '2026-08-17',
                'message' => 'Location d\'un SUV pour les vacances avec ma famille (5 personnes). Nous prévoyons de visiter Yamoussoukro, Bouaké et Man.',
            ],
            [
                'nom' => 'N\'Guessan',
                'prenom' => 'Aïcha',
                'email' => 'aicha.nguessan@orange.ci',
                'numerotel' => '0708765432',
                'numeropiece' => 'CI-2024-654321',
                'marque' => 'Toyota',
                'nomvehicule' => 'Corolla',
                'datedebut' => '2026-07-20',
                'datefin' => '2026-07-25',
                'message' => 'Je rentre de France pour les vacances et j\'ai besoin d\'une voiture confortable avec chauffeur pour mes déplacements à Abidjan pendant 5 jours.',
            ],
        ];

        foreach ($reservations as $reservation) {
            Devisvehicule::create($reservation);
        }
    }
}
