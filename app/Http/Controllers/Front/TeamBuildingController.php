<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Devisteam;
use App\Models\Teambuilding;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Mail\TeamBuildingReservationMail;
use Illuminate\Support\Facades\Mail;

class TeamBuildingController extends Controller
{
    public function index()
    {
        $tbuildings = Teambuilding::all();
        return view('home.teambuilding', compact('tbuildings'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'profil' => 'required|in:particulier,entreprise',
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telephone' => 'required|string|max:30',
            'nbrepers' => 'required|integer|min:0',
            'typedactivite' => 'required|string|max:255',
            'apartir' => 'required|string',
            'jusquau' => 'required|string',
            'message' => 'required|string|max:1000',
        ]);

        // Convertir les dates au bon format en gérant d/m/Y et Y-m-d
        try {
            $dateDebut = Carbon::createFromFormat('d/m/Y', $request->apartir)->format('Y-m-d');
        } catch (\Exception $e) {
            $dateDebut = Carbon::parse($request->apartir)->format('Y-m-d');
        }

        try {
            $dateFin = Carbon::createFromFormat('d/m/Y', $request->jusquau)->format('Y-m-d');
        } catch (\Exception $e) {
            $dateFin = Carbon::parse($request->jusquau)->format('Y-m-d');
        }

        $devisteam = Devisteam::create([
            'profil' => $request->profil,
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'nbrepers' => $request->nbrepers,
            'typedactivite' => $request->typedactivite,
            'apartir' => $dateDebut,
            'jusquau' => $dateFin,
            'message' => $request->message,
        ]);

        try {
            if ($request->email) {
                Mail::to($request->email)
                    ->bcc('djuekouassicelestin@gmail.com')
                    ->send(new TeamBuildingReservationMail($devisteam));
            } else {
                Mail::to('djuekouassicelestin@gmail.com')
                    ->send(new TeamBuildingReservationMail($devisteam));
            }
        } catch (\Exception $e) {
            \Illuminate\Support\Facades\Log::error("Erreur lors de l'envoi de l'e-mail de réservation Team Building : " . $e->getMessage());
        }

        return redirect()->back()->with('success', 'Formulaire soumis avec succès!');
    }
}
