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
        font-family: "Poppins", sans-serif;
        background: #ffffff;
        overflow-x: hidden;
    }


    /* ================================
       PHOTO GALLERY SECTION
    ================================= */

    .photo-gallery-section {
        width: 100%;
        padding: 70px 0;
        background: #ffffff;
        overflow: hidden;
    }


    /* ================================
       CONTAINER
    ================================= */

    .photo-gallery-section > .container {
        width: 100%;
    }


    /* ================================
       HEADING
    ================================= */

    .photogallery {
        width: 100%;
        text-align: center;
        margin-bottom: 45px;
    }

    .photogallery .title {
        display: inline-block;
        position: relative;
        margin: 0;
        padding-bottom: 12px;
        font-size: 40px;
        font-weight: 700;
        color: #176b25;
    }

    .photogallery .title::after {
        content: "";
        position: absolute;
        left: 50%;
        bottom: 0;
        transform: translateX(-50%);
        width: 55px;
        height: 4px;
        background: #9d2026;
    }


    /* ================================
       GALLERY ROW
    ================================= */

    .photo-gallery-section .row {
        width: 100%;
    }


    /* ================================
       GALLERY CARD
    ================================= */

    .gallery_card {
        width: 100%;
        height: 100%;
        border: 1px solid #e5e5e5;
        border-radius: 14px;
        overflow: hidden;
        background: #ffffff;
        box-shadow: 0 5px 18px rgba(0, 0, 0, 0.07);
        transition:
            transform 0.4s ease,
            box-shadow 0.4s ease;
    }

    .gallery_card:hover {
        transform: translateY(-7px);
        box-shadow: 0 12px 28px rgba(0, 0, 0, 0.14);
    }


    /* ================================
       IMAGE
    ================================= */

    .gallery_card figure {
        margin: 0;
        width: 100%;
        height: 100%;
    }

    .gallery_image_wrapper {
        width: 100%;
        height: 300px;
        overflow: hidden;
        background: #f5f5f5;
    }

    .gallery_image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        cursor: zoom-in;
        transition: transform 0.6s ease;
    }

    .gallery_card:hover .gallery_image {
        transform: scale(1.05);
    }


    /* ================================
       CAPTION
    ================================= */

    .gallery_card figcaption {
        min-height: 90px;
        padding: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        background: #ffffff;
        color: #222222;
        font-size: 1rem;
        line-height: 1.6;
        font-weight: 500;
    }


    /* ================================
       IMAGE ZOOM
    ================================= */

    .image_modal {
        position: fixed;
        inset: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.88);
        display: none;
        align-items: center;
        justify-content: center;
        padding: 25px;
        z-index: 9999;
    }

    .image_modal.active {
        display: flex;
    }

    .image_modal img {
        max-width: 92%;
        max-height: 88vh;
        object-fit: contain;
        border-radius: 5px;
        transform: scale(0.85);
        transition: transform 0.35s ease;
        cursor: zoom-out;
    }

    .image_modal.active img {
        transform: scale(1);
    }


    /* ================================
       CLOSE BUTTON
    ================================= */

    .image_close {
        position: absolute;
        top: 20px;
        right: 25px;
        width: 45px;
        height: 45px;
        border: none;
        border-radius: 50%;
        background: #ffffff;
        color: #176b25;
        font-size: 28px;
        line-height: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: 0.3s ease;
        z-index: 10000;
    }

    .image_close:hover {
        background: #176b25;
        color: #ffffff;
    }


    /* ================================
       TABLET
    ================================= */

    @media (max-width: 991px) {

        .photo-gallery-section {
            padding: 60px 0;
        }

        .photo-gallery-section > .container {
            max-width: 100%;
        }

        .photogallery {
            margin-bottom: 35px;
        }

        .photogallery .title {
            font-size: 36px;
        }

        .gallery_image_wrapper {
            height: 280px;
        }

        .gallery_card figcaption {
            min-height: 88px;
            padding: 18px;
        }
    }


    /* ================================
       MOBILE
    ================================= */

    @media (max-width: 767px) {

        .photo-gallery-section {
            width: 100%;
            padding: 45px 0;
            overflow-x: hidden;
        }

        .photo-gallery-section > .container {
            width: 100%;
            max-width: 100%;
            padding-left: 12px;
            padding-right: 12px;
        }

        .photogallery {
            width: 100%;
            margin-bottom: 30px;
            text-align: center;
        }

        .photogallery .title {
            font-size: 32px;
        }

        /* ONE CARD PER ROW */
        .photo-gallery-section .row {
            width: 100%;
            margin-left: 0;
            margin-right: 0;
        }

        .photo-gallery-section .row > [class*="col-"] {
            width: 100%;
            max-width: 100%;
            padding-left: 0;
            padding-right: 0;
        }

        .gallery_card {
            width: 100%;
            max-width: 100%;
            border-radius: 12px;
        }

        .gallery_image_wrapper {
            width: 100%;
            height: 260px;
        }

        .gallery_image {
            width: 100%;
            height: 100%;
        }

        .gallery_card figcaption {
            width: 100%;
            min-height: auto;
            padding: 18px 17px 20px;
            font-size: 1rem;
        }

        .image_modal {
            padding: 15px;
        }

        .image_modal img {
            max-width: 96%;
            max-height: 82vh;
        }

        .image_close {
            top: 15px;
            right: 15px;
            width: 40px;
            height: 40px;
            font-size: 24px;
        }
    }


    /* ================================
       SMALL MOBILE
    ================================= */

    @media (max-width: 480px) {

        .photo-gallery-section {
            width: 100%;
            padding: 40px 0;
        }

        .photo-gallery-section > .container {
            width: 100%;
            max-width: 100%;
            padding-left: 10px;
            padding-right: 10px;
        }

        .photogallery {
            width: 100%;
            margin-bottom: 30px;
        }

        .photogallery .title {
            font-size: 29px;
        }

        .photo-gallery-section .row {
            width: 100%;
            margin-left: 0;
            margin-right: 0;
        }

        .photo-gallery-section .row > [class*="col-"] {
            width: 100%;
            max-width: 100%;
            padding-left: 0;
            padding-right: 0;
        }

        .gallery_card {
            width: 100%;
            max-width: 100%;
            border-radius: 12px;
        }

        .gallery_image_wrapper {
            width: 100%;
            height: 220px;
        }

        .gallery_card figcaption {
            width: 100%;
            padding: 17px 15px 19px;
            font-size: 0.95rem;
            line-height: 1.55;
        }
    }


    /* ================================
       320px
    ================================= */

    @media (max-width: 340px) {

        .photo-gallery-section {
            width: 100%;
            padding: 40px 0;
        }

        .photo-gallery-section > .container {
            width: 100%;
            max-width: 100%;
            padding-left: 8px;
            padding-right: 8px;
        }

        .photogallery {
            width: 100%;
            margin-bottom: 25px;
        }

        .photogallery .title {
            font-size: 27px;
        }

        .photo-gallery-section .row {
            width: 100%;
            margin-left: 0;
            margin-right: 0;
        }

        .photo-gallery-section .row > [class*="col-"] {
            width: 100%;
            max-width: 100%;
            padding-left: 0;
            padding-right: 0;
        }

        .gallery_card {
            width: 100%;
            max-width: 100%;
        }

        .gallery_image_wrapper {
            width: 100%;
            height: 190px;
        }

        .gallery_card figcaption {
            width: 100%;
            padding: 15px 13px 17px;
            font-size: 0.92rem;
            line-height: 1.5;
        }

        .image_modal {
            padding: 10px;
        }

        .image_modal img {
            max-width: 98%;
            max-height: 78vh;
        }

        .image_close {
            top: 10px;
            right: 10px;
            width: 36px;
            height: 36px;
            font-size: 22px;
        }
    }

</style>


<!-- ================================
     PHOTO GALAXY
================================= -->

<section class="photo-gallery-section">

    <div class="container">

        <!-- HEADING -->

        <div class="photogallery">

            <h2 class="title">
                Photo Galaxy
            </h2>

        </div>


        <!-- GALLERY -->

        <div class="row g-4">


            <!-- PHOTO 1 -->

            <div class="col-12 col-md-6 col-lg-4"
                 data-aos="fade-up"
                 data-aos-duration="800">

                <div class="card gallery_card">

                    <figure>

                        <div class="gallery_image_wrapper">

                            <img
                                src="https://i.postimg.cc/0QtNHrtR/Jubilee-1.webp"
                                class="gallery_image"
                                alt="Inauguration of Jubilee 2025 in Diocese of Warangal"
                                onclick="openGalleryImage(this)">

                        </div>

                        <figcaption>
                            Inauguration of Jubilee 2025 in Diocese of Warangal
                        </figcaption>

                    </figure>

                </div>

            </div>


            <!-- PHOTO 2 -->

            <div class="col-12 col-md-6 col-lg-4"
                 data-aos="fade-up"
                 data-aos-duration="800"
                 data-aos-delay="100">

                <div class="card gallery_card">

                    <figure>

                        <div class="gallery_image_wrapper">

                            <img
                                src="https://i.postimg.cc/0ymb2kND/Jubilee-12.webp"
                                class="gallery_image"
                                alt="BFCT Children and College Students Seminar"
                                onclick="openGalleryImage(this)">

                        </div>

                        <figcaption>
                            BFCT Children and College Students Seminar
                        </figcaption>

                    </figure>

                </div>

            </div>


            <!-- PHOTO 3 -->

            <div class="col-12 col-md-6 col-lg-4"
                 data-aos="fade-up"
                 data-aos-duration="800"
                 data-aos-delay="200">

                <div class="card gallery_card">

                    <figure>

                        <div class="gallery_image_wrapper">

                            <img
                                src="https://i.postimg.cc/QxvF39jj/Jubilee-3.webp"
                                class="gallery_image"
                                alt="Blessing of Father Colombo Institute of Medical Sciences"
                                onclick="openGalleryImage(this)">

                        </div>

                        <figcaption>
                            Blessing of Father Colombo Institute of Medical Sciences
                        </figcaption>

                    </figure>

                </div>

            </div>


            <!-- PHOTO 4 -->

            <div class="col-12 col-md-6 col-lg-4"
                 data-aos="fade-up"
                 data-aos-duration="800"
                 data-aos-delay="100">

                <div class="card gallery_card">

                    <figure>

                        <div class="gallery_image_wrapper">

                            <img
                                src="https://i.postimg.cc/hj4jrV11/Jubilee-2.webp"
                                class="gallery_image"
                                alt="Decennial Celebrations"
                                onclick="openGalleryImage(this)">

                        </div>

                        <figcaption>
                            Decennial Celebrations
                        </figcaption>

                    </figure>

                </div>

            </div>


            <!-- PHOTO 5 -->

            <div class="col-12 col-md-6 col-lg-4"
                 data-aos="fade-up"
                 data-aos-duration="800"
                 data-aos-delay="200">

                <div class="card gallery_card">

                    <figure>

                        <div class="gallery_image_wrapper">

                            <img
                                src="https://i.postimg.cc/R0LhKgK0/Jubilee-4.webp"
                                class="gallery_image"
                                alt="Fatima Feast-2024"
                                onclick="openGalleryImage(this)">

                        </div>

                        <figcaption>
                            Fatima Feast-2024
                        </figcaption>

                    </figure>

                </div>

            </div>


            <!-- PHOTO 6 -->

            <div class="col-12 col-md-6 col-lg-4"
                 data-aos="fade-up"
                 data-aos-duration="800"
                 data-aos-delay="300">

                <div class="card gallery_card">

                    <figure>

                        <div class="gallery_image_wrapper">

                            <img
                                src="https://i.postimg.cc/1zQ48kgT/Jubilee-5.webp"
                                class="gallery_image"
                                alt="Christmas 2020"
                                onclick="openGalleryImage(this)">

                        </div>

                        <figcaption>
                            Christmas 2020
                        </figcaption>

                    </figure>

                </div>

            </div>


            <!-- PHOTO 7 -->

            <div class="col-12 col-md-6 col-lg-4"
                 data-aos="fade-up"
                 data-aos-duration="800"
                 data-aos-delay="100">

                <div class="card gallery_card">

                    <figure>

                        <div class="gallery_image_wrapper">

                            <img
                                src="https://i.postimg.cc/1zQ48kgT/Jubilee-5.webp"
                                class="gallery_image"
                                alt="Banjara Mission"
                                onclick="openGalleryImage(this)">

                        </div>

                        <figcaption>
                            Banjara Mission
                        </figcaption>

                    </figure>

                </div>

            </div>


        </div>

    </div>

</section>


<!-- ================================
     IMAGE ZOOM MODAL
================================= -->

<div class="image_modal" id="imageModal">

    <button
        class="image_close"
        onclick="closeGalleryImage()"
        aria-label="Close image">
        &times;
    </button>

    <img
        id="modalImage"
        src=""
        alt="Zoomed Gallery Image">

</div>


<!-- ================================
     IMAGE ZOOM JAVASCRIPT
================================= -->

<script>

    const imageModal = document.getElementById("imageModal");
    const modalImage = document.getElementById("modalImage");


    function openGalleryImage(image) {

        modalImage.src = image.src;
        modalImage.alt = image.alt;

        imageModal.classList.add("active");

        document.body.style.overflow = "hidden";
    }


    function closeGalleryImage() {

        imageModal.classList.remove("active");

        document.body.style.overflow = "";

        setTimeout(function () {
            modalImage.src = "";
        }, 300);
    }


    imageModal.addEventListener("click", function (event) {

        if (event.target === imageModal) {
            closeGalleryImage();
        }

    });


    modalImage.addEventListener("click", function () {

        closeGalleryImage();

    });


    document.addEventListener("keydown", function (event) {

        if (event.key === "Escape") {
            closeGalleryImage();
        }

    });

</script>


<!-- ================================
     AOS
================================= -->

<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

<script>

    AOS.init({
        duration: 800,
        once: false,
        offset: 100
    });

</script>

    <?php include __DIR__ . '/footer.php'; ?>