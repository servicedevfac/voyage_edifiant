<?php

namespace Database\Seeders;

use App\Models\CategorieVehicule;
use App\Models\Vehicule;
use Illuminate\Database\Seeder;

class ParcVehiculeSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Création des catégories
        $categories = [
            ['nom' => 'Citadine', 'image' => 'assets/front/images/car5.png'],
            ['nom' => '4 X 4', 'image' => 'assets/front/images/mini_car3.png'],
            ['nom' => 'SUV', 'image' => 'assets/front/images/mini_car2.png'],
            ['nom' => 'Mini Bus', 'image' => 'assets/front/images/mini_car.png'],
        ];

        $catIds = [];
        foreach ($categories as $cat) {
            $created = CategorieVehicule::create($cat);
            $catIds[$cat['nom']] = $created->id;
        }

        // 2. Création des véhicules
        $vehicules = [
            // Citadines
            [
                'categorie_vehicule_id' => $catIds['Citadine'],
                'nom' => 'Suzuki Dzire',
                'portes' => 4, 'valises' => 3, 'sieges' => 5,
                'boite_vitesse' => 'Manuelle', 'energie' => 'Essence', 'climatisation' => true,
                'prix_jour' => 35000, 'image' => 'assets/front/images/citadine_1.png', 'statut' => true
            ],
            [
                'categorie_vehicule_id' => $catIds['Citadine'],
                'nom' => 'Audi A1',
                'portes' => 4, 'valises' => 3, 'sieges' => 5,
                'boite_vitesse' => 'Manuelle', 'energie' => 'Essence', 'climatisation' => true,
                'prix_jour' => 35000, 'image' => 'assets/front/images/citadine-1.png', 'statut' => true
            ],
            [
                'categorie_vehicule_id' => $catIds['Citadine'],
                'nom' => 'Opel Corsa',
                'portes' => 4, 'valises' => 3, 'sieges' => 5,
                'boite_vitesse' => 'Manuelle', 'energie' => 'Essence', 'climatisation' => true,
                'prix_jour' => 35000, 'image' => 'assets/front/images/citadine-2.png', 'statut' => true
            ],

            // 4x4
            [
                'categorie_vehicule_id' => $catIds['4 X 4'],
                'nom' => 'Mitsubishi',
                'portes' => 4, 'valises' => 4, 'sieges' => 5,
                'boite_vitesse' => 'Manuelle', 'energie' => 'Essence', 'climatisation' => true,
                'prix_jour' => 35000, 'image' => 'assets/front/images/car3.png', 'statut' => true
            ],
            [
                'categorie_vehicule_id' => $catIds['4 X 4'],
                'nom' => 'Ford',
                'portes' => 4, 'valises' => 4, 'sieges' => 5,
                'boite_vitesse' => 'Manuelle', 'energie' => 'Essence', 'climatisation' => true,
                'prix_jour' => 35000, 'image' => 'assets/front/images/4x4_1.png', 'statut' => true
            ],
            [
                'categorie_vehicule_id' => $catIds['4 X 4'],
                'nom' => 'Duster DACIA',
                'portes' => 4, 'valises' => 5, 'sieges' => 5,
                'boite_vitesse' => 'Manuelle', 'energie' => 'Essence', 'climatisation' => true,
                'prix_jour' => 35000, 'image' => 'assets/front/images/4x4_2.png', 'statut' => true
            ],

            // SUV
            [
                'categorie_vehicule_id' => $catIds['SUV'],
                'nom' => 'Toyota',
                'portes' => 4, 'valises' => 3, 'sieges' => 5,
                'boite_vitesse' => 'Manuelle', 'energie' => 'Essence', 'climatisation' => true,
                'prix_jour' => 35000, 'image' => 'assets/front/images/suv1.png', 'statut' => true
            ],
            [
                'categorie_vehicule_id' => $catIds['SUV'],
                'nom' => 'Hyundai',
                'portes' => 4, 'valises' => 3, 'sieges' => 5,
                'boite_vitesse' => 'Manuelle', 'energie' => 'Essence', 'climatisation' => true,
                'prix_jour' => 35000, 'image' => 'assets/front/images/suv2.png', 'statut' => true
            ],
            [
                'categorie_vehicule_id' => $catIds['SUV'],
                'nom' => 'SUV Suzuki',
                'portes' => 4, 'valises' => 3, 'sieges' => 5,
                'boite_vitesse' => 'Manuelle', 'energie' => 'Essence', 'climatisation' => true,
                'prix_jour' => 35000, 'image' => 'assets/front/images/suv3.png', 'statut' => true
            ],

            // Mini Bus
            [
                'categorie_vehicule_id' => $catIds['Mini Bus'],
                'nom' => 'Mini Bus Hyundai',
                'portes' => 4, 'valises' => 1, 'sieges' => 12,
                'boite_vitesse' => 'Manuelle', 'energie' => 'Essence', 'climatisation' => true,
                'prix_jour' => 70000, 'image' => 'assets/front/images/mini_bus_voyagedifiant.png', 'statut' => true
            ],
            [
                'categorie_vehicule_id' => $catIds['Mini Bus'],
                'nom' => 'Mini Bus Toyota',
                'portes' => 4, 'valises' => 1, 'sieges' => 12,
                'boite_vitesse' => 'Manuelle', 'energie' => 'Essence', 'climatisation' => true,
                'prix_jour' => 70000, 'image' => 'assets/front/images/mini_bus_voyagedifiant1.png', 'statut' => true
            ],
            [
                'categorie_vehicule_id' => $catIds['Mini Bus'],
                'nom' => 'Mini Bus Hyundai 32 places',
                'portes' => 3, 'valises' => 5, 'sieges' => 32,
                'boite_vitesse' => 'Manuelle', 'energie' => 'Essence', 'climatisation' => true,
                'prix_jour' => 70000, 'image' => 'assets/front/images/mini_bus_voyagedifiant2.png', 'statut' => true
            ],
        ];

        foreach ($vehicules as $vehicule) {
            Vehicule::create($vehicule);
        }
    }
}
