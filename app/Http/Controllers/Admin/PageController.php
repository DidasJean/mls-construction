<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function editAccueil()
    {
        return view('admin.pages.edit', ['page' => 'accueil']);
    }

    public function editAbout()
    {
        return view('admin.pages.edit', ['page' => 'about']);
    }

    public function editContact()
    {
        return view('admin.pages.edit', ['page' => 'contact']);
    }

    public function update(Request $request, string $page)
    {
        return redirect()->back()->with(
            'success',
            "Mise a jour de la page '{$page}' enregistree (mode de base)."
        );
    }
}
