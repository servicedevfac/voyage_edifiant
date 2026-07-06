<?php

namespace Database\Seeders;

use App\Models\Decouverte;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DecouverteSeeder extends Seeder
{
    public function run(): void
    {
        $decouvertes = [
            [
                'nom_ville' => 'Assinie',
                'titre' => 'Assinie, la perle balnéaire',
                'description' => '<p>L\'immanquable Assinie est une destination paradisiaque lovée entre lagunes, lacs & océan. Profitez d\'un calme et d\'une quiétude sans pareils. Cette cité verte est bordée par ses multiples atouts balnéaires et écologiques, où vous évader de la vie quotidienne pour des moments plus relaxants.</p><p>Avec ses plages de sable fin, ses cocotiers et ses eaux turquoise, Assinie est le lieu idéal pour un weekend de détente en famille ou entre amis. Découvrez également le Parc National des Îles Ehotilé, un sanctuaire de biodiversité unique en son genre.</p>',
                'imageprincipale' => 'assets/front/images/un-havre-de-paix.jpg',
                'slug' => 'assinie-la-perle-balneaire',
                'imagesecondaire' => json_encode([
                    'assets/front/images/waska-village-restaurant.jpg',
                    'assets/front/images/Melya-Plage-Jacqueville_1_BAAB.jpg',
                ]),
            ],
            [
                'nom_ville' => 'Grand-Bassam',
                'titre' => 'Grand-Bassam, patrimoine mondial',
                'description' => '<p>Grand-Bassam, ancienne capitale coloniale de la Côte d\'Ivoire, est inscrite au patrimoine mondial de l\'UNESCO depuis 2012. Flânez dans le quartier historique France, admirez l\'architecture coloniale et plongez dans l\'histoire fascinante du pays.</p><p>La ville offre également de magnifiques plages où vous pourrez déguster du poisson braisé frais tout en profitant de la brise marine. Le Musée National du Costume y retrace l\'histoire vestimentaire des peuples ivoiriens à travers les époques.</p>',
                'imageprincipale' => 'assets/front/images/waska-village-restaurant.jpg',
                'slug' => 'grand-bassam-patrimoine-mondial',
                'imagesecondaire' => json_encode([
                    'assets/front/images/un-havre-de-paix.jpg',
                ]),
            ],
            [
                'nom_ville' => 'Yamoussoukro',
                'titre' => 'Yamoussoukro, la capitale politique',
                'description' => '<p>Yamoussoukro, capitale politique de la Côte d\'Ivoire, abrite la célèbre Basilique Notre-Dame de la Paix, la plus grande église chrétienne du monde. Cette merveille architecturale, inspirée de la basilique Saint-Pierre de Rome, est un incontournable de tout voyage en Côte d\'Ivoire.</p><p>La ville offre également le spectacle unique des caïmans sacrés du lac du Palais Présidentiel, nourris quotidiennement devant les visiteurs émerveillés. Découvrez aussi la Fondation Félix Houphouët-Boigny pour la recherche de la paix.</p>',
                'imageprincipale' => 'assets/front/images/Melya-Plage-Jacqueville_1_BAAB.jpg',
                'slug' => 'yamoussoukro-la-capitale-politique',
                'imagesecondaire' => json_encode([
                    'assets/front/images/un-havre-de-paix.jpg',
                    'assets/front/images/waska-village-restaurant.jpg',
                ]),
            ],
            [
                'nom_ville' => 'Man',
                'titre' => 'Man, la cité des 18 montagnes',
                'description' => '<p>Nichée au cœur des montagnes de l\'ouest ivoirien, la ville de Man est surnommée la « cité des 18 montagnes ». Elle offre des paysages spectaculaires : cascades vertigineuses, ponts de lianes séculaires et forêts denses peuplées de singes.</p><p>Ne manquez pas la célèbre Dent de Man, un pic rocheux emblématique qui domine la région. Les ponts de lianes de Lieupleu et la cascade du Mont Tonkpi sont des expériences inoubliables pour les amoureux de la nature et de l\'aventure.</p>',
                'imageprincipale' => 'assets/front/images/La-Cabane-Verte-BAAB-3.jpeg',
                'slug' => 'man-la-cite-des-18-montagnes',
                'imagesecondaire' => json_encode([
                    'assets/front/images/La-cabane-verte_2_BAAB.jpg',
                    'assets/front/images/La-Cabane-Verte_4_BAAB.jpg',
                ]),
            ],
            [
                'nom_ville' => 'Jacqueville',
                'titre' => 'Jacqueville, entre lagune et océan',
                'description' => '<p>Jacqueville est une destination de charme située entre la lagune Ébrié et l\'océan Atlantique. Accessible par la route côtière ou par bateau depuis Abidjan, cette petite ville offre une ambiance paisible loin de l\'agitation urbaine.</p><p>Ses plages désertes, ses villages de pêcheurs authentiques et ses hébergements écologiques en font un lieu parfait pour un séjour ressourçant. Profitez des couchers de soleil spectaculaires sur la lagune et découvrez la culture Alladian, riche en traditions et en histoire.</p>',
                'imageprincipale' => 'assets/front/images/Melya-Plage-Jacqueville_1_BAAB.jpg',
                'slug' => 'jacqueville-entre-lagune-et-ocean',
                'imagesecondaire' => json_encode([
                    'assets/front/images/un-havre-de-paix.jpg',
                    'assets/front/images/waska-village-restaurant.jpg',
                ]),
            ],
            [
                'nom_ville' => 'Korhogo',
                'titre' => 'Korhogo, le cœur du pays Senoufo',
                'description' => '<p>Korhogo, capitale du Nord, est le berceau de la culture Senoufo, l\'une des plus riches du continent africain. Découvrez le village des tisserands, les forgerons traditionnels et les sculpteurs sur bois qui perpétuent un savoir-faire ancestral.</p><p>Le Mont Korhogo offre un panorama époustouflant sur la savane environnante. Ne manquez pas le marché artisanal et les toiles de Korhogo, ces tissus peints à la main qui racontent les mythes et légendes du peuple Senoufo.</p>',
                'imageprincipale' => 'assets/front/images/La-cabane-verte_2_BAAB.jpg',
                'slug' => 'korhogo-le-coeur-du-pays-senoufo',
                'imagesecondaire' => json_encode([
                    'assets/front/images/La-Cabane-Verte-BAAB-3.jpeg',
                    'assets/front/images/La-Cabane-Verte_4_BAAB.jpg',
                ]),
            ],
        ];

        foreach ($decouvertes as $decouverte) {
            Decouverte::create($decouverte);
        }
    }
}
