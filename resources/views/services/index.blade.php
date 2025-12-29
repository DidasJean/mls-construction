@extends('layouts.app')

@section('title', 'Nos Services - MLS SARL CONSTRUCTION')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/services.css') }}">
@endpush

@section('content')

<!-- Hero avec vidéo background -->
<section class="services-video-hero">
    <!-- Vidéo de fond -->
    <video class="video-background" autoplay muted loop playsinline poster="{{ asset('images/construction-bg.jpg') }}">
        <source src="{{ asset('videos/construction-video.mp4') }}" type="video/mp4">
        <!-- Fallback image si vidéo non supportée -->
        <img src="{{ asset('images/construction-bg.jpg') }}" alt="Background construction">
    </video>
    
    <!-- Overlay sombre -->
    <div class="video-overlay"></div>
    
    <!-- Contenu hero -->
    <div class="hero-content">
        <div class="container">
            <h1>Nos Services d'Excellence</h1>
            <p>MLS SARL CONSTRUCTION transforme vos visions en réalité avec expertise, innovation et dévouement. Découvrez notre gamme complète de services professionnels.</p>
            
            <div class="hero-stats">
                <div class="stat-item">
                    <div class="stat-number">14</div>
                    <div class="stat-label">Services</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">98%</div>
                    <div class="stat-label">Satisfaction</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">24/7</div>
                    <div class="stat-label">Support</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section services -->
<section class="services-section">
    <div class="container">
        <div class="section-intro">
            <h2>Nos Domaines d'Expertise</h2>
            <p>De la conception à la réalisation, nous maîtrisons tous les aspects de la construction pour vous offrir un service complet et de qualité.</p>
        </div>
        
        <div class="services-grid">
            <!-- Service 1 - Construction -->
            <div class="service-card">
                <div class="card-icon">
                    <i class="fas fa-building"></i>
                </div>
                <h3>Construction Générale</h3>
                <p>Construction de maisons, bâtiments commerciaux et industriels selon les normes les plus strictes et les dernières innovations.</p>
                <a href="{{ route('contact') }}" class="learn-more">
                    En savoir plus <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            
            <!-- Service 2 - Forage -->
            <div class="service-card">
                <div class="card-icon">
                    <i class="fas fa-water"></i>
                </div>
                <h3>Forage Hydraulique</h3>
                <p>Forage d'eau potable avec études géologiques avancées, installation complète et maintenance préventive des systèmes.</p>
                <a href="{{ route('contact') }}" class="learn-more">
                    En savoir plus <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            
            <!-- Service 3 - Peinture -->
            <div class="service-card">
                <div class="card-icon">
                    <i class="fas fa-paint-roller"></i>
                </div>
                <h3>Peinture & Finitions</h3>
                <p>Travaux de peinture intérieure et extérieure avec finitions professionnelles, garanties et choix de produits haut de gamme.</p>
                <a href="{{ route('contact') }}" class="learn-more">
                    En savoir plus <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            
            <!-- Service 4 - Plomberie -->
            <div class="service-card">
                <div class="card-icon">
                    <i class="fas fa-faucet"></i>
                </div>
                <h3>Plomberie Sanitaire</h3>
                <p>Installation et maintenance des systèmes sanitaires modernes avec garantie de conformité aux normes internationales.</p>
                <a href="{{ route('contact') }}" class="learn-more">
                    En savoir plus <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            
            <!-- Service 5 - Climatisation -->
            <div class="service-card">
                <div class="card-icon">
                    <i class="fas fa-snowflake"></i>
                </div>
                <h3>Froid & Climatisation</h3>
                <p>Installation et entretien de climatiseurs, chambres froides et systèmes de réfrigération industrielle.</p>
                <a href="{{ route('contact') }}" class="learn-more">
                    En savoir plus <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            
            <!-- Service 6 - Piscines -->
            <div class="service-card">
                <div class="card-icon">
                    <i class="fas fa-swimming-pool"></i>
                </div>
                <h3>Piscines Design</h3>
                <p>Conception et construction de piscines modernes, durables avec systèmes de filtration et traitement d'eau avancés.</p>
                <a href="{{ route('contact') }}" class="learn-more">
                    En savoir plus <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            
            <!-- Service 7 - Énergies Renouvelables -->
            <div class="service-card">
                <div class="card-icon">
                    <i class="fas fa-solar-panel"></i>
                </div>
                <h3>Énergies Renouvelables</h3>
                <p>Installation de panneaux solaires et solutions énergétiques autonomes pour une consommation responsable et économique.</p>
                <a href="{{ route('contact') }}" class="learn-more">
                    En savoir plus <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            
            <!-- Service 8 - Carrelage -->
            <div class="service-card">
                <div class="card-icon">
                    <i class="fas fa-th-large"></i>
                </div>
                <h3>Carrelage Expert</h3>
                <p>Pose de carreaux pour sols et murs avec précision, choix de matériaux premium, designs innovants et durables.</p>
                <a href="{{ route('contact') }}" class="learn-more">
                    En savoir plus <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            
            <!-- Service 9 - Plafonds -->
            <div class="service-card">
                <div class="card-icon">
                    <i class="fas fa-layer-group"></i>
                </div>
                <h3>Plafonds Modulaires</h3>
                <p>Plafonds modernes : staff, PVC, faux plafonds avec isolation phonique et thermique pour un confort optimal.</p>
                <a href="{{ route('contact') }}" class="learn-more">
                    En savoir plus <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            
            <!-- Service 10 - Terrains -->
            <div class="service-card">
                <div class="card-icon">
                    <i class="fas fa-map"></i>
                </div>
                <h3>Vente de Terrains</h3>
                <p>Vente de terrains sécurisés avec documents légaux garantis, viabilisation et accompagnement personnalisé.</p>
                <a href="{{ route('contact') }}" class="learn-more">
                    En savoir plus <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            
            <!-- Service 11 - Menuiserie -->
            <div class="service-card">
                <div class="card-icon">
                    <i class="fas fa-hammer"></i>
                </div>
                <h3>Menuiserie Sur Mesure</h3>
                <p>Menuiserie bois et aluminium sur mesure pour portes, fenêtres et aménagements intérieurs personnalisés.</p>
                <a href="{{ route('contact') }}" class="learn-more">
                    En savoir plus <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            
            <!-- Service 12 - Location Engins -->
            <div class="service-card">
                <div class="card-icon">
                    <i class="fas fa-truck-moving"></i>
                </div>
                <h3>Location d'Engins</h3>
                <p>Location d'engins de chantier performants avec opérateurs qualifiés, maintenance incluse et assistance technique.</p>
                <a href="{{ route('contact') }}" class="learn-more">
                    En savoir plus <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            
            <!-- Service 13 - Architecture -->
            <div class="service-card">
                <div class="card-icon">
                    <i class="fas fa-drafting-compass"></i>
                </div>
                <h3>Architecture & Design</h3>
                <p>Conception architecturale innovante et suivi personnalisé de vos projets de construction, du rêve à la réalité.</p>
                <a href="{{ route('contact') }}" class="learn-more">
                    En savoir plus <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            
            <!-- Service 14 - Nettoyage -->
            <div class="service-card">
                <div class="card-icon">
                    <i class="fas fa-broom"></i>
                </div>
                <h3>Nettoyage Post-travaux</h3>
                <p>Nettoyage professionnel de bâtiments après travaux pour une remise des clés impeccable et prête à l'emploi.</p>
                <a href="{{ route('contact') }}" class="learn-more">
                    En savoir plus <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>



@endsection

@push('scripts')
<script>
// Script pour améliorer l'expérience vidéo
document.addEventListener('DOMContentLoaded', function() {
    const video = document.querySelector('.video-background');
    
    if (video) {
        // Démarrer la vidéo même si autoplay est bloqué
        video.play().catch(function(error) {
            console.log("Autoplay bloqué, activation manuelle");
            // Ajouter un bouton play si nécessaire
        });
        
        // Optimiser la performance de la vidéo
        video.setAttribute('playsinline', '');
        video.setAttribute('webkit-playsinline', '');
        video.muted = true;
    }
    
    // Animation des cartes au scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.animationPlayState = 'running';
            }
        });
    }, observerOptions);
    
    // Observer chaque carte de service
    document.querySelectorAll('.service-card').forEach(card => {
        observer.observe(card);
    });
});
</script>
@endpush