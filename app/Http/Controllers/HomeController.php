<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index', [
            'title' => 'MLS Construction',
            'description' => 'Site officiel MLS Construction',
        ]);
    }
}
