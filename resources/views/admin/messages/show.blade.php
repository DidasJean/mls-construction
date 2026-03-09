@extends('admin.layouts.app')

@section('title', 'Message')
@section('page-title', 'Message')
@section('page-subtitle', 'Detail du message')

@section('content')
<div class="card p-4">
    <h5>{{ $message->name }}</h5>
    <p class="mb-1"><strong>Email:</strong> {{ $message->email }}</p>
    <p class="mb-1"><strong>Telephone:</strong> {{ $message->phone }}</p>
    <p class="mb-3"><strong>Statut:</strong> {{ $message->status ?? '-' }}</p>

    <hr>
    <p style="white-space: pre-wrap;">{{ $message->message }}</p>

    <a href="{{ route('admin.messages.index') }}" class="btn btn-light">Retour</a>
</div>
@endsection
