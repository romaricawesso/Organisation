@extends('layouts.base')

@section('title', 'Programme Nutrition')

@section('content')

{{-- BREADCRUMB --}}
<div class="breadcumb-area"
     style="background-image: url('{{ asset('assets/images/nutition.jpg') }}');
            background-size: cover; background-position: center; position: relative;">
    <div style="position:absolute;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.55);"></div>
    <div class="container" style="position:relative;z-index:2;">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="brpt"><h2>Programme Nutrition</h2></div>
                <div class="breadcumb-inner">
                    <ul>
                        <li><a href="{{ route('accueil') }}">Accueil</a></li>
                        <li><i class="fas fa-angle-right"></i></li>
                        <li><a href="{{ route('evenement') }}">Événements</a></li>
                        <li><i class="fas fa-angle-right"></i></li>
                        <li>Nutrition</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- CONTENU --}}
<div class="event-detail-area">
    <div class="container">
        <div class="row">

            {{-- CONTENU PRINCIPAL --}}
            <div class="col-lg-8 col-md-12">
                <div class="event-detail-card">

                    <div class="event-detail-img">
                        <img src="{{ asset('assets/images/nutition.jpg') }}" alt="Nutrition">
                        <div class="event-detail-badge nutrition">
                            <i class="fas fa-apple-alt"></i> Nutrition
                        </div>
                    </div>

                    <div class="event-detail-meta">
                        <span><i class="fas fa-calendar-alt"></i> 20 Décembre 2024</span>
                        <span><i class="fas fa-clock"></i> 9h00 - 16h00</span>
                        <span><i class="fas fa-map-marker-alt"></i> Lomé, Togo</span>
                        <span><i class="fas fa-users"></i> Familles & Enfants</span>
                    </div>

                    <h1 class="event-detail-title">
                        Programme Nutrition — Lutte contre la Malnutrition Infantile au Togo
                    </h1>
                    <div class="gold-divider"></div>

                    <div class="event-detail-content">
                        <p>La malnutrition infantile reste un défi majeur au Togo. Francis + Benedict organise une journée dédiée à la lutte contre ce fléau à travers la distribution de repas nutritifs, des ateliers pratiques de cuisine saine et la sensibilisation des mères à l'alimentation équilibrée.</p>
                        <p>Cet événement cible particulièrement les enfants de moins de 5 ans dans les zones rurales et péri-urbaines de Lomé, où la prévalence de la malnutrition est la plus élevée.</p>

                        <h3>Programme de la Journée</h3>
                        <div class="event-program-list">
                            <div class="program-item">
                                <span class="program-time">09h00</span>
                                <div class="program-info">
                                    <h5>Accueil des Familles</h5>
                                    <p>Enregistrement et pesée des enfants pour évaluation nutritionnelle.</p>
                                </div>
                            </div>
                            <div class="program-item">
                                <span class="program-time">09h30</span>
                                <div class="program-info">
                                    <h5>Sensibilisation Nutritionnelle</h5>
                                    <p>Présentation des bases d'une alimentation saine et équilibrée pour les enfants.</p>
                                </div>
                            </div>
                            <div class="program-item">
                                <span class="program-time">10h30</span>
                                <div class="program-info">
                                    <h5>Ateliers de Cuisine Saine</h5>
                                    <p>Démonstrations pratiques de recettes nutritives avec des ingrédients locaux abordables.</p>
                                </div>
                            </div>
                            <div class="program-item">
                                <span class="program-time">12h00</span>
                                <div class="program-info">
                                    <h5>Distribution de Repas Nutritifs</h5>
                                    <p>Déjeuner équilibré offert à tous les enfants et familles présents.</p>
                                </div>
                            </div>
                            <div class="program-item">
                                <span class="program-time">13h30</span>
                                <div class="program-info">
                                    <h5>Consultations Nutritionnelles</h5>
                                    <p>Suivi individuel avec des nutritionnistes pour les cas de malnutrition sévère.</p>
                                </div>
                            </div>
                            <div class="program-item">
                                <span class="program-time">14h30</span>
                                <div class="program-info">
                                    <h5>Distribution de Kits Alimentaires</h5>
                                    <p>Remise de paniers alimentaires aux familles les plus vulnérables.</p>
                                </div>
                            </div>
                            <div class="program-item">
                                <span class="program-time">16h00</span>
                                <div class="program-info">
                                    <h5>Clôture & Engagement</h5>
                                    <p>Bilan de la journée et engagement des familles pour une alimentation durable.</p>
                                </div>
                            </div>
                        </div>

                        <h3>Nos Actions Nutrition</h3>
                        <div class="event-actions-list">
                            <div class="event-action-item">
                                <i class="fas fa-utensils"></i>
                                <div>
                                    <h5>Distribution de Repas</h5>
                                    <p>Repas nutritifs distribués aux enfants malnutris et à leurs familles.</p>
                                </div>
                            </div>
                            <div class="event-action-item">
                                <i class="fas fa-chalkboard-teacher"></i>
                                <div>
                                    <h5>Ateliers de Cuisine</h5>
                                    <p>Formation des mères aux techniques de préparation de repas nutritifs et économiques.</p>
                                </div>
                            </div>
                            <div class="event-action-item">
                                <i class="fas fa-box-open"></i>
                                <div>
                                    <h5>Kits Alimentaires</h5>
                                    <p>Distribution de paniers contenant des aliments nutritifs essentiels pour un mois.</p>
                                </div>
                            </div>
                            <div class="event-action-item">
                                <i class="fas fa-chart-line"></i>
                                <div>
                                    <h5>Suivi Nutritionnel</h5>
                                    <p>Évaluation et suivi individualisé des enfants souffrant de malnutrition sévère.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="event-detail-tags">
                        <span class="etag nutrition"><i class="fas fa-apple-alt"></i> Nutrition</span>
                        <span class="etag"><i class="fas fa-utensils"></i> Alimentation</span>
                        <span class="etag"><i class="fas fa-baby"></i> Enfants</span>
                        <span class="etag"><i class="fas fa-box-open"></i> Kits Alimentaires</span>
                    </div>

                    <div class="event-share">
                        <span>Partager :</span>
                        <a href="#" class="share-btn facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="share-btn twitter"><i class="fab fa-x-twitter"></i></a>
                        <a href="#" class="share-btn whatsapp"><i class="fab fa-whatsapp"></i></a>
                        <a href="#" class="share-btn instagram"><i class="fab fa-instagram"></i></a>
                    </div>

                </div>
            </div>

            {{-- SIDEBAR --}}
            <div class="col-lg-4 col-md-12">

                <div class="event-sidebar-card register-card">
                    <div class="register-card-header">
                        <i class="fas fa-calendar-check"></i>
                        <h4>Informations Pratiques</h4>
                    </div>
                    <div class="register-card-body">
                        <div class="register-info-item">
                            <i class="fas fa-calendar-alt"></i>
                            <div>
                                <span>Date</span>
                                <strong>20 Décembre 2024</strong>
                            </div>
                        </div>
                        <div class="register-info-item">
                            <i class="fas fa-clock"></i>
                            <div>
                                <span>Heure</span>
                                <strong>09h00 - 16h00</strong>
                            </div>
                        </div>
                        <div class="register-info-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <span>Lieu</span>
                                <strong>Lomé, Togo</strong>
                            </div>
                        </div>
                        <div class="register-info-item">
                            <i class="fas fa-ticket-alt"></i>
                            <div>
                                <span>Accès</span>
                                <strong>Gratuit pour les Familles</strong>
                            </div>
                        </div>
                        <div class="register-info-item">
                            <i class="fas fa-child"></i>
                            <div>
                                <span>Public Cible</span>
                                <strong>Enfants de 0 à 5 ans & leurs familles</strong>
                            </div>
                        </div>
                        <a href="{{ route('contact') }}" class="register-btn">
                            <i class="fas fa-paper-plane"></i> Nous Contacter
                        </a>
                    </div>
                </div>

                <div class="event-sidebar-card donate-card">
                    <i class="fas fa-heart"></i>
                    <h4>Financez un Repas</h4>
                    <p>Avec seulement <strong style="color:#c9a84c;">5$</strong>, vous offrez un repas nutritif complet à un enfant malnutri au Togo.</p>
                    <a href="{{ route('contact') }}" class="donate-event-btn">
                        <i class="fas fa-hand-holding-heart"></i> Faire un Don
                    </a>
                </div>

                <div class="event-sidebar-card other-events-card">
                    <h4><i class="fas fa-calendar-alt"></i> Autres Événements</h4>
                    <div class="other-event-item">
                        <img src="{{ asset('assets/images/etude.jpeg') }}" alt="Éducation">
                        <div>
                            <h6><a href="{{ route('event.education') }}">Journée pour l'Éducation</a></h6>
                            <span><i class="fas fa-calendar-alt"></i> 15 Nov. 2024</span>
                        </div>
                    </div>
                    <div class="other-event-item">
                        <img src="{{ asset('assets/images/sante.jpeg') }}" alt="Santé">
                        <div>
                            <h6><a href="{{ route('event.sante') }}">Caravane de Santé</a></h6>
                            <span><i class="fas fa-calendar-alt"></i> 2 Déc. 2024</span>
                        </div>
                    </div>
                    <a href="{{ route('evenement') }}" class="voir-tous-btn">
                        Voir tous les événements <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection

<style>
    /* ============================================
    DÉTAIL ÉVÉNEMENT — CSS COMPLET
    ============================================ */

    .event-detail-area {
        padding: 70px 0 80px;
        background: #f9f9f9;
        font-family: 'Poppins', sans-serif;
    }

    /* ===== IMAGE PRINCIPALE ===== */
    .event-detail-img {
        position: relative;
        border-radius: 16px;
        overflow: hidden;
        margin-bottom: 25px;
    }

    .event-detail-img img {
        width: 100%;
        height: 400px;
        object-fit: cover;
    }

    /* ===== BADGE CATÉGORIE ===== */
    .event-detail-badge {
        position: absolute;
        top: 20px;
        left: 20px;
        padding: 7px 18px;
        border-radius: 25px;
        font-size: 13px;
        font-weight: 700;
        font-family: 'Poppins', sans-serif;
        display: flex;
        align-items: center;
        gap: 6px;
        color: #fff;
    }

    .event-detail-badge.education { background: #3498db; }
    .event-detail-badge.sante     { background: #e74c3c; }
    .event-detail-badge.nutrition { background: #27ae60; }
    .event-detail-badge.default   { background: #1a1a2e; color: #c9a84c; }

    /* ===== META INFOS ===== */
    .event-detail-meta {
        display: flex;
        gap: 16px;
        flex-wrap: wrap;
        margin-bottom: 20px;
        padding: 15px 20px;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 3px 15px rgba(0,0,0,0.06);
        border-left: 4px solid #c9a84c;
    }

    .event-detail-meta span {
        display: flex;
        align-items: center;
        gap: 6px;
        font-size: 13px;
        color: #555;
        font-family: 'Poppins', sans-serif;
        font-weight: 500;
    }

    .event-detail-meta span i {
        color: #c9a84c;
    }

    /* ===== TITRE ===== */
    .event-detail-title {
        font-family: 'Poppins', sans-serif;
        font-size: 26px;
        font-weight: 700;
        color: #1a1a2e;
        line-height: 1.4;
        margin-bottom: 10px;
    }

    /* ===== CARTE CONTENU ===== */
    .event-detail-card {
        background: #fff;
        border-radius: 16px;
        padding: 35px;
        box-shadow: 0 5px 25px rgba(0,0,0,0.07);
    }

    .event-detail-content h3 {
        font-family: 'Poppins', sans-serif;
        font-size: 18px;
        font-weight: 700;
        color: #1a1a2e;
        margin: 25px 0 15px;
        padding-bottom: 10px;
        border-bottom: 2px solid #f0e8d0;
    }

    .event-detail-content p {
        color: #666;
        font-size: 14px;
        line-height: 1.9;
        margin-bottom: 15px;
    }

    /* ===== PROGRAMME ===== */
    .event-program-list {
        display: flex;
        flex-direction: column;
        gap: 0;
        margin-bottom: 30px;
        border-left: 3px solid #c9a84c;
        padding-left: 25px;
        position: relative;
    }

    .program-item {
        display: flex;
        gap: 16px;
        align-items: flex-start;
        padding: 15px 0;
        border-bottom: 1px dashed #f0e8d0;
        position: relative;
    }

    .program-item:last-child {
        border-bottom: none;
    }

    .program-item::before {
        content: '';
        position: absolute;
        left: -31px;
        top: 20px;
        width: 12px;
        height: 12px;
        background: #c9a84c;
        border-radius: 50%;
        border: 2px solid #fff;
        box-shadow: 0 0 0 2px #c9a84c;
    }

    .program-time {
        background: #1a1a2e;
        color: #c9a84c;
        padding: 5px 14px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 700;
        white-space: nowrap;
        font-family: 'Poppins', sans-serif;
        flex-shrink: 0;
        height: fit-content;
        margin-top: 3px;
        letter-spacing: 0.5px;
    }

    .program-info h5 {
        font-size: 14px;
        font-weight: 700;
        color: #1a1a2e;
        margin-bottom: 4px;
        font-family: 'Poppins', sans-serif;
    }

    .program-info p {
        font-size: 13px;
        color: #888;
        margin: 0;
        line-height: 1.6;
    }

    /* ===== ACTIONS ===== */
    .event-actions-list {
        display: flex;
        flex-direction: column;
        gap: 12px;
        margin-bottom: 25px;
    }

    .event-action-item {
        display: flex;
        align-items: flex-start;
        gap: 15px;
        background: #f9f6ee;
        border: 1px solid #e8d9a8;
        border-radius: 12px;
        padding: 18px;
        transition: border-color 0.3s, transform 0.3s;
    }

    .event-action-item:hover {
        border-color: #c9a84c;
        transform: translateX(5px);
    }

    .event-action-item > i {
        color: #c9a84c;
        font-size: 22px;
        margin-top: 2px;
        flex-shrink: 0;
        width: 25px;
        text-align: center;
    }

    .event-action-item h5 {
        font-size: 14px;
        font-weight: 700;
        color: #1a1a2e;
        margin-bottom: 4px;
        font-family: 'Poppins', sans-serif;
    }

    .event-action-item p {
        font-size: 13px;
        color: #777;
        margin: 0;
        line-height: 1.6;
    }

    /* ===== TAGS ===== */
    .event-detail-tags {
        display: flex;
        gap: 8px;
        flex-wrap: wrap;
        margin-bottom: 20px;
        padding-top: 20px;
        border-top: 1px solid #f0e8d0;
    }

    /* ===== PARTAGE ===== */
    .event-share {
        display: flex;
        align-items: center;
        gap: 12px;
        padding-top: 20px;
        border-top: 1px solid #f0e8d0;
        flex-wrap: wrap;
    }

    .event-share span {
        font-size: 13px;
        color: #888;
        font-weight: 600;
        font-family: 'Poppins', sans-serif;
    }

    .share-btn {
        width: 38px;
        height: 38px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff !important;
        font-size: 15px;
        text-decoration: none;
        transition: transform 0.3s, opacity 0.3s, box-shadow 0.3s;
    }

    .share-btn:hover {
        transform: translateY(-4px);
        opacity: 0.9;
        box-shadow: 0 6px 15px rgba(0,0,0,0.2);
        color: #fff !important;
    }

    .share-btn.facebook  { background: #1877F2; }
    .share-btn.twitter   { background: #000000; }
    .share-btn.whatsapp  { background: #25D366; }
    .share-btn.instagram { background: linear-gradient(45deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888); }

    /* ===== SIDEBAR ===== */
    .event-sidebar-card {
        background: #fff;
        border-radius: 16px;
        padding: 25px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.07);
        margin-bottom: 25px;
        font-family: 'Poppins', sans-serif;
        border-top: 4px solid #c9a84c;
    }

    /* Carte Inscription */
    .register-card-header {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 22px;
        padding-bottom: 15px;
        border-bottom: 2px solid #f0e8d0;
    }

    .register-card-header i {
        color: #c9a84c;
        font-size: 26px;
    }

    .register-card-header h4 {
        font-size: 16px;
        font-weight: 700;
        color: #1a1a2e;
        margin: 0;
        font-family: 'Poppins', sans-serif;
    }

    .register-info-item {
        display: flex;
        align-items: flex-start;
        gap: 14px;
        margin-bottom: 14px;
        padding-bottom: 14px;
        border-bottom: 1px solid #f9f5ee;
    }

    .register-info-item:last-of-type {
        border-bottom: none;
        margin-bottom: 18px;
    }

    .register-info-item > i {
        color: #c9a84c;
        font-size: 16px;
        margin-top: 3px;
        width: 20px;
        text-align: center;
        flex-shrink: 0;
    }

    .register-info-item span {
        font-size: 11px;
        color: #aaa;
        display: block;
        text-transform: uppercase;
        letter-spacing: 0.8px;
        margin-bottom: 2px;
        font-family: 'Poppins', sans-serif;
    }

    .register-info-item strong {
        font-size: 13px;
        color: #1a1a2e;
        font-weight: 600;
        font-family: 'Poppins', sans-serif;
    }

    .register-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        background: #1a1a2e;
        color: #c9a84c !important;
        padding: 13px 20px;
        border-radius: 10px;
        font-size: 14px;
        font-weight: 700;
        text-decoration: none;
        width: 100%;
        transition: background 0.3s, transform 0.2s, box-shadow 0.3s;
        border: 2px solid #1a1a2e;
        font-family: 'Poppins', sans-serif;
    }

    .register-btn:hover {
        background: #c9a84c;
        color: #1a1a2e !important;
        border-color: #c9a84c;
        transform: scale(1.02);
        box-shadow: 0 5px 20px rgba(201,168,76,0.3);
    }

    /* Carte Don */
    .donate-card {
        background: linear-gradient(135deg, #1a1a2e, #2d2d5e) !important;
        text-align: center;
        border-top-color: #c9a84c !important;
    }

    .donate-card > i {
        font-size: 40px;
        color: #c9a84c;
        margin-bottom: 14px;
        display: block;
        animation: heartbeat 1.5s ease infinite;
    }

    .donate-card h4 {
        color: #fff;
        font-size: 17px;
        font-weight: 700;
        margin-bottom: 10px;
        font-family: 'Poppins', sans-serif;
    }

    .donate-card p {
        color: #a0a8c0;
        font-size: 13px;
        line-height: 1.7;
        margin-bottom: 20px;
    }

    .donate-event-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: linear-gradient(135deg, #c9a84c, #f0d078);
        color: #1a1a2e !important;
        padding: 12px 28px;
        border-radius: 25px;
        font-size: 13px;
        font-weight: 700;
        text-decoration: none;
        transition: opacity 0.3s, transform 0.2s, box-shadow 0.3s;
        font-family: 'Poppins', sans-serif;
    }

    .donate-event-btn:hover {
        opacity: 0.9;
        color: #1a1a2e !important;
        transform: scale(1.05);
        box-shadow: 0 8px 25px rgba(201,168,76,0.35);
    }

    /* Autres événements */
    .other-events-card h4 {
        font-size: 15px;
        font-weight: 700;
        color: #1a1a2e;
        margin-bottom: 18px;
        display: flex;
        align-items: center;
        gap: 8px;
        font-family: 'Poppins', sans-serif;
        padding-bottom: 12px;
        border-bottom: 2px solid #f0e8d0;
    }

    .other-events-card h4 i {
        color: #c9a84c;
    }

    .other-event-item {
        display: flex;
        gap: 14px;
        align-items: center;
        margin-bottom: 16px;
        padding-bottom: 16px;
        border-bottom: 1px solid #f5f5f5;
        transition: transform 0.3s;
    }

    .other-event-item:hover {
        transform: translateX(5px);
    }

    .other-event-item:last-of-type {
        border-bottom: none;
        margin-bottom: 16px;
    }

    .other-event-item img {
        width: 68px;
        height: 58px;
        object-fit: cover;
        border-radius: 10px;
        flex-shrink: 0;
        border: 2px solid #f0e8d0;
    }

    .other-event-item h6 {
        font-size: 13px;
        font-weight: 600;
        margin-bottom: 5px;
        font-family: 'Poppins', sans-serif;
        line-height: 1.4;
    }

    .other-event-item h6 a {
        color: #1a1a2e;
        text-decoration: none;
        transition: color 0.3s;
    }

    .other-event-item h6 a:hover {
        color: #c9a84c;
    }

    .other-event-item span {
        font-size: 11px;
        color: #aaa;
        display: flex;
        align-items: center;
        gap: 5px;
        font-family: 'Poppins', sans-serif;
    }

    .other-event-item span i {
        color: #c9a84c;
        font-size: 10px;
    }

    .voir-tous-btn {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        color: #c9a84c;
        font-size: 13px;
        font-weight: 600;
        text-decoration: none;
        transition: gap 0.3s;
        font-family: 'Poppins', sans-serif;
    }

    .voir-tous-btn:hover {
        gap: 10px;
        color: #c9a84c;
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 992px) {
        .event-detail-card { padding: 25px 20px; }
        .event-detail-title { font-size: 22px; }
        .event-sidebar-card { margin-top: 30px; }
    }

    @media (max-width: 576px) {
        .event-detail-img img { height: 250px; }
        .event-detail-meta { gap: 10px; }
        .program-item { flex-direction: column; gap: 8px; }
        .event-share { gap: 8px; }
    }
</style>
