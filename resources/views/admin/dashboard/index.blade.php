@extends('admin.layouts.app')

@section('title', 'Tableau de bord')
@section('page-title', 'Tableau de bord')
@section('page-subtitle', 'Bienvenue dans l\'administration MLS Construction')

@section('content')
    <!-- Stats Cards -->
    <div class="stats-grid">
        <!-- Messages Card -->
        <div class="stat-card messages">
            <div class="stat-icon">
                <i class="fas fa-envelope"></i>
            </div>
            <div class="stat-content">
                <h3>{{ $stats['messages_total'] ?? 0 }}</h3>
                <p>Messages reçus</p>
                <div class="stat-change {{ ($stats['messages_today'] ?? 0) > 0 ? 'positive' : 'neutral' }}">
                    @if(($stats['messages_today'] ?? 0) > 0)
                    <i class="fas fa-arrow-up me-1"></i> {{ $stats['messages_today'] }} aujourd'hui
                    @else
                    <i class="fas fa-minus me-1"></i> Aucun aujourd'hui
                    @endif
                </div>
            </div>
        </div>
        
        <!-- Services Card -->
        <div class="stat-card services">
            <div class="stat-icon">
                <i class="fas fa-tools"></i>
            </div>
            <div class="stat-content">
                <h3>{{ $stats['services_total'] ?? 0 }}</h3>
                <p>Services</p>
                <div class="stat-change positive">
                    <i class="fas fa-check me-1"></i> {{ $stats['services_active'] ?? 0 }} actifs
                </div>
            </div>
        </div>
        
        <!-- Réalisations Card -->
        <div class="stat-card realisations">
            <div class="stat-icon">
                <i class="fas fa-building"></i>
            </div>
            <div class="stat-content">
                <h3>{{ $stats['realisations_total'] ?? 0 }}</h3>
                <p>Réalisations</p>
                <div class="stat-change positive">
                    <i class="fas fa-star me-1"></i> {{ $stats['realisations_featured'] ?? 0 }} en vedette
                </div>
            </div>
        </div>
        
        <!-- Visiteurs Card -->
        <div class="stat-card visitors">
            <div class="stat-icon">
                <i class="fas fa-users"></i>
            </div>
            <div class="stat-content">
                <h3>{{ number_format($stats['visitors_month'] ?? 0) }}</h3>
                <p>Visiteurs ce mois</p>
                <div class="stat-change positive">
                    <i class="fas fa-user-plus me-1"></i> {{ $stats['visitors_today'] ?? 0 }} aujourd'hui
                </div>
            </div>
        </div>
    </div>
    
    <!-- Quick Actions -->
    <div class="quick-actions">
        <a href="{{ route('admin.services.create') }}" class="action-btn">
            <div class="action-icon">
                <i class="fas fa-plus-circle"></i>
            </div>
            <h5>Ajouter un service</h5>
            <p>Créer un nouveau service de construction</p>
        </a>
        
        <a href="{{ route('admin.realisations.create') }}" class="action-btn">
            <div class="action-icon">
                <i class="fas fa-hard-hat"></i>
            </div>
            <h5>Ajouter une réalisation</h5>
            <p>Publier un nouveau projet réalisé</p>
        </a>
        
        <a href="{{ route('admin.messages.index') }}" class="action-btn">
            <div class="action-icon">
                <i class="fas fa-inbox"></i>
            </div>
            <h5>Voir les messages</h5>
            <p>{{ $stats['messages_unread'] ?? 0 }} non lu(s)</p>
        </a>
        
        <a href="#" class="action-btn">
            <div class="action-icon">
                <i class="fas fa-chart-line"></i>
            </div>
            <h5>Statistiques</h5>
            <p>Analyser les performances du site</p>
        </a>
    </div>
    
    <!-- Two Columns Layout -->
    <div class="row">
        <div class="col-lg-8">
            <!-- Recent Activity -->
            <div class="recent-activity">
                <h3 class="section-title">
                    <i class="fas fa-history me-2"></i>Activité récente
                </h3>
                
                <ul class="activity-list">
                    <!-- Messages Récents -->
                    @forelse($recentMessages as $message)
                    <li class="activity-item">
                        <div class="activity-icon" style="background: var(--primary-color);">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="activity-content">
                            <h6>Message de {{ $message->name }}</h6>
                            <p>{{ Str::limit($message->email, 30) }}</p>
                        </div>
                        <div class="activity-time">{{ $message->created_at->diffForHumans() }}</div>
                    </li>
                    @empty
                    <li class="activity-item">
                        <div class="activity-content">
                            <p class="text-muted">Aucun message récent</p>
                        </div>
                    </li>
                    @endforelse
                    
                    <!-- Services Récents -->
                    @forelse($recentServices as $service)
                    <li class="activity-item">
                        <div class="activity-icon" style="background: var(--success-color);">
                            <i class="fas fa-tools"></i>
                        </div>
                        <div class="activity-content">
                            <h6>Service : {{ $service->title }}</h6>
                            <p>Statut : {{ $service->is_active ? 'Actif' : 'Inactif' }}</p>
                        </div>
                        <div class="activity-time">{{ $service->created_at->diffForHumans() }}</div>
                    </li>
                    @empty
                    <li class="activity-item">
                        <div class="activity-content">
                            <p class="text-muted">Aucun service récent</p>
                        </div>
                    </li>
                    @endforelse
                    
                    <!-- Réalisations Récents -->
                    @forelse($recentRealisations as $realisation)
                    <li class="activity-item">
                        <div class="activity-icon" style="background: var(--warning-color);">
                            <i class="fas fa-building"></i>
                        </div>
                        <div class="activity-content">
                            <h6>Réalisation : {{ $realisation->title }}</h6>
                            <p>Lieu : {{ $realisation->location }}</p>
                        </div>
                        <div class="activity-time">{{ $realisation->created_at->diffForHumans() }}</div>
                    </li>
                    @empty
                    <li class="activity-item">
                        <div class="activity-content">
                            <p class="text-muted">Aucune réalisation récente</p>
                        </div>
                    </li>
                    @endforelse
                </ul>
            </div>
        </div>
        
        <div class="col-lg-4">
            <!-- Messages par Statut -->
            <div class="recent-activity">
                <h3 class="section-title">
                    <i class="fas fa-chart-pie me-2"></i>Messages par statut
                </h3>
                
                @if($messagesByStatus && $messagesByStatus->count() > 0)
                <div class="mb-4">
                    @foreach($messagesByStatus as $status => $count)
                    <div class="d-flex justify-content-between mb-2">
                        <span>
                            @if($status == 'unread')
                            <i class="fas fa-envelope me-2 text-danger"></i>Non lus
                            @elseif($status == 'read')
                            <i class="fas fa-envelope-open me-2 text-success"></i>Lus
                            @elseif($status == 'replied')
                            <i class="fas fa-reply me-2 text-primary"></i>Répondu
                            @else
                            <i class="fas fa-envelope me-2"></i>{{ ucfirst($status) }}
                            @endif
                        </span>
                        <span class="fw-bold">{{ $count }}</span>
                    </div>
                    <div class="progress mb-3" style="height: 8px;">
                        @php
                            $totalMessages = $stats['messages_total'] ?? 1;
                            $percentage = ($count / $totalMessages) * 100;
                        @endphp
                        <div class="progress-bar 
                            @if($status == 'unread') bg-danger
                            @elseif($status == 'read') bg-success
                            @elseif($status == 'replied') bg-primary
                            @else bg-secondary @endif" 
                            style="width: {{ $percentage }}%">
                        </div>
                    </div>
                    @endforeach
                </div>
                @else
                <div class="text-center py-4">
                    <i class="fas fa-envelope fa-3x text-muted mb-3"></i>
                    <p class="text-muted">Aucun message pour le moment</p>
                </div>
                @endif
            </div>
        </div>
    </div>
    
    <!-- Welcome Message -->
    <div class="recent-activity mt-4">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h3 class="section-title mb-3">
                    <i class="fas fa-star me-2"></i>Bienvenue dans MLS Construction Admin
                </h3>
                <p class="mb-0">
                    <strong>Statistiques en direct :</strong> 
                    <span class="text-primary">{{ $stats['services_total'] ?? 0 }} services</span>, 
                    <span class="text-success">{{ $stats['realisations_total'] ?? 0 }} réalisations</span>, 
                    <span class="text-info">{{ $stats['messages_total'] ?? 0 }} messages</span>.
                </p>
            </div>
            <div class="col-md-4 text-end">
                <a href="{{ route('admin.services.create') }}" class="btn btn-primary btn-lg">
                    <i class="fas fa-plus me-2"></i>Ajouter un service
                </a>
            </div>
        </div>
    </div>
@endsection

@push('styles')
<style>
.stat-card {
    transition: all 0.3s ease;
}
.stat-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
}
.stat-change.positive {
    color: #28a745;
}
.stat-change.neutral {
    color: #6c757d;
}
.activity-item {
    border-left: 3px solid transparent;
    transition: all 0.2s ease;
    padding: 10px;
    margin-bottom: 5px;
}
.activity-item:hover {
    border-left-color: #1e3c72;
    background-color: rgba(30, 60, 114, 0.05);
}
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Mettre à jour le titre de la page avec le nombre de messages non lus
    const unreadCount = {{ $stats['messages_unread'] ?? 0 }};
    if (unreadCount > 0) {
        const title = document.querySelector('title');
        title.textContent = `(${unreadCount}) ${title.textContent}`;
    }
    
    // Animation pour les cartes
    const statCards = document.querySelectorAll('.stat-card');
    statCards.forEach((card, index) => {
        card.style.animationDelay = `${index * 0.1}s`;
    });
});
</script>
@endpush