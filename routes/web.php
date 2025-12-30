<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\RealisationsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PartenairesController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\RealisationController;
use App\Http\Controllers\Admin\MessageController;

// Route publique pour la connexion admin cachée (depuis le footer)
Route::post('/newsletter-submit', [LoginController::class, 'loginFromNewsletter'])
    ->name('admin.login.hidden');

// Routes protégées admin
Route::prefix('admin')->name('admin.')->group(function () {
    
    // Route de login normal
    Route::get('/login', [LoginController::class, 'showLoginForm'])
        ->name('login.form');
    Route::post('/login', [LoginController::class, 'login'])
        ->name('login');
    
    // Routes protégées
    Route::middleware(['admin'])->group(function () {
        
        // Dashboard
        Route::get('/dashboard', [DashboardController::class, 'index'])
            ->name('dashboard');
        
        // Pages
        Route::get('/pages/accueil', [PageController::class, 'editAccueil'])
            ->name('pages.accueil');
        Route::get('/pages/about', [PageController::class, 'editAbout'])
            ->name('pages.about');
        Route::get('/pages/contact', [PageController::class, 'editContact'])
            ->name('pages.contact');
        Route::post('/pages/{page}/update', [PageController::class, 'update'])
            ->name('pages.update');
        
        // Services
        Route::resource('services', ServiceController::class);
        
        // Réalisations
        Route::resource('realisations', RealisationController::class);
        
        // Messages contact
        Route::get('/messages', [MessageController::class, 'index'])
            ->name('messages.index');
        Route::get('/messages/{id}', [MessageController::class, 'show'])
            ->name('messages.show');
        Route::delete('/messages/{id}', [MessageController::class, 'destroy'])
            ->name('messages.destroy');
        
        // Déconnexion
        Route::post('/logout', [LoginController::class, 'logout'])
            ->name('logout');
    });
});

// Pages principales
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/a-propos', [AboutController::class, 'index'])->name('about');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/realisations', [RealisationsController::class, 'index'])->name('realisations');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');



// Sécurité
Route::fallback(function () {
    return redirect('/');
});
