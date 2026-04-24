<!-- breadcumb-area -->
{{-- ===== BREADCRUMB ===== --}}
<div class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="brpt">
                    <h2>Faire un Don</h2>
                </div>
                <div class="breadcumb-inner">
                    <ul>
                        <li><a href="{{ route('accueil') }}">Accueil</a></li>
                        <li><i class="fas fa-angle-right"></i></li>
                        <li>Don</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- ===== SECTION DON ===== --}}
<div class="hunger_donation_area">
    <div class="container">
        <div class="row align-items-center">

            {{-- GAUCHE : INFOS --}}
            <div class="col-lg-5 col-md-12">
                <div class="donation-info-side">
                    <span class="section-tag-gold">Votre Impact</span>
                    <h2>Chaque don change une vie au Togo</h2>
                    <div class="gold-divider"></div>
                    <p>Votre générosité permet à Francis + Benedict de continuer sa mission d'autonomisation des femmes et d'éducation des enfants dans les communautés les plus vulnérables d'Afrique de l'Ouest.</p>

                    {{-- CE QUE VOTRE DON FINANCE --}}
                    <div class="donation-impact-list">
                        <div class="donation-impact-item">
                            <div class="di-icon">
                                <i class="fas fa-tshirt"></i>
                            </div>
                            <div class="di-text">
                                <h5>10 $</h5>
                                <p>Fournit du matériel de couture pour une femme</p>
                            </div>
                        </div>
                        <div class="donation-impact-item">
                            <div class="di-icon">
                                <i class="fas fa-graduation-cap"></i>
                            </div>
                            <div class="di-text">
                                <h5>25 $</h5>
                                <p>Scolarise un enfant pendant un mois</p>
                            </div>
                        </div>
                        <div class="donation-impact-item">
                            <div class="di-icon">
                                <i class="fas fa-heartbeat"></i>
                            </div>
                            <div class="di-text">
                                <h5>50 $</h5>
                                <p>Finance une consultation médicale pour une famille</p>
                            </div>
                        </div>
                        <div class="donation-impact-item">
                            <div class="di-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="di-text">
                                <h5>100 $</h5>
                                <p>Forme une couturière pendant une semaine entière</p>
                            </div>
                        </div>
                        <div class="donation-impact-item">
                            <div class="di-icon">
                                <i class="fas fa-globe-africa"></i>
                            </div>
                            <div class="di-text">
                                <h5>250 $</h5>
                                <p>Finance un projet communautaire complet au Togo</p>
                            </div>
                        </div>
                    </div>

                    {{-- BADGE SÉCURITÉ --}}
                    <div class="donation-secure-badge">
                        <i class="fas fa-lock"></i>
                        <span>Paiement 100% sécurisé — Don déductible d'impôts (501c3)</span>
                    </div>
                </div>
            </div>

            {{-- DROITE : FORMULAIRE DON --}}
            <div class="col-lg-7 col-md-12">
                <div class="donation-form-card">

                    {{-- EN-TÊTE --}}
                    <div class="donation-form-header">
                        <div class="donation-form-icon">
                            <i class="fas fa-hand-holding-heart"></i>
                        </div>
                        <h3>Faites un Don Maintenant</h3>
                        <p>Aidez-nous à nourrir, éduquer et autonomiser</p>
                    </div>

                    {{-- PROGRESS --}}
                    <div class="donation-progress-section">
                        <div class="donation-progress-info">
                            <div class="dp-raised">
                                <span class="dp-amount">35 $</span>
                                <span class="dp-label">collectés</span>
                            </div>
                            <div class="dp-goal">
                                <span class="dp-amount">50 000 $</span>
                                <span class="dp-label">objectif</span>
                            </div>
                        </div>
                        <div class="donation-progress-bar">
                            <div class="donation-progress-fill" style="width: 0.07%;">
                                <span>0%</span>
                            </div>
                        </div>
                        <p class="dp-subtitle">Aidez-nous à atteindre notre objectif pour les enfants défavorisés</p>
                    </div>

                    {{-- FRÉQUENCE --}}
                    <div class="donation-frequency">
                        <button class="freq-btn active" data-freq="unique">
                            <i class="fas fa-heart"></i> Don Unique
                        </button>
                        <button class="freq-btn" data-freq="mensuel">
                            <i class="fas fa-sync-alt"></i> Don Mensuel
                        </button>
                        <button class="freq-btn" data-freq="annuel">
                            <i class="fas fa-calendar-check"></i> Don Annuel
                        </button>
                    </div>

                    {{-- MONTANTS PRÉDÉFINIS --}}
                    <div class="donation-amounts">
                        <button class="amount-btn" data-amount="10">10 $</button>
                        <button class="amount-btn active" data-amount="25">25 $</button>
                        <button class="amount-btn" data-amount="50">50 $</button>
                        <button class="amount-btn" data-amount="100">100 $</button>
                        <button class="amount-btn" data-amount="250">250 $</button>
                        <button class="amount-btn custom" data-amount="custom">
                            <i class="fas fa-pen"></i> Montant libre
                        </button>
                    </div>

                    {{-- CHAMP MONTANT --}}
                    <div class="donation-amount-input" id="amount-input-wrapper">
                        <div class="amount-input-group">
                            <span class="currency-symbol">$</span>
                            <input type="number"
                                   id="donation-amount"
                                   name="amount"
                                   value="25"
                                   min="1"
                                   placeholder="Entrez le montant..."
                                   class="amount-field">
                            <span class="currency-label">USD</span>
                        </div>
                    </div>

                    {{-- INFOS DONATEUR --}}
                    <div class="donation-donor-info">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Prénom <span>*</span></label>
                                <input type="text" name="first_name" placeholder="Votre prénom..." required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Nom <span>*</span></label>
                                <input type="text" name="last_name" placeholder="Votre nom..." required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Email <span>*</span></label>
                            <input type="email" name="donor_email" placeholder="Votre email..." required>
                        </div>
                        <div class="form-group">
                            <label>Message (optionnel)</label>
                            <textarea name="donor_message" placeholder="Un message d'encouragement..." rows="3"></textarea>
                        </div>

                        {{-- OPTION ANONYMAT --}}
                        <div class="donation-anonymous">
                            <label class="anon-checkbox">
                                <input type="checkbox" name="anonymous">
                                <span class="checkmark"></span>
                                Faire un don anonyme
                            </label>
                        </div>
                    </div>

                    {{-- BOUTON CONTINUER --}}
                    <button type="button" class="donation-submit-btn" id="donate-btn">
                        <i class="fas fa-heart"></i>
                        Faire un Don de <span id="btn-amount">25 $</span>
                        <i class="fas fa-arrow-right"></i>
                    </button>

                    {{-- MÉTHODES PAIEMENT --}}
                    <div class="donation-payment-methods">
                        <p>Méthodes de paiement acceptées</p>
                        <div class="payment-icons">
                            <span><i class="fab fa-cc-visa"></i></span>
                            <span><i class="fab fa-cc-mastercard"></i></span>
                            <span><i class="fab fa-cc-paypal"></i></span>
                            <span><i class="fab fa-cc-stripe"></i></span>
                            <span><i class="fab fa-cc-apple-pay"></i></span>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        {{-- TÉMOIGNAGES DONATEURS --}}
        <div class="row donation-testimonials">
            <div class="col-lg-12 text-center mb-40">
                <span class="section-tag-gold">Ils ont donné</span>
                <h2 class="projet-section-title">Ce que disent nos donateurs</h2>
                <div class="gold-divider center"></div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="donor-card">
                    <div class="donor-avatar">
                        <i class="fas fa-user-circle"></i>
                    </div>
                    <div class="donor-stars">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i>
                        <i class="fas fa-star"></i><i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>« Voir l'impact de mon don au Togo m'a profondément touché. Ces femmes méritent tout notre soutien. »</p>
                    <h5>Marie L.</h5>
                    <span>Don de 100 $ — France</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="donor-card featured">
                    <div class="donor-avatar">
                        <i class="fas fa-user-circle"></i>
                    </div>
                    <div class="donor-stars">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i>
                        <i class="fas fa-star"></i><i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>« Francis + Benedict est une organisation transparente et efficace. Je donne chaque mois avec confiance. »</p>
                    <h5>John K.</h5>
                    <span>Don mensuel — États-Unis</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="donor-card">
                    <div class="donor-avatar">
                        <i class="fas fa-user-circle"></i>
                    </div>
                    <div class="donor-stars">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i>
                        <i class="fas fa-star"></i><i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>« Savoir que mon don éduque un enfant au Togo me remplit de joie. Continuez ce beau travail ! »</p>
                    <h5>Amina S.</h5>
                    <span>Don de 50 $ — Canada</span>
                </div>
            </div>
        </div>

    </div>
</div>


@push('scripts')
<script>
    // Montants prédéfinis
    const amountBtns = document.querySelectorAll('.amount-btn');
    const amountInput = document.getElementById('donation-amount');
    const btnAmount = document.getElementById('btn-amount');
    const customWrapper = document.getElementById('amount-input-wrapper');

    amountBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            amountBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            if (btn.dataset.amount === 'custom') {
                amountInput.value = '';
                amountInput.focus();
                btnAmount.textContent = '? $';
            } else {
                amountInput.value = btn.dataset.amount;
                btnAmount.textContent = btn.dataset.amount + ' $';
            }
        });
    });

    // Mise à jour bouton quand on tape un montant
    amountInput.addEventListener('input', () => {
        const val = amountInput.value;
        btnAmount.textContent = val ? val + ' $' : '? $';
    });

    // Fréquence
    const freqBtns = document.querySelectorAll('.freq-btn');
    freqBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            freqBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
        });
    });
</script>
@endpush

<style>
    /* ============================================
   PAGE DON
   ============================================ */
.hunger_donation_area {
    padding: 80px 0;
    background: #f9f9f9;
    font-family: 'Poppins', sans-serif;
}

/* ===== CÔTÉ INFO ===== */
.donation-info-side {
    padding-right: 30px;
}

.donation-info-side h2 {
    font-family: 'Poppins', sans-serif;
    font-size: 26px;
    font-weight: 700;
    color: #1a1a2e;
    margin-bottom: 5px;
    line-height: 1.4;
}

.donation-info-side p {
    color: #666;
    font-size: 14px;
    line-height: 1.9;
    margin-bottom: 25px;
}

.donation-impact-list {
    display: flex;
    flex-direction: column;
    gap: 14px;
    margin-bottom: 25px;
}

.donation-impact-item {
    display: flex;
    align-items: center;
    gap: 16px;
    background: #ffffff;
    padding: 14px 18px;
    border-radius: 12px;
    border-left: 4px solid #c9a84c;
    box-shadow: 0 3px 10px rgba(0,0,0,0.05);
    transition: transform 0.3s;
}

.donation-impact-item:hover {
    transform: translateX(5px);
}

.di-icon {
    width: 45px;
    height: 45px;
    background: linear-gradient(135deg, #1a1a2e, #2d2d5e);
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.di-icon i {
    color: #c9a84c;
    font-size: 18px;
}

.di-text h5 {
    font-size: 16px;
    font-weight: 700;
    color: #1a1a2e;
    margin: 0 0 2px;
    font-family: 'Poppins', sans-serif;
}

.di-text p {
    font-size: 13px;
    color: #777;
    margin: 0;
    line-height: 1.4;
}

.donation-secure-badge {
    display: flex;
    align-items: center;
    gap: 10px;
    background: rgba(201,168,76,0.1);
    border: 1px solid rgba(201,168,76,0.3);
    padding: 12px 18px;
    border-radius: 10px;
    margin-top: 10px;
}

.donation-secure-badge i {
    color: #c9a84c;
    font-size: 18px;
}

.donation-secure-badge span {
    font-size: 13px;
    color: #555;
    font-weight: 500;
    font-family: 'Poppins', sans-serif;
}

/* ===== CARTE FORMULAIRE ===== */
.donation-form-card {
    background: #ffffff;
    border-radius: 20px;
    padding: 40px;
    box-shadow: 0 10px 50px rgba(0,0,0,0.1);
    border-top: 5px solid #c9a84c;
}

.donation-form-header {
    text-align: center;
    margin-bottom: 30px;
}

.donation-form-icon {
    width: 70px;
    height: 70px;
    background: linear-gradient(135deg, #1a1a2e, #2d2d5e);
    border: 3px solid #c9a84c;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 15px;
}

.donation-form-icon i {
    color: #c9a84c;
    font-size: 28px;
}

.donation-form-header h3 {
    font-family: 'Poppins', sans-serif;
    font-size: 22px;
    font-weight: 700;
    color: #1a1a2e;
    margin-bottom: 5px;
}

.donation-form-header p {
    color: #888;
    font-size: 14px;
    margin: 0;
}

/* ===== PROGRESS ===== */
.donation-progress-section {
    background: #f9f6ee;
    border-radius: 12px;
    padding: 20px;
    margin-bottom: 25px;
    border: 1px solid #e8d9a8;
}

.donation-progress-info {
    display: flex;
    justify-content: space-between;
    margin-bottom: 12px;
}

.dp-raised, .dp-goal {
    display: flex;
    flex-direction: column;
}

.dp-amount {
    font-size: 20px;
    font-weight: 700;
    color: #1a1a2e;
    font-family: 'Poppins', sans-serif;
}

.dp-goal .dp-amount {
    text-align: right;
}

.dp-label {
    font-size: 11px;
    color: #999;
    font-family: 'Poppins', sans-serif;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.donation-progress-bar {
    height: 10px;
    background: #e0d8c8;
    border-radius: 10px;
    overflow: hidden;
    margin-bottom: 8px;
}

.donation-progress-fill {
    height: 100%;
    background: linear-gradient(90deg, #c9a84c, #f0d078);
    border-radius: 10px;
    min-width: 5px;
    display: flex;
    align-items: center;
    justify-content: flex-end;
    padding-right: 6px;
    transition: width 1.5s ease;
}

.donation-progress-fill span {
    font-size: 9px;
    color: #1a1a2e;
    font-weight: 700;
}

.dp-subtitle {
    font-size: 12px;
    color: #888;
    margin: 0;
    text-align: center;
    font-family: 'Poppins', sans-serif;
}

/* ===== FRÉQUENCE ===== */
.donation-frequency {
    display: flex;
    gap: 8px;
    margin-bottom: 20px;
    flex-wrap: wrap;
}

.freq-btn {
    flex: 1;
    min-width: 100px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 6px;
    background: #f9f6ee;
    color: #555;
    border: 2px solid #e0d8c8;
    padding: 10px 16px;
    border-radius: 10px;
    font-size: 13px;
    font-weight: 600;
    cursor: pointer;
    font-family: 'Poppins', sans-serif;
    transition: all 0.3s;
}

.freq-btn:hover,
.freq-btn.active {
    background: #1a1a2e;
    color: #c9a84c;
    border-color: #1a1a2e;
}

/* ===== MONTANTS ===== */
.donation-amounts {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 10px;
    margin-bottom: 20px;
}

.amount-btn {
    background: #f9f6ee;
    color: #1a1a2e;
    border: 2px solid #e0d8c8;
    padding: 12px 10px;
    border-radius: 10px;
    font-size: 15px;
    font-weight: 700;
    cursor: pointer;
    font-family: 'Poppins', sans-serif;
    transition: all 0.3s;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 5px;
}

.amount-btn:hover,
.amount-btn.active {
    background: #c9a84c;
    color: #1a1a2e;
    border-color: #c9a84c;
    transform: scale(1.03);
}

.amount-btn.custom {
    font-size: 13px;
    color: #888;
}

.amount-btn.custom:hover,
.amount-btn.custom.active {
    color: #1a1a2e;
}

/* ===== CHAMP MONTANT ===== */
.donation-amount-input {
    margin-bottom: 20px;
}

.amount-input-group {
    display: flex;
    align-items: center;
    border: 2px solid #c9a84c;
    border-radius: 12px;
    overflow: hidden;
    background: #fff;
}

.currency-symbol {
    padding: 14px 16px;
    background: #1a1a2e;
    color: #c9a84c;
    font-size: 18px;
    font-weight: 700;
    font-family: 'Poppins', sans-serif;
}

.amount-field {
    flex: 1;
    border: none;
    outline: none;
    padding: 14px 16px;
    font-size: 20px;
    font-weight: 700;
    color: #1a1a2e;
    font-family: 'Poppins', sans-serif;
    background: #fff;
}

.currency-label {
    padding: 14px 16px;
    background: #f9f6ee;
    color: #888;
    font-size: 13px;
    font-weight: 600;
    font-family: 'Poppins', sans-serif;
}

/* ===== INFOS DONATEUR ===== */
.donation-donor-info {
    margin-bottom: 25px;
}

.donation-donor-info label {
    font-size: 13px;
    font-weight: 600;
    color: #1a1a2e;
    margin-bottom: 6px;
    display: block;
    font-family: 'Poppins', sans-serif;
}

.donation-donor-info label span {
    color: #c9a84c;
}

.donation-donor-info input,
.donation-donor-info textarea {
    width: 100%;
    padding: 11px 16px;
    border: 1.5px solid #e0e0e0;
    border-radius: 8px;
    font-size: 14px;
    font-family: 'Poppins', sans-serif;
    color: #333;
    background: #fafafa;
    outline: none;
    transition: border-color 0.3s;
}

.donation-donor-info input:focus,
.donation-donor-info textarea:focus {
    border-color: #c9a84c;
    background: #fff;
}

.donation-donor-info textarea {
    resize: vertical;
}

/* Checkbox anonymat */
.donation-anonymous {
    margin-top: 10px;
}

.anon-checkbox {
    display: flex !important;
    align-items: center;
    gap: 10px;
    cursor: pointer;
    font-size: 13px !important;
    color: #555 !important;
    font-weight: 500 !important;
}

.anon-checkbox input[type="checkbox"] {
    width: 18px;
    height: 18px;
    accent-color: #c9a84c;
    cursor: pointer;
    flex-shrink: 0;
}

/* ===== BOUTON DON ===== */
.donation-submit-btn {
    width: 100%;
    background: linear-gradient(135deg, #1a1a2e, #2d2d5e);
    color: #c9a84c;
    border: 2px solid #c9a84c;
    padding: 16px 30px;
    border-radius: 12px;
    font-size: 16px;
    font-weight: 700;
    cursor: pointer;
    font-family: 'Poppins', sans-serif;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    transition: background 0.3s, transform 0.2s, box-shadow 0.3s;
    margin-bottom: 20px;
    box-shadow: 0 5px 20px rgba(201,168,76,0.2);
}

.donation-submit-btn:hover {
    background: linear-gradient(135deg, #c9a84c, #f0d078);
    color: #1a1a2e;
    transform: scale(1.02);
    box-shadow: 0 8px 30px rgba(201,168,76,0.35);
}

/* ===== MÉTHODES PAIEMENT ===== */
.donation-payment-methods {
    text-align: center;
    border-top: 1px solid #f0e8d0;
    padding-top: 18px;
}

.donation-payment-methods p {
    font-size: 12px;
    color: #aaa;
    margin-bottom: 10px;
    font-family: 'Poppins', sans-serif;
}

.payment-icons {
    display: flex;
    justify-content: center;
    gap: 12px;
    flex-wrap: wrap;
}

.payment-icons span {
    font-size: 28px;
    color: #555;
    transition: color 0.3s, transform 0.2s;
}

.payment-icons span:hover {
    color: #c9a84c;
    transform: scale(1.15);
}

/* ===== TÉMOIGNAGES ===== */
.donation-testimonials {
    margin-top: 70px;
}

.donor-card {
    background: #ffffff;
    border-radius: 16px;
    padding: 30px 25px;
    text-align: center;
    box-shadow: 0 5px 25px rgba(0,0,0,0.07);
    border-bottom: 4px solid transparent;
    transition: transform 0.3s, border-color 0.3s;
    margin-bottom: 25px;
    font-family: 'Poppins', sans-serif;
}

.donor-card:hover,
.donor-card.featured {
    transform: translateY(-5px);
    border-bottom-color: #c9a84c;
    box-shadow: 0 15px 40px rgba(0,0,0,0.1);
}

.donor-card.featured {
    background: linear-gradient(135deg, #1a1a2e, #2d2d5e);
}

.donor-card.featured p,
.donor-card.featured h5,
.donor-card.featured span {
    color: #fff !important;
}

.donor-avatar i {
    font-size: 50px;
    color: #c9a84c;
    margin-bottom: 12px;
    display: block;
}

.donor-stars {
    color: #c9a84c;
    font-size: 13px;
    margin-bottom: 14px;
    display: flex;
    justify-content: center;
    gap: 3px;
}

.donor-card p {
    font-size: 14px;
    color: #555;
    line-height: 1.8;
    font-style: italic;
    margin-bottom: 15px;
}

.donor-card h5 {
    font-size: 15px;
    font-weight: 700;
    color: #1a1a2e;
    margin-bottom: 3px;
}

.donor-card span {
    font-size: 12px;
    color: #c9a84c;
    font-weight: 500;
}

/* ===== RESPONSIVE ===== */
@media (max-width: 992px) {
    .donation-info-side {
        padding-right: 0;
        margin-bottom: 40px;
    }
    .donation-amounts {
        grid-template-columns: repeat(3, 1fr);
    }
}

@media (max-width: 576px) {
    .donation-form-card {
        padding: 25px 20px;
    }
    .donation-amounts {
        grid-template-columns: repeat(2, 1fr);
    }
    .donation-frequency {
        flex-direction: column;
    }
}
</style>
