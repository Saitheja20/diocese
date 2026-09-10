<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diocese of Warangal</title>
    <?php include __DIR__ . '/header-links.php'; ?>


        <?php include __DIR__ . '/header.php'; ?>


   
<style>
    /*  SENATEMEMBER  CSS*/
   

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
            background: #f5f6f8;
            color: #222;
            font-family:"Poppins", sans-serif;
        }

        /* MAIN SECTION */

        .main-section {
            width: 100%;
            padding: 55px 0;
        }

        .directory-section {
            width: 100%;
        }

        /* CONTAINER */

        .container {
            width: 100%;
        }

        /* MAIN HEADING */

        .about-heading {
            text-align: center;
            margin-bottom: 45px;
        } 

         /* .about-heading h1 {
            margin: 0;
            padding: 0;
            color: #123b63;
            font-size: clamp(28px, 5vw, 40px);
            font-weight: 700;
            line-height: 1.3;
            text-transform: uppercase;
        } 
 
        .heading-line {
            width: 75px;
            height: 3px;
            background: #123b63;
            margin: 18px auto 0;
        }  */

        /* SECTION HEADING */

        .section-heading {
            margin: 0 0 20px 0;
            padding: 0;
        }

        .section-heading h2 {
            display: inline-block;
            margin: 0;
            padding: 0 0 7px 0;
            color: #123b63;
            font-size: 1.5rem;
            font-weight: 700;
            line-height: 1.3;
            border-bottom: 4px solid #12b7a6;
        }

        /* CARD COLUMN */

        .priest-item {
            margin-bottom: 0;
        }

        /* CARD */

        .directory-card {
            width: 100%;
            height: 100%;
            background: #ffffff;
            border: 1px solid #d5dbe2;
            border-radius: 6px;
            overflow: hidden;
            box-shadow: 0 2px 7px rgba(0, 0, 0, 0.07);

            /* No effects */
            transition: none !important;
            animation: none !important;
            transform: none !important;
        }

        .directory-card:hover {
            box-shadow: 0 2px 7px rgba(0, 0, 0, 0.07);
            transform: none !important;
        }

        /* CARD TOP */

        .directory-top {
            min-height: 70px;
            padding: 15px 18px;
            background: #eef2f6;
            border-bottom: 1px solid #d5dbe2;

            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
        }

        .directory-title {
            order: 1;
            margin: 0;
            padding: 0;
            color: #123b63;
            font-size: 1.25rem;
            font-weight: 700;
            line-height: 1.3;
        }

        .card-number {
            order: 2;
            flex: 0 0 auto;

            width: 37px;
            height: 37px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: #123b63;
            color: #ffffff;

            border-radius: 4px;

            font-size: 15px;
            font-weight: 700;

            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.12);

            transition: none !important;
            animation: none !important;
        }

        /* CARD BODY */

        .directory-body {
            padding: 15px 18px;
            background: #ffffff;
        }

        /* PERSON ROW */

        .person-row {
            position: relative;

            margin: 0;
            padding: 12px 0;

            color: #222;
            font-size: 0.25rem;
            line-height: 1.5;

            border-bottom: 1px solid #e4e7eb;

            list-style: none !important;
        }

        .person-row:first-child {
            padding-top: 0;
        }

        .person-row:last-child {
            padding-bottom: 0;
            border-bottom: none;
        }

        /* REMOVE DOTS */

        .person-row::before,
        .person-row::after,
        .person-row li::before,
        .person-row li::after {
            content: none !important;
            display: none !important;
        }

        .person-row::marker,
        li::marker {
            content: none !important;
        }

        ul,
        ol {
            list-style: none !important;
            list-style-type: none !important;
            padding-left: 0 !important;
            margin-left: 0 !important;
        }

        /* PERSON LABEL */

        .person-label {
            display: block;
            margin-bottom: 3px;

            color: #123b63;
            font-size: 15px;
            font-weight: 700;
        }

        /* PERSON NAME */

        .person-name {
            display: block;
            color: #222;
            font-size: 15px;
            font-weight: 400;
            line-height: 1.5;
            word-break: break-word;
        }

        /* FOOTER */

        .directory-footer {
            min-height: 48px;

            padding: 13px 18px;

            background: #f4f6f8;

            border-top: 1px solid #d5dbe2;
        }

        .footer-text {
            margin: 0;
            padding: 0;

            color: #4d5660;

            font-size: 14px;
            line-height: 1.4;
        }

        .footer-label {
            color: #123b63;
            font-weight: 700;
        }

        /* DEANERY SECTION */

        .deanery-section {
            margin-top: 50px;
        }

        /* BOOTSTRAP ROW */

        .row {
            width: 100%;
        }

        /* REMOVE ALL EFFECTS */

        .directory-card *,
        .directory-card *::before,
        .directory-card *::after {
            transition: none !important;
            animation: none !important;
        }

        /* LARGE DESKTOP */

        @media (min-width: 1200px) {

            .container {
                max-width: 1200px;
            }

            .main-section {
                padding: 55px 0;
            }

            .about-heading h1 {
                font-size: clamp(28px, 5vw, 40px);
            }

            .section-heading h2 {
                font-size: clamp(24px, 4vw, 32px);
            }

            .directory-title {
                font-size: 20px;
            }

            .person-label,
            .person-name {
                font-size: 15px;
            }
        }

        /* LAPTOP */

        @media (max-width: 1199.98px) {

            .main-section {
                padding: 50px 0;
            }

            .about-heading {
                margin-bottom: 40px;
            }

            .about-heading h1 {
                font-size: clamp(28px, 5vw, 40px);
            }

            .section-heading h2 {
                font-size: clamp(24px, 4vw, 32px);
            }
        }

        /* TABLET */

        @media (max-width: 991.98px) {

            .main-section {
                padding: 45px 0;
            }

            .about-heading {
                margin-bottom: 35px;
            }

            .about-heading h1 {
                font-size: clamp(26px, 5vw, 40px);
            }

            .heading-line {
                margin-top: 15px;
            }

            .section-heading {
                margin-bottom: 18px;
            }

            .section-heading h2 {
                font-size: clamp(24px, 4vw, 32px);
            }

            .directory-top {
                padding: 14px 16px;
            }

            .directory-title {
                font-size: clamp(18px, 3vw, 20px);
            }

            .directory-body {
                padding: 15px 16px;
            }

            .directory-footer {
                padding: 12px 16px;
            }
        }

        /* MOBILE */

        @media (max-width: 767.98px) {

            .main-section {
                padding: 40px 0;
            }

            .about-heading {
                margin-bottom: 30px;
            }

            .about-heading h1 {
                font-size: clamp(24px, 5vw, 40px);
                line-height: 1.35;
            }

            .heading-line {
                width: 65px;
                height: 3px;
                margin-top: 13px;
            }

            .section-heading {
                margin-bottom: 17px;
            }

            .section-heading h2 {
                font-size: 22px;
            }

            .directory-top {
                min-height: 65px;
                padding: 13px 15px;
            }

            .directory-title {
                font-size: 19px;
            }

            .card-number {
                width: 35px;
                height: 35px;
                font-size: 14px;
            }

            .directory-body {
                padding: 14px 15px;
            }

            .person-row {
                padding: 11px 0;
            }

            .person-label,
            .person-name {
                font-size: 15px;
            }

            .directory-footer {
                padding: 12px 15px;
            }
        }

        /* SMALL MOBILE */

        @media (max-width: 575.98px) {

            .main-section {
                padding: 35px 0;
            }

            .about-heading {
                margin-bottom: 28px;
            }

            .about-heading h1 {
                font-size: 21px;
            }

            .heading-line {
                width: 60px;
            }

            .section-heading h2 {
                font-size: 20px;
            }

            .directory-top {
                min-height: 62px;
                padding: 12px 14px;
            }

            .directory-title {
                font-size: 18px;
            }

            .card-number {
                width: 34px;
                height: 34px;
                font-size: 13px;
            }

            .directory-body {
                padding: 14px;
            }

            .person-label,
            .person-name {
                font-size: 14px;
            }

            .directory-footer {
                padding: 11px 14px;
            }

            .footer-text {
                font-size: 13px;
            }

            .deanery-section {
                margin-top: 40px;
            }
        }

        /* VERY SMALL MOBILE */

        @media (max-width: 375px) {

            .main-section {
                padding: 30px 0;
            }

            .about-heading h1 {
                font-size: 19px;
            }

            .section-heading h2 {
                font-size: 19px;
            }

            .directory-top {
                padding: 11px 12px;
            }

            .directory-title {
                font-size: 17px;
            }

            .card-number {
                width: 32px;
                height: 32px;
                font-size: 12px;
            }

            .directory-body {
                padding: 13px 12px;
            }

            .directory-footer {
                padding: 10px 12px;
            }
        }
</style>
</head>


<body>

    <main class="main-section">

        <!-- DIOCESAN PRIESTS -->

        <section class="directory-section">

            <div class="container">

                <!-- MAIN HEADING -->

                <div class="about-heading">

                    <h1>
                        WARANGAL DIOCESAN PRESBYTERAL COUNCIL
                    </h1>

                    <div class="heading-line"></div>

                </div> 
  


                <!-- SECTION HEADING -->

                <div class="section-heading">
                    <h2>Diocesan Priests :</h2>
                </div>


                <!-- FIRST 4 CARDS -->

                <div class="row g-4 priest-row">

                    <!-- GROUP 1 -->

                    <div class="col-xl-3 col-lg-6 col-md-6 priest-item">

                        <div class="directory-card">

                            <div class="directory-top">

                                <h3 class="directory-title">
                                    Group-1
                                </h3>

                                <span class="card-number">
                                    01
                                </span>

                            </div>

                            <div class="directory-body">

                                <p class="person-row">

                                    <span class="person-label">
                                        Priests-1 :
                                    </span>

                                    <span class="person-name">
                                        Fr. Basani Chinnappa
                                    </span>

                                </p>

                                <p class="person-row">

                                    <span class="person-label">
                                        Priests-2 :
                                    </span>

                                    <span class="person-name">
                                        Fr. D. Vijaya Paul
                                    </span>

                                </p>

                            </div>

                            <div class="directory-footer">

                                <p class="footer-text">

                                    <span class="footer-label">
                                        Academic Year:
                                    </span>

                                    1958-1952

                                </p>

                            </div>

                        </div>

                    </div>


                    <!-- GROUP 2 -->

                    <div class="col-xl-3 col-lg-6 col-md-6 priest-item">

                        <div class="directory-card">

                            <div class="directory-top">

                                <h3 class="directory-title">
                                    Group-2
                                </h3>

                                <span class="card-number">
                                    02
                                </span>

                            </div>

                            <div class="directory-body">

                                <p class="person-row">

                                    <span class="person-label">
                                        Priests-1 :
                                    </span>

                                    <span class="person-name">
                                        Fr. T. Augustine
                                    </span>

                                </p>

                                <p class="person-row">

                                    <span class="person-label">
                                        Priests-2 :
                                    </span>

                                    <span class="person-name">
                                        Fr. G. Martin
                                    </span>

                                </p>

                            </div>

                            <div class="directory-footer">

                                <p class="footer-text">

                                    <span class="footer-label">
                                        Academic Year:
                                    </span>

                                    1993-2002

                                </p>

                            </div>

                        </div>

                    </div>


                    <!-- GROUP 3 -->

                    <div class="col-xl-3 col-lg-6 col-md-6 priest-item">

                        <div class="directory-card">

                            <div class="directory-top">

                                <h3 class="directory-title">
                                    Group-3
                                </h3>

                                <span class="card-number">
                                    03
                                </span>

                            </div>

                            <div class="directory-body">

                                <p class="person-row">

                                    <span class="person-label">
                                        Priests-1 :
                                    </span>

                                    <span class="person-name">
                                        Fr. T. Joseph
                                    </span>

                                </p>

                                <p class="person-row">

                                    <span class="person-label">
                                        Priests-2 :
                                    </span>

                                    <span class="person-name">
                                        Fr. T. Tharun
                                    </span>

                                </p>

                            </div>

                            <div class="directory-footer">

                                <p class="footer-text">

                                    <span class="footer-label">
                                        Academic Year:
                                    </span>

                                    2004-2013

                                </p>

                            </div>

                        </div>

                    </div>


                    <!-- GROUP 4 -->

                    <div class="col-xl-3 col-lg-6 col-md-6 priest-item">

                        <div class="directory-card">

                            <div class="directory-top">

                                <h3 class="directory-title">
                                    Group-4
                                </h3>

                                <span class="card-number">
                                    04
                                </span>

                            </div>

                            <div class="directory-body">

                                <p class="person-row">

                                    <span class="person-label">
                                        Priests-1 :
                                    </span>

                                    <span class="person-name">
                                        Fr. E. Vijay
                                    </span>

                                </p>

                                <p class="person-row">

                                    <span class="person-label">
                                        Priests-2 :
                                    </span>

                                    <span class="person-name">
                                        Fr. G. Joseph
                                    </span>

                                </p>

                            </div>

                            <div class="directory-footer">

                                <p class="footer-text">

                                    <span class="footer-label">
                                        Academic Year:
                                    </span>

                                    2014-2023

                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        <!-- DEANERIES -->

        <section class="directory-section deanery-section">

            <div class="container">

                <div class="section-heading">
                    <h2>Deaneries Group :</h2>
                </div>


                <div class="row g-4">

                    <!-- FATIMANAGAR -->

                    <div class="col-xl-3 col-lg-6 col-md-6">

                        <div class="directory-card deanery-card">

                            <div class="directory-top">

                                <h3 class="directory-title">
                                    Fatimanagar
                                </h3>

                                <span class="card-number">
                                    01
                                </span>

                            </div>

                            <div class="directory-body">

                                <p class="person-row">

                                    <span class="person-label">
                                        Deanary-1 :
                                    </span>

                                    <span class="person-name">
                                        Fr. Basani Chinnappa
                                    </span>

                                </p>

                                <p class="person-row">

                                    <span class="person-label">
                                        Deanary-2 :
                                    </span>

                                    <span class="person-name">
                                        Fr. D. Vijaya Paul
                                    </span>

                                </p>

                            </div>

                            <div class="directory-footer">

                                <p class="footer-text">
                                    Deaneries Group-1
                                </p>

                            </div>

                        </div>

                    </div>


                    <!-- KARIMNAGAR -->

                    <div class="col-xl-3 col-lg-6 col-md-6">

                        <div class="directory-card deanery-card">

                            <div class="directory-top">

                                <h3 class="directory-title">
                                    Karimnagar
                                </h3>

                                <span class="card-number">
                                    02
                                </span>

                            </div>

                            <div class="directory-body">

                                <p class="person-row">

                                    <span class="person-label">
                                        Deanary-1 :
                                    </span>

                                    <span class="person-name">
                                        Fr. T. Santhosh
                                    </span>

                                </p>

                                <p class="person-row">

                                    <span class="person-label">
                                        Deanary-2 :
                                    </span>

                                    <span class="person-name">
                                        Fr. T. Ashok
                                    </span>

                                </p>

                            </div>

                            <div class="directory-footer">

                                <p class="footer-text">
                                    Deaneries Group-1
                                </p>

                            </div>

                        </div>

                    </div>


                    <!-- JANGAON -->

                    <div class="col-xl-3 col-lg-6 col-md-6">

                        <div class="directory-card deanery-card">

                            <div class="directory-top">

                                <h3 class="directory-title">
                                    Jangaon
                                </h3>

                                <span class="card-number">
                                    03
                                </span>

                            </div>

                            <div class="directory-body">

                                <p class="person-row">

                                    <span class="person-label">
                                        Deanary-1 :
                                    </span>

                                    <span class="person-name">
                                        Fr. P. Raja
                                    </span>

                                </p>

                                <p class="person-row">

                                    <span class="person-label">
                                        Deanary-2 :
                                    </span>

                                    <span class="person-name">
                                        Fr. Y. Thomas Kiran
                                    </span>

                                </p>

                            </div>

                            <div class="directory-footer">

                                <p class="footer-text">
                                    Deaneries Group-1
                                </p>

                            </div>

                        </div>

                    </div>


                    <!-- OOKAL -->

                    <div class="col-xl-3 col-lg-6 col-md-6">

                        <div class="directory-card deanery-card">

                            <div class="directory-top">

                                <h3 class="directory-title">
                                    Ookal
                                </h3>

                                <span class="card-number">
                                    04
                                </span>

                            </div>

                            <div class="directory-body">

                                <p class="person-row">

                                    <span class="person-label">
                                        Deanary-1 :
                                    </span>

                                    <span class="person-name">
                                        Fr. T. Yaga
                                    </span>

                                </p>

                                <p class="person-row">

                                    <span class="person-label">
                                        Deanary-2 :
                                    </span>

                                    <span class="person-name">
                                        Fr. Kasu Showreddy
                                    </span>

                                </p>

                            </div>

                            <div class="directory-footer">

                                <p class="footer-text">
                                    Deaneries Group-1
                                </p>

                            </div>

                        </div>

                    </div>


                    <!-- MAHABUBABAD -->

                    <div class="col-xl-3 col-lg-6 col-md-6">

                        <div class="directory-card deanery-card">

                            <div class="directory-top">

                                <h3 class="directory-title">
                                    Mahabubabad
                                </h3>

                                <span class="card-number">
                                    05
                                </span>

                            </div>

                            <div class="directory-body">

                                <p class="person-row">

                                    <span class="person-label">
                                        Deanary-1 :
                                    </span>

                                    <span class="person-name">
                                        Fr. T. Kiran
                                    </span>

                                </p>

                                <p class="person-row">

                                    <span class="person-label">
                                        Deanary-2 :
                                    </span>

                                    <span class="person-name">
                                        Fr. Y. Chinnappa
                                    </span>

                                </p>

                            </div>

                            <div class="directory-footer">

                                <p class="footer-text">
                                    Deaneries Group-1
                                </p>

                            </div>

                        </div>

                    </div>


                    <!-- KARUNAPURAM -->

                    <div class="col-xl-3 col-lg-6 col-md-6">

                        <div class="directory-card deanery-card">

                            <div class="directory-top">

                                <h3 class="directory-title">
                                    Karunapuram
                                </h3>

                                <span class="card-number">
                                    06
                                </span>

                            </div>

                            <div class="directory-body">

                                <p class="person-row">

                                    <span class="person-label">
                                        Deanary-1 :
                                    </span>

                                    <span class="person-name">
                                        Fr. G. Prakash
                                    </span>

                                </p>

                                <p class="person-row">

                                    <span class="person-label">
                                        Deanary-2 :
                                    </span>

                                    <span class="person-name">
                                        Fr. D. Joseph
                                    </span>

                                </p>

                            </div>

                            <div class="directory-footer">

                                <p class="footer-text">
                                    Deaneries Group-1
                                </p>

                            </div>

                        </div>

                    </div>


                    <!-- EX-OFFICIO -->

                    <div class="col-xl-3 col-lg-6 col-md-6">

                        <div class="directory-card deanery-card ex-officio">

                            <div class="directory-top">

                                <h3 class="directory-title">
                                    Ex-Officio
                                </h3>

                                <span class="card-number">
                                    07
                                </span>

                            </div>

                            <div class="directory-body">

                                <p class="person-row">

                                    <span class="person-label">
                                        Deanary-1 :
                                    </span>

                                    <span class="person-name">
                                        Fr. K. Joseph
                                    </span>

                                </p>

                                <p class="person-row">

                                    <span class="person-label">
                                        Deanary-2 :
                                    </span>

                                    <span class="person-name">
                                        Chancellor
                                    </span>

                                </p>

                                <p class="person-row">

                                    <span class="person-label">
                                        Deanary-3 :
                                    </span>

                                    <span class="person-name">
                                        Fr. G. Kamal
                                    </span>

                                </p>

                                <p class="person-row">

                                    <span class="person-label">
                                        Deanary-4 :
                                    </span>

                                    <span class="person-name">
                                        Pastoral Centre Director
                                    </span>

                                </p>

                                <p class="person-row">

                                    <span class="person-label">
                                        Deanary-5 :
                                    </span>

                                    <span class="person-name">
                                        Fr. M. Rajarathnam-HGN-CRI President
                                    </span>

                                </p>

                            </div>

                            <div class="directory-footer">

                                <p class="footer-text">
                                    Deaneries Group-1
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

    </main>


    <!-- Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>


    <?php include __DIR__ . '/footer.php'; ?>