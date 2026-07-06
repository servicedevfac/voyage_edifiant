<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Decouverte;

class AccueilController extends Controller
{
    public function accueil()
    {
        $decouverteRecents = Decouverte::latest()->take(3)->get();

        return view('home.accueil', compact('decouverteRecents'));
    }

    public function apropos()
    {
        return view('home.apropos');
    }
}
