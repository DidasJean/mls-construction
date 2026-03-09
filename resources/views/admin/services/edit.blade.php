@extends('admin.layouts.app')

@section('title', 'Modifier service')
@section('page-title', 'Modifier service')
@section('page-subtitle', 'Edition d un service')

@section('content')
<div class="card p-4">
    <form method="POST" action="{{ route('admin.services.update', $service) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Titre</label>
            <input type="text" name="title" value="{{ old('title', $service->title) }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control" rows="4">{{ old('description', $service->description) }}</textarea>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Icone</label>
                <input type="text" name="icon" value="{{ old('icon', $service->icon) }}" class="form-control">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Image (chemin)</label>
                <input type="text" name="image" value="{{ old('image', $service->image) }}" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-3">
                <label class="form-label">Ordre</label>
                <input type="number" name="order" value="{{ old('order', $service->order ?? 0) }}" class="form-control">
            </div>
            <div class="col-md-4 mb-3 d-flex align-items-end">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="is_active" name="is_active" value="1" {{ old('is_active', $service->is_active) ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_active">Actif</label>
                </div>
            </div>
        </div>

        <button class="btn btn-primary">Mettre a jour</button>
        <a href="{{ route('admin.services.index') }}" class="btn btn-light">Annuler</a>
    </form>
</div>
@endsection
