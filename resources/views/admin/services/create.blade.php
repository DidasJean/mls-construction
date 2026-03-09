@extends('admin.layouts.app')

@section('title', 'Nouveau service')
@section('page-title', 'Nouveau service')
@section('page-subtitle', 'Creation d un service')

@section('content')
<div class="card p-4">
    <form method="POST" action="{{ route('admin.services.store') }}">
        @csrf

        <div class="mb-3">
            <label class="form-label">Titre</label>
            <input type="text" name="title" value="{{ old('title') }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control" rows="4">{{ old('description') }}</textarea>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Icone</label>
                <input type="text" name="icon" value="{{ old('icon') }}" class="form-control">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Image (chemin)</label>
                <input type="text" name="image" value="{{ old('image') }}" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-3">
                <label class="form-label">Ordre</label>
                <input type="number" name="order" value="{{ old('order', 0) }}" class="form-control">
            </div>
            <div class="col-md-4 mb-3 d-flex align-items-end">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="is_active" name="is_active" value="1" {{ old('is_active', 1) ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_active">Actif</label>
                </div>
            </div>
        </div>

        <button class="btn btn-primary">Enregistrer</button>
        <a href="{{ route('admin.services.index') }}" class="btn btn-light">Annuler</a>
    </form>
</div>
@endsection
