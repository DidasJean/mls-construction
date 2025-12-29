@extends('layouts.app')

@section('title', 'Contact - MLS SARL CONSTRUCTION')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endpush

@section('content')

<!-- Hero Section Premium -->
<section class="contact-hero">
    <div class="hero-content">
        <div class="hero-badge">
            <span><i class="fas fa-bolt"></i> RÉPONSE RAPIDE GARANTIE</span>
        </div>
        
        <h1>Contactez l'Excellence</h1>
        <p>Votre vision mérite le meilleur. Discutons de votre projet pour le transformer en réalité avec professionnalisme et passion.</p>
        
        <div class="hero-cta">
            <a href="#whatsappForm" class="hero-btn whatsapp">
                <i class="fab fa-whatsapp"></i> Devis gratuit via WhatsApp
            </a>
            <a href="tel:+243975361498" class="hero-btn call">
                <i class="fas fa-phone-alt"></i> Appeler maintenant
            </a>
        </div>
    </div>
</section>
@push('styles')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
<style>
.contact-hero {
    background: linear-gradient(135deg, rgba(10, 46, 109, 0.9), rgba(10, 46, 109, 0.8)),
                url('{{ asset("images/contact/contact-hero.jpg") }}') center/cover no-repeat !important;
}
</style>
@endpush

<!-- Statistics Bar -->
<section class="stats-bar">
    <div class="stats-container">
        <div class="stat-item">
            <span class="stat-number" data-count="24">0</span>
            <span class="stat-label">Heures de réponse</span>
        </div>
        <div class="stat-item">
            <span class="stat-number" data-count="98">0</span>
            <span class="stat-label">Clients satisfaits</span>
        </div>
        <div class="stat-item">
            <span class="stat-number" data-count="14">0</span>
            <span class="stat-label">Services offerts</span>
        </div>
        <div class="stat-item">
            <span class="stat-number" data-count="150">0</span>
            <span class="stat-label">Projets réalisés</span>
        </div>
    </div>
</section>

<!-- Contact Grid Premium -->
<section class="contact-grid-section">
    <div class="contact-grid">
        <!-- Info Colonne Luxueuse -->
        <div class="contact-info-premium">
            <div class="info-header-premium">
                <h2>Notre Équipe Vous Attend</h2>
                <p>Des professionnels à votre écoute pour concrétiser vos plus grands projets</p>
            </div>
            
            <div class="contact-cards">
                <div class="contact-card">
                    <div class="card-icon-premium">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="card-content">
                        <h3>Téléphone Direct</h3>
                        <p>
                            <a href="tel:+243975361498">+243 975 361 498</a><br>
                            <a href="tel:+243853384827">+243 853 384 827</a>
                        </p>
                    </div>
                </div>
                
                <div class="contact-card">
                    <div class="card-icon-premium">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="card-content">
                        <h3>Email Professionnel</h3>
                        <p><a href="mailto:maisonluabeyasolution@gmail.com">maisonluabeyasolution@gmail.com</a></p>
                    </div>
                </div>
                
                <div class="contact-card">
                    <div class="card-icon-premium">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="card-content">
                        <h3>Siège Social</h3>
                        <p>
                            N°15 Avenue Amisi<br>
                            Golf Malela, Lubumbashi<br>
                            République Démocratique du Congo
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Horaires Premium -->
            <div class="hours-card">
                <h3><i class="fas fa-clock"></i> Horaires d'Ouverture</h3>
                <ul class="hours-list">
                    <li>
                        <span>Lundi - Vendredi</span>
                        <span>8h00 - 18h00</span>
                    </li>
                    <li>
                        <span>Samedi</span>
                        <span>9h00 - 13h00</span>
                    </li>
                    <li>
                        <span>Dimanche</span>
                        <span>Sur rendez-vous</span>
                    </li>
                </ul>
            </div>
            
            <!-- Réseaux Sociaux Premium -->
            <div style="margin-top: 40px; text-align: center;">
                <h3 style="font-family: var(--font-primary); color: var(--blue-primary); margin-bottom: 25px; font-size: 1.3rem;">Connectons-nous</h3>
                <div style="display: flex; justify-content: center; gap: 20px;">
                    <a href="https://www.facebook.com/profile.php?id=100064501040602" target="_blank" 
                       style="width: 55px; height: 55px; background: linear-gradient(135deg, #1877F2, #0A5BC4); border-radius: 15px; display: flex; align-items: center; justify-content: center; color: white; text-decoration: none; transition: all 0.3s ease; box-shadow: 0 5px 15px rgba(24, 119, 242, 0.2);"
                       onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 10px 25px rgba(24, 119, 242, 0.3)'"
                       onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 5px 15px rgba(24, 119, 242, 0.2)'">
                        <i class="fab fa-facebook-f fa-lg"></i>
                    </a>
                    <a href="https://www.instagram.com/p/CkTKlpFDH9s/" target="_blank" 
                       style="width: 55px; height: 55px; background: linear-gradient(135deg, #E4405F, #C13584); border-radius: 15px; display: flex; align-items: center; justify-content: center; color: white; text-decoration: none; transition: all 0.3s ease; box-shadow: 0 5px 15px rgba(228, 64, 95, 0.2);"
                       onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 10px 25px rgba(228, 64, 95, 0.3)'"
                       onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 5px 15px rgba(228, 64, 95, 0.2)'">
                        <i class="fab fa-instagram fa-lg"></i>
                    </a>
                    <a href="https://youtube.com/@maisonluabeyasolution3919" target="_blank" 
                       style="width: 55px; height: 55px; background: linear-gradient(135deg, #FF0000, #CC0000); border-radius: 15px; display: flex; align-items: center; justify-content: center; color: white; text-decoration: none; transition: all 0.3s ease; box-shadow: 0 5px 15px rgba(255, 0, 0, 0.2);"
                       onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 10px 25px rgba(255, 0, 0, 0.3)'"
                       onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 5px 15px rgba(255, 0, 0, 0.2)'">
                        <i class="fab fa-youtube fa-lg"></i>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Formulaire Premium -->
        <div class="contact-form-premium">
            <div class="form-header-premium">
                <h2>Demande de Devis</h2>
                <p>Remplissez ce formulaire pour un devis personnalisé gratuit. Nous vous répondrons via WhatsApp dans les 24h.</p>
            </div>
            
            <div class="whatsapp-banner">
                <div class="whatsapp-icon">
                    <i class="fab fa-whatsapp"></i>
                </div>
                <div class="banner-content">
                    <h4>Réponse WhatsApp Instantanée</h4>
                    <p>Votre demande sera traitée directement via WhatsApp pour une communication rapide et efficace.</p>
                </div>
            </div>
            
            <form id="whatsappForm" class="premium-form">
                @csrf
                
                <div class="form-row-premium">
                    <div class="form-group-premium">
                        <label for="nom"><i class="fas fa-user"></i> Nom complet *</label>
                        <input type="text" id="nom" name="nom" required placeholder="Votre nom et prénom">
                    </div>
                    
                    <div class="form-group-premium">
                        <label for="telephone"><i class="fas fa-phone"></i> Numéro WhatsApp *</label>
                        <input type="tel" id="telephone" name="telephone" required placeholder="+243 XX XXX XXXX">
                    </div>
                </div>
                
                <div class="form-group-premium">
                    <label for="email"><i class="fas fa-envelope"></i> Adresse email</label>
                    <input type="email" id="email" name="email" placeholder="votre@email.com">
                </div>
                
                <div class="form-row-premium">
                    <div class="form-group-premium">
                        <label for="service"><i class="fas fa-cogs"></i> Service demandé *</label>
                        <select id="service" name="service" required>
                            <option value="">Choisir un service</option>
                            <option value="Construction générale">Construction générale</option>
                            <option value="Forage">Forage</option>
                            <option value="Peinture">Peinture</option>
                            <option value="Plomberie">Plomberie</option>
                            <option value="Froid et climatisation">Froid et climatisation</option>
                            <option value="Construction piscine">Construction piscine</option>
                            <option value="Énergies renouvelables">Énergies renouvelables</option>
                            <option value="Carreaux">Carreaux</option>
                            <option value="Plafond">Plafond</option>
                            <option value="Vente des parcelles">Vente des parcelles</option>
                            <option value="Menuiserie">Menuiserie</option>
                            <option value="Location engins">Location engins</option>
                            <option value="Architecture">Architecture</option>
                            <option value="Nettoyage (bâtiment)">Nettoyage (bâtiment)</option>
                            <option value="Autre">Autre</option>
                        </select>
                    </div>
                    
                    <div class="form-group-premium">
                        <label for="type_projet"><i class="fas fa-project-diagram"></i> Type de projet *</label>
                        <select id="type_projet" name="type_projet" required>
                            <option value="">Type de projet</option>
                            <option value="Résidentiel">Résidentiel</option>
                            <option value="Commercial">Commercial</option>
                            <option value="Industriel">Industriel</option>
                            <option value="Rénovation">Rénovation</option>
                            <option value="Aménagement">Aménagement</option>
                            <option value="Autre">Autre</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-row-premium">
                    <div class="form-group-premium">
                        <label for="ville"><i class="fas fa-city"></i> Ville *</label>
                        <input type="text" id="ville" name="ville" required placeholder="Votre ville">
                    </div>
                    
                    <div class="form-group-premium">
                        <label for="budget"><i class="fas fa-money-bill-wave"></i> Budget estimé</label>
                        <select id="budget" name="budget">
                            <option value="">Fourchette de budget</option>
                            <option value="Moins de 5.000 USD">Moins de 5.000 USD</option>
                            <option value="5.000 - 10.000 USD">5.000 - 10.000 USD</option>
                            <option value="10.000 - 50.000 USD">10.000 - 50.000 USD</option>
                            <option value="50.000 - 100.000 USD">50.000 - 100.000 USD</option>
                            <option value="Plus de 100.000 USD">Plus de 100.000 USD</option>
                            <option value="À discuter">À discuter</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group-premium">
                    <label for="message"><i class="fas fa-comment-dots"></i> Description du projet *</label>
                    <textarea id="message" name="message" required placeholder="Décrivez votre projet en détail..."></textarea>
                </div>
                
                <button type="submit" class="submit-btn-premium">
                    <i class="fab fa-whatsapp"></i>
                    Envoyer sur WhatsApp
                </button>
            </form>
        </div>
    </div>
</section>

<!-- Map Section Premium -->
<section class="map-section-premium">
    <div class="map-container-premium">
        <div class="map-header-premium">
            <h2>Visitez Notre Siège</h2>
            <p>Venez nous rencontrer à notre bureau pour discuter de votre projet en toute confiance</p>
        </div>
        
        <div class="map-wrapper-premium">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.7890370024847!2d27.462068074729586!3d-11.665248489456954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19723e2a3a6c9b5b%3A0x74234d21c35ad9fc!2sLubumbashi%2C%20Democratic%20Republic%20of%20the%20Congo!5e0!3m2!1sen!2s!4v1690234567890!5m2!1sen!2s" 
                width="100%" 
                height="100%" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
            
            <div class="map-overlay">
                <div class="map-overlay-content">
                    <h3>MLS SARL CONSTRUCTION</h3>
                    <p>N°15 Avenue Amisi, Golf Malela, Lubumbashi</p>
                </div>
                <a href="https://maps.google.com/?q=15+Avenue+Amisi,+Golf+Malela,+Lubumbashi" target="_blank" class="map-directions">
                    <i class="fas fa-directions"></i>
                    Itinéraire
                </a>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Premium -->
<section class="faq-section-premium">
    <div class="faq-container-premium">
        <div class="faq-header-premium">
            <h2>Questions Fréquentes</h2>
            <p>Trouvez rapidement les réponses à vos interrogations concernant nos services</p>
        </div>
        
        <div class="faq-list-premium">
            <div class="faq-item-premium">
                <div class="faq-question-premium">
                    <span>Quel est le délai moyen pour obtenir un devis ?</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer-premium">
                    <p>Nous vous répondons généralement dans les 24 heures ouvrables. Pour les projets complexes nécessitant une étude approfondie, le délai peut aller jusqu'à 48 heures. Tous nos devis sont détaillés et personnalisés.</p>
                </div>
            </div>
            
            <div class="faq-item-premium">
                <div class="faq-question-premium">
                    <span>Quelle est votre zone d'intervention ?</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer-premium">
                    <p>Nous intervenons dans toute la République Démocratique du Congo. Notre siège est à Lubumbashi, mais nous déployons nos équipes partout dans le pays pour réaliser vos projets, quelles que soient leurs dimensions.</p>
                </div>
            </div>
            
            <div class="faq-item-premium">
                <div class="faq-question-premium">
                    <span>Proposez-vous des garanties sur vos travaux ?</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer-premium">
                    <p>Absolument. Tous nos travaux bénéficient de garanties contractualisées. La durée varie selon le type de travaux (généralement de 1 à 5 ans). Nous délivrons un certificat de garantie et assurons un suivi post-travaux.</p>
                </div>
            </div>
            
            <div class="faq-item-premium">
                <div class="faq-question-premium">
                    <span>Comment se déroule le processus de paiement ?</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer-premium">
                    <p>Nous proposons un échéancier de paiement progressif et transparent : 30% à la signature du contrat, 40% à mi-parcours des travaux, et les 30% restants à la livraison finale. Tous les paiements sont sécurisés.</p>
                </div>
            </div>
            
            <div class="faq-item-premium">
                <div class="faq-question-premium">
                    <span>Puis-je suivre l'avancement de mon projet ?</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer-premium">
                    <p>Oui, chaque client bénéficie d'un suivi personnalisé avec un chef de projet dédié. Nous fournissons des rapports d'avancement réguliers et sommes disponibles pour des visites de chantier à convenir ensemble.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Floating WhatsApp Button -->
<a href="https://wa.me/243975361498?text=Bonjour%20MLS%20SARL%20CONSTRUCTION,%20je%20souhaite%20obtenir%20un%20devis%20gratuit." 
   target="_blank" 
   class="floating-whatsapp"
   style="position: fixed; bottom: 30px; right: 30px; width: 70px; height: 70px; background: linear-gradient(135deg, #25D366, #128C7E); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 2rem; z-index: 1000; box-shadow: 0 10px 30px rgba(37, 211, 102, 0.3); text-decoration: none; animation: float 3s ease-in-out infinite; transition: all 0.3s ease;"
   onmouseover="this.style.transform='scale(1.1)'; this.style.boxShadow='0 15px 40px rgba(37, 211, 102, 0.4)'"
   onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 10px 30px rgba(37, 211, 102, 0.3)'">
    <i class="fab fa-whatsapp"></i>
</a>

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // ===== ANIMATION DES STATISTIQUES =====
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
    
    observer.observe(document.querySelector('.stats-bar'));
    
    // ===== FORMULAIRE WHATSAPP AVANCÉ =====
    const whatsappForm = document.getElementById('whatsappForm');
    const phoneNumber = '243975361498';
    
    // Formatage automatique du numéro de téléphone
    const phoneInput = document.getElementById('telephone');
    phoneInput.addEventListener('input', function(e) {
        let value = e.target.value.replace(/\D/g, '');
        
        if (value.length > 0) {
            if (value.startsWith('243')) {
                value = '+243 ' + value.substring(3);
            } else if (value.startsWith('0')) {
                value = '+243 ' + value.substring(1);
            } else {
                value = '+243 ' + value;
            }
            
            // Ajouter des espaces pour la lisibilité
            value = value.substring(0, 5) + ' ' + value.substring(5);
            if (value.length > 9) value = value.substring(0, 9) + ' ' + value.substring(9);
            if (value.length > 13) value = value.substring(0, 13) + ' ' + value.substring(13);
        }
        
        e.target.value = value;
    });
    
    // Validation du formulaire
    whatsappForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Récupérer les valeurs
        const formData = new FormData(whatsappForm);
        const data = Object.fromEntries(formData);
        
        // Valider le numéro de téléphone
        let cleanPhone = data.telephone.replace(/\D/g, '');
        if (cleanPhone.startsWith('0')) {
            cleanPhone = '243' + cleanPhone.substring(1);
        } else if (!cleanPhone.startsWith('243')) {
            cleanPhone = '243' + cleanPhone;
        }
        
        // Créer le message WhatsApp premium
        const whatsappMessage = `🌟 *NOUVELLE DEMANDE DE DEVIS - MLS SARL CONSTRUCTION* 🌟

👤 *INFORMATIONS DU CLIENT
• Nom : ${data.nom}
• Téléphone : ${data.telephone}
• Email : ${data.email || 'Non spécifié'}
• Ville : ${data.ville}

🏗️ DÉTAILS DU PROJET
• Service demandé : ${data.service}
• Type de projet : ${data.type_projet}
• Budget estimé : ${data.budget || 'À discuter'}

📝 DESCRIPTION
${data.message}

📅 DATE DE LA DEMANDE
${new Date().toLocaleDateString('fr-FR', { 
    weekday: 'long', 
    year: 'numeric', 
    month: 'long', 
    day: 'numeric',
    hour: '2-digit',
    minute: '2-digit'
})}

📍 *SOURCE*
Formulaire de contact - Site Web MLS SARL CONSTRUCTION`;
        
        // Encoder le message
        const encodedMessage = encodeURIComponent(whatsappMessage);
        const whatsappURL = `https://wa.me/${phoneNumber}?text=${encodedMessage}`;
        
        // Animation du bouton
        const submitBtn = whatsappForm.querySelector('.submit-btn-premium');
        const originalHTML = submitBtn.innerHTML;
        
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Envoi en cours...';
        submitBtn.disabled = true;
        
        // Simulation d'envoi avec feedback
        setTimeout(() => {
            // Ouvrir WhatsApp
            window.open(whatsappURL, '_blank');
            
            // Message de succès
            showNotification('✅ Demande envoyée avec succès ! Redirection vers WhatsApp...', 'success');
            
            // Réinitialiser le bouton
            submitBtn.innerHTML = originalHTML;
            submitBtn.disabled = false;
            
            // Réinitialiser le formulaire
            whatsappForm.reset();
            
            // Animation de succès
            submitBtn.style.background = 'linear-gradient(135deg, #25D366, #128C7E)';
            setTimeout(() => {
                submitBtn.style.background = 'var(--gradient-whatsapp)';
            }, 1000);
            
        }, 1500);
    });
    
    // ===== FAQ ACCORDÉON ANIMÉ =====
    const faqItems = document.querySelectorAll('.faq-item-premium');
    
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question-premium');
        
        question.addEventListener('click', () => {
            // Fermer les autres
            faqItems.forEach(otherItem => {
                if (otherItem !== item && otherItem.classList.contains('active')) {
                    otherItem.classList.remove('active');
                }
            });
            
            // Basculer l'item actuel
            item.classList.toggle('active');
        });
    });
    
    // ===== ANIMATION AU SCROLL =====
    const animateOnScroll = () => {
        const elements = document.querySelectorAll('.contact-card, .whatsapp-banner, .faq-item-premium');
        
        elements.forEach(element => {
            const elementTop = element.getBoundingClientRect().top;
            const elementVisible = 150;
            
            if (elementTop < window.innerHeight - elementVisible) {
                element.style.opacity = '1';
                element.style.transform = 'translateY(0)';
            }
        });
    };
    
    // Initialiser les animations
    document.querySelectorAll('.contact-card, .whatsapp-banner, .faq-item-premium').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(20px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    });
    
    window.addEventListener('scroll', animateOnScroll);
    animateOnScroll(); // Initial check
    
    // ===== FONCTION DE NOTIFICATION =====
    function showNotification(message, type = 'info') {
        const notification = document.createElement('div');
        notification.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 20px 25px;
            background: ${type === 'success' ? 'var(--gradient-whatsapp)' : 'var(--gradient-orange)'};
            color: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            z-index: 9999;
            font-family: var(--font-primary);
            font-size: 1rem;
            transform: translateX(100%);
            opacity: 0;
            transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        `;
        notification.textContent = message;
        document.body.appendChild(notification);
        
        // Animation d'entrée
        setTimeout(() => {
            notification.style.transform = 'translateX(0)';
            notification.style.opacity = '1';
        }, 10);
        
        // Suppression après 5 secondes
        setTimeout(() => {
            notification.style.transform = 'translateX(100%)';
            notification.style.opacity = '0';
            setTimeout(() => notification.remove(), 500);
        }, 5000);
    }
    
    // ===== VALIDATION EN TEMPS RÉEL =====
    const requiredFields = document.querySelectorAll('[required]');
    
    requiredFields.forEach(field => {
        field.addEventListener('blur', function() {
            if (!this.value.trim()) {
                this.style.borderColor = '#FF6B35';
                this.style.boxShadow = '0 0 0 3px rgba(255, 107, 53, 0.1)';
            } else {
                this.style.borderColor = 'var(--gray-light)';
                this.style.boxShadow = '0 5px 15px rgba(0, 0, 0, 0.02)';
            }
        });
        
        field.addEventListener('input', function() {
            if (this.value.trim()) {
                this.style.borderColor = 'var(--blue-primary)';
                this.style.boxShadow = '0 0 0 3px rgba(10, 46, 109, 0.1)';
            }
        });
    });
    
    // ===== SCROLL SMOOTH VERS LE FORMULAIRE =====
    document.querySelectorAll('a[href="#whatsappForm"]').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            document.getElementById('whatsappForm').scrollIntoView({
                behavior: 'smooth',
                block: 'center'
            });
            
            // Focus sur le premier champ
            setTimeout(() => {
                document.getElementById('nom').focus();
                document.getElementById('nom').style.borderColor = 'var(--blue-primary)';
                document.getElementById('nom').style.boxShadow = '0 0 0 3px rgba(10, 46, 109, 0.2)';
            }, 800);
        });
    });
});
</script>
@endpush