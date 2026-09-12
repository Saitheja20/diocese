<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diocese of Warangal</title>
    <?php include __DIR__ . '/header-links.php'; ?>


        <?php include __DIR__ . '/header.php'; ?>



                     <style>
                        

            /* college of consultors css */

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            background: transparent;
            font-family: "Poppins", sans-serif;
            overflow-x: hidden;
        }

        .consultors-section {
            padding: 30px 0;
            width: 100%;
        }

        .consultors-section .container {
            width: 100%;
        }


        .consultors-section .row {
            width: 100%;
            margin-left: 0;
            margin-right: 0;
        }

        .consultors-section .row > div {
            display: flex;
        }

        .consultor-card {
            width: 100%;
            min-width: 0;
            background: #ffffff;
            border: 1px solid #eeeeee;
            border-radius: 12px;
            padding: 25px 18px;
            height: 100%;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            transition: 0.3s ease;
            overflow: hidden;
        }

        .consultor-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
        }

        .consultor-img {
            width: 120px;
            height: 120px;
            max-width: 100%;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid #f39c12;
            padding: 3px;
            margin-bottom: 15px;
            transition: 0.4s ease;
            position: relative;
    left: 66px;

        }

        .consultor-card:hover .consultor-img {
            transform: scale(1.05);
        }

        .consultor-name {
            color: #d35400;
            font-size: 15px;
            font-weight: 500;
            line-height: 1.4;
            margin-bottom: 8px;
            overflow-wrap: anywhere;
        }

        .designation {
            color: black;
            font-size: 15px;
            line-height: 1.5;
            min-height: 45px;
            margin-bottom: 15px;
            overflow-wrap: anywhere;
        }

        .contact-info {
            width: 100%;
            font-size: 15px;
            line-height: 1.5;
            margin-bottom: 8px;
            overflow-wrap: anywhere;
            word-break: break-word;
        }

        .contact-info i {
            color: #d35400;
            width: 20px;
        }

        .contact-info a {
            color: black;
            text-decoration: none;
            overflow-wrap: anywhere;
            word-break: break-word;
        }

        .contact-info a:hover {
            color: #d35400;
        }


        /* Extra Large Screens */

        @media (min-width: 1400px) {

            .consultors-section {
                padding-left: 30px;
                padding-right: 30px;
            }

        }


        /* Large Screens */

        @media (min-width: 992px) and (max-width: 1399.98px) {

            .consultor-card {
                padding: 22px 15px;
            }

            .consultor-img {
                width: 110px;
                height: 110px;
            }

        }


        /* Tablet */

        @media (min-width: 576px) and (max-width: 991.98px) {

            .consultors-section {
                padding: 25px 15px;
            }

            .consultor-card {
                padding: 22px 15px;
            }

            .consultor-img {
                width: 105px;
                height: 105px;
            }

            .consultor-name {
                font-size: 15px;
            }

            .designation {
                font-size: 14px;
            }

            .contact-info {
                font-size: 13px;
            }
                .consultor-img {
                        position: relative;
    left: 78px;
                }
        }


        /* Mobile */

        @media (max-width: 575.98px) {

            .consultors-section {
                padding: 20px 10px;
            }

            .about-heading {
                margin-bottom: 25px;
            }

            .about-heading h1 {
                font-size: 21px;
                line-height: 1.4;
            }

            .heading-line {
                width: 60px;
                height: 2px;
            }

            .consultor-card {
                padding: 22px 15px;
            }

            .consultor-img {
                width: 105px;
                height: 105px;
            }

            .consultor-name {
                font-size: 15px;
            }

            .designation {
                font-size: 14px;
                min-height: auto;
            }

            .contact-info {
                font-size: 13px;
            }
    .consultor-img {
        
    position: relative;
    left: 100px;
}
        }


        /* Very Small Mobile */

        @media (max-width: 360px) {

            .consultors-section {
                padding-left: 8px;
                padding-right: 8px;
            }

            .about-heading h1 {
                font-size: 19px;
            }

            .consultor-card {
                padding: 20px 12px;
            }

            .consultor-img {
                width: 95px;
                height: 95px;
            }

            .consultor-name {
                font-size: 14px;
            }

            .designation {
                font-size: 13px;
            }

            .contact-info {
                font-size: 12px;
            }

        }

                     </style>                                                         

</head>


<body>


    <!-- =========================================
         WARANGAL DIOCESAN COLLEGE OF CONSULTORS
    ========================================== -->

    <section class="consultors-section">

        <div class="container">


            <!-- ================= HEADING ================= -->

            <div class="about-heading"
                data-aos="fade-down"
                data-aos-duration="1000">

                <h1>
                    WARANGAL DIOCESAN COLLEGE OF CONSULTORS
                </h1>

                <div class="heading-line"></div>

            </div>


            <!-- ================= CARDS ================= -->

            <div class="row g-4 justify-content-center">


                <!-- CARD 1 -->

                <div class="col-12 col-sm-6 col-lg-4 col-xl-3"
                    data-aos="fade-up"
                    data-aos-delay="100">

                    <div class="consultor-card">

                        <img src="https://i.postimg.cc/Pqzvb6F2/bishop.png"
                            class="consultor-img"
                            alt="Fr. Kommareddy Joseph">

                        <h3 class="consultor-name">
                            Fr. Kommareddy Joseph
                        </h3>

                        <p class="designation">
                            Chancellor & Secretary (Ex-officio)
                        </p>

                        <div class="contact-info">
                            <i class="fa-solid fa-envelope"></i>
                            <a href="mailto:josephreddy24@gmail.com">
                                josephreddy24@gmail.com
                            </a>
                        </div>

                        <div class="contact-info">
                            <i class="fa-solid fa-phone"></i>
                            <a href="tel:8977141594">
                                8977141594
                            </a>
                        </div>

                    </div>

                </div>


                <!-- CARD 2 -->

                <div class="col-12 col-sm-6 col-lg-4 col-xl-3"
                    data-aos="fade-up"
                    data-aos-delay="200">

                    <div class="consultor-card">

                        <img src="https://i.postimg.cc/Pqzvb6F2/bishop.png"
                            class="consultor-img"
                            alt="Fr. Duggimpudi Vijaya Paul">

                        <h3 class="consultor-name">
                            Fr. Duggimpudi Vijaya Paul
                        </h3>

                        <p class="designation">
                            Director of CJITS, Jangaon
                        </p>

                        <div class="contact-info">
                            <i class="fa-solid fa-envelope"></i>
                            <a href="mailto:frvijayapaul@gmail.com">
                                frvijayapaul@gmail.com
                            </a>
                        </div>

                        <div class="contact-info">
                            <i class="fa-solid fa-phone"></i>
                            <a href="tel:9866348580">
                                9866348580
                            </a>
                        </div>

                    </div>

                </div>


                <!-- CARD 3 -->

                <div class="col-12 col-sm-6 col-lg-4 col-xl-3"
                    data-aos="fade-up"
                    data-aos-delay="300">

                    <div class="consultor-card">

                        <img src="https://i.postimg.cc/Pqzvb6F2/bishop.png"
                            class="consultor-img"
                            alt="Fr. Golamari Martin">

                        <h3 class="consultor-name">
                            Fr. Golamari Martin
                        </h3>

                        <p class="designation">
                            Director of FCT
                        </p>

                        <div class="contact-info">
                            <i class="fa-solid fa-envelope"></i>
                            <a href="mailto:golamaribmartin@rediffmail.com">
                                golamaribmartin@rediffmail.com
                            </a>
                        </div>

                        <div class="contact-info">
                            <i class="fa-solid fa-phone"></i>
                            <a href="tel:8985641994">
                                8985641994
                            </a>
                        </div>

                    </div>

                </div>


                <!-- CARD 4 -->

                <div class="col-12 col-sm-6 col-lg-4 col-xl-3"
                    data-aos="fade-up"
                    data-aos-delay="400">

                    <div class="consultor-card">

                        <img src="https://i.postimg.cc/Pqzvb6F2/bishop.png"
                            class="consultor-img"
                            alt="Fr. Thatikonda Joseph">

                        <h3 class="consultor-name">
                            Fr. Thatikonda Joseph
                        </h3>

                        <p class="designation">
                            Director-Pastoral Centre
                        </p>

                        <div class="contact-info">
                            <i class="fa-solid fa-envelope"></i>
                            <a href="mailto:josephtatikonda@gmail.com">
                                josephtatikonda@gmail.com
                            </a>
                        </div>

                        <div class="contact-info">
                            <i class="fa-solid fa-phone"></i>
                            <a href="tel:9652615620">
                                9652615620
                            </a>
                        </div>

                    </div>

                </div>


                <!-- CARD 5 -->

                <div class="col-12 col-sm-6 col-lg-4 col-xl-3"
                    data-aos="fade-up"
                    data-aos-delay="500">

                    <div class="consultor-card">

                        <img src="https://i.postimg.cc/Pqzvb6F2/bishop.png"
                            class="consultor-img"
                            alt="Fr. Eedara Vijay">

                        <h3 class="consultor-name">
                            Fr. Eedara Vijay
                        </h3>

                        <p class="designation">
                            H.M & Correspondent of St. Joseph’s High School, Husnabad
                        </p>

                        <div class="contact-info">
                            <i class="fa-solid fa-envelope"></i>
                            <a href="mailto:edaravijayreddy@gmail.com">
                                edaravijayreddy@gmail.com
                            </a>
                        </div>

                        <div class="contact-info">
                            <i class="fa-solid fa-phone"></i>
                            <a href="tel:9948026785">
                                9948026785
                            </a>
                        </div>

                    </div>

                </div>


                <!-- CARD 6 -->

                <div class="col-12 col-sm-6 col-lg-4 col-xl-3"
                    data-aos="fade-up"
                    data-aos-delay="600">

                    <div class="consultor-card">

                        <img src="https://i.postimg.cc/Pqzvb6F2/bishop.png"
                            class="consultor-img"
                            alt="Fr. Thumma Santhosh">

                        <h3 class="consultor-name">
                            Fr. Thumma Santhosh
                        </h3>

                        <p class="designation">
                            H.M & Correspondent of St. Alphonse, Karimnagar
                        </p>

                        <div class="contact-info">
                            <i class="fa-solid fa-envelope"></i>
                            <a href="mailto:thummasanthoshreddy@gmail.com">
                                thummasanthoshreddy@gmail.com
                            </a>
                        </div>

                        <div class="contact-info">
                            <i class="fa-solid fa-phone"></i>
                            <a href="tel:7893454363">
                                7893454363
                            </a>
                        </div>

                    </div>

                </div>


                <!-- CARD 7 -->

                <div class="col-12 col-sm-6 col-lg-4 col-xl-3"
                    data-aos="fade-up"
                    data-aos-delay="700">

                    <div class="consultor-card">

                        <img src="https://i.postimg.cc/Pqzvb6F2/bishop.png"
                            class="consultor-img"
                            alt="Fr. M. Rajarathnam, HGN">

                        <h3 class="consultor-name">
                            Fr. M. Rajarathnam, HGN
                        </h3>

                        <p class="designation">
                            Pastor- Ippagudem Mission
                        </p>

                        <div class="contact-info">
                            <i class="fa-solid fa-envelope"></i>
                            <a href="mailto:frrajarathnam@gmail.com">
                                frrajarathnam@gmail.com
                            </a>
                        </div>

                        <div class="contact-info">
                            <i class="fa-solid fa-phone"></i>
                            <a href="tel:8639539299">
                                8639539299
                            </a>
                        </div>

                    </div>

                </div>


            </div>

        </div>

    </section>


    <!-- Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
    </script>


    <!-- AOS JS -->

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js">
    </script>


    <script>

        AOS.init({
            duration: 900,
            once: false,
            mirror: true,
            offset: 100
        });

    </script>


</body>


    <?php include __DIR__ . '/footer.php'; ?>