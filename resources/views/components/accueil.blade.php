{{-- ===== 1. SLIDER ===== --}}
<div class="witr_swiper_area">
    <div class="swiper-container witr_active_id5">
        <div class="swiper-wrapper">
            <div class="swiper-slide witr_swiper_height" style="background-image: url({{ asset('assets/images/slider-01.jpg') }});">
                <div class="witr_sw_text_area text-left">
                    <div class="witr_swiper_content">
                        <span class="slide-tag">Francis & Benedict — Lomé, Togo</span>
                        <h1>Éducation · Eau · Santé</h1>
                        <h2>Une éducation mondiale pour chaque enfant</h2>
                        <div class="slider_btn">
                            <a class="witr_btn slide-btn-primary" href="{{ route('apropos') }}">
                                Découvrir <i class="fas fa-arrow-right"></i>
                            </a>
                            <a class="witr_btn slide-btn-secondary" href="{{ route('contact') }}">
                                Nous Contacter
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide witr_swiper_height" style="background-image: url({{ asset('assets/images/photo1.avif') }});">
                <div class="witr_sw_text_area text-left">
                    <div class="witr_swiper_content">
                        <span class="slide-tag">Rejoignez Notre Mission</span>
                        <h1>Solidarité · Action · Impact</h1>
                        <h2>Ensemble, changeons des vies au Togo</h2>
                        <div class="slider_btn">
                            <a class="witr_btn slide-btn-primary" href="{{ route('projet') }}">
                                Nos Projets <i class="fas fa-arrow-right"></i>
                            </a>
                            <a class="witr_btn slide-btn-secondary" href="{{ route('contact') }}">
                                Faire un Don
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide witr_swiper_height" style="background-image: url({{ asset('assets/images/photo3.avif') }});">
                <div class="witr_sw_text_area text-left">
                    <div class="witr_swiper_content">
                        <span class="slide-tag">Agissons Ensemble</span>
                        <h1>Espoir · Avenir · Communauté</h1>
                        <h2>Bâtissons un avenir meilleur pour tous</h2>
                        <div class="slider_btn">
                            <a class="witr_btn slide-btn-primary" href="{{ route('evenement') }}">
                                Événements <i class="fas fa-arrow-right"></i>
                            </a>
                            <a class="witr_btn slide-btn-secondary" href="{{ route('actualite') }}">
                                Actualités
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-scrollbar"></div>
    </div>
</div>

{{-- ===== 2. FEATURES ===== --}}
<div class="hunger_features_area">
    <div class="containers feature_bg">
        <div class="row">
            <div class="col-lg-12">
                <div class="witr_section_title">
                    <div class="witr_section_title_inner text-center">
                        <span class="section-tag">Ce que nous faisons</span>
                        <h1>Nos Domaines d'Action</h1>
                        <div class="section-divider"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row feature_top">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="witr_service2 all_service2_color feature-card">
                    <div class="witr_front_content">
                        <div class="witr_service2_image">
                            <img src="{{ asset('assets/images/feature1.jpg') }}" alt="Alimentation">
                            <div class="feature-overlay">
                                <i class="fab fa-raspberry-pi"></i>
                            </div>
                        </div>
                        <div class="witr_service2_box box_sm_left">
                            <div class="witr_service2_icon">
                                <i class="fab fa-raspberry-pi"></i>
                            </div>
                            <div class="witr_titles">
                                <h3><a href="#">Alimentation & Agriculture</a></h3>
                                <p>Soutien aux familles en situation de précarité alimentaire.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="witr_service2 all_service2_color feature-card">
                    <div class="witr_front_content">
                        <div class="witr_service2_image">
                            <img src="{{ asset('assets/images/feature2.jpg') }}" alt="Santé">
                            <div class="feature-overlay">
                                <i class="icofont-doctor-alt"></i>
                            </div>
                        </div>
                        <div class="witr_service2_box box_sm_left">
                            <div class="witr_service2_icon">
                                <i class="icofont-doctor-alt"></i>
                            </div>
                            <div class="witr_titles">
                                <h3><a href="#">Santé & Médecine</a></h3>
                                <p>Accès aux soins de santé pour les populations vulnérables.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="witr_service2 all_service2_color feature-card">
                    <div class="witr_front_content">
                        <div class="witr_service2_image">
                            <img src="{{ asset('assets/images/feature3.jpg') }}" alt="Eau">
                            <div class="feature-overlay">
                                <i class="flaticon flaticon-water-1"></i>
                            </div>
                        </div>
                        <div class="witr_service2_box box_sm_left">
                            <div class="witr_service2_icon">
                                <i class="flaticon flaticon-water-1"></i>
                            </div>
                            <div class="witr_titles">
                                <h3><a href="#">Eau Potable</a></h3>
                                <p>Distribution d'eau pure dans les zones rurales du Togo.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- ===== 3. À PROPOS ===== --}}
<div class="hunger_about_area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="about-img-wrapper">
                    <img src="{{ asset('assets/images/photo2.avif') }}" alt="À propos" class="about-main-img" style="width: 600px; height: 600px;">
                    <div class="about-stats-badge">
                        <div class="stat-item">
                            <h3>500+</h3>
                            <p>Personnes aidées</p>
                        </div>
                        <div class="stat-divider"></div>
                        <div class="stat-item">
                            <h3>26</h3>
                            <p>Pays</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="witr_title_lf">
                    <div class="witr_section_title">
                        <div class="witr_section_title_inner text-left">
                            <span class="section-tag">Qui Sommes-Nous</span>
                            <h1>Éduquer les enfants des zones rurales est notre priorité</h1>
                            <div class="section-divider left"></div>
                            <p>Nous œuvrons pour un accès équitable à l'éducation, à la santé et à l'eau potable pour toutes les communautés du Togo et d'Afrique. Depuis notre création, nous avons soutenu des milliers de familles.</p>
                        </div>
                    </div>
                    <div class="about-counters">
                        <div class="counter-item">
                            <i class="fas fa-hands-helping"></i>
                            <h4>89 537</h4>
                            <span>Projets Financés</span>
                        </div>
                        <div class="counter-item">
                            <i class="fas fa-globe-africa"></i>
                            <h4>26 Pays</h4>
                            <span>Présence Mondiale</span>
                        </div>
                        <div class="counter-item">
                            <i class="fas fa-users"></i>
                            <h4>9.4 Million</h4>
                            <span>Bénéficiaires</span>
                        </div>
                    </div>
                    <a href="{{ route('apropos') }}" class="btn-about">
                        En Savoir Plus <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- ===== 4. CAMPAGNES ACTIVES ===== --}}
<div class="hunger_couses_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="witr_section_title">
                    <div class="witr_section_title_inner text-center">
                        <span class="section-tag">Agissez Maintenant</span>
                        <h1>Campagnes Actives</h1>
                        <div class="section-divider"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row couses_top">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="campaign-card">
                    <div class="campaign-img">
                        <img src="{{ asset('assets/images/photo5.avif') }}" alt="Santé">
                        <span class="campaign-badge">Santé</span>
                    </div>
                    <div class="campaign-body">
                        <h3>Fondation Pédiatrique contre le SIDA</h3>
                        <p>Soutien médical aux enfants touchés par le VIH en Afrique subsaharienne.</p>
                        <div class="campaign-progress">
                            <div class="progress-info">
                                <span>Collecté : <strong>25 000 $</strong></span>
                                <span class="progress-pct">90%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" style="width: 90%;"></div>
                            </div>
                        </div>
                        <a href="#" class="campaign-btn">
                            <i class="fas fa-heart"></i> Faire un Don
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="campaign-card">
                    <div class="campaign-img">
                        <img src="{{ asset('assets/images/photo4.avif') }}" alt="Éducation">
                        <span class="campaign-badge education">Éducation</span>
                    </div>
                    <div class="campaign-body">
                        <h3>Scolarisation des enfants défavorisés</h3>
                        <p>Accès à l'éducation pour les enfants en zones rurales du Togo.</p>
                        <div class="campaign-progress">
                            <div class="progress-info">
                                <span>Collecté : <strong>25 000 $</strong></span>
                                <span class="progress-pct">75%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" style="width: 75%;"></div>
                            </div>
                        </div>
                        <a href="#" class="campaign-btn">
                            <i class="fas fa-heart"></i> Faire un Don
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="campaign-card">
                    <div class="campaign-img">
                        <img src="{{ asset('assets/images/8.jpg') }}" alt="Nutrition">
                        <span class="campaign-badge nutrition">Nutrition</span>
                    </div>
                    <div class="campaign-body">
                        <h3>Lutte contre la malnutrition infantile</h3>
                        <p>Distribution de repas nutritifs aux enfants dans le besoin.</p>
                        <div class="campaign-progress">
                            <div class="progress-info">
                                <span>Collecté : <strong>18 000 $</strong></span>
                                <span class="progress-pct">60%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" style="width: 60%;"></div>
                            </div>
                        </div>
                        <a href="#" class="campaign-btn">
                            <i class="fas fa-heart"></i> Faire un Don
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-40">
            <a href="{{ route('projet') }}" class="btn-voir-plus">
                Voir tous les projets <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</div>

{{-- ===== CALL TO ACTION ===== --}}
<div class="hunger_call_to_bg_area">
    <div class="container">
        <div class="cta-wrapper text-center">
            <div class="cta-icon">
                <i class="fas fa-hand-holding-heart"></i>
            </div>
            <span class="section-tag light">Comment nous aidons</span>
            <h2>Rejoignez la Communauté pour l'Éducation des Enfants</h2>
            <p>Ensemble, nous pouvons faire la différence. Chaque don, aussi petit soit-il, change une vie.</p>
            <div class="cta-buttons">
                <a href="{{ route('contact') }}" class="cta-btn-primary">
                    Rejoindre le Groupe <i class="fas fa-users"></i>
                </a>
                <a href="{{ route('projet') }}" class="cta-btn-secondary">
                    Nos Projets <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<style>
    /* ===== GLOBAL ===== */
body {
    font-family: 'Poppins', sans-serif;
}

.section-tag {
    display: inline-block;
    background: rgba(232, 69, 69, 0.1);
    color: #030303;
    font-size: 13px;
    font-weight: 600;
    padding: 5px 16px;
    border-radius: 20px;
    margin-bottom: 12px;
    letter-spacing: 1px;
    text-transform: uppercase;
    font-family: 'Poppins', sans-serif;
}

.section-tag.light {
    background: rgba(255,255,255,0.15);
    color: #ffffff;
}

.section-divider {
    width: 50px;
    height: 3px;
    background: #414141;
    border-radius: 3px;
    margin: 15px auto 30px;
}

.section-divider.left {
    margin: 15px 0 30px;
}

.mt-40 { margin-top: 40px; }

/* ===== SLIDER ===== */
.slide-tag {
    display: inline-block;
    background: #050505;
    color: #fff;
    padding: 5px 18px;
    border-radius: 20px;
    font-size: 13px;
    font-weight: 600;
    margin-bottom: 15px;
    font-family: 'Poppins', sans-serif;
    letter-spacing: 1px;
}

.witr_swiper_content h1 {
    font-family: 'Poppins', sans-serif;
    font-size: 42px;
    font-weight: 700;
    color: #ffffff;
    line-height: 1.2;
    margin-bottom: 10px;
    text-shadow: 0 2px 10px rgba(0,0,0,0.3);
}

.witr_swiper_content h2 {
    font-family: 'Poppins', sans-serif;
    font-size: 22px;
    font-weight: 400;
    color: rgba(255,255,255,0.9);
    margin-bottom: 30px;
}

.slide-btn-primary {
    background: #080808 !important;
    color: #fff !important;
    padding: 12px 30px !important;
    border-radius: 30px !important;
    font-weight: 600 !important;
    font-family: 'Poppins', sans-serif !important;
    text-decoration: none !important;
    display: inline-flex !important;
    align-items: center !important;
    gap: 8px !important;
    margin-right: 12px !important;
    transition: background 0.3s, transform 0.2s !important;
}

.slide-btn-primary:hover {
    background: #070707 !important;
    transform: scale(1.05) !important;
}

.slide-btn-secondary {
    background: transparent !important;
    color: #fff !important;
    padding: 11px 30px !important;
    border-radius: 30px !important;
    border: 2px solid #fff !important;
    font-weight: 600 !important;
    font-family: 'Poppins', sans-serif !important;
    text-decoration: none !important;
    display: inline-flex !important;
    align-items: center !important;
    transition: background 0.3s !important;
}

.slide-btn-secondary:hover {
    background: rgba(255,255,255,0.15) !important;
}

/* ===== FEATURES ===== */
.hunger_features_area {
    padding: 70px 0;
    background: #f9f9f9;
}

.feature-card {
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 5px 25px rgba(0,0,0,0.08);
    transition: transform 0.3s;
    margin-bottom: 30px;
    background: #fff;
}

.feature-card:hover {
    transform: translateY(-8px);
}

.witr_service2_image {
    position: relative;
    overflow: hidden;
}

.feature-overlay {
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background: rgba(0, 0, 0, 0.7);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s;
}

.feature-card:hover .feature-overlay {
    opacity: 1;
}

.feature-overlay i {
    color: #fff;
    font-size: 40px;
}

.witr_service2_box {
    padding: 20px;
}

.witr_service2_box h3 a {
    color: #1a1a2e;
    font-size: 16px;
    font-weight: 600;
    font-family: 'Poppins', sans-serif;
    text-decoration: none;
}

.witr_service2_box p {
    color: #888;
    font-size: 13px;
    margin: 5px 0 0;
}

/* ===== À PROPOS ===== */
.hunger_about_area {
    padding: 80px 0;
    background: #ffffff;
}

.about-img-wrapper {
    position: relative;
    display: inline-block;
    width: 100%;
}

.about-main-img {
    width: 100%;
    border-radius: 16px;
    box-shadow: 0 10px 40px rgba(0,0,0,0.12);
}

.about-stats-badge {
    position: absolute;
    bottom: -20px;
    right: 20px;
    background: #1a1a2e;
    color: #fff;
    padding: 20px 25px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    gap: 20px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.2);
}

.stat-item h3 {
    font-size: 22px;
    font-weight: 700;
    color: #ffffff;
    margin: 0;
}

.stat-item p {
    font-size: 12px;
    color: #a0a8c0;
    margin: 0;
}

.stat-divider {
    width: 1px;
    height: 40px;
    background: rgba(255,255,255,0.2);
}

.witr_title_lf {
    padding-left: 40px;
}

.witr_title_lf h1 {
    font-family: 'Poppins', sans-serif;
    font-size: 28px;
    font-weight: 700;
    color: #1a1a2e;
    line-height: 1.4;
    margin-bottom: 15px;
}

.witr_title_lf p {
    color: #666;
    font-size: 14px;
    line-height: 1.8;
    margin-bottom: 30px;
}

.about-counters {
    display: flex;
    gap: 20px;
    margin-bottom: 30px;
    flex-wrap: wrap;
}

.counter-item {
    flex: 1;
    min-width: 100px;
    text-align: center;
    background: #f9f9f9;
    padding: 18px 10px;
    border-radius: 10px;
    border-bottom: 3px solid #0a0a0a;
}

.counter-item i {
    color: #070707;
    font-size: 22px;
    margin-bottom: 8px;
    display: block;
}

.counter-item h4 {
    font-size: 18px;
    font-weight: 700;
    color: #1a1a2e;
    margin: 0 0 4px;
}

.counter-item span {
    font-size: 12px;
    color: #888;
}

.btn-about {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: #1a1a2e;
    color: #fff;
    padding: 12px 30px;
    border-radius: 30px;
    font-size: 14px;
    font-weight: 600;
    text-decoration: none;
    font-family: 'Poppins', sans-serif;
    transition: background 0.3s, transform 0.2s;
}

.btn-about:hover {
    background: #050505;
    color: #fff;
    transform: scale(1.03);
}

/* ===== CAMPAGNES ===== */
.hunger_couses_area {
    padding: 80px 0;
    background: #f9f9f9;
}

.campaign-card {
    background: #ffffff;
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 5px 25px rgba(0,0,0,0.08);
    transition: transform 0.3s, box-shadow 0.3s;
    margin-bottom: 30px;
    font-family: 'Poppins', sans-serif;
}

.campaign-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.13);
}

.campaign-img {
    position: relative;
    overflow: hidden;
}

.campaign-img img {
    width: 100%;
    height: 220px;
    object-fit: cover;
    transition: transform 0.4s;
}

.campaign-card:hover .campaign-img img {
    transform: scale(1.05);
}

.campaign-badge {
    position: absolute;
    top: 15px;
    left: 15px;
    background: #0f0f0f;
    color: #fff;
    padding: 4px 14px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
}

.campaign-badge.education { background: #1a1a2e; }
.campaign-badge.nutrition  { background: #27ae60; }

.campaign-body {
    padding: 22px;
}

.campaign-body h3 {
    font-size: 16px;
    font-weight: 600;
    color: #1a1a2e;
    margin-bottom: 8px;
    line-height: 1.4;
}

.campaign-body p {
    font-size: 13px;
    color: #888;
    margin-bottom: 18px;
    line-height: 1.7;
}

.campaign-progress {
    margin-bottom: 18px;
}

.progress-info {
    display: flex;
    justify-content: space-between;
    font-size: 13px;
    color: #555;
    margin-bottom: 6px;
    font-weight: 500;
}

.progress-pct {
    color: #0f0e0e;
    font-weight: 700;
}

.progress {
    height: 7px;
    background: #eee;
    border-radius: 10px;
    overflow: hidden;
}

.progress .progress-bar {
    background: linear-gradient(90deg, #070707, #6d6969);
    border-radius: 10px;
    transition: width 1.5s ease;
}

.campaign-btn {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    background: #1a1a2e;
    color: #fff;
    padding: 11px 20px;
    border-radius: 30px;
    font-size: 14px;
    font-weight: 600;
    text-decoration: none;
    transition: background 0.3s;
    width: 100%;
}

.campaign-btn:hover {
    background: #000000;
    color: #fff;
}

.btn-voir-plus {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    border: 2px solid #1a1a2e;
    color: #1a1a2e;
    padding: 12px 35px;
    border-radius: 30px;
    font-size: 14px;
    font-weight: 600;
    text-decoration: none;
    font-family: 'Poppins', sans-serif;
    transition: background 0.3s, color 0.3s;
}

.btn-voir-plus:hover {
    background: #1a1a2e;
    color: #fff;
}

/* ===== CALL TO ACTION ===== */
.hunger_call_to_bg_area {
    background: linear-gradient(135deg, #1a1a2e 0%, #2d2d5e 100%);
    padding: 80px 0;
    font-family: 'Poppins', sans-serif;
}

.cta-wrapper {
    max-width: 700px;
    margin: 0 auto;
}

.cta-icon {
    width: 70px;
    height: 70px;
    background: rgba(232,69,69,0.2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
}

.cta-icon i {
    color: #ffffff;
    font-size: 30px;
}

.cta-wrapper h2 {
    color: #ffffff;
    font-size: 28px;
    font-weight: 700;
    margin-bottom: 12px;
    line-height: 1.4;
}

.cta-wrapper p {
    color: #a0a8c0;
    font-size: 15px;
    margin-bottom: 30px;
    line-height: 1.7;
}

.cta-buttons {
    display: flex;
    justify-content: center;
    gap: 15px;
    flex-wrap: wrap;
}

.cta-btn-primary {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: #030303;
    color: #fff;
    padding: 13px 30px;
    border-radius: 30px;
    font-size: 14px;
    font-weight: 600;
    text-decoration: none;
    transition: background 0.3s, transform 0.2s;
}

.cta-btn-primary:hover {
    background: #c0392b;
    color: #fff;
    transform: scale(1.05);
}

.cta-btn-secondary {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: transparent;
    color: #fff;
    padding: 12px 30px;
    border-radius: 30px;
    border: 2px solid rgba(255,255,255,0.3);
    font-size: 14px;
    font-weight: 600;
    text-decoration: none;
    transition: border-color 0.3s, background 0.3s;
}

.cta-btn-secondary:hover {
    border-color: #e84545;
    background: rgba(232,69,69,0.1);
    color: #fff;
}

/* ===== RESPONSIVE ===== */
@media (max-width: 768px) {
    .witr_swiper_content h1 { font-size: 26px; }
    .witr_swiper_content h2 { font-size: 16px; }
    .about-stats-badge { position: static; margin-top: 20px; }
    .witr_title_lf { padding-left: 0; margin-top: 40px; }
    .about-counters { gap: 10px; }
    .cta-buttons { flex-direction: column; align-items: center; }
}

</style>

