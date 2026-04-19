
<div class="em40_header_area_main">
 	<!-- HEADER TOP AREA -->
	<div class="hunger-header-top">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-lg-8 col-md-12 col-sm-12">
					<div class="top-address text-left text_m_center">
						<p>
							<span><i class="fas fa-home"></i>92 Bowery St., New York, NY 10013</span>
							<a href="#"><i class="fas fa-envelope"></i>demo@example.com</a>
						</p>
					</div>
				</div>
				<div class="col-xs-12 col-lg-4 col-md-12 col-sm-12">
					<div class="top-right-menu">
						<ul class="social-icons text-right text_m_center">
							<li><a href="#">Dontae Now</a></li>
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
                                            <li class="{{ request()->routeIs('projet') ? 'active' : '' }}">
                                                <a href="{{ route('projet') }}">Projet</a>
                                            </li>
                                            <li class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                                                <a href="{{ route('contact') }}">Contact</a>
                                            </li>
                                        </ul>
                                    </nav>

                                    <!-- SEARCH -->
                                    <div class="main-search-menu">
                                        <div class="em-quearys-top msin-menu-search">
                                            <div class="em-top-quearys-area">
                                                <div class="em-header-quearys">
                                                    <div class="em-quearys-menu">
                                                        <i class="fa fa-search t-quearys"></i>
                                                    </div>
                                                </div>
                                                <div class="em-quearys-inner">
                                                    <div class="em-quearys-form">
                                                        <form class="top-form-control" action="#" method="get">
                                                            <input type="text" placeholder="Rechercher..." name="s" value="">
                                                            <button class="top-quearys-style" type="submit">
                                                                <i class="fa fa-long-arrow-right"></i>
                                                            </button>
                                                        </form>
                                                        <div class="em-header-quearys-close text-center mrt10">
                                                            <div class="em-quearys-menu">
                                                                <i class="fa fa-close t-close em-s-hidden"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- POPUP SIDEBAR -->
                                    <div class="menu_popup_option">
                                        <div class="right_popupmenu_area">
                                            <div class="right_side_icon">
                                                <div class="right_sideber_menu">
                                                    <i class="icofont-navigation-menu openclass"></i>
                                                </div>
                                            </div>
                                            <div class="right_sideber_menu_inner">
                                                <div class="right_sideber_content">
                                                    <div class="blog-left-side widget">
                                                        <div class="widget widget_categories">
                                                            <h2 class="widget-title">Catégories</h2>
                                                            <ul>
                                                                <li><a href="#">Accessories</a></li>
                                                                <li><a href="#">Hydraulic</a></li>
                                                                <li><a href="#">Induction</a></li>
                                                                <li><a href="#">Integrated</a></li>
                                                                <li><a href="#">Washing</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="widget widget_media_image">
                                                            <a href="#">
                                                                <img src="{{ asset('assets/images/blog3.jpg') }}" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="right_side_icon right_close_class">
                                                        <div class="right_sideber_menu">
                                                            <i class="icofont-close-line-squared closeclass"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
