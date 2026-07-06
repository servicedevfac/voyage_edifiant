<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Decouverte;

class DecouverteFrontController extends Controller
{
    public function index()
    {
        $decouvertes = Decouverte::all();
        return view('home.decouverte', compact('decouvertes'));
    }

    public function show($slug)
    {
        // Récupérer l'article par son slug
        $decouverte = Decouverte::where('slug', $slug)->firstOrFail();
        $decouverteRecents = Decouverte::latest()->take(3)->get();

        return view('home.decouverteshow', compact('decouverte', 'decouverteRecents'));
    }
}
