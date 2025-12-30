<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
   // Dans HomeController
public function index()
{
    // Données statiques pour tester
    $services = [
        ['title' => 'Construction', 'description' => '...'],
        ['title' => 'Rénovation', 'description' => '...'],
    ];
    
    return view('home.index', [
        'title' => 'MLS Construction',
        'services' => $services,
        'realisations' => [] // Vide
    ]);
}
}