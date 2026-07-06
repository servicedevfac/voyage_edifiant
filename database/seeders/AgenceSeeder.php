<?php

namespace Database\Seeders;

use App\Models\Agence;
use Illuminate\Database\Seeder;

class AgenceSeeder extends Seeder
{
    public function run(): void
    {
        $reservations = [
            [
                'nom' => 'Traoré',
                'prenom' => 'Mamadou',
                'email' => 'mamadou.traore@gmail.com',
                'numero' => '0707234567',
                'presidence' => 'Abidjan',
                'destination' => 'Yamoussoukro',
                'apartirdu' => '2026-08-01',
                'jusquau' => '2026-08-05',
                'nbrejour' => 5,
                'nbreadulte' => 2,
                'nbrenft' => 3,
                'nbrebebe' => 0,
                'message' => 'Voyage familial pour découvrir la Basilique Notre-Dame de la Paix et le lac aux crocodiles. Nous avons besoin d\'un hébergement confortable et d\'un guide local.',
            ],
            [
                'nom' => 'Gnamba',
                'prenom' => 'Estelle',
                'email' => 'estelle.gnamba@outlook.com',
                'numero' => '0505876543',
                'presidence' => 'Bouaké',
                'destination' => 'Man',
                'apartirdu' => '2026-09-10',
                'jusquau' => '2026-09-14',
                'nbrejour' => 4,
                'nbreadulte' => 4,
                'nbrenft' => 0,
                'nbrebebe' => 0,
                'message' => 'Excursion entre amis dans la région des 18 montagnes. Nous voulons voir les ponts de lianes, la Dent de Man et les cascades. Transport depuis Bouaké souhaité.',
            ],
            [
                'nom' => 'Koffi',
                'prenom' => 'Alain',
                'email' => 'alain.koffi@entreprise.ci',
                'numero' => '0101345678',
                'presidence' => 'Abidjan',
                'destination' => 'Assinie',
                'apartirdu' => '2026-07-25',
                'jusquau' => '2026-07-27',
                'nbrejour' => 3,
                'nbreadulte' => 2,
                'nbrenft' => 1,
                'nbrebebe' => 1,
                'message' => 'Weekend en famille à Assinie pour profiter de la plage et de la lagune. Nous cherchons un hébergement les pieds dans l\'eau avec pension complète si possible.',
            ],
        ];

        foreach ($reservations as $reservation) {
            Agence::create($reservation);
        }
    }
}
