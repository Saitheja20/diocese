<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diocese of Warangal</title>
    <?php include __DIR__ . '/header-links.php'; ?>
        <?php include __DIR__ . '/header.php'; ?>

<style>

    * {
        box-sizing: border-box;
    }

    html,
    body {
        margin: 0;
        padding: 0;
        width: 100%;
        overflow-x: hidden;
    }

    body {
        font-family: "Poppins", sans-serif;
        background: #ffffff;
        color: #222;
    }

    /* =========================
       BISHOP PROFILE SECTION
    ========================= */

    .bishop-section {
        padding: 75px 0;
        background: linear-gradient(135deg, #fffaf7 0%, #ffffff 50%, #fff5f3 100%);
        position: relative;
        overflow: hidden;
    }

    .bishop-container {
        position: relative;
        z-index: 2;
    }

    /* =========================
       SECTION HEADING
    ========================= */

    .bishop-heading {
        text-align: center;
        margin-bottom: 50px;
    }

    .bishop-heading .small-heading {
        font-size: 18px;
        font-weight: 500;
        color: #b78a2e;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 8px;
    }

    .bishop-heading h2 {
        margin: 0;
        font-size: 40px;
        font-weight: 700;
        font-family: "Poppins", sans-serif;
        color: #222;
        line-height: 1.25;
    }

    .bishop-heading h2 span {
        color: #dc3545;
    }

    .heading-line {
        width: 75px;
        height: 4px;
        background: #dc3545;
        border-radius: 10px;
        margin: 18px auto 0;
        position: relative;
    }

    .heading-line::after {
        content: "";
        position: absolute;
        width: 25px;
        height: 4px;
        background: #b78a2e;
        border-radius: 10px;
        left: 25px;
        top: 0;
    }

    /* =========================
       PROFILE CARD
    ========================= */

    .bishop-card {
        background: #ffffff;
        border-radius: 24px;
        overflow: hidden;
        box-shadow: 0 15px 45px rgba(0, 0, 0, 0.10);
        border: 1px solid rgba(183, 138, 46, 0.18);
        width: 100%;
    }

    /* =========================
       LEFT CONTENT
    ========================= */

    .bishop-content {
        padding: 50px 45px;
    }

    .bishop-title {
        margin-bottom: 22px;
    }

    .bishop-title h3 {
        font-size: 30px;
        font-weight: 600;
        font-family: "Poppins", sans-serif;
        color: #dc3545;
        margin: 0;
        line-height: 1.35;
    }

    .bishop-description {
        font-size: 15px;
        line-height: 1.8;
        color: #555;
        margin-bottom: 18px;
    }

    .bishop-description strong {
        color: #222;
        font-weight: 600;
    }

    /* =========================
       INFORMATION BOXES
    ========================= */

    .bishop-info {
        margin-top: 30px;
    }

    .info-box {
        height: 100%;
        min-height: 82px;
        background: #fff8f6;
        border: 1px solid rgba(220, 53, 69, 0.10);
        border-radius: 14px;
        padding: 17px 18px;
        display: flex;
        align-items: center;
        gap: 15px;
        transition: all 0.3s ease;
    }

    .info-box:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 20px rgba(220, 53, 69, 0.10);
        border-color: rgba(220, 53, 69, 0.25);
    }

    .info-icon {
        width: 44px;
        height: 44px;
        min-width: 44px;
        border-radius: 12px;
        background: #dc3545;
        color: #ffffff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
    }

    .info-text {
        font-size: 14px;
        line-height: 1.6;
        color: #333;
        word-break: break-word;
    }

    /* =========================
       IMAGE
    ========================= */

    .bishop-image-wrapper {
        height: 100%;
        min-height: 620px;
        padding: 25px;
        background: linear-gradient(145deg, #f7e8e5, #fff8f6);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .bishop-image-box {
        width: 100%;
        height: 100%;
        min-height: 570px;
        border-radius: 20px;
        overflow: hidden;
        position: relative;
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12);
    }

    .bishop-image-box::before {
        content: "";
        position: absolute;
        inset: 0;
        border: 5px solid rgba(255, 255, 255, 0.35);
        border-radius: 20px;
        z-index: 2;
        pointer-events: none;
    }

    .bishop-image-box img {
        width: 100%;
        height: 100%;
        min-height: 570px;
        object-fit: cover;
        object-position: center;
        display: block;
    }

    /* =========================
       BUTTON
    ========================= */

    .profile-button-wrapper {
        display: block;
        width: 100%;
        text-align: center;
        margin-top: 35px;
        position: relative;
        z-index: 10;
    }

    .bishop-profile-button {
        display: inline-flex !important;
        align-items: center;
        justify-content: center;
        gap: 8px;
        border: none;
        outline: none;
        background: #dc3545;
        color: #ffffff !important;
        padding: 13px 28px;
        border-radius: 8px;
        font-size: 16px;
        font-weight: 500;
        font-family: "Poppins", sans-serif;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 7px 18px rgba(220, 53, 69, 0.22);
    }

    .bishop-profile-button:hover {
        background: #b92b3a;
        color: #ffffff !important;
        transform: translateY(-2px);
        box-shadow: 0 10px 22px rgba(220, 53, 69, 0.28);
    }

    .bishop-profile-button:focus {
        outline: none;
        box-shadow: 0 7px 18px rgba(220, 53, 69, 0.22);
    }

    .bishop-profile-button i {
        font-size: 14px;
        transition: transform 0.3s ease;
    }

    .bishop-profile-button:hover i {
        transform: translateX(3px);
    }

    /* =========================
       FULL PROFILE CARDS
    ========================= */

    #profileDetails {
        display: none;
        margin-top: 35px;
    }

    #profileDetails.show-profile {
        display: block;
        animation: profileFade 0.6s ease;
    }

    @keyframes profileFade {

        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }

    }

    .full-profile-card {
        height: 100%;
        background: #ffffff;
        border: 1px solid #d5d5d5;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 8px 18px rgba(0, 0, 0, 0.10);
    }

    .full-profile-card h4 {
        font-size: 21px;
        font-weight: 600;
        color: #c9362f;
        margin: 0 0 14px 0;
        line-height: 1.3;
    }

    .full-profile-card p {
        font-size: 16px;
        line-height: 1.65;
        color: #222;
        margin: 0;
    }

    .full-profile-card ul {
        margin: 0;
        padding-left: 0;
        list-style: none;
    }

    .full-profile-card li {
        font-size: 16px;
        line-height: 1.65;
        color: #222;
        margin-bottom: 0;
    }

    /* =========================
       TABLET
    ========================= */

    @media (max-width: 991px) {

        .bishop-section {
            padding: 60px 0;
        }

        .bishop-heading h2 {
            font-size: 40px;
        }

        .bishop-content {
            padding: 40px 35px;
        }

        .bishop-image-wrapper {
            min-height: 500px;
        }

        .bishop-image-box {
            min-height: 470px;
        }

        .bishop-image-box img {
            min-height: 470px;
        }

        .bishop-title h3 {
            font-size: 27px;
        }

        .full-profile-card h4 {
            font-size: 20px;
        }

        .full-profile-card p,
        .full-profile-card li {
            font-size: 15px;
        }

    }

    /* =========================
       MOBILE
    ========================= */

    @media (max-width: 767px) {

        .bishop-section {
            padding: 50px 15px;
        }

        .bishop-heading {
            margin-bottom: 35px;
        }

        .bishop-heading .small-heading {
            font-size: 15px;
            letter-spacing: 1.5px;
        }

        .bishop-heading h2 {
            font-size: 32px;
        }

        .bishop-card {
            border-radius: 18px;
        }

        .bishop-content {
            padding: 35px 25px;
        }

        .bishop-title h3 {
            font-size: 24px;
        }

        .bishop-description {
            font-size: 14px;
            line-height: 1.7;
        }

        .bishop-image-wrapper {
            min-height: auto;
            padding: 20px;
        }

        .bishop-image-box {
            min-height: 450px;
        }

        .bishop-image-box img {
            min-height: 450px;
        }

        .info-box {
            min-height: 75px;
        }

        .profile-button-wrapper {
            margin-top: 30px;
        }

        #profileDetails {
            margin-top: 30px;
        }

        .full-profile-card {
            padding: 18px;
        }

        .full-profile-card h4 {
            font-size: 19px;
        }

        .full-profile-card p,
        .full-profile-card li {
            font-size: 14px;
        }

    }

    /* =========================
       SMALL MOBILE
    ========================= */

    @media (max-width: 575px) {

        .bishop-section {
            padding: 40px 12px;
        }

        .bishop-heading h2 {
            font-size: 28px;
        }

        .bishop-heading .small-heading {
            font-size: 13px;
        }

        .bishop-content {
            padding: 30px 18px;
        }

        .bishop-title h3 {
            font-size: 21px;
        }

        .bishop-description {
            font-size: 13.5px;
        }

        .info-box {
            padding: 14px;
            gap: 12px;
        }

        .info-icon {
            width: 40px;
            height: 40px;
            min-width: 40px;
            font-size: 16px;
        }

        .info-text {
            font-size: 13px;
        }

        .bishop-image-wrapper {
            padding: 15px;
        }

        .bishop-image-box {
            min-height: 380px;
            border-radius: 15px;
        }

        .bishop-image-box img {
            min-height: 380px;
        }

        .bishop-profile-button {
            font-size: 14px;
            padding: 11px 22px;
        }

        .full-profile-card {
            padding: 16px;
        }

        .full-profile-card h4 {
            font-size: 18px;
        }

        .full-profile-card p,
        .full-profile-card li {
            font-size: 13px;
            line-height: 1.6;
        }

    }

    /* =========================
       EXTRA SMALL MOBILE
    ========================= */

    @media (max-width: 400px) {

        .bishop-section {
            padding: 35px 8px;
        }

        .bishop-heading h2 {
            font-size: 25px;
        }

        .bishop-heading .small-heading {
            font-size: 12px;
        }

        .bishop-content {
            padding: 25px 15px;
        }

        .bishop-title h3 {
            font-size: 19px;
        }

        .bishop-description {
            font-size: 13px;
        }

        .bishop-image-wrapper {
            padding: 12px;
        }

        .bishop-image-box {
            min-height: 340px;
        }

        .bishop-image-box img {
            min-height: 340px;
        }

        .bishop-profile-button {
            font-size: 13px;
            padding: 10px 19px;
        }

        .full-profile-card {
            padding: 14px;
        }

        .full-profile-card h4 {
            font-size: 17px;
        }

        .full-profile-card p,
        .full-profile-card li {
            font-size: 12.5px;
        }

    }

</style>


</head>

<body>


<!-- =========================
     BISHOP'S PROFILE
========================= -->

<section class="bishop-section">

    <div class="container bishop-container">

        <!-- HEADING -->

        <div class="bishop-heading">

            <div class="small-heading">
                Bishop's Profile
            </div>

            <h2>
                Our Local Ordinary
                <span>Most Rev. Udumala Bala, D.D.</span>
            </h2>

            <div class="heading-line"></div>

        </div>


        <!-- PROFILE CARD -->

        <div class="bishop-card">

            <div class="row g-0 align-items-stretch">

                <!-- CONTENT -->

                <div class="col-lg-7">

                    <div class="bishop-content">

                        <div class="bishop-title">

                            <h3>
                                Most Rev. Udumala Bala, D.D.
                            </h3>

                        </div>


                        <!-- ALWAYS VISIBLE INFORMATION -->

                        <p class="bishop-description">

                            Bishop Udumala Bala, born on
                            <strong>18 June 1954</strong>
                            in
                            <strong>Gudur (Lourdunagar), Warangal Dt., Telangana</strong>,
                            was ordained to the priesthood in
                            <strong>February 1979</strong>.
                            After serving in pastoral ministry, seminary formation, and
                            administrative roles, he was appointed Bishop of Warangal on
                            <strong>13 April 2013</strong>
                            and consecrated on
                            <strong>23 March 2013</strong>.

                        </p>


                        <p class="bishop-description">

                            With rich experience in teaching moral theology, guiding
                            seminarians, and serving in national roles with the CCBI,
                            Bishop Bala has been dedicated to the growth of the Church
                            in Warangal and beyond.

                        </p>


                        <!-- INFORMATION -->

                        <div class="bishop-info">

                            <div class="row g-3">

                                <!-- DEACON -->

                                <div class="col-md-6">

                                    <div class="info-box">

                                        <div class="info-icon">
                                            <i class="fa-regular fa-calendar-check"></i>
                                        </div>

                                        <div class="info-text">
                                            <strong>Ordained Deacon:</strong><br>
                                            Dec 1977
                                        </div>

                                    </div>

                                </div>


                                <!-- PRIEST -->

                                <div class="col-md-6">

                                    <div class="info-box">

                                        <div class="info-icon">
                                            <i class="fa-regular fa-calendar-check"></i>
                                        </div>

                                        <div class="info-text">
                                            <strong>Ordained Priest:</strong><br>
                                            Feb 1979
                                        </div>

                                    </div>

                                </div>


                                <!-- PHONE -->

                                <div class="col-md-6">

                                    <div class="info-box">

                                        <div class="info-icon">
                                            <i class="fa-solid fa-phone"></i>
                                        </div>

                                        <div class="info-text">
                                            0870-2459128
                                        </div>

                                    </div>

                                </div>


                                <!-- EMAIL -->

                                <div class="col-md-6">

                                    <div class="info-box">

                                        <div class="info-icon">
                                            <i class="fa-regular fa-envelope"></i>
                                        </div>

                                        <div class="info-text">
                                            wgdioabu@gmail.com
                                        </div>

                                    </div>

                                </div>


                                <!-- STUDIES -->

                                <div class="col-md-6">

                                    <div class="info-box">

                                        <div class="info-icon">
                                            <i class="fa-solid fa-book-open"></i>
                                        </div>

                                        <div class="info-text">
                                            <strong>Studies:</strong><br>
                                            M.A. Philosophy, Rome
                                        </div>

                                    </div>

                                </div>


                                <!-- LANGUAGES -->

                                <div class="col-md-6">

                                    <div class="info-box">

                                        <div class="info-icon">
                                            <i class="fa-solid fa-language"></i>
                                        </div>

                                        <div class="info-text">
                                            <strong>Languages:</strong><br>
                                            Telugu, Hindi, English, Italian, German
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- BISHOP IMAGE -->

                <div class="col-lg-5">

                    <div class="bishop-image-wrapper">

                        <div class="bishop-image-box">

                            <img src="https://i.postimg.cc/Pqzvb6F2/bishop.png"
                                alt="Bishop Udumala Bala">

                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-- VIEW / HIDE BUTTON -->

        <div class="profile-button-wrapper">

            <button type="button"
                class="bishop-profile-button"
                id="profileToggleButton"
                onclick="toggleProfile()">

                <span id="profileButtonText">
                    View Full Profile
                </span>

                <i id="profileButtonIcon"
                    class="fa-solid fa-arrow-right">
                </i>

            </button>

        </div>


        <!-- =========================
             FULL PROFILE INFORMATION
        ========================= -->

        <div id="profileDetails">

            <div class="row g-4">

                <!-- SECULAR STUDIES -->

                <div class="col-lg-6">

                    <div class="full-profile-card">

                        <h4>
                            SECULAR STUDIES
                        </h4>

                        <ul>

                            <li>
                                Diploma in Oriental Languages—Telugu, 1978
                            </li>

                            <li>
                                M.A in Philosophy, 2003
                            </li>

                            <li>
                                Languages: Telugu, Hindi, English, Italian, German
                                (working knowledge of Latin & Greek)
                            </li>

                        </ul>

                    </div>

                </div>


                <!-- ECCLESIASTICAL STUDIES -->

                <div class="col-lg-6">

                    <div class="full-profile-card">

                        <h4>
                            ECCLESIASTICAL STUDIES
                        </h4>

                        <p>
                            Licentiate and Doctorate in Moral Theology at Alphonsianum, Rome
                        </p>

                    </div>

                </div>


                <!-- PASTORAL MINISTRY -->

                <div class="col-lg-6">

                    <div class="full-profile-card">

                        <h4>
                            PASTORAL MINISTRY
                        </h4>

                        <ul>

                            <li>
                                Assistant Parish Priest for 1 year at Dornakal (Warangal Diocese)
                            </li>

                            <li>
                                Parish Priest at Proddutur, Ravinuthala, and Cheruvumadaram
                                (all presently in Khammam Diocese)
                            </li>

                            <li>
                                Procurator at Shop House, Fathimanagar (1986)
                            </li>

                        </ul>

                    </div>

                </div>


                <!-- FORMATIVE MINISTRY & RECTOR -->

                <div class="col-lg-6">

                    <div class="full-profile-card">

                        <h4>
                            FORMATIVE MINISTRY &amp; RECTOR
                        </h4>

                        <ul>

                            <li>
                                Formation and teaching of Moral Theology at St. John's Regional
                                Seminary, Hyderabad (1994–2006)
                            </li>

                            <li>
                                Rector at St. John's Seminary, Hyderabad (1997–2006, 9 years)
                            </li>

                        </ul>

                    </div>

                </div>


                <!-- ADMINISTRATIVE MINISTRY -->

                <div class="col-lg-6">

                    <div class="full-profile-card">

                        <h4>
                            ADMINISTRATIVE MINISTRY
                        </h4>

                        <ul>

                            <li>
                                Chancellor and Procurator of the Diocese of Warangal: 1 year
                            </li>

                            <li>
                                Procurator and teacher of Catechetics at St. John's Regional
                                Seminary, Hyderabad: 4 years (1986–1990)
                            </li>

                            <li>
                                Deputy Secretary General, CCBI, from June 2006 till date
                            </li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================
     JAVASCRIPT
========================= -->

<script>

    function toggleProfile() {

        const profile =
            document.getElementById("profileDetails");

        const buttonText =
            document.getElementById("profileButtonText");

        const buttonIcon =
            document.getElementById("profileButtonIcon");


        if (profile.classList.contains("show-profile")) {

            /* HIDE FULL PROFILE */

            profile.classList.remove("show-profile");

            buttonText.textContent = "View Full Profile";

            buttonIcon.className =
                "fa-solid fa-arrow-right";

        } else {

            /* SHOW FULL PROFILE */

            profile.classList.add("show-profile");

            buttonText.textContent = "Hide Profile";

            buttonIcon.className =
                "fa-solid fa-arrow-up";

        }

    }

</script>


</body>

    <?php include __DIR__ . '/footer.php'; ?>