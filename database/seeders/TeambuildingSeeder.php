<?php

namespace Database\Seeders;

use App\Models\Teambuilding;
use Illuminate\Database\Seeder;

class TeambuildingSeeder extends Seeder
{
    public function run(): void
    {
        $teambuildings = [
            [
                'titre' => 'Excursion à la Cabane Verte',
                'nom_lieu' => 'La Cabane Verte - Bingerville',
                'activite' => json_encode(['Piscine', 'Tir à la carabine', 'Vélo', 'Maracana', 'Trampoline', 'Jeux de société traditionnelle']),
                'courte_description' => 'Amoureux de la nature, ce nouvel écogîte est fait pour vous. La Cabane Verte est devenue une adresse confidentielle pour les amateurs d\'échappées belles et de retraites paisibles au vert. Un cadre idéal pour renforcer la cohésion de votre équipe.',
                'images' => json_encode([
                    'assets/front/images/La-Cabane-Verte-BAAB-3.jpeg',
                    'assets/front/images/La-cabane-verte_2_BAAB.jpg',
                    'assets/front/images/La-Cabane-Verte_4_BAAB.jpg',
                ]),
            ],
            [
                'titre' => 'Journée détente à Assinie',
                'nom_lieu' => 'Assinie-Mafia',
                'activite' => json_encode(['Beach volley', 'Jet ski', 'Kayak', 'Barbecue', 'Course en sac', 'Quiz culture CI']),
                'courte_description' => 'Offrez à vos collaborateurs une journée inoubliable entre lagune et océan. Des activités sportives et ludiques dans un cadre paradisiaque pour souder vos équipes et créer des souvenirs mémorables.',
                'images' => json_encode([
                    'assets/front/images/un-havre-de-paix.jpg',
                    'assets/front/images/Melya-Plage-Jacqueville_1_BAAB.jpg',
                ]),
            ],
            [
                'titre' => 'Challenge aventure en forêt',
                'nom_lieu' => 'Banco National Park - Abidjan',
                'activite' => json_encode(['Randonnée guidée', 'Course d\'orientation', 'Accrobranche', 'Pique-nique nature', 'Atelier survie']),
                'courte_description' => 'Un team building sportif et challengeant au cœur de la forêt du Banco. Vos équipes seront mises à l\'épreuve à travers des défis nature qui renforcent la solidarité, la communication et le leadership.',
                'images' => json_encode([
                    'assets/front/images/waska-village-restaurant.jpg',
                    'assets/front/images/La-Cabane-Verte-BAAB-3.jpeg',
                ]),
            ],
        ];

        foreach ($teambuildings as $tb) {
            Teambuilding::create($tb);
        }
    }
}
