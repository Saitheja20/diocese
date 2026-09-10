
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diocese of Warangal</title>
    <?php include __DIR__ . '/header-links.php'; ?>


    <?php include __DIR__ . '/header.php'; ?>

</head>
<body>
    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #ffffff;
            color: #333;
        }

        /* =========================
           CONTACT SECTION
        ========================= */

        .contact-section {
            padding: 75px 0 85px;
            background: #f8faf8;
        }

        .contact-heading {
            text-align: center;
            margin-bottom: 45px;
        }

        .contact-heading h1 {
            display: inline-block;
            color: #176b25;
            font-size: 40px;
            font-weight: 700;
            margin-bottom: 14px;
        }

        .contact-heading h1::after {
            content: "";
            display: block;
            width: 55px;
            height: 3px;
            background: #9d2026;
            margin: 12px auto 0;
        }

        .contact-heading p {
            max-width: 650px;
            margin: 0 auto;
            color: #6b7280;
            font-size: 15px;
            line-height: 1.8;
        }

        /* =========================
           MAIN CONTACT BOX
        ========================= */

        .contact-container {
            background: #ffffff;
            border: 1px solid #e1e7e2;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 10px 35px rgba(23, 107, 37, 0.08);
        }

        /* =========================
           CONTACT FORM
        ========================= */

        .contact-form {
            height: 100%;
            padding: 45px;
        }

        .contact-form h3 {
            color: #176b25;
            font-size: 25px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .form-description {
            color: #777;
            font-size: 14px;
            line-height: 1.8;
            margin-bottom: 28px;
        }

        .contact-form .form-label {
            color: #333;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .contact-form .form-control {
            min-height: 48px;
            padding: 12px 15px;
            border: 1px solid #d9dfda;
            border-radius: 4px;
            font-family: 'Poppins', sans-serif;
            font-size: 13px;
            color: #333;
            background: #ffffff;
            box-shadow: none;
            transition: border-color 0.3s ease,
                        box-shadow 0.3s ease;
        }

        .contact-form .form-control::placeholder {
            color: #a0a6ad;
        }

        .contact-form .form-control:focus {
            border-color: #176b25;
            box-shadow: 0 0 0 3px rgba(23, 107, 37, 0.08);
        }

        .contact-form textarea.form-control {
            min-height: 135px;
            resize: vertical;
        }

        .contact-form .btn-submit {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: #9d2026;
            border: 1px solid #9d2026;
            border-radius: 4px;
            padding: 12px 28px;
            color: #ffffff;
            font-family: 'Poppins', sans-serif;
            font-size: 13px;
            font-weight: 600;
            box-shadow: none;
            transition: all 0.3s ease;
        }

        .contact-form .btn-submit:hover {
            background: #176b25;
            border-color: #176b25;
            transform: translateY(-2px);
        }

        /* =========================
           CONTACT INFORMATION
        ========================= */

        .contact-info {
            height: 100%;
            padding: 45px;
            background: #176b25;
            color: #ffffff;
        }

        .info-header {
            margin-bottom: 28px;
        }

        .info-header h3 {
            color: #ffffff;
            font-size: 25px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .info-header p {
            color: rgba(255, 255, 255, 0.88);
            font-size: 13px;
            line-height: 1.8;
            margin: 0;
        }

        /* =========================
           LOCATION CARDS
        ========================= */

        .location-card {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            padding: 16px;
            margin-bottom: 15px;

            background: #ffffff;

            /* Border removed */
            border: none;
            border-left: none;

            border-radius: 6px;

            transition: all 0.35s ease;
        }

        .location-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .location-icon {
            width: 45px;
            height: 45px;
            min-width: 45px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: #9d2026;
            color: #ffffff;

            border-radius: 50%;
            font-size: 18px;

            transition: all 0.35s ease;
        }

        .location-card:hover .location-icon {
            background: #176b25;
            transform: scale(1.08);
        }

        .location-content h5 {
            color: #176b25;
            font-size: 15px;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .location-content p {
            color: #666;
            font-size: 12px;
            line-height: 1.7;
            margin: 0;
        }

        /* =========================
           SOCIAL ICONS
        ========================= */

        .social-links {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 10px;

            border-top: 1px solid rgba(255, 255, 255, 0.3);

            padding-top: 23px;
            margin-top: 25px;
        }

        .social-links a {
            width: 39px;
            height: 39px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: #ffffff;
            color: #176b25;

            border-radius: 50%;

            text-decoration: none;
            font-size: 16px;

            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background: #9d2026;
            color: #ffffff;
            transform: translateY(-3px);
        }

        /* =========================
           MAP
        ========================= */

        .map-section {
            margin-top: 55px;
        }

        .map-title {
            text-align: center;
            margin-bottom: 23px;
        }

        .map-title h3 {
            color: #176b25;
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .map-title p {
            color: #777;
            font-size: 13px;
            margin: 0;
        }

        .map-container {
            width: 100%;
            height: 400px;

            overflow: hidden;

            background: #eeeeee;

            border: 1px solid #dfe4df;
            border-radius: 8px;

            box-shadow: 0 8px 30px rgba(23, 107, 37, 0.08);
        }

        .map-container iframe {
            display: block;
            width: 100%;
            height: 100%;
            border: 0;
        }

        /* =========================
           LARGE TABLET
        ========================= */

        @media (max-width: 1199px) {

            .contact-form,
            .contact-info {
                padding: 35px;
            }

        }

        /* =========================
           TABLET
        ========================= */

        @media (max-width: 991px) {

            .contact-section {
                padding: 60px 0 70px;
            }

            .contact-heading {
                margin-bottom: 35px;
            }

            .contact-heading h1 {
                font-size: 36px;
            }

            .contact-form,
            .contact-info {
                padding: 32px;
            }

            .map-container {
                height: 350px;
            }

        }

        /* =========================
           MOBILE
        ========================= */

        @media (max-width: 767px) {

            .contact-section {
                padding: 45px 0 55px;
            }

            .contact-heading {
                margin-bottom: 30px;
            }

            .contact-heading h1 {
                font-size: 30px;
            }

            .contact-heading p {
                font-size: 13px;
                line-height: 1.7;
                padding: 0 10px;
            }

            .contact-form,
            .contact-info {
                padding: 27px 22px;
            }

            .contact-form h3,
            .info-header h3 {
                font-size: 22px;
            }

            .form-description,
            .info-header p {
                font-size: 13px;
            }

            .location-card {
                padding: 14px;
            }

            .map-section {
                margin-top: 40px;
            }

            .map-title h3 {
                font-size: 24px;
            }

            .map-container {
                height: 300px;
            }

        }

        /* =========================
           SMALL MOBILE
        ========================= */

        @media (max-width: 480px) {

            .contact-section {
                padding: 35px 0 45px;
            }

            .contact-heading h1 {
                font-size: 27px;
            }

            .contact-heading h1::after {
                width: 45px;
                height: 2px;
            }

            .contact-heading p {
                font-size: 12px;
            }

            .contact-form,
            .contact-info {
                padding: 23px 17px;
            }

            .contact-form h3,
            .info-header h3 {
                font-size: 20px;
            }

            .form-description,
            .info-header p {
                font-size: 12px;
            }

            .contact-form .form-label {
                font-size: 13px;
            }

            .contact-form .form-control {
                font-size: 12px;
                min-height: 45px;
            }

            .contact-form textarea.form-control {
                min-height: 120px;
            }

            .contact-form .btn-submit {
                width: 100%;
                padding: 12px 20px;
            }

            .location-card {
                gap: 11px;
                padding: 13px;
            }

            .location-icon {
                width: 39px;
                height: 39px;
                min-width: 39px;
                font-size: 14px;
            }

            .location-content h5 {
                font-size: 14px;
            }

            .location-content p {
                font-size: 11px;
            }

            .social-links {
                gap: 8px;
            }

            .social-links a {
                width: 36px;
                height: 36px;
                font-size: 14px;
            }

            .map-title h3 {
                font-size: 22px;
            }

            .map-title p {
                font-size: 12px;
            }

            .map-container {
                height: 250px;
            }

        }

        /* =========================
           320px
        ========================= */

        @media (max-width: 320px) {

            .contact-heading h1 {
                font-size: 24px;
            }

            .contact-heading p {
                font-size: 11px;
            }

            .contact-form,
            .contact-info {
                padding: 20px 13px;
            }

            .contact-form h3,
            .info-header h3 {
                font-size: 18px;
            }

            .form-description,
            .info-header p {
                font-size: 11px;
            }

            .location-card {
                gap: 8px;
                padding: 11px;
            }

            .location-icon {
                width: 35px;
                height: 35px;
                min-width: 35px;
                font-size: 12px;
            }

            .location-content h5 {
                font-size: 13px;
            }

            .location-content p {
                font-size: 10px;
                line-height: 1.6;
            }

            .social-links a {
                width: 34px;
                height: 34px;
                font-size: 13px;
            }

            .map-container {
                height: 220px;
            }

        }

    </style>
</head>

<body>

<section class="contact-section">

    <div class="container">

        <!-- Page Heading -->

        <div class="contact-heading">

            <h1>Get in Touch</h1>

            <p>
                Have an inquiry or some feedback for us?
                Fill out the form below to contact our team.
            </p>

        </div>


        <!-- Contact Container -->

        <div class="contact-container">

            <div class="row g-0">

                <!-- Contact Form -->

                <div class="col-lg-6">

                    <div class="contact-form">

                        <h3>Send us a Message</h3>

                        <p class="form-description">
                            Any questions or remarks? Just write us a message
                            and our team will be happy to assist you.
                        </p>


                        <form id="contactForm">

                            <!-- Name -->

                            <div class="mb-3">

                                <label for="name" class="form-label">
                                    Name
                                </label>

                                <input
                                    type="text"
                                    class="form-control"
                                    id="name"
                                    placeholder="Enter your Name"
                                    required
                                >

                            </div>


                            <!-- Email -->

                            <div class="mb-3">

                                <label for="email" class="form-label">
                                    Email
                                </label>

                                <input
                                    type="email"
                                    class="form-control"
                                    id="email"
                                    placeholder="Enter a valid email address"
                                    required
                                >

                            </div>


                            <!-- Message -->

                            <div class="mb-4">

                                <label for="help" class="form-label">
                                    How can we help?
                                </label>

                                <textarea
                                    class="form-control"
                                    id="help"
                                    rows="4"
                                    placeholder="Tell us how we can assist you"
                                    required
                                ></textarea>

                            </div>


                            <!-- Submit -->

                            <button
                                type="submit"
                                class="btn btn-submit">

                                <i class="bi bi-send me-2"></i>

                                SUBMIT

                            </button>

                        </form>

                    </div>

                </div>


                <!-- Contact Information -->

                <div class="col-lg-6">

                    <div class="contact-info">

                        <div class="info-header">

                            <h3>Contact Us</h3>

                            <p>
                                Any questions or remarks?
                                Just write us a message!
                            </p>

                        </div>


                        <!-- Sydney -->

                        <div class="location-card">

                            <div class="location-icon">

                                <i class="bi bi-geo-alt-fill"></i>

                            </div>

                            <div class="location-content">

                                <h5>
                                    Sydney Office
                                </h5>

                                <p>
                                    45 Pirrama Rd, Pyrmont NSW 2022
                                </p>

                            </div>

                        </div>


                        <!-- Melbourne -->

                        <div class="location-card">

                            <div class="location-icon">

                                <i class="bi bi-geo-alt-fill"></i>

                            </div>

                            <div class="location-content">

                                <h5>
                                    Melbourne Office
                                </h5>

                                <p>
                                    163 Collins St, Melbourne VIC 3000
                                </p>

                            </div>

                        </div>


                        <!-- Los Angeles -->

                        <div class="location-card">

                            <div class="location-icon">

                                <i class="bi bi-geo-alt-fill"></i>

                            </div>

                            <div class="location-content">

                                <h5>
                                    Los Angeles Office
                                </h5>

                                <p>
                                    340 Main St, Venice CA 902291, USA
                                </p>

                            </div>

                        </div>


                        <!-- Social Links -->

                        <div class="social-links">

                            <a href="#" aria-label="Facebook">
                                <i class="bi bi-facebook"></i>
                            </a>

                            <a href="#" aria-label="Twitter">
                                <i class="bi bi-twitter"></i>
                            </a>

                            <a href="#" aria-label="Instagram">
                                <i class="bi bi-instagram"></i>
                            </a>

                            <a href="#" aria-label="LinkedIn">
                                <i class="bi bi-linkedin"></i>
                            </a>

                            <a href="#" aria-label="YouTube">
                                <i class="bi bi-youtube"></i>
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-- Map -->

        <div class="map-section">

            <div class="map-title">

                <h3>Find Us on the Map</h3>

                <p>
                    Visit our office location
                </p>

            </div>


            <div class="map-container">

                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3311.288431601523!2d151.1923557764898!3d-33.90686521901733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12ae3cd3544d15%3A0xb6e55ee7d81dfb21!2s45%20Pirrama%20Rd%2C%20Pyrmont%20NSW%202009%2C%20Australia!5e0!3m2!1sen!2sus!4v1698765487652!5m2!1sen!2sus"
                    width="100%"
                    height="100%"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>

            </div>

        </div>

    </div>

</section>


<!-- Form Script -->

<script>

document.addEventListener('DOMContentLoaded', function () {

    const contactForm = document.getElementById('contactForm');

    contactForm.addEventListener('submit', function (event) {

        event.preventDefault();

        const name = document.getElementById('name').value.trim();

        const email = document.getElementById('email').value.trim();

        const help = document.getElementById('help').value.trim();


        if (name && email && help) {

            alert(
                'Thank you for your message! We will get back to you soon.'
            );

            contactForm.reset();

        } else {

            alert('Please fill in all fields.');

        }

    });

});

</script>


<!-- Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>




        <?php include __DIR__ . '/footer.php'; ?>



</body>
</html>





  