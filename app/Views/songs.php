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

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background: #ffffff;
        }

        /* ================================
           SONG GALLERY
        ================================= */

        .song_gallery {
            width: 100%;
            padding: 70px 0;
            background: #ffffff;
        }

        .song_gallery .heading {
            width: 100%;
            text-align: center;
            margin-bottom: 45px;
        }

        .song_gallery .heading h2 {
            margin: 0;
            font-size: 40px;
            font-weight: 700;
            color: #176b25;
        }

        .song_gallery .heading::after {
            content: "";
            display: block;
            width: 65px;
            height: 3px;
            background: #9d2026;
            margin: 12px auto 0;
        }

        /* ================================
           SONG CARD
        ================================= */

        .song_gallery .row {
            margin-left: 0;
            margin-right: 0;
        }

        .song_gallery .col-sm-12,
        .song_gallery .col-md-6,
        .song_gallery .col-lg-4 {
            padding-left: 12px;
            padding-right: 12px;
        }

        .audio-thumbnail {
            position: relative;
            width: 100%;
            height: 100%;
            overflow: hidden;
            border-radius: 12px;
            background: #ffffff;
            border: 1px solid #e3e3e3;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        }

        .audio-thumbnail img {
            display: block;
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        /* ================================
           PLAY OVERLAY
        ================================= */

        .play-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 250px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(0, 0, 0, 0.20);
        }

        .play-overlay i {
            width: 65px;
            height: 65px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: #9d2026;
            color: #ffffff;
            font-size: 28px;
        }

        /* ================================
           HIDDEN AUDIO
        ================================= */

        .song-audio {
            display: none;
        }

        /* ================================
           MODAL
        ================================= */

        #audioModal .modal-dialog {
            max-width: 800px;
            width: 95%;
        }

        #audioModal .modal-content {
            border: none;
            border-radius: 12px;
            overflow: hidden;
        }

        #audioModal .modal-header {
            border-bottom: 1px solid #eeeeee;
            padding: 15px 20px;
        }

        #audioModal .modal-body {
            padding: 25px;
        }

        #modalImg {
            display: block;
            width: 100%;
            max-height: 430px;
            object-fit: cover;
            margin: 0 auto 20px;
        }

        #audioPlayer {
            width: 100%;
            height: 45px;
        }

        .song-footer {
            padding: 18px 20px;
            background: #176b25;
            color: #ffffff;
            font-size: 18px;
            font-weight: 600;
        }

        /* ================================
           TABLET
        ================================= */

        @media (max-width: 991px) {

            .song_gallery {
                padding: 60px 0;
            }

            .song_gallery .heading h2 {
                font-size: 36px;
            }

            .audio-thumbnail img,
            .play-overlay {
                height: 230px;
            }

        }

        /* ================================
           MOBILE
        ================================= */

        @media (max-width: 767px) {

            .song_gallery {
                padding: 45px 0;
            }

            .song_gallery .container {
                width: 100%;
                max-width: 100%;
                padding-left: 10px;
                padding-right: 10px;
            }

            .song_gallery .heading {
                margin-bottom: 30px;
            }

            .song_gallery .heading h2 {
                font-size: 30px;
            }

            .song_gallery .row {
                --bs-gutter-x: 0;
                --bs-gutter-y: 0;
            }

            .song_gallery .col-sm-12,
            .song_gallery .col-md-6,
            .song_gallery .col-lg-4 {
                width: 100%;
                padding-left: 0;
                padding-right: 0;
                margin-bottom: 20px;
            }

            .audio-thumbnail img,
            .play-overlay {
                height: 230px;
            }

            #audioModal .modal-dialog {
                width: 100%;
                max-width: 100%;
                margin: 0;
            }

            #audioModal .modal-content {
                min-height: 100vh;
                border-radius: 0;
            }

            #audioModal .modal-body {
                padding: 15px;
            }

            #modalImg {
                max-height: 350px;
            }

            .song-footer {
                font-size: 16px;
            }
        }

        /* ================================
           SMALL MOBILE
        ================================= */

        @media (max-width: 575px) {

            .song_gallery {
                padding: 35px 0;
            }

            .song_gallery .container {
                padding-left: 8px;
                padding-right: 8px;
            }

            .song_gallery .heading h2 {
                font-size: 28px;
            }

            .audio-thumbnail img,
            .play-overlay {
                height: 220px;
            }

            .play-overlay i {
                width: 58px;
                height: 58px;
                font-size: 25px;
            }
        }

        /* ================================
           VERY SMALL MOBILE
        ================================= */

        @media (max-width: 375px) {

            .song_gallery .container {
                padding-left: 6px;
                padding-right: 6px;
            }

            .song_gallery .heading h2 {
                font-size: 25px;
            }

            .audio-thumbnail img,
            .play-overlay {
                height: 200px;
            }

            .play-overlay i {
                width: 55px;
                height: 55px;
                font-size: 23px;
            }

            #modalImg {
                max-height: 280px;
            }
        }

    </style>
</head>

<body>


<!-- =================================
     SONGS GALLERY
================================= -->

<section class="song_gallery">

    <div class="container">

        <!-- Heading -->
        <div class="heading">
            <h2>Songs Gallery</h2>
        </div>


        <div class="row g-4">


            <!-- ================================
                 AI SONG 1
            ================================= -->

            <div class="col-sm-12 col-md-6 col-lg-4">

                <div class="audio-thumbnail"
                     data-bs-toggle="modal"
                     data-bs-target="#audioModal"
                     data-title="AI Song 1 - Neural Beats">

                    <img src="https://i.postimg.cc/d3mzxD2m/23d2d76f20d0e665e08d7077a1f30c0c.jpg"
                         alt="AI Song 1">

                    <div class="play-overlay">
                        <i class="bi bi-music-note-beamed"></i>
                    </div>

                    <audio class="song-audio" preload="none">
                        <source src="https://ksandbox.in/diocese2/public/assets/Songs/vlog-beat-background-349853.mp3"
                                type="audio/mpeg">
                    </audio>

                    <div class="d-none song-title">
                        AI Song 1 - Neural Beats
                    </div>

                </div>

            </div>


            <!-- ================================
                 AI SONG 2
            ================================= -->

            <div class="col-sm-12 col-md-6 col-lg-4">

                <div class="audio-thumbnail"
                     data-bs-toggle="modal"
                     data-bs-target="#audioModal"
                     data-title="AI Song 2 - Deep Melody">

                    <img src="https://i.postimg.cc/FshtJgvP/cross-1448946-640.jpg"
                         alt="AI Song 2">

                    <div class="play-overlay">
                        <i class="bi bi-music-note-beamed"></i>
                    </div>

                    <audio class="song-audio" preload="none">
                        <source src="https://ksandbox.in/diocese2/public/assets/Songs/emotional.mp3"
                                type="audio/mpeg">
                    </audio>

                    <div class="d-none song-title">
                        AI Song 2 - Deep Melody
                    </div>

                </div>

            </div>


            <!-- ================================
                 AI SONG 3
            ================================= -->

            <div class="col-sm-12 col-md-6 col-lg-4">

                <div class="audio-thumbnail"
                     data-bs-toggle="modal"
                     data-bs-target="#audioModal"
                     data-title="AI Song 3 - Future Symphony">

                    <img src="https://i.postimg.cc/G3Fw2gW8/360-F-337388655-XX9-BKW77-OEi92-NIft-LUx4-Aczcxu-Yx-LXK.jpg"
                         alt="AI Song 3">

                    <div class="play-overlay">
                        <i class="bi bi-music-note-beamed"></i>
                    </div>

                    <audio class="song-audio" preload="none">
                        <source src="https://ksandbox.in/diocese2/DIOCESE%20DESIGNS/vlog-beat-background-349853.mp3"
                                type="audio/mpeg">
                    </audio>

                    <div class="d-none song-title">
                        AI Song 3 - Future Symphony
                    </div>

                </div>

            </div>


            <!-- ================================
                 AI SONG 4
            ================================= -->

            <div class="col-sm-12 col-md-6 col-lg-4">

                <div class="audio-thumbnail"
                     data-bs-toggle="modal"
                     data-bs-target="#audioModal"
                     data-title="AI Song 1 - Neural Beats">

                    <img src="https://i.postimg.cc/XYST0RND/download-4.jpg"
                         alt="AI Song 1">

                    <div class="play-overlay">
                        <i class="bi bi-music-note-beamed"></i>
                    </div>

                    <audio class="song-audio" preload="none">
                        <source src="https://ksandbox.in/diocese2/public/assets/Songs/vlog-beat-background-349853.mp3"
                                type="audio/mpeg">
                    </audio>

                    <div class="d-none song-title">
                        AI Song 1 - Neural Beats
                    </div>

                </div>

            </div>


            <!-- ================================
                 AI SONG 5
            ================================= -->

            <div class="col-sm-12 col-md-6 col-lg-4">

                <div class="audio-thumbnail"
                     data-bs-toggle="modal"
                     data-bs-target="#audioModal"
                     data-title="AI Song 2 - Deep Melody">

                    <img src="https://i.postimg.cc/8Prq9pG6/images-6.jpg"
                         alt="AI Song 2">

                    <div class="play-overlay">
                        <i class="bi bi-music-note-beamed"></i>
                    </div>

                    <audio class="song-audio" preload="none">
                        <source src="https://ksandbox.in/diocese2/public/assets/Songs/emotional.mp3"
                                type="audio/mpeg">
                    </audio>

                    <div class="d-none song-title">
                        AI Song 2 - Deep Melody
                    </div>

                </div>

            </div>


            <!-- ================================
                 AI SONG 6
            ================================= -->

            <div class="col-sm-12 col-md-6 col-lg-4">

                <div class="audio-thumbnail"
                     data-bs-toggle="modal"
                     data-bs-target="#audioModal"
                     data-title="AI Song 3 - Future Symphony">

                    <img src="https://i.postimg.cc/h4Yk2Jkn/images-7.jpg"
                         alt="AI Song 3">

                    <div class="play-overlay">
                        <i class="bi bi-music-note-beamed"></i>
                    </div>

                    <audio class="song-audio" preload="none">
                        <source src="https://ksandbox.in/diocese2/DIOCESE%20DESIGNS/vlog-beat-background-349853.mp3"
                                type="audio/mpeg">
                    </audio>

                    <div class="d-none song-title">
                        AI Song 3 - Future Symphony
                    </div>

                </div>

            </div>


        </div>

    </div>

</section>



<!-- =================================
     AUDIO MODAL
================================= -->

<div class="modal fade"
     id="audioModal"
     tabindex="-1"
     aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">


            <!-- Modal Header -->

            <div class="modal-header">

                <h5 class="modal-title">
                    <i class="bi bi-music-note-beamed me-2"></i>
                    Song
                </h5>

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close">
                </button>

            </div>


            <!-- Modal Body -->

            <div class="modal-body text-center">

                <img id="modalImg"
                     src=""
                     class="img-fluid rounded"
                     alt="Song Thumbnail">

                <audio id="audioPlayer"
                       controls>
                </audio>

            </div>


            <!-- Modal Footer -->

            <div class="song-footer text-center"
                 id="modalTitle">
                AI Song Title
            </div>


        </div>

    </div>

</div>



<!-- =================================
     BOOTSTRAP JS
================================= -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>


<script>

    const audioModal = document.getElementById("audioModal");
    const modalImg = document.getElementById("modalImg");
    const audioPlayer = document.getElementById("audioPlayer");
    const modalTitle = document.getElementById("modalTitle");

    const songCards = document.querySelectorAll(".audio-thumbnail");


    songCards.forEach(function(card) {

        card.addEventListener("click", function() {

            const image = card.querySelector("img");
            const audio = card.querySelector(".song-audio");
            const title = card.querySelector(".song-title");

            modalImg.src = image.src;

            audioPlayer.src = audio.querySelector("source").src;

            modalTitle.innerText = title.innerText.trim();

            audioPlayer.load();

            audioPlayer.play();

        });

    });


    /* Stop audio when modal closes */

    audioModal.addEventListener("hidden.bs.modal", function() {

        audioPlayer.pause();

        audioPlayer.currentTime = 0;

        audioPlayer.removeAttribute("src");

        modalImg.src = "";

    });

</script>





        <?php include __DIR__ . '/footer.php'; ?>



</body>
</html>



