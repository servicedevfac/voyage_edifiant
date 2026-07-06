<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactFrontController extends Controller
{
    public function create()
    {
        return view('home.contact');
    }

    public function store(Request $request)
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

        return redirect()->back()->with('status', 'Message enregistré avec succès');
    }
}
