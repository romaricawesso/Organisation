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
                                <img src="{{ asset('assets/images/logo2.png') }}" alt="Logo">
                            </a>
                            <p>Round whitefish flat loach potted killifish ronquil. Long-finned pike escolar northern pike escolar nor thern squawfish eel.</p>
                            <div class="social-icons">
                                <a href="#"><i class="fa fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
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
                                    <a href="#">
                                        <img src="{{ asset('assets/images/' . $img) }}" alt="">
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
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="copy-right-text">
                        <p>Copyright &copy; {{ date('Y') }} Hunger - Tous droits réservés.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="footer-menu">
                        <ul class="text-right">
                            <li><a href="{{ route('projet') }}">Projet</a></li>
                            <li><a href="{{ route('evenement') }}">Événement</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
