<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diocese of Warangal</title>
    <?php include __DIR__ . '/header-links.php'; ?>
        <?php include __DIR__ . '/header.php'; ?>

    <style>

        /* ==============================
           GENERAL
        ============================== */

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            background: #f3f8f7;
            color: #333333;
            font-family: "Poppins", sans-serif;
        }


        /* ==============================
           SHRINE SECTION
        ============================== */

        .shrine-section {
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }

        .shrine-section::before {
            content: "";
            position: absolute;
            width: 420px;
            height: 420px;
            border-radius: 50%;
            background: rgba(8, 127, 91, 0.08);
            top: -180px;
            left: -180px;
        }

        .shrine-section::after {
            content: "";
            position: absolute;
            width: 350px;
            height: 350px;
            border-radius: 50%;
            background: rgba(18, 97, 160, 0.07);
            bottom: -150px;
            right: -120px;
        }


        /* ==============================
           SECTION HEADING
        ============================== */

        .shrine-main-heading {
            position: relative;
            z-index: 2;
            margin: 0 0 40px;
            text-align: center;
            color: #087f5b;
            font-family: "Poppins", sans-serif;
            font-size: 40px;
            font-weight: 700;
            line-height: 1.2;
        }


        /* ==============================
           MAIN CARD
        ============================== */

        .shrine-card {
            position: relative;
            z-index: 2;
            background: #ffffff;
            border-radius: 22px;
            overflow: hidden;
            box-shadow: 0 15px 50px rgba(0, 60, 80, 0.12);
        }


        /* ==============================
           IMAGE
        ============================== */

        .shrine-image-wrapper {
            position: relative;
            height: 100%;
            min-height: 540px;
            overflow: hidden;
        }

        .shrine-image {
            width: 100%;
            height: 100%;
            min-height: 540px;
            object-fit: cover;
            display: block;
        }

        .shrine-image-wrapper::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(
                to top,
                rgba(0, 70, 55, 0.78),
                rgba(0, 70, 55, 0.05) 65%
            );
        }


        /* ==============================
           IMAGE CAPTION
        ============================== */

        .image-caption {
            position: absolute;
            z-index: 3;
            bottom: 30px;
            left: 30px;
            right: 30px;
            color: #ffffff;
        }

        .image-caption span {
            display: inline-block;
            font-size: 12px;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 8px;
            color: #8fd3c1;
            font-weight: 600;
        }

        .image-caption h3 {
            margin: 0;
            font-family: "Playfair Display", serif;
            font-size: 32px;
            font-weight: 700;
        }


        /* ==============================
           CONTENT
        ============================== */

        .shrine-content {
            padding: 55px 55px 50px;
            height: 100%;
            position: relative;
        }


        /* ==============================
           SECTION LABEL
        ============================== */

        .section-label {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            color: #087f5b;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 15px;
        }

        .section-label::before {
            content: "";
            width: 35px;
            height: 2px;
            background: #1261a0;
        }


        /* ==============================
           MAIN HEADING
        ============================== */

        .shrine-content h1 {
            margin: 0 0 25px;
            color: #064d3d;
            font-family: "Playfair Display", serif;
            font-size: 44px;
            line-height: 1.2;
            font-weight: 700;
        }


        /* ==============================
           INFO BOX
        ============================== */

        .info-box {
            display: flex;
            align-items: flex-start;
            gap: 16px;
            padding: 18px;
            margin-bottom: 15px;
            border-radius: 12px;
            background: linear-gradient(
                135deg,
                #e8f6f1,
                #eaf3fb
            );
            border-left: 4px solid #087f5b;
        }


        /* ==============================
           ICON
        ============================== */

        .info-icon {
            width: 45px;
            height: 45px;
            min-width: 45px;
            border-radius: 50%;
            background: linear-gradient(
                135deg,
                #087f5b,
                #1261a0
            );
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 17px;
        }


        /* ==============================
           INFO TEXT
        ============================== */

        .info-text small {
            display: block;
            margin-bottom: 3px;
            color: #1261a0;
            font-size: 11px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1.5px;
        }

        .info-text strong {
            color: #164638;
            font-size: 0.95rem;
            font-weight: 600;
        }


        /* ==============================
           DIVIDER
        ============================== */

        .gold-divider {
            display: flex;
            align-items: center;
            gap: 12px;
            margin: 28px 0;
        }

        .gold-divider::before,
        .gold-divider::after {
            content: "";
            height: 1px;
            background: #b8d9d0;
            flex: 1;
        }

        .gold-divider i {
            color: #1261a0;
            font-size: 14px;
        }


        /* ==============================
           DESCRIPTION
        ============================== */

        .description {
            color: #5c6967;
            font-size: 0.95rem;
            line-height: 1.9;
            margin: 0;
        }


        /* ==============================
           YEAR BADGE
        ============================== */

        .year-badge {
            position: absolute;
            top: 35px;
            right: 35px;
            width: 72px;
            height: 72px;
            border-radius: 50%;
            border: 2px solid #087f5b;
            background: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #1261a0;
            font-size: 11px;
            line-height: 1.3;
            font-weight: 600;
            box-shadow: 0 5px 15px rgba(8, 127, 91, 0.12);
        }

        .year-badge strong {
            display: block;
            font-size: 15px;
            color: #087f5b;
        }


        /* ==============================
           LARGE TABLET
        ============================== */

        @media (max-width: 1199px) {

            .shrine-content {
                padding: 45px 40px;
            }

            .shrine-content h1 {
                font-size: 40px;
            }

            .shrine-image-wrapper,
            .shrine-image {
                min-height: 500px;
            }
        }


        /* ==============================
           TABLET
        ============================== */

        @media (max-width: 991px) {

            .shrine-section {
                padding: 60px 20px;
            }

            .shrine-main-heading {
                font-size: 40px;
                margin-bottom: 35px;
            }

            .shrine-image-wrapper {
                min-height: 430px;
            }

            .shrine-image {
                min-height: 430px;
            }

            .shrine-content {
                padding: 45px 40px;
            }

            .shrine-content h1 {
                font-size: 38px;
            }

            .year-badge {
                top: 25px;
                right: 25px;
            }
        }


        /* ==============================
           MOBILE
        ============================== */

        @media (max-width: 767px) {

            .shrine-section {
                padding: 40px 15px;
            }

            .shrine-main-heading {
                font-size: 34px;
                margin-bottom: 30px;
            }

            .shrine-card {
                border-radius: 16px;
            }

            .shrine-image-wrapper {
                min-height: 350px;
            }

            .shrine-image {
                min-height: 350px;
            }

            .image-caption {
                bottom: 22px;
                left: 22px;
                right: 22px;
            }

            .image-caption h3 {
                font-size: 26px;
            }

            .shrine-content {
                padding: 35px 25px;
            }

            .shrine-content h1 {
                font-size: 32px;
                padding-right: 65px;
            }

            .description {
                font-size: 0.95rem;
                line-height: 1.8;
            }

            .year-badge {
                width: 60px;
                height: 60px;
                top: 25px;
                right: 20px;
                font-size: 9px;
            }

            .year-badge strong {
                font-size: 13px;
            }
        }


        /* ==============================
           SMALL MOBILE
        ============================== */

        @media (max-width: 480px) {

            .shrine-section {
                padding: 30px 10px;
            }

            .shrine-main-heading {
                font-size: 30px;
                margin-bottom: 25px;
            }

            .shrine-image-wrapper {
                min-height: 300px;
            }

            .shrine-image {
                min-height: 300px;
            }

            .image-caption {
                bottom: 18px;
                left: 18px;
                right: 18px;
            }

            .image-caption span {
                font-size: 10px;
                letter-spacing: 1.5px;
            }

            .image-caption h3 {
                font-size: 23px;
            }

            .shrine-content {
                padding: 30px 20px;
            }

            .section-label {
                font-size: 11px;
                letter-spacing: 1.5px;
            }

            .section-label::before {
                width: 25px;
            }

            .shrine-content h1 {
                font-size: 28px;
                margin-bottom: 22px;
            }

            .info-box {
                padding: 14px;
                gap: 12px;
            }

            .info-icon {
                width: 40px;
                height: 40px;
                min-width: 40px;
                font-size: 15px;
            }

            .info-text small {
                font-size: 10px;
            }

            .info-text strong {
                font-size: 0.95rem;
                line-height: 1.5;
            }

            .description {
                font-size: 0.95rem;
                line-height: 1.8;
            }

            .gold-divider {
                margin: 23px 0;
            }
        }


        /* ==============================
           EXTRA SMALL DEVICES
        ============================== */

        @media (max-width: 360px) {

            .shrine-section {
                padding: 20px 8px;
            }

            .shrine-main-heading {
                font-size: 28px;
                margin-bottom: 22px;
            }

            .shrine-content {
                padding: 25px 16px;
            }

            .shrine-content h1 {
                font-size: 25px;
            }

            .shrine-image-wrapper,
            .shrine-image {
                min-height: 270px;
            }

            .year-badge {
                width: 55px;
                height: 55px;
                right: 15px;
                top: 18px;
            }

            .info-box {
                padding: 12px;
            }

            .info-icon {
                width: 37px;
                height: 37px;
                min-width: 37px;
            }
        }

    </style>

</head>


<body>


    <!-- ==============================
         DIOCESAN SHRINES
    ============================== -->

    <section class="shrine-section">

        <div class="container">


            <!-- MAIN SECTION HEADING -->

            <h2 class="shrine-main-heading">
                Diocesan Shrines
            </h2>


            <div class="shrine-card">

                <div class="row g-0 align-items-stretch">


                    <!-- SHRINE IMAGE -->

                    <div class="col-lg-6">

                        <div class="shrine-image-wrapper">

                            <img src="https://i.postimg.cc/Pqzvb6F2/bishop.png"
                                alt="Shrine Image"
                                class="shrine-image">

                            <div class="image-caption">

                                <span>
                                    Diocesan Shrines
                                </span>

                                <h3>
                                    Our Lady of Velankanni
                                </h3>

                            </div>

                        </div>

                    </div>


                    <!-- SHRINE CONTENT -->

                    <div class="col-lg-6">

                        <div class="shrine-content">


                            <!-- YEAR BADGE -->

                            <div class="year-badge">

                                <div>

                                    <strong>
                                        1987
                                    </strong>

                                    Blessed

                                </div>

                            </div>


                            <!-- SECTION LABEL -->

                            <div class="section-label">
                                Diocesan Shrines
                            </div>


                            <!-- SHRINE TITLE -->

                            <h1>
                                Our Lady of Velankanni
                            </h1>


                            <!-- ADDRESS -->

                            <div class="info-box">

                                <div class="info-icon">

                                    <i class="fa-solid fa-location-dot"></i>

                                </div>

                                <div class="info-text">

                                    <small>
                                        Address
                                    </small>

                                    <strong>
                                        Velankanni Nagar (Diesel Colony)
                                    </strong>

                                </div>

                            </div>


                            <!-- PATRON -->

                            <div class="info-box">

                                <div class="info-icon">

                                    <i class="fa-solid fa-church"></i>

                                </div>

                                <div class="info-text">

                                    <small>
                                        Patron
                                    </small>

                                    <strong>
                                        Our Lady of Velankanni
                                    </strong>

                                </div>

                            </div>


                            <!-- DIVIDER -->

                            <div class="gold-divider">

                                <i class="fa-solid fa-cross"></i>

                            </div>


                            <!-- DESCRIPTION -->

                            <p class="description">

                                Velankanni Nagar is 1km from the Kazipet parish church. One acre of land was bought by Fr. Lino Dal Balcon. His successor, Fr. Antonello, built a small chapel, which was dedicated to Our Lady of Velankanni. It was blessed by Most Rev. Thumma Bala on 5th September, 1987. Every first Saturday of the month, and especially on 8th September, many devotees gather to honour Our Lady. Thus, the locality is called Velankanni Nagar also.

                            </p>


                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

    <?php include __DIR__ . '/footer.php'; ?>