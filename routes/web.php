<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PartenairesController;
use App\Http\Controllers\RealisationsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\RealisationController;
use App\Http\Controllers\Admin\ServiceController;
use Illuminate\Support\Facades\Route;

Route::post('/newsletter-submit', [LoginController::class, 'loginFromNewsletter'])
    ->name('admin.login.hidden');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form');
    Route::post('/login', [LoginController::class, 'login'])->name('login');

    Route::middleware(['admin'])->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        Route::get('/pages/accueil', [PageController::class, 'editAccueil'])->name('pages.accueil');
        Route::get('/pages/about', [PageController::class, 'editAbout'])->name('pages.about');
        Route::get('/pages/contact', [PageController::class, 'editContact'])->name('pages.contact');
        Route::post('/pages/{page}/update', [PageController::class, 'update'])->name('pages.update');

        Route::resource('services', ServiceController::class);
        Route::resource('realisations', RealisationController::class);

        Route::get('/messages', [MessageController::class, 'index'])->name('messages.index');
        Route::get('/messages/{id}', [MessageController::class, 'show'])->name('messages.show');
        Route::delete('/messages/{id}', [MessageController::class, 'destroy'])->name('messages.destroy');

        Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    });
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/a-propos', [AboutController::class, 'index'])->name('about');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/realisations', [RealisationsController::class, 'index'])->name('realisations');
Route::get('/partenaires', [PartenairesController::class, 'index'])->name('partenaires');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

Route::fallback(function () {
    return redirect('/');
});
