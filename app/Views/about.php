<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diocese of Warangal</title>
    <?php include __DIR__ . '/header-links.php'; ?>


        <?php include __DIR__ . '/header.php'; ?>




<!-- =========================
     ABOUT US - ORIGINS SECTION
========================= -->

<style>
    /* =========================================================
   DIOCESE OF WARANGAL
   ABOUT US - DIAGONAL DESIGN
========================================================= */

.wd-about-page {
    width: 100%;
    overflow: hidden;
    background: #f6f8fa;
    color: #183b56;
}


/* =========================================================
   INTRO
========================================================= */

.wd-about-intro {
    width: 100%;
    padding: clamp(70px, 9vw, 125px) 20px
             clamp(70px, 8vw, 110px);

    background: #ffffff;
    text-align: center;
}


.wd-about-intro-inner {
    width: 100%;
    max-width: 900px;
    margin: 0 auto;
}


.wd-about-kicker {
    display: inline-block;

    margin-bottom: 20px;

    font-size: 11px;
    font-weight: 700;

    letter-spacing: 3px;
    text-transform: uppercase;

    color: #71808b;
}


.wd-about-intro h1 {
    margin: 0;

    font-family: Georgia, "Times New Roman", serif;

    font-size: clamp(42px, 6vw, 78px);

    line-height: 1.04;
    font-weight: 700;

    letter-spacing: -1.5px;

    color: #17384f;
}


.wd-about-intro h1 span {
    display: block;
    color: #245b82;
}


.wd-about-intro p {
    width: 100%;
    max-width: 620px;

    margin: 25px auto 0;

    font-size: clamp(14px, 1.4vw, 17px);

    line-height: 1.8;

    color: #71808b;
}


.wd-about-intro-line {
    width: 55px;
    height: 2px;

    margin: 30px auto 0;

    background: #7d2938;
}


/* =========================================================
   HISTORY AREA
========================================================= */

.wd-about-history {
    width: 100%;
    max-width: 1440px;

    margin: 0 auto;

    padding: 40px 30px 110px;
}


/* =========================================================
   STORY
========================================================= */

.wd-about-story {
    position: relative;

    width: 100%;

    margin-bottom: 100px;
}


.wd-about-story-inner {
    position: relative;

    display: grid;

    grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);

    width: 100%;
    min-height: 570px;

    background: #ffffff;

    box-shadow:
        0 18px 60px rgba(22, 51, 70, 0.07);

    overflow: hidden;
}


/* =========================================================
   CONTENT
========================================================= */

.wd-about-story-content {
    position: relative;
    z-index: 3;

    display: flex;
    flex-direction: column;
    justify-content: center;

    padding: clamp(40px, 5vw, 80px);
}


.wd-about-number {
    position: absolute;

    top: 25px;
    right: 35px;

    font-size: 11px;
    font-weight: 700;

    letter-spacing: 2px;

    color: #c5cdd2;
}


.wd-about-year {
    display: inline-block;

    margin-bottom: 12px;

    font-family: Georgia, "Times New Roman", serif;

    font-size: clamp(24px, 3vw, 38px);
    font-weight: 700;

    color: #245b82;
}


.wd-about-label {
    display: block;

    margin-bottom: 15px;

    font-size: 10px;
    font-weight: 700;

    letter-spacing: 2.5px;
    text-transform: uppercase;

    color: #7d2938;
}


.wd-about-story-content h2 {
    max-width: 520px;

    margin: 0 0 24px;

    font-family: Georgia, "Times New Roman", serif;

    font-size: clamp(34px, 4vw, 54px);

    line-height: 1.08;
    font-weight: 700;

    letter-spacing: -0.8px;

    color: #17384f;
}


.wd-about-story-content p {
    max-width: 580px;

    margin: 0 0 14px;

    font-size: 15px;

    line-height: 1.85;

    color: #697983;
}


.wd-about-story-content strong {
    color: #17384f;
}


/* =========================================================
   IMAGE
========================================================= */

.wd-about-story-image {
    position: relative;

    width: 100%;
    height: 100%;
    min-height: 570px;

    overflow: hidden;
}


.wd-about-story-image img {
    width: 100%;
    height: 100%;

    display: block;

    object-fit: cover;

    transition: transform .7s cubic-bezier(.2,.7,.2,1);
}


.wd-about-story:hover
.wd-about-story-image img {
    transform: scale(1.045);
}


/* =========================================================
   DIAGONAL IMAGE - LEFT SIDE
========================================================= */

.wd-about-story-one
.wd-about-story-image,
.wd-about-story-three
.wd-about-story-image,
.wd-about-story-five
.wd-about-story-image {

    clip-path: polygon(
        12% 0,
        100% 0,
        100% 100%,
        0 100%
    );

    margin-left: -1px;
}


/* =========================================================
   DIAGONAL IMAGE - RIGHT SIDE
========================================================= */

.wd-about-story-two
.wd-about-story-image,
.wd-about-story-four
.wd-about-story-image {

    clip-path: polygon(
        0 0,
        88% 0,
        100% 100%,
        0 100%
    );

    margin-right: -1px;
}


/* =========================================================
   IMAGE TAG
========================================================= */

.wd-about-image-tag {
    position: absolute;

    right: 25px;
    bottom: 25px;

    padding: 9px 16px;

    background: rgba(255,255,255,.93);

    font-size: 10px;
    font-weight: 700;

    letter-spacing: 2px;

    color: #17384f;
}


/* =========================================================
   BUTTON
========================================================= */

.wd-about-button {
    display: inline-flex;
    align-items: center;
    justify-content: center;

    gap: 18px;

    width: fit-content;

    margin-top: 18px;

    padding: 13px 21px;

    border-radius: 30px;

    background: #17384f;
    color: #ffffff;

    font-size: 12px;
    font-weight: 600;

    text-decoration: none;

    transition:
        background .3s ease,
        transform .3s ease,
        gap .3s ease;
}


.wd-about-button b {
    font-size: 17px;
    font-weight: 400;

    line-height: 1;
}


.wd-about-button:hover {
    background: #245b82;
    color: #ffffff;

    transform: translateY(-2px);

    gap: 22px;
}


/* =========================================================
   SPECIAL 1949
========================================================= */

.wd-about-story-five
.wd-about-story-inner {

    border-top: 4px solid #7d2938;
}


.wd-year-special {
    color: #7d2938;
}


/* =========================================================
   PARISH GRID
========================================================= */

.wd-about-parishes {

    display: grid;

    grid-template-columns: repeat(2, minmax(0, 1fr));

    gap: 8px 18px;

    width: 100%;
    max-width: 530px;

    margin: 5px 0 8px;
}


.wd-about-parishes div {
    display: flex;
    align-items: center;
    justify-content: space-between;

    padding: 7px 0;

    border-bottom: 1px solid #e8edef;
}


.wd-about-parishes span {
    font-size: 12px;

    color: #667781;
}


.wd-about-parishes b {
    font-size: 11px;

    color: #7d2938;
}


/* =========================================================
   DATE HIGHLIGHT
========================================================= */

.wd-about-date {
    position: relative;

    display: flex;
    align-items: center;

    width: min(900px, 100%);

    margin: -20px auto 120px;

    padding: 48px 55px;

    background: #17384f;

    box-shadow:
        0 25px 65px rgba(20, 45, 63, .16);

    color: #ffffff;
}


.wd-about-date::before {
    content: "";

    position: absolute;

    top: 0;
    left: 0;

    width: 8px;
    height: 100%;

    background: #7d2938;
}


.wd-about-date-number {
    flex: 0 0 145px;

    padding-right: 35px;

    border-right: 1px solid rgba(255,255,255,.2);

    text-align: center;
}


.wd-about-date-number strong {
    display: block;

    font-family: Georgia, "Times New Roman", serif;

    font-size: 72px;
    line-height: .85;

    font-weight: 700;
}


.wd-about-date-number span {
    display: block;

    margin-top: 15px;

    font-size: 10px;
    font-weight: 700;

    letter-spacing: 3px;
}


.wd-about-date-number small {
    display: block;

    margin-top: 7px;

    font-size: 12px;

    opacity: .7;
}


.wd-about-date-content {
    padding-left: 40px;
}


.wd-about-date-content > span {
    font-size: 10px;
    font-weight: 700;

    letter-spacing: 2.5px;

    opacity: .65;
}


.wd-about-date-content h2 {
    margin: 10px 0 13px;

    font-family: Georgia, "Times New Roman", serif;

    font-size: clamp(27px, 3vw, 38px);

    line-height: 1.15;
}


.wd-about-date-content p {
    max-width: 580px;

    margin: 0;

    font-size: 14px;
    line-height: 1.8;

    opacity: .78;
}


.wd-about-date-content strong {
    color: #ffffff;
}


/* =========================================================
   FINAL STORY
========================================================= */

.wd-about-final {
    display: grid;

    grid-template-columns: minmax(0, 1.15fr) minmax(0, .85fr);

    width: 100%;

    min-height: 600px;

    background: #17384f;

    box-shadow:
        0 25px 70px rgba(20,45,63,.13);

    overflow: hidden;
}


.wd-about-final-image {
    position: relative;

    min-height: 600px;

    overflow: hidden;

    clip-path: polygon(
        0 0,
        100% 0,
        88% 100%,
        0 100%
    );
}


.wd-about-final-image img {
    width: 100%;
    height: 100%;

    display: block;

    object-fit: cover;
}


.wd-about-final-content {
    display: flex;
    flex-direction: column;
    justify-content: center;

    padding: clamp(45px, 6vw, 85px);

    color: #ffffff;
}


.wd-about-final-content > span {
    margin-bottom: 18px;

    font-size: 10px;
    font-weight: 700;

    letter-spacing: 3px;

    color: #bfcbd2;
}


.wd-about-final-content h2 {
    margin: 0 0 25px;

    font-family: Georgia, "Times New Roman", serif;

    font-size: clamp(38px, 4.5vw, 62px);

    line-height: 1.04;

    color: #ffffff;
}


.wd-about-final-content p {
    max-width: 500px;

    margin: 0 0 14px;

    font-size: 14px;
    line-height: 1.85;

    color: rgba(255,255,255,.72);
}


.wd-about-final-content strong {
    color: #ffffff;
}


.wd-about-final-button {
    margin-top: 15px;

    background: #ffffff;
    color: #17384f;
}


.wd-about-final-button:hover {
    background: #eef3f6;
    color: #17384f;
}


/* =========================================================
   LARGE DESKTOP
========================================================= */

@media (min-width: 1600px) {

    .wd-about-history {
        max-width: 1500px;
    }

    .wd-about-story-inner {
        min-height: 620px;
    }

    .wd-about-story-image {
        min-height: 620px;
    }

    .wd-about-story-content {
        padding: 90px;
    }

}


/* =========================================================
   LAPTOP
========================================================= */

@media (max-width: 1199px) {

    .wd-about-history {
        padding-left: 20px;
        padding-right: 20px;
    }

    .wd-about-story-inner {
        min-height: 520px;
    }

    .wd-about-story-image {
        min-height: 520px;
    }

    .wd-about-story-content {
        padding: 50px;
    }

    .wd-about-story-content h2 {
        font-size: 40px;
    }

}


/* =========================================================
   TABLET
========================================================= */

@media (max-width: 991px) {

    .wd-about-intro {
        padding-top: 75px;
        padding-bottom: 75px;
    }


    .wd-about-history {
        padding: 20px 18px 80px;
    }


    .wd-about-story {
        margin-bottom: 65px;
    }


    .wd-about-story-inner {
        min-height: 0;
    }


    .wd-about-story-content {
        padding: 45px 35px;
    }


    .wd-about-story-content h2 {
        font-size: 34px;
    }


    .wd-about-story-content p {
        font-size: 14px;
        line-height: 1.75;
    }


    .wd-about-story-image {
        min-height: 450px;
    }


    .wd-about-date {
        margin-bottom: 80px;

        padding: 40px;
    }


    .wd-about-final {
        min-height: 500px;
    }


    .wd-about-final-image {
        min-height: 500px;
    }


    .wd-about-final-content {
        padding: 45px;
    }

}


/* =========================================================
   MOBILE - 767px
========================================================= */

@media (max-width: 767px) {

    .wd-about-intro {
        padding: 60px 18px;
    }


    .wd-about-intro h1 {
        font-size: 43px;
        letter-spacing: -1px;
    }


    .wd-about-intro p {
        font-size: 14px;
        line-height: 1.7;
    }


    .wd-about-history {
        padding: 15px 14px 60px;
    }


    /* -----------------------------------------
       REMOVE DIAGONAL GRID ON MOBILE
       Keep only subtle angled edge
    ----------------------------------------- */

    .wd-about-story {
        margin-bottom: 45px;
    }


    .wd-about-story-inner {
        display: flex;
        flex-direction: column;

        box-shadow:
            0 12px 40px rgba(22,51,70,.07);
    }


    .wd-about-story-content {
        order: 2;

        padding: 35px 25px;
    }


    .wd-about-story-image {
        order: 1;

        width: 100%;
        height: 280px;
        min-height: 280px;

        margin: 0 !important;

        clip-path: polygon(
            0 0,
            100% 0,
            100% 90%,
            0 100%
        ) !important;
    }


    .wd-about-story-two
    .wd-about-story-image,
    .wd-about-story-four
    .wd-about-story-image {

        clip-path: polygon(
            0 0,
            100% 0,
            100% 100%,
            0 90%
        ) !important;
    }


    .wd-about-number {
        top: 20px;
        right: 20px;
    }


    .wd-about-year {
        font-size: 28px;
    }


    .wd-about-story-content h2 {
        font-size: 30px;
        line-height: 1.12;
    }


    .wd-about-story-content p {
        font-size: 13.5px;
        line-height: 1.75;
    }


    .wd-about-image-tag {
        right: 15px;
        bottom: 25px;

        padding: 7px 12px;

        font-size: 9px;
    }


    /* -----------------------------------------
       PARISHES
    ----------------------------------------- */

    .wd-about-parishes {
        grid-template-columns: 1fr;
        gap: 0;
    }


    .wd-about-parishes div {
        padding: 8px 0;
    }


    /* -----------------------------------------
       DATE
    ----------------------------------------- */

    .wd-about-date {
        flex-direction: column;
        align-items: flex-start;

        width: 100%;

        margin: 0 auto 60px;

        padding: 35px 25px 40px;
    }


    .wd-about-date-number {
        flex: none;

        width: 100%;

        padding: 0 0 25px;

        border-right: 0;

        border-bottom: 1px solid rgba(255,255,255,.2);

        text-align: left;
    }


    .wd-about-date-number strong {
        font-size: 60px;
    }


    .wd-about-date-number span {
        display: inline-block;

        margin-top: 10px;
        margin-left: 8px;
    }


    .wd-about-date-number small {
        display: inline-block;

        margin-left: 8px;
    }


    .wd-about-date-content {
        padding: 25px 0 0;
    }


    .wd-about-date-content h2 {
        font-size: 28px;
    }


    .wd-about-date-content p {
        font-size: 13px;
        line-height: 1.75;
    }


    /* -----------------------------------------
       FINAL
    ----------------------------------------- */

    .wd-about-final {
        display: flex;
        flex-direction: column;

        min-height: 0;
    }


    .wd-about-final-image {
        width: 100%;
        height: 300px;
        min-height: 300px;

        clip-path: polygon(
            0 0,
            100% 0,
            100% 90%,
            0 100%
        );
    }


    .wd-about-final-content {
        padding: 35px 25px 45px;
    }


    .wd-about-final-content h2 {
        font-size: 38px;
    }


    .wd-about-final-content p {
        font-size: 13.5px;
        line-height: 1.75;
    }

}


/* =========================================================
   SMALL MOBILE - 575px
========================================================= */

@media (max-width: 575px) {

    .wd-about-intro {
        padding: 50px 15px;
    }


    .wd-about-kicker {
        font-size: 9px;
        letter-spacing: 2px;
    }


    .wd-about-intro h1 {
        font-size: 36px;
    }


    .wd-about-intro p {
        font-size: 13px;
    }


    .wd-about-history {
        padding-left: 10px;
        padding-right: 10px;
    }


    .wd-about-story-content {
        padding: 30px 20px;
    }


    .wd-about-story-content h2 {
        font-size: 27px;
    }


    .wd-about-story-content p {
        font-size: 13px;
    }


    .wd-about-story-image {
        height: 240px;
        min-height: 240px;
    }


    .wd-about-date {
        padding: 30px 20px 35px;
    }


    .wd-about-date-number strong {
        font-size: 52px;
    }


    .wd-about-date-content h2 {
        font-size: 25px;
    }


    .wd-about-final-image {
        height: 250px;
        min-height: 250px;
    }


    .wd-about-final-content {
        padding: 30px 20px 40px;
    }


    .wd-about-final-content h2 {
        font-size: 32px;
    }

}


/* =========================================================
   EXTRA SMALL MOBILE - 400px
========================================================= */

@media (max-width: 400px) {

    .wd-about-intro h1 {
        font-size: 32px;
    }


    .wd-about-story-content {
        padding: 27px 18px;
    }


    .wd-about-story-content h2 {
        font-size: 25px;
    }


    .wd-about-story-content p {
        font-size: 12.8px;
    }


    .wd-about-button {
        width: 100%;

        padding: 12px 16px;
    }


    .wd-about-date-content h2 {
        font-size: 23px;
    }


    .wd-about-final-content h2 {
        font-size: 29px;
    }

}


/* =========================================================
   ACCESSIBILITY
========================================================= */

.wd-about-button:focus-visible {
    outline: 3px solid rgba(36,91,130,.35);
    outline-offset: 4px;
}


/* =========================================================
   REDUCED MOTION
========================================================= */

@media (prefers-reduced-motion: reduce) {

    .wd-about-story-image img,
    .wd-about-button {
        transition: none;
    }

}
</style>
</head>
<body>

<section class="wd-about-page">

    <!-- =====================================================
         INTRO
    ====================================================== -->

    <div class="wd-about-intro">

        <div class="wd-about-intro-inner">

            <span class="wd-about-kicker">
                ABOUT THE DIOCESE
            </span>

            <h1>
                Our Journey of
                <span>Faith & History</span>
            </h1>

            <p>
                Discover the origins, missionary journey and historic
                formation of the Diocese of Warangal.
            </p>

            <div class="wd-about-intro-line"></div>

        </div>

    </div>


    <!-- =====================================================
         HISTORY WRAPPER
    ====================================================== -->

    <div class="wd-about-history">


        <!-- =================================================
             SECTION 01
             1887
        ================================================== -->

        <article class="wd-about-story wd-about-story-one">

            <div class="wd-about-story-inner">

                <!-- CONTENT -->

                <div class="wd-about-story-content">

                    <div class="wd-about-number">
                        01
                    </div>

                    <span class="wd-about-year">
                        1887
                    </span>

                    <span class="wd-about-label">
                        THE BEGINNING
                    </span>

                    <h2>
                        Origins and Formation
                        of the Diocese
                    </h2>

                    <p>
                        After the bifurcation of Vijayawada Diocese,
                        Hyderabad Diocese was left with Telangana Districts.
                        Of these, let us restrict our view to those that
                        formed Warangal Diocese.
                    </p>

                    <p>
                        The Hyderabad-Vijayawada Railway-line-work had brought
                        a good number of Catholic Employees to the main Railway
                        Junctions / Stations like Kazipet, Dornakal and Khammam.
                    </p>

                    <p>
                        The Baptism Register kept at Kazipet reveals the
                        presence of Catholic Community there since
                        <strong>1887.</strong>
                    </p>

                    <a href="#wd-community"
                       class="wd-about-button">
                        <span>Discover More</span>
                        <b>↗</b>
                    </a>

                </div>


                <!-- IMAGE -->

                <div class="wd-about-story-image">

                    <img src="<?= base_url('assets/img/about/kazipet.jpg'); ?>"
                         alt="Kazipet Catholic Community"
                         loading="lazy">

                    <div class="wd-about-image-tag">
                        KAZIPET
                    </div>

                </div>

            </div>

        </article>



        <!-- =================================================
             SECTION 02
             1890-1930
        ================================================== -->

        <article class="wd-about-story wd-about-story-two"
                 id="wd-community">

            <div class="wd-about-story-inner">

                <!-- IMAGE -->

                <div class="wd-about-story-image">

                    <img src="<?= base_url('assets/img/about/community.jpg'); ?>"
                         alt="Early Catholic Community"
                         loading="lazy">

                    <div class="wd-about-image-tag">
                        1890 — 1930
                    </div>

                </div>


                <!-- CONTENT -->

                <div class="wd-about-story-content">

                    <div class="wd-about-number">
                        02
                    </div>

                    <span class="wd-about-year">
                        1890 — 1930
                    </span>

                    <span class="wd-about-label">
                        A GROWING COMMUNITY
                    </span>

                    <h2>
                        The Catholic
                        Community
                    </h2>

                    <p>
                        It was a mixed Community of Anglo-Indians, Telugus
                        and Tamils, settled at the Railway Junction of Kazipet.
                    </p>

                    <p>
                        Between 1890–1930 a good number of Catholic Families
                        migrated from Guntur and other parts of Coastal Andhra
                        to Telangana in search of good cultivable land for
                        their livelihood.
                    </p>

                    <p>
                        Wherever they found good black soil, they settled there.
                    </p>

                    <a href="#wd-mission"
                       class="wd-about-button">
                        <span>Continue the Journey</span>
                        <b>↗</b>
                    </a>

                </div>

            </div>

        </article>



        <!-- =================================================
             SECTION 03
             MISSIONARY JOURNEY
        ================================================== -->

        <article class="wd-about-story wd-about-story-three"
                 id="wd-mission">

            <div class="wd-about-story-inner">

                <!-- CONTENT -->

                <div class="wd-about-story-content">

                    <div class="wd-about-number">
                        03
                    </div>

                    <span class="wd-about-year">
                        MISSION
                    </span>

                    <span class="wd-about-label">
                        MISSIONARY SERVICE
                    </span>

                    <h2>
                        Growing Through
                        Mission
                    </h2>

                    <p>
                        The early Missionaries helped these migrant Traditional
                        Catholic Communities in their settlements and took care
                        of their spiritual needs.
                    </p>

                    <p>
                        Some of these Catholic Villages were erected into
                        Parishes in course of time and were taken care of by
                        PIME Missionaries of Milan, Italy.
                    </p>

                    <p>
                        While taking care of existing Catholics, being true to
                        their missionary charism, the PIME Fathers engaged
                        themselves in spreading the faith to others of the area
                        and gradually won many people for Christ.
                    </p>

                    <p>
                        The growth of Mission Centres and the number of the
                        Faithful largely increased.
                    </p>

                </div>


                <!-- IMAGE -->

                <div class="wd-about-story-image">

                    <img src="<?= base_url('assets/img/about/mission.jpg'); ?>"
                         alt="Missionary Service"
                         loading="lazy">

                    <div class="wd-about-image-tag">
                        MISSION
                    </div>

                </div>

            </div>

        </article>



        <!-- =================================================
             SECTION 04
             PARISHES
        ================================================== -->

        <article class="wd-about-story wd-about-story-four">

            <div class="wd-about-story-inner">

                <!-- IMAGE -->

                <div class="wd-about-story-image">

                    <img src="<?= base_url('assets/img/about/parishes.jpg'); ?>"
                         alt="Historical Catholic Parishes"
                         loading="lazy">

                    <div class="wd-about-image-tag">
                        PARISHES
                    </div>

                </div>


                <!-- CONTENT -->

                <div class="wd-about-story-content">

                    <div class="wd-about-number">
                        04
                    </div>

                    <span class="wd-about-year">
                        1887 — 1952
                    </span>

                    <span class="wd-about-label">
                        HISTORICAL CENTRES
                    </span>

                    <h2>
                        The First
                        Parishes
                    </h2>

                    <p>
                        Some of the Centers being already Parishes before
                        the formation of the Diocese of Warangal are:
                    </p>


                    <div class="wd-about-parishes">

                        <div>
                            <span>Kazipet</span>
                            <b>1887</b>
                        </div>

                        <div>
                            <span>Byyaram</span>
                            <b>1901</b>
                        </div>

                        <div>
                            <span>Bhimaram</span>
                            <b>1905</b>
                        </div>

                        <div>
                            <span>Mattampally</span>
                            <b>1908</b>
                        </div>

                        <div>
                            <span>Kanchanapalli</span>
                            <b>1910</b>
                        </div>

                        <div>
                            <span>Vepala Singaram</span>
                            <b>1910</b>
                        </div>

                        <div>
                            <span>Wangamarthy</span>
                            <b>1914</b>
                        </div>

                        <div>
                            <span>Bhimanapally</span>
                            <b>1917</b>
                        </div>

                        <div>
                            <span>Monugodu</span>
                            <b>1919</b>
                        </div>

                        <div>
                            <span>Kethepally</span>
                            <b>1932</b>
                        </div>

                    </div>


                    <a href="<?= base_url('images/Aboutus.pdf'); ?>"
                       target="_blank"
                       class="wd-about-button">
                        <span>View Complete History</span>
                        <b>↗</b>
                    </a>

                </div>

            </div>

        </article>



        <!-- =================================================
             SECTION 05
             1949
        ================================================== -->

        <article class="wd-about-story wd-about-story-five">

            <div class="wd-about-story-inner">

                <!-- CONTENT -->

                <div class="wd-about-story-content">

                    <div class="wd-about-number">
                        05
                    </div>

                    <span class="wd-about-year wd-year-special">
                        1949
                    </span>

                    <span class="wd-about-label">
                        A HISTORIC MILESTONE
                    </span>

                    <h2>
                        The Birth of
                        a New Diocese
                    </h2>

                    <p>
                        The plan of creating the new Diocese of Warangal was
                        clear already in 1949, when Msgr. Alphonsus Beretta PIME,
                        the Vicar Capitular of Hyderabad then, asked Fr. Gino
                        Pazzaglini, the then Parish Priest of Kazipet, to look
                        for a site for the future Diocesan Headquarters.
                    </p>

                    <p>
                        Fr. Mariani, PIME, was entrusted with the work.
                        With his efforts and prayers, he bought
                        <strong>71 acres of land</strong> about 1½ kms from
                        Kazipet and 11 kms from Warangal, which is present
                        Fatimanagar.
                    </p>

                </div>


                <!-- IMAGE -->

                <div class="wd-about-story-image">

                    <img src="<?= base_url('assets/img/about/fatimanagar.jpg'); ?>"
                         alt="Fatimanagar"
                         loading="lazy">

                    <div class="wd-about-image-tag">
                        FATIMANAGAR
                    </div>

                </div>

            </div>

        </article>



        <!-- =================================================
             18 AUGUST 1949
        ================================================== -->

        <div class="wd-about-date">

            <div class="wd-about-date-number">

                <strong>18</strong>

                <span>AUGUST</span>

                <small>1949</small>

            </div>


            <div class="wd-about-date-content">

                <span>
                    A DAY TO REMEMBER
                </span>

                <h2>
                    The Land Was Taken Into Possession
                </h2>

                <p>
                    To take possession of the land, Bro. Sala Pasqualino,
                    PIME, was sent to Warangal on
                    <strong>18th August 1949.</strong>
                </p>

            </div>

        </div>



        <!-- =================================================
             19 AUGUST 1949
        ================================================== -->

        <article class="wd-about-final">

            <div class="wd-about-final-image">

                <img src="<?= base_url('assets/img/about/warangal-diocese.jpg'); ?>"
                     alt="Diocese of Warangal"
                     loading="lazy">

            </div>


            <div class="wd-about-final-content">

                <span>
                    19 AUGUST 1949
                </span>

                <h2>
                    A Small Tent.<br>
                    A Great Beginning.
                </h2>

                <p>
                    Except for a small hut, the whole area was like a semi
                    forest. On the next day, i.e.
                    <strong>19th August 1949</strong>, Bro. Sala pitched his
                    tent on the ground that was destined to become the heart
                    of a new and flourishable Diocese.
                </p>

                <p>
                    If the procurement of the land was a great thing, the grant
                    of permission to utilise it for construction of Bishop’s
                    House and other buildings was a miracle.
                </p>

                <a href="<?= base_url('images/Aboutus.pdf'); ?>"
                   target="_blank"
                   class="wd-about-button wd-about-final-button">

                    <span>Read Complete History</span>

                    <b>↗</b>

                </a>

            </div>

        </article>


    </div>

</section>



</body>












    <?php include __DIR__ . '/footer.php'; ?>