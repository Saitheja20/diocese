<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diocese of Warangal</title>
    <?php include __DIR__ . '/header-links.php'; ?>


    <?php include __DIR__ . '/header.php'; ?>






    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            background: #ffffff;
            font-family: "Poppins", sans-serif;
            color: #333;
        }

        /* =========================
           MAIN SECTION
        ========================== */

        .formation-section {
            padding: 25px 48px 60px;
            width: 100%;
        }

        /* =========================
           SECTION HEADING
        ========================== */

        .section-title {
            font-size: 40px;
            font-weight: 500;
            color: #252a2e;
            margin: 0 0 15px 0;
            line-height: 1.2;
        }

        /* =========================
           ACCORDION
        ========================== */

        .formation-accordion {
            width: 100%;
            margin: 0;
        }

        .accordion-item {
            border: none !important;
            border-radius: 0 !important;
            margin-bottom: 0;
            background: #fff;
            overflow: hidden;
        }

        .accordion-button {
            background: #f4f6f8;
            color: #123f73;
            font-family: "Poppins", sans-serif;
            font-size: 17px;
            font-weight: 500;
            padding: 17px 20px;
            min-height: 64px;
            border: none !important;
            border-bottom: 1px solid #d9dee3 !important;
            box-shadow: none !important;
        }

        .accordion-button:hover {
            background: #eef3f8;
            color: #0d4d89;
        }

        .accordion-button:not(.collapsed) {
            background: #cfe0fa;
            color: #0d3d70;
            box-shadow: none !important;
        }

        .accordion-button::after {
            width: 18px;
            height: 18px;
            background-size: 18px;
        }

        .accordion-button:not(.collapsed)::after {
            transform: rotate(-180deg);
        }

        .accordion-collapse {
            border: none;
        }

        .accordion-body {
            background: #ffffff;
            padding: 22px 20px 28px;
        }

        /* =========================
           TABLE
        ========================== */

        .institution-table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #d7dde3;
            table-layout: fixed;
        }

        .institution-table tr {
            border-bottom: 1px solid #d7dde3;
        }

        .institution-table tr:last-child {
            border-bottom: none;
        }

        .institution-table th,
        .institution-table td {
            border-right: 1px solid #d7dde3;
            padding: 10px;
            vertical-align: top;
            font-family: "Poppins", sans-serif;
            font-size: 16px;
            line-height: 1.45;
        }

        .institution-table th {
            width: 250px;
            font-weight: 600;
            color: #17212b;
            background: #ffffff;
        }

        .institution-table td {
            color: #202020;
            background: #ffffff;
        }

        .institution-table th:last-child,
        .institution-table td:last-child {
            border-right: none;
        }

        /* =========================
           HISTORY
        ========================== */

        .history-text {
            margin: 0;
        }

        .history-more {
            display: none;
        }

        .read-more-btn {
            display: inline-block;
            margin-top: 4px;
            color: #0d6efd;
            font-size: 15px;
            font-family: "Poppins", sans-serif;
            text-decoration: underline;
            cursor: pointer;
            border: none;
            background: transparent;
            padding: 0;
        }

        .read-more-btn:hover {
            color: #084298;
        }

        /* =========================
           SECTION GAP
        ========================== */

        .section-block {
            margin-bottom: 55px;
        }

        /* =========================
           TABLET
        ========================== */

        @media (max-width: 992px) {

            .formation-section {
                padding: 25px 30px 50px;
            }

            .section-title {
                font-size: 42px;
            }

            .accordion-button {
                font-size: 16px;
                padding: 16px 18px;
            }

            .accordion-body {
                padding: 20px 15px 25px;
            }

            .institution-table th,
            .institution-table td {
                font-size: 15px;
            }

            .institution-table th {
                width: 220px;
            }
        }

        /* =========================
           MOBILE
        ========================== */

        @media (max-width: 768px) {

            .formation-section {
                padding: 25px 20px 45px;
            }

            .section-title {
                font-size: 36px;
                margin-bottom: 14px;
            }

            .accordion-button {
                font-size: 15px;
                line-height: 1.45;
                padding: 15px 16px;
                min-height: 60px;
                padding-right: 45px;
            }

            .accordion-body {
                padding: 15px 10px 22px;
            }

            .institution-table {
                table-layout: auto;
            }

            .institution-table th,
            .institution-table td {
                font-size: 14px;
                padding: 9px;
            }

            .institution-table th {
                width: 190px;
            }

            .read-more-btn {
                font-size: 14px;
            }

        }

        /* =========================
           SMALL MOBILE
        ========================== */

        @media (max-width: 576px) {

            .formation-section {
                padding: 22px 12px 40px;
            }

            .section-title {
                font-size: 30px;
                line-height: 1.25;
                margin-bottom: 12px;
            }

            .section-block {
                margin-bottom: 40px;
            }

            .accordion-button {
                font-size: 14px;
                line-height: 1.45;
                padding: 14px 14px;
                min-height: 58px;
                padding-right: 42px;
            }

            .accordion-button::after {
                width: 16px;
                height: 16px;
                background-size: 16px;
            }

            .accordion-body {
                padding: 12px 0 18px;
            }

            /* Responsive table becomes stacked */

            .institution-table,
            .institution-table tbody,
            .institution-table tr,
            .institution-table th,
            .institution-table td {
                display: block;
                width: 100%;
            }

            .institution-table {
                border: 1px solid #d7dde3;
            }

            .institution-table tr {
                border-bottom: 1px solid #d7dde3;
            }

            .institution-table tr:last-child {
                border-bottom: none;
            }

            .institution-table th {
                width: 100%;
                border-right: none;
                border-bottom: 1px solid #e0e4e8;
                background: #f7f8fa;
                padding: 9px 10px 5px;
                font-size: 14px;
            }

            .institution-table td {
                width: 100%;
                border-right: none;
                padding: 7px 10px 10px;
                font-size: 14px;
                line-height: 1.55;
            }

            .read-more-btn {
                font-size: 14px;
            }

        }

        /* =========================
           EXTRA SMALL MOBILE
        ========================== */

        @media (max-width: 400px) {

            .formation-section {
                padding-left: 10px;
                padding-right: 10px;
            }

            .section-title {
                font-size: 27px;
            }

            .accordion-button {
                font-size: 13px;
                padding: 13px 12px;
                padding-right: 38px;
            }

            .institution-table th,
            .institution-table td {
                font-size: 13px;
            }

        }

    </style>

</head>

<body>


<!-- =========================================================
     SECTION 1 - SEMINORS
========================================================= -->

<section class="formation-section">

    <div class="section-block">

        <h1 class="section-title">Seminors</h1>

        <div class="accordion formation-accordion" id="seminorsAccordion">


            <!-- 1. ST PIUS X SEMINARY -->

            <div class="accordion-item">

                <h2 class="accordion-header" id="seminorHeadingOne">

                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#seminorOne"
                        aria-expanded="false"
                        aria-controls="seminorOne">

                        1.St.PIUS X SEMINARY - 1956

                    </button>

                </h2>

                <div id="seminorOne"
                    class="accordion-collapse collapse"
                    aria-labelledby="seminorHeadingOne"
                    data-bs-parent="#seminorsAccordion">

                    <div class="accordion-body">

                        <table class="institution-table">

                            <tr>
                                <th>Name of the Institution</th>
                                <td>St. Pius X Seminary</td>
                            </tr>

                            <tr>
                                <th>Name of the Management</th>
                                <td>Warangal Diocesan Society</td>
                            </tr>

                            <tr>
                                <th>Name of the Rector</th>
                                <td>Rev. Fr. T. Yaga Reddy</td>
                            </tr>

                            <tr>
                                <th>Address</th>
                                <td>
                                    The Rector, St. Pius X Seminary, Fatimanagar,
                                    Warangal - 506 004, Tel. (0870) 2459506
                                </td>
                            </tr>

                            <tr>
                                <th>History</th>

                                <td>

                                    <span class="history-short">
                                        St. Pius X Seminary, Fatimanagar, is Warangal Diocesan Apostolic & Minor Seminary.
                                        To foster & promote local vocations to the priesthood, Most Rev. Alponsus Beretta,
                                        PIME, the former Bishop of Warangal, laid the foundation stone for St. Pius X Seminary
                                        in 1954. Fr. Finelli, PIME, and Fr. Guido Tirinzoni, PIME, played key roles in stabilizing
                                        this Seminary, adding wings to the building and starting the Minor Seminary in 1961.
                                    </span>

                                    <span class="history-more">
                                        Latin, English, Bible, Church History, etc. were taught. Several priests and PIME fathers
                                        contributed to teaching and spiritual formation. Over the years, the system evolved with
                                        changes post-Vatican Council II. Intermediate studies were introduced in 1971. Since 1995,
                                        Fr. M. Yagaiah has served as the confessor and spiritual guide. The seminary has helped form
                                        95 local priests serving in Warangal, Nalgonda, and Khammam — including Bishop Thumma Bala.
                                    </span>

                                    <br>

                                    <button class="read-more-btn" onclick="toggleHistory(this)">
                                        Read more
                                    </button>

                                </td>

                            </tr>

                        </table>

                    </div>

                </div>

            </div>


            <!-- 2. ST XAVIER'S MAJOR SEMINARY -->

            <div class="accordion-item">

                <h2 class="accordion-header" id="seminorHeadingTwo">

                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#seminorTwo"
                        aria-expanded="false"
                        aria-controls="seminorTwo">

                        2.ST.XAVIER'S MAJOR SEMINARY -1999

                    </button>

                </h2>

                <div id="seminorTwo"
                    class="accordion-collapse collapse"
                    aria-labelledby="seminorHeadingTwo"
                    data-bs-parent="#seminorsAccordion">

                    <div class="accordion-body">

                        <table class="institution-table">

                            <tr>
                                <th>Name of the Institution</th>
                                <td>St.Francis Xavier's Major Seminary</td>
                            </tr>

                            <tr>
                                <th>Name of the Management</th>
                                <td>Warangal Diocesan Society</td>
                            </tr>

                            <tr>
                                <th>Name of the Rector</th>
                                <td>Rev. Fr. Y.Thomos Kiran</td>
                            </tr>

                            <tr>
                                <th>Address</th>
                                <td>
                                    St. Xavier's Major Seminary, Karunapuram,
                                    Peddapendial (P.O.), Warangal Dt. 506151,
                                    Tel: (08711)243140, (08711)243146.
                                </td>
                            </tr>

                            <tr>
                                <th>History</th>

                                <td>

                                    <span class="history-short">
                                        St.Xavier's Major Seminary -1999 Religious and priestly formation at the Philosophy cum
                                        Degree stage, existing at Don Bosco, Karunapuram witnessed increasing number of seminarians
                                        from the Dioceses and religious congregations. There was a felt -need for yet another seminary
                                        to be established basically to impart priestly formation at Andhra Pradesh. Hence Bishop Thumma
                                        Bala, Bishop of Warangal, took the initiative to study the feasibility of starting a separate
                                        major seminary to accommodate the growing number of seminarians.
                                    </span>

                                    <span class="history-more">
                                        As a result, by God's grace, the Diocese of Warangal established St. Xavier's Major Seminary
                                        at Karunapuram in the year 1999, adjacent to Vishwa Jyothi Don Bosco College of Philosophy.
                                        Within a year, construction work was completed and by June 2000, moved into the new seminary.
                                        It was blessed and inaugurated on 29th June, 2000 by Bishop Thumma Bala. Twelve years down the
                                        line, we are happy that we could render committed and quality priestly and religious formation
                                        to the seminarians from different dioceses of Andhra Pradesh and Orissa, and religious
                                        congregations namely the Fathers of the Precious Blood, The Salvatorians, the Fathers of Holy
                                        Cross and the Society of the Holy spirit.
                                    </span>

                                    <br>

                                    <button class="read-more-btn" onclick="toggleHistory(this)">
                                        Read more
                                    </button>

                                </td>

                            </tr>

                        </table>

                    </div>

                </div>

            </div>


            <!-- 3. DON BOSCO PHILOSOPHATE -->

            <div class="accordion-item">

                <h2 class="accordion-header" id="seminorHeadingThree">

                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#seminorThree"
                        aria-expanded="false"
                        aria-controls="seminorThree">

                        3.DON BOSCO PHILOSOPHATE( 1997)

                    </button>

                </h2>

                <div id="seminorThree"
                    class="accordion-collapse collapse"
                    aria-labelledby="seminorHeadingThree"
                    data-bs-parent="#seminorsAccordion">

                    <div class="accordion-body">

                        <table class="institution-table">

                            <tr>
                                <th>Name of the Institution</th>
                                <td>Salesians of Don Bosco - SDB</td>
                            </tr>

                            <tr>
                                <th>Name of the Management</th>
                                <td>Salesians of Don Bosco,Hyderabad Province</td>
                            </tr>

                            <tr>
                                <th>Name of the Rector</th>
                                <td>Rev.Fr.Mallavarapu Rayanna SDB</td>
                            </tr>

                            <tr>
                                <th>Address</th>
                                <td>
                                    Don Bosco Philosophate, Karunapuram, Peddapendial (P.O.),
                                    Warangal Dt. 506151, Tel::(0870)243 144 (Rector),
                                    (0870)243 145 (Community),(0870)243 146 (College),
                                    (0870)243 147 (Administrator).
                                </td>
                            </tr>

                            <tr>
                                <th>History</th>

                                <td>

                                    <span class="history-short">
                                        Don Bosco Philosophate ( Vishwa Jyothi College) From the beginning, this formation house
                                        was a collaborative venture with the Diocese of Warangal. The diocesan students resided with
                                        the Salesians as one community for the first two years. Later, it was realized that it is
                                        important to make provisions to meet the distinct formation needs of the Diocesan Students as
                                        well of the young Salesians.
                                    </span>

                                    <span class="history-more">
                                        Hence St.Xavier’s Major Seminary was started to cater to the formation needs of the Diocesan
                                        Students. They go to Vishwa Jyothi for their study of Philosophy. In the meantime the Mill Hill
                                        Missionaries have shifted their Formation House to Karunapuram and are sending their Students here.
                                        The Junior Sisters from different Congregations also have their Formation House at karunapuram and
                                        send their Students to study along side the candidates to the Priesthood. The Salesians from
                                        Hyderabad, Dimapur and Guwahati Provinces have their Students here.
                                    </span>

                                    <br>

                                    <button class="read-more-btn" onclick="toggleHistory(this)">
                                        Read more
                                    </button>

                                </td>

                            </tr>

                        </table>

                    </div>

                </div>

            </div>


            <!-- 4. FR BERNHARD BENDEL -->

            <div class="accordion-item">

                <h2 class="accordion-header" id="seminorHeadingFour">

                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#seminorFour"
                        aria-expanded="false"
                        aria-controls="seminorFour">

                        4.FR.BERNHARD BENDEL SEMINARY

                    </button>

                </h2>

                <div id="seminorFour"
                    class="accordion-collapse collapse"
                    aria-labelledby="seminorHeadingFour"
                    data-bs-parent="#seminorsAccordion">

                    <div class="accordion-body">

                        <table class="institution-table">

                            <tr>
                                <th>Name of the Institution</th>
                                <td>Fr.Bernhard Bendel Seminary</td>
                            </tr>

                            <tr>
                                <th>Name of the Management</th>
                                <td>-</td>
                            </tr>

                            <tr>
                                <th>Name of the Rector</th>
                                <td>-</td>
                            </tr>

                            <tr>
                                <th>Address</th>
                                <td>
                                    Fr. Bernhard Bendel seminary, Karunapuram,
                                    Peddapendial (P.O.), Warangal Dt. 506151,
                                    Tel:08706453739.
                                </td>
                            </tr>

                            <tr>
                                <th>History</th>

                                <td>

                                    <span class="history-short">
                                        Fr.Bernhard Bendel Seminary Religious and priestly formation at the Philosophy cum Degree
                                        stage, existing at Don Bosco, Karunapuram witnessed increasing number of seminarians from the
                                        Dioceses and religious congregations. There was a felt -need for yet another seminary to be
                                        established basically to impart priestly formation at Andhra Pradesh.
                                    </span>

                                    <span class="history-more">
                                        Hence Bishop Thumma Bala, Bishop of Warangal, took the initiative to study the feasibility
                                        of starting a separate major seminary to accommodate the growing number of seminarians. As a
                                        result, by God's grace, the Diocese of Warangal established St. Xavier's Major Seminary at
                                        Karunapuram in the year 1999, adjacent to Vishwa Jyothi Don Bosco College of Philosophy.
                                        Within a year, construction work was completed and by June 2000, moved into the new seminary.
                                        It was blessed and inaugurated on 29th June, 2000 by Bishop Thumma Bala. Twelve years down
                                        the line, we are happy that we could render committed and quality priestly and religious
                                        formation to the seminarians from different dioceses of Andhra Pradesh and Orissa, and religious
                                        congregations namely the Fathers of the Precious Blood, The Salvatorians, the Fathers of Holy
                                        Cross and the Society of the Holy spirit.
                                    </span>

                                    <br>

                                    <button class="read-more-btn" onclick="toggleHistory(this)">
                                        Read more
                                    </button>

                                </td>

                            </tr>

                        </table>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- =========================================================
         SECTION 2 - MEN RELIGOUS FORMATION HOUSES
    ========================================================== -->

    <div class="section-block">

        <h1 class="section-title">MEN RELIGOUS FORMATION HOUSES</h1>

        <div class="accordion formation-accordion" id="menAccordion">


            <!-- 1 HOLY CROSS -->

            <div class="accordion-item">

                <h2 class="accordion-header" id="menHeadingOne">

                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#menOne"
                        aria-expanded="false"
                        aria-controls="menOne">

                        1.HOLY CROSS STUDENT-HOME

                    </button>

                </h2>

                <div id="menOne"
                    class="accordion-collapse collapse"
                    aria-labelledby="menHeadingOne"
                    data-bs-parent="#menAccordion">

                    <div class="accordion-body">

                        <table class="institution-table">

                            <tr>
                                <th>Name of the Institution</th>
                                <td>Holy Cross Student-Home</td>
                            </tr>

                            <tr>
                                <th>Name of the Management</th>
                                <td>Fathers of the Holy Cross</td>
                            </tr>

                            <tr>
                                <th>Name of the Rector</th>
                                <td>Rev. Fr. Joby,CSC</td>
                            </tr>

                            <tr>
                                <th>Address</th>
                                <td>
                                    The Rector,Holy Cross Student-Home,Station Ghanpur,
                                    Warangal - 506 144,Tel. (08711) 221193.
                                </td>
                            </tr>

                            <tr>
                                <th>History</th>
                                <td>

                                    <span class="history-short">
                                        Holy Cross Student-Home At the invitation & encouragement of Bishop Thumma Bala,
                                        ‘Holy Cross Student-Home’ has been started by Rev.Fr.Tony Thampi Kayala,CSC,
                                        Provincial of the Fathers of Holy Cross, Bangalore Province, on 1st June, 2002
                                        temporarily at Station Ghanpur.
                                    </span>

                                    <span class="history-more">
                                        Fr. Joepsh Gaspar, CSC, has been appointed as its Rector. There are 8 Candidates
                                        this year. They go to Karunapuram for thier Intermediate studies.
                                    </span>

                                    <br>

                                    <button class="read-more-btn" onclick="toggleHistory(this)">
                                        Read more
                                    </button>

                                </td>
                            </tr>

                        </table>

                    </div>

                </div>

            </div>


            <!-- 2 MILL HILL -->

            <div class="accordion-item">

                <h2 class="accordion-header" id="menHeadingTwo">

                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#menTwo"
                        aria-expanded="false"
                        aria-controls="menTwo">

                        2.Mill Hill FORMATION HOUSE - 1999

                    </button>

                </h2>

                <div id="menTwo"
                    class="accordion-collapse collapse"
                    aria-labelledby="menHeadingTwo"
                    data-bs-parent="#menAccordion">

                    <div class="accordion-body">

                        <table class="institution-table">

                            <tr>
                                <th>Name of the Institution</th>
                                <td>Mill Hill Formation House</td>
                            </tr>

                            <tr>
                                <th>Name of the Management</th>
                                <td>Mill Hill Missionaries</td>
                            </tr>

                            <tr>
                                <th>Name of the Rector</th>
                                <td>Rev. Fr.Yesudas Nayak,MHM</td>
                            </tr>

                            <tr>
                                <th>Address</th>
                                <td>
                                    Mill Hill Formation House, Karunapuram, Peddapendial (P.O.),
                                    Warangal Dt. 506 151, Tel:(08711) 223371.
                                </td>
                            </tr>

                            <tr>
                                <th>History</th>
                                <td>

                                    <span class="history-short">
                                        Mill Hill FORMATION HOUSE - 1999 The Mill Hill Missionaries opened their Formation House
                                        in the Diocese of Warangal in 1999 at Karunapuram at the invitation of BishopThumma Bala.
                                        Fr. Tim Greenway is the local Mill Hill Society Representative.
                                    </span>

                                    <span class="history-more">
                                        The purpose of this house is principally to enable their Candidates to study at Don Bosco
                                        Philosophate as part of their Formation. They also have a year of Spiritual Orientation.
                                    </span>

                                    <br>

                                    <button class="read-more-btn" onclick="toggleHistory(this)">
                                        Read more
                                    </button>

                                </td>
                            </tr>

                        </table>

                    </div>

                </div>

            </div>


            <!-- 3 MISSIONARIES OF THE POOR -->

            <div class="accordion-item">

                <h2 class="accordion-header" id="menHeadingThree">

                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#menThree"
                        aria-expanded="false"
                        aria-controls="menThree">

                        3.MISSIONARIES OF THE POOR (M.O.P.)

                    </button>

                </h2>

                <div id="menThree"
                    class="accordion-collapse collapse"
                    aria-labelledby="menHeadingThree"
                    data-bs-parent="#menAccordion">

                    <div class="accordion-body">

                        <table class="institution-table">

                            <tr>
                                <th>Name of the Institution</th>
                                <td>Christ the King House of Formation</td>
                            </tr>

                            <tr>
                                <th>Name of the Management</th>
                                <td>Missionaries of the Poor</td>
                            </tr>

                            <tr>
                                <th>Name of the Rector</th>
                                <td>Rev.Bro.Birendra”Patrick”Xess, M.O.P</td>
                            </tr>

                            <tr>
                                <th>Address</th>
                                <td>
                                    Christ the King House of Formation Missionaries of the Poor,
                                    Fatimanagar,Warangal - 506 004.Tel. (0870) 2459839 / 2453234.
                                </td>
                            </tr>

                            <tr>
                                <th>History</th>
                                <td>

                                    <span class="history-short">
                                        MISSIONARIES OF THE POOR (M.O.P.) At the invitation of Most Rev. Thumma Bala,
                                        the Founder, Rev. Fr. Richard Ho Lund of the Missionaries of the Poor, which is of
                                        Jamaican origin, West Indies, started their Christ the King House of Formation in
                                        Warangal Diocese at Fatimangar in 1992. It is the first house of their Society in India.
                                    </span>

                                    <span class="history-more">
                                        Fr. Hayden Augustine and Bro. Philip were the Pioneers of this new Mission. The Charism
                                        of the Society is to bring joy to the anawin of Yahweh very similar to that of Mother
                                        Theresa of Calcutta. This institution was opened to cater to the services of the Society
                                        in Warangal and also to recruit Candidates for their Congregation from all parts of India.
                                        The aspiring Candidates from all over India are recruited and a spiritual formation is given
                                        for a year before they are sent to Jamaica for further studies and formation. Bishop Thumma
                                        Bala officially inaugurated this Formation House on 10th July, 1993.
                                    </span>

                                    <br>

                                    <button class="read-more-btn" onclick="toggleHistory(this)">
                                        Read more
                                    </button>

                                </td>
                            </tr>

                        </table>

                    </div>

                </div>

            </div>


            <!-- 4 ST GABRIEL -->

            <div class="accordion-item">

                <h2 class="accordion-header" id="menHeadingFour">

                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#menFour"
                        aria-expanded="false"
                        aria-controls="menFour">

                        4.ST. GABRIEL’S JUNIORATE (S.G.)

                    </button>

                </h2>

                <div id="menFour"
                    class="accordion-collapse collapse"
                    aria-labelledby="menHeadingFour"
                    data-bs-parent="#menAccordion">

                    <div class="accordion-body">

                        <table class="institution-table">

                            <tr>
                                <th>Name of the Institution</th>
                                <td>St. Gabriel’s Juniorate</td>
                            </tr>

                            <tr>
                                <th>Name of the Management</th>
                                <td>Montfort Brothers of St.Gabriel</td>
                            </tr>

                            <tr>
                                <th>Name of the Rector</th>
                                <td>Bro.Marianand</td>
                            </tr>

                            <tr>
                                <th>Address</th>
                                <td>
                                    The Director,St.Gabriel’s Juniorate,Fatimanagar,
                                    Warangal Dt. 506004, Tel:(0870) 2459777.
                                </td>
                            </tr>

                            <tr>
                                <th>History</th>
                                <td>

                                    <span class="history-short">
                                        St. Gabriel’s Juniorate (S.G.) At the encouragement and support of Bishop Alphonsus
                                        Beretta, the then provincial Bro.Louis Bureau (Eleazar) started St.Gabriel’s Formation
                                        House in Warangal Diocese at Fatimanagar in 1957.
                                    </span>

                                    <span class="history-more">
                                        The main purpose of this institute is to promote vocations for their Province of Central
                                        India and give them basic Spiritual Orientation. Candidates are recruited from all over
                                        the Country.
                                    </span>

                                    <br>

                                    <button class="read-more-btn" onclick="toggleHistory(this)">
                                        Read more
                                    </button>

                                </td>
                            </tr>

                        </table>

                    </div>

                </div>

            </div>


            <!-- 5 SALVATORIAN -->

            <div class="accordion-item">

                <h2 class="accordion-header" id="menHeadingFive">

                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#menFive"
                        aria-expanded="false"
                        aria-controls="menFive">

                        5.SALVATORIAN FORMATION HOUSE

                    </button>

                </h2>

                <div id="menFive"
                    class="accordion-collapse collapse"
                    aria-labelledby="menHeadingFive"
                    data-bs-parent="#menAccordion">

                    <div class="accordion-body">

                        <table class="institution-table">

                            <tr>
                                <th>Name of the Institution</th>
                                <td>Jordan Philosophy Study House</td>
                            </tr>

                            <tr>
                                <th>Name of the Management</th>
                                <td>Salvatorians</td>
                            </tr>

                            <tr>
                                <th>Name of the Rector</th>
                                <td>Rev.Fr.Alex,SBS</td>
                            </tr>

                            <tr>
                                <th>Address</th>
                                <td>
                                    The Rector,Salvatorians, Ganapuram,Peddapendial (P.O.),
                                    Warangal Dt. 506151, Tel:-.
                                </td>
                            </tr>

                            <tr>
                                <th>History</th>
                                <td>

                                    <span class="history-short">
                                        SALVATORIAN FORMATION HOUSE At the encouragement and support of Bishop Alphonsus Beretta,
                                        the then provincial Bro.Louis Bureau (Eleazar) started St.Gabriel’s Formation House in
                                        Warangal Diocese at Fatimanagar in 1957.
                                    </span>

                                    <span class="history-more">
                                        The main purpose of this institute is to promote vocations for their Province of Central
                                        India and give them basic Spiritual Orientation. Candidates are recruited from all over
                                        the Country.
                                    </span>

                                    <br>

                                    <button class="read-more-btn" onclick="toggleHistory(this)">
                                        Read more
                                    </button>

                                </td>
                            </tr>

                        </table>

                    </div>

                </div>

            </div>


            <!-- 6 KRISTU JYOTHI -->

            <div class="accordion-item">

                <h2 class="accordion-header" id="menHeadingSix">

                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#menSix"
                        aria-expanded="false"
                        aria-controls="menSix">

                        6.KRISTU JYOTHI ASHRAM

                    </button>

                </h2>

                <div id="menSix"
                    class="accordion-collapse collapse"
                    aria-labelledby="menHeadingSix"
                    data-bs-parent="#menAccordion">

                    <div class="accordion-body">

                        <table class="institution-table">

                            <tr>
                                <th>Name of the Institution</th>
                                <td>Kristu Jyothi Ashram</td>
                            </tr>

                            <tr>
                                <th>Name of the Management</th>
                                <td>-</td>
                            </tr>

                            <tr>
                                <th>Name of the Rector</th>
                                <td>Rev. Fr.Christu Raj, SHS</td>
                            </tr>

                            <tr>
                                <th>Address</th>
                                <td>
                                    The Director, Kristu Jyothi Ashram, Karunapuram,
                                    Peddapendial(P.O.), Dharmasagar(M),WARANGAL - 506 151,
                                    A.P. Tel No.: 08711-223106.
                                </td>
                            </tr>

                            <tr>
                                <th>History</th>
                                <td>

                                    <span class="history-short">
                                        Kristu Jyothi Ashram With the blessings and encouragement of Most Rev. Thumma Bala,
                                        Bishop of Warangal,Rev.Fr. Vijay Kumar took the initiative and keen interest in starting
                                        Kristu Jyothi Ashram in Karunapuram, Peddapendial in the year 1992.
                                    </span>

                                    <span class="history-more">
                                        Rev. Fr .Colombo provided the necessary land for this Ashram in Karunapuram. Kristu Jyothi
                                        Ashram had its humble beginning in a thatched shed which was blessed by Bishop Thumma Bala
                                        and was inaugurated by Most Rev .A. Beretta, PIME, the former Bishop of Warangal, on April
                                        3rd, 1993.
                                    </span>

                                    <br>

                                    <button class="read-more-btn" onclick="toggleHistory(this)">
                                        Read more
                                    </button>

                                </td>
                            </tr>

                        </table>

                    </div>

                </div>

            </div>


            <!-- 7 JEEVADHARA -->

            <div class="accordion-item">

                <h2 class="accordion-header" id="menHeadingSeven">

                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#menSeven"
                        aria-expanded="false"
                        aria-controls="menSeven">

                        7.JEEVADHARA DIVINE CENTRE

                    </button>

                </h2>

                <div id="menSeven"
                    class="accordion-collapse collapse"
                    aria-labelledby="menHeadingSeven"
                    data-bs-parent="#menAccordion">

                    <div class="accordion-body">

                        <table class="institution-table">

                            <tr>
                                <th>Name of the Institution</th>
                                <td>Jeevadhara Divine Centre</td>
                            </tr>

                            <tr>
                                <th>Name of the Management</th>
                                <td>-</td>
                            </tr>

                            <tr>
                                <th>Name of the Rector</th>
                                <td>Rev. Fr.Christu Raj, SHS</td>
                            </tr>

                            <tr>
                                <th>Address</th>
                                <td>
                                    The Director,Jeevadhara Divine Centre, Station Pendial,
                                    Rampur,C/o Kristu Jyothi Ashram, Karunapuram,
                                    Peddapendial(P.O.),Dharmasagar(M), WARANGAL - 506 151,
                                    A.P.Tel No.: 08711-200541;
                                </td>
                            </tr>

                            <tr>
                                <th>History</th>
                                <td>

                                    <span class="history-short">
                                        Jeevadhara Divine Centre The Parish of Rampur was bifurcated from Karunapuram Parish by
                                        Most Rev.Thumma Bala, Bishop of Warangal, on the 10th of April,2005 with four substations,
                                        which were part of Karunapuram.. Fr.Yeruva Inna Reddy was appointed as the First Parish Priest.
                                    </span>

                                    <span class="history-more">
                                        When Gnanapuram was erected in 2007, two substations were allocated to that Parish. Now there
                                        are only two substations under Rampur Parish, namely - Pedda Rampur and Chinna Rampur.
                                        Earlier, Fr.A.Colombo,PIME, had built a Chapel and it was blessed by His Lordship Thumma Bala
                                        on the 25th of December, 1999. Fr.Colombo had also started a school for kindergarten children
                                        with the help of sisters of Mary Mediatrix on an experimental basis, but was found later to
                                        become unviable. In Feb 2007, the Diocese gave this premises consisting only of a school
                                        building with few bathroom/toilets, and a chapel with a presbytery, to Frs.Christuraj, SHS
                                        and Cyril Doss, SHS
                                    </span>

                                    <br>

                                    <button class="read-more-btn" onclick="toggleHistory(this)">
                                        Read more
                                    </button>

                                </td>
                            </tr>

                        </table>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- =========================================================
         SECTION 3 - WOMEN RELIGOUS FORMATION HOUSES
    ========================================================== -->

    <div class="section-block">

        <h1 class="section-title">WOMEN RELIGOUS FORMATION HOUSES</h1>

        <div class="accordion formation-accordion" id="womenAccordion">


            <!-- 1 ADORATION -->

            <div class="accordion-item">

                <h2 class="accordion-header" id="womenHeadingOne">

                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#womenOne"
                        aria-expanded="false"
                        aria-controls="womenOne">

                        1.ADORATION FORMATION HOUSE (SABS)

                    </button>

                </h2>

                <div id="womenOne"
                    class="accordion-collapse collapse"
                    aria-labelledby="womenHeadingOne"
                    data-bs-parent="#womenAccordion">

                    <div class="accordion-body">

                        <table class="institution-table">

                            <tr>
                                <th>Name of the Institution</th>
                                <td>Adoration Formation House</td>
                            </tr>

                            <tr>
                                <th>Name of the Management</th>
                                <td>Sisters of Adoration of the Blessed Sacrament</td>
                            </tr>

                            <tr>
                                <th>Name of the Rector</th>
                                <td>Rev. Sr. Elsin</td>
                            </tr>

                            <tr>
                                <th>Address</th>
                                <td>
                                    The Mistress,Aradhana Bhavan,Fatimanagar,
                                    Warangal - 506 004,Tel.(0870) 2459492.
                                </td>
                            </tr>

                            <tr>
                                <th>History</th>
                                <td>

                                    <span class="history-short">
                                        Adoration Formation House The Formation House was inaugurated on 1st October 1998 by
                                        Bishop Thumma Bala in the presence of the Provincial Mother Angrace. Sr. Phlo palithottam
                                        was the first Mistress with a batch of 6 Postulants.
                                    </span>

                                    <span class="history-more">
                                        In the year of 1999, the number of the Postulants were nine. During their postulancy,
                                        the Candidates also help the Sisters for Adoration in Fatima Cathedral.
                                    </span>

                                    <br>

                                    <button class="read-more-btn" onclick="toggleHistory(this)">
                                        Read more
                                    </button>

                                </td>
                            </tr>

                        </table>

                    </div>

                </div>

            </div>


            <!-- 2 ASSISI -->

            <div class="accordion-item">

                <h2 class="accordion-header" id="womenHeadingTwo">

                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#womenTwo"
                        aria-expanded="false"
                        aria-controls="womenTwo">

                        2.ASSISI FORMATION HOUSE(A.S.M.I.)

                    </button>

                </h2>

                <div id="womenTwo"
                    class="accordion-collapse collapse"
                    aria-labelledby="womenHeadingTwo"
                    data-bs-parent="#womenAccordion">

                    <div class="accordion-body">

                        <table class="institution-table">

                            <tr>
                                <th>Name of the Institution</th>
                                <td>Assisi Formation House</td>
                            </tr>

                            <tr>
                                <th>Name of the Management</th>
                                <td>Assisi Sisters of Mary Immaculate</td>
                            </tr>

                            <tr>
                                <th>Name of the Rector</th>
                                <td>Sr. Ushes</td>
                            </tr>

                            <tr>
                                <th>Address</th>
                                <td>
                                    Assisi Formation House, Fatimanagar,Warangal - 506 004,
                                    Tel:(08712) 2576 718.
                                </td>
                            </tr>

                            <tr>
                                <th>History</th>
                                <td>

                                    <span class="history-short">
                                        ASSISI FORMATION HOUSE (A.S.M.I.) The April 27th, 1993 was a memorable day for the
                                        Assisi Sisters of Mary Immaculate in the Diocese of Warangal. By God’s providence,
                                        a Formation House was opened at Fatimanagar by the then Provincial Superior, Sr. Celestine,
                                        and it was blessed and consecrated to the Sacred Heart of Jesus by Bishop Thumma Bala
                                        on 27th April, 1993.
                                    </span>

                                    <span class="history-more">
                                        Sr. Augusta was appointed the first Superior of the Formation House. Fr. Y. Joji supervised
                                        the construction of this house.
                                    </span>

                                    <br>

                                    <button class="read-more-btn" onclick="toggleHistory(this)">
                                        Read more
                                    </button>

                                </td>
                            </tr>

                        </table>

                    </div>

                </div>

            </div>


            <!-- 3 MARY MEDIATRIX -->

            <div class="accordion-item">

                <h2 class="accordion-header" id="womenHeadingThree">

                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#womenThree"
                        aria-expanded="false"
                        aria-controls="womenThree">

                        3.MARY MEDIATRIX FORMATION HOUSE(MMM)

                    </button>

                </h2>

                <div id="womenThree"
                    class="accordion-collapse collapse"
                    aria-labelledby="womenHeadingThree"
                    data-bs-parent="#womenAccordion">

                    <div class="accordion-body">

                        <table class="institution-table">

                            <tr>
                                <th>Name of the Institution</th>
                                <td>Mary Mediatrix Formation House</td>
                            </tr>

                            <tr>
                                <th>Name of the Management</th>
                                <td>Missionaries of Mary Mediatrix</td>
                            </tr>

                            <tr>
                                <th>Name of the Rector</th>
                                <td>Sr.M.Denise</td>
                            </tr>

                            <tr>
                                <th>Address</th>
                                <td>
                                    The Mistress,Mary Mediatrix Formation House,Karunapuram,
                                    Peddapendiayal (P.O.),Warangal Dt. - 506 151,
                                    Tel.08711—223277.
                                </td>
                            </tr>

                            <tr>
                                <th>History</th>
                                <td>

                                    <span class="history-short">
                                        Mary Mediatrix FORMATION HOUSE (MMM) The Missionaries of Mary Mediatrix are of Spanish
                                        Origin. The Congregation of Missionaries of Mary Mediatrix was founded by late Rev. Mother
                                        Rosario Fernandez Pereira and Rev. Extaben Vigil in the year 1939 with the intention of
                                        spreading Good News and assisting the most needy people of the Mission Areas.
                                    </span>

                                    <span class="history-more">
                                        The Society opened a house at Karunapuram in 1983. Eventually, finding the locality to be
                                        condusive for Formation, the Society started a Formation House at Karunapuram in the year
                                        1998. In additon to the Formation of Candidates, this Institute caters to the needs of
                                        Junior Sisters with seminars and other spiritual courses. Candidates are recruited from
                                        all-over Andhra Pradesh. Some are doing Intermediate studies in the adjacent J.M.J. College.
                                    </span>

                                    <br>

                                    <button class="read-more-btn" onclick="toggleHistory(this)">
                                        Read more
                                    </button>

                                </td>
                            </tr>

                        </table>

                    </div>

                </div>

            </div>


            <!-- 4 NAVAJEEVAN -->

            <div class="accordion-item">

                <h2 class="accordion-header" id="womenHeadingFour">

                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#womenFour"
                        aria-expanded="false"
                        aria-controls="womenFour">

                        4.NAVAJEEVAN ASPIRANCY HOUSE

                    </button>

                </h2>

                <div id="womenFour"
                    class="accordion-collapse collapse"
                    aria-labelledby="womenHeadingFour"
                    data-bs-parent="#womenAccordion">

                    <div class="accordion-body">

                        <table class="institution-table">

                            <tr>
                                <th>Name of the Institution</th>
                                <td>Navajeevan Aspirancy House</td>
                            </tr>

                            <tr>
                                <th>Name of the Management</th>
                                <td>Daughters of the Presentation of Mary in the Temple</td>
                            </tr>

                            <tr>
                                <th>Name of the Mistres</th>
                                <td>Sr.Theresa Bairapaka</td>
                            </tr>

                            <tr>
                                <th>Address</th>
                                <td>
                                    The Mistress,Navajeevan Aspirantate, Karunapuram,
                                    Peddapendial ( P.O.), Warangal Dt. - 506 151,
                                    Tel. (08711) - 243104.
                                </td>
                            </tr>

                            <tr>
                                <th>History</th>
                                <td>

                                    <span class="history-short">
                                        Navajeevan Aspirancy House This house is started on 9th July, 2002 with the blessings
                                        of Most Rev. Thumma Bala. The purpose of this house is to give orientation to the young
                                        Girls who join the Presentation Sisters with a desire to become the Daughters of Presentation.
                                    </span>

                                    <span class="history-more">
                                        They spend here their first three years of formation: one year of orientation and two years
                                        of academic studies (Intermediate).
                                    </span>

                                    <br>

                                    <button class="read-more-btn" onclick="toggleHistory(this)">
                                        Read more
                                    </button>

                                </td>
                            </tr>

                        </table>

                    </div>

                </div>

            </div>

<!-- 5 PRESENTATION -->

            <div class="accordion-item">

                <h2 class="accordion-header" id="womenHeadingFive">

                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#womenFive"
                        aria-expanded="false"
                        aria-controls="womenFive">

                        5.PRESENTATION FORMATION HOUSE(DPM)

                    </button>

                </h2>

                <div id="womenFive"
                    class="accordion-collapse collapse"
                    aria-labelledby="womenHeadingFive"
                    data-bs-parent="#womenAccordion">

                    <div class="accordion-body">

                        <table class="institution-table">

                            <tr>
                                <th>Name of the Institution</th>
                                <td>Presentation Formation House</td>
                            </tr>

                            <tr>
                                <th>Name of the Management</th>
                                <td>Daughters of the Presentation of Mary in the Temple</td>
                            </tr>

                            <tr>
                                <th>Name of the Mistress</th>
                                <td>Sr. Tessy Thomas</td>
                            </tr>

                            <tr>
                                <th>Address</th>
                                <td>
                                    The Mistress,Presentaiton Formation House, Karunapuram,
                                    Peddapendial (P.O.), Warangal Dt. 506151,
                                    Tel-(08711) 243122.
                                </td>
                            </tr>

                            <tr>
                                <th>History</th>
                                <td>

                                    <span class="history-short">
                                        Presentation Formation House The dream of a Formation House in A.P. is actualized in
                                        1993, June 24th with the blessings of the Bishop Thumma Bala. Initially, the institute
                                        was run in Fr. Colombo’s residence and on 24th June, 1995, it was moved into its permanent
                                        Building of their Regional House, Karunapuram.
                                    </span>

                                    <span class="history-more">
                                        The purpose of this house is to form the young girls during their Postulancy to become
                                        the Daughters of Presentation according to its Charism and Mission. At present, there are
                                        10 Postulants. Sr. Preetha accompanies them. The beautiful Campus, the people around in the
                                        villages, co-operation, friendly relations and mutual support among the Institutions help
                                        the young Girls to form themselves into strong personalities and to broaden their Vision
                                        and Mission.
                                    </span>

                                    <br>

                                    <button class="read-more-btn" onclick="toggleHistory(this)">
                                        Read more
                                    </button>

                                </td>
                            </tr>

                        </table>

                    </div>

                </div>

            </div>


            <!-- 6 SACRED HEART -->

            <div class="accordion-item">

                <h2 class="accordion-header" id="womenHeadingSix">

                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#womenSix"
                        aria-expanded="false"
                        aria-controls="womenSix">

                        6.SACRED HEART HOME - FORMATION HOUSE

                    </button>

                </h2>

                <div id="womenSix"
                    class="accordion-collapse collapse"
                    aria-labelledby="womenHeadingSix"
                    data-bs-parent="#womenAccordion">

                    <div class="accordion-body">

                        <table class="institution-table">

                            <tr>
                                <th>Name of the Institution</th>
                                <td>Sacred Heart Home-Formation House</td>
                            </tr>

                            <tr>
                                <th>Name of the Management</th>
                                <td>Daughters of Mary Help of Christians.</td>
                            </tr>

                            <tr>
                                <th>Name of the Mistress</th>
                                <td>Sr. Margaret Pathi</td>
                            </tr>

                            <tr>
                                <th>Address</th>
                                <td>
                                    The Mistress, Sacred Heart Home- Formation House,
                                    Karunapuram, Peddapendial (P.O.), Warangal Dt. 506151,
                                    Tel:(08711)223.
                                </td>
                            </tr>

                            <tr>
                                <th>History</th>
                                <td>

                                    <span class="history-short">
                                        Sacred Heart Home-Formation House After the redimension of Chennai Province in the year
                                        1993, the Bangalore Province was on the lookout for a suitable place for the formation
                                        house close to the Salesian House. In the year 1998 we approached the Bishop Rt. Rev.
                                        Thumma Bala requesting a piece of land at Karunapuram.
                                    </span>

                                    <span class="history-more">
                                        He was gracious enough to gift us with 4 acres of Land through the kind instrumentality
                                        of Rev. Fr. Augusto Colombo PIME. On 18th October 2003, the gift deed was executed between
                                        the diocese and Rev. Sr. Cecily Thomas, the then Provincial of Bangalore. On 27th August
                                        2006 Rev. Fr. Augusto Colombo laid the foundation stone at the new site in the presence of
                                        Rev. Sr. Rosy Malayaty, the provincial. 31st May 2007 was a memorable historic event.
                                        On the feast of visitation, the 15th birthday of our province, Rt. Rev. Thumma Bala inaugurated
                                        and Blessed the new house. Sr. Margaret Pathi, the animator, Sr. Mercy Sebastian, Sr. Mini Leon,
                                        Sr. Sangeetha, Sr. Leema Rose and 21 Young and energetic candidates are the pioneers of this
                                        budding centre. This is also considered to be the study house for the young sisters and
                                        candidates since there is the possibility to pursue higher studies.
                                    </span>

                                    <br>

                                    <button class="read-more-btn" onclick="toggleHistory(this)">
                                        Read more
                                    </button>

                                </td>
                            </tr>

                        </table>

                    </div>

                </div>

            </div>


            <!-- 7 ST ANN'S -->

            <div class="accordion-item">

                <h2 class="accordion-header" id="womenHeadingSeven">

                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#womenSeven"
                        aria-expanded="false"
                        aria-controls="womenSeven">

                        7.St. ANN’S SADHANASHRAM (CSA)

                    </button>

                </h2>

                <div id="womenSeven"
                    class="accordion-collapse collapse"
                    aria-labelledby="womenHeadingSeven"
                    data-bs-parent="#womenAccordion">

                    <div class="accordion-body">

                        <table class="institution-table">

                            <tr>
                                <th>Name of the Institution</th>
                                <td>St. Ann’s Sadhanashram</td>
                            </tr>

                            <tr>
                                <th>Name of the Management</th>
                                <td>Catechist Sisters of St. Ann's</td>
                            </tr>

                            <tr>
                                <th>Name of the Rector</th>
                                <td>Rev. Sr. N.lourdu Mary</td>
                            </tr>

                            <tr>
                                <th>Address</th>
                                <td>
                                    The Mistress, St.Ann’s Sadhanashram,
                                    Kumarapally- Hanamkonda, Warangal - 506 001.
                                </td>
                            </tr>

                            <tr>
                                <th>History</th>
                                <td>

                                    <span class="history-short">
                                        St.ANN’S SADHANASHRAM (CSA) The Formation House of the C.S.A. Candidates was formerly
                                        at Reddipalem and was shifted to Kumarapalli, Hanamkonda in the year 1975. Later, a new
                                        Building, called Sadhanashram, was built for the Aspirants in the year 1982.
                                    </span>

                                    <span class="history-more">
                                        It was blessed by Most Rev. A. Beretta, PIME. Of late the Aspirantate is shifted to
                                        Ananthapur and Sadhanashram is used for the Candidates to study Intermediate, which is
                                        also a part of their Formation.
                                    </span>

                                    <br>

                                    <button class="read-more-btn" onclick="toggleHistory(this)">
                                        Read more
                                    </button>

                                </td>
                            </tr>

                        </table>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>


<script>

    function toggleHistory(button) {

        const tableCell = button.parentElement;

        const shortText = tableCell.querySelector(".history-short");
        const moreText = tableCell.querySelector(".history-more");

        if (moreText.style.display === "inline") {

            moreText.style.display = "none";
            button.textContent = "Read more";

        } else {

            moreText.style.display = "inline";
            button.textContent = "Read less";

        }

    }

</script>


</body>


    <?php include __DIR__ . '/footer.php'; ?>