/**
 * MLS SARL CONSTRUCTION - JavaScript Principal
 * Design Premium avec Carousel Hero
 */

document.addEventListener('DOMContentLoaded', function() {
    // ============================================
    // 1. HERO CAROUSEL
    // ============================================
    class HeroCarousel {
        constructor() {
            this.slides = document.querySelectorAll('.carousel-slide');
            this.dots = document.querySelectorAll('.carousel-dot');
            this.prevBtn = document.querySelector('.carousel-prev');
            this.nextBtn = document.querySelector('.carousel-next');
            this.currentIndex = 0;
            this.totalSlides = this.slides.length;
            this.interval = null;
            this.autoPlayDelay = 5000; // 5 secondes
            
            this.init();
        }
        
        init() {
            if (this.slides.length === 0) return;
            
            // Afficher la première slide
            this.showSlide(0);
            
            // Démarrer l'auto-play
            this.startAutoPlay();
            
            // Événements pour les dots
            this.dots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    this.showSlide(index);
                    this.resetAutoPlay();
                });
            });
            
            // Boutons précédent/suivant
            if (this.prevBtn) {
                this.prevBtn.addEventListener('click', () => {
                    this.prevSlide();
                    this.resetAutoPlay();
                });
            }
            
            if (this.nextBtn) {
                this.nextBtn.addEventListener('click', () => {
                    this.nextSlide();
                    this.resetAutoPlay();
                });
            }
            
            // Pause au survol
            const hero = document.querySelector('.hero');
            if (hero) {
                hero.addEventListener('mouseenter', () => this.stopAutoPlay());
                hero.addEventListener('mouseleave', () => this.startAutoPlay());
            }
            
            // Navigation au clavier
            document.addEventListener('keydown', (e) => {
                if (e.key === 'ArrowLeft') {
                    this.prevSlide();
                    this.resetAutoPlay();
                } else if (e.key === 'ArrowRight') {
                    this.nextSlide();
                    this.resetAutoPlay();
                }
            });
        }
        
        showSlide(index) {
            // Masquer toutes les slides
            this.slides.forEach(slide => {
                slide.classList.remove('active');
            });
            
            // Désactiver tous les dots
            this.dots.forEach(dot => {
                dot.classList.remove('active');
            });
            
            // Afficher la slide courante
            this.currentIndex = index;
            this.slides[index].classList.add('active');
            this.dots[index].classList.add('active');
            
            // Ajouter un effet de fondu
            this.slides[index].style.opacity = '0';
            setTimeout(() => {
                this.slides[index].style.opacity = '1';
            }, 50);
        }
        
        nextSlide() {
            let nextIndex = this.currentIndex + 1;
            if (nextIndex >= this.totalSlides) {
                nextIndex = 0;
            }
            this.showSlide(nextIndex);
        }
        
        prevSlide() {
            let prevIndex = this.currentIndex - 1;
            if (prevIndex < 0) {
                prevIndex = this.totalSlides - 1;
            }
            this.showSlide(prevIndex);
        }
        
        startAutoPlay() {
            this.stopAutoPlay();
            this.interval = setInterval(() => {
                this.nextSlide();
            }, this.autoPlayDelay);
        }
        
        stopAutoPlay() {
            if (this.interval) {
                clearInterval(this.interval);
                this.interval = null;
            }
        }
        
        resetAutoPlay() {
            this.stopAutoPlay();
            this.startAutoPlay();
        }
    }
    
    // Initialiser le carousel
    const heroCarousel = new HeroCarousel();
    
    // ============================================
    // 2. NAVIGATION MOBILE
    // ============================================
    const menuToggle = document.getElementById('menuToggle');
    const mobileMenu = document.getElementById('mobileMenu');
    
    if (menuToggle && mobileMenu) {
        menuToggle.addEventListener('click', function() {
            this.classList.toggle('active');
            mobileMenu.classList.toggle('active');
            document.body.style.overflow = mobileMenu.classList.contains('active') ? 'hidden' : '';
        });
        
        // Fermer le menu en cliquant sur un lien
        const mobileLinks = mobileMenu.querySelectorAll('a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                menuToggle.classList.remove('active');
                mobileMenu.classList.remove('active');
                document.body.style.overflow = '';
            });
        });
        
        // Fermer le menu en cliquant à l'extérieur
        document.addEventListener('click', (e) => {
            if (!menuToggle.contains(e.target) && !mobileMenu.contains(e.target)) {
                menuToggle.classList.remove('active');
                mobileMenu.classList.remove('active');
                document.body.style.overflow = '';
            }
        });
    }
    
    // ============================================
    // 3. HEADER SCROLL EFFECT
    // ============================================
    const navbar = document.querySelector('.navbar');
    
    function handleScroll() {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
        
        // Faire apparaître les éléments au scroll
        const revealElements = document.querySelectorAll('.reveal');
        revealElements.forEach(element => {
            const elementTop = element.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;
            
            if (elementTop < windowHeight - 100) {
                element.classList.add('revealed');
            }
        });
    }
    
    window.addEventListener('scroll', handleScroll);
    window.addEventListener('load', handleScroll);
    
    // ============================================
    // 4. ANIMATIONS AU SCROLL
    // ============================================
    function initAnimations() {
        // Ajouter la classe reveal aux éléments
        const elementsToReveal = document.querySelectorAll('.service-card, .contact-item, .btn');
        elementsToReveal.forEach(element => {
            element.classList.add('reveal');
        });
        
        // CSS pour les animations reveal
        const style = document.createElement('style');
        style.textContent = `
            .reveal {
                opacity: 0;
                transform: translateY(30px);
                transition: all 0.8s ease;
            }
            
            .reveal.revealed {
                opacity: 1;
                transform: translateY(0);
            }
            
            .reveal:nth-child(2) { transition-delay: 0.1s; }
            .reveal:nth-child(3) { transition-delay: 0.2s; }
            .reveal:nth-child(4) { transition-delay: 0.3s; }
            .reveal:nth-child(5) { transition-delay: 0.4s; }
            .reveal:nth-child(6) { transition-delay: 0.5s; }
        `;
        document.head.appendChild(style);
    }
    
    initAnimations();
    
    // ============================================
    // 5. WHATSAPP TRACKING
    // ============================================
    function trackWhatsAppClick(source) {
        // Envoyer une requête au serveur pour tracker le clic
        fetch('/whatsapp/track', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content || ''
            },
            body: JSON.stringify({
                source: source,
                timestamp: new Date().toISOString(),
                url: window.location.href
            })
        }).catch(error => console.log('Tracking error:', error));
        
        // Log en console pour le développement
        console.log(`WhatsApp click tracked from: ${source}`);
    }
    
    // Ajouter le tracking à tous les boutons WhatsApp
    const whatsappButtons = document.querySelectorAll('[data-whatsapp-track]');
    whatsappButtons.forEach(button => {
        button.addEventListener('click', function() {
            const source = this.getAttribute('data-whatsapp-track') || 'unknown';
            trackWhatsAppClick(source);
        });
    });
    
    // ============================================
    // 6. SMOOTH SCROLL POUR LES ANCRES
    // ============================================
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            
            if (href === '#') return;
            
            const targetElement = document.querySelector(href);
            if (targetElement) {
                e.preventDefault();
                
                // Fermer le menu mobile si ouvert
                if (menuToggle && menuToggle.classList.contains('active')) {
                    menuToggle.classList.remove('active');
                    mobileMenu.classList.remove('active');
                    document.body.style.overflow = '';
                }
                
                window.scrollTo({
                    top: targetElement.offsetTop - 80,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // ============================================
    // 7. PRELOADER
    // ============================================
    window.addEventListener('load', function() {
        setTimeout(function() {
            const preloader = document.getElementById('preloader');
            const mainContent = document.getElementById('main-content');
            
            if (preloader) {
                preloader.style.opacity = '0';
                preloader.style.transition = 'opacity 0.5s ease';
                
                setTimeout(function() {
                    preloader.style.display = 'none';
                    if (mainContent) mainContent.style.display = 'block';
                }, 500);
            } else if (mainContent) {
                mainContent.style.display = 'block';
            }
        }, 800);
    });
    
    // ============================================
    // 8. CONTACT FORM (SI DISPONIBLE)
    // ============================================
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Validation simple
            const name = this.querySelector('input[name="name"]');
            const email = this.querySelector('input[name="email"]');
            const message = this.querySelector('textarea[name="message"]');
            
            let isValid = true;
            
            if (!name.value.trim()) {
                showError(name, 'Veuillez entrer votre nom');
                isValid = false;
            }
            
            if (!email.value.trim() || !isValidEmail(email.value)) {
                showError(email, 'Veuillez entrer un email valide');
                isValid = false;
            }
            
            if (!message.value.trim()) {
                showError(message, 'Veuillez entrer votre message');
                isValid = false;
            }
            
            if (isValid) {
                // Simuler l'envoi
                const submitBtn = this.querySelector('button[type="submit"]');
                const originalText = submitBtn.textContent;
                
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Envoi en cours...';
                submitBtn.disabled = true;
                
                setTimeout(() => {
                    // Rediriger vers WhatsApp avec le message
                    const whatsappMessage = `Bonjour, je suis ${name.value}. ${message.value}`;
                    const encodedMessage = encodeURIComponent(whatsappMessage);
                    const whatsappUrl = `https://wa.me/{{ config('mls.contact.whatsapp.number') }}?text=${encodedMessage}`;
                    
                    window.open(whatsappUrl, '_blank');
                    
                    // Réinitialiser le formulaire
                    submitBtn.textContent = originalText;
                    submitBtn.disabled = false;
                    contactForm.reset();
                }, 1500);
            }
        });
        
        function showError(input, message) {
            const errorDiv = input.nextElementSibling;
            if (errorDiv && errorDiv.classList.contains('error-message')) {
                errorDiv.textContent = message;
                errorDiv.style.display = 'block';
            }
            
            input.style.borderColor = '#EF4444';
            input.focus();
        }
        
        function isValidEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }
        
        // Réinitialiser les erreurs
        const formInputs = contactForm.querySelectorAll('input, textarea');
        formInputs.forEach(input => {
            input.addEventListener('input', function() {
                this.style.borderColor = '';
                const errorDiv = this.nextElementSibling;
                if (errorDiv && errorDiv.classList.contains('error-message')) {
                    errorDiv.style.display = 'none';
                }
            });
        });
    }
    
    // ============================================
    // 9. COMPTEUR STATISTIQUES (OPTIONNEL)
    // ============================================
    function initCounters() {
        const counters = document.querySelectorAll('.counter');
        if (counters.length === 0) return;
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counter = entry.target;
                    const target = +counter.getAttribute('data-target');
                    const duration = 2000; // 2 secondes
                    const step = target / (duration / 16); // 60fps
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
    
    // Appeler initCounters() si vous ajoutez des compteurs plus tard
    
    // ============================================
    // 10. INITIALISATION FINALE
    // ============================================
    console.log('%c🚀 MLS SARL CONSTRUCTION - Site chargé avec succès!', 
        'color: #FF6B35; font-size: 16px; font-weight: bold;');
    console.log('%c👷‍♂️ Prêt à construire vos rêves!', 
        'color: #0A2E6D; font-size: 14px;');
});
// Header functionality
document.addEventListener('DOMContentLoaded', function() {
    const header = document.querySelector('.main-header');
    const menuToggle = document.getElementById('menuToggle');
    const mobileMenu = document.getElementById('mobileMenu');
    const menuClose = document.getElementById('menuClose');

    // Scroll effect
    function handleScroll() {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    }

    window.addEventListener('scroll', handleScroll);
    handleScroll(); // Initial check

    // Mobile menu toggle
    if (menuToggle && mobileMenu) {
        menuToggle.addEventListener('click', function() {
            this.classList.toggle('active');
            mobileMenu.classList.toggle('active');
            document.body.style.overflow = mobileMenu.classList.contains('active') ? 'hidden' : '';
        });

        // Close menu
        if (menuClose) {
            menuClose.addEventListener('click', function() {
                menuToggle.classList.remove('active');
                mobileMenu.classList.remove('active');
                document.body.style.overflow = '';
            });
        }

        // Close menu when clicking on a link
        const mobileLinks = mobileMenu.querySelectorAll('.mobile-nav-link');
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                menuToggle.classList.remove('active');
                mobileMenu.classList.remove('active');
                document.body.style.overflow = '';
            });
        });

        // Close menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!menuToggle.contains(e.target) && !mobileMenu.contains(e.target)) {
                menuToggle.classList.remove('active');
                mobileMenu.classList.remove('active');
                document.body.style.overflow = '';
            }
        });
    }

    // Active link highlighting
    function setActiveLink() {
        const currentPath = window.location.pathname;
        const navLinks = document.querySelectorAll('.nav-link, .mobile-nav-link');
        
        navLinks.forEach(link => {
            const linkPath = new URL(link.href).pathname;
            if (linkPath === currentPath || 
                (currentPath === '/' && linkPath === '') ||
                (currentPath.includes(linkPath) && linkPath !== '/')) {
                link.classList.add('active');
            } else {
                link.classList.remove('active');
            }
        });
    }

    setActiveLink();

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            
            if (href === '#') return;
            
            const targetElement = document.querySelector(href);
            if (targetElement) {
                e.preventDefault();
                
                // Close mobile menu if open
                if (menuToggle && menuToggle.classList.contains('active')) {
                    menuToggle.classList.remove('active');
                    mobileMenu.classList.remove('active');
                    document.body.style.overflow = '';
                }
                
                window.scrollTo({
                    top: targetElement.offsetTop - 100,
                    behavior: 'smooth'
                });
            }
        });
    });
});