<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Vehicule extends Model
{
    use HasFactory;

    protected $fillable = [
        'categorie_vehicule_id',
        'nom',
        'slug',
        'portes',
        'valises',
        'sieges',
        'boite_vitesse',
        'energie',
        'climatisation',
        'prix_jour',
        'image',
        'statut',
    ];

    protected $casts = [
        'climatisation' => 'boolean',
        'statut' => 'boolean',
        'prix_jour' => 'integer',
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($vehicule) {
            if (empty($vehicule->slug)) {
                $vehicule->slug = Str::slug($vehicule->nom);
            }
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function categorie()
    {
        return $this->belongsTo(CategorieVehicule::class, 'categorie_vehicule_id');
    }

    public function reservations()
    {
        return $this->hasMany(Devisvehicule::class);
    }
}
