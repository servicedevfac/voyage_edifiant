<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Decouverte extends Model
{
    protected $fillable = [
        'nom_ville', 'titre', 'description', 'imageprincipale', 'slug', 'imagesecondaire',
    ];
}
