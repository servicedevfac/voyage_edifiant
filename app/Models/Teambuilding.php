<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teambuilding extends Model
{
    protected $fillable = [
        'titre', 'nom_lieu', 'activite', 'courte_description', 'images'
    ];
<<<<<<< HEAD
=======

    protected $casts = [
        'images' => 'array',
        'activite' => 'array',
    ];
>>>>>>> djuedev
}
