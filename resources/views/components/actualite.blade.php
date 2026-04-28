{{-- ===== BREADCRUMB ===== --}}
<div class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="brpt">
                    <h2>Actualités</h2>
                </div>
                <div class="breadcumb-inner">
                    <ul>
                        <li><a href="{{ route('accueil') }}">Accueil</a></li>
                        <li><i class="fas fa-angle-right"></i></li>
                        <li>Actualités</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- ===== CONTENU PRINCIPAL ===== --}}
<div class="actu-area">
    <div class="container">
        <div class="row">

            {{-- ===== SIDEBAR GAUCHE ===== --}}
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="actu-sidebar">

                    {{-- RECHERCHE --}}
                    <div class="sidebar-widget">
                        <h4 class="sidebar-widget-title">
                            <i class="fas fa-search"></i> Rechercher
                        </h4>
                        <form action="#" class="sidebar-search-form">
                            <input type="text" name="s" placeholder="Rechercher un article...">
                            <button type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </form>
                    </div>

                    {{-- CATÉGORIES --}}
                    <div class="sidebar-widget">
                        <h4 class="sidebar-widget-title">
                            <i class="fas fa-tags"></i> Catégories
                        </h4>
                        <ul class="sidebar-cat-list">
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-right"></i> Articles
                                    <span>12</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-right"></i> Communiqués
                                    <span>8</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-right"></i> Newsletters
                                    <span>5</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-right"></i> Témoignages
                                    <span>9</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-right"></i> Impact Terrain
                                    <span>6</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    {{-- ARTICLES RÉCENTS --}}
                    <div class="sidebar-widget">
                        <h4 class="sidebar-widget-title">
                            <i class="fas fa-newspaper"></i> Articles Récents
                        </h4>
                        <div class="sidebar-recent-posts">
                            <div class="recent-post-item">
                                <div class="recent-post-img">
                                    <a href="#">
                                        <img src="{{ asset('assets/images/photo1.avif') }}" alt="">
                                    </a>
                                </div>
                                <div class="recent-post-info">
                                    <h5><a href="#">La vérité sur les associations à but non lucratif au Togo</a></h5>
                                    <span><i class="fas fa-calendar-alt"></i> 18 Août 2024</span>
                                </div>
                            </div>
                            <div class="recent-post-item">
                                <div class="recent-post-img">
                                    <a href="#">
                                        <img src="{{ asset('assets/images/photo2.avif') }}" alt="">
                                    </a>
                                </div>
                                <div class="recent-post-info">
                                    <h5><a href="#">5 choses que vous ne pouvez pas apprendre des livres</a></h5>
                                    <span><i class="fas fa-calendar-alt"></i> 15 Août 2024</span>
                                </div>
                            </div>
                            <div class="recent-post-item">
                                <div class="recent-post-img">
                                    <a href="#">
                                        <img src="{{ asset('assets/images/photo3.avif') }}" alt="">
                                    </a>
                                </div>
                                <div class="recent-post-info">
                                    <h5><a href="#">L'avenir des ONG dans les 50 prochaines années</a></h5>
                                    <span><i class="fas fa-calendar-alt"></i> 10 Août 2024</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- ARCHIVES --}}
                    <div class="sidebar-widget">
                        <h4 class="sidebar-widget-title">
                            <i class="fas fa-archive"></i> Archives
                        </h4>
                        <ul class="sidebar-cat-list">
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-right"></i> Mars 2024
                                    <span>4</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-right"></i> Avril 2024
                                    <span>6</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-right"></i> Août 2024
                                    <span>9</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    {{-- NEWSLETTER --}}
                    <div class="sidebar-widget sidebar-newsletter">
                        <div class="newsletter-icon">
                            <i class="fas fa-envelope-open-text"></i>
                        </div>
                        <h4>Restez Informé</h4>
                        <p>Abonnez-vous à notre newsletter et recevez nos actualités directement dans votre boîte mail.</p>
                        <form action="#" class="newsletter-form">
                            <input type="email" placeholder="Votre email...">
                            <button type="submit">
                                S'abonner <i class="fas fa-paper-plane"></i>
                            </button>
                        </form>
                    </div>

                </div>
            </div>

            {{-- ===== ARTICLES PRINCIPAUX ===== --}}
            <div class="col-lg-8 col-md-12 col-sm-12">

                {{-- ARTICLE 1 — IMAGE --}}
                <div class="actu-post-card">
                    <div class="actu-post-badge article">
                        <i class="fas fa-newspaper"></i> Article
                    </div>
                    <div class="actu-post-img">
                        <a href="#">
                            <img src="{{ asset('assets/images/photo1.avif') }}" alt="">
                        </a>
                    </div>
                    <div class="actu-post-body">
                        <div class="actu-post-meta">
                            <span><i class="fas fa-calendar-alt"></i> 18 Août 2024</span>
                            <span><i class="fas fa-user"></i> Francis & Benedict</span>
                            <span><i class="fas fa-comment"></i> 0 Commentaires</span>
                        </div>
                        <h2><a href="#">La vérité sur les associations à but non lucratif — ce que personne ne vous dit</a></h2>
                        <p>Nos bureaux sont au cœur de l'action au Togo. Chaque jour, nous travaillons à autonomiser les femmes et à améliorer les conditions de vie des enfants dans les communautés les plus vulnérables d'Afrique de l'Ouest.</p>
                        <a href="#" class="actu-read-more">
                            Lire la Suite <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                {{-- ARTICLE 2 — VIDÉO --}}
                <div class="actu-post-card">
                    <div class="actu-post-badge video">
                        <i class="fas fa-video"></i> Vidéo
                    </div>
                    <div class="actu-post-video">
                        <iframe
                            allowfullscreen=""
                            title="Vidéo Francis Benedict"
                            src="https://www.youtube.com/embed/XHOmBV4js_E?controls=1&rel=0&modestbranding=1">
                        </iframe>
                    </div>
                    <div class="actu-post-body">
                        <div class="actu-post-meta">
                            <span><i class="fas fa-calendar-alt"></i> 15 Août 2024</span>
                            <span><i class="fas fa-user"></i> Francis & Benedict</span>
                            <span><i class="fas fa-comment"></i> 0 Commentaires</span>
                        </div>
                        <h2><a href="#">5 choses sur les ONG que vous ne pouvez pas apprendre des livres</a></h2>
                        <p>Découvrez en vidéo notre impact sur le terrain au Togo. Des témoignages de couturières, de leaders communautaires et d'enfants bénéficiaires de nos programmes d'éducation.</p>
                        <a href="#" class="actu-read-more">
                            Lire la Suite <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                {{-- ARTICLE 3 — CITATION --}}
                <div class="actu-post-card">
                    <div class="actu-post-badge communique">
                        <i class="fas fa-bullhorn"></i> Communiqué
                    </div>
                    <div class="actu-post-body">
                        <div class="actu-post-meta">
                            <span><i class="fas fa-calendar-alt"></i> 10 Août 2024</span>
                            <span><i class="fas fa-user"></i> Francis & Benedict</span>
                        </div>
                        <h2><a href="#">L'avenir des ONG dans les 50 prochaines années au Togo</a></h2>
                        <blockquote class="actu-blockquote">
                            <i class="fas fa-quote-left"></i>
                            <p>« Nous ne voyons pas seulement des vies changer aujourd'hui — nous plantons des graines pour des générations futures. Chaque femme autonomisée, chaque enfant éduqué est une victoire pour tout le Togo. »</p>
                            <cite>— Francis Avoyi, Co-fondateur</cite>
                        </blockquote>
                        <a href="#" class="actu-read-more">
                            Lire la Suite <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                {{-- ARTICLE 4 — GALERIE --}}
                <div class="actu-post-card">
                    <div class="actu-post-badge newsletter">
                        <i class="fas fa-images"></i> Galerie
                    </div>
                    <div class="actu-post-gallery">
                        @foreach(['photo1.avif','hunger-blog-11.jpg','photo2.avif','photo3.avif'] as $img)
                        <div class="gallery-thumb">
                            <img src="{{ asset('assets/images/' . $img) }}" alt="">
                            <div class="gallery-thumb-overlay">
                                <i class="fas fa-expand"></i>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="actu-post-body">
                        <div class="actu-post-meta">
                            <span><i class="fas fa-calendar-alt"></i> 5 Août 2024</span>
                            <span><i class="fas fa-user"></i> Francis & Benedict</span>
                            <span><i class="fas fa-comment"></i> 0 Commentaires</span>
                        </div>
                        <h2><a href="#">7 secrets sur les associations qui n'ont jamais été révélés depuis 50 ans</a></h2>
                        <p>Un regard en images sur nos actions de terrain : formation des couturières, distribution de repas, accompagnement des orphelins et activités communautaires à Lomé.</p>
                        <a href="#" class="actu-read-more">
                            Lire la Suite <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                {{-- PAGINATION --}}
                <div class="actu-pagination">
                    <ul>
                        <li><a href="#" class="active">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li>
                            <a href="#">
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>

<style>
    /* ============================================
   ACTUALITÉS
   ============================================ */

.actu-area {
    padding: 80px 0;
    background: #f9f9f9;
    font-family: 'Poppins', sans-serif;
}

/* ===== SIDEBAR ===== */
.actu-sidebar {
    display: flex;
    flex-direction: column;
    gap: 25px;
}

.sidebar-widget {
    background: #ffffff;
    border-radius: 14px;
    padding: 25px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.06);
    border-top: 4px solid #c9a84c;
}

.sidebar-widget-title {
    font-family: 'Poppins', sans-serif;
    font-size: 15px;
    font-weight: 700;
    color: #1a1a2e;
    margin-bottom: 18px;
    display: flex;
    align-items: center;
    gap: 8px;
}

.sidebar-widget-title i {
    color: #c9a84c;
}

/* Recherche */
.sidebar-search-form {
    display: flex;
    border: 1.5px solid #e0e0e0;
    border-radius: 8px;
    overflow: hidden;
}

.sidebar-search-form input {
    flex: 1;
    padding: 10px 14px;
    border: none;
    outline: none;
    font-size: 13px;
    font-family: 'Poppins', sans-serif;
    color: #333;
    background: #fafafa;
}

.sidebar-search-form button {
    background: #1a1a2e;
    color: #c9a84c;
    border: none;
    padding: 10px 16px;
    cursor: pointer;
    transition: background 0.3s;
}

.sidebar-search-form button:hover {
    background: #c9a84c;
    color: #1a1a2e;
}

/* Catégories */
.sidebar-cat-list {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-direction: column;
    gap: 8px;
}

.sidebar-cat-list li a {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 9px 14px;
    background: #f9f6ee;
    border-radius: 8px;
    color: #333;
    font-size: 13px;
    text-decoration: none;
    font-family: 'Poppins', sans-serif;
    transition: background 0.3s, color 0.3s, padding-left 0.3s;
    border-left: 3px solid transparent;
}

.sidebar-cat-list li a:hover {
    background: #f0e8d0;
    color: #1a1a2e;
    padding-left: 18px;
    border-left-color: #c9a84c;
}

.sidebar-cat-list li a i {
    color: #c9a84c;
    font-size: 12px;
}

.sidebar-cat-list li a span {
    background: #1a1a2e;
    color: #c9a84c;
    padding: 2px 8px;
    border-radius: 12px;
    font-size: 11px;
    font-weight: 600;
}

/* Articles récents */
.sidebar-recent-posts {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.recent-post-item {
    display: flex;
    gap: 12px;
    align-items: flex-start;
}

.recent-post-img {
    width: 70px;
    height: 60px;
    flex-shrink: 0;
    border-radius: 8px;
    overflow: hidden;
    border: 2px solid #f0e8d0;
}

.recent-post-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s;
}

.recent-post-item:hover .recent-post-img img {
    transform: scale(1.05);
}

.recent-post-info h5 {
    font-size: 13px;
    font-weight: 600;
    color: #1a1a2e;
    line-height: 1.4;
    margin-bottom: 5px;
    font-family: 'Poppins', sans-serif;
}

.recent-post-info h5 a {
    color: #1a1a2e;
    text-decoration: none;
    transition: color 0.3s;
}

.recent-post-info h5 a:hover {
    color: #c9a84c;
}

.recent-post-info span {
    font-size: 11px;
    color: #999;
    display: flex;
    align-items: center;
    gap: 5px;
}

.recent-post-info span i {
    color: #c9a84c;
}

/* Newsletter sidebar */
.sidebar-newsletter {
    background: linear-gradient(135deg, #1a1a2e, #2d2d5e) !important;
    border-top-color: #c9a84c !important;
    text-align: center;
}

.newsletter-icon {
    width: 60px;
    height: 60px;
    background: rgba(201,168,76,0.15);
    border: 2px solid #c9a84c;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 15px;
}

.newsletter-icon i {
    color: #c9a84c;
    font-size: 22px;
}

.sidebar-newsletter h4 {
    color: #ffffff;
    font-size: 16px;
    font-weight: 700;
    margin-bottom: 8px;
    font-family: 'Poppins', sans-serif;
}

.sidebar-newsletter p {
    color: #a0a8c0;
    font-size: 13px;
    line-height: 1.7;
    margin-bottom: 18px;
}

.newsletter-form {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.newsletter-form input {
    padding: 11px 16px;
    border: 1.5px solid rgba(201,168,76,0.3);
    border-radius: 8px;
    background: rgba(255,255,255,0.07);
    color: #fff;
    font-size: 13px;
    font-family: 'Poppins', sans-serif;
    outline: none;
    transition: border-color 0.3s;
}

.newsletter-form input::placeholder {
    color: #a0a8c0;
}

.newsletter-form input:focus {
    border-color: #c9a84c;
}

.newsletter-form button {
    background: #c9a84c;
    color: #1a1a2e;
    border: none;
    padding: 11px 20px;
    border-radius: 8px;
    font-size: 13px;
    font-weight: 700;
    cursor: pointer;
    font-family: 'Poppins', sans-serif;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    transition: background 0.3s, transform 0.2s;
}

.newsletter-form button:hover {
    background: #f0d078;
    transform: scale(1.03);
}

/* ===== ARTICLES ===== */
.actu-post-card {
    background: #ffffff;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 5px 25px rgba(0,0,0,0.07);
    margin-bottom: 30px;
    position: relative;
    border-bottom: 4px solid transparent;
    transition: transform 0.3s, box-shadow 0.3s, border-color 0.3s;
}

.actu-post-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.1);
    border-bottom-color: #c9a84c;
}

/* Badges types */
.actu-post-badge {
    position: absolute;
    top: 15px;
    left: 15px;
    z-index: 2;
    padding: 5px 14px;
    border-radius: 20px;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
    display: flex;
    align-items: center;
    gap: 6px;
    font-family: 'Poppins', sans-serif;
}

.actu-post-badge.article    { background: #1a1a2e; color: #c9a84c; }
.actu-post-badge.video      { background: #e84545; color: #ffffff; }
.actu-post-badge.communique { background: #c9a84c; color: #1a1a2e; }
.actu-post-badge.newsletter { background: #27ae60; color: #ffffff; }

/* Image */
.actu-post-img {
    overflow: hidden;
    height: 280px;
}

.actu-post-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s;
}

.actu-post-card:hover .actu-post-img img {
    transform: scale(1.04);
}

/* Vidéo */
.actu-post-video {
    position: relative;
    padding-bottom: 56.25%;
    height: 0;
    overflow: hidden;
}

.actu-post-video iframe {
    position: absolute;
    top: 0; left: 0;
    width: 100%;
    height: 100%;
    border: 0;
}

/* Galerie */
.actu-post-gallery {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 4px;
}

.gallery-thumb {
    position: relative;
    overflow: hidden;
    height: 130px;
}

.gallery-thumb img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s;
}

.gallery-thumb-overlay {
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background: rgba(26,26,46,0.6);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s;
}

.gallery-thumb:hover img {
    transform: scale(1.06);
}

.gallery-thumb:hover .gallery-thumb-overlay {
    opacity: 1;
}

.gallery-thumb-overlay i {
    color: #c9a84c;
    font-size: 22px;
}

/* Body article */
.actu-post-body {
    padding: 25px;
}

.actu-post-meta {
    display: flex;
    gap: 16px;
    flex-wrap: wrap;
    margin-bottom: 12px;
}

.actu-post-meta span,
.actu-post-meta a {
    font-size: 12px;
    color: #999;
    display: flex;
    align-items: center;
    gap: 5px;
    text-decoration: none;
    font-family: 'Poppins', sans-serif;
    transition: color 0.3s;
}

.actu-post-meta span i,
.actu-post-meta a i {
    color: #c9a84c;
}

.actu-post-body h2 {
    font-family: 'Poppins', sans-serif;
    font-size: 19px;
    font-weight: 700;
    color: #1a1a2e;
    margin-bottom: 12px;
    line-height: 1.4;
}

.actu-post-body h2 a {
    color: #1a1a2e;
    text-decoration: none;
    transition: color 0.3s;
}

.actu-post-body h2 a:hover {
    color: #c9a84c;
}

.actu-post-body p {
    font-size: 14px;
    color: #666;
    line-height: 1.8;
    margin-bottom: 20px;
}

/* Blockquote */
.actu-blockquote {
    background: #f9f6ee;
    border-left: 5px solid #c9a84c;
    border-radius: 0 12px 12px 0;
    padding: 20px 25px;
    margin: 15px 0 20px;
    position: relative;
}

.actu-blockquote > i {
    color: #c9a84c;
    font-size: 20px;
    margin-bottom: 10px;
    display: block;
}

.actu-blockquote p {
    font-style: italic;
    color: #444;
    font-size: 15px;
    line-height: 1.7;
    margin-bottom: 10px !important;
}

.actu-blockquote cite {
    font-size: 13px;
    color: #c9a84c;
    font-weight: 700;
    font-style: normal;
}

/* Bouton lire la suite */
.actu-read-more {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: #1a1a2e;
    color: #c9a84c;
    padding: 10px 24px;
    border-radius: 25px;
    font-size: 13px;
    font-weight: 600;
    text-decoration: none;
    font-family: 'Poppins', sans-serif;
    border: 2px solid #1a1a2e;
    transition: background 0.3s, color 0.3s, border-color 0.3s;
}

.actu-read-more:hover {
    background: #c9a84c;
    color: #1a1a2e;
    border-color: #c9a84c;
}

/* ===== PAGINATION ===== */
.actu-pagination {
    margin-top: 10px;
    margin-bottom: 20px;
}

.actu-pagination ul {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    gap: 8px;
}

.actu-pagination ul li a {
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 8px;
    font-size: 14px;
    font-weight: 600;
    color: #1a1a2e;
    text-decoration: none;
    background: #ffffff;
    border: 2px solid #e0d8c8;
    font-family: 'Poppins', sans-serif;
    transition: background 0.3s, color 0.3s, border-color 0.3s;
}

.actu-pagination ul li a:hover,
.actu-pagination ul li a.active {
    background: #1a1a2e;
    color: #c9a84c;
    border-color: #1a1a2e;
}

/* ===== RESPONSIVE ===== */
@media (max-width: 992px) {
    .actu-sidebar {
        margin-top: 40px;
    }
    .actu-post-gallery {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 576px) {
    .actu-post-meta {
        gap: 8px;
    }
    .actu-post-gallery {
        grid-template-columns: repeat(2, 1fr);
    }
    .gallery-thumb {
        height: 100px;
    }
}
</style>


