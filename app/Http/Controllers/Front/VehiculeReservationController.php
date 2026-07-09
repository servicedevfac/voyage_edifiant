<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\CategorieVehicule;
use App\Models\Devisvehicule;
use App\Mail\ReservationVehiculeMail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Vehicule;

class VehiculeReservationController extends Controller
{
    public function create()
    {
        $categories = CategorieVehicule::with(['vehicules' => function($query) {
            $query->where('statut', true);
        }])->get();

        return view('home.locationvehicule', compact('categories'));
    }

    public function createReservation(Vehicule $vehicule)
    {
        if (!$vehicule->statut) {
            return redirect()->route('locationvehicule')->with('error', 'Ce véhicule n\'est pas disponible.');
        }

        return view('home.reservation_vehicule', compact('vehicule'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'vehicule_id' => 'required|exists:vehicules,id',
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'nullable|email',
            'telephone' => 'required|string|max:30',
            'numero_piece' => 'required|string|max:50',
            'date_debut' => 'required|string',
            'date_fin' => 'required|string',
            'heure_prise_en_charge' => 'nullable|string',
            'lieu_prise_en_charge' => 'nullable|string|max:255',
            'lieu_restitution' => 'nullable|string|max:255',
            'avec_chauffeur' => 'boolean',
            'message' => 'nullable|string|max:1000',
        ]);

        $vehicule = Vehicule::findOrFail($request->vehicule_id);

        try {
            $dateDebut = Carbon::createFromFormat('Y-m-d', $request->date_debut);
        } catch (\Exception $e) {
            $dateDebut = Carbon::parse($request->date_debut);
        }
        try {
            $dateFin = Carbon::createFromFormat('Y-m-d', $request->date_fin);
        } catch (\Exception $e) {
            $dateFin = Carbon::parse($request->date_fin);
        }
        
        // Calcul du nombre de jours (minimum 1 jour)
        $jours = $dateDebut->diffInDays($dateFin) + 1;
        $prixTotal = $jours * $vehicule->prix_jour;

        $reservation = Devisvehicule::create([
            'vehicule_id' => $vehicule->id,
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'numerotel' => $request->telephone,
            'numeropiece' => $request->numero_piece,
            'datedebut' => $dateDebut->format('Y-m-d'),
            'datefin' => $dateFin->format('Y-m-d'),
            'heure_prise_en_charge' => $request->heure_prise_en_charge,
            'lieu_prise_en_charge' => $request->lieu_prise_en_charge,
            'lieu_restitution' => $request->lieu_restitution,
            'avec_chauffeur' => $request->has('avec_chauffeur'),
            'prix_total' => $prixTotal,
            'statut' => 'en_attente',
            'message' => $request->message ?? '',
        ]);

        try {
            if ($request->email) {
                Mail::to($request->email)
                    ->bcc('djuekouassicelestin@gmail.com')
                    ->send(new ReservationVehiculeMail($reservation));
            } else {
                Mail::to('djuekouassicelestin@gmail.com')
                    ->send(new ReservationVehiculeMail($reservation));
            }
        } catch (\Exception $e) {
            // On peut logguer l'erreur si besoin, mais on ne bloque pas la réservation
            \Illuminate\Support\Facades\Log::error("Erreur lors de l'envoi de l'e-mail de réservation : " . $e->getMessage());
        }

        // Redirection avec message de succès
        return redirect()->back()->with('success', 'Votre demande de réservation a été enregistrée avec succès. Notre équipe vous contactera sous peu.');
    }
}
