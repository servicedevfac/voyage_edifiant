<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Devisvehicule;
use Illuminate\Http\Request;

class VehiculeAdminController extends Controller
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

    public function updateStatus(Request $request, Devisvehicule $devisvehicule)
    {
        $request->validate([
            'statut' => 'required|in:en_attente,confirme,annule'
        ]);

        $devisvehicule->update([
            'statut' => $request->statut
        ]);

        return redirect()->back()->with('status', 'Statut de la réservation mis à jour avec succès');
    }
}
