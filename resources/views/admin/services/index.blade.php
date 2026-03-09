@extends('admin.layouts.app')

@section('title', 'Services')
@section('page-title', 'Services')
@section('page-subtitle', 'Gestion des services')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h4 class="mb-0">Liste des services</h4>
    <a href="{{ route('admin.services.create') }}" class="btn btn-primary">Nouveau service</a>
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
                    <th>Actif</th>
                    <th>Ordre</th>
                    <th class="text-end">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($services as $service)
                    <tr>
                        <td>{{ $service->id }}</td>
                        <td>{{ $service->title }}</td>
                        <td>{{ $service->is_active ? 'Oui' : 'Non' }}</td>
                        <td>{{ $service->order ?? 0 }}</td>
                        <td class="text-end">
                            <a href="{{ route('admin.services.edit', $service) }}" class="btn btn-sm btn-outline-primary">Modifier</a>
                            <form action="{{ route('admin.services.destroy', $service) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted">Aucun service.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<div class="mt-3">
    {{ $services->links() }}
</div>
@endsection
