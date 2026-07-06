<?php

namespace App\Http\Controllers;

use App\Models\Agence;
use Illuminate\Http\Request;

class AgenceController extends Controller
{
    public function index()
    {
        $agences = Agence::all();
        return view('dashboard.agences.index', compact('agences'));
    }

    public function show(Agence $agence)
    {
        return view('dashboard.agences.show', compact('agence'));
        
    }

    public function destroy(Agence $agence)
    {
        $agence->delete();
        return redirect()->route('agence.index')->with('status', 'Reservation supprimé avec succès');
    }
}
