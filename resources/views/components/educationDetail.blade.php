@extends('layouts.base')

@section('title', 'Journée pour l\'Éducation')

@section('content')

{{-- BREADCRUMB --}}
<div class="breadcumb-area"
     style="background-image: url('{{ asset('assets/images/etude.jpeg') }}');
            background-size: cover; background-position: center; position: relative;">
    <div style="position:absolute;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.55);"></div>
    <div class="container" style="position:relative;z-index:2;">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="brpt"><h2>Journée pour l'Éducation</h2></div>
                <div class="breadcumb-inner">
                    <ul>
                        <li><a href="{{ route('accueil') }}">Accueil</a></li>
                        <li><i class="fas fa-angle-right"></i></li>
                        <li><a href="{{ route('evenement') }}">Événements</a></li>
                        <li><i class="fas fa-angle-right"></i></li>
                        <li>Éducation</li>
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

                    {{-- IMAGE PRINCIPALE --}}
                    <div class="event-detail-img">
                        <img src="{{ asset('assets/images/etude.jpeg') }}" alt="Éducation">
                        <div class="event-detail-badge education">
                            <i class="fas fa-graduation-cap"></i> Éducation
                        </div>
                    </div>

                    {{-- META --}}
                    <div class="event-detail-meta">
                        <span><i class="fas fa-calendar-alt"></i> 15 Novembre 2024</span>
                        <span><i class="fas fa-clock"></i> 8h00 - 15h00</span>
                        <span><i class="fas fa-map-marker-alt"></i> Lomé, Togo</span>
                        <span><i class="fas fa-users"></i> Ouvert au Public</span>
                    </div>

                    {{-- TITRE --}}
                    <h1 class="event-detail-title">
                        Journée pour l'Éducation — Scolarisons chaque enfant du Togo
                    </h1>
                    <div class="gold-divider"></div>

                    {{-- DESCRIPTION --}}
                    <div class="event-detail-content">
                        <p>Une journée dédiée à la sensibilisation sur l'importance de l'éducation pour tous les enfants du Togo. Rejoignez-nous pour une série d'activités enrichissantes : distribution de fournitures scolaires, remise de bourses d'études et témoignages inspirants d'enfants bénéficiaires des programmes Francis + Benedict.</p>

                        <h3>Programme de la Journée</h3>
                        <div class="event-program-list">
                            <div class="program-item">
                                <span class="program-time">08h00</span>
                                <div class="program-info">
                                    <h5>Accueil & Enregistrement</h5>
                                    <p>Accueil des participants et distribution des badges.</p>
                                </div>
                            </div>
                            <div class="program-item">
                                <span class="program-time">09h00</span>
                                <div class="program-info">
                                    <h5>Discours d'Ouverture</h5>
                                    <p>Message d'introduction par Francis & Benedict Avoyi.</p>
                                </div>
                            </div>
                            <div class="program-item">
                                <span class="program-time">10h00</span>
                                <div class="program-info">
                                    <h5>Distribution de Fournitures Scolaires</h5>
                                    <p>Remise de kits scolaires aux enfants inscrits dans nos programmes.</p>
                                </div>
                            </div>
                            <div class="program-item">
                                <span class="program-time">11h30</span>
                                <div class="program-info">
                                    <h5>Témoignages d'Enfants Bénéficiaires</h5>
                                    <p>Des enfants partagent leur parcours et l'impact de l'éducation sur leur vie.</p>
                                </div>
                            </div>
                            <div class="program-item">
                                <span class="program-time">13h00</span>
                                <div class="program-info">
                                    <h5>Déjeuner Communautaire</h5>
                                    <p>Repas partagé entre participants, familles et bénévoles.</p>
                                </div>
                            </div>
                            <div class="program-item">
                                <span class="program-time">14h00</span>
                                <div class="program-info">
                                    <h5>Remise des Bourses d'Études</h5>
                                    <p>Cérémonie officielle de remise des bourses aux meilleurs élèves.</p>
                                </div>
                            </div>
                            <div class="program-item">
                                <span class="program-time">15h00</span>
                                <div class="program-info">
                                    <h5>Clôture</h5>
                                    <p>Mot de clôture et remerciements aux partenaires et donateurs.</p>
                                </div>
                            </div>
                        </div>

                        <h3>Ce que Vous Pouvez Faire</h3>
                        <div class="event-actions-list">
                            <div class="event-action-item">
                                <i class="fas fa-hand-holding-heart"></i>
                                <div>
                                    <h5>Faire un Don</h5>
                                    <p>Chaque don finance les fournitures et bourses pour les enfants défavorisés.</p>
                                </div>
                            </div>
                            <div class="event-action-item">
                                <i class="fas fa-user-plus"></i>
                                <div>
                                    <h5>Devenir Bénévole</h5>
                                    <p>Rejoignez notre équipe de bénévoles pour cette journée mémorable.</p>
                                </div>
                            </div>
                            <div class="event-action-item">
                                <i class="fas fa-share-alt"></i>
                                <div>
                                    <h5>Partager l'Événement</h5>
                                    <p>Parlez de cet événement autour de vous et sur les réseaux sociaux.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- TAGS --}}
                    <div class="event-detail-tags">
                        <span class="etag education"><i class="fas fa-graduation-cap"></i> Éducation</span>
                        <span class="etag"><i class="fas fa-child"></i> Enfants</span>
                        <span class="etag"><i class="fas fa-book"></i> Scolarisation</span>
                        <span class="etag"><i class="fas fa-award"></i> Bourses</span>
                    </div>

                    {{-- PARTAGE --}}
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

                {{-- CARTE INSCRIPTION --}}
                <div class="event-sidebar-card register-card">
                    <div class="register-card-header">
                        <i class="fas fa-calendar-check"></i>
                        <h4>S'inscrire à l'Événement</h4>
                    </div>
                    <div class="register-card-body">
                        <div class="register-info-item">
                            <i class="fas fa-calendar-alt"></i>
                            <div>
                                <span>Date</span>
                                <strong>15 Novembre 2024</strong>
                            </div>
                        </div>
                        <div class="register-info-item">
                            <i class="fas fa-clock"></i>
                            <div>
                                <span>Heure</span>
                                <strong>08h00 - 15h00</strong>
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
                                <span>Entrée</span>
                                <strong>Gratuite & Ouverte à Tous</strong>
                            </div>
                        </div>
                        <a href="{{ route('contact') }}" class="register-btn">
                            <i class="fas fa-paper-plane"></i> S'inscrire Maintenant
                        </a>
                    </div>
                </div>

                {{-- DON --}}
                <div class="event-sidebar-card donate-card">
                    <i class="fas fa-heart"></i>
                    <h4>Soutenez cet Événement</h4>
                    <p>Votre don aide à financer les fournitures et bourses pour les enfants du Togo.</p>
                    <a href="{{ route('contact') }}" class="donate-event-btn">
                        <i class="fas fa-hand-holding-heart"></i> Faire un Don
                    </a>
                </div>

                {{-- AUTRES ÉVÉNEMENTS --}}
                <div class="event-sidebar-card other-events-card">
                    <h4><i class="fas fa-calendar-alt"></i> Autres Événements</h4>
                    <div class="other-event-item">
                        <img src="{{ asset('assets/images/sante.jpeg') }}" alt="Santé">
                        <div>
                            <h6><a href="{{ route('event.sante') }}">Caravane de Santé</a></h6>
                            <span><i class="fas fa-calendar-alt"></i> 2 Déc. 2024</span>
                        </div>
                    </div>
                    <div class="other-event-item">
                        <img src="{{ asset('assets/images/nutition.jpg') }}" alt="Nutrition">
                        <div>
                            <h6><a href="{{ route('event.nutrition') }}">Programme Nutrition</a></h6>
                            <span><i class="fas fa-calendar-alt"></i> 20 Déc. 2024</span>
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
