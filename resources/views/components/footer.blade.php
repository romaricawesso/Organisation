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
                                <a href="https://www.facebook.com/search/top?q=fracis%20and%20benedict" target="_blank" title="Facebook" class="social-facebook"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" target="_blank" title="Google+" class="social-google"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#" target="_blank" title="YouTube" class="social-youtube"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- LIENS UTILES -->
                <div class="col-lg-3 col-md-6 col-sm-12">
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

                <!-- GALERIE -->
                <div class="col-sm-12 col-md-6 col-lg-3 last">
                    <div class="widget widget_media_gallery">
                        <h2 class="widget-title">Galerie</h2>
                        <div class="gallery-columns-3">
                            @foreach (['recent-thumb-01.jpg', 'recent-thumb-02.jpg', 'recent-thumb-03.jpg', 'recent-thumb-04.jpg', 'recent-thumb-05.jpg', 'recent-thumb-06.jpg'] as $img)
                                <div class="gallery-item">
                                    <div class="gallery-icon landscape">
                                        <a href="{{ asset('assets/images/' . $img) }}">
                                            <img src="{{ asset('assets/images/' . $img) }}" alt="Galerie">
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- CAMPAGNES -->
                <div class="col-lg-3 col-md-6 col-sm-12">
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

            </div>
        </div>
    </div>

    <!-- FOOTER BOTTOM -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="copy-right-text text-center">
                        <p>Copyright &copy; {{ date('Y') }} <span>by  Francis+Benedict Global Non-Profit</span> — Tous droits réservés.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<style>

    @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css');
    /* ===== FOOTER ===== */
.witrfm_area {
    font-family: 'Poppins', sans-serif;
}

/* FOOTER MIDDLE */
.footer-middle {
    background: #161616;
    padding: 60px 0 40px;
}

/* LOGO FOOTER */
.hunger-description-area .logo-mobile {
    width: 100px !important;
    margin-bottom: 20px;
}

/* TEXTE DESCRIPTION */
.hunger-description-area p {
    color: #a0a8c0;
    font-size: 14px;
    line-height: 1.8;
    margin-bottom: 20px;
}

/* ICONES SOCIAUX */
.hunger-description-area .social-icons {
    display: flex;
    gap: 10px;
}

.hunger-description-area .social-icons a {
    width: 38px;
    height: 38px;
    background: rgba(255,255,255,0.08);
    color: #ffffff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 14px;
    text-decoration: none;
    transition: background 0.3s, transform 0.3s;
    border: 1px solid rgba(255,255,255,0.1);
}

.hunger-description-area .social-icons a:hover {
    background: #5f5f5f;
    transform: translateY(-3px);
    border-color: #555555;
}

/* TITRES WIDGETS */
.footer-middle .widget-title {
    color: #ffffff;
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 25px;
    padding-bottom: 12px;
    position: relative;
    font-family: 'Poppins', sans-serif;
}

.footer-middle .widget-title::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 40px;
    height: 2px;
    background: #fcfcfc;
    border-radius: 2px;
}

/* LIENS UTILES & CAMPAGNES */
.footer-middle .menu {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-middle .menu li {
    margin-bottom: 10px;
}

.footer-middle .menu li a {
    color: #a0a8c0;
    font-size: 14px;
    text-decoration: none;
    font-family: 'Poppins', sans-serif;
    display: flex;
    align-items: center;
    gap: 8px;
    transition: color 0.3s, padding-left 0.3s;
}

.footer-middle .menu li a::before {
    content: '›';
    color: #505050;
    font-size: 16px;
    font-weight: 700;
}

.footer-middle .menu li a:hover {
    color: #525050;
    padding-left: 5px;
}

/* GALERIE */
.footer-middle .gallery-columns-3 {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 8px;
}

.footer-middle .gallery-item img {
    width: 100%;
    height: 70px;
    object-fit: cover;
    border-radius: 6px;
    transition: transform 0.3s, opacity 0.3s;
    opacity: 0.8;
}

.footer-middle .gallery-item img:hover {
    transform: scale(1.05);
    opacity: 1;
}

/* FOOTER BOTTOM */
.footer-bottom {
    background: #12122a;
    padding: 18px 0;
    border-top: 1px solid rgba(255,255,255,0.06);
}

.footer-bottom .copy-right-text p {
    color: #a0a8c0;
    font-size: 13px;
    margin: 0;
    font-family: 'Poppins', sans-serif;
    line-height: 38px;
}

.footer-bottom .copy-right-text p span {
    color: #ffffff;
    font-weight: 600;
}

.footer-bottom .footer-menu {
    display: flex;
    justify-content: flex-end;
}

.footer-bottom .footer-menu ul {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    gap: 5px;
    align-items: center;
}

.footer-bottom .footer-menu ul li a {
    color: #a0a8c0;
    font-size: 13px;
    text-decoration: none;
    font-family: 'Poppins', sans-serif;
    padding: 6px 14px;
    border-radius: 20px;
    border: 1px solid rgba(255,255,255,0.1);
    transition: background 0.3s, color 0.3s, border-color 0.3s;
    display: inline-block;
}

.footer-bottom .footer-menu ul li a:hover {
    background: #ffffff;
    color: #ffffff;
    border-color: #ffffff;
}

.social-facebook {
    background: #1877f2 !important;
    border-color: #1877f2 !important;
}

.social-google {
    background: #ea4335 !important;
    border-color: #ea4335 !important;
}

.social-youtube {
    background: #ff0000 !important;
    border-color: #ff0000 !important;
}

.social-facebook:hover { background: #0d65d9 !important; }
.social-google:hover   { background: #c5372c !important; }
.social-youtube:hover  { background: #cc0000 !important; }
</style>
