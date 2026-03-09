@extends('admin.layouts.app')

@section('title', 'Realisations')
@section('page-title', 'Realisations')
@section('page-subtitle', 'Gestion des realisations')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h4 class="mb-0">Liste des realisations</h4>
    <a href="{{ route('admin.realisations.create') }}" class="btn btn-primary">Nouvelle realisation</a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="card">
    <div class="table-responsive">
        <table class="table table-striped mb-0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titre</th>
                    <th>Lieu</th>
                    <th>Categorie</th>
                    <th>Vedette</th>
                    <th class="text-end">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($realisations as $realisation)
                    <tr>
                        <td>{{ $realisation->id }}</td>
                        <td>{{ $realisation->title }}</td>
                        <td>{{ $realisation->location }}</td>
                        <td>{{ $realisation->category }}</td>
                        <td>{{ $realisation->featured ? 'Oui' : 'Non' }}</td>
                        <td class="text-end">
                            <a href="{{ route('admin.realisations.edit', $realisation) }}" class="btn btn-sm btn-outline-primary">Modifier</a>
                            <form action="{{ route('admin.realisations.destroy', $realisation) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center text-muted">Aucune realisation.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<div class="mt-3">
    {{ $realisations->links() }}
</div>
@endsection
