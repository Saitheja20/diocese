
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diocese of Warangal</title>
    <?php include __DIR__ . '/header-links.php'; ?>


    <?php include __DIR__ . '/header.php'; ?>
<body>


    <style>

        /* =========================================
           COMMON
        ========================================== */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            width: 100%;
            overflow-x: hidden;
        }

        body {
            font-family: "Poppins", sans-serif;
            background: #ffffff;
        }


        /* =========================================
           VIDEO GALAXY SECTION
        ========================================== */

        .video-galaxy-section {
            width: 100%;
            padding: 80px 0;
            background: #ffffff;
        }


        /* =========================================
           HEADING
        ========================================== */

        .videogallery {
            width: 100%;
            text-align: center;
            margin-bottom: 45px;
        }

        .videogallery .title {
            font-family: "Poppins", sans-serif;
            font-size: 40px;
            font-weight: 700;
            color: #176b25;
            margin: 0;
        }

        .video-title-line {
            width: 65px;
            height: 3px;
            background: #9d2026;
            margin: 14px auto 0;
        }


        /* =========================================
           VIDEO CARD
        ========================================== */

        .video-card {
            position: relative;
            width: 100%;
            height: 100%;
            background: #ffffff;
            border: 1px solid #e4e4e4;
            border-radius: 12px;
            overflow: hidden;
            cursor: pointer;

            box-shadow: 0 5px 18px rgba(0, 0, 0, 0.08);

            transition: all 0.3s ease;
        }

        .video-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.13);
        }


        /* =========================================
           THUMBNAIL AREA
        ========================================== */

        .video-thumbnail {
            position: relative;
            width: 100%;
            aspect-ratio: 16 / 9;
            overflow: hidden;
            background: #eeeeee;
        }

        .video-thumbnail img {
            width: 100%;
            height: 100%;
            display: block;
            object-fit: cover;
        }


        /* =========================================
           PLAY OVERLAY
        ========================================== */

        .video-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;

            display: flex;
            justify-content: center;
            align-items: center;

            background: rgba(0, 0, 0, 0.18);

            transition: all 0.3s ease;
        }

        .video-card:hover .video-overlay {
            background: rgba(0, 0, 0, 0.30);
        }


        /* =========================================
           PLAY BUTTON
        ========================================== */

        .video-play-button {
            width: 62px;
            height: 62px;

            border-radius: 50%;

            background: #ffffff;

            display: flex;
            align-items: center;
            justify-content: center;

            color: #9d2026;

            font-size: 20px;

            padding-left: 4px;

            box-shadow: 0 5px 18px rgba(0, 0, 0, 0.25);

            transition: all 0.3s ease;
        }

        .video-card:hover .video-play-button {
            background: #9d2026;
            color: #ffffff;
            transform: scale(1.08);
        }


        /* =========================================
           CARD CONTENT
        ========================================== */

        .video-card-content {
            padding: 18px;
            min-height: 105px;
        }

        .video-card-content h6 {
            font-family: "Poppins", sans-serif;
            font-size: 17px;
            font-weight: 600;
            color: #176b25;
            margin-bottom: 7px;
        }

        .video-card-content p {
            font-family: "Poppins", sans-serif;
            font-size: 13px;
            font-weight: 400;
            color: #777777;
            line-height: 1.6;
            margin: 0;
        }


        /* =========================================
           DIRECT VIDEO CARD
        ========================================== */

        .direct-video-wrapper {
            position: relative;
            width: 100%;
            aspect-ratio: 16 / 9;
            overflow: hidden;
            background: #000000;
        }

        .direct-video-wrapper video {
            width: 100%;
            height: 100%;
            display: block;
            object-fit: cover;
        }

        .direct-video-overlay {
            position: absolute;
            inset: 0;

            display: flex;
            align-items: center;
            justify-content: center;

            background: rgba(0, 0, 0, 0.18);

            pointer-events: none;
        }


        /* =========================================
           MODAL
        ========================================== */

        .video-modal .modal-dialog {
            max-width: 1100px;
            margin: 1.75rem auto;
        }

        .video-modal .modal-content {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            background: #000000;
        }


        /* =========================================
           MODAL HEADER
        ========================================== */

        .video-modal-header {
            background: #111111;
            border: none;
            padding: 14px 20px;
        }

        .video-modal-title-area {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .video-modal-icon {
            width: 38px;
            height: 38px;
            flex-shrink: 0;

            border-radius: 50%;

            background: #ffffff;

            display: flex;
            align-items: center;
            justify-content: center;

            color: #176b25;
            font-size: 17px;
        }

        .video-modal-title {
            font-family: "Poppins", sans-serif;
            font-size: 17px;
            font-weight: 600;
            color: #ffffff;
            margin: 0;
        }

        .video-modal-channel {
            font-family: "Poppins", sans-serif;
            font-size: 11px;
            font-weight: 400;
            color: #bbbbbb;
            margin: 2px 0 0;
        }

        .video-modal-header .btn-close {
            background-color: #ffffff;
            opacity: 1;
            border-radius: 50%;
            padding: 7px;
        }


        /* =========================================
           YOUTUBE PLAYER
        ========================================== */

        .youtube-player-wrapper {
            position: relative;
            width: 100%;
            aspect-ratio: 16 / 9;
            background: #000000;
        }

        .youtube-player-wrapper iframe {
            position: absolute;
            top: 0;
            left: 0;

            width: 100%;
            height: 100%;

            border: 0;
        }


        /* =========================================
           MODAL FOOTER
        ========================================== */

        .video-modal-footer {
            background: #111111;
            padding: 10px 20px;
            border: none;
        }

        .video-modal-footer p {
            font-family: "Poppins", sans-serif;
            font-size: 12px;
            color: #bbbbbb;
            margin: 0;
        }


        /* =========================================
           DESKTOP
        ========================================== */

        @media (min-width: 1200px) {

            .video-galaxy-section {
                padding: 85px 0;
            }

        }


        /* =========================================
           LAPTOP
        ========================================== */

        @media (max-width: 1199.98px) {

            .video-galaxy-section {
                padding: 70px 0;
            }

            .videogallery .title {
                font-size: 38px;
            }

        }


        /* =========================================
           TABLET
        ========================================== */

        @media (max-width: 991.98px) {

            .video-galaxy-section {
                padding: 60px 0;
            }

            .videogallery {
                margin-bottom: 38px;
            }

            .videogallery .title {
                font-size: 34px;
            }

            .video-card-content {
                padding: 16px;
            }

            .video-card-content h6 {
                font-size: 16px;
            }

        }


        /* =========================================
           MOBILE
        ========================================== */

        @media (max-width: 767.98px) {

            .video-galaxy-section {
                padding: 50px 0;
            }

            .video-galaxy-section .container {
                width: 100%;
                max-width: 100%;
                padding-left: 10px;
                padding-right: 10px;
            }

            .videogallery {
                margin-bottom: 30px;
            }

            .videogallery .title {
                font-size: 30px;
            }

            .video-title-line {
                width: 55px;
                margin-top: 12px;
            }


            /* One card per row */

            .video-gallery-row {
                margin-left: 0;
                margin-right: 0;
            }

            .video-gallery-row > div {
                width: 100%;
                padding-left: 0;
                padding-right: 0;
                margin-bottom: 20px;
            }


            /* Card */

            .video-card {
                width: 100%;
                border-radius: 10px;
            }


            /* Thumbnail */

            .video-thumbnail {
                width: 100%;
                aspect-ratio: 16 / 9;
            }


            /* Play button */

            .video-play-button {
                width: 55px;
                height: 55px;
                font-size: 18px;
            }


            /* Content */

            .video-card-content {
                padding: 15px;
                min-height: auto;
            }

            .video-card-content h6 {
                font-size: 16px;
            }

            .video-card-content p {
                font-size: 13px;
            }


            /* Modal */

            .video-modal .modal-dialog {
                width: 100%;
                max-width: 100%;
                margin: 0;
            }

            .video-modal .modal-content {
                min-height: 100vh;
                border-radius: 0;
                justify-content: center;
            }

            .video-modal-header {
                padding: 12px 14px;
            }

            .video-modal-title {
                font-size: 15px;
            }

            .video-modal-channel {
                font-size: 10px;
            }

            .video-modal-icon {
                width: 34px;
                height: 34px;
                font-size: 15px;
            }

            .video-modal-footer {
                padding: 8px 14px;
            }

        }


        /* =========================================
           SMALL MOBILE
        ========================================== */

        @media (max-width: 575.98px) {

            .video-galaxy-section {
                padding: 45px 0;
            }

            .video-galaxy-section .container {
                padding-left: 8px;
                padding-right: 8px;
            }

            .videogallery .title {
                font-size: 28px;
            }

            .video-card-content h6 {
                font-size: 15px;
            }

            .video-card-content p {
                font-size: 12px;
            }

        }


        /* =========================================
           VERY SMALL MOBILE
        ========================================== */

        @media (max-width: 375px) {

            .video-galaxy-section {
                padding: 40px 0;
            }

            .video-galaxy-section .container {
                padding-left: 6px;
                padding-right: 6px;
            }

            .videogallery .title {
                font-size: 26px;
            }

            .video-play-button {
                width: 52px;
                height: 52px;
                font-size: 17px;
            }

        }


        /* =========================================
           REDUCE MOTION
        ========================================== */

        @media (prefers-reduced-motion: reduce) {

            .video-card,
            .video-play-button,
            .video-overlay {
                transition: none;
            }

        }

    </style>

</head>


<body>


<!-- =========================================
     VIDEO GALAXY
========================================= -->

<section class="video-galaxy-section">

    <div class="container">


        <!-- =====================================
             HEADING
        ====================================== -->

        <div class="videogallery"
             data-aos="fade-up">

            <h2 class="title">
                Video Galaxy
            </h2>

            <div class="video-title-line"></div>

        </div>


        <!-- =====================================
             VIDEO GRID
        ====================================== -->

        <div class="row g-4 video-gallery-row">


            <!-- =================================
                 VIDEO 1
            ================================== -->

            <div class="col-12 col-sm-6 col-lg-4"
                 data-aos="fade-up"
                 data-aos-delay="100">

                <div class="video-card"
                     data-bs-toggle="modal"
                     data-bs-target="#videoModal"
                     data-yt="https://www.youtube.com/embed/5BNGhmztq1g?autoplay=1&rel=0"
                     data-title="Big Buck Bunny"
                     data-description="AI-enhanced animation clip">


                    <div class="video-thumbnail">

                        <img src="https://i.postimg.cc/YqN0Z1pg/360-F-566409029-UJr-Cz-RSKLURNLTCz-Jj-ONUNk-Io-Dh-BLC5z.jpg"
                             alt="Big Buck Bunny">


                        <div class="video-overlay">

                            <div class="video-play-button">

                                <i class="fa-solid fa-play"></i>

                            </div>

                        </div>

                    </div>


                    <div class="video-card-content">

                        <h6>
                            Big Buck Bunny
                        </h6>

                        <p>
                            AI-enhanced animation clip
                        </p>

                    </div>

                </div>

            </div>


            <!-- =================================
                 VIDEO 2
            ================================== -->

            <div class="col-12 col-sm-6 col-lg-4"
                 data-aos="fade-up"
                 data-aos-delay="200">

                <div class="video-card"
                     data-bs-toggle="modal"
                     data-bs-target="#videoModal"
                     data-yt="https://www.youtube.com/embed/5BNGhmztq1g?autoplay=1&rel=0"
                     data-title="Big Buck Bunny"
                     data-description="AI-enhanced animation clip">


                    <div class="video-thumbnail">

                        <img src="https://i.postimg.cc/YqN0Z1pg/360-F-566409029-UJr-Cz-RSKLURNLTCz-Jj-ONUNk-Io-Dh-BLC5z.jpg"
                             alt="Big Buck Bunny">


                        <div class="video-overlay">

                            <div class="video-play-button">

                                <i class="fa-solid fa-play"></i>

                            </div>

                        </div>

                    </div>


                    <div class="video-card-content">

                        <h6>
                            Big Buck Bunny
                        </h6>

                        <p>
                            AI-enhanced animation clip
                        </p>

                    </div>

                </div>

            </div>


            <!-- =================================
                 VIDEO 3
            ================================== -->

            <div class="col-12 col-sm-6 col-lg-4"
                 data-aos="fade-up"
                 data-aos-delay="300">

                <div class="video-card"
                     data-bs-toggle="modal"
                     data-bs-target="#videoModal"
                     data-yt="https://www.youtube.com/embed/5BNGhmztq1g?autoplay=1&rel=0"
                     data-title="Big Buck Bunny"
                     data-description="AI-enhanced animation clip">


                    <div class="video-thumbnail">

                        <img src="https://i.postimg.cc/YqN0Z1pg/360-F-566409029-UJr-Cz-RSKLURNLTCz-Jj-ONUNk-Io-Dh-BLC5z.jpg"
                             alt="Big Buck Bunny">


                        <div class="video-overlay">

                            <div class="video-play-button">

                                <i class="fa-solid fa-play"></i>

                            </div>

                        </div>

                    </div>


                    <div class="video-card-content">

                        <h6>
                            Big Buck Bunny
                        </h6>

                        <p>
                            AI-enhanced animation clip
                        </p>

                    </div>

                </div>

            </div>


            <!-- =================================
                 VIDEO 4
            ================================== -->

            <div class="col-12 col-sm-6 col-lg-4"
                 data-aos="fade-up"
                 data-aos-delay="400">

                <div class="video-card"
                     data-bs-toggle="modal"
                     data-bs-target="#videoModal"
                     data-yt="https://www.youtube.com/embed/5BNGhmztq1g?autoplay=1&rel=0"
                     data-title="Big Buck Bunny"
                     data-description="AI-enhanced animation clip">


                    <div class="video-thumbnail">

                        <img src="https://i.postimg.cc/YqN0Z1pg/360-F-566409029-UJr-Cz-RSKLURNLTCz-Jj-ONUNk-Io-Dh-BLC5z.jpg"
                             alt="Big Buck Bunny">


                        <div class="video-overlay">

                            <div class="video-play-button">

                                <i class="fa-solid fa-play"></i>

                            </div>

                        </div>

                    </div>


                    <div class="video-card-content">

                        <h6>
                            Big Buck Bunny
                        </h6>

                        <p>
                            AI-enhanced animation clip
                        </p>

                    </div>

                </div>

            </div>


            <!-- =================================
                 VIDEO 5
            ================================== -->

            <div class="col-12 col-sm-6 col-lg-4"
                 data-aos="fade-up"
                 data-aos-delay="500">

                <div class="video-card"
                     data-bs-toggle="modal"
                     data-bs-target="#videoModal"
                     data-yt="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1&rel=0"
                     data-title="Nature Scene"
                     data-description="AI upscaled HD forest video">


                    <div class="video-thumbnail">

                        <img src="https://i.postimg.cc/YqN0Z1pg/360-F-566409029-UJr-Cz-RSKLURNLTCz-Jj-ONUNk-Io-Dh-BLC5z.jpg"
                             alt="Nature Scene">


                        <div class="video-overlay">

                            <div class="video-play-button">

                                <i class="fa-solid fa-play"></i>

                            </div>

                        </div>

                    </div>


                    <div class="video-card-content">

                        <h6>
                            Nature Scene
                        </h6>

                        <p>
                            AI upscaled HD forest video
                        </p>

                    </div>

                </div>

            </div>


            <!-- =================================
                 VIDEO 6
            ================================== -->

            <div class="col-12 col-sm-6 col-lg-4"
                 data-aos="fade-up"
                 data-aos-delay="600">

                <div class="video-card"
                     data-bs-toggle="modal"
                     data-bs-target="#videoModal"
                     data-yt="https://www.youtube.com/embed/a3ICNMQW7Ok?autoplay=1&rel=0"
                     data-title="AI Future"
                     data-description="Artificial Intelligence vision video">


                    <div class="video-thumbnail">

                        <img src="https://i.postimg.cc/Pr0jwT8K/ai-video-thumb.jpg"
                             alt="AI Future">


                        <div class="video-overlay">

                            <div class="video-play-button">

                                <i class="fa-solid fa-play"></i>

                            </div>

                        </div>

                    </div>


                    <div class="video-card-content">

                        <h6>
                            AI Future
                        </h6>

                        <p>
                            Artificial Intelligence vision video
                        </p>

                    </div>

                </div>

            </div>


        </div>

    </div>

</section>



<!-- =========================================
     VIDEO MODAL
========================================= -->

<div class="modal fade video-modal"
     id="videoModal"
     tabindex="-1"
     aria-hidden="true">


    <div class="modal-dialog modal-dialog-centered">


        <div class="modal-content">


            <!-- =================================
                 MODAL HEADER
            ================================== -->

            <div class="modal-header video-modal-header">


                <div class="video-modal-title-area">


                    <div class="video-modal-icon">

                        <i class="fa-solid fa-play"></i>

                    </div>


                    <div>

                        <h5 class="video-modal-title"
                            id="videoModalTitle">

                            Video

                        </h5>


                        <p class="video-modal-channel">

                            Warangal Diocese

                        </p>

                    </div>


                </div>


                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close">
                </button>


            </div>


            <!-- =================================
                 YOUTUBE VIDEO
            ================================== -->

            <div class="youtube-player-wrapper">

                <iframe id="youtubePlayer"
                        src=""
                        title="YouTube video player"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen>
                </iframe>

            </div>


            <!-- =================================
                 MODAL FOOTER
            ================================== -->

            <div class="video-modal-footer">

                <p id="videoModalDescription">
                    Video
                </p>

            </div>


        </div>

    </div>

</div>



<!-- =========================================
     BOOTSTRAP JS
========================================= -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>


<!-- =========================================
     AOS JS
========================================= -->

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>



<!-- =========================================
     JAVASCRIPT
========================================= -->

<script>


    /* =========================================
       AOS
    ========================================== */

    AOS.init({

        duration: 800,

        once: false,

        offset: 80

    });



    /* =========================================
       VIDEO MODAL
    ========================================== */

    const videoModal =
        document.getElementById("videoModal");


    const youtubePlayer =
        document.getElementById("youtubePlayer");


    const videoModalTitle =
        document.getElementById("videoModalTitle");


    const videoModalDescription =
        document.getElementById("videoModalDescription");



    /* =========================================
       WHEN VIDEO CARD IS CLICKED
    ========================================== */

    document.querySelectorAll(".video-card")
        .forEach(function(card) {


            card.addEventListener(
                "click",
                function() {


                    /* Get YouTube URL */

                    const videoUrl =
                        card.getAttribute("data-yt");


                    /* Get title */

                    const title =
                        card.getAttribute("data-title");


                    /* Get description */

                    const description =
                        card.getAttribute("data-description");


                    /* Set title */

                    videoModalTitle.innerText =
                        title;


                    /* Set description */

                    videoModalDescription.innerText =
                        description;


                    /* Set YouTube video */

                    youtubePlayer.src =
                        videoUrl;

                }
            );

        });



    /* =========================================
       WHEN MODAL CLOSES
       STOP VIDEO
    ========================================== */

    videoModal.addEventListener(
        "hidden.bs.modal",
        function() {


            /* Remove YouTube source */

            youtubePlayer.src = "";

        }
    );


</script>




        <?php include __DIR__ . '/footer.php'; ?>



</body>
</html>







