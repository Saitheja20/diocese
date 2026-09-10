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
            color: #222222;
        }

        /* ================================
           COMMON SECTION
        ================================= */

        .news_section,
        .event_section {
            padding: 70px 0;
        }

        .section-title {
            margin-bottom: 45px;
        }

        .section-title h2 {
            font-size: 40px;
            font-weight: 700;
            margin: 0;
            display: inline-block;
            position: relative;
            padding-bottom: 12px;
            color: #176b25;
        }

        .section-title h2::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            width: 55px;
            height: 4px;
            background: #9d2026;
        }

        /* ================================
           NEWS SECTION
           DO NOT CHANGE
        ================================= */

        .news-wrapper {
            max-width: 1150px;
            margin: 0 auto;
            background: #f7f9f7;
            border-radius: 18px;
            overflow: hidden;
            border: 1px solid #e7ebe7;
        }

        .news-slider {
            height: 390px;
            overflow: hidden;
            position: relative;
        }

        .news-track {
            width: 100%;
            transition: transform 0.75s ease-in-out;
        }

        .news-item {
            min-height: 390px;
            display: flex;
            align-items: stretch;
            background: #ffffff;
        }

        .news-number {
            width: 28%;
            min-width: 28%;
            background: #176b25;
            color: #ffffff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 35px;
            text-align: center;
        }

        .news-number span {
            font-size: 14px;
            font-weight: 500;
            letter-spacing: 2px;
            text-transform: uppercase;
            opacity: 0.9;
            margin-bottom: 15px;
        }

        .news-number strong {
            font-size: 70px;
            line-height: 1;
            font-weight: 700;
        }

        .news-number small {
            font-size: 18px;
            margin-top: 8px;
            font-weight: 500;
        }

        .news-content {
            flex: 1;
            padding: 55px 60px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .news-label {
            font-size: 13px;
            font-weight: 600;
            color: #9d2026;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 12px;
        }

        .news-content h3 {
            font-size: 30px;
            font-weight: 600;
            margin: 0 0 18px;
            color: #222222;
        }

        .news-content p {
            font-size: 1rem;
            line-height: 1.8;
            color: #5d5d5d;
            margin: 0;
            max-width: 750px;
        }

        .news-controls {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 18px 25px;
            background: #f7f9f7;
            border-top: 1px solid #e4e8e4;
        }

        .news-indicator {
            font-size: 14px;
            font-weight: 500;
            color: #666666;
        }

        .news-buttons {
            display: flex;
            gap: 8px;
        }

        .news-btn {
            width: 42px;
            height: 42px;
            border: 1px solid #176b25;
            background: #ffffff;
            color: #176b25;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 18px;
            transition: 0.2s ease;
        }

        .news-btn:hover {
            background: #176b25;
            color: #ffffff;
        }

        /* ================================
           EVENTS SECTION
           ORIGINAL CARD DESIGN
        ================================= */

        .event_section {
            background: #ffffff;
        }

        .event-card-grid {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            background: #ffffff;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
            height: 100%;
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }

        .event-card-grid:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 28px rgba(0, 0, 0, 0.14);
        }

        .event-img {
            width: 100%;
            height: 350px;
            object-fit: cover;
            display: block;
        }

        .event-date {
            position: absolute;
            top: 18px;
            left: 18px;
            background: #ffffff;
            color: #111111;
            padding: 10px 20px;
            border-radius: 30px;
            font-size: 14px;
            font-weight: 600;
            z-index: 2;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.12);
        }

        .event-card-grid .card-body {
            padding: 25px 20px 28px;
        }

        .event-card-grid h5 {
            font-size: 23px;
            font-weight: 600;
            color: #222222;
            margin-bottom: 10px;
        }

        .event-card-grid p {
            font-size: 1rem;
            line-height: 1.65;
            color: #555555;
            margin: 0;
        }

        /* ================================
           LARGE DESKTOP
        ================================= */

        @media (min-width: 1200px) {

            .event-img {
                height: 350px;
            }
        }

        /* ================================
           TABLET
        ================================= */

        @media (max-width: 991px) {

            .news_section,
            .event_section {
                padding: 60px 0;
            }

            .section-title {
                margin-bottom: 35px;
            }

            .section-title h2 {
                font-size: 36px;
            }

            /* NEWS */

            .news-slider {
                height: 360px;
            }

            .news-item {
                min-height: 360px;
            }

            .news-number {
                width: 30%;
                min-width: 30%;
            }

            .news-number strong {
                font-size: 60px;
            }

            .news-content {
                padding: 40px;
            }

            .news-content h3 {
                font-size: 27px;
            }

            /* EVENTS */

            .event-img {
                height: 300px;
            }

            .event-card-grid .card-body {
                padding: 23px 18px 25px;
            }

            .event-card-grid h5 {
                font-size: 21px;
            }
        }

        /* ================================
           MOBILE
        ================================= */

        @media (max-width: 767px) {

            .news_section,
            .event_section {
                padding: 45px 15px;
            }

            .section-title {
                margin-bottom: 30px;
            }

            .section-title h2 {
                font-size: 32px;
            }

            /* NEWS */

            .news-wrapper {
                border-radius: 12px;
            }

            .news-slider {
                height: 430px;
            }

            .news-item {
                min-height: 430px;
                display: block;
            }

            .news-number {
                width: 100%;
                min-width: 100%;
                height: 145px;
                padding: 20px;
                flex-direction: row;
                gap: 15px;
            }

            .news-number span {
                margin: 0;
                font-size: 12px;
            }

            .news-number strong {
                font-size: 50px;
            }

            .news-number small {
                margin: 0;
                font-size: 16px;
            }

            .news-content {
                height: 285px;
                padding: 30px 25px;
            }

            .news-label {
                font-size: 12px;
            }

            .news-content h3 {
                font-size: 23px;
                margin-bottom: 12px;
            }

            .news-content p {
                font-size: 1rem;
                line-height: 1.65;
            }

            .news-controls {
                padding: 15px;
            }

            .news-btn {
                width: 38px;
                height: 38px;
            }

            /* EVENTS */

            .event-card-grid {
                border-radius: 12px;
            }

            .event-img {
                height: 260px;
            }

            .event-date {
                top: 15px;
                left: 15px;
                padding: 9px 17px;
                font-size: 13px;
            }

            .event-card-grid .card-body {
                padding: 22px 20px 25px;
            }

            .event-card-grid h5 {
                font-size: 21px;
                margin-bottom: 9px;
            }

            .event-card-grid p {
                font-size: 1rem;
                line-height: 1.6;
            }
        }

        /* ================================
           SMALL MOBILE
        ================================= */

        @media (max-width: 480px) {

            .news_section,
            .event_section {
                padding: 40px 12px;
            }

            .section-title h2 {
                font-size: 29px;
            }

            /* NEWS */

            .news-slider {
                height: 445px;
            }

            .news-item {
                min-height: 445px;
            }

            .news-number {
                height: 135px;
                padding: 15px;
                gap: 10px;
            }

            .news-number strong {
                font-size: 42px;
            }

            .news-number small {
                font-size: 14px;
            }

            .news-content {
                height: 310px;
                padding: 25px 20px;
            }

            .news-content h3 {
                font-size: 21px;
            }

            .news-content p {
                font-size: 0.95rem;
            }

            .news-controls {
                padding: 12px;
            }

            .news-indicator {
                font-size: 12px;
            }

            .news-btn {
                width: 36px;
                height: 36px;
                font-size: 16px;
            }

            /* EVENTS */

            .event-img {
                height: 220px;
            }

            .event-date {
                top: 13px;
                left: 13px;
                padding: 8px 15px;
                font-size: 12px;
            }

            .event-card-grid .card-body {
                padding: 20px 17px 23px;
            }

            .event-card-grid h5 {
                font-size: 20px;
            }

            .event-card-grid p {
                font-size: 0.95rem;
            }
        }

        /* ================================
           320px
        ================================= */

        @media (max-width: 340px) {

            .news_section,
            .event_section {
                padding-left: 10px;
                padding-right: 10px;
            }

            .section-title h2 {
                font-size: 27px;
            }

            /* NEWS */

            .news-slider {
                height: 475px;
            }

            .news-item {
                min-height: 475px;
            }

            .news-number {
                height: 135px;
                flex-wrap: wrap;
                justify-content: center;
            }

            .news-number span {
                width: 100%;
            }

            .news-content {
                height: 340px;
                padding: 22px 16px;
            }

            .news-content h3 {
                font-size: 19px;
            }

            .news-content p {
                font-size: 0.92rem;
            }

            .news-indicator {
                font-size: 11px;
            }

            /* EVENTS */

            .event-img {
                height: 190px;
            }

            .event-date {
                top: 10px;
                left: 10px;
                padding: 7px 12px;
                font-size: 11px;
            }

            .event-card-grid .card-body {
                padding: 18px 14px 20px;
            }

            .event-card-grid h5 {
                font-size: 18px;
            }

            .event-card-grid p {
                font-size: 0.92rem;
                line-height: 1.55;
            }
        }
    </style>
</head>

<body>


    <!-- =====================================================
         NEWS SECTION
         FIRST SECTION KEPT AS IT IS
    ====================================================== -->

    <section class="news_section">
        <div class="container">

            <div class="section-title">
                <h2>News</h2>
            </div>

            <div class="news-wrapper">

                <div class="news-slider">

                    <div class="news-track" id="newsTrack">

                        <!-- News 1 -->
                        <div class="news-item">

                            <div class="news-number">
                                <span>Today</span>
                                <strong>23</strong>
                                <small>00:00</small>
                            </div>

                            <div class="news-content">

                                <div class="news-label">
                                    Latest News
                                </div>

                                <h3>
                                    Viking Space Odyssey
                                </h3>

                                <p>
                                    Embark on a cosmic journey with a Viking twist!
                                    Discover how Viking technology might have fared in
                                    space, and ponder the mysteries of the universe with
                                    a horn of mead in hand.
                                </p>

                            </div>

                        </div>


                        <!-- News 2 -->
                        <div class="news-item">

                            <div class="news-number">
                                <span>February</span>
                                <strong>17</strong>
                                <small>11:00</small>
                            </div>

                            <div class="news-content">

                                <div class="news-label">
                                    Latest News
                                </div>

                                <h3>
                                    Velvet Weekend
                                </h3>

                                <p>
                                    Velvet-themed artworks and experiences that bring
                                    together art, music, and fashion in a weekend of
                                    creativity and elegance.
                                </p>

                            </div>

                        </div>


                        <!-- News 3 -->
                        <div class="news-item">

                            <div class="news-number">
                                <span>February</span>
                                <strong>18</strong>
                                <small>09:00</small>
                            </div>

                            <div class="news-content">

                                <div class="news-label">
                                    Latest News
                                </div>

                                <h3>
                                    Darkness Park
                                </h3>

                                <p>
                                    Bizarre delights at Dark Carnival of Curiosities.
                                    Expect performers, strange exhibits, and mystery
                                    all around.
                                </p>

                            </div>

                        </div>


                        <!-- News 4 -->
                        <div class="news-item">

                            <div class="news-number">
                                <span>February</span>
                                <strong>20</strong>
                                <small>14:00</small>
                            </div>

                            <div class="news-content">

                                <div class="news-label">
                                    Latest News
                                </div>

                                <h3>
                                    Green Tech Expo
                                </h3>

                                <p>
                                    Innovations in sustainable technology that are
                                    shaping the future of clean energy and eco-friendly
                                    living.
                                </p>

                            </div>

                        </div>


                        <!-- News 5 -->
                        <div class="news-item">

                            <div class="news-number">
                                <span>February</span>
                                <strong>21</strong>
                                <small>10:00</small>
                            </div>

                            <div class="news-content">

                                <div class="news-label">
                                    Latest News
                                </div>

                                <h3>
                                    Art in Motion
                                </h3>

                                <p>
                                    Dynamic installations exploring the idea of movement
                                    in art, from kinetic sculptures to immersive digital
                                    work.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>


                <div class="news-controls">

                    <div class="news-indicator">
                        News
                        <span id="newsCurrent">1</span>
                        /
                        <span id="newsTotal">5</span>
                    </div>

                    <div class="news-buttons">

                        <button
                            class="news-btn"
                            id="newsPrev"
                            aria-label="Previous News">
                            &#8593;
                        </button>

                        <button
                            class="news-btn"
                            id="newsNext"
                            aria-label="Next News">
                            &#8595;
                        </button>

                    </div>

                </div>

            </div>

        </div>
    </section>



    <!-- =====================================================
         EVENT SECTION
         ORIGINAL CARD SECTION
    ====================================================== -->

    <section class="event_section">

        <div class="container">

            <div class="section-title">
                <h2>Events</h2>
            </div>


            <div class="row g-4">


                <!-- EVENT 1 -->

                <div
                    class="col-12 col-sm-6 col-lg-4"
                    data-aos="fade-up"
                    data-aos-duration="800">

                    <div class="card event-card-grid position-relative">

                        <span class="event-date">
                            17 FEB
                        </span>

                        <img
                            src="https://i.postimg.cc/9MQxqhkf/Diocese.jpg"
                            class="event-img"
                            alt="Velvet Weekend">

                        <div class="card-body">

                            <h5>
                                Velvet Weekend
                            </h5>

                            <p>
                                A weekend of creativity, art, music, and fashion with
                                velvet-themed exhibitions and shows.
                            </p>

                        </div>

                    </div>

                </div>


                <!-- EVENT 2 -->

                <div
                    class="col-12 col-sm-6 col-lg-4"
                    data-aos="fade-up"
                    data-aos-duration="800"
                    data-aos-delay="100">

                    <div class="card event-card-grid position-relative">

                        <span class="event-date">
                            18 FEB
                        </span>

                        <img
                            src="https://i.postimg.cc/9MQxqhkf/Diocese.jpg"
                            class="event-img"
                            alt="Darkness Park">

                        <div class="card-body">

                            <h5>
                                Darkness Park
                            </h5>

                            <p>
                                A carnival of curiosities filled with bizarre delights,
                                performers, and mysterious experiences.
                            </p>

                        </div>

                    </div>

                </div>


                <!-- EVENT 3 -->

                <div
                    class="col-12 col-sm-6 col-lg-4"
                    data-aos="fade-up"
                    data-aos-duration="800"
                    data-aos-delay="200">

                    <div class="card event-card-grid position-relative">

                        <span class="event-date">
                            20 FEB
                        </span>

                        <img
                            src="https://i.postimg.cc/52tjGKDC/1-1.jpg"
                            class="event-img"
                            alt="Green Tech Expo">

                        <div class="card-body">

                            <h5>
                                Green Tech Expo
                            </h5>

                            <p>
                                Discover the latest innovations in sustainable
                                technology and eco-friendly solutions.
                            </p>

                        </div>

                    </div>

                </div>


                <!-- EVENT 4 -->

                <div
                    class="col-12 col-sm-6 col-lg-4"
                    data-aos="fade-up"
                    data-aos-duration="800"
                    data-aos-delay="100">

                    <div class="card event-card-grid position-relative">

                        <span class="event-date">
                            21 FEB
                        </span>

                        <img
                            src="https://i.postimg.cc/9MQxqhkf/Diocese.jpg"
                            class="event-img"
                            alt="Art in Motion">

                        <div class="card-body">

                            <h5>
                                Art in Motion
                            </h5>

                            <p>
                                Experience dynamic installations and kinetic artworks
                                exploring the concept of movement in art.
                            </p>

                        </div>

                    </div>

                </div>


                <!-- EVENT 5 -->

                <div
                    class="col-12 col-sm-6 col-lg-4"
                    data-aos="fade-up"
                    data-aos-duration="800"
                    data-aos-delay="200">

                    <div class="card event-card-grid position-relative">

                        <span class="event-date">
                            24 FEB
                        </span>

                        <img
                            src="https://i.postimg.cc/52tjGKDC/1-1.jpg"
                            class="event-img"
                            alt="Music Fest">

                        <div class="card-body">

                            <h5>
                                Music Fest
                            </h5>

                            <p>
                                A grand celebration of music with live bands and
                                cultural performances across genres.
                            </p>

                        </div>

                    </div>

                </div>


                <!-- EVENT 6 -->

                <div
                    class="col-12 col-sm-6 col-lg-4"
                    data-aos="fade-up"
                    data-aos-duration="800"
                    data-aos-delay="300">

                    <div class="card event-card-grid position-relative">

                        <span class="event-date">
                            25 FEB
                        </span>

                        <img
                            src="https://i.postimg.cc/qvZgdXdZ/1-2.jpg"
                            class="event-img"
                            alt="Food Carnival">

                        <div class="card-body">

                            <h5>
                                Food Carnival
                            </h5>

                            <p>
                                Indulge in a global culinary journey with street food
                                and gourmet dishes from around the world.
                            </p>

                        </div>

                    </div>

                </div>


            </div>

        </div>

    </section>



    <!-- =====================================================
         NEWS JAVASCRIPT
    ====================================================== -->

    <script>

        const newsTrack = document.getElementById("newsTrack");
        const newsItems = document.querySelectorAll(".news-item");
        const newsCurrent = document.getElementById("newsCurrent");
        const newsTotal = document.getElementById("newsTotal");
        const newsNext = document.getElementById("newsNext");
        const newsPrev = document.getElementById("newsPrev");

        let currentNews = 0;

        newsTotal.textContent = newsItems.length;


        function updateNews() {

            const itemHeight = newsItems[0].offsetHeight;

            newsTrack.style.transform =
                "translateY(-" + (currentNews * itemHeight) + "px)";

            newsCurrent.textContent =
                currentNews + 1;
        }


        function nextNews() {

            currentNews++;

            if (currentNews >= newsItems.length) {
                currentNews = 0;
            }

            updateNews();
        }


        function previousNews() {

            currentNews--;

            if (currentNews < 0) {
                currentNews = newsItems.length - 1;
            }

            updateNews();
        }


        newsNext.addEventListener("click", function () {

            nextNews();

            restartAutoNews();

        });


        newsPrev.addEventListener("click", function () {

            previousNews();

            restartAutoNews();

        });


        let autoNews = setInterval(nextNews, 4500);


        function restartAutoNews() {

            clearInterval(autoNews);

            autoNews = setInterval(nextNews, 4500);

        }


        window.addEventListener("resize", updateNews);


        updateNews();

    </script>


    <!-- =====================================================
         AOS
    ====================================================== -->

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <script>

        AOS.init({
            duration: 800,
            once: false,
            offset: 100
        });

    </script>




        <?php include __DIR__ . '/footer.php'; ?>



</body>
</html>



