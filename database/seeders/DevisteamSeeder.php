<?php

namespace Database\Seeders;

use App\Models\Devisteam;
use Illuminate\Database\Seeder;

class DevisteamSeeder extends Seeder
{
    public function run(): void
    {
        $devis = [
            [
                'profil' => 'entreprise',
                'nom' => 'Konan',
                'prenom' => 'Patrick',
                'email' => 'patrick.konan@socaci.ci',
                'telephone' => '0707456789',
                'nbrepers' => 45,
                'typedactivite' => 'Randonnée',
                'apartir' => '2026-08-01',
                'jusquau' => '2026-08-02',
                'message' => 'Nous souhaitons organiser un team building de 2 jours pour nos 45 collaborateurs. Budget estimé : 5 000 000 FCFA. Nous voulons des activités sportives et une soirée animée.',
            ],
            [
                'profil' => 'entreprise',
                'nom' => 'Dje',
                'prenom' => 'Brigitte',
                'email' => 'brigitte.dje@banque-ci.com',
                'telephone' => '0505123789',
                'nbrepers' => 25,
                'typedactivite' => 'Balade à vélo',
                'apartir' => '2026-09-15',
                'jusquau' => '2026-09-15',
                'message' => 'Organisation d\'une demi-journée de team building pour le département marketing. Activités créatives et collaboratives souhaitées. Repas inclus.',
            ],
            [
                'profil' => 'particulier',
                'nom' => 'Esso',
                'prenom' => 'Hervé',
                'email' => 'herve.esso@gmail.com',
                'telephone' => '0101987654',
                'nbrepers' => 15,
                'typedactivite' => 'Autre activité',
                'apartir' => '2026-07-20',
                'jusquau' => '2026-07-21',
                'message' => 'Je planifie un weekend d\'activités pour un groupe d\'amis (15 personnes). Nous aimerions un lieu avec piscine, barbecue et jeux. Budget flexible.',
            ],
        ];

        foreach ($devis as $devi) {
            Devisteam::create($devi);
        }
    }
}
