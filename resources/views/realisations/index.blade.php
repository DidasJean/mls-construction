@extends('layouts.app')

@section('title', 'Nos Réalisations - MLS SARL CONSTRUCTION')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/realisations.css') }}">
<style>
    /* Lightbox simplifiée */
    .lightbox-overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.95);
        z-index: 9999;
        justify-content: center;
        align-items: center;
    }
    
    .lightbox-content {
        max-width: 90%;
        max-height: 90%;
    }
    
    .lightbox-content img {
        width: 100%;
        height: auto;
        border-radius: 10px;
    }
    
    .close-lightbox {
        position: absolute;
        top: 20px;
        right: 20px;
        color: white;
        font-size: 2rem;
        cursor: pointer;
        background: none;
        border: none;
        z-index: 10000;
    }
    
    .lightbox-nav {
        position: absolute;
        top: 50%;
        width: 100%;
        display: flex;
        justify-content: space-between;
        padding: 0 20px;
        transform: translateY(-50%);
        z-index: 10000;
    }
    
    .nav-btn {
        background: rgba(255, 255, 255, 0.2);
        color: white;
        border: none;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        font-size: 1.5rem;
        cursor: pointer;
        transition: background 0.3s;
    }
    
    .nav-btn:hover {
        background: var(--blue-primary);
    }
    
    .project-image {
        cursor: pointer;
    }
    
    /* Info rapide construction */
    .construction-brief {
        display: flex;
        gap: 15px;
        margin-top: 10px;
        font-size: 0.9rem;
        color: var(--gray-dark);
        flex-wrap: wrap;
    }
    
    .construction-info {
        display: flex;
        align-items: center;
        gap: 5px;
        background: var(--gray-light);
        padding: 5px 10px;
        border-radius: 5px;
    }
    
    .construction-info i {
        color: var(--blue-primary);
        font-size: 0.8rem;
    }
    
    /* Pagination */
    .gallery-pagination {
        margin-top: 40px;
        display: flex;
        justify-content: center;
        gap: 10px;
    }
    
    .page-btn {
        width: 40px;
        height: 40px;
        border: 2px solid var(--gray-light);
        background: white;
        border-radius: 5px;
        cursor: pointer;
        transition: all 0.3s;
    }
    
    .page-btn.active {
        background: var(--blue-primary);
        color: white;
        border-color: var(--blue-primary);
    }
    
    .page-btn:hover:not(.active) {
        border-color: var(--blue-primary);
    }
    
    .projects-count {
        text-align: center;
        margin-top: 20px;
        color: var(--gray-dark);
        font-weight: 500;
    }
</style>
@endpush

@section('content')

<!-- Hero Section -->
<section class="realisations-hero">
    <div class="hero-content">
        <h1>Nos Réalisations</h1>
        <p>Découvrez nos 45 projets de construction achevés avec succès. Chaque réalisation témoigne de notre expertise et professionnalisme.</p>
        
        <div class="stats-container">
            <div class="stat-box">
                <span class="stat-number" data-count="45">0</span>
                <span class="stat-label">Projets Réalisés</span>
            </div>
            <div class="stat-box">
                <span class="stat-number" data-count="120">0</span>
                <span class="stat-label">Clients Satisfaits</span>
            </div>
            <div class="stat-box">
                <span class="stat-number" data-count="5">0</span>
                <span class="stat-label">Années d'Expérience</span>
            </div>
        </div>
    </div>
</section>

<!-- Filtres -->
<section class="filters-section">
    <div class="filter-container">
        <h3 class="filter-title">Filtrer par type de projet</h3>
        <div class="filter-buttons">
            <button class="filter-btn active" data-filter="all">
                <i class="fas fa-th"></i> Tous (45)
            </button>
            <button class="filter-btn" data-filter="villa">
                <i class="fas fa-home"></i> Villas (15)
            </button>
            <button class="filter-btn" data-filter="batiment">
                <i class="fas fa-building"></i> Bâtiments (10)
            </button>
            <button class="filter-btn" data-filter="piscine">
                <i class="fas fa-swimming-pool"></i> Piscines (8)
            </button>
            <button class="filter-btn" data-filter="renovation">
                <i class="fas fa-hammer"></i> Rénovations (7)
            </button>
            <button class="filter-btn" data-filter="amenagement">
                <i class="fas fa-tree"></i> Aménagements (5)
            </button>
        </div>
    </div>
</section>

<!-- Galerie des projets -->
<section class="gallery-section">
    <div class="gallery-container">
        <div class="section-title">
            <h2>Nos 45 Réalisations</h2>
            <p>Découvrez notre portfolio complet de projets réalisés avec qualité et professionnalisme.</p>
        </div>
        
        <div class="projects-count">
            <span id="projectsCount">Affichage de 12 projets sur 45</span>
        </div>
        
        <div class="gallery-grid" id="galleryGrid">
            <!-- Projet 1 à 12 seront visibles par défaut -->
            @php
                $categories = ['villa', 'batiment', 'piscine', 'renovation', 'amenagement'];
                $locations = ['Lubumbashi', 'Kinshasa', 'Goma', 'Bukavu', 'Kisangani', 'Matadi', 'Kolwezi', 'Mbuji-Mayi', 'Likasi', 'RDC'];
                $descriptions = [
                    'villa' => ['Construction d\'une villa contemporaine', 'Villa familiale spacieuse', 'Villa moderne avec jardin', 'Villa design de luxe', 'Villa avec piscine intégrée', 'Villa écologique'],
                    'batiment' => ['Bâtiment commercial moderne', 'Immeuble de bureaux', 'Bâtiment administratif', 'Centre commercial', 'Bâtiment éducatif', 'Structure industrielle'],
                    'piscine' => ['Piscine résidentielle', 'Piscine olympique', 'Piscine avec spa', 'Piscine naturelle', 'Piscine intérieure', 'Piscine de loisir'],
                    'renovation' => ['Rénovation complète', 'Transformation moderne', 'Réhabilitation structurelle', 'Rénovation énergétique', 'Modernisation intérieure', 'Restauration patrimoniale'],
                    'amenagement' => ['Aménagement paysager', 'Jardin d\'agrément', 'Terrasse extérieure', 'Espace vert urbain', 'Cour intérieure', 'Parc de loisirs']
                ];
            @endphp
            
            <!-- Projets 1 à 45 -->
            @for($i = 1; $i <= 45; $i++)
                @php
                    $categoryIndex = array_rand($categories);
                    $category = $categories[$categoryIndex];
                    $location = $locations[array_rand($locations)];
                    $descCategory = $descriptions[$category];
                    $description = $descCategory[array_rand($descCategory)];
                    
                    // Attribution de certaines catégories spécifiques pour les premiers projets
                    if($i == 1) $category = 'villa';
                    if($i == 2) $category = 'villa';
                    if($i == 3) $category = 'piscine';
                    if($i == 4) $category = 'renovation';
                    if($i == 5) $category = 'villa';
                    if($i == 6) $category = 'amenagement';
                    if($i == 7) $category = 'batiment';
                    if($i == 8) $category = 'piscine';
                    if($i == 9) $category = 'villa';
                    if($i == 10) $category = 'renovation';
                    
                    // Images différentes pour chaque projet
                    $imageNumber = $i % 20;
                    if($imageNumber == 0) $imageNumber = 20;
                    
                    // Surfaces et durées variables
                    $surfaces = [
                        'villa' => [200, 300, 350, 400, 500],
                        'batiment' => [1000, 1500, 2000, 2500, 3000],
                        'piscine' => ['8x4 m', '10x5 m', '12x6 m', '15x7 m', '25x10 m'],
                        'renovation' => [150, 250, 350, 450, 550],
                        'amenagement' => [500, 1000, 1500, 2000, 2500]
                    ];
                    
                    $durees = [
                        'villa' => ['6 mois', '8 mois', '10 mois', '12 mois', '14 mois'],
                        'batiment' => ['10 mois', '12 mois', '15 mois', '18 mois', '24 mois'],
                        'piscine' => ['3 semaines', '4 semaines', '6 semaines', '8 semaines', '10 semaines'],
                        'renovation' => ['2 mois', '3 mois', '4 mois', '5 mois', '6 mois'],
                        'amenagement' => ['1 mois', '2 mois', '3 mois', '4 mois', '5 mois']
                    ];
                    
                    $surface = is_array($surfaces[$category]) ? $surfaces[$category][array_rand($surfaces[$category])] : $surfaces[$category];
                    $duree = $durees[$category][array_rand($durees[$category])];
                    
                    // Titres spécifiques
                    $titres = [
                        'villa' => ['Villa Moderne #'.$i, 'Résidence '.$location, 'Villa Contemporaine', 'Maison Familiale', 'Villa Design'],
                        'batiment' => ['Bâtiment Commercial', 'Immeuble #'.$i, 'Centre d\'Affaires', 'Édifice Moderne', 'Structure #'.$i],
                        'piscine' => ['Piscine '.$location, 'Bassin #'.$i, 'Piscine Familiale', 'Espace Aquatique', 'Piscine Design'],
                        'renovation' => ['Rénovation #'.$i, 'Transformation', 'Réhabilitation', 'Modernisation', 'Restauration'],
                        'amenagement' => ['Aménagement #'.$i, 'Jardin '.$location, 'Espace Vert', 'Paysagement', 'Terrasse']
                    ];
                    
                    $titre = $titres[$category][array_rand($titres[$category])];
                    
                    // Icônes pour construction brief
                    $icons = [
                        'villa' => ['fas fa-home', 'fas fa-layer-group', 'fas fa-check-circle'],
                        'batiment' => ['fas fa-building', 'fas fa-layer-group', 'fas fa-check-circle'],
                        'piscine' => ['fas fa-swimming-pool', 'fas fa-clock', 'fas fa-tint'],
                        'renovation' => ['fas fa-paint-roller', 'fas fa-clock', 'fas fa-check-circle'],
                        'amenagement' => ['fas fa-tree', 'fas fa-clock', 'fas fa-check-circle']
                    ];
                    
                    $currentIcons = $icons[$category];
                @endphp
                
                <div class="project-card" data-category="{{ $category }}" data-page="{{ ceil($i / 12) }}" style="opacity: 0; transform: translateY(20px);">
                    <div class="project-image" data-image="{{ $i }}">
                        <img src="{{ asset('images/realisations/'.$imageNumber.'.jpg') }}" alt="Projet {{ $titre }}" onerror="this.src='https://images.unsplash.com/photo-1568605114967-8130f3a36994?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'">
                        <div class="project-overlay">
                            <span class="project-category">{{ ucfirst($category) }}</span>
                        </div>
                    </div>
                    <div class="project-content">
                        <h3 class="project-title">{{ $titre }}</h3>
                        <p class="project-description">{{ $description }}</p>
                        
                        <div class="construction-brief">
                            <div class="construction-info">
                                <i class="{{ $currentIcons[0] }}"></i>
                                <span>{{ $surface }}</span>
                            </div>
                            <div class="construction-info">
                                <i class="{{ $currentIcons[1] }}"></i>
                                <span>{{ $duree }}</span>
                            </div>
                            <div class="construction-info">
                                <i class="{{ $currentIcons[2] }}"></i>
                                <span>Terminé</span>
                            </div>
                        </div>
                        
                        <div class="project-details">
                            <div class="project-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>{{ $location }}</span>
                            </div>
                            <button class="view-project view-image" data-image="{{ $i }}">
                                Voir <i class="fas fa-expand"></i>
                            </button>
                        </div>
                    </div>
                </div>
            @endfor
            
        </div>
        
        <!-- Pagination -->
        <div class="gallery-pagination">
            <button class="page-btn active" data-page="1">1</button>
            <button class="page-btn" data-page="2">2</button>
            <button class="page-btn" data-page="3">3</button>
            <button class="page-btn" data-page="4">4</button>
        </div>
         
    </div>
</section>

<!-- Lightbox pour voir les images en grand -->
<div class="lightbox-overlay" id="lightbox">
    <button class="close-lightbox" id="closeLightbox">
        <i class="fas fa-times"></i>
    </button>
    
    <div class="lightbox-nav">
        <button class="nav-btn" id="prevBtn">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button class="nav-btn" id="nextBtn">
            <i class="fas fa-chevron-right"></i>
        </button>
    </div>
    
    <div class="lightbox-content">
        <img id="lightboxImage" src="" alt="">
    </div>
</div>

<!-- Témoignages -->
<section class="testimonials-section">
    <div class="testimonials-container">
        <div class="section-title">
            <h2>Témoignages Clients</h2>
            <p>Ce que nos clients disent de notre travail sur nos 45 projets.</p>
        </div>
        
        <div class="testimonial-grid">
            <div class="testimonial-card">
                <p class="testimonial-content">
                    "MLS SARL a réalisé notre villa de rêve. 45 projets et toujours la même qualité exceptionnelle !"
                </p>
                <div class="testimonial-author">
                    <div class="author-avatar">JD</div>
                    <div class="author-info">
                        <h4>Jean Désiré</h4>
                        <p>Projet #5</p>
                    </div>
                </div>
            </div>
            
            <div class="testimonial-card">
                <p class="testimonial-content">
                    "Professionalisme remarquable sur nos 3 projets avec MLS. Ils maîtrisent parfaitement leur métier."
                </p>
                <div class="testimonial-author">
                    <div class="author-avatar">SM</div>
                    <div class="author-info">
                        <h4>Sarah Mulumba</h4>
                        <p>Projets #12, #18, #32</p>
                    </div>
                </div>
            </div>
            
            <div class="testimonial-card">
                <p class="testimonial-content">
                    "De la conception à la réalisation, MLS a été un partenaire de confiance sur 45 projets réussis."
                </p>
                <div class="testimonial-author">
                    <div class="author-avatar">PK</div>
                    <div class="author-info">
                        <h4>Patrick Kabeya</h4>
                        <p>Projet #28</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="realisations-cta">
    <div class="cta-content">
        <h2>Votre Projet Nous Intéresse</h2>
        <p>Fort de 45 projets réussis, nous sommes prêts à réaliser votre projet de construction.</p>
        
        <div class="cta-buttons">
            <a href="{{ route('contact') }}" class="cta-btn primary">
                <i class="fas fa-calendar-check"></i> Demander un devis
            </a>
            <a href="{{ route('services') }}" class="cta-btn secondary">
                <i class="fas fa-list-check"></i> Voir nos services
            </a>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // ===== PAGINATION =====
    const pageButtons = document.querySelectorAll('.page-btn');
    const projectCards = document.querySelectorAll('.project-card');
    const projectsCount = document.getElementById('projectsCount');
    
    // Afficher seulement la première page au début
    projectCards.forEach((card, index) => {
        const page = parseInt(card.getAttribute('data-page'));
        if(page === 1) {
            card.style.display = 'block';
            setTimeout(() => {
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, index * 50);
        } else {
            card.style.display = 'none';
        }
    });
    
    // Gérer la pagination
    pageButtons.forEach(button => {
        button.addEventListener('click', function() {
            const page = parseInt(this.getAttribute('data-page'));
            
            // Mettre à jour les boutons actifs
            pageButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            
            // Afficher/masquer les cartes
            let visibleCount = 0;
            projectCards.forEach((card, index) => {
                const cardPage = parseInt(card.getAttribute('data-page'));
                if(cardPage === page) {
                    card.style.display = 'block';
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }, (index % 12) * 50);
                    visibleCount++;
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(20px)';
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 300);
                }
            });
            
            // Mettre à jour le compteur
            projectsCount.textContent = `Affichage des projets ${((page-1)*12)+1} à ${Math.min(page*12, 45)} sur 45`;
        });
    });
    
    // ===== FILTRES DE LA GALERIE =====
    const filterButtons = document.querySelectorAll('.filter-btn');
    
    // Compteur de projets par catégorie
    const categoryCounts = {
        'villa': 0,
        'batiment': 0,
        'piscine': 0,
        'renovation': 0,
        'amenagement': 0
    };
    
    projectCards.forEach(card => {
        const category = card.getAttribute('data-category');
        if(categoryCounts[category] !== undefined) {
            categoryCounts[category]++;
        }
    });
    
    // Mettre à jour les compteurs dans les boutons
    filterButtons.forEach(button => {
        const filter = button.getAttribute('data-filter');
        if(filter !== 'all' && categoryCounts[filter] !== undefined) {
            const countSpan = button.querySelector('span');
            if(countSpan) {
                button.innerHTML = button.innerHTML.replace(/\(\d+\)/, `(${categoryCounts[filter]})`);
            }
        }
    });
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Retirer la classe active de tous les boutons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            // Ajouter la classe active au bouton cliqué
            this.classList.add('active');
            
            const filterValue = this.getAttribute('data-filter');
            const currentPage = parseInt(document.querySelector('.page-btn.active').getAttribute('data-page'));
            
            let filteredCount = 0;
            let visibleOnPage = 0;
            
            // Filtrer les cartes de projet
            projectCards.forEach(card => {
                const cardPage = parseInt(card.getAttribute('data-page'));
                const cardCategory = card.getAttribute('data-category');
                
                if(filterValue === 'all' && cardPage === currentPage) {
                    card.style.display = 'block';
                    filteredCount++;
                    visibleOnPage++;
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }, 50);
                } else if(cardCategory === filterValue && cardPage === currentPage) {
                    card.style.display = 'block';
                    filteredCount++;
                    visibleOnPage++;
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }, 50);
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(20px)';
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 300);
                }
            });
            
            // Mettre à jour le compteur
            const totalFiltered = filterValue === 'all' ? 45 : categoryCounts[filterValue];
            projectsCount.textContent = `Affichage de ${visibleOnPage} projets (${filteredCount} sur ${totalFiltered} ${filterValue === 'all' ? 'au total' : 'dans cette catégorie'})`;
        });
    });
    
    // ===== LIGHTBOX =====
    const lightbox = document.getElementById('lightbox');
    const lightboxImage = document.getElementById('lightboxImage');
    const closeLightbox = document.getElementById('closeLightbox');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const viewImageButtons = document.querySelectorAll('.view-image');
    const projectImages = document.querySelectorAll('.project-image img');
    
    let currentImageIndex = 0;
    const images = Array.from(projectImages).map(img => img.src);
    
    // Ouvrir lightbox
    viewImageButtons.forEach(button => {
        button.addEventListener('click', function() {
            const imageNumber = parseInt(this.getAttribute('data-image'));
            currentImageIndex = imageNumber - 1;
            updateLightbox();
            lightbox.style.display = 'flex';
            document.body.style.overflow = 'hidden';
        });
    });
    
    // Clic sur l'image
    projectImages.forEach((img, index) => {
        img.addEventListener('click', function() {
            currentImageIndex = index;
            updateLightbox();
            lightbox.style.display = 'flex';
            document.body.style.overflow = 'hidden';
        });
    });
    
    // Fermer lightbox
    closeLightbox.addEventListener('click', function() {
        lightbox.style.display = 'none';
        document.body.style.overflow = 'auto';
    });
    
    // Navigation lightbox
    prevBtn.addEventListener('click', function() {
        currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
        updateLightbox();
    });
    
    nextBtn.addEventListener('click', function() {
        currentImageIndex = (currentImageIndex + 1) % images.length;
        updateLightbox();
    });
    
    // Navigation clavier
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            lightbox.style.display = 'none';
            document.body.style.overflow = 'auto';
        }
        if (e.key === 'ArrowLeft') {
            prevBtn.click();
        }
        if (e.key === 'ArrowRight') {
            nextBtn.click();
        }
    });
    
    function updateLightbox() {
        if (images[currentImageIndex]) {
            lightboxImage.src = images[currentImageIndex];
        }
    }
    
    // ===== COMPTEURS ANIMÉS =====
    const statNumbers = document.querySelectorAll('.stat-number');
    
    function animateCounter(element) {
        const target = parseInt(element.getAttribute('data-count'));
        const duration = 1500;
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
    
    observer.observe(document.querySelector('.stats-container'));
});
</script>
@endpush