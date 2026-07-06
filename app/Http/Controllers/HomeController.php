<?php

namespace App\Http\Controllers;

use App\Models\Agence;
use App\Models\Contact;
use App\Models\Decouverte;
use App\Models\Devisteam;
use App\Models\Devisvehicule;
use App\Models\Teambuilding;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function accueil()
    {
        $decouverteRecents = Decouverte::latest()->take(3)->get();

        return view('home.accueil', compact('decouverteRecents'));
    }

    public function apropos()
    {
        return view('home.apropos');
    }

    public function locationvehicule()
    {
        return view('home.locationvehicule');
    }

    public function reservationvehicule_store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'nullable|email',
            'telephone' => 'required|string|max:20',
            'numero_piece' => 'required|string|max:50',
            'marque_vehicule' => 'nullable|string|max:100',
            'nom_vehicule' => 'nullable|string|max:100',
            'date_debut' => 'required|date_format:d/m/Y',
            'date_fin' => 'required|date_format:d/m/Y|after_or_equal:date_debut',
<<<<<<< HEAD
            'message' => 'nullable|string|max:1000',
=======
            'message' => 'required|string|max:1000',
>>>>>>> djuedev
        ]);

        // dd($validated);

        // Convertir les dates au bon format
        $dateDebut = Carbon::createFromFormat('d/m/Y', $request->date_debut)->format('Y-m-d');
        $dateFin = Carbon::createFromFormat('d/m/Y', $request->date_fin)->format('Y-m-d');

        Devisvehicule::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'numerotel' => $request->telephone,
            'numeropiece' => $request->numero_piece,
            'marque' => $request->marque_vehicule,
            'nomvehicule' => $request->nom_vehicule,
            'datedebut' => $dateDebut,
            'datefin' => $dateFin,
            'message' => $request->message,
        ]);


        // Redirection avec message de succès
        return redirect()->back()->with('success', 'Réservation enregistrée avec succès.');
    }


    public function teambuilding()
    {
        $tbuildings = Teambuilding::all();
        return view('home.teambuilding', compact('tbuildings'));

    }

    public function store_teambuilding(Request $request)
    {
        $request->validate([
            'profil' => 'required|in:particulier,entreprise',
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telephone' => 'required|regex:/^\d{10}$/',
            'nbrepers' => 'required|integer|min:0',
            'typedactivite' => 'required|string|max:255',
            'apartir' => 'required|date_format:d/m/Y',
            'jusquau' => 'required|date_format:d/m/Y|after_or_equal:apartir',
            'message' => 'required|string|max:1000',
        ]);

        // Convertir les dates au bon format
        $dateDebut = Carbon::createFromFormat('d/m/Y', $request->apartir)->format('Y-m-d');
        $dateFin = Carbon::createFromFormat('d/m/Y', $request->jusquau)->format('Y-m-d');

        Devisteam::create([
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
        

<<<<<<< HEAD
        return redirect()->back()->with('success', 'Devis soumis soumis avec succès!');
=======
        return redirect()->back()->with('success', 'Formulaire soumis avec succès!');
>>>>>>> djuedev

    }

    public function decouverte()
    {
        $decouvertes = Decouverte::all();
        return view('home.decouverte', compact('decouvertes'));
    }

    public function decouverteshow($slug)
    {
         // Récupérer l'article par son slug
        $decouverte = Decouverte::where('slug', $slug)->firstOrFail();
        $decouverteRecents = Decouverte::latest()->take(3)->get();


        return view('home.decouverteshow', compact('decouverte', 'decouverteRecents'));
    }

    public function agence()
    {
        return view('home.agence');
    }

    public function store_agence(Request $request)
    {
        $all_request = $request->validate([
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

        Agence::create([
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

<<<<<<< HEAD
        return redirect()->back()->with('success','Formulaire enregistré avec succès');
=======
        return redirect()->back()->with('status','Agence enregistré avec succès');
>>>>>>> djuedev


    }

    public function contact()
    {
        return view('home.contact');
    }

    public function store_contact(Request $request)
    {
        // Validation des données du formulaire
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telephone' => 'required|string|max:15',
            'profil' => 'required|string|in:entreprise,personnel',
            'objet' => 'required|string|max:255',
            'message' => 'required|string',
        ]);


        $contact = new Contact();
        $contact->nom = $request->nom;
        $contact->prenom = $request->prenom;
        $contact->email = $request->email;
        $contact->telephone = $request->telephone;
        $contact->profil = $request->profil;
        $contact->objet = $request->objet;
        $contact->message = $request->message;
        $contact->save();
        
<<<<<<< HEAD
        return redirect()->back()->with('success','Message enregistré avec succès');
=======
        return redirect()->back()->with('status','Message enregistré avec succès');
>>>>>>> djuedev
    }

}
