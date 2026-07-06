<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactAdminController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('dashboard.contacts.index', compact('contacts'));
    }

    public function show(Contact $contact)
    {
        return view('dashboard.contacts.show', compact('contact'));
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contact.index')->with('status', 'Contact supprimé avec succès');
    }
}
