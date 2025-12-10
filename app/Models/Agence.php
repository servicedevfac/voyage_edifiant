<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agence extends Model
{
    // Spécifier le nom de la table, si nécessaire (Laravel devine généralement le nom de la table à partir du modèle)
    protected $table = 'agences';

    // Définir les attributs que vous pouvez remplir (whitelist)
    protected $fillable = [
        'nom', 'prenom', 'email', 'numero', 'presidence', 'destination', 'apartirdu', 'jusquau', 'nbrejour', 'nbreadulte', 'nbrenft', 'nbrebebe', 'message',
    ];
}
