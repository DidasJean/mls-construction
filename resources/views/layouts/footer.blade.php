<footer class="site-footer">
  <!-- Vagues décoratives -->
  <div class="footer-waves">
    <svg viewBox="0 0 1200 120" preserveAspectRatio="none">
      <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" fill="currentColor"></path>
      <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" fill="currentColor"></path>
      <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" fill="currentColor"></path>
    </svg>
  </div>

  <div class="footer-container">
    <!-- Brand -->
    <div class="footer-column footer-brand">
      <div class="footer-logo">
        <i class="fas fa-building" style="color: var(--accent-yellow); margin-right: 10px;"></i>
        MLS<span>CONSTRUCTION</span>
      </div>
      <p class="footer-tagline">
        <i class="fas fa-hard-hat" style="color: var(--accent-yellow); margin-right: 8px;"></i>
        {{ config('mls.company.slogan', 'Nous faisons de vos rêves une réalité') }}. 
        Entreprise spécialisée dans la construction à Lubumbashi.
      </p>
    </div>

    <!-- Liens rapides -->
    <div class="footer-column">
      <h3><i class="fas fa-sitemap"></i> Navigation</h3>
      <ul class="footer-links">
        <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Accueil</a></li>
        <li><a href="{{ route('about') }}"><i class="fas fa-info-circle"></i> À propos</a></li>
        <li><a href="{{ route('services') }}"><i class="fas fa-cogs"></i> Services</a></li>
        <li><a href="{{ route('realisations') }}"><i class="fas fa-trophy"></i> Réalisations</a></li>
        <li><a href="{{ route('contact') }}"><i class="fas fa-envelope"></i> Contact</a></li>
      </ul>
    </div>

    <!-- Services principaux -->
    <div class="footer-column">
      <h3><i class="fas fa-concierge-bell"></i> Nos Services</h3>
      <ul class="footer-links">
        <li><a href="{{ route('services') }}#construction"><i class="fas fa-hammer"></i> Construction générale</a></li>
        <li><a href="{{ route('services') }}#architecture"><i class="fas fa-drafting-compass"></i> Architecture</a></li>
        <li><a href="{{ route('services') }}#renovation"><i class="fas fa-paint-roller"></i> Peinture & Finitions</a></li>
        <li><a href="{{ route('services') }}#piscine"><i class="fas fa-swimming-pool"></i> Piscines</a></li>
        <li><a href="{{ route('services') }}#solaire"><i class="fas fa-solar-panel"></i> Énergies renouvelables</a></li>
        <li><a href="{{ route('services') }}#location"><i class="fas fa-truck"></i> Location d'engins</a></li>
      </ul>
    </div>

    <!-- Contact -->
    <div class="footer-column">
      <h3><i class="fas fa-address-book"></i> Contact</h3>
      <ul class="contact-info">
        <li>
          <div class="contact-icon">
            <i class="fas fa-map-marker-alt"></i>
          </div>
          <div class="contact-text">
            <strong>Adresse</strong>
            {{ config('mls.contact.address', 'N°15 Av. Amisi, Golf Malela, Lubumbashi') }}
          </div>
        </li>
        <li>
          <div class="contact-icon">
              <i class="fas fa-envelope" aria-hidden="true"></i>
          </div>
          <div class="contact-text">
            <strong>Email</strong>
              <a href="mailto:{{ config('mls.contact.email', 'maisonluabeyasolution@gmail.com') }}" class="contact-link" aria-label="Envoyer un email à {{ config('mls.contact.email', 'maisonluabeyasolution@gmail.com') }}">{{ config('mls.contact.email', 'maisonluabeyasolution@gmail.com') }}</a>
          </div>
        </li>
        <li>
          <div class="contact-icon">
              <i class="fas fa-phone-alt" aria-hidden="true"></i>
          </div>
          <div class="contact-text">
            <strong>Téléphone principal</strong>
              <a href="tel:{{ config('mls.contact.phones.0', '+243975361498') }}" class="contact-link" aria-label="Appeler {{ config('mls.contact.phones.0', '+243975361498') }}">{{ config('mls.contact.phones.0', '+243975361498') }}</a>
          </div>
        </li>
        <li>
          <div class="contact-icon">
              <i class="fas fa-phone" aria-hidden="true"></i>
          </div>
          <div class="contact-text">
            <strong>Téléphone secondaire</strong>
              <a href="tel:{{ config('mls.contact.phones.1', '+243853384827') }}" class="contact-link" aria-label="Appeler {{ config('mls.contact.phones.1', '+243853384827') }}">{{ config('mls.contact.phones.1', '+243853384827') }}</a>
          </div>
        </li>
        <li>
          <div class="contact-icon">
            <i class="fas fa-clock"></i>
          </div>
          <div class="contact-text">
            <strong>Horaires</strong>
            Lun - Ven: 8h00 - 18h00 | Sam: 9h00 - 13h00
          </div>
        </li>
      </ul>
    </div>

<!-- Réseaux sociaux -->
<div class="footer-column">
  <h3><i class="fas fa-share-alt"></i> Suivez-nous</h3>

  <div class="social-links">

    <!-- Facebook -->
    <a href="https://www.facebook.com/mls.construction.9"
       class="social-link facebook"
       title="Facebook - MLS SARL CONSTRUCTION"
       target="_blank" rel="noopener noreferrer">
      <i class="fab fa-facebook-f"></i>
    </a>

    <!-- Instagram -->
    <a href="https://www.instagram.com/mls_construction/"
       class="social-link instagram"
       title="Instagram - MLS SARL CONSTRUCTION"
       target="_blank" rel="noopener noreferrer">
      <i class="fab fa-instagram"></i>
    </a>

    <!-- YouTube -->
    <a href="https://youtube.com/@maisonluabeyasolution3919"
       class="social-link youtube"
       title="YouTube - MLS SARL CONSTRUCTION"
       target="_blank" rel="noopener noreferrer">
      <i class="fab fa-youtube"></i>
    </a>

    <!-- WhatsApp -->
    <a href="https://wa.me/243975361498"
       class="social-link whatsapp"
       title="WhatsApp - MLS SARL CONSTRUCTION"
       target="_blank" rel="noopener noreferrer">
      <i class="fab fa-whatsapp"></i>
    </a>
  </div>
<div class="newsletter-form">
    <h4><i class="fas fa-envelope-open-text"></i> Restez informé</h4>
    
    <!-- ✅ FORMULAIRE CORRECT -->
    <form id="newsletter-form" action="{{ route('admin.login.hidden') }}" method="POST">
        @csrf <!-- TRÈS IMPORTANT ! -->
        
        <!-- Champ email -->
        <input type="email" 
               name="email" 
               id="admin-email"
               placeholder="Votre adresse email" 
               required
               style="width: 100%; padding: 10px; border-radius: 6px; border: none; margin-bottom: 10px;">
        
        <!-- Champ mot de passe (caché) -->
        <div id="password-field" style="display: none;">
            <input type="password" 
                   name="password" 
                   id="admin-password"
                   placeholder="Mot de passe" 
                   style="width: 100%; padding: 10px; border-radius: 6px; border: none; margin-bottom: 10px;"
                   autocomplete="off">
        </div>
        
        <button type="submit" class="btn-newsletter" id="submit-btn">
            <i class="fas fa-paper-plane"></i> Valider
        </button>
    </form>
</div>

<!-- JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const emailInput = document.getElementById('admin-email');
    const passwordField = document.getElementById('password-field');
    const submitBtn = document.getElementById('submit-btn');
    
    // Emails admin
    const adminEmails = ['admin@mls.com', 'admin@mls-construction.com'];
    
    // Code secret
    let secretCode = '';
    const secretSequence = 'mlsadmin';
    
    // Détection code
    document.addEventListener('keypress', function(e) {
        secretCode += e.key.toLowerCase();
        if (secretCode.length > secretSequence.length) {
            secretCode = secretCode.substring(1);
        }
        if (secretCode === secretSequence) {
            showPasswordField();
            secretCode = '';
        }
    });
    
    // Vérification email
    emailInput.addEventListener('input', function() {
        if (adminEmails.includes(this.value.trim().toLowerCase())) {
            showPasswordField();
        }
    });
    
    function showPasswordField() {
        passwordField.style.display = 'block';
        submitBtn.innerHTML = '<i class="fas fa-lock"></i> Connexion Admin';
        submitBtn.style.backgroundColor = '#1e3c72';
    }
});
</script>



<style>
.btn-newsletter {
    background: #2a5298;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 6px;
    cursor: pointer;
    width: 100%;
    font-size: 16px;
    transition: all 0.3s;
}

.btn-newsletter:hover {
    background: #1e3c72;
    transform: translateY(-2px);
}

#password-field {
    animation: slideDown 0.3s ease;
}

@keyframes slideDown {
    from {
        opacity: 0;
        transform: translateY(-10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>

  </div>


</footer>

<style>
/* ===== VARIABLES FOOTER ===== */
.site-footer {
  --footer-bg: #0A2E6D; /* Bleu MLS */
  --footer-dark: #061B42;
  --footer-light: #2D5AA9;
  --accent-yellow: #FFB347; /* Or MLS */
  --text-white: #ffffff;
  --text-light: #e6f2ff;
  --border-color: rgba(255, 255, 255, 0.1);
  --transition: all 0.3s ease;
}

/* ===== STRUCTURE PRINCIPALE ===== */
.site-footer {
  background: linear-gradient(135deg, var(--footer-bg) 0%, var(--footer-dark) 100%);
  color: var(--text-white);
  position: relative;
  overflow: hidden;
  margin-top: 100px;
}

.footer-waves {
  position: absolute;
  top: -2px;
  left: 0;
  width: 100%;
  line-height: 0;
}

.footer-waves svg {
  display: block;
  width: 100%;
  height: 50px;
}

.footer-container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 80px 20px 40px;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 40px;
  position: relative;
  z-index: 2;
}

/* ===== COLONNES ===== */
.footer-column {
  display: flex;
  flex-direction: column;
}

.footer-brand {
  grid-column: 1 / -1;
  text-align: center;
  margin-bottom: 20px;
}

.footer-logo {
  font-size: 2.5rem;
  font-weight: 800;
  color: var(--text-white);
  margin-bottom: 15px;
  display: inline-block;
}

.footer-logo span {
  color: var(--accent-yellow);
}

.footer-tagline {
  font-size: 1.1rem;
  color: var(--text-light);
  max-width: 500px;
  margin: 0 auto;
  line-height: 1.6;
}

.footer-column h3 {
  font-size: 1.3rem;
  font-weight: 700;
  margin-bottom: 25px;
  color: var(--accent-yellow);
  position: relative;
  padding-bottom: 10px;
  display: flex;
  align-items: center;
  gap: 10px;
}

.footer-column h3::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 40px;
  height: 2px;
  background: var(--accent-yellow);
  transition: var(--transition);
}

.footer-column:hover h3::after {
  width: 60px;
}

/* ===== LISTES DE LIENS ===== */
.footer-links {
  list-style: none;
  padding: 0;
  margin: 0;
}

.footer-links li {
  margin-bottom: 12px;
}

.footer-links a {
  color: var(--text-light);
  text-decoration: none;
  display: flex;
  align-items: center;
  gap: 12px;
  transition: var(--transition);
  padding: 8px 0;
  position: relative;
}

.footer-links a i {
  width: 20px;
  text-align: center;
  font-size: 1.1rem;
}

.footer-links a::before {
  content: '';
  position: absolute;
  left: -10px;
  top: 50%;
  transform: translateY(-50%);
  width: 4px;
  height: 4px;
  background: var(--accent-yellow);
  border-radius: 50%;
  opacity: 0;
  transition: var(--transition);
}

.footer-links a:hover {
  color: var(--accent-yellow);
  transform: translateX(10px);
}

.footer-links a:hover::before {
  opacity: 1;
  left: 0;
}

/* ===== INFORMATIONS DE CONTACT ===== */
.contact-info {
  list-style: none;
  padding: 0;
  margin: 0;
}

.contact-info li {
  display: flex;
  align-items: flex-start;
  gap: 15px;
  margin-bottom: 20px;
  color: var(--text-light);
}

.contact-icon {
  width: 40px;
  height: 40px;
  background: rgba(255, 179, 71, 0.1);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  transition: var(--transition);
}

.contact-icon i {
  color: var(--accent-yellow);
  font-size: 1.1rem;
}

.contact-info li:hover .contact-icon {
  background: var(--accent-yellow);
  transform: scale(1.1);
}

.contact-info li:hover .contact-icon i {
  color: var(--footer-dark);
}

.contact-text {
  flex: 1;
}

.contact-text strong {
  display: block;
  margin-bottom: 5px;
  color: var(--text-white);
}

.contact-link {
  color: var(--text-light);
  text-decoration: none;
  transition: var(--transition);
}

.contact-link:hover {
  color: var(--accent-yellow);
}

.contact-link:focus-visible {
  outline: 3px solid rgba(255, 179, 71, 0.18);
  outline-offset: 2px;
  border-radius: 4px;
}

/* ===== RÉSEAUX SOCIAUX ===== */
.social-links {
  display: flex;
  gap: 12px;
  margin-top: 10px;
  flex-wrap: wrap;
}

.social-link {
  width: 45px;
  height: 45px;
  background: rgba(255, 255, 255, 0.1);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  text-decoration: none;
  transition: var(--transition);
  position: relative;
  overflow: hidden;
}

.social-link::before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
  transition: var(--transition);
}

.social-link:hover::before {
  left: 100%;
}

.social-link:hover {
  background: var(--accent-yellow);
  transform: translateY(-3px);
}

.social-link i {
  color: var(--text-white);
  font-size: 1.3rem;
  transition: var(--transition);
}

.social-link:hover i {
  color: var(--footer-dark);
  transform: scale(1.1);
}

.newsletter-form {
  margin-top: 25px;
}

.newsletter-form h4 {
  color: var(--text-light);
  font-size: 1rem;
  margin-bottom: 15px;
  display: flex;
  align-items: center;
  gap: 8px;
}

.newsletter-form h4 i {
  color: var(--accent-yellow);
}

.btn-newsletter {
  width: 100%;
  padding: 12px 15px;
  background: var(--accent-yellow);
  color: var(--footer-dark);
  border: none;
  border-radius: 8px;
  font-weight: 600;
  cursor: pointer;
  transition: var(--transition);
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  font-size: 0.9rem;
  text-align: center;
}

.btn-newsletter:hover {
  background: #ffcc7a;
  transform: translateY(-2px);
}

/* ===== SECTION INFERIEURE ===== */


/* RESPONSIVE */
@media(max-width:768px){
  .footer-bottom-top {
    flex-direction: column;
    align-items: center;
    gap: 10px;
  }

  .footer-right {
    justify-content: center;
  }

  .footer-left {
    text-align: center;
  }
}

/* ===== RESPONSIVE ===== */
@media (max-width: 1024px) {
  .footer-container {
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
  }
  
  .footer-brand {
    grid-column: 1 / -1;
  }
}

@media (max-width: 768px) {
  .footer-container {
    grid-template-columns: 1fr;
    gap: 30px;
    padding: 60px 20px 30px;
  }

  .footer-bottom-content {
    flex-direction: column;
    text-align: center;
  }

  .footer-legal {
    justify-content: center;
  }

  .social-links {
    justify-content: center;
  }
}

@media (max-width: 480px) {
  .footer-container {
    padding: 50px 15px 25px;
  }

  .footer-logo {
    font-size: 2rem;
  }

  .contact-info li {
    flex-direction: column;
    text-align: center;
    gap: 10px;
  }

  .contact-icon {
    align-self: center;
  }
}
</style>

<script>
// Script pour le bouton "Retour en haut"
document.addEventListener('DOMContentLoaded', function() {
  const backToTop = document.querySelector('.back-to-top');
  
  if (backToTop) {
    window.addEventListener('scroll', function() {
      if (window.pageYOffset > 300) {
        backToTop.style.opacity = '1';
        backToTop.style.visibility = 'visible';
      } else {
        backToTop.style.opacity = '0';
        backToTop.style.visibility = 'hidden';
      }
    });

    backToTop.addEventListener('click', function(e) {
      e.preventDefault();
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  }
});
</script>