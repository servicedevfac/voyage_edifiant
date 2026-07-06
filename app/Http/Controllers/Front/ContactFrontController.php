<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

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
            'telephone' => 'required|string|max:30',
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

        try {
            if ($request->email) {
                Mail::to($request->email)
                    ->bcc('djuekouassicelestin@gmail.com')
                    ->send(new ContactMail($contact));
            } else {
                Mail::to('djuekouassicelestin@gmail.com')
                    ->send(new ContactMail($contact));
            }
        } catch (\Exception $e) {
            \Illuminate\Support\Facades\Log::error("Erreur lors de l'envoi de l'e-mail de contact : " . $e->getMessage());
        }

        return redirect()->back()->with('status', 'Message enregistré et envoyé avec succès.');
    }
}
