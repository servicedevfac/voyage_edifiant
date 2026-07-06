<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategorieVehicule;
use App\Models\Vehicule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ParcVehiculeController extends Controller
{
    public function index()
    {
        $vehicules = Vehicule::with('categorie')->get();
        return view('dashboard.parc_vehicules.index', compact('vehicules'));
    }

    public function create()
    {
        $categories = CategorieVehicule::all();
        return view('dashboard.parc_vehicules.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'categorie_vehicule_id' => 'required|exists:categorie_vehicules,id',
            'nom' => 'required|string|max:255',
            'portes' => 'required|integer|min:1',
            'valises' => 'required|integer|min:0',
            'sieges' => 'required|integer|min:1',
            'boite_vitesse' => 'required|string',
            'energie' => 'required|string',
            'climatisation' => 'boolean',
            'prix_jour' => 'required|integer|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'statut' => 'boolean',
        ]);

        $data = $request->except('image');
        $data['climatisation'] = $request->has('climatisation');
        $data['statut'] = $request->has('statut');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/vehicules'), $imageName);
            $data['image'] = 'uploads/vehicules/' . $imageName;
        }

        Vehicule::create($data);

        return redirect()->route('parc_vehicules.index')->with('success', 'Véhicule ajouté avec succès.');
    }

    public function edit(Vehicule $parc_vehicule)
    {
        $categories = CategorieVehicule::all();
        return view('dashboard.parc_vehicules.edit', compact('parc_vehicule', 'categories'));
    }

    public function update(Request $request, Vehicule $parc_vehicule)
    {
        $request->validate([
            'categorie_vehicule_id' => 'required|exists:categorie_vehicules,id',
            'nom' => 'required|string|max:255',
            'portes' => 'required|integer|min:1',
            'valises' => 'required|integer|min:0',
            'sieges' => 'required|integer|min:1',
            'boite_vitesse' => 'required|string',
            'energie' => 'required|string',
            'prix_jour' => 'required|integer|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->except('image');
        $data['climatisation'] = $request->has('climatisation');
        $data['statut'] = $request->has('statut');

        if ($request->hasFile('image')) {
            // Delete old image
            if ($parc_vehicule->image && file_exists(public_path($parc_vehicule->image))) {
                unlink(public_path($parc_vehicule->image));
            }

            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/vehicules'), $imageName);
            $data['image'] = 'uploads/vehicules/' . $imageName;
        }

        $parc_vehicule->update($data);

        return redirect()->route('parc_vehicules.index')->with('success', 'Véhicule modifié avec succès.');
    }

    public function destroy(Vehicule $parc_vehicule)
    {
        if ($parc_vehicule->image && file_exists(public_path($parc_vehicule->image))) {
            unlink(public_path($parc_vehicule->image));
        }

        $parc_vehicule->delete();

        return redirect()->route('parc_vehicules.index')->with('success', 'Véhicule supprimé avec succès.');
    }
}
