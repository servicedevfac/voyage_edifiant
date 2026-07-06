<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    public function run(): void
    {
        $contacts = [
            [
                'nom' => 'Koné',
                'prenom' => 'Aminata',
                'email' => 'aminata.kone@gmail.com',
                'telephone' => '0707123456',
                'profil' => 'personnel',
                'objet' => 'Demande d\'information sur la location de véhicule',
                'message' => 'Bonjour, je souhaite avoir des informations sur vos tarifs de location de véhicule pour un mariage prévu le mois prochain à Abidjan. Merci de me recontacter.',
            ],
            [
                'nom' => 'Diallo',
                'prenom' => 'Ibrahim',
                'email' => 'ibrahim.diallo@entreprise.ci',
                'telephone' => '0505678901',
                'profil' => 'entreprise',
                'objet' => 'Organisation team building pour 50 personnes',
                'message' => 'Nous sommes une entreprise de 50 collaborateurs et nous cherchons à organiser un team building d\'une journée. Pouvez-vous nous proposer un programme sur mesure avec activités et restauration ?',
            ],
            [
                'nom' => 'Touré',
                'prenom' => 'Fatou',
                'email' => 'fatou.toure@yahoo.fr',
                'telephone' => '0101234567',
                'profil' => 'personnel',
                'objet' => 'Excursion à Grand-Bassam',
                'message' => 'Bonjour, nous sommes un groupe de 8 amis et nous aimerions organiser une excursion à Grand-Bassam ce weekend. Est-ce que vous proposez ce type de service ?',
            ],
            [
                'nom' => 'Aka',
                'prenom' => 'Jean-Marc',
                'email' => 'jm.aka@outlook.com',
                'telephone' => '0709876543',
                'profil' => 'personnel',
                'objet' => 'Réservation véhicule avec chauffeur',
                'message' => 'Je suis en déplacement professionnel à Abidjan pour une semaine et j\'aurais besoin d\'un véhicule avec chauffeur. Quels sont vos tarifs journaliers ?',
            ],
            [
                'nom' => 'Ouattara',
                'prenom' => 'Salimata',
                'email' => 'salimata.ouattara@orange.ci',
                'telephone' => '0508765432',
                'profil' => 'entreprise',
                'objet' => 'Partenariat agence de voyage',
                'message' => 'Nous sommes une agence événementielle et nous souhaitons établir un partenariat avec Voyage Édifiant pour proposer vos services à nos clients. Pouvons-nous organiser un rendez-vous ?',
            ],
        ];

        foreach ($contacts as $contact) {
            Contact::create($contact);
        }
    }
}
