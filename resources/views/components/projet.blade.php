<!-- breadcumb-area -->
<div class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="brpt">
                    <h2>Projets</h2>
                </div>
                <div class="breadcumb-inner">
                    <ul>
                        <li><a href="{{ route('accueil') }}">Accueil</a></li>
                        <li><i class="fas fa-angle-right"></i></li>
                        <li>Projets</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- ===== INTRO PROJET ===== --}}
<div class="projet-intro-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="single_thumb_area">
                    <img src="{{ asset('assets/images/photo4.avif') }}" alt="Projets Francis Benedict" class="projet-main-img">
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="projet-intro-content">
                    <span class="section-tag-gold">Notre Impact</span>
                    <h2>Nous faisons la différence dans leur vie</h2>
                    <div class="gold-divider"></div>
                    <p>Francis + Benedict est bien plus qu'une organisation — c'est un mouvement de transformation. Nos projets couvrent l'autonomisation des femmes, l'éducation des enfants, la santé communautaire et le développement économique durable au Togo.</p>
                    <p>Chaque rapport, chaque brochure, chaque vidéo témoigne d'un impact réel sur des vies réelles. Parcourez nos ressources et découvrez comment votre soutien change des générations entières.</p>
                    <div class="projet-intro-stats">
                        <div class="pstat">
                            <i class="fas fa-file-alt"></i>
                            <h4>48</h4>
                            <span>Rapports</span>
                        </div>
                        <div class="pstat">
                            <i class="fas fa-video"></i>
                            <h4>24</h4>
                            <span>Vidéos</span>
                        </div>
                        <div class="pstat">
                            <i class="fas fa-book-open"></i>
                            <h4>16</h4>
                            <span>Brochures</span>
                        </div>
                        <div class="pstat">
                            <i class="fas fa-images"></i>
                            <h4>200+</h4>
                            <span>Photos</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- ===== ONGLETS NAVIGATION ===== --}}
<div class="projet-tabs-area">
    <div class="container">

        {{-- NAV ONGLETS --}}
        <div class="projet-tabs-nav">
            <button class="tab-btn active" data-tab="videos">
                <i class="fas fa-video"></i> Vidéos
            </button>
            <button class="tab-btn" data-tab="rapports">
                <i class="fas fa-file-alt"></i> Rapports
            </button>
            <button class="tab-btn" data-tab="brochures">
                <i class="fas fa-book-open"></i> Brochures
            </button>
            <button class="tab-btn" data-tab="galerie">
                <i class="fas fa-images"></i> Galerie Photos
            </button>
        </div>

        {{-- ===== ONGLET VIDÉOS (3 cases horizontales) ===== --}}
        <div class="tab-content active" id="tab-videos">
            <div class="row mb-30">
                <div class="col-lg-12 text-center">
                    <span class="section-tag-gold">Nos Témoignages & Actions</span>
                    <h2 class="projet-section-title">Vidéos</h2>
                    <div class="gold-divider center"></div>
                </div>
            </div>
            <div class="row">

                {{-- VIDÉO 1 --}}
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="video-card">
                        <div class="video-card-thumb">
                            <iframe
                                src="https://www.youtube.com/embed/XHOmBV4js_E?controls=1&rel=0&modestbranding=1"
                                allowfullscreen
                                title="Vidéo 1">
                            </iframe>
                        </div>
                        <div class="video-card-body">
                            <span class="video-tag"><i class="fas fa-play-circle"></i> Témoignage</span>
                            <h4>Autonomisation des Couturières de Lomé</h4>
                            <p>Découvrez comment nos couturières transforment leur vie et celle de leur famille grâce à la formation et à l'emploi digne.</p>
                            <div class="video-card-footer">
                                <span><i class="fas fa-calendar-alt"></i> Août 2024</span>
                                <span><i class="fas fa-clock"></i> 5 min</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- VIDÉO 2 --}}
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="video-card">
                        <div class="video-card-thumb">
                            <iframe
                                src="https://www.youtube.com/embed/fi4gZpp6lKA?controls=1&rel=0&modestbranding=1"
                                allowfullscreen
                                title="Vidéo 2">
                            </iframe>
                        </div>
                        <div class="video-card-body">
                            <span class="video-tag"><i class="fas fa-play-circle"></i> Rapport</span>
                            <h4>Impact 2024 — Éducation des Enfants</h4>
                            <p>Un regard sur nos programmes d'éducation qui ont permis à plus de 1 200 enfants d'accéder à l'école primaire au Togo.</p>
                            <div class="video-card-footer">
                                <span><i class="fas fa-calendar-alt"></i> Juillet 2024</span>
                                <span><i class="fas fa-clock"></i> 8 min</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- VIDÉO 3 --}}
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="video-card">
                        <div class="video-card-thumb">
                            <iframe
                                src="https://www.youtube.com/embed/XHOmBV4js_E?controls=1&rel=0&modestbranding=1"
                                allowfullscreen
                                title="Vidéo 3">
                            </iframe>
                        </div>
                        <div class="video-card-body">
                            <span class="video-tag audio"><i class="fas fa-microphone"></i> Audio / Podcast</span>
                            <h4>Interview — Francis Avoyi parle de la Mission</h4>
                            <p>Francis Avoyi partage sa vision pour le Togo et explique comment le partenariat avec Francis + Benedict a multiplié leur impact.</p>
                            <div class="video-card-footer">
                                <span><i class="fas fa-calendar-alt"></i> Juin 2024</span>
                                <span><i class="fas fa-clock"></i> 12 min</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        {{-- ===== ONGLET RAPPORTS ===== --}}
        <div class="tab-content" id="tab-rapports">
            <div class="row mb-30">
                <div class="col-lg-12 text-center">
                    <span class="section-tag-gold">Transparence & Impact</span>
                    <h2 class="projet-section-title">Rapports Annuels</h2>
                    <div class="gold-divider center"></div>
                </div>
            </div>

            {{-- FAQ ACCORDÉON --}}
            <div class="row mb-40">
                <div class="col-lg-12">
                    <div class="accordion_area faq_style1">
                        <div class="faq-part">
                            <div id="accordion-rapports">
                                <div class="card card-2 active show">
                                    <div class="card-header witr_ac_card">
                                        <a href="#" class="card-link witr_ac_style collapsed"
                                           data-toggle="collapse" data-target="#r_collapse_1">
                                            <i class="fas fa-file-alt"></i> Rapport Annuel 2024 — Impact & Résultats
                                        </a>
                                    </div>
                                    <div id="r_collapse_1" class="collapse active show" data-parent="#accordion-rapports">
                                        <p>En 2024, Francis + Benedict a soutenu <strong>500+ femmes</strong>, scolarisé <strong>1 200 enfants</strong> et financé <strong>89 projets communautaires</strong> à travers le Togo. Ce rapport présente nos actions, nos partenaires et l'utilisation détaillée des fonds collectés.</p>
                                        <a href="#" class="rapport-download-btn">
                                            <i class="fas fa-download"></i> Télécharger le Rapport PDF
                                        </a>
                                    </div>
                                </div>
                                <div class="card card-2">
                                    <div class="card-header witr_ac_card">
                                        <a href="#" class="card-link witr_ac_style"
                                           data-toggle="collapse" data-target="#r_collapse_2">
                                            <i class="fas fa-file-alt"></i> Rapport Annuel 2023 — Femmes & Autonomisation
                                        </a>
                                    </div>
                                    <div id="r_collapse_2" class="collapse" data-parent="#accordion-rapports">
                                        <p>Le rapport 2023 met en lumière nos programmes de formation professionnelle pour les couturières et les résultats obtenus en matière d'autonomisation économique des femmes dans les zones rurales.</p>
                                        <a href="#" class="rapport-download-btn">
                                            <i class="fas fa-download"></i> Télécharger le Rapport PDF
                                        </a>
                                    </div>
                                </div>
                                <div class="card card-2">
                                    <div class="card-header witr_ac_card">
                                        <a href="#" class="card-link witr_ac_style"
                                           data-toggle="collapse" data-target="#r_collapse_3">
                                            <i class="fas fa-file-alt"></i> Rapport Annuel 2022 — Éducation & Avenir
                                        </a>
                                    </div>
                                    <div id="r_collapse_3" class="collapse" data-parent="#accordion-rapports">
                                        <p>Bilan de nos actions éducatives : construction de salles de classe, distribution de fournitures scolaires, et mise en place de bourses d'études pour les enfants orphelins au Togo.</p>
                                        <a href="#" class="rapport-download-btn">
                                            <i class="fas fa-download"></i> Télécharger le Rapport PDF
                                        </a>
                                    </div>
                                </div>
                                <div class="card card-2">
                                    <div class="card-header witr_ac_card">
                                        <a href="#" class="card-link witr_ac_style"
                                           data-toggle="collapse" data-target="#r_collapse_4">
                                            <i class="fas fa-file-alt"></i> Rapport Financier 2024 — Transparence des Fonds
                                        </a>
                                    </div>
                                    <div id="r_collapse_4" class="collapse" data-parent="#accordion-rapports">
                                        <p>Détail complet de l'utilisation des dons reçus en 2024 : 70% pour les programmes terrain, 20% pour la formation, 10% pour l'administration. Rapport certifié conforme aux exigences 501(c)(3).</p>
                                        <a href="#" class="rapport-download-btn">
                                            <i class="fas fa-download"></i> Télécharger le Rapport PDF
                                        </a>
                                    </div>
                                </div>
                                <div class="card card-2">
                                    <div class="card-header witr_ac_card">
                                        <a href="#" class="card-link witr_ac_style"
                                           data-toggle="collapse" data-target="#r_collapse_5">
                                            <i class="fas fa-file-alt"></i> Rapport de Mission 2023 — Terrain & Communauté
                                        </a>
                                    </div>
                                    <div id="r_collapse_5" class="collapse" data-parent="#accordion-rapports">
                                        <p>Compte-rendu complet des missions de terrain réalisées en 2023 : visites communautaires, distributions de matériel, rencontres avec les partenaires locaux et évaluation des impacts sur le long terme.</p>
                                        <a href="#" class="rapport-download-btn">
                                            <i class="fas fa-download"></i> Télécharger le Rapport PDF
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- ===== ONGLET BROCHURES ===== --}}
        <div class="tab-content" id="tab-brochures">
            <div class="row mb-30">
                <div class="col-lg-12 text-center">
                    <span class="section-tag-gold">Nos Publications</span>
                    <h2 class="projet-section-title">Brochures & Documents</h2>
                    <div class="gold-divider center"></div>
                </div>
            </div>
            <div class="row">

                @php
                $brochures = [
                    ['icon'=>'fas fa-female',       'titre'=>'Programme Couturières 2024',       'desc'=>'Présentation complète de notre programme de formation et d\'emploi pour les femmes togolaises.', 'tag'=>'Programme', 'date'=>'Août 2024'],
                    ['icon'=>'fas fa-child',         'titre'=>'Éducation des Enfants',            'desc'=>'Brochure sur nos actions en faveur de la scolarisation des orphelins et enfants défavorisés.', 'tag'=>'Éducation', 'date'=>'Juillet 2024'],
                    ['icon'=>'fas fa-hands-helping', 'titre'=>'Devenir Partenaire',               'desc'=>'Guide complet pour rejoindre Francis + Benedict en tant que partenaire financier ou bénévole.', 'tag'=>'Partenariat', 'date'=>'Juin 2024'],
                    ['icon'=>'fas fa-heart',         'titre'=>'Guide du Donateur',                'desc'=>'Tout ce que vous devez savoir sur l\'utilisation de vos dons et les avantages fiscaux associés.', 'tag'=>'Don', 'date'=>'Mai 2024'],
                    ['icon'=>'fas fa-globe-africa',  'titre'=>'Togo — Contexte & Défis',         'desc'=>'Analyse du contexte socio-économique au Togo et des défis auxquels font face nos bénéficiaires.', 'tag'=>'Contexte', 'date'=>'Avril 2024'],
                    ['icon'=>'fas fa-scissors',      'titre'=>'L\'Artisanat au Service de la Mission','desc'=>'Comment la vente de nos créations artisanales finance directement nos programmes sur le terrain.', 'tag'=>'Artisanat', 'date'=>'Mars 2024'],
                ];
                @endphp

                @foreach($brochures as $b)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="brochure-card">
                        <div class="brochure-icon">
                            <i class="{{ $b['icon'] }}"></i>
                        </div>
                        <div class="brochure-tag">{{ $b['tag'] }}</div>
                        <h4>{{ $b['titre'] }}</h4>
                        <p>{{ $b['desc'] }}</p>
                        <div class="brochure-footer">
                            <span><i class="fas fa-calendar-alt"></i> {{ $b['date'] }}</span>
                            <a href="#" class="brochure-dl-btn">
                                <i class="fas fa-download"></i> PDF
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>

        {{-- ===== ONGLET GALERIE (12 photos) ===== --}}
        <div class="tab-content" id="tab-galerie">
            <div class="row mb-30">
                <div class="col-lg-12 text-center">
                    <span class="section-tag-gold">Nos Moments Forts</span>
                    <h2 class="projet-section-title">Galerie Photos</h2>
                    <div class="gold-divider center"></div>
                </div>
            </div>
            <div class="row galerie-grid">

                @php
                $photos = [
                    'photo1.avif','photo2.avif','photo3.avif',
                    'photo4.avif',  'photo5.avif',  'blog-thumb-03.jpg',
                    'feature1.jpg',       'feature2.jpg',       'feature3.jpg',
                ];
                @endphp

                @foreach($photos as $index => $photo)
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="galerie-item">
                        <img src="{{ asset('assets/images/' . $photo) }}" alt="Photo {{ $index + 1 }}">
                        <div class="galerie-overlay">
                            <a href="{{ asset('assets/images/' . $photo) }}" class="galerie-zoom">
                                <i class="fas fa-search-plus"></i>
                            </a>
                            <span>Photo {{ $index + 1 }}</span>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>

    </div>
</div>

{{-- ===== CTA ===== --}}
<div class="projet-cta-area">
    <div class="container">
        <div class="projet-cta-inner text-center">
            <i class="fas fa-hand-holding-heart"></i>
            <h2>Soutenez nos projets et changez des vies</h2>
            <p>Chaque don, aussi modeste soit-il, contribue directement à l'autonomisation des femmes et à l'éducation des enfants au Togo.</p>
            <div class="cta-buttons">
                <a href="{{ route('contact') }}" class="btn-donate-primary">
                    <i class="fas fa-heart"></i> Faire un Don
                </a>
                <a href="{{ route('contact') }}" class="btn-donate-secondary">
                    <i class="fas fa-envelope"></i> Nous Contacter
                </a>
            </div>
        </div>
    </div>
</div>



@push('scripts')
<script>
    // Onglets
    const tabBtns = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.tab-content');

    tabBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            tabBtns.forEach(b => b.classList.remove('active'));
            tabContents.forEach(c => c.classList.remove('active'));
            btn.classList.add('active');
            document.getElementById('tab-' + btn.dataset.tab).classList.add('active');
        });
    });
</script>
@endpush

<style>
    /* ============================================
   PROJETS
   ============================================ */

/* ===== INTRO ===== */
.projet-intro-area {
    padding: 80px 0;
    background: #ffffff;
    font-family: 'Poppins', sans-serif;
}

.projet-main-img {
    width: 100%;
    border-radius: 16px;
    box-shadow: 0 10px 40px rgba(0,0,0,0.12);
}

.projet-intro-content {
    padding-left: 40px;
}

.projet-intro-content h2 {
    font-family: 'Poppins', sans-serif;
    font-size: 28px;
    font-weight: 700;
    color: #1a1a2e;
    margin-bottom: 5px;
    line-height: 1.4;
}

.projet-intro-content p {
    color: #666;
    font-size: 14px;
    line-height: 1.9;
    margin-bottom: 15px;
}

.projet-intro-stats {
    display: flex;
    gap: 16px;
    margin-top: 25px;
    flex-wrap: wrap;
}

.pstat {
    flex: 1;
    min-width: 80px;
    background: #f9f6ee;
    border: 1px solid #e8d9a8;
    border-bottom: 3px solid #c9a84c;
    border-radius: 12px;
    padding: 16px 10px;
    text-align: center;
    transition: transform 0.3s;
}

.pstat:hover {
    transform: translateY(-4px);
}

.pstat i {
    color: #c9a84c;
    font-size: 22px;
    margin-bottom: 8px;
    display: block;
}

.pstat h4 {
    font-size: 20px;
    font-weight: 700;
    color: #1a1a2e;
    margin: 0 0 4px;
    font-family: 'Poppins', sans-serif;
}

.pstat span {
    font-size: 11px;
    color: #888;
    font-family: 'Poppins', sans-serif;
}

/* ===== ONGLETS ===== */
.projet-tabs-area {
    padding: 70px 0 80px;
    background: #f9f9f9;
    font-family: 'Poppins', sans-serif;
}

.projet-tabs-nav {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
    justify-content: center;
    margin-bottom: 50px;
}

.tab-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: #ffffff;
    color: #1a1a2e;
    border: 2px solid #e0d8c8;
    padding: 12px 28px;
    border-radius: 30px;
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    font-family: 'Poppins', sans-serif;
    transition: background 0.3s, color 0.3s, border-color 0.3s, transform 0.2s;
}

.tab-btn i {
    font-size: 15px;
}

.tab-btn:hover,
.tab-btn.active {
    background: #1a1a2e;
    color: #c9a84c;
    border-color: #1a1a2e;
    transform: scale(1.03);
}

.tab-content {
    display: none;
}

.tab-content.active {
    display: block;
    animation: fadeInTab 0.4s ease;
}

@keyframes fadeInTab {
    from { opacity: 0; transform: translateY(10px); }
    to   { opacity: 1; transform: translateY(0); }
}

.projet-section-title {
    font-family: 'Poppins', sans-serif;
    font-size: 28px;
    font-weight: 700;
    color: #1a1a2e;
    margin-top: 8px;
}

.mb-30 { margin-bottom: 30px; }

/* ===== VIDÉOS ===== */
.video-card {
    background: #ffffff;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 5px 25px rgba(0,0,0,0.07);
    margin-bottom: 30px;
    border-bottom: 4px solid transparent;
    transition: transform 0.3s, box-shadow 0.3s, border-color 0.3s;
}

.video-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.12);
    border-bottom-color: #c9a84c;
}

.video-card-thumb {
    position: relative;
    padding-bottom: 56.25%;
    height: 0;
    overflow: hidden;
    background: #1a1a2e;
}

.video-card-thumb iframe {
    position: absolute;
    top: 0; left: 0;
    width: 100%;
    height: 100%;
    border: 0;
}

.video-card-body {
    padding: 20px;
}

.video-tag {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    background: rgba(201,168,76,0.12);
    color: #c9a84c;
    font-size: 11px;
    font-weight: 700;
    padding: 4px 12px;
    border-radius: 20px;
    margin-bottom: 10px;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-family: 'Poppins', sans-serif;
}

.video-tag.audio {
    background: rgba(26,26,46,0.08);
    color: #1a1a2e;
}

.video-card-body h4 {
    font-family: 'Poppins', sans-serif;
    font-size: 16px;
    font-weight: 700;
    color: #1a1a2e;
    margin-bottom: 8px;
    line-height: 1.4;
}

.video-card-body p {
    font-size: 13px;
    color: #666;
    line-height: 1.7;
    margin-bottom: 15px;
}

.video-card-footer {
    display: flex;
    gap: 14px;
    border-top: 1px solid #f0e8d0;
    padding-top: 12px;
}

.video-card-footer span {
    font-size: 12px;
    color: #999;
    display: flex;
    align-items: center;
    gap: 5px;
    font-family: 'Poppins', sans-serif;
}

.video-card-footer span i {
    color: #c9a84c;
}

/* ===== ACCORDÉON RAPPORTS ===== */
.rapport-download-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: #1a1a2e;
    color: #c9a84c;
    padding: 10px 22px;
    border-radius: 25px;
    font-size: 13px;
    font-weight: 600;
    text-decoration: none;
    font-family: 'Poppins', sans-serif;
    margin-top: 12px;
    transition: background 0.3s, color 0.3s;
    border: 2px solid #1a1a2e;
}

.rapport-download-btn:hover {
    background: #c9a84c;
    color: #1a1a2e;
    border-color: #c9a84c;
}

/* ===== BROCHURES ===== */
.brochure-card {
    background: #ffffff;
    border-radius: 16px;
    padding: 30px 25px;
    margin-bottom: 25px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.07);
    border-top: 4px solid #c9a84c;
    transition: transform 0.3s, box-shadow 0.3s;
    font-family: 'Poppins', sans-serif;
    text-align: center;
}

.brochure-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.12);
}

.brochure-icon {
    width: 65px;
    height: 65px;
    background: linear-gradient(135deg, #1a1a2e, #2d2d5e);
    border: 2px solid #c9a84c;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 15px;
    transition: background 0.3s;
}

.brochure-card:hover .brochure-icon {
    background: linear-gradient(135deg, #c9a84c, #f0d078);
}

.brochure-icon i {
    color: #c9a84c;
    font-size: 24px;
    transition: color 0.3s;
}

.brochure-card:hover .brochure-icon i {
    color: #1a1a2e;
}

.brochure-tag {
    display: inline-block;
    background: rgba(201,168,76,0.12);
    color: #c9a84c;
    font-size: 10px;
    font-weight: 700;
    padding: 3px 12px;
    border-radius: 20px;
    margin-bottom: 10px;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.brochure-card h4 {
    font-size: 15px;
    font-weight: 700;
    color: #1a1a2e;
    margin-bottom: 10px;
    line-height: 1.4;
}

.brochure-card p {
    font-size: 13px;
    color: #777;
    line-height: 1.7;
    margin-bottom: 18px;
}

.brochure-footer {
    display: flex;
    align-items: center;
    justify-content: space-between;
    border-top: 1px solid #f0e8d0;
    padding-top: 14px;
}

.brochure-footer span {
    font-size: 12px;
    color: #999;
    display: flex;
    align-items: center;
    gap: 5px;
}

.brochure-footer span i {
    color: #c9a84c;
}

.brochure-dl-btn {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: #1a1a2e;
    color: #c9a84c;
    padding: 7px 16px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
    text-decoration: none;
    transition: background 0.3s, color 0.3s;
}

.brochure-dl-btn:hover {
    background: #c9a84c;
    color: #1a1a2e;
}

/* ===== GALERIE 12 PHOTOS ===== */
.galerie-grid {
    gap: 0;
}

.galerie-item {
    position: relative;
    overflow: hidden;
    height: 200px;
    cursor: pointer;
}

.galerie-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s;
}

.galerie-overlay {
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background: rgba(26,26,46,0.75);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 8px;
    opacity: 0;
    transition: opacity 0.3s;
}

.galerie-item:hover img {
    transform: scale(1.08);
}

.galerie-item:hover .galerie-overlay {
    opacity: 1;
}

.galerie-zoom {
    width: 50px;
    height: 50px;
    background: #c9a84c;
    color: #1a1a2e;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    text-decoration: none;
    transition: transform 0.2s;
}

.galerie-zoom:hover {
    transform: scale(1.1);
    color: #1a1a2e;
}

.galerie-overlay span {
    color: #ffffff;
    font-size: 12px;
    font-family: 'Poppins', sans-serif;
    font-weight: 500;
}

/* ===== CTA PROJET ===== */
.projet-cta-area {
    background: linear-gradient(135deg, #1a1a2e 0%, #2d2d5e 100%);
    padding: 70px 0;
    font-family: 'Poppins', sans-serif;
}

.projet-cta-inner {
    max-width: 650px;
    margin: 0 auto;
}

.projet-cta-inner > i {
    font-size: 48px;
    color: #c9a84c;
    margin-bottom: 20px;
    display: block;
}

.projet-cta-inner h2 {
    color: #ffffff;
    font-size: 26px;
    font-weight: 700;
    margin-bottom: 12px;
    font-family: 'Poppins', sans-serif;
    line-height: 1.4;
}

.projet-cta-inner p {
    color: #a0a8c0;
    font-size: 15px;
    margin-bottom: 28px;
}

/* ===== RESPONSIVE ===== */
@media (max-width: 992px) {
    .projet-intro-content { padding-left: 0; margin-top: 30px; }
    .projet-tabs-nav { gap: 8px; }
    .tab-btn { padding: 10px 18px; font-size: 13px; }
    .galerie-item { height: 160px; }
}

@media (max-width: 576px) {
    .projet-intro-stats { gap: 10px; }
    .galerie-item { height: 130px; }
    .tab-btn { padding: 9px 14px; font-size: 12px; }
}
</style>
