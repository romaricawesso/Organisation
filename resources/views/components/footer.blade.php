<!-- witrfm_footer_area -->
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
                            <p>Nous œuvrons pour un monde plus juste et solidaire. Rejoignez notre mission et contribuez à changer des vies.</p>
                            <div class="social-icons">
                                <a href="https://www.facebook.com/search/top?q=fracis%20and%20benedict" target="_blank" title="Facebook" class="social-facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" target="_blank" title="Google+" class="social-google">
                                    <i class="fab fa-google-plus-g"></i>
                                </a>
                                <a href="#" target="_blank" title="YouTube" class="social-youtube">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- LIENS UTILES -->
                <div class="col-lg-2 col-md-6 col-sm-12">
                    <div class="widget widget_nav_menu">
                        <h2 class="widget-title">Liens Utiles</h2>
                        <div class="menu-help-link-container">
                            <ul class="menu">
                                <li><a href="{{ route('apropos') }}">Qui Sommes-Nous</a></li>
                                <li><a href="{{ route('projet') }}">Nos Projets</a></li>
                                <li><a href="{{ route('evenement') }}">Événements</a></li>
                                <li><a href="{{ route('actualite') }}">Actualités</a></li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- CAMPAGNES -->
                <div class="col-lg-2 col-md-6 col-sm-12">
                    <div class="widget widget_nav_menu">
                        <h2 class="widget-title">Campagnes</h2>
                        <div class="menu-help-link-container">
                            <ul class="menu">
                                <li><a href="{{ route('apropos') }}">Notre Histoire</a></li>
                                <li><a href="#">Devenir Bénévole</a></li>
                                <li><a href="#">Témoignages</a></li>
                                <li><a href="{{ route('evenement') }}">Événements à Venir</a></li>
                                <li><a href="#">Galerie Photo</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- NEWSLETTER -->
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="widget footer-newsletter-widget">
                        <h2 class="widget-title">Newsletter</h2>
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
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- FOOTER BOTTOM -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="copy-right-text text-center">
                        <p>Copyright &copy; {{ date('Y') }} <span>Francis + Benedict Global Non-Profit</span> — Tous droits réservés.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>

    /* ===== NEWSLETTER FOOTER ===== */
.footer-newsletter-widget {
    padding-left: 10px;
}

.footer-newsletter-desc {
    color: #a0a8c0;
    font-size: 13px;
    line-height: 1.8;
    margin-bottom: 20px;
}

.footer-newsletter-form {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.footer-newsletter-input-group {
    display: flex;
    align-items: center;
    background: rgba(255,255,255,0.06);
    border: 1.5px solid rgba(255,255,255,0.12);
    border-radius: 10px;
    overflow: hidden;
    transition: border-color 0.3s;
}

.footer-newsletter-input-group:focus-within {
    border-color: #c9a84c;
}

.footer-newsletter-input-group i {
    padding: 0 14px;
    color: #c9a84c;
    font-size: 15px;
    flex-shrink: 0;
}

.footer-newsletter-input-group input {
    flex: 1;
    background: transparent;
    border: none;
    outline: none;
    padding: 13px 10px 13px 0;
    color: #ffffff;
    font-size: 13px;
    font-family: 'Poppins', sans-serif;
}

.footer-newsletter-input-group input::placeholder {
    color: #606880;
}

.footer-newsletter-btn {
    background: linear-gradient(135deg, #c9a84c, #f0d078);
    color: #1a1a2e;
    border: none;
    padding: 13px 20px;
    border-radius: 10px;
    font-size: 13px;
    font-weight: 700;
    cursor: pointer;
    font-family: 'Poppins', sans-serif;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    transition: opacity 0.3s, transform 0.2s;
}

.footer-newsletter-btn:hover {
    opacity: 0.9;
    transform: scale(1.02);
}

/* Message succès/erreur */
.footer-newsletter-msg {
    font-size: 12px;
    margin: 0;
    min-height: 18px;
    font-family: 'Poppins', sans-serif;
}

.footer-newsletter-msg.success {
    color: #2ecc71;
}

.footer-newsletter-msg.error {
    color: #e74c3c;
}

/* Badges */
.footer-newsletter-badges {
    display: flex;
    gap: 12px;
    flex-wrap: wrap;
    margin-top: 14px;
}

.footer-newsletter-badges span {
    display: flex;
    align-items: center;
    gap: 5px;
    font-size: 11px;
    color: #606880;
    font-family: 'Poppins', sans-serif;
}

.footer-newsletter-badges span i {
    color: #c9a84c;
    font-size: 11px;
}
</style>
