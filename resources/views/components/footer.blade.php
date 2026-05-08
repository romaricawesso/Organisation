<div class="witrfm_area">
    <div class="footer-middle">
        <div class="container">
            <div class="row">

                <!-- LOGO + DESCRIPTION -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget widget_hunger_description_widget">
                        <div class="hunger-description-area">
                            <a href="{{ route('accueil') }}">
                                <img src="{{ asset('assets/images/logo2.png') }}" alt="Logo" class="logo-mobile">
                            </a>
                            <p>Nous œuvrons pour un monde plus juste et solidaire. Rejoignez notre mission et contribuez à changer des vies au Togo.</p>
                            <div class="footer-social-icons">
                                <!-- Facebook -->
                                <a href="https://www.facebook.com/search/top?q=fracis%20and%20benedict"
                                   target="_blank" title="Facebook" class="fsocial-btn facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>

                                <!-- YouTube -->
                                <a href="#" target="_blank" title="YouTube" class="fsocial-btn youtube">
                                    <i class="fab fa-youtube"></i>
                                </a>

                                <!-- WhatsApp -->
                                <a href="https://wa.me/22891828383" target="_blank" title="WhatsApp" class="fsocial-btn whatsapp">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- LIENS UTILES -->
                <div class="col-lg-2 col-md-6 col-sm-12">
                    <div class="widget widget_nav_menu">
                        <h2 class="widget-title-footer">Liens Utiles</h2>
                        <ul class="footer-links-list">
                            <li><a href="{{ route('apropos') }}"><i class="fas fa-chevron-right"></i> Qui Sommes-Nous</a></li>
                            <li><a href="{{ route('projet') }}"><i class="fas fa-chevron-right"></i> Nos Projets</a></li>
                            <li><a href="{{ route('evenement') }}"><i class="fas fa-chevron-right"></i> Événements</a></li>
                            <li><a href="{{ route('actualite') }}"><i class="fas fa-chevron-right"></i> Actualités</a></li>
                            <li><a href="{{ route('contact') }}"><i class="fas fa-chevron-right"></i> Contact</a></li>
                        </ul>
                    </div>
                </div>

                <!-- CAMPAGNES -->
                <div class="col-lg-2 col-md-6 col-sm-12">
                    <div class="widget widget_nav_menu">
                        <h2 class="widget-title-footer">Campagnes</h2>
                        <ul class="footer-links-list">
                            <li><a href="{{ route('apropos') }}"><i class="fas fa-chevron-right"></i> Notre Histoire</a></li>
                            <li><a href="#"><i class="fas fa-chevron-right"></i> Devenir Bénévole</a></li>
                            <li><a href="#"><i class="fas fa-chevron-right"></i> Témoignages</a></li>
                            <li><a href="{{ route('evenement') }}"><i class="fas fa-chevron-right"></i> Prochains Événements</a></li>
                            <li><a href="#"><i class="fas fa-chevron-right"></i> Galerie Photo</a></li>
                        </ul>
                    </div>
                </div>

                <!-- NEWSLETTER -->
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="widget footer-newsletter-widget">
                        <h2 class="widget-title-footer">Newsletter</h2>
                        <p class="footer-newsletter-desc">
                            Abonnez-vous et recevez nos actualités, rapports d'impact et événements directement dans votre boîte mail.
                        </p>
                        <form class="footer-newsletter-form" id="footer-newsletter-form">
                            <div class="footer-newsletter-input-group">
                                <i class="fas fa-envelope"></i>
                                <input type="email" name="newsletter_email" placeholder="Votre adresse email..." required>
                            </div>
                            <button type="submit" class="footer-newsletter-btn">
                                <i class="fas fa-paper-plane"></i> S'abonner
                            </button>
                            <p class="footer-newsletter-msg" id="newsletter-msg"></p>
                        </form>
                        <div class="footer-newsletter-badges">
                            <span><i class="fas fa-lock"></i> 100% Sécurisé</span>
                            <span><i class="fas fa-ban"></i> Sans Spam</span>
                            <span><i class="fas fa-times-circle"></i> Désinscription Facile</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- FOOTER BOTTOM -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 text-center">
                    <div class="copy-right-text">
                        <p>
                            Copyright &copy; {{ date('Y') }}
                            <span>Francis + Benedict Global Non-Profit</span>
                            — Tous droits réservés.
                            <span class="footer-bottom-heart">
                                Fait avec <i class="fas fa-heart"></i> au Togo
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>

  /* ============================================
   FOOTER REDESIGNÉ
   ============================================ */

.witrfm_area {
    font-family: 'Poppins', sans-serif;
}

/* FOOTER MIDDLE */
.footer-middle {
    background: #161616;
    padding: 65px 0 45px;
}

/* LOGO */
.hunger-description-area .logo-mobile {
    width: 110px !important;
    height: auto !important;
    margin-bottom: 18px;
    display: block;
}

/* DESCRIPTION */
.hunger-description-area p {
    color: #9098b1;
    font-size: 13.5px;
    line-height: 1.85;
    margin-bottom: 22px;
    font-family: 'Poppins', sans-serif;
}

/* ===== RÉSEAUX SOCIAUX ===== */
.footer-social-icons {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
}

.fsocial-btn {
    width: 40px;
    height: 40px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 16px;
    text-decoration: none;
    color: #ffffff !important;
    transition: transform 0.3s, opacity 0.3s, box-shadow 0.3s;
    position: relative;
    overflow: hidden;
}

.fsocial-btn:hover {
    transform: translateY(-4px);
    opacity: 0.9;
    box-shadow: 0 8px 20px rgba(0,0,0,0.3);
    color: #ffffff !important;
}

/* Couleurs officielles */
.fsocial-btn.facebook  { background: #1877F2; }
.fsocial-btn.instagram { background: linear-gradient(45deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888); }
.fsocial-btn.youtube   { background: #FF0000; }
.fsocial-btn.twitter   { background: #000000; border: 1px solid #333; }
.fsocial-btn.whatsapp  { background: #25D366; }

/* ===== TITRES WIDGETS ===== */
.widget-title-footer {
    color: #ffffff;
    font-size: 15px;
    font-weight: 700;
    margin-bottom: 22px;
    padding-bottom: 12px;
    position: relative;
    font-family: 'Poppins', sans-serif;
    letter-spacing: 0.5px;
    text-transform: uppercase;
}

.widget-title-footer::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 35px;
    height: 2px;
    background: linear-gradient(90deg, #c9a84c, #f0d078);
    border-radius: 2px;
}

/* ===== LIENS FOOTER ===== */
.footer-links-list {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.footer-links-list li a {
    color: #9098b1;
    font-size: 13.5px;
    text-decoration: none;
    font-family: 'Poppins', sans-serif;
    display: flex;
    align-items: center;
    gap: 8px;
    transition: color 0.3s, padding-left 0.3s;
    font-weight: 400;
}

.footer-links-list li a i {
    color: #c9a84c;
    font-size: 10px;
    transition: transform 0.3s;
}

.footer-links-list li a:hover {
    color: #c9a84c;
    padding-left: 6px;
}

.footer-links-list li a:hover i {
    transform: translateX(3px);
}

/* ===== NEWSLETTER ===== */
.footer-newsletter-widget {
    padding-left: 15px;
}

.footer-newsletter-desc {
    color: #9098b1;
    font-size: 13.5px;
    line-height: 1.8;
    margin-bottom: 20px;
    font-family: 'Poppins', sans-serif;
}

.footer-newsletter-form {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.footer-newsletter-input-group {
    display: flex;
    align-items: center;
    background: rgba(255,255,255,0.05);
    border: 1.5px solid rgba(201,168,76,0.2);
    border-radius: 10px;
    overflow: hidden;
    transition: border-color 0.3s, background 0.3s;
}

.footer-newsletter-input-group:focus-within {
    border-color: #c9a84c;
    background: rgba(201,168,76,0.05);
}

.footer-newsletter-input-group i {
    padding: 0 15px;
    color: #c9a84c;
    font-size: 15px;
    flex-shrink: 0;
}

.footer-newsletter-input-group input {
    flex: 1;
    background: transparent;
    border: none;
    outline: none;
    padding: 14px 10px 14px 0;
    color: #ffffff;
    font-size: 13.5px;
    font-family: 'Poppins', sans-serif;
}

.footer-newsletter-input-group input::placeholder {
    color: #505870;
}

.footer-newsletter-btn {
    background: linear-gradient(135deg, #c9a84c, #f0d078);
    color: #1a1a2e;
    border: none;
    padding: 14px 22px;
    border-radius: 10px;
    font-size: 13.5px;
    font-weight: 700;
    cursor: pointer;
    font-family: 'Poppins', sans-serif;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    transition: opacity 0.3s, transform 0.2s, box-shadow 0.3s;
    letter-spacing: 0.3px;
}

.footer-newsletter-btn:hover {
    opacity: 0.92;
    transform: scale(1.02);
    box-shadow: 0 5px 20px rgba(201,168,76,0.3);
}

.footer-newsletter-msg {
    font-size: 12.5px;
    margin: 0;
    min-height: 18px;
    font-family: 'Poppins', sans-serif;
}

.footer-newsletter-msg.success { color: #2ecc71; }
.footer-newsletter-msg.error   { color: #e74c3c; }

/* Badges */
.footer-newsletter-badges {
    display: flex;
    gap: 14px;
    flex-wrap: wrap;
    margin-top: 14px;
}

.footer-newsletter-badges span {
    display: flex;
    align-items: center;
    gap: 5px;
    font-size: 11.5px;
    color: #505870;
    font-family: 'Poppins', sans-serif;
    font-weight: 500;
}

.footer-newsletter-badges span i {
    color: #c9a84c;
    font-size: 11px;
}

/* ===== FOOTER BOTTOM ===== */
.footer-bottom {
    background: #0e0e0e;
    padding: 18px 0;
    border-top: 1px solid rgba(201,168,76,0.15);
}

.footer-bottom .copy-right-text p {
    color: #606880;
    font-size: 13px;
    margin: 0;
    font-family: 'Poppins', sans-serif;
    line-height: 1.6;
}

.footer-bottom .copy-right-text p span {
    color: #c9a84c;
    font-weight: 600;
}

.footer-bottom-heart {
    margin-left: 10px;
    color: #606880 !important;
    font-weight: 400 !important;
}

.footer-bottom-heart i {
    color: #e74c3c;
    font-size: 12px;
    animation: heartbeat 1.5s ease infinite;
}

@keyframes heartbeat {
    0%, 100% { transform: scale(1); }
    50%       { transform: scale(1.3); }
}

/* ===== RESPONSIVE ===== */
@media (max-width: 992px) {
    .footer-newsletter-widget { padding-left: 0; margin-top: 20px; }
    .footer-social-icons { gap: 8px; }
}

@media (max-width: 576px) {
    .footer-middle { padding: 45px 0 30px; }
    .footer-newsletter-badges { gap: 10px; }
    .fsocial-btn { width: 36px; height: 36px; font-size: 14px; }
}
</style>
