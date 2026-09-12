<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diocese of Warangal</title>
    <?php include __DIR__ . '/header-links.php'; ?>

    <!-- Bootstrap 5 CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
        rel="stylesheet">

    <!-- AOS CSS -->
    <link
        href="https://unpkg.com/aos@2.3.1/dist/aos.css"
        rel="stylesheet">
     

</head>

<style>

        /* =========================================
           CUSTOM HOME SECTION
        ========================================= */

        .customhome-section-x91 {
            width: 100%;
            padding: 80px 20px;
            background: #ffffff;
            overflow: hidden;
        }

        .customhome-container-x91 {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
        }

        .customhome-grid-x91 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            align-items: center;
            gap: 70px;
        }


        /* =========================================
           LEFT CONTENT
        ========================================= */

        .customhome-content-x91 {
            max-width: 530px;
        }

        .customhome-small-title-x91 {
            margin: 0 0 14px;
            font-family: Arial, sans-serif;
            font-size: 9px;
            font-weight: 600;
            line-height: 1.5;
            letter-spacing: 1.3px;
            text-transform: uppercase;
            color: #777777;
        }

        .customhome-heading-x91 {
            margin: 0 0 22px;
            font-family: Georgia, "Times New Roman", serif;
            font-size: 38px;
            font-weight: 600;
            line-height: 1.12;
            color: #202020;
        }

        .customhome-text-x91 {
            margin: 0 0 17px;
            font-family: Arial, sans-serif;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.7;
            color: #444444;
        }

        .customhome-text-x91:last-child {
            margin-bottom: 0;
        }


        /* =========================================
           IMAGE COLLAGE
        ========================================= */

        .customhome-gallery-x91 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: 1fr 1fr;
            gap: 12px;
            height: 390px;
        }

        .customhome-image-x91 {
            position: relative;
            width: 100%;
            height: 100%;
            overflow: hidden;
            border-radius: 2px;
        }

        .customhome-image-x91 img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .customhome-image-x91:hover img {
            transform: scale(1.05);
        }


        /* Top-left image */
        .customhome-image-one-x91 {
            grid-column: 1;
            grid-row: 1;
        }

        /* Bottom-left image */
        .customhome-image-two-x91 {
            grid-column: 1;
            grid-row: 2;
        }

        /* Tall right image */
        .customhome-image-three-x91 {
            grid-column: 2;
            grid-row: 1 / span 2;
        }


        /* =========================================
           LARGE TABLETS
        ========================================= */

        @media (max-width: 991px) {

            .customhome-section-x91 {
                padding: 65px 25px;
            }

            .customhome-grid-x91 {
                gap: 45px;
            }

            .customhome-heading-x91 {
                font-size: 32px;
            }

            .customhome-text-x91 {
                font-size: 13px;
            }

            .customhome-gallery-x91 {
                height: 340px;
                gap: 10px;
            }
        }


        /* =========================================
           TABLETS
        ========================================= */

        @media (max-width: 767px) {

            .customhome-section-x91 {
                padding: 55px 20px;
            }

            .customhome-grid-x91 {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .customhome-content-x91 {
                max-width: 100%;
            }

            .customhome-heading-x91 {
                font-size: 32px;
                max-width: 600px;
            }

            .customhome-text-x91 {
                max-width: 650px;
                font-size: 14px;
            }

            .customhome-gallery-x91 {
                width: 100%;
                height: 400px;
                max-width: 650px;
                margin: 0 auto;
            }
        }


        /* =========================================
           MOBILE
        ========================================= */

        @media (max-width: 575px) {

            .customhome-section-x91 {
                padding: 45px 16px;
            }

            .customhome-grid-x91 {
                gap: 32px;
            }

            .customhome-small-title-x91 {
                font-size: 8px;
                margin-bottom: 10px;
            }

            .customhome-heading-x91 {
                font-size: 27px;
                line-height: 1.18;
                margin-bottom: 18px;
            }

            .customhome-text-x91 {
                font-size: 13px;
                line-height: 1.65;
                margin-bottom: 14px;
            }

            .customhome-gallery-x91 {
                height: 300px;
                gap: 8px;
            }

            .customhome-image-x91 {
                border-radius: 2px;
            }
        }


        /* =========================================
           SMALL MOBILE
        ========================================= */

        @media (max-width: 380px) {

            .customhome-section-x91 {
                padding: 38px 14px;
            }

            .customhome-heading-x91 {
                font-size: 24px;
            }

            .customhome-text-x91 {
                font-size: 12px;
            }

            .customhome-gallery-x91 {
                height: 260px;
                gap: 7px;
            }
        }
@media (max-width: 767px) {

    .about-custom-row {
        display: flex;
        flex-direction: column;
        gap: 35px;
    }

    .about-custom-image-wrapper {
        order: 1;
        width: 100%;
    }

    .about-custom-content {
        order: 2;
        width: 100%;
    }

}


    </style>

<style>

/* =========================================
   CHURCH PAGE BANNER
========================================= */

.church-page-banner {
    position: relative;
    width: 100%;
    min-height: 330px;

    display: flex;
    align-items: center;

    background-image: url('<?= base_url('assets/img/banner-inner.webp') ?>');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;

    overflow: hidden;
}

/* Dark overlay */
.church-banner-overlay {
    position: absolute;
    inset: 0;

    /* background:
        linear-gradient(
            90deg,
            rgba(86, 10, 20, 0.90),
            rgba(0, 70, 45, 0.68)
        ); */

    z-index: 1;
}

/* Banner content */
.church-banner-content {
    position: relative;
    z-index: 2;

    padding: 85px 0 70px;
}

/* Main heading */
.church-banner-content h1 {
    margin: 0 0 22px;

    font-family: Arial, sans-serif;
    font-size: 48px;
    font-weight: 700;
    line-height: 1.2;

    color: #ffffff;

    text-transform: uppercase;
    letter-spacing: 1px;
}

/* =========================================
   BREADCRUMB
========================================= */

.church-breadcrumb {
    display: inline-block;

    padding: 11px 22px;

    border-radius: 4px;

    background: linear-gradient(
        90deg,
        #7b1024 0%,
        #9b2436 45%,
        #08734d 100%
    );

    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.18);
}

/* Remove Bootstrap default background */
.church-breadcrumb .breadcrumb {
    display: flex;
    align-items: center;
    flex-wrap: wrap;

    padding: 0;
}

/* Breadcrumb links */
.church-breadcrumb .breadcrumb-item a {
    color: #ffffff;
    text-decoration: none;

    font-size: 15px;
    font-weight: 500;

    transition: all 0.3s ease;
}

/* Hover */
.church-breadcrumb .breadcrumb-item a:hover {
    color: #f4d58d;
}

/* Active */
.church-breadcrumb .breadcrumb-item.active {
    color: #f4d58d;

    font-size: 15px;
    font-weight: 600;
}

/* Breadcrumb separator */
.church-breadcrumb .breadcrumb-item + .breadcrumb-item::before {
    color: rgba(255, 255, 255, 0.75);

    padding-right: 10px;
    padding-left: 10px;

    content: "/";
}

/* Home icon */
.church-breadcrumb i {
    margin-right: 6px;
    font-size: 13px;
}


/* =========================================
   TABLET
========================================= */

@media (max-width: 991px) {

    .church-page-banner {
        min-height: 290px;
    }

    .church-banner-content {
        padding: 70px 0 55px;
    }

    .church-banner-content h1 {
        font-size: 40px;
    }

}


/* =========================================
   MOBILE
========================================= */

@media (max-width: 767px) {

    .church-page-banner {
        min-height: 250px;

        background-position: center center;
    }

    .church-banner-content {
        padding: 60px 20px 45px;
    }

    .church-banner-content h1 {
        font-size: 32px;
        margin-bottom: 18px;
    }

    .church-breadcrumb {
        padding: 9px 15px;
        max-width: 100%;
    }

    .church-breadcrumb .breadcrumb-item a,
    .church-breadcrumb .breadcrumb-item.active {
        font-size: 13px;
    }

}


/* =========================================
   SMALL MOBILE
========================================= */

@media (max-width: 480px) {

    .church-page-banner {
        min-height: 220px;
    }

    .church-banner-content {
        padding: 50px 15px 38px;
    }

    .church-banner-content h1 {
        font-size: 27px;
        letter-spacing: 0.5px;
        margin-bottom: 15px;
    }

    .church-breadcrumb {
        padding: 8px 12px;
    }

    .church-breadcrumb .breadcrumb-item a,
    .church-breadcrumb .breadcrumb-item.active {
        font-size: 12px;
    }

    .church-breadcrumb .breadcrumb-item + .breadcrumb-item::before {
        padding-left: 7px;
        padding-right: 7px;
    }

}

</style>


<body>
    <?php include __DIR__ . '/header.php'; ?>


<!-- =========================
     CHURCH INNER PAGE BANNER
========================= -->
<section class="church-page-banner">

    <div class="church-banner-overlay"></div>

    <div class="container">
        <div class="church-banner-content">

            <h1>About Us</h1>

            <!-- Breadcrumb -->
            <nav class="church-breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="<?= base_url('/') ?>">
                            <i class="fa-solid fa-house"></i> Home
                        </a>
                    </li>

                    <li class="breadcrumb-item active" aria-current="page">
                        About Us
                    </li>
                </ol>
            </nav>

        </div>
    </div>

</section>



    <!-- =========================================
         CUSTOM HOME SECTION
    ========================================= -->

    <section class="customhome-section-x91">

        <div class="customhome-container-x91">

            <div class="customhome-grid-x91">


                <!-- =================================
                     LEFT CONTENT
                ================================== -->

                <div
                     class="dow-about-heading-text"
                    data-aos="fade-right"
                    data-aos-duration="1000"
                >

                   

                    <h2
                       
                        data-aos="fade-up"
                        data-aos-delay="200"
                    >
                        ORIGINS AND FORMATION OF THE DIOCESE OF WARANGAL
                    </h2>


                    <p
                         class="about-custom-description"
                        data-aos="fade-up"
                        data-aos-delay="300"
                    >
                        After the bifurcation of Vijayawada Diocese, Hyderabad Diocese was left with Telangana Districts. Of these, let us restrict our view to those that formed Warangal Diocese. The Hyderabad-Vijayawada Railway-line-work had brought a good number of Catholic Employees to the main Railway Junctions / Stations like Kazipet, Dornakal and Khammam. The Baptism Register kept at Kazipet reveals the presence of Catholic Community there since 1887.

                    </p>


                    <p
                         class="about-custom-description"
                        data-aos="fade-up"
                        data-aos-delay="400"
                    >
                        It was a mixed Community of Anglo-Indians, Telugus and Tamils, settled at the Railway Junction of Kazipet. Between 1890–1930 a good number of Catholic Families migrated from Guntur and other parts of Coastal Andhra to Telangana in search of good cultivable land for their livelihood. Wherever they found good black soil, they settled there

                    </p>

                </div>


                <!-- =================================
                     RIGHT IMAGE COLLAGE
                ================================== -->

                <div
                    class="customhome-gallery-x91"
                    data-aos="fade-left"
                    data-aos-duration="1200"
                >


                    <!-- TOP LEFT -->

                    <div
                        class="customhome-image-x91 customhome-image-one-x91"
                        data-aos="zoom-in"
                        data-aos-delay="150"
                    >

                        <img
                            src="assets/img/home-1.jpg"
                            alt="Custom Home Exterior"
                        >

                    </div>


                    <!-- BOTTOM LEFT -->

                    <div
                        class="customhome-image-x91 customhome-image-two-x91"
                        data-aos="zoom-in"
                        data-aos-delay="300"
                    >

                        <img
                            src="assets/img/home-2.jpg"
                            alt="Modern Custom Home"
                        >

                    </div>


                    <!-- RIGHT TALL IMAGE -->

                    <div
                        class="customhome-image-x91 customhome-image-three-x91"
                        data-aos="zoom-in"
                        data-aos-delay="450"
                    >

                        <img
                            src="assets/img/home-3.jpg"
                            alt="Custom Home Interior"
                        >

                    </div>

                </div>

            </div>

        </div>

    </section>

<section class="about-custom-section">

    <div class="about-custom-container">

        <div class="about-custom-row">

            <!-- LEFT IMAGE -->
            <div
                class="about-custom-image-wrapper"
                data-aos="fade-right"
                data-aos-duration="1100"
                data-aos-delay="150"
                data-aos-offset="100"
            >

                <div class="about-custom-image">

                    <img
                        src="assets/img/about-building.jpg"
                        alt="Crescent Development Building"
                    >

                </div>

            </div>


            <!-- RIGHT CONTENT -->
            <div
                class="about-custom-content"
                data-aos="fade-left"
                data-aos-duration="1000"
                data-aos-offset="100"
            >

           

                <p
                    class="about-custom-description"
                    data-aos="fade-up"
                    data-aos-delay="150"
                    data-aos-duration="800"
                >The early Missionaries helped these migrant Traditional Catholic Communities in their settlements and took care of their spiritual needs. Some of these Catholic Villages were erected into Parishes in course of time and were taken care of by PIME Missionaries of Milan, Italy.<br> Some of the Centers being already Parishes before the formation of the Diocese of Warangal are: Kazipet (1887), Byyaram (1901), Bhimaram (1905), Mattampally (1908), Kanchanapalli (1910), Vepala Singaram (1910), Wangamarthy (1914), Bhimanapally (1917), Monugodu (1919), Kethepally (1932), Khammam South (1933), Reddipalem (1933), Dornakal (1937), Narimetta (1939), Govindapuram (1942), Miryalaguda (1948), Kothagudem (1948), Thimmaraopet (1952), Bhanigandlapadu (1952), Thallada (1952).
                </p>

     <p
                    class="about-custom-description"
                    data-aos="fade-up"
                    data-aos-delay="150"
                    data-aos-duration="800"
                >While taking care of existing Catholics, being true to their missionary charism, the PIME Fathers engaged themselves in spreading the faith to others of the area and gradually won many people for Christ. The growth of Mission Centres and the number of the Faithful largely increased.</p>

              
            </div>

        </div>

    </div>

</section>





<section class="dio-simple-history">

    <div class="dio-simple-history-inner">

        <!-- Heading -->
        <div class="dio-simple-history-heading"
             data-aos="fade-up"
             data-aos-duration="900">

            <span>OUR HISTORY</span>

            <h2>
                The Beginning of the
                <strong>Diocese of Warangal</strong>
            </h2>

        </div>


        <!-- Content -->
        <div class="dio-simple-history-content">

            <!-- Date -->
            <div class="dio-simple-history-date"
                 data-aos="fade-right"
                 data-aos-duration="900">

                <div class="dio-simple-history-date-line"></div>

                <h3>1949</h3>

                <p>THE BEGINNING</p>

            </div>


            <!-- Text -->
            <div class="dio-simple-history-text"
                 data-aos="fade-left"
                 data-aos-duration="900">

                <p>
                    The plan of creating the new Diocese of Warangal was clear
                    already in 1949, when Msgr. Alphonsus Beretta PIME, the Vicar
                    Capitular of Hyderabad then, asked Fr. Gino Pazzaglini, the
                    then Parish Priest of Kazipet, to look for a site for the
                    future Diocesan Headquarters.
                </p>

                <p>
                    But shortly afterwards when he had to go to Italy, it was
                    Fr. Mariani, PIME, who was entrusted with the work. He, with
                    his efforts and prayers, bought <strong>71 acres of land</strong>
                    about 1½ kms from Kazipet and 11 kms from Warangal, which is
                    present Fatimanagar.
                </p>

                <p>
                    To take possession of the land, Bro. Sala Pasqualino, PIME,
                    was sent to Warangal on <strong>18th August 1949</strong>.
                    Except for a small hut, the whole area was like a semi forest.
                </p>

                <p>
                    On the next day, i.e. <strong>19th August 1949</strong>,
                    Bro. Sala pitched his tent on the ground that was destined
                    to become the heart of a new and flourishable Diocese.
                </p>

                <p>
                    If the procurement of the land was a great thing, the grant
                    of permission to utilise it for construction of Bishop’s
                    House and other buildings was a miracle.
                </p>


                <!-- Button -->
                <a href="https://www.warangaldiocese.com/images/Aboutus.pdf"
                   target="_blank"
                   rel="noopener"
                   class="dio-simple-history-btn"
                   data-aos="fade-up"
                   data-aos-duration="800">

                    Read More
                    <i class="bi bi-arrow-right"></i>

                </a>

            </div>

        </div>

    </div>

</section>

        <?php include __DIR__ . '/footer.php'; ?>



    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js">
    </script>


    <script>

        AOS.init({
            duration: 900,
            easing: 'ease-out-cubic',
            once: false,
            mirror: true,
            offset: 80
        });

    </script>

</body>
</html>



