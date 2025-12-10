<?php

namespace App\Http\Controllers;

use App\Models\Agence;
use App\Models\Contact;
use App\Models\Devisteam;
use App\Models\Devisvehicule;
use Illuminate\Http\Request;

class DashController extends Controller
{
    public function index()
    {
        // Récupérer le nombre total d'articles
        $totalContact = Contact::count();
        $NbreReservationVehicule = Devisvehicule::count();
        $NbreTeambuilding = Devisteam::count();
        $NbreReservAgence = Agence::count();
        $dernierscontact = Contact::orderBy('created_at', 'desc')->take(5)->get();
        
        return view('dashboard.dashboard', compact('dernierscontact', 'totalContact', 'NbreReservAgence', 'NbreReservationVehicule', 'NbreTeambuilding'));
    }
}
