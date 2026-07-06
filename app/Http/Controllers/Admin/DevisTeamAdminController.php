<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Devisteam;
use App\Models\Teambuilding;
use Illuminate\Http\Request;

class DevisTeamAdminController extends Controller
{
    public function index()
    {
        $devisteams = Devisteam::all();
        return view('dashboard.devisteams.index', compact('devisteams'));
    }

    public function show(Devisteam $devisteam)
    {
        return view('dashboard.devisteams.show', compact('devisteam'));
    }

    public function destroy(Devisteam $devisteam)
    {
        $devisteam->delete();
        return redirect()->route('devisteam.index')->with('status', 'Reservation supprimé avec succès');
    }

    public function index_tb()
    {
        $teambuildings = Teambuilding::all();
        return view('dashboard.teambuilding.index', compact('teambuildings'));
    }

    public function create_tb()
    {
        return view('dashboard.teambuilding.create');
    }

    public function store_tb(Request $request)
    {
        // 1. Validation des données
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'nom_lieu' => 'required|string|max:255',
            'activites' => 'array|nullable',
            'activites.*' => 'string',
            'content' => 'nullable|string',
            'imgs.*' => 'required|mimes:jpeg,png,jpg|max:2048',
        ]);

        // 2. Traitement des fichiers images
        $imagePaths = [];
        if ($request->hasFile('imgs')) {
            foreach ($request->file('imgs') as $key => $img) {
                $filename = 'imgs_' . time() . '_' . $key . '.' . $img->getClientOriginalExtension();
                $img->move(public_path('uploads/teambuilding/'), $filename);
                $imagePaths[] = 'uploads/teambuilding/' . $filename;
            }
        }

        // 3. Sauvegarde dans la base de données
        $teamBuilding = new Teambuilding();
        $teamBuilding->titre = $validated['titre'];
        $teamBuilding->nom_lieu = $validated['nom_lieu'];
        $teamBuilding->activite = $request->activites ? json_encode($request->activites) : null;
        $teamBuilding->courte_description = $validated['content'] ?? null;
        $teamBuilding->images = json_encode($imagePaths);
        $teamBuilding->save();

        // 4. Redirection avec message de succès
        return redirect()->route('teambuilding.liste')->with('success', 'Team Building ajouté avec succès!');
    }
}
