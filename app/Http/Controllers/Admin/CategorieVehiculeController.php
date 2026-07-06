<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategorieVehicule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CategorieVehiculeController extends Controller
{
    public function index()
    {
        $categories = CategorieVehicule::all();
        return view('dashboard.categories_vehicules.index', compact('categories'));
    }

    public function create()
    {
        return view('dashboard.categories_vehicules.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->except('image');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/categories'), $imageName);
            $data['image'] = 'uploads/categories/' . $imageName;
        }

        CategorieVehicule::create($data);

        return redirect()->route('categories_vehicules.index')->with('success', 'Catégorie de véhicule ajoutée avec succès.');
    }

    public function edit(CategorieVehicule $categories_vehicule)
    {
        return view('dashboard.categories_vehicules.edit', compact('categories_vehicule'));
    }

    public function update(Request $request, CategorieVehicule $categories_vehicule)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->except('image');

        if ($request->hasFile('image')) {
            // Delete old image
            if ($categories_vehicule->image && file_exists(public_path($categories_vehicule->image))) {
                unlink(public_path($categories_vehicule->image));
            }

            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/categories'), $imageName);
            $data['image'] = 'uploads/categories/' . $imageName;
        }

        $categories_vehicule->update($data);

        return redirect()->route('categories_vehicules.index')->with('success', 'Catégorie de véhicule modifiée avec succès.');
    }

    public function destroy(CategorieVehicule $categories_vehicule)
    {
        if ($categories_vehicule->image && file_exists(public_path($categories_vehicule->image))) {
            unlink(public_path($categories_vehicule->image));
        }

        $categories_vehicule->delete();

        return redirect()->route('categories_vehicules.index')->with('success', 'Catégorie de véhicule supprimée avec succès.');
    }
}
