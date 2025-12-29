<?php

namespace App\Http\Controllers;

class RealisationsController extends Controller
{
    public function index()
    {
        return view('realisations.index');
    }
    
    // Pour une future version avec base de données
    public function show($slug)
    {
        // À implémenter plus tard pour les détails de projet
        return view('realisations.show', compact('slug'));
    }
}