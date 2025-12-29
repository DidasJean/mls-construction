<header class="main-header">
    <div class="header-container">

        <!-- LOGO -->
        <a href="{{ route('home') }}" class="logo-link">
            <img src="{{ asset('images/logo/logo-mls.png') }}" alt="MLS SARL CONSTRUCTION" class="logo-img">
            <div class="logo-text">
                <span class="logo-main">MLS</span>
                <span class="logo-subtitle">Maison Leader Solution</span>
            </div>
        </a>

        <!-- NAVIGATION DESKTOP -->
        <nav class="main-nav">
            <ul class="nav-list">
                <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Accueil</a></li>
                <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">À propos</a></li>
                <li><a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'active' : '' }}">Services</a></li>
                <li><a href="{{ route('realisations') }}" class="{{ request()->routeIs('realisations') ? 'active' : '' }}">Réalisations</a></li>
                <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
            </ul>
        </nav>

        <!-- ACTION -->
        <a href="https://wa.me/243975361498" class="whatsapp-btn" target="_blank">
            <i class="fab fa-whatsapp"></i>
            <span>WhatsApp</span>
        </a>

        <!-- BURGER -->
        <button class="menu-toggle" id="menuToggle">
            <span></span><span></span><span></span>
        </button>
    </div>

    <!-- MOBILE MENU -->
    <div class="mobile-menu" id="mobileMenu">
        <nav class="mobile-nav">
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Accueil</a>
            <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">À propos</a>
            <a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'active' : '' }}">Services</a>
            <a href="{{ route('realisations') }}" class="{{ request()->routeIs('realisations') ? 'active' : '' }}">Réalisations</a>
            <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
        </nav>
    </div>
</header>

<!-- SCRIPT MENU MOBILE -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.getElementById('menuToggle');
    const mobileMenu = document.getElementById('mobileMenu');

    menuToggle.addEventListener('click', function() {
        mobileMenu.classList.toggle('active');
        menuToggle.classList.toggle('active');
    });
});
</script>
