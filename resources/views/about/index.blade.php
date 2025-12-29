@extends('layouts.app')

@section('title', 'À Propos - MLS SARL CONSTRUCTION')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush

@section('content')

<!-- Hero Section -->
<section class="about-hero">
    <div class="hero-pattern"></div>
    <div class="hero-content">
        <h1>Une entreprise engagée pour bâtir l'excellence</h1>
        <p>Depuis 2019, MLS SARL CONSTRUCTION transforme les rêves en réalité grâce à notre expertise et notre engagement envers la qualité.</p>
        
        <div class="hero-stats">
            <div class="stat-item">
                <span class="stat-number" data-count="14">0</span>
                <span class="stat-label">Services</span>
            </div>
            <div class="stat-item">
                <span class="stat-number" data-count="98">0</span>
                <span class="stat-label">Clients Satisfaits</span>
            </div>
            <div class="stat-item">
                <span class="stat-number" data-count="150">0</span>
                <span class="stat-label">Projets Réalisés</span>
            </div>
            <div class="stat-item">
                <span class="stat-number" data-count="5">0</span>
                <span class="stat-label">Ans d'Expérience</span>
            </div>
        </div>
    </div>
</section>

<!-- Présentation de l'entreprise -->
<section class="about-section presentation-section">
    <div class="container">
        <div class="section-header">
            <h2>Qui sommes-nous ?</h2>
            <p>Découvrez l'histoire et la passion qui animent notre entreprise</p>
        </div>
        
        <div class="presentation-content">
            <div class="presentation-image">
                <img src="{{ asset('images/about/entreprise.jpg') }}" alt="MLS SARL CONSTRUCTION" onerror="this.src='https://images.unsplash.com/photo-1504307651254-35680f356dfd?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'">
            </div>
            
            <div class="presentation-text">
                <h3>MLS SARL CONSTRUCTION<br><small>Maison Luabeya Solution</small></h3>
                <p>Fondée le <strong>18 décembre 2019</strong>, MLS SARL CONSTRUCTION est une entreprise spécialisée dans les travaux de construction et les services techniques du bâtiment en République Démocratique du Congo.</p>
                
                <p>Notre entreprise est née d'une vision ambitieuse : offrir des solutions de construction <strong>fiables, modernes et durables</strong>, adaptées aux besoins réels de la population congolaise.</p>
                
                <p>Depuis sa création, MLS SARL CONSTRUCTION s'est développée grâce à la <strong>compétence de son équipe</strong>, à la <strong>qualité de ses réalisations</strong> et à la <strong>confiance de ses partenaires et clients</strong>.</p>
                
                <div class="highlight-box">
                    <p>"Notre engagement : construire l'avenir avec excellence et innovation pour chaque projet qui nous est confié."</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission, Vision et Valeurs -->
<section class="about-section mvv-section">
    <div class="container">
        <div class="section-header">
            <h2>Notre ADN</h2>
            <p>Les principes fondamentaux qui guident chacune de nos actions</p>
        </div>
        
        <div class="mvv-grid">
            <!-- Mission -->
            <div class="mvv-card mission">
                <div class="mvv-icon">
                    <i class="fas fa-bullseye"></i>
                </div>
                <h3>Notre Mission</h3>
                <ul>
                    <li>Inciter la clientèle à atteindre l'excellence</li>
                    <li>Offrir des services de haute qualité</li>
                    <li>Assurer la réussite complète des projets</li>
                    <li>Accompagner les clients de la conception jusqu'à la réalisation finale</li>
                </ul>
            </div>
            
            <!-- Vision -->
            <div class="mvv-card vision">
                <div class="mvv-icon">
                    <i class="fas fa-eye"></i>
                </div>
                <h3>Notre Vision</h3>
                <p style="text-align: left; color: var(--gray-dark); line-height: 1.6;">
                    Devenir la <strong>plus grande entreprise de construction multidisciplinaire</strong> en République Démocratique du Congo, reconnue pour son professionnalisme, son innovation et son impact durable.
                </p>
            </div>
            
            <!-- Valeurs -->
            <div class="mvv-card">
                <div class="mvv-icon">
                    <i class="fas fa-star"></i>
                </div>
                <h3>Nos Valeurs</h3>
                <ul>
                    <li><strong>Innovation</strong> – Solutions modernes et adaptées</li>
                    <li><strong>Adaptabilité</strong> – Réponse aux besoins spécifiques</li>
                    <li><strong>Croissance</strong> – Amélioration continue</li>
                    <li><strong>Énergie</strong> – Engagement et dynamisme</li>
                    <li><strong>Compétence</strong> – Main-d'œuvre qualifiée</li>
                    <li><strong>Fiabilité</strong> – Respect des délais</li>
                    <li><strong>Vision</strong> – Construire pour l'avenir</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Nos Valeurs Détaillées -->
<section class="about-section valeurs-section">
    <div class="container">
        <div class="section-header">
            <h2>Nos Valeurs en Action</h2>
            <p>Les principes qui définissent notre identité et notre façon de travailler</p>
        </div>
        
        <div class="valeurs-grid">
            <div class="valeur-card">
                <div class="valeur-icon">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <h4 class="valeur-title">Innovation</h4>
                <p class="valeur-desc">Nous adoptons les dernières technologies et méthodes pour offrir des solutions modernes.</p>
            </div>
            
            <div class="valeur-card">
                <div class="valeur-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h4 class="valeur-title">Adaptabilité</h4>
                <p class="valeur-desc">Nous nous ajustons aux besoins spécifiques de chaque client et projet.</p>
            </div>
            
            <div class="valeur-card">
                <div class="valeur-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h4 class="valeur-title">Croissance</h4>
                <p class="valeur-desc">Nous évoluons continuellement pour améliorer nos services et compétences.</p>
            </div>
            
            <div class="valeur-card">
                <div class="valeur-icon">
                    <i class="fas fa-bolt"></i>
                </div>
                <h4 class="valeur-title">Énergie</h4>
                <p class="valeur-desc">Nous mettons toute notre passion et notre dynamisme dans chaque projet.</p>
            </div>
            
            <div class="valeur-card">
                <div class="valeur-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h4 class="valeur-title">Compétence</h4>
                <p class="valeur-desc">Notre équipe est formée et expérimentée pour garantir l'excellence.</p>
            </div>
            
            <div class="valeur-card">
                <div class="valeur-icon">
                    <i class="fas fa-handshake"></i>
                </div>
                <h4 class="valeur-title">Fiabilité</h4>
                <p class="valeur-desc">Nous respectons scrupuleusement nos engagements et délais.</p>
            </div>
            
            <div class="valeur-card">
                <div class="valeur-icon">
                    <i class="fas fa-binoculars"></i>
                </div>
                <h4 class="valeur-title">Vision</h4>
                <p class="valeur-desc">Nous construisons en pensant à l'avenir et au développement durable.</p>
            </div>
        </div>
    </div>
</section>

<!-- Notre Expertise -->
<section class="about-section expertise-section">
    <div class="container">
        <div class="section-header">
            <h2>Notre Expertise</h2>
            <p>Des compétences diversifiées pour répondre à tous vos besoins en construction</p>
        </div>
        
        <div class="expertise-grid">
            <div class="expertise-card">
                <h3><i class="fas fa-home"></i> Construction Résidentielle</h3>
                <ul>
                    <li>Maisons individuelles et familiales</li>
                    <li>Appartements et résidences</li>
                    <li>Villas de prestige</li>
                    <li>Bâtiments collectifs</li>
                </ul>
            </div>
            
            <div class="expertise-card">
                <h3><i class="fas fa-building"></i> Projets Commerciaux</h3>
                <ul>
                    <li>Immeubles de bureaux</li>
                    <li>Centres commerciaux</li>
                    <li>Locaux professionnels</li>
                    <li>Infrastructures commerciales</li>
                </ul>
            </div>
            
            <div class="expertise-card">
                <h3><i class="fas fa-industry"></i> Génie Civil & Industriel</h3>
                <ul>
                    <li>Projets industriels</li>
                    <li>Infrastructures publiques</li>
                    <li>Travaux de génie civil</li>
                    <li>Aménagements urbains</li>
                </ul>
            </div>
            
            <div class="expertise-card">
                <h3><i class="fas fa-tools"></i> Rénovation & Maintenance</h3>
                <ul>
                    <li>Réhabilitation de bâtiments</li>
                    <li>Rénovation complète</li>
                    <li>Maintenance préventive</li>
                    <li>Travaux de second œuvre</li>
                </ul>
            </div>
            
            <div class="expertise-card">
                <h3><i class="fas fa-paint-roller"></i> Finitions & Décoration</h3>
                <ul>
                    <li>Travaux de finition</li>
                    <li>Décoration intérieure</li>
                    <li>Aménagement intérieur</li>
                    <li>Design d'espace</li>
                </ul>
            </div>
            
            <div class="expertise-card">
                <h3><i class="fas fa-solar-panel"></i> Solutions Modernes</h3>
                <ul>
                    <li>Énergies renouvelables</li>
                    <li>Systèmes intelligents</li>
                    <li>Solutions durables</li>
                    <li>Innovations techniques</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Méthode de travail -->
<section class="about-section methode-section">
    <div class="container">
        <div class="section-header">
            <h2>Notre Méthode de Travail</h2>
            <p>Une approche structurée pour garantir l'excellence de chaque projet</p>
        </div>
        
        <div class="methode-timeline">
            <div class="methode-step">
                <div class="step-number">1</div>
                <div class="step-content">
                    <h4>Analyse des besoins</h4>
                    <p>Écoute attentive et analyse approfondie des besoins spécifiques de chaque client pour comprendre parfaitement leurs attentes.</p>
                </div>
            </div>
            
            <div class="methode-step">
                <div class="step-number">2</div>
                <div class="step-content">
                    <h4>Étude et conception</h4>
                    <p>Élaboration de plans techniques détaillés et conception de solutions adaptées aux contraintes et opportunités du projet.</p>
                </div>
            </div>
            
            <div class="methode-step">
                <div class="step-number">3</div>
                <div class="step-content">
                    <h4>Planification des travaux</h4>
                    <p>Établissement d'un calendrier précis, organisation des ressources et préparation logistique pour un déroulement optimal.</p>
                </div>
            </div>
            
            <div class="methode-step">
                <div class="step-number">4</div>
                <div class="step-content">
                    <h4>Exécution professionnelle</h4>
                    <p>Mise en œuvre rigoureuse avec une équipe qualifiée, en respectant les normes de qualité et de sécurité les plus strictes.</p>
                </div>
            </div>
            
            <div class="methode-step">
                <div class="step-number">5</div>
                <div class="step-content">
                    <h4>Suivi et contrôle</h4>
                    <p>Supervision constante de l'avancement des travaux et contrôle qualité à chaque étape pour garantir l'excellence du résultat.</p>
                </div>
            </div>
            
            <div class="methode-step">
                <div class="step-number">6</div>
                <div class="step-content">
                    <h4>Livraison et accompagnement</h4>
                    <p>Remise des clés dans les délais convenus et accompagnement post-projet pour assurer la pleine satisfaction du client.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pourquoi choisir MLS -->
<section class="about-section why-choose-section">
    <div class="container">
        <div class="section-header">
            <h2>Pourquoi choisir MLS SARL CONSTRUCTION ?</h2>
            <p>Les avantages qui font la différence et garantissent votre satisfaction</p>
        </div>
        
        <div class="why-grid">
            <div class="why-card">
                <div class="why-icon">
                    <i class="fas fa-balance-scale"></i>
                </div>
                <h3>Entreprise Légale</h3>
                <p>Structure légale établie avec toutes les autorisations et assurances nécessaires pour vos projets.</p>
            </div>
            
            <div class="why-card">
                <div class="why-icon">
                    <i class="fas fa-user-tie"></i>
                </div>
                <h3>Équipe Qualifiée</h3>
                <p>Professionnels expérimentés et formés aux dernières techniques de construction.</p>
            </div>
            
            <div class="why-card">
                <div class="why-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <h3>Respect des Délais</h3>
                <p>Engagement ferme sur les délais de livraison avec suivi rigoureux de l'avancement.</p>
            </div>
            
            <div class="why-card">
                <div class="why-icon">
                    <i class="fas fa-gem"></i>
                </div>
                <h3>Matériaux de Qualité</h3>
                <p>Utilisation exclusive de matériaux certifiés et durables pour une construction pérenne.</p>
            </div>
            
            <div class="why-card">
                <div class="why-icon">
                    <i class="fas fa-handshake"></i>
                </div>
                <h3>Accompagnement Personnalisé</h3>
                <p>Suivi individuel de chaque projet avec un interlocuteur dédié à votre disposition.</p>
            </div>
            
            <div class="why-card">
                <div class="why-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3>Transparence Totale</h3>
                <p>Communication claire, devis détaillés et processus transparent à chaque étape.</p>
            </div>
        </div>
    </div>
</section>

<!-- Partenariats -->
<section class="partenaires-section">
    <div class="container">
        <div class="section-header">
            <h2>Partenariats et Confiance</h2>
            <p>Des collaborations qui renforcent notre expertise et notre crédibilité</p>
        </div>
        
        <div class="partenaires-grid">
            <div class="partenaire-logo">
                <div style="text-align: center; color: var(--blue-primary); font-size: 1.2rem; font-weight: 700;">
                    <i class="fas fa-university fa-3x mb-3"></i>
                    <div>Collaborations Académiques</div>
                </div>
            </div>
            
            <div class="partenaire-logo">
                <div style="text-align: center; color: var(--blue-primary); font-size: 1.2rem; font-weight: 700;">
                    <i class="fas fa-user-graduate fa-3x mb-3"></i>
                    <div>Professeur Ordinaire<br>Pascal SEM MBIMBI</div>
                </div>
            </div>
            
            <div class="partenaire-logo">
                <div style="text-align: center; color: var(--blue-primary); font-size: 1.2rem; font-weight: 700;">
                    <i class="fas fa-handshake fa-3x mb-3"></i>
                    <div>Partenaires Professionnels</div>
                </div>
            </div>
            
            <div class="partenaire-logo">
                <div style="text-align: center; color: var(--blue-primary); font-size: 1.2rem; font-weight: 700;">
                    <i class="fas fa-users fa-3x mb-3"></i>
                    <div>Réseaux Sociaux & Références</div>
                </div>
            </div>
        </div>
        
        <!-- NOUVEAU : Section avec 4 photos de partenaires -->
        <div class="photos-partenaires" style="margin-top: 80px;">
            <div class="section-header">
                <h3 style="font-size: 2rem; color: var(--blue-primary);">Nos Partenaires Officiels</h3>
                <p>Découvrez nos partenaires qui nous font confiance</p>
            </div>
            
            <div class="photos-grid" style="
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                gap: 30px;
                margin-top: 50px;
            ">
                <!-- Photo Partenaire 1 -->
                <div class="photo-partenaire" style="
                    background: white;
                    border-radius: 15px;
                    overflow: hidden;
                    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
                    transition: transform 0.3s ease;
                    text-align: center;
                    padding: 25px;
                ">
                    <div style="
                        width: 150px;
                        height: 150px;
                        margin: 0 auto 20px;
                        border-radius: 10px;
                        overflow: hidden;
                        border: 2px solid var(--gray-light);
                    ">
                        <img src="{{ asset('images/partenaires/partenaire-1.jpg') }}" 
                             alt="Partenaire 1"
                             style="width: 100%; height: 100%; object-fit: cover;"
                             onerror="this.src='https://images.unsplash.com/photo-1562774053-701939374585?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80'">
                    </div>
                    <h4 style="color: var(--blue-primary); margin-bottom: 10px; font-family: var(--font-primary);">
                        Partenaire 1
                    </h4>
                    <p style="color: var(--gray-dark); font-size: 0.95rem; margin: 0;">
                        Description du partenariat
                    </p>
                </div>
                
                <!-- Photo Partenaire 2 -->
                <div class="photo-partenaire" style="
                    background: white;
                    border-radius: 15px;
                    overflow: hidden;
                    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
                    transition: transform 0.3s ease;
                    text-align: center;
                    padding: 25px;
                ">
                    <div style="
                        width: 150px;
                        height: 150px;
                        margin: 0 auto 20px;
                        border-radius: 10px;
                        overflow: hidden;
                        border: 2px solid var(--gray-light);
                    ">
                        <img src="{{ asset('images/partenaires/partenaire-2.jpg') }}" 
                             alt="Partenaire 2"
                             style="width: 100%; height: 100%; object-fit: cover;"
                             onerror="this.src='https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80'">
                    </div>
                    <h4 style="color: var(--blue-primary); margin-bottom: 10px; font-family: var(--font-primary);">
                        Partenaire 2
                    </h4>
                    <p style="color: var(--gray-dark); font-size: 0.95rem; margin: 0;">
                        Description du partenariat
                    </p>
                </div>
                
                <!-- Photo Partenaire 3 -->
                <div class="photo-partenaire" style="
                    background: white;
                    border-radius: 15px;
                    overflow: hidden;
                    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
                    transition: transform 0.3s ease;
                    text-align: center;
                    padding: 25px;
                ">
                    <div style="
                        width: 150px;
                        height: 150px;
                        margin: 0 auto 20px;
                        border-radius: 10px;
                        overflow: hidden;
                        border: 2px solid var(--gray-light);
                    ">
                        <img src="{{ asset('images/partenaires/partenaire-3.jpg') }}" 
                             alt="Partenaire 3"
                             style="width: 100%; height: 100%; object-fit: cover;"
                             onerror="this.src='https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80'">
                    </div>
                    <h4 style="color: var(--blue-primary); margin-bottom: 10px; font-family: var(--font-primary);">
                        Partenaire 3
                    </h4>
                    <p style="color: var(--gray-dark); font-size: 0.95rem; margin: 0;">
                        Description du partenariat
                    </p>
                </div>
                
                <!-- Photo Partenaire 4 -->
                <div class="photo-partenaire" style="
                    background: white;
                    border-radius: 15px;
                    overflow: hidden;
                    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
                    transition: transform 0.3s ease;
                    text-align: center;
                    padding: 25px;
                ">
                    <div style="
                        width: 150px;
                        height: 150px;
                        margin: 0 auto 20px;
                        border-radius: 10px;
                        overflow: hidden;
                        border: 2px solid var(--gray-light);
                    ">
                        <img src="{{ asset('images/partenaires/partenaire-4.jpg') }}" 
                             alt="Partenaire 4"
                             style="width: 100%; height: 100%; object-fit: cover;"
                             onerror="this.src='https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80'">
                    </div>
                    <h4 style="color: var(--blue-primary); margin-bottom: 10px; font-family: var(--font-primary);">
                        Partenaire 4
                    </h4>
                    <p style="color: var(--gray-dark); font-size: 0.95rem; margin: 0;">
                        Description du partenariat
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Styles pour les photos partenaires */
.photo-partenaire:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.12);
}

.photo-partenaire h4 {
    font-weight: 700;
    font-size: 1.3rem;
}

.photos-grid {
    animation: fadeInUp 0.8s ease-out;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Responsive */
@media (max-width: 768px) {
    .photos-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }
    
    .photo-partenaire {
        padding: 20px;
    }
    
    .photo-partenaire div {
        width: 120px;
        height: 120px;
    }
}

@media (max-width: 480px) {
    .photos-grid {
        grid-template-columns: 1fr;
        max-width: 300px;
        margin: 0 auto;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animation des photos au chargement
    const photoPartenaires = document.querySelectorAll('.photo-partenaire');
    
    photoPartenaires.forEach((photo, index) => {
        photo.style.opacity = '0';
        photo.style.transform = 'translateY(20px)';
        photo.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        
        setTimeout(() => {
            photo.style.opacity = '1';
            photo.style.transform = 'translateY(0)';
        }, index * 200);
    });
    
    // Gestion des erreurs d'images
    const partnerImages = document.querySelectorAll('.photo-partenaire img');
    
    partnerImages.forEach(img => {
        img.addEventListener('error', function() {
            console.log('Image partenaire non trouvée:', this.src);
            // L'image de fallback se chargera automatiquement
        });
    });
});
</script>

<!-- CTA Section -->
<section class="about-cta">
    <div class="cta-content">
        <h2>Construisons ensemble vos projets</h2>
        <p>Que vous ayez un projet de construction, de rénovation ou d'aménagement, notre équipe d'experts est à votre disposition pour le concrétiser avec excellence.</p>
        
        <div class="cta-buttons">
            <a href="{{ route('services') }}" class="cta-btn primary">
                <i class="fas fa-list-check"></i> Découvrir nos services
            </a>
            <a href="{{ route('contact') }}" class="cta-btn secondary">
                <i class="fas fa-envelope"></i> Nous contacter
            </a>
        </div>
    </div>
</section>

<!-- Contact Info -->
<section class="contact-info-section">
    <div class="container">
        <div class="contact-grid">
            <div class="contact-item">
                <div class="contact-icon">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <h3>Téléphones</h3>
                <p>
                    <a href="tel:+243975361498">+243 975 361 498</a><br>
                    <a href="tel:+243853384827">+243 853 384 827</a>
                </p>
            </div>
            
            <div class="contact-item">
                <div class="contact-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <h3>Adresse</h3>
                <p>N°15 Avenue Amisi,<br>Golf Malela, Lubumbashi<br>République Démocratique du Congo</p>
            </div>
            
            <div class="contact-item">
                <div class="contact-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <h3>Email</h3>
                <p><a href="mailto:maisonluabeyasolution@gmail.com">maisonluabeyasolution@gmail.com</a></p>
            </div>
            
            <div class="contact-item">
                <div class="contact-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <h3>Horaires</h3>
                <p>Lundi - Vendredi : 8h00 - 18h00<br>Samedi : 9h00 - 13h00<br>Dimanche : Fermé</p>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // ===== COMPTEURS ANIMÉS =====
    const statNumbers = document.querySelectorAll('.stat-number');
    
    function animateCounter(element) {
        const target = parseInt(element.getAttribute('data-count'));
        const duration = 2000;
        const increment = target / (duration / 16);
        let current = 0;
        
        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                current = target;
                clearInterval(timer);
            }
            element.textContent = Math.floor(current);
        }, 16);
    }
    
    // Observer pour déclencher l'animation
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                statNumbers.forEach(number => {
                    animateCounter(number);
                });
                observer.disconnect();
            }
        });
    }, { threshold: 0.5 });
    
    observer.observe(document.querySelector('.hero-stats'));
    
    // ===== ANIMATION AU SCROLL =====
    const scrollElements = document.querySelectorAll('.valeur-card, .why-card, .expertise-card');
    
    const elementInView = (el, dividend = 1) => {
        const elementTop = el.getBoundingClientRect().top;
        return (
            elementTop <= (window.innerHeight || document.documentElement.clientHeight) / dividend
        );
    };
    
    const displayScrollElement = (element) => {
        element.classList.add('visible');
    };
    
    const handleScrollAnimation = () => {
        scrollElements.forEach((el) => {
            if (elementInView(el, 1.25)) {
                displayScrollElement(el);
            }
        });
    };
    
    // Initial check
    handleScrollAnimation();
    
    // Listen for scroll
    window.addEventListener('scroll', () => {
        handleScrollAnimation();
    });
    
    // ===== ANIMATION DES ÉTAPES DE LA TIMELINE =====
    const timelineSteps = document.querySelectorAll('.methode-step');
    
    const timelineObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateX(0)';
                timelineObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });
    
    timelineSteps.forEach(step => {
        step.style.opacity = '0';
        step.style.transform = 'translateX(-20px)';
        step.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        timelineObserver.observe(step);
    });
});
</script>
@endpush