<!-- breadcumb-area -->
<div class="breadcumb-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12 txtc  text-center ccase">
				<div class="brpt">
					<h2>Contact</h2>
				</div>
				<div class="breadcumb-inner">
					<ul>
						<li><a href="{{ route('accueil') }}">Home</a></li>
						<li><i class="fas fa-angle-right"></i></li>
						<li>Contact</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- INFOS + FORMULAIRE -->
<div class="hunger_contact2_area">
    <div class="container">
        <!-- CARTES INFOS -->
        <div class="row contact-info-cards">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="contact-card">
                    <div class="contact-card-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h4>Adresse</h4>
                    <p>Lomé, Togo</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="contact-card">
                    <div class="contact-card-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h4>Email</h4>
                    <p><a href="mailto:togo@francisandbenedict.com">togo@francisandbenedict.com  hello@francisandbenedict.com</a></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="contact-card">
                    <div class="contact-card-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <h4>Téléphone</h4>
                    <p>+228 91828383</p>
                </div>
            </div>
        </div>

        <!-- FORMULAIRE -->
        <div class="row contact-form-section">
            <div class="col-lg-12">
                <div class="apartment_area">
                    <div class="apartment_text text-center">
                        <h2>Envoyez-nous un message</h2>
                        <p>Nous vous répondrons dans les plus brefs délais.</p>
                    </div>
                    <div class="witr_apartment_form">
                        <form action="#" method="post" id="contact-form">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Nom complet <span>*</span></label>
                                    <input type="text" name="name" placeholder="Votre nom..." required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Email <span>*</span></label>
                                    <input type="email" name="email" placeholder="Votre email..." required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>Téléphone</label>
                                    <input type="tel" name="phone" placeholder="Votre numéro...">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Message <span>*</span></label>
                                <textarea name="comment" placeholder="Votre message..." rows="6" required></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="contact-submit-btn">
                                    <i class="fas fa-paper-plane"></i> Envoyer le message
                                </button>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <p class="form-messege"></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- MAP LOMÉ TOGO -->
<div class="hunger_sit_map_area">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-lg-12">
                <div class="map_area">
                    <iframe
                        class="map"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.0!2d1.188764!3d6.208962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMTInMzIuMyJOIDHCsDExJzE5LjYiRQ!5e0!3m2!1sfr!2stg!4v1"
                        width="100%"
                        height="450"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* ===== BREADCRUMB ===== */
.breadcumb-area {
    background: #1a1a2e;
    padding: 50px 0;
    font-family: 'Poppins', sans-serif;
}

.breadcumb-area .brpt h2 {
    color: #ffffff;
    font-size: 32px;
    font-weight: 700;
    margin-bottom: 10px;
}

.breadcumb-inner ul {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 8px;
}

.breadcumb-inner ul li {
    color: #a0a8c0;
    font-size: 14px;
}

.breadcumb-inner ul li a {
    color: #ffffff;
    text-decoration: none;
    transition: color 0.3s;
}

.breadcumb-inner ul li a:hover {
    color: #ffffff;
}

/* ===== CONTACT CARDS ===== */
.hunger_contact2_area {
    background: #f9f9f9;
    padding: 70px 0 50px;
    font-family: 'Poppins', sans-serif;
}

.contact-info-cards {
    margin-bottom: 50px;
}

.contact-card {
    background: #ffffff;
    border-radius: 12px;
    padding: 35px 25px;
    text-align: center;
    box-shadow: 0 5px 25px rgba(0,0,0,0.07);
    transition: transform 0.3s, box-shadow 0.3s;
    border-bottom: 3px solid transparent;
    margin-bottom: 20px;
}

.contact-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 35px rgba(0,0,0,0.12);
    border-bottom-color: #adadad;
}

.contact-card-icon {
    width: 60px;
    height: 60px;
    background: #1a1a2e;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 15px;
    transition: background 0.3s;
}

.contact-card:hover .contact-card-icon {
    background: #b8b8b8;
}

.contact-card-icon i {
    color: #ffffff;
    font-size: 22px;
}

.contact-card h4 {
    color: #1a1a2e;
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 8px;
}

.contact-card p,
.contact-card p a {
    color: #666;
    font-size: 14px;
    margin: 0;
    text-decoration: none;
}

.contact-card p a:hover {
    color: #b4b4b4;
}

/* ===== FORMULAIRE ===== */
.contact-form-section {
    background: #ffffff;
    border-radius: 16px;
    padding: 50px 40px;
    box-shadow: 0 5px 30px rgba(0,0,0,0.08);
}

.apartment_text.text-center h2 {
    color: #1a1a2e;
    font-size: 28px;
    font-weight: 700;
    margin-bottom: 8px;
    font-family: 'Poppins', sans-serif;
}

.apartment_text.text-center p {
    color: #888;
    font-size: 14px;
    margin-bottom: 35px;
}

.witr_apartment_form .form-group {
    margin-bottom: 20px;
}

.witr_apartment_form label {
    font-size: 13px;
    font-weight: 600;
    color: #1a1a2e;
    margin-bottom: 6px;
    display: block;
    font-family: 'Poppins', sans-serif;
}

.witr_apartment_form label span {
    color: #e84545;
}

.witr_apartment_form input,
.witr_apartment_form textarea {
    width: 100%;
    padding: 12px 18px;
    border: 1.5px solid #e0e0e0;
    border-radius: 8px;
    font-size: 14px;
    font-family: 'Poppins', sans-serif;
    color: #333;
    background: #fafafa;
    transition: border-color 0.3s, box-shadow 0.3s;
    outline: none;
}

.witr_apartment_form input:focus,
.witr_apartment_form textarea:focus {
    border-color: #1a1a2e;
    box-shadow: 0 0 0 3px rgba(26,26,46,0.08);
    background: #ffffff;
}

.witr_apartment_form textarea {
    resize: vertical;
    min-height: 150px;
}

.contact-submit-btn {
    background: #1a1a2e;
    color: #ffffff;
    border: none;
    padding: 14px 40px;
    border-radius: 30px;
    font-size: 15px;
    font-weight: 600;
    font-family: 'Poppins', sans-serif;
    cursor: pointer;
    transition: background 0.3s, transform 0.2s;
    display: inline-flex;
    align-items: center;
    gap: 10px;
}

.contact-submit-btn:hover {
    background: #e84545;
    transform: scale(1.03);
}

/* ===== MAP ===== */
.hunger_sit_map_area {
    margin-top: 0;
}

.hunger_sit_map_area .map_area iframe {
    display: block;
    width: 100%;
    height: 450px;
    border: 0;
    filter: grayscale(20%);
}
</style>
