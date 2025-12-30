<?php

use Illuminate\Support\Facades\Route;

// TEST ROUTE - À METTRE EN PREMIER
Route::get('/test', function () {
    return "<h1 style='color: green; padding: 20px;'>✅ MLS Construction - TEST RÉUSSI</h1>
            <p>Laravel fonctionne sur Render !</p>
            <p>PHP: " . PHP_VERSION . "</p>
            <p>Time: " . date('H:i:s') . "</p>
            <a href='/'>Voir l'accueil</a>";
});

// PAGE D'ACCUEIL SIMPLE
Route::get('/', function () {
    return view('home', [
        'title' => 'MLS Construction',
        'description' => 'Site en construction'
    ]);
});

// PAGES STATIQUES
Route::view('/a-propos', 'about')->name('about');
Route::view('/services', 'services')->name('services');
Route::view('/realisations', 'realisations')->name('realisations');
Route::view('/contact', 'contact')->name('contact');

// COMMENTE LES ROUTES ADMIN POUR L'INSTANT
// Route::prefix('admin')...
