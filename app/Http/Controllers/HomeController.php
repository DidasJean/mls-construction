<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index', [
            'title' => 'Accueil - MLS SARL CONSTRUCTION',
            'description' => 'Votre partenaire de construction à Lubumbashi',
        ]);
    }
}