<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Agence;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Mail\AgenceReservationMail;
use Illuminate\Support\Facades\Mail;

class AgenceReservationController extends Controller
{
    public function create()
    {
        return view('home.agence');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'numero' => 'required|string|max:20',
            'presidence' => 'required|string|max:255',
            'destination' => 'required|string|max:255',
            'apartirdu' => 'required|date_format:d/m/Y',
            'jusquau' => 'required|date_format:d/m/Y|after_or_equal:apartirdu',
            'nbrejour' => 'required|integer|min:1',
            'nbreadulte' => 'required|integer|min:0',
            'nbrenft' => 'required|integer|min:0',
            'nbrebebe' => 'required|integer|min:0',
            'message' => 'string|max:2000',
        ]);

        // Convertir les dates au bon format
        $dateDebut = Carbon::createFromFormat('d/m/Y', $request->apartirdu)->format('Y-m-d');
        $dateFin = Carbon::createFromFormat('d/m/Y', $request->jusquau)->format('Y-m-d');

        $agence = Agence::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'numero' => $request->numero,
            'presidence' => $request->presidence,
            'destination' => $request->destination,
            'apartirdu' => $dateDebut,
            'jusquau' => $dateFin,
            'nbrejour' => $request->nbrejour,
            'nbreadulte' => $request->nbreadulte,
            'nbrenft' => $request->nbrenft,
            'nbrebebe' => $request->nbrebebe,
            'message' => $request->message,
        ]);

        try {
            if ($request->email) {
                Mail::to($request->email)
                    ->bcc('djuekouassicelestin@gmail.com')
                    ->send(new AgenceReservationMail($agence));
            } else {
                Mail::to('djuekouassicelestin@gmail.com')
                    ->send(new AgenceReservationMail($agence));
            }
        } catch (\Exception $e) {
            \Illuminate\Support\Facades\Log::error("Erreur lors de l'envoi de l'e-mail de réservation Agence : " . $e->getMessage());
        }

        return redirect()->back()->with('status', 'Agence enregistré avec succès');
    }
}
