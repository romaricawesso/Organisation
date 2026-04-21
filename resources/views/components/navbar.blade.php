<div class="em40_header_area_main">
 	<!-- HEADER TOP AREA -->
	<div class="hunger-header-top">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-lg-8 col-md-12 col-sm-12">
					<div class="top-address text-left text_m_center">
						<p>
							<span><i class="fas fa-home"></i>Lomé-Togo</span>
							<a href="#"><i class="fas fa-envelope"></i>togo@francisandbenedict.com</a>
						</p>
					</div>
				</div>
				<div class="col-xs-12 col-lg-4 col-md-12 col-sm-12">
					<div class="top-right-menu">
						<ul class="social-icons text-right text_m_center">
							<li><a href="#">Faire un Don</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div><!-- END HEADER TOP AREA -->
	<!-- HEADER TOP 2 creative AREA -->
	<div class="tx_top2_relative">
		<div class="">
			<div class="tx_relative_m">
				<div class="">
					<div class="mainmenu_width_tx  ">
						<div class="hunger-main-menu one_page hidden-xs hidden-sm witr_search_wh witr_h_h20">
							<div class="hunger_nav_area scroll_fixed postfix">
								<div class="container">
									<div class="row logo-left">
										<div class="col-md-3 col-sm-3 col-xs-4">
                                            <div class="logo">
                                                <a class="main_sticky_main_l" href="{{ route('accueil') }}" title="logo">
                                                    <img src="{{ asset('assets/images/logo.png') }}" alt="logo" class="logo-mobile">
                                                </a>
                                                <a class="main_sticky_l" href="{{ route('accueil') }}" title="logo">
                                                    <img src="{{ asset('assets/images/logo2.png') }}" alt="logo" class="logo-mobile">
                                                </a>
                                            </div>
                                        </div><!-- END LOGO --><!-- END LOGO -->
										<!-- MAIN MENU -->
										<!-- MAIN MENU DESKTOP -->
                                        <div class="col-md-9 col-sm-9 col-xs-8">
                                            <div class="tx_mmenu_together">
                                                <nav class="hunger_menu nologo_menu13">
                                                    <ul class="sub-menu">
                                                        <li class="{{ request()->routeIs('accueil') ? 'active' : '' }}">
                                                            <a href="{{ route('accueil') }}">Accueil</a>
                                                        </li>
                                                        <li class="{{ request()->routeIs('apropos') ? 'active' : '' }}">
                                                            <a href="{{ route('apropos') }}">À Propos</a>
                                                        </li>
                                                        <li class="{{ request()->routeIs('evenement') ? 'active' : '' }}">
                                                            <a href="{{ route('evenement') }}">Événement</a>
                                                        </li>
                                                        <li class="{{ request()->routeIs('actualite') ? 'active' : '' }}">
                                                            <a href="{{ route('actualite') }}">Actualité</a>
                                                        </li>
                                                        <li class="{{ request()->routeIs('projets') ? 'active' : '' }}">
                                                            <a href="{{ route('projet') }}">Projet</a>
                                                        </li>
                                                        <li class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                                                            <a href="{{ route('contact') }}">Contact</a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                                <!-- BOUTON LANGUE -->
                                                <div class="lang-switcher">
                                                    @if(app()->getLocale() == 'FR')
                                                        <a href="{{ route('lang.switch', 'en') }}" class="lang-btn">
                                                            <img src="https://flagcdn.com/w20/gb.png" alt="EN"> EN
                                                        </a>
                                                    @else
                                                        <a href="{{ route('lang.switch', 'fr') }}" class="lang-btn">
                                                            <img src="https://flagcdn.com/w20/fr.png" alt="FR" > FR
                                                        </a>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END DESKTOP MENU -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- MOBILE MENU Logo AREA -->
<div class="mobile_logo_area hidden-md hidden-lg">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="mobile_menu_logo text-center">
					<a href="index.html" title="hunger">
						<img src="assets/images/logo.png" alt="hunger">
					</a>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- MOBILE MENU AREA -->
<div class="home-2 mbm hidden-md hidden-lg  header_area main-menu-area">
	<div class="menu_area mobile-menu">
		<nav class="hunger_menu">
			<ul class="sub-menu">
				<li class="menu-item-has-children">
					<a href="#">Home</a>
					<ul class="sub-menu">
						<li><a href="index.html">Home Page</a></li>
						<li><a href="index-2.html">Home Two Page</a></li>
						<li><a href="index-3.html">Landing Page</a></li>
						<li><a href="index-4.html">Home Video Page</a></li>
					</ul>
				</li>
				<li><a href="about.html">About</a></li>
				<li><a href="causes.html">Causes</a></li>
				<li><a href="event.html">Event</a></li>
				<li class="menu-item-has-children">
					<a href="#">Page</a>
					<ul class="sub-menu">
						<li class="menu-item-has-children">
							<a href="#">Portfolio</a>
							<ul class="sub-menu">
								<li><a href="portfolio.html">Portfolio</a></li>
								<li><a href="portfolio-3column.html">Portfolio 3Column</a></li>
								<li><a href="portfolio-4column.html">Portfolio 4Column</a></li>
							</ul>
						</li>
						<li><a href="service.html">Service</a></li>
						<li><a href="single-service.html">Single Service</a></li>
						<li><a href="faq.html">Faq’s</a></li>
						<li><a href="donation.html">Donation</a></li>
						<li><a href="team.html">Team</a></li>
						<li><a href="single-team.html">Single Team</a></li>
						<li><a href="testimonial.html">Testimonial</a></li>
					</ul>
				</li>

				<li class="menu-item-has-children">
				<a href="#">Blog</a>
					<ul class="sub-menu">
						<li><a href="blog.html">Blog Grid</a></li>
						<li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
						<li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
					</ul>
				</li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</nav>
	</div>
</div>
<!-- END MOBILE MENU AREA  -->

<style>
    /* ===== GOOGLE FONT MODERNE ===== */
 @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

/* ===== HEADER TOP ===== */
.hunger-header-top {
    background-color: #1a1a2e;
    padding: 10px 0;
    font-family: 'Poppins', sans-serif;
}

.hunger-header-top .top-address p {
    margin: 0;
    color: #ffffff;
    font-size: 13px;
    font-weight: 400;
    display: flex;
    align-items: center;
    gap: 20px;
}

.hunger-header-top .top-address span,
.hunger-header-top .top-address a {
    color: #ffffff;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 6px;
    transition: color 0.3s;
}

.hunger-header-top .top-address a:hover {
    color: #000000;
}

.hunger-header-top .top-address i {
    color: #000000;
    font-size: 13px;
}

.hunger-header-top .social-icons {
    margin: 0;
    padding: 0;
    list-style: none;
    display: flex;
    justify-content: flex-end;
    align-items: center;
    height: 100%;
}

.hunger-header-top .social-icons li a {
    color: #ffffff;
    background: #000000;
    padding: 6px 18px;
    border-radius: 20px;
    font-size: 13px;
    font-weight: 600;
    text-decoration: none;
    font-family: 'Poppins', sans-serif;
    transition: background 0.3s, transform 0.2s;
    display: inline-block;
}

.hunger-header-top .social-icons li a:hover {
    background: #ffffff;
    transform: scale(1.05);
}

/* ===== NAVBAR PRINCIPALE ===== */
.hunger_nav_area {
    background: #ffffff;
    box-shadow: 0 2px 20px rgba(0, 0, 0, 0.08);
    font-family: 'Poppins', sans-serif;
}

.hunger_nav_area .row.logo-left {
    display: flex;
    align-items: center;
    padding: 0px 0;
}

/* ===== LOGO ===== */
.logo-mobile {
    width: 100px;
    height: auto;
}

/* ===== MENU CENTRÉ ===== */
.tx_mmenu_together {
    display: flex;
    justify-content: center;
    align-items: center;
}

.hunger_menu.nologo_menu13 ul.sub-menu {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 5px;
    list-style: none;
    margin: 0;
    padding: 0;
    flex-wrap: wrap;
}

.hunger_menu.nologo_menu13 ul.sub-menu > li > a {
    font-family: 'Poppins', sans-serif;
    font-size: 14px;
    font-weight: 500;
    color: #2c2c2c;
    padding: 8px 16px;
    border-radius: 6px;
    text-decoration: none;
    letter-spacing: 0.3px;
    transition: background 0.3s, color 0.3s;
    display: inline-block;
    white-space: nowrap;
}

.hunger_menu.nologo_menu13 ul.sub-menu > li > a:hover,
.hunger_menu.nologo_menu13 ul.sub-menu > li.active > a {
    background: #161515;
    color: #ffffff !important;
}

/* ===== MOBILE MENU LOGO ===== */
.mobile_logo_area {
    background: #ffffff;
    padding: 12px 0;
    box-shadow: 0 2px 10px rgba(0,0,0,0.08);
    text-align: center;
}

.mobile_menu_logo img {
    width: 120px;
    height: auto;
}

/* ===== MOBILE MENU ===== */
.home-2.mbm {
    background: #1a1a2e;
    font-family: 'Poppins', sans-serif;
}

.home-2.mbm .hunger_menu ul.sub-menu {
    list-style: none;
    padding: 0;
    margin: 0;
}

.home-2.mbm .hunger_menu ul.sub-menu > li > a {
    display: block;
    color: #ffffff;
    font-size: 14px;
    font-weight: 500;
    padding: 12px 20px;
    border-bottom: 1px solid rgba(255,255,255,0.08);
    text-decoration: none;
    font-family: 'Poppins', sans-serif;
    transition: background 0.3s, padding-left 0.3s;
}

.home-2.mbm .hunger_menu ul.sub-menu > li > a:hover {
    background: #e84545;
    padding-left: 30px;
}

/* ===== BOUTON LANGUE ===== */
.lang-switcher {
    display: flex;
    align-items: center;
    margin-left: 15px;
}

.lang-btn {
    display: flex;
    align-items: center;
    gap: 6px;
    background: #1a1a2e;
    color: #ffffff !important;
    padding: 6px 14px;
    border-radius: 20px;
    font-size: 13px;
    font-weight: 600;
    text-decoration: none !important;
    font-family: 'Poppins', sans-serif;
    transition: background 0.3s, transform 0.2s;
    border: 2px solid transparent;
}

.lang-btn:hover {
    background: #000000;
    transform: scale(1.05);
}

.lang-btn img {
    width: 18px;
    height: 12px;
    object-fit: cover;
    border-radius: 2px;
}

</style>
