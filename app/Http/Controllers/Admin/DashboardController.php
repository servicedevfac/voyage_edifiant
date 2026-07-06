<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agence;
use App\Models\Contact;
use App\Models\Devisteam;
use App\Models\Devisvehicule;

class DashboardController extends Controller
{
    public function index()
    {
        // Récupérer le nombre total d'articles
        $totalContact = Contact::count();
        $nbreReservationVehicule = Devisvehicule::count();
        $nbreTeambuilding = Devisteam::count();
        $nbreReservAgence = Agence::count();
        $dernierscontact = Contact::orderBy('created_at', 'desc')->take(5)->get();

        return view('dashboard.dashboard', compact(
            'dernierscontact',
            'totalContact',
            'nbreReservAgence',
            'nbreReservationVehicule',
            'nbreTeambuilding'
        ));
    }
}
