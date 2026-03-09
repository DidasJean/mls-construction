@extends('admin.layouts.app')

@section('title', 'Edition page')
@section('page-title', 'Edition page')
@section('page-subtitle', 'Configuration de base')

@section('content')
@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="card p-4">
    <h5 class="mb-3">Page: {{ $page }}</h5>
    <p class="text-muted mb-4">
        Ecran provisoire pour eviter les erreurs runtime. Tu peux brancher ici un CMS ou des champs de configuration.
    </p>

    <form action="{{ route('admin.pages.update', $page) }}" method="POST">
        @csrf
        <button class="btn btn-primary">Enregistrer</button>
        <a href="{{ route('admin.dashboard') }}" class="btn btn-light">Retour</a>
    </form>
</div>
@endsection
