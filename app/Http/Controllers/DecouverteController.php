<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Decouverte;
use Illuminate\Http\Request;

class DecouverteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $decouvertes = Decouverte::all();
        return view('dashboard.decouvertes.index', compact('decouvertes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.decouvertes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation des données
        $request->validate([
            'titre' => 'required|string|max:255',
            'imgdecouverte' => 'required|mimes:jpeg,png,jpg|max:2048',
            'nom_ville' => 'required|string|max:255',
            'imgsecondaire.*' =>'required|mimes:jpeg,png,jpg|max:2048',
            'content' => 'required|string',
        ]);

        // Génération du slug à partir du nom
        $slug = Str::slug($request->titre);

        // Vérifie l'unicité du slug (ajout d'un suffixe si nécessaire)
        $originalSlug = $slug;
        $counter = 1;
        while (Decouverte::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }


        // Upload de l'image
        if($request->has('imgdecouverte'))
        {
            $file = $request->file('imgdecouverte');
            $filename = 'principale_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/decouvertes/'), $filename);
            $imgPrincipalePath = 'uploads/decouvertes/' . $filename;
        }


        // Traitement des images secondaires (en tableau)
        $imgSecondaires = [];
        if ($request->hasFile('imgsecondaire')) {
            foreach ($request->file('imgsecondaire') as $key => $img) {
                $filename = 'secondaire_' . time() . '_' . $key . '.' . $img->getClientOriginalExtension();
                $img->move(public_path('uploads/decouvertes/'), $filename);
                $imgSecondaires[] = 'uploads/decouvertes/' . $filename;
            }
        }

        // Sauvegarde dans la base de données
        Decouverte::create([
            'nom_ville' => $request ->nom_ville,
            'titre' => $request->titre,
            'imageprincipale' => $imgPrincipalePath,
            'slug' => $slug,
            'imagesecondaire' => json_encode($imgSecondaires),
            'description' => $request->content,
        ]);

        return redirect()->route('decouverte.index')->with('success', 'Découverte ajoutée avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Decouverte $decouverte)
    {
        return view("dashboard.decouvertes.show", compact('decouverte'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Decouverte $decouverte)
    {
        return view("dashboard.decouvertes.edit", compact('decouverte'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Decouverte $decouverte)
    {
       
        // Validation des données
        $request->validate([
            'titre' => 'required|string|max:255',
            'imgdecouverte' => 'nullable|mimes:jpeg,png,jpg|max:2048',
            'nom_ville' => 'required|string|max:255',
            'imgsecondaire.*' => 'nullable|mimes:jpeg,png,jpg|max:2048',
            'content' => 'required|string',
        ]);

        // Génération du slug à partir du titre
        $slug = Str::slug($request->titre);
        $originalSlug = $slug;
        $counter = 1;

        // Assurer unicité du slug sauf pour cette découverte
        while (
            Decouverte::where('slug', $slug)->where('id', '!=', $decouverte->id)->exists()
        ) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        // Gestion de l'image principale
        if ($request->hasFile('imgdecouverte')) {
            // Supprimer l'ancienne image si besoin (optionnel)
            if ($decouverte->imageprincipale && file_exists(public_path($decouverte->imageprincipale))) {
                unlink(public_path($decouverte->imageprincipale));
            }

            $file = $request->file('imgdecouverte');
            $filename = 'principale_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/decouvertes/'), $filename);
            $imgPrincipalePath = 'uploads/decouvertes/' . $filename;
        } else {
            $imgPrincipalePath = $decouverte->imageprincipale;
        }

        // Gestion des images secondaires (ajout)
        $imgSecondaires = json_decode($decouverte->imagesecondaire, true) ?? [];

        if ($request->hasFile('imgsecondaire')) {
            foreach ($request->file('imgsecondaire') as $key => $img) {
                $filename = 'secondaire_' . time() . '_' . $key . '.' . $img->getClientOriginalExtension();
                $img->move(public_path('uploads/decouvertes/'), $filename);
                $imgSecondaires[] = 'uploads/decouvertes/' . $filename;
            }
        }

        // Mise à jour de la découverte
        $decouverte->update([
            'nom_ville' => $request->nom_ville,
            'titre' => $request->titre,
            'imageprincipale' => $imgPrincipalePath,
            'slug' => $slug,
            'imagesecondaire' => json_encode($imgSecondaires),
            'description' => $request->content,
        ]);

        return redirect()->route('decouverte.index')->with('success', 'Découverte mise à jour avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Decouverte $decouverte)
    {
        // Supprimer l'image principale si elle existe
        if ($decouverte->imageprincipale && file_exists(public_path($decouverte->imageprincipale))) {
            unlink(public_path($decouverte->imageprincipale));
        }

        // Supprimer les images multiples si elles existent
        if ($decouverte->imagesecondaire) {
            $images = is_array($decouverte->imagesecondaire) ? $decouverte->imagesecondaire : json_decode($decouverte->imagesecondaire, true);
            foreach ($images as $image) {
                if (file_exists(public_path($image))) {
                    unlink(public_path($image));
                }
            }
        }

        $decouverte->delete();
        return redirect()->route('decouverte.index')->with('status', 'Decouverte supprimé avec succès');
    }
}
