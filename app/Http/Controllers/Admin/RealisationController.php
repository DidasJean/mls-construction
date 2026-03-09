<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Realisation;
use Illuminate\Http\Request;

class RealisationController extends Controller
{
    public function index()
    {
        $realisations = Realisation::latest()->paginate(15);
        return view('admin.realisations.index', compact('realisations'));
    }

    public function create()
    {
        return view('admin.realisations.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'location' => ['nullable', 'string', 'max:255'],
            'image' => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'category' => ['nullable', 'string', 'max:255'],
            'featured' => ['nullable', 'boolean'],
            'completion_date' => ['nullable', 'date'],
            'surface' => ['nullable', 'string', 'max:255'],
            'duree' => ['nullable', 'string', 'max:255'],
        ]);

        $data['featured'] = $request->boolean('featured');

        Realisation::create($data);

        return redirect()->route('admin.realisations.index')
            ->with('success', 'Realisation creee avec succes.');
    }

    public function show(Realisation $realisation)
    {
        return redirect()->route('admin.realisations.edit', $realisation);
    }

    public function edit(Realisation $realisation)
    {
        return view('admin.realisations.edit', compact('realisation'));
    }

    public function update(Request $request, Realisation $realisation)
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'location' => ['nullable', 'string', 'max:255'],
            'image' => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'category' => ['nullable', 'string', 'max:255'],
            'featured' => ['nullable', 'boolean'],
            'completion_date' => ['nullable', 'date'],
            'surface' => ['nullable', 'string', 'max:255'],
            'duree' => ['nullable', 'string', 'max:255'],
        ]);

        $data['featured'] = $request->boolean('featured');

        $realisation->update($data);

        return redirect()->route('admin.realisations.index')
            ->with('success', 'Realisation mise a jour.');
    }

    public function destroy(Realisation $realisation)
    {
        $realisation->delete();

        return redirect()->route('admin.realisations.index')
            ->with('success', 'Realisation supprimee.');
    }
}
