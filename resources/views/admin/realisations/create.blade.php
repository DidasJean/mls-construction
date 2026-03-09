@extends('admin.layouts.app')

@section('title', 'Nouvelle realisation')
@section('page-title', 'Nouvelle realisation')
@section('page-subtitle', 'Creation d une realisation')

@section('content')
<div class="card p-4">
    <form method="POST" action="{{ route('admin.realisations.store') }}">
        @csrf

        <div class="mb-3">
            <label class="form-label">Titre</label>
            <input type="text" name="title" value="{{ old('title') }}" class="form-control" required>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Lieu</label>
                <input type="text" name="location" value="{{ old('location') }}" class="form-control">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Categorie</label>
                <input type="text" name="category" value="{{ old('category') }}" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Image (chemin)</label>
                <input type="text" name="image" value="{{ old('image') }}" class="form-control">
            </div>
            <div class="col-md-3 mb-3">
                <label class="form-label">Surface</label>
                <input type="text" name="surface" value="{{ old('surface') }}" class="form-control">
            </div>
            <div class="col-md-3 mb-3">
                <label class="form-label">Duree</label>
                <input type="text" name="duree" value="{{ old('duree') }}" class="form-control">
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Date de fin</label>
            <input type="date" name="completion_date" value="{{ old('completion_date') }}" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control" rows="4">{{ old('description') }}</textarea>
        </div>
        <div class="mb-3">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="featured" name="featured" value="1" {{ old('featured') ? 'checked' : '' }}>
                <label class="form-check-label" for="featured">Mettre en vedette</label>
            </div>
        </div>

        <button class="btn btn-primary">Enregistrer</button>
        <a href="{{ route('admin.realisations.index') }}" class="btn btn-light">Annuler</a>
    </form>
</div>
@endsection
