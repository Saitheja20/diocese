<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diocese of Warangal</title>
    <?php include __DIR__ . '/header-links.php'; ?>
        <?php include __DIR__ . '/header.php'; ?>

    <style>

        /* ================================
           GENERAL
        ================================= */

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            background: #ffffff;
            color: #333333;
            font-family: "Poppins", sans-serif;
        }

        .diocese-section {
            width: 100%;
            padding: 30px 0;
        }

        .diocese-container {
            width: 100%;
            max-width: 1620px;
            margin: 0 auto;
            padding: 0 15px;
        }


        /* ================================
           MAIN CARD
        ================================= */

        .diocese-card {
            width: 100%;
            border: 1px solid #cfd8e3;
            border-radius: 7px;
            overflow: hidden;
            background: #ffffff;
        }


        /* ================================
           IMAGE
        ================================= */

        .diocese-image {
            width: 100%;
            height: 470px;
            object-fit: cover;
            display: block;
        }


        /* ================================
           INFORMATION AREA
        ================================= */

        .diocese-content {
            min-height: 470px;
            padding: 18px 25px 20px;
            position: relative;
            display: flex;
            flex-direction: column;
        }


        /* ================================
           TITLE
        ================================= */

        .diocese-title {
            font-size: 26px;
            font-weight: 600;
            color: #123b5d;
            text-align: center;
            margin: 0;
            padding-bottom: 10px;
            border-bottom: 1px solid #d7e0e8;
            text-transform: uppercase;
        }


        /* ================================
           INFORMATION GRID
        ================================= */

        .info-area {
            flex: 1;
            padding-top: 25px;
        }

        .info-row {
            margin-bottom: 32px;
        }

        .info-item {
            display: flex;
            align-items: flex-start;
            gap: 22px;
        }


        /* ================================
           ICON
        ================================= */

        .info-icon {
            width: 62px;
            min-width: 62px;
            height: 62px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 10px;

            background: #eef7f7;
            color: #16817a;

            border: 1px solid #b9dfdc;

            font-size: 27px;
        }


        /* ================================
           TEXT
        ================================= */

        .info-text {
            padding-top: 1px;
        }

        .info-label {
            margin: 0 0 3px;
            font-size: 19px;
            font-weight: 600;
            color: #23445c;
        }

        .info-value {
            margin: 0;
            font-size: 17px;
            line-height: 1.55;
            color: #697782;
        }


        /* ================================
           HISTORY AREA
        ================================= */

        .history-content {
            display: none;
            flex: 1;
            padding-top: 22px;
            overflow-y: auto;
        }

        .history-content.active {
            display: block;
        }

        .history-title {
            font-size: 21px;
            font-weight: 600;
            color: #16817a;
            margin-bottom: 12px;
        }

        .history-text {
            font-size: 16px;
            line-height: 1.8;
            color: #596b78;
            margin: 0;
        }

        .history-subtitle {
            font-size: 18px;
            font-weight: 600;
            color: #23445c;
            margin-top: 20px;
            margin-bottom: 10px;
        }

        .history-list {
            margin: 0;
            padding-left: 22px;
        }

        .history-list li {
            font-size: 16px;
            line-height: 1.8;
            color: #596b78;
            margin-bottom: 4px;
        }


        /* ================================
           HISTORY BUTTON
        ================================= */

        .history-button-area {
            text-align: center;
            padding-top: 8px;
        }

        .history-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 9px;

            padding: 8px 13px;

            border: 1px solid #16817a;
            border-radius: 8px;

            background: #ffffff;
            color: #16817a;

            font-size: 16px;
            font-weight: 500;

            cursor: pointer;
        }

        .history-btn:hover {
            background: #16817a;
            color: #ffffff;
        }

        .history-arrow {
            font-size: 20px;
            line-height: 1;
        }


        /* ================================
           SECOND SECTION
        ================================= */

        .second-section {
            margin-top: 30px;
        }


        /* ================================
           RESPONSIVE
        ================================= */

        @media (max-width: 1199px) {

            .diocese-image {
                height: 450px;
            }

            .diocese-content {
                min-height: 450px;
                padding: 18px 20px 20px;
            }

            .info-item {
                gap: 16px;
            }

            .info-icon {
                width: 55px;
                min-width: 55px;
                height: 55px;
                font-size: 24px;
            }

            .info-label {
                font-size: 18px;
            }

            .info-value {
                font-size: 16px;
            }

        }


        @media (max-width: 991px) {

            .diocese-image {
                height: 400px;
            }

            .diocese-content {
                min-height: auto;
                height: auto;
                padding: 20px;
            }

            .info-area {
                padding-top: 25px;
            }

            .info-row {
                margin-bottom: 25px;
            }

            .info-item {
                gap: 15px;
            }

            .info-label {
                font-size: 18px;
            }

            .info-value {
                font-size: 16px;
            }

            .history-content {
                max-height: none;
                overflow-y: visible;
            }

        }


        @media (max-width: 767px) {

            .diocese-section {
                padding: 20px 0;
            }

            .diocese-container {
                padding: 0 12px;
            }

            .diocese-card {
                border-radius: 6px;
            }

            .diocese-image {
                height: 330px;
            }

            .diocese-content {
                min-height: auto;
                padding: 18px 16px 20px;
            }

            .diocese-title {
                font-size: 23px;
                padding-bottom: 10px;
            }

            .info-area {
                padding-top: 22px;
            }

            .info-row {
                margin-bottom: 24px;
            }

            .info-icon {
                width: 52px;
                min-width: 52px;
                height: 52px;
                font-size: 23px;
            }

            .info-item {
                gap: 14px;
            }

            .info-label {
                font-size: 17px;
            }

            .info-value {
                font-size: 15px;
                line-height: 1.6;
            }

            .history-title {
                font-size: 19px;
            }

            .history-text {
                font-size: 15px;
                line-height: 1.7;
            }

            .history-subtitle {
                font-size: 17px;
            }

            .history-list li {
                font-size: 15px;
                line-height: 1.7;
            }

            .history-btn {
                font-size: 15px;
            }

        }


        @media (max-width: 575px) {

            .diocese-image {
                height: 280px;
            }

            .diocese-content {
                padding: 16px 14px 18px;
            }

            .diocese-title {
                font-size: 21px;
            }

            .info-item {
                gap: 12px;
            }

            .info-icon {
                width: 48px;
                min-width: 48px;
                height: 48px;
                font-size: 21px;
            }

            .info-label {
                font-size: 16px;
            }

            .info-value {
                font-size: 14px;
            }

            .history-title {
                font-size: 18px;
            }

            .history-text {
                font-size: 14px;
            }

            .history-subtitle {
                font-size: 16px;
            }

            .history-list li {
                font-size: 14px;
            }

        }


        @media (max-width: 400px) {

            .diocese-image {
                height: 240px;
            }

            .diocese-title {
                font-size: 19px;
            }

            .info-icon {
                width: 44px;
                min-width: 44px;
                height: 44px;
                font-size: 19px;
            }

            .info-label {
                font-size: 15px;
            }

            .info-value {
                font-size: 13px;
            }

            .history-text {
                font-size: 13px;
            }

            .history-list li {
                font-size: 13px;
            }

        }

    </style>

</head>


<body>


 
    <section class="diocese-section">

        <div class="diocese-container">

            <div class="diocese-card">

                <div class="row g-0 align-items-stretch">


                    <!-- IMAGE LEFT -->

                    <div class="col-lg-4">

                        <img
                            src="https://images.unsplash.com/photo-1548625361-ec7f2b4f3f2d?auto=format&fit=crop&w=1000&q=80"
                            alt="Appannapet Church"
                            class="diocese-image">

                    </div>


                    <!-- INFORMATION RIGHT -->

                    <div class="col-lg-8">

                        <div class="diocese-content">


                            <!-- TITLE -->

                            <h2 class="diocese-title">
                                APPANNAPET
                            </h2>


                            <!-- NORMAL INFORMATION -->

                            <div
                                class="info-area"
                                id="normalInfo1">

                                <div class="row">


                                    <!-- FORMED ON -->

                                    <div class="col-md-6">

                                        <div class="info-row">

                                            <div class="info-item">

                                                <div class="info-icon">
                                                    <i class="fa-regular fa-calendar-check"></i>
                                                </div>

                                                <div class="info-text">

                                                    <p class="info-label">
                                                        Formed on
                                                    </p>

                                                    <p class="info-value">
                                                        1970
                                                    </p>

                                                </div>

                                            </div>

                                        </div>

                                    </div>


                                    <!-- ADDRESS -->

                                    <div class="col-md-6">

                                        <div class="info-row">

                                            <div class="info-item">

                                                <div class="info-icon">
                                                    <i class="fa-solid fa-map-location-dot"></i>
                                                </div>

                                                <div class="info-text">

                                                    <p class="info-label">
                                                        Address
                                                    </p>

                                                    <p class="info-value">
                                                        Karimnagar- Godavarikhani main Road,
                                                        about 120 kms away from Warangal City,
                                                        going via Karimnagar Town
                                                    </p>

                                                </div>

                                            </div>

                                        </div>

                                    </div>


                                    <!-- PARISH -->

                                    <div class="col-md-6">

                                        <div class="info-row">

                                            <div class="info-item">

                                                <div class="info-icon">
                                                    <i class="fa-solid fa-cross"></i>
                                                </div>

                                                <div class="info-text">

                                                    <p class="info-label">
                                                        Parish
                                                    </p>

                                                    <p class="info-value">
                                                        Appannapet Parish
                                                    </p>

                                                </div>

                                            </div>

                                        </div>

                                    </div>


                                    <!-- LOCATION -->

                                    <div class="col-md-6">

                                        <div class="info-row">

                                            <div class="info-item">

                                                <div class="info-icon">
                                                    <i class="fa-solid fa-location-dot"></i>
                                                </div>

                                                <div class="info-text">

                                                    <p class="info-label">
                                                        Location
                                                    </p>

                                                    <p class="info-value">
                                                        Appannapeta, 3 kms from Peddapalli
                                                        towards Ramagundam
                                                    </p>

                                                </div>

                                            </div>

                                        </div>

                                    </div>


                                    <!-- SUB-STATIONS -->

                                    <div class="col-md-6">

                                        <div class="info-row">

                                            <div class="info-item">

                                                <div class="info-icon">
                                                    <i class="fa-solid fa-church"></i>
                                                </div>

                                                <div class="info-text">

                                                    <p class="info-label">
                                                        Sub-stations
                                                    </p>

                                                    <p class="info-value">
                                                        4 Sub-stations
                                                    </p>

                                                </div>

                                            </div>

                                        </div>

                                    </div>


                                    <!-- CATHOLICS -->

                                    <div class="col-md-6">

                                        <div class="info-row">

                                            <div class="info-item">

                                                <div class="info-icon">
                                                    <i class="fa-solid fa-people-group"></i>
                                                </div>

                                                <div class="info-text">

                                                    <p class="info-label">
                                                        Catholics
                                                    </p>

                                                    <p class="info-value">
                                                        Appannapet Village : 34
                                                    </p>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>


                            <!-- HISTORY -->

                            <div
                                class="history-content"
                                id="historyInfo1">

                                <h3 class="history-title">
                                    APPANNAPET (1970)
                                </h3>

                                <p class="history-text">

                                    The Parish of Appannapet with the surrounding area was once a part of Kazipet Parish. It came under Karimnagar Parish, when it was formed into a Parish in 1966. It is located on the Karimnagar- Godavarikhani main Road about 120 kms away from Warangal City, going via Karimnagar Town. In the year 1942, four catholic families and three non-christian families came from Patibandla and Jangalapalli of Guntur District to a village called Nimmanapalli, about 4 kms from Peddapalli. In 1943, some more catholic families from Patibandla, Phirangipuram and Mellavagu of Guntur Dt. came and purchased about 250 acres of land near the old village of Appannapeta, 3 kms from Peddapalli towards Ramagundam. Fr. Pazzaglini, PIME, and Fr. Lino Dal Balcon, PIME, from Kazipet visited these new settlements of Catholic families. Eventually, these villages came under the jurisdiction of Karimnagar Parish, which was erected on 01-07-1966. Since then, Fr.G.Tirinzoni,PIME, as the Parish Priest of Karimnagar, used to visit them regularly. Catholics in Appannapet Village : 34

                                </p>


                                <h4 class="history-subtitle">
                                    Sub-stations:
                                </h4>

                                <ol class="history-list">

                                    <li>
                                        <strong>Andugulapalli</strong>
                                        Patron: St. Anthony
                                    </li>

                                    <li>
                                        <strong>Basanthnagar</strong>
                                        Patron: Our Lady of Velankanni
                                    </li>

                                    <li>
                                        <strong>Nimmanapalli</strong>
                                        Patron: St. Francis Xavier
                                    </li>

                                    <li>
                                        <strong>Peddapalli</strong>
                                        Patrons: Jesus - Mary - Joseph
                                    </li>

                                </ol>

                            </div>


                            <!-- BUTTON -->

                            <div class="history-button-area">

                                <button
                                    type="button"
                                    class="history-btn"
                                    onclick="toggleHistory(1)"
                                    id="historyButton1">

                                    <span id="buttonText1">
                                        View History
                                    </span>

                                    <span class="history-arrow">
                                        →
                                    </span>

                                </button>

                            </div>


                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!-- =====================================================
         SECOND SECTION
         INFORMATION LEFT / IMAGE RIGHT
    ====================================================== -->

    <section class="diocese-section second-section">

        <div class="diocese-container">

            <div class="diocese-card">

                <div class="row g-0 align-items-stretch">


                    <!-- INFORMATION LEFT -->

                    <div class="col-lg-8 order-2 order-lg-1">

                        <div class="diocese-content">


                            <!-- TITLE -->

                            <h2 class="diocese-title">
                                APPANNAPET
                            </h2>


                            <!-- NORMAL INFORMATION -->

                            <div
                                class="info-area"
                                id="normalInfo2">

                                <div class="row">


                                    <!-- FORMED ON -->

                                    <div class="col-md-6">

                                        <div class="info-row">

                                            <div class="info-item">

                                                <div class="info-icon">
                                                    <i class="fa-regular fa-calendar-check"></i>
                                                </div>

                                                <div class="info-text">

                                                    <p class="info-label">
                                                        Formed on
                                                    </p>

                                                    <p class="info-value">
                                                        1970
                                                    </p>

                                                </div>

                                            </div>

                                        </div>

                                    </div>


                                    <!-- ADDRESS -->

                                    <div class="col-md-6">

                                        <div class="info-row">

                                            <div class="info-item">

                                                <div class="info-icon">
                                                    <i class="fa-solid fa-map-location-dot"></i>
                                                </div>

                                                <div class="info-text">

                                                    <p class="info-label">
                                                        Address
                                                    </p>

                                                    <p class="info-value">
                                                        Karimnagar- Godavarikhani main Road,
                                                        about 120 kms away from Warangal City,
                                                        going via Karimnagar Town
                                                    </p>

                                                </div>

                                            </div>

                                        </div>

                                    </div>


                                    <!-- PARISH -->

                                    <div class="col-md-6">

                                        <div class="info-row">

                                            <div class="info-item">

                                                <div class="info-icon">
                                                    <i class="fa-solid fa-cross"></i>
                                                </div>

                                                <div class="info-text">

                                                    <p class="info-label">
                                                        Parish
                                                    </p>

                                                    <p class="info-value">
                                                        Appannapet Parish
                                                    </p>

                                                </div>

                                            </div>

                                        </div>

                                    </div>


                                    <!-- LOCATION -->

                                    <div class="col-md-6">

                                        <div class="info-row">

                                            <div class="info-item">

                                                <div class="info-icon">
                                                    <i class="fa-solid fa-location-dot"></i>
                                                </div>

                                                <div class="info-text">

                                                    <p class="info-label">
                                                        Location
                                                    </p>

                                                    <p class="info-value">
                                                        Appannapeta, 3 kms from Peddapalli
                                                        towards Ramagundam
                                                    </p>

                                                </div>

                                            </div>

                                        </div>

                                    </div>


                                    <!-- SUB-STATIONS -->

                                    <div class="col-md-6">

                                        <div class="info-row">

                                            <div class="info-item">

                                                <div class="info-icon">
                                                    <i class="fa-solid fa-church"></i>
                                                </div>

                                                <div class="info-text">

                                                    <p class="info-label">
                                                        Sub-stations
                                                    </p>

                                                    <p class="info-value">
                                                        4 Sub-stations
                                                    </p>

                                                </div>

                                            </div>

                                        </div>

                                    </div>


                                    <!-- CATHOLICS -->

                                    <div class="col-md-6">

                                        <div class="info-row">

                                            <div class="info-item">

                                                <div class="info-icon">
                                                    <i class="fa-solid fa-people-group"></i>
                                                </div>

                                                <div class="info-text">

                                                    <p class="info-label">
                                                        Catholics
                                                    </p>

                                                    <p class="info-value">
                                                        Appannapet Village : 34
                                                    </p>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>


                            <!-- HISTORY -->

                            <div
                                class="history-content"
                                id="historyInfo2">

                                <h3 class="history-title">
                                    APPANNAPET (1970)
                                </h3>

                                <p class="history-text">

                                    The Parish of Appannapet with the surrounding area was once a part of Kazipet Parish. It came under Karimnagar Parish, when it was formed into a Parish in 1966. It is located on the Karimnagar- Godavarikhani main Road about 120 kms away from Warangal City, going via Karimnagar Town. In the year 1942, four catholic families and three non-christian families came from Patibandla and Jangalapalli of Guntur District to a village called Nimmanapalli, about 4 kms from Peddapalli. In 1943, some more catholic families from Patibandla, Phirangipuram and Mellavagu of Guntur Dt. came and purchased about 250 acres of land near the old village of Appannapeta, 3 kms from Peddapalli towards Ramagundam. Fr. Pazzaglini, PIME, and Fr. Lino Dal Balcon, PIME, from Kazipet visited these new settlements of Catholic families. Eventually, these villages came under the jurisdiction of Karimnagar Parish, which was erected on 01-07-1966. Since then, Fr.G.Tirinzoni,PIME, as the Parish Priest of Karimnagar, used to visit them regularly. Catholics in Appannapet Village : 34

                                </p>


                                <h4 class="history-subtitle">
                                    Sub-stations:
                                </h4>

                                <ol class="history-list">

                                    <li>
                                        <strong>Andugulapalli</strong>
                                        Patron: St. Anthony
                                    </li>

                                    <li>
                                        <strong>Basanthnagar</strong>
                                        Patron: Our Lady of Velankanni
                                    </li>

                                    <li>
                                        <strong>Nimmanapalli</strong>
                                        Patron: St. Francis Xavier
                                    </li>

                                    <li>
                                        <strong>Peddapalli</strong>
                                        Patrons: Jesus - Mary - Joseph
                                    </li>

                                </ol>

                            </div>


                            <!-- BUTTON -->

                            <div class="history-button-area">

                                <button
                                    type="button"
                                    class="history-btn"
                                    onclick="toggleHistory(2)"
                                    id="historyButton2">

                                    <span id="buttonText2">
                                        View History
                                    </span>

                                    <span class="history-arrow">
                                        →
                                    </span>

                                </button>

                            </div>


                        </div>

                    </div>


                    <!-- IMAGE RIGHT -->

                    <div class="col-lg-4 order-1 order-lg-2">

                        <img
                            src="https://images.unsplash.com/photo-1548625361-ec7f2b4f3f2d?auto=format&fit=crop&w=1000&q=80"
                            alt="Appannapet Church"
                            class="diocese-image">

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!-- =====================================================
         JAVASCRIPT
    ====================================================== -->

    <script>

        function toggleHistory(number) {

            const normalInfo =
                document.getElementById("normalInfo" + number);

            const historyInfo =
                document.getElementById("historyInfo" + number);

            const buttonText =
                document.getElementById("buttonText" + number);


            if (historyInfo.classList.contains("active")) {

                historyInfo.classList.remove("active");

                normalInfo.style.display = "block";

                buttonText.textContent = "View History";

            } else {

                normalInfo.style.display = "none";

                historyInfo.classList.add("active");

                buttonText.textContent = "View History";

            }

        }

    </script>


</body>


    <?php include __DIR__ . '/footer.php'; ?>