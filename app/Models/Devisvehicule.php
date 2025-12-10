<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Devisvehicule extends Model
{
    protected $fillable = [
        'nom', 'prenom', 'email', 'numerotel', 'numeropiece', 'marque', 'nomvehicule', 'datedebut', 'datefin', 'message',
    ];
}
