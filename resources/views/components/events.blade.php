{{-- ===== BREADCRUMB ===== --}}
<div class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="brpt">
                    <h2>Événements</h2>
                </div>
                <div class="breadcumb-inner">
                    <ul>
                        <li><a href="{{ route('accueil') }}">Accueil</a></li>
                        <li><i class="fas fa-angle-right"></i></li>
                        <li>Événements</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- ===== ÉVÉNEMENTS LISTE ===== --}}
<div class="hunger_event_area">
    <div class="container">
        <div class="row mb-40">
            <div class="col-lg-12 text-center">
                <span class="section-tag-gold">Ce qui se passe</span>
                <h2 class="event-section-title">Événements à Venir</h2>
                <div class="gold-divider center"></div>
            </div>
        </div>

        <div class="event_active event_style_adn_3">

            {{-- EVENT 01 --}}
            <div class="event-list-card">
                <div class="event-list-img">
                    <a href="#">
                        <img src="{{ asset('assets/images/2.jpg') }}" alt="Événement 1">
                    </a>
                    <div class="event-list-date">
                        <i class="fas fa-calendar-alt"></i>
                        <span>19 Août 2024</span>
                    </div>
                </div>
                <div class="event-list-body">
                    <div class="event-list-meta">
                        <span><i class="fas fa-clock"></i> 10h - 17h</span>
                        <span><i class="fas fa-map-marker-alt"></i> Lomé, Togo</span>
                        <span><i class="fas fa-calendar-alt"></i> 19 Août 2024</span>
                    </div>
                    <h2><a href="#">Surmonter les défis des organisations à but non lucratif</a></h2>
                    <p>Rejoignez-nous pour une journée dédiée à l'échange de bonnes pratiques et à l'autonomisation des femmes dans les communautés togolaises.</p>
                    <a href="#" class="event-list-btn">
                        Voir les Détails <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            {{-- EVENT 02 --}}
            <div class="event-list-card">
                <div class="event-list-img">
                    <a href="#">
                        <img src="{{ asset('assets/images/14.jpg') }}" alt="Événement 2">
                    </a>
                    <div class="event-list-date">
                        <i class="fas fa-calendar-alt"></i>
                        <span>25 Sept. 2024</span>
                    </div>
                </div>
                <div class="event-list-body">
                    <div class="event-list-meta">
                        <span><i class="fas fa-clock"></i> 9h - 16h</span>
                        <span><i class="fas fa-map-marker-alt"></i> Lomé, Togo</span>
                        <span><i class="fas fa-calendar-alt"></i> 25 Sept. 2024</span>
                    </div>
                    <h2><a href="#">Idées d'événements pour collecter des fonds pour votre cause</a></h2>
                    <p>Une soirée de collecte de fonds au profit des couturières et des enfants orphelins pris en charge par Francis + Benedict.</p>
                    <a href="#" class="event-list-btn">
                        Voir les Détails <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            {{-- EVENT 03 --}}
            <div class="event-list-card">
                <div class="event-list-img">
                    <a href="#">
                        <img src="{{ asset('assets/images/feature1.jpg') }}" alt="Événement 3">
                    </a>
                    <div class="event-list-date">
                        <i class="fas fa-calendar-alt"></i>
                        <span>10 Oct. 2024</span>
                    </div>
                </div>
                <div class="event-list-body">
                    <div class="event-list-meta">
                        <span><i class="fas fa-clock"></i> 8h - 14h</span>
                        <span><i class="fas fa-map-marker-alt"></i> Lomé, Togo</span>
                        <span><i class="fas fa-calendar-alt"></i> 10 Oct. 2024</span>
                    </div>
                    <h2><a href="#">Cinq questions sur les associations que vous devriez connaître</a></h2>
                    <p>Une conférence ouverte au public pour mieux comprendre le fonctionnement des ONG et leur impact sur les communautés locales.</p>
                    <a href="#" class="event-list-btn">
                        Voir les Détails <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

{{-- ===== ÉVÉNEMENTS GRILLE ===== --}}
<div class="hunger_event2_area">
    <div class="container">
        <div class="row mb-40">
            <div class="col-lg-12 text-center">
                <span class="section-tag-gold">Galerie des Événements</span>
                <h2 class="event-section-title">Événements Passés</h2>
                <div class="gold-divider center"></div>
            </div>
        </div>
        <div class="row">

            {{-- GRID 01 --}}
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="event-grid-card">
                    <div class="event-grid-img">
                        <img src="{{ asset('assets/images/2.jpg') }}" alt="">
                        <div class="event-grid-overlay">
                            <a href="#"><i class="fas fa-link"></i></a>
                        </div>
                        <div class="event-grid-date">
                            <span class="day">19</span>
                            <span class="month">Août</span>
                            <span class="year">2024</span>
                        </div>
                    </div>
                    <div class="event-grid-body">
                        <div class="event-grid-meta">
                            <span><i class="fas fa-clock"></i> 10h - 17h</span>
                            <span><i class="fas fa-map-marker-alt"></i> Lomé, Togo</span>
                        </div>
                        <h3><a href="#">Idées d'événements pour collecter des fonds</a></h3>
                        <p>Rencontre des partenaires et bénévoles autour de la mission Francis + Benedict.</p>
                    </div>
                </div>
            </div>

            {{-- GRID 02 --}}
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="event-grid-card">
                    <div class="event-grid-img">
                        <img src="{{ asset('assets/images/14.jpg') }}" alt="">
                        <div class="event-grid-overlay">
                            <a href="#"><i class="fas fa-link"></i></a>
                        </div>
                        <div class="event-grid-date">
                            <span class="day">25</span>
                            <span class="month">Sept.</span>
                            <span class="year">2024</span>
                        </div>
                    </div>
                    <div class="event-grid-body">
                        <div class="event-grid-meta">
                            <span><i class="fas fa-clock"></i> 9h - 16h</span>
                            <span><i class="fas fa-map-marker-alt"></i> Lomé, Togo</span>
                        </div>
                        <h3><a href="#">Questions sur les associations à but non lucratif</a></h3>
                        <p>Atelier de formation destiné aux leaders communautaires de Lomé.</p>
                    </div>
                </div>
            </div>

            {{-- GRID 03 --}}
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="event-grid-card">
                    <div class="event-grid-img">
                        <img src="{{ asset('assets/images/feature1.jpg') }}" alt="">
                        <div class="event-grid-overlay">
                            <a href="#"><i class="fas fa-link"></i></a>
                        </div>
                        <div class="event-grid-date">
                            <span class="day">10</span>
                            <span class="month">Oct.</span>
                            <span class="year">2024</span>
                        </div>
                    </div>
                    <div class="event-grid-body">
                        <div class="event-grid-meta">
                            <span><i class="fas fa-clock"></i> 8h - 14h</span>
                            <span><i class="fas fa-map-marker-alt"></i> Lomé, Togo</span>
                        </div>
                        <h3><a href="#">Surmonter les défis des organisations</a></h3>
                        <p>Conférence publique sur l'impact des ONG dans les communautés vulnérables.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

{{-- ===== CTA ===== --}}
<div class="event-cta-area">
    <div class="container">
        <div class="event-cta-inner text-center">
            <i class="fas fa-calendar-plus"></i>
            <h2>Vous souhaitez participer à nos prochains événements ?</h2>
            <p>Inscrivez-vous et restez informé de toutes nos activités au Togo et à l'international.</p>
            <a href="{{ route('contact') }}" class="btn-donate-primary">
                <i class="fas fa-envelope"></i> Nous Contacter
            </a>
        </div>
    </div>
</div>

<style>
    /* ===== ÉVÉNEMENTS - TITRE ===== */
.event-section-title {
    font-family: 'Poppins', sans-serif;
    font-size: 30px;
    font-weight: 700;
    color: #1a1a2e;
    margin-top: 8px;
}

/* ===== ÉVÉNEMENTS LISTE ===== */
.hunger_event_area {
    padding: 80px 0 60px;
    background: #ffffff;
    font-family: 'Poppins', sans-serif;
}

.event-list-card {
    display: flex;
    gap: 0;
    background: #fff;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 5px 25px rgba(0,0,0,0.08);
    margin-bottom: 30px;
    border: 1px solid #f0e8d0;
    transition: transform 0.3s, box-shadow 0.3s;
}

.event-list-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.12);
    border-color: #c9a84c;
}

.event-list-img {
    position: relative;
    width: 280px;
    flex-shrink: 0;
    overflow: hidden;
}

.event-list-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s;
}

.event-list-card:hover .event-list-img img {
    transform: scale(1.05);
}

.event-list-date {
    position: absolute;
    bottom: 15px;
    left: 15px;
    background: linear-gradient(135deg, #1a1a2e, #2d2d5e);
    border: 1px solid #c9a84c;
    color: #c9a84c;
    padding: 8px 14px;
    border-radius: 8px;
    font-size: 12px;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 6px;
    font-family: 'Poppins', sans-serif;
}

.event-list-body {
    padding: 30px;
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.event-list-meta {
    display: flex;
    gap: 16px;
    flex-wrap: wrap;
    margin-bottom: 12px;
}

.event-list-meta span {
    font-size: 13px;
    color: #888;
    display: flex;
    align-items: center;
    gap: 6px;
    font-family: 'Poppins', sans-serif;
}

.event-list-meta span i {
    color: #c9a84c;
}

.event-list-body h2 {
    font-family: 'Poppins', sans-serif;
    font-size: 18px;
    font-weight: 700;
    color: #1a1a2e;
    margin-bottom: 10px;
    line-height: 1.4;
}

.event-list-body h2 a {
    color: #1a1a2e;
    text-decoration: none;
    transition: color 0.3s;
}

.event-list-body h2 a:hover {
    color: #c9a84c;
}

.event-list-body p {
    font-size: 14px;
    color: #666;
    line-height: 1.7;
    margin-bottom: 20px;
}

.event-list-btn {
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
    border: 2px solid #1a1a2e;
    font-family: 'Poppins', sans-serif;
    transition: background 0.3s, color 0.3s;
    align-self: flex-start;
}

.event-list-btn:hover {
    background: #c9a84c;
    color: #1a1a2e;
    border-color: #c9a84c;
}

/* ===== ÉVÉNEMENTS GRILLE ===== */
.hunger_event2_area {
    padding: 70px 0 80px;
    background: #f9f9f9;
    font-family: 'Poppins', sans-serif;
}

.event-grid-card {
    background: #ffffff;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 5px 25px rgba(0,0,0,0.07);
    margin-bottom: 30px;
    transition: transform 0.3s, box-shadow 0.3s;
    border-bottom: 4px solid transparent;
}

.event-grid-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.12);
    border-bottom-color: #c9a84c;
}

.event-grid-img {
    position: relative;
    overflow: hidden;
}

.event-grid-img img {
    width: 100%;
    height: 220px;
    object-fit: cover;
    transition: transform 0.4s;
}

.event-grid-card:hover .event-grid-img img {
    transform: scale(1.06);
}

.event-grid-overlay {
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

.event-grid-card:hover .event-grid-overlay {
    opacity: 1;
}

.event-grid-overlay a {
    width: 48px;
    height: 48px;
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

.event-grid-overlay a:hover {
    transform: scale(1.1);
}

.event-grid-date {
    position: absolute;
    top: 15px;
    right: 15px;
    background: linear-gradient(135deg, #1a1a2e, #2d2d5e);
    border: 2px solid #c9a84c;
    border-radius: 10px;
    padding: 10px 14px;
    text-align: center;
    display: flex;
    flex-direction: column;
    gap: 1px;
}

.event-grid-date .day {
    font-size: 22px;
    font-weight: 700;
    color: #c9a84c;
    line-height: 1;
    font-family: 'Poppins', sans-serif;
}

.event-grid-date .month {
    font-size: 12px;
    color: #ffffff;
    font-weight: 500;
    font-family: 'Poppins', sans-serif;
}

.event-grid-date .year {
    font-size: 11px;
    color: #a0a8c0;
    font-family: 'Poppins', sans-serif;
}

.event-grid-body {
    padding: 22px;
}

.event-grid-meta {
    display: flex;
    gap: 14px;
    flex-wrap: wrap;
    margin-bottom: 10px;
}

.event-grid-meta span {
    font-size: 12px;
    color: #888;
    display: flex;
    align-items: center;
    gap: 5px;
    font-family: 'Poppins', sans-serif;
}

.event-grid-meta span i {
    color: #c9a84c;
}

.event-grid-body h3 {
    font-family: 'Poppins', sans-serif;
    font-size: 16px;
    font-weight: 700;
    color: #1a1a2e;
    margin-bottom: 8px;
    line-height: 1.4;
}

.event-grid-body h3 a {
    color: #1a1a2e;
    text-decoration: none;
    transition: color 0.3s;
}

.event-grid-body h3 a:hover {
    color: #c9a84c;
}

.event-grid-body p {
    font-size: 13px;
    color: #777;
    line-height: 1.7;
    margin: 0;
}

/* ===== CTA ÉVÉNEMENTS ===== */
.event-cta-area {
    background: linear-gradient(135deg, #1a1a2e 0%, #2d2d5e 100%);
    padding: 70px 0;
    font-family: 'Poppins', sans-serif;
}

.event-cta-inner {
    max-width: 650px;
    margin: 0 auto;
}

.event-cta-inner > i {
    font-size: 48px;
    color: #c9a84c;
    margin-bottom: 20px;
    display: block;
}

.event-cta-inner h2 {
    color: #ffffff;
    font-size: 26px;
    font-weight: 700;
    margin-bottom: 12px;
    font-family: 'Poppins', sans-serif;
    line-height: 1.4;
}

.event-cta-inner p {
    color: #a0a8c0;
    font-size: 15px;
    margin-bottom: 28px;
    line-height: 1.7;
}

/* ===== RESPONSIVE ===== */
@media (max-width: 768px) {
    .event-list-card {
        flex-direction: column;
    }
    .event-list-img {
        width: 100%;
        height: 220px;
    }
    .event-list-meta {
        gap: 10px;
    }
}
</style>
