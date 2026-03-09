@extends('layouts.app')

@section('title', 'Accueil - MLS SARL CONSTRUCTION')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
@endpush

@section('content')
<!-- ===== HERO ===== -->
<section class="hero">
  <div class="hero-slideshow">
    <div class="slide active">
      <img src="{{ asset('images/hero/construction-1.jpg') }}" alt="Construction MLS">
      <div class="slide-content">
        <h2>Construction Innovante</h2>
        <p>Des solutions modernes pour vos projets</p>
      </div>
    </div>
    <div class="slide">
      <img src="{{ asset('images/hero/architecture-1.jpg') }}" alt="Architecture MLS">
      <div class="slide-content">
        <h2>Architecture d'Excellence</h2>
        <p>Conception sur-mesure pour vos rêves</p>
      </div>
    </div>
    <div class="slide">
      <img src="{{ asset('images/hero/project-1.jpg') }}" alt="Projet MLS">
      <div class="slide-content">
        <h2>Projets Commerciaux</h2>
        <p>Des bâtiments fonctionnels et esthétiques</p>
      </div>
    </div>
    <div class="slide">
      <img src="{{ asset('images/hero/team-1.jpg') }}" alt="Équipe MLS">
      <div class="slide-content">
        <h2>Équipe Professionnelle</h2>
        <p>Experts dédiés à votre satisfaction</p>
      </div>
    </div>
    <div class="slide">
      <img src="{{ asset('images/hero/site-1.jpg') }}" alt="Chantier MLS">
      <div class="slide-content">
        <h2>Chantiers Actifs</h2>
        <p>Suivi rigoureux de chaque projet</p>
      </div>
    </div>
  </div>

  <div class="hero-overlay"></div>

  <div class="hero-content">
    <h1 class="hero-title">Construisons vos rêves avec <span class="highlight">MLS CONSTRUCTION</span></h1>
    <p class="hero-subtitle">{{ config('mls.company.slogan', 'Nous faisons de vos rêves une réalité') }}</p>
    <div class="hero-buttons">
      <a href="{{ route('services') }}" class="btn btn-primary">
        <span>Découvrir nos services</span>
        <i class="fas fa-arrow-right"></i>
      </a>
      <a href="https://wa.me/{{ config('mls.contact.whatsapp', '243975361498') }}" class="btn btn-secondary" target="_blank">
        <span>Contact WhatsApp</span>
        <i class="fab fa-whatsapp"></i>
      </a>
    </div>
  </div>

  <div class="slide-indicators">
    <span class="indicator active" data-slide="0"></span>
    <span class="indicator" data-slide="1"></span>
    <span class="indicator" data-slide="2"></span>
    <span class="indicator" data-slide="3"></span>
    <span class="indicator" data-slide="4"></span>
  </div>
</section>

<!-- ===== NOS SERVICES ===== -->
<section class="services section-padding">
  <div class="container">
    <div class="section-header">
      <h2 class="section-title">Nos Services</h2>
      <p class="section-subtitle">Des solutions complètes pour tous vos projets de construction</p>
    </div>
    <div class="service-cards">
      <div class="service-card" data-aos="fade-up">
        <div class="card-icon">
          <i class="fas fa-building"></i>
        </div>
        <h3>Construction Générale</h3>
        <p>Maisons, bâtiments commerciaux et industriels modernes et durables.</p>
        <a href="{{ route('services') }}" class="card-link">En savoir plus</a>
      </div>
      <div class="service-card" data-aos="fade-up" data-aos-delay="100">
        <div class="card-icon">
          <i class="fas fa-drafting-compass"></i>
        </div>
        <h3>Architecture & Design</h3>
        <p>Conception sur-mesure pour allier modernité et fonctionnalité.</p>
        <a href="{{ route('services') }}" class="card-link">En savoir plus</a>
      </div>
      <div class="service-card" data-aos="fade-up" data-aos-delay="200">
        <div class="card-icon">
          <i class="fas fa-solar-panel"></i>
        </div>
        <h3>Énergies Renouvelables</h3>
        <p>Installation de panneaux solaires et solutions énergétiques durables.</p>
        <a href="{{ route('services') }}" class="card-link">En savoir plus</a>
      </div>
    </div>
  </div><br><br>
</section>
<br><br>

<!-- ===== NOS RÉALISATIONS ===== -->
<section class="realisations section-padding bg-light">
  <div class="container">
    <div class="section-header">
      <h2 class="section-title">Nos Réalisations</h2>
      <p class="section-subtitle">Découvrez quelques-unes de nos maisons d'habitation récentes</p>
    </div>

    <!-- Galerie simple -->
    <div class="realisations-grid">
      <!-- Projet 1 -->
      <div class="realisation-card">
        <a href="{{ route('realisations') }}" class="realisation-link">
          <div class="realisation-image">
            <img src="{{ asset('images/realisations/projet1.jpg') }}" alt="Maison Moderne" loading="lazy">
            <div class="realisation-overlay">
              <div class="overlay-content">
                <h3>Maison Moderne</h3>
                <p>Lubumbashi • 4 Chambres • 250m²</p>
              </div>
            </div>
          </div>
        </a>
        <div class="realisation-info">
          <h3>Résidence Prestige</h3>
          <p>Construction complète avec finitions haut de gamme et jardin privé</p>
        </div>
      </div>

      <!-- Projet 2 -->
      <div class="realisation-card">
        <a href="{{ route('realisations') }}" class="realisation-link">
          <div class="realisation-image">
            <img src="{{ asset('images/realisations/projet2.jpg') }}" alt="Maison Familiale" loading="lazy">
            <div class="realisation-overlay">
              <div class="overlay-content">
                <h3>Résidence Familiale</h3>
                <p>Golf Malela • 3 Chambres • 180m²</p>
              </div>
            </div>
          </div>
        </a>
        <div class="realisation-info">
          <h3>Maison Familiale</h3>
          <p>Espace professionnel et résidentiel combiné, idéal pour famille</p>
        </div>
      </div>

      <!-- Projet 3 -->
      <div class="realisation-card">
        <a href="{{ route('realisations') }}" class="realisation-link">
          <div class="realisation-image">
            <img src="{{ asset('images/realisations/projet3.jpg') }}" alt="Rénovation" loading="lazy">
            <div class="realisation-overlay">
              <div class="overlay-content">
                <h3>Transformation</h3>
                <p>Av. Amisi • 5 Chambres • 300m²</p>
              </div>
            </div>
          </div>
        </a>
        <div class="realisation-info">
          <h3>Rénovation Moderne</h3>
          <p>Modernisation complète d'un espace existant avec design contemporain</p>
        </div>
      </div>
    </div>

    <!-- Bouton Voir plus -->
    <div class="text-center mt-5">
      <a href="{{ route('realisations') }}" class="btn btn-primary">
        <span>Voir toutes nos réalisations</span>
        <i class="fas fa-arrow-right"></i>
      </a>
    </div>
  </div>
</section>


<!-- ===== POURQUOI NOUS CHOISIR ===== -->
<section class="why-us section-padding bg-light">
  <div class="container">
    <div class="section-header">
      <h2 class="section-title">Pourquoi choisir MLS ?</h2>
      <p class="section-subtitle">L'excellence et l'engagement au cœur de notre métier</p>
    </div>
    <div class="why-grid">
      <div class="why-card" data-aos="fade-right">
        <div class="why-number">01</div>
        <h3>Expertise Locale</h3>
        <p>Équipe qualifiée basée à Lubumbashi qui comprend vos besoins.</p>
      </div>
      <div class="why-card" data-aos="fade-right" data-aos-delay="100">
        <div class="why-number">02</div>
        <h3>Projets Durables</h3>
        <p>Matériaux de qualité et respect des normes environnementales.</p>
      </div>
      <div class="why-card" data-aos="fade-right" data-aos-delay="200">
        <div class="why-number">03</div>
        <h3>Suivi Personnalisé</h3>
        <p>Accompagnement de A à Z avec transparence et communication.</p>
      </div>
      <div class="why-card" data-aos="fade-right" data-aos-delay="300">
        <div class="why-number">04</div>
        <h3>Respect des Délais</h3>
        <p>Engagement ferme sur les délais avec planning rigoureux.</p>
      </div>
    </div>
  </div>
</section>

@endsection

@push('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>

    // Animation au scroll
function initScrollAnimations() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-in');
            }
        });
    }, observerOptions);

    // Observer les cartes de service
    document.querySelectorAll('.service-card').forEach(card => {
        observer.observe(card);
    });

    // Observer les cartes "why us"
    document.querySelectorAll('.why-card').forEach(card => {
        observer.observe(card);
    });
}

// Effet parallaxe sur le hero
function initParallax() {
    const hero = document.querySelector('.hero');
    if (hero) {
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const rate = scrolled * -0.5;
            hero.style.transform = `translate3d(0, ${rate}px, 0)`;
        });
    }
}

// Counter animation (optionnel)
function initCounters() {
    const counters = document.querySelectorAll('.counter');
    if (counters.length === 0) return;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                const target = +counter.getAttribute('data-target');
                const duration = 2000;
                const step = target / (duration / 16);
                let current = 0;

                const timer = setInterval(() => {
                    current += step;
                    if (current >= target) {
                        current = target;
                        clearInterval(timer);
                    }
                    counter.textContent = Math.floor(current).toLocaleString();
                }, 16);

                observer.unobserve(counter);
            }
        });
    }, { threshold: 0.5 });

    counters.forEach(counter => observer.observe(counter));
}

// Initialiser tout quand le DOM est chargé
document.addEventListener('DOMContentLoaded', function() {
    // AOS animations
    AOS.init({
        duration: 1000,
        once: true,
        offset: 100,
        disable: 'mobile'
    });
    
    // Slider Hero
    const slides = document.querySelectorAll('.hero-slideshow .slide');
    const indicators = document.querySelectorAll('.indicator');
    let currentSlide = 0;
    let slideInterval;

    function showSlide(index) {
        slides.forEach(slide => slide.classList.remove('active'));
        indicators.forEach(indicator => indicator.classList.remove('active'));
        
        slides[index].classList.add('active');
        indicators[index].classList.add('active');
        
        currentSlide = index;
    }

    function nextSlide() {
        const next = (currentSlide + 1) % slides.length;
        showSlide(next);
    }

    // Navigation par indicateurs
    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
            clearInterval(slideInterval);
            showSlide(index);
            startSlideshow();
        });
    });

    // Pause au survol
    const hero = document.querySelector('.hero');
    hero.addEventListener('mouseenter', () => clearInterval(slideInterval));
    hero.addEventListener('mouseleave', startSlideshow);

    function startSlideshow() {
        slideInterval = setInterval(nextSlide, 5000);
    }

    // Démarrer le slideshow
    startSlideshow();

    // Initialiser les animations supplémentaires
    initScrollAnimations();
    initParallax();
    initCounters();
    
    // Smooth scroll pour les ancres
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href === '#') return;
            
            const targetElement = document.querySelector(href);
            if (targetElement) {
                e.preventDefault();
                window.scrollTo({
                    top: targetElement.offsetTop - 100,
                    behavior: 'smooth'
                });
            }
        });
    });
});
document.addEventListener('DOMContentLoaded', function() {
  // AOS
  AOS.init({ duration: 1000, once: true });
  
  // Slider
  const slides = document.querySelectorAll('.slide');
  const indicators = document.querySelectorAll('.indicator');
  let currentSlide = 0;
  
  function showSlide(index) {
    slides.forEach(slide => slide.classList.remove('active'));
    indicators.forEach(indicator => indicator.classList.remove('active'));
    
    slides[index].classList.add('active');
    indicators[index].classList.add('active');
    currentSlide = index;
  }
  
  function nextSlide() {
    showSlide((currentSlide + 1) % slides.length);
  }
  
  indicators.forEach((indicator, index) => {
    indicator.addEventListener('click', () => showSlide(index));
  });
  
  setInterval(nextSlide, 5000);
});
</script>
@endpush