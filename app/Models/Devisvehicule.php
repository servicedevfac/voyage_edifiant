<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Devisvehicule extends Model
{
    protected $fillable = [
        'nom', 'prenom', 'email', 'numerotel', 'numeropiece', 'marque', 'nomvehicule', 
        'datedebut', 'datefin', 'message', 'vehicule_id', 'heure_prise_en_charge', 
        'lieu_prise_en_charge', 'lieu_restitution', 'avec_chauffeur', 'prix_total', 'statut'
    ];

    public function vehicule()
    {
        return $this->belongsTo(Vehicule::class);
    }
}
