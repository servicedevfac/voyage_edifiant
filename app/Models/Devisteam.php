<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Devisteam extends Model
{
    // // Spécifier le nom de la table si différent de 'formulars'
    // protected $table = 'formulars';

    // Spécifier les colonnes pouvant être mass-assignées (pour la création ou mise à jour)
    protected $fillable = [
        'profil', 'nom', 'prenom', 'email', 'telephone', 'nbrepers', 'typedactivite', 'apartir', 'jusquau', 'message',
    ];
}
