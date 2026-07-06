<?php

namespace App\Http\Controllers;

use App\Models\Devisvehicule;
use App\Models\Typevehicule;
use Illuminate\Http\Request;

class VehiculeController extends Controller
{
    public function index()
    {
        $reservationvehicule = Devisvehicule::all();
        return view('dashboard.vehicules.index', compact('reservationvehicule'));
    }

    public function show(Devisvehicule $devisvehicule)
    {
        return view('dashboard.vehicules.show', compact('devisvehicule'));
    }

    public function destroy(Devisvehicule $devisvehicule)
    {
        $devisvehicule->delete();
        return redirect()->route('vehicule.index')->with('status', 'Reservation supprimé avec succès');
    }

}
