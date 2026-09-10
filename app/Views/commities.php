<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diocese of Warangal</title>
    <?php include __DIR__ . '/header-links.php'; ?>


        <?php include __DIR__ . '/header.php'; ?>



    <style>

        /* ==========================================
           BASIC
        ========================================== */

        * {
            box-sizing: border-box;
        }

        html {
            width: 100%;
            overflow-x: hidden;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            overflow-x: hidden;

            background: #ffffff;

            font-family: "Poppins", sans-serif;

            color: #1d2735;
        }


        /* ==========================================
           MAIN SECTION
        ========================================== */

        .committees-section {
            width: 100%;
            padding: 60px 0;
        }


        /* ==========================================
           HEADING
        ========================================== */

        .committees-heading {
            text-align: center;
            margin-bottom: 50px;
        }

        .committees-heading h2 {
            margin: 0;

            font-size: 40px;
            line-height: 1.3;

            font-weight: 700;

            color: #172235;
        }

        .heading-line {
            width: 50px;
            height: 2px;

            margin: 14px auto 0;

            background-color: #e87522;
        }


        /* ==========================================
           COMMITTEE
        ========================================== */

        .committee {
            width: 100%;

            background: #ffffff;

            border: 1px solid #dddddd;
            border-radius: 8px;

            padding: 25px;

            margin-bottom: 30px;

            height: calc(100% - 30px);

            overflow: hidden;

            /* Zoom transition */
            transition: transform 0.3s ease;
        }


        /* ==========================================
           ZOOM
        ========================================== */

        .committee:hover {
            transform: scale(1.02);
        }


        /* ==========================================
           COMMITTEE HEADING
        ========================================== */

        .committee-heading {
            width: 100%;

            display: flex;
            align-items: center;

            gap: 18px;

            margin-bottom: 20px;
        }


        /* ==========================================
           NUMBER
        ========================================== */

        .committee-number {
            width: 58px;
            height: 58px;

            min-width: 58px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 5px;

            color: #ffffff;

            font-size: 21px;
            font-weight: 700;
        }


        /* ==========================================
           TITLE
        ========================================== */

        .committee-title {
            min-width: 0;
            flex: 1;
        }

        .committee-title h3 {
            margin: 0;

            font-size: 22px;
            line-height: 1.35;

            font-weight: 600;

            overflow-wrap: break-word;
            word-wrap: break-word;
        }


        /* ==========================================
           ICON
        ========================================== */

        .committee-icon {
            width: 48px;
            height: 48px;

            min-width: 48px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 50%;

            font-size: 20px;
        }


        /* ==========================================
           COMMITTEE 01
        ========================================== */

        .committee-1 {
            border-top: 4px solid #08783f;
        }

        .committee-1 .committee-number {
            background: #08783f;
        }

        .committee-1 .committee-title h3 {
            color: #08783f;
        }

        .committee-1 .committee-icon {
            background: #edf7f1;
            color: #08783f;
        }


        /* ==========================================
           COMMITTEE 02
        ========================================== */

        .committee-2 {
            border-top: 4px solid #1859b8;
        }

        .committee-2 .committee-number {
            background: #1859b8;
        }

        .committee-2 .committee-title h3 {
            color: #1859b8;
        }

        .committee-2 .committee-icon {
            background: #edf3fc;
            color: #1859b8;
        }


        /* ==========================================
           COMMITTEE 03
        ========================================== */

        .committee-3 {
            border-top: 4px solid #6639a5;
        }

        .committee-3 .committee-number {
            background: #6639a5;
        }

        .committee-3 .committee-title h3 {
            color: #6639a5;
        }

        .committee-3 .committee-icon {
            background: #f3effa;
            color: #6639a5;
        }


        /* ==========================================
           COMMITTEE 04
        ========================================== */

        .committee-4 {
            border-top: 4px solid #ed760d;
        }

        .committee-4 .committee-number {
            background: #ed760d;
        }

        .committee-4 .committee-title h3 {
            color: #ed760d;
        }

        .committee-4 .committee-icon {
            background: #fff3e7;
            color: #ed760d;
        }


        /* ==========================================
           MEMBER TABLE
        ========================================== */

        .member-table {
            width: 100%;

            margin-top: 5px;

            border-collapse: collapse;

            table-layout: fixed;
        }


        .member-table th {
            padding: 12px 10px;

            text-align: left;

            font-size: 15px;
            line-height: 1.4;

            font-weight: 700;

            color: #172235;

            border-bottom: 1px solid #dddddd;
        }


        .member-table td {
            padding: 11px 10px;

            font-size: 15px;
            line-height: 1.5;

            color: #303640;

            border-bottom: 1px solid #eeeeee;

            vertical-align: middle;

            overflow-wrap: break-word;
            word-wrap: break-word;
        }


        .member-table tbody tr:last-child td {
            border-bottom: none;
        }


        /* ==========================================
           TABLE COLUMN WIDTH
        ========================================== */

        .member-table th:first-child,
        .member-table td:first-child {
            width: 15%;
        }


        .member-table th:nth-child(2),
        .member-table td:nth-child(2) {
            width: 65%;
        }


        .member-table th:last-child,
        .member-table td:last-child {
            width: 20%;
        }


        .member-role {
            color: #555d68;
        }


        /* ==========================================
           LARGE DESKTOP
        ========================================== */

        @media (min-width: 1200px) {

            .committees-section {
                padding: 70px 0;
            }

            .committee {
                padding: 28px;
            }

            .committee-title h3 {
                font-size: 23px;
            }

        }


        /* ==========================================
           TABLET
        ========================================== */

        @media (max-width: 991.98px) {

            .committees-section {
                padding: 50px 0;
            }

            .committees-heading {
                margin-bottom: 40px;
            }

            .committees-heading h2 {
                font-size: 34px;
            }

            .committee {
                padding: 22px;

                height: calc(100% - 30px);
            }

            .committee-heading {
                gap: 14px;
            }

            .committee-number {
                width: 54px;
                height: 54px;

                min-width: 54px;
            }

            .committee-title h3 {
                font-size: 20px;
            }

            .committee-icon {
                width: 46px;
                height: 46px;

                min-width: 46px;
            }

            .member-table th {
                font-size: 14px;
            }

            .member-table td {
                font-size: 14px;
            }

        }


        /* ==========================================
           MOBILE
        ========================================== */

        @media (max-width: 767.98px) {

            .committees-section {
                padding: 40px 0;
            }

            .committees-heading {
                margin-bottom: 35px;
            }

            .committees-heading h2 {
                font-size: 30px;
            }

            .heading-line {
                margin-top: 12px;
            }


            .committee {
                padding: 20px;

                margin-bottom: 25px;

                height: auto;

                border-radius: 7px;
            }


            .committee-heading {
                gap: 12px;

                margin-bottom: 16px;
            }


            .committee-number {
                width: 50px;
                height: 50px;

                min-width: 50px;

                font-size: 19px;
            }


            .committee-title h3 {
                font-size: 18px;
            }


            .committee-icon {
                width: 43px;
                height: 43px;

                min-width: 43px;

                font-size: 17px;
            }


            .member-table th {
                padding: 9px 6px;

                font-size: 14px;
            }


            .member-table td {
                padding: 9px 6px;

                font-size: 14px;
            }


            .member-table th:first-child,
            .member-table td:first-child {
                width: 14%;
            }


            .member-table th:nth-child(2),
            .member-table td:nth-child(2) {
                width: 66%;
            }


            .member-table th:last-child,
            .member-table td:last-child {
                width: 20%;
            }

        }


        /* ==========================================
           SMALL MOBILE
        ========================================== */

        @media (max-width: 575.98px) {

            .committees-section {
                padding: 30px 0;
            }


            .committees-heading {
                margin-bottom: 30px;
            }


            .committees-heading h2 {
                font-size: 27px;
            }


            .committee {
                padding: 16px;

                margin-bottom: 22px;
            }


            .committee-heading {
                gap: 9px;

                margin-bottom: 15px;
            }


            .committee-number {
                width: 44px;
                height: 44px;

                min-width: 44px;

                font-size: 17px;
            }


            .committee-title h3 {
                font-size: 16px;
                line-height: 1.3;
            }


            .committee-icon {
                width: 38px;
                height: 38px;

                min-width: 38px;

                font-size: 15px;
            }


            .member-table th {
                padding: 8px 4px;

                font-size: 13px;
            }


            .member-table td {
                padding: 8px 4px;

                font-size: 13px;

                line-height: 1.4;
            }

        }


        /* ==========================================
           VERY SMALL MOBILE
        ========================================== */

        @media (max-width: 400px) {

            .committees-heading h2 {
                font-size: 25px;
            }


            .committee {
                padding: 13px;
            }


            .committee-heading {
                gap: 7px;
            }


            .committee-number {
                width: 40px;
                height: 40px;

                min-width: 40px;

                font-size: 15px;
            }


            .committee-title h3 {
                font-size: 14px;
            }


            .committee-icon {
                width: 34px;
                height: 34px;

                min-width: 34px;

                font-size: 13px;
            }


            .member-table th {
                padding: 7px 3px;

                font-size: 12px;
            }


            .member-table td {
                padding: 7px 3px;

                font-size: 12px;
            }

        }


        /* ==========================================
           PREVENT ZOOM EFFECT ON TOUCH DEVICES
        ========================================== */

        @media (hover: none) {

            .committee:hover {
                transform: none;
            }

        }

    </style>

</head>


<body>


    <!-- ==========================================
         OUR COMMITTEES SECTION
    =========================================== -->

    <section class="committees-section">

        <div class="container">


            <!-- =====================================
                 MAIN HEADING
            ====================================== -->

            <div class="committees-heading">

                <h2>Our Committees</h2>

                <div class="heading-line"></div>

            </div>


            <!-- =====================================
                 COMMITTEES
            ====================================== -->

            <div class="row">


                <!-- =====================================
                     01 - TELUGU CATHOLIC COUNCIL
                ====================================== -->

                <div class="col-lg-6">

                    <div class="committee committee-1">


                        <div class="committee-heading">


                            <div class="committee-number">
                                01
                            </div>


                            <div class="committee-title">

                                <h3>
                                    Telugu Catholic Council - Warangal
                                </h3>

                            </div>


                            <div class="committee-icon">

                                <i class="fa-solid fa-users"></i>

                            </div>


                        </div>


                        <table class="member-table">


                            <thead>

                                <tr>

                                    <th>
                                        S.No
                                    </th>

                                    <th>
                                        Name
                                    </th>

                                    <th>
                                        Role
                                    </th>

                                </tr>

                            </thead>


                            <tbody>


                                <tr>

                                    <td>1</td>

                                    <td>
                                        Bishop Udumala Bala
                                    </td>

                                    <td class="member-role">
                                        Member
                                    </td>

                                </tr>


                                <tr>

                                    <td>2</td>

                                    <td>
                                        Fr. D. Joseph
                                    </td>

                                    <td class="member-role">
                                        Member
                                    </td>

                                </tr>


                                <tr>

                                    <td>3</td>

                                    <td>
                                        Fr. Joshua
                                    </td>

                                    <td class="member-role">
                                        Member
                                    </td>

                                </tr>


                                <tr>

                                    <td>4</td>

                                    <td>
                                        Sr. Alberta
                                    </td>

                                    <td class="member-role">
                                        Member
                                    </td>

                                </tr>


                                <tr>

                                    <td>5</td>

                                    <td>
                                        Ms. Shanthamma
                                    </td>

                                    <td class="member-role">
                                        Member
                                    </td>

                                </tr>


                                <tr>

                                    <td>6</td>

                                    <td>
                                        Mr. M. Shankar
                                    </td>

                                    <td class="member-role">
                                        Member
                                    </td>

                                </tr>


                            </tbody>

                        </table>


                    </div>

                </div>



                <!-- =====================================
                     02 - CHARISMATIC RENEWAL
                ====================================== -->

                <div class="col-lg-6">

                    <div class="committee committee-2">


                        <div class="committee-heading">


                            <div class="committee-number">
                                02
                            </div>


                            <div class="committee-title">

                                <h3>
                                    Catholic Charismatic Renewal Moment
                                </h3>

                            </div>


                            <div class="committee-icon">

                                <i class="fa-solid fa-dove"></i>

                            </div>


                        </div>


                        <table class="member-table">


                            <thead>

                                <tr>

                                    <th>
                                        S.No
                                    </th>

                                    <th>
                                        Name
                                    </th>

                                    <th>
                                        Role
                                    </th>

                                </tr>

                            </thead>


                            <tbody>


                                <tr>
                                    <td>1</td>
                                    <td>Fr. D. Joseph</td>
                                    <td class="member-role">Member</td>
                                </tr>


                                <tr>
                                    <td>2</td>
                                    <td>Fr. S. Bala</td>
                                    <td class="member-role">Member</td>
                                </tr>


                                <tr>
                                    <td>3</td>
                                    <td>N. Surender</td>
                                    <td class="member-role">Member</td>
                                </tr>


                                <tr>
                                    <td>4</td>
                                    <td>Sr. Geetha, D.J.P.A</td>
                                    <td class="member-role">Member</td>
                                </tr>


                                <tr>
                                    <td>5</td>
                                    <td>Mr. N. Arogyam, Fatimanagar</td>
                                    <td class="member-role">Member</td>
                                </tr>


                                <tr>
                                    <td>6</td>
                                    <td>Ms. Shanthamma, Assisi Parish</td>
                                    <td class="member-role">Member</td>
                                </tr>


                                <tr>
                                    <td>7</td>
                                    <td>Ms P. Carmel, Fatimanagar</td>
                                    <td class="member-role">Member</td>
                                </tr>


                                <tr>
                                    <td>8</td>
                                    <td>Srinu, Diesel Colony Parish</td>
                                    <td class="member-role">Member</td>
                                </tr>


                                <tr>
                                    <td>9</td>
                                    <td>Mr. K. Peter, Thimmaraopet</td>
                                    <td class="member-role">Member</td>
                                </tr>


                                <tr>
                                    <td>10</td>
                                    <td>Rajkumar, Parkal</td>
                                    <td class="member-role">Member</td>
                                </tr>


                                <tr>
                                    <td>11</td>
                                    <td>Sushma, Ghanpur</td>
                                    <td class="member-role">Member</td>
                                </tr>


                                <tr>
                                    <td>12</td>
                                    <td>Rosemary, Kazipet</td>
                                    <td class="member-role">Member</td>
                                </tr>


                            </tbody>

                        </table>


                    </div>

                </div>



                <!-- =====================================
                     03 - FATIMA LEGION OF MARY
                ====================================== -->

                <div class="col-lg-6">

                    <div class="committee committee-3">


                        <div class="committee-heading">


                            <div class="committee-number">
                                03
                            </div>


                            <div class="committee-title">

                                <h3>
                                    Fatima Legion of Mary
                                </h3>

                            </div>


                            <div class="committee-icon">

                                <i class="fa-solid fa-person"></i>

                            </div>


                        </div>


                        <table class="member-table">


                            <thead>

                                <tr>

                                    <th>
                                        S.No
                                    </th>

                                    <th>
                                        Name
                                    </th>

                                    <th>
                                        Role
                                    </th>

                                </tr>

                            </thead>


                            <tbody>


                                <tr>

                                    <td>1</td>

                                    <td>
                                        Most Rev. Bishop Udumala Bala
                                    </td>

                                    <td class="member-role">
                                        Member
                                    </td>

                                </tr>


                                <tr>

                                    <td>2</td>

                                    <td>
                                        Fr. Gali Rayappa
                                    </td>

                                    <td class="member-role">
                                        Member
                                    </td>

                                </tr>


                                <tr>

                                    <td>3</td>

                                    <td>
                                        Fr. S. Balashowry
                                    </td>

                                    <td class="member-role">
                                        Member
                                    </td>

                                </tr>


                                <tr>

                                    <td>4</td>

                                    <td>
                                        Fr. N. Surender
                                    </td>

                                    <td class="member-role">
                                        Member
                                    </td>

                                </tr>


                                <tr>

                                    <td>5</td>

                                    <td>
                                        Fr. T. Anthony
                                    </td>

                                    <td class="member-role">
                                        Member
                                    </td>

                                </tr>


                                <tr>

                                    <td>6</td>

                                    <td>
                                        Sr. Alberta
                                    </td>

                                    <td class="member-role">
                                        Member
                                    </td>

                                </tr>


                                <tr>

                                    <td>7</td>

                                    <td>
                                        Ms. M. Lourdu Mary
                                    </td>

                                    <td class="member-role">
                                        Member
                                    </td>

                                </tr>


                                <tr>

                                    <td>8</td>

                                    <td>
                                        Ms. M. Jyosthna
                                    </td>

                                    <td class="member-role">
                                        Member
                                    </td>

                                </tr>


                            </tbody>

                        </table>


                    </div>

                </div>



                <!-- =====================================
                     04 - MINORITIES
                ====================================== -->

                <div class="col-lg-6">

                    <div class="committee committee-4">


                        <div class="committee-heading">


                            <div class="committee-number">
                                04
                            </div>


                            <div class="committee-title">

                                <h3>
                                    Minorities
                                </h3>

                            </div>


                            <div class="committee-icon">

                                <i class="fa-solid fa-people-group"></i>

                            </div>


                        </div>


                        <table class="member-table">


                            <thead>

                                <tr>

                                    <th>
                                        S.No
                                    </th>

                                    <th>
                                        Name
                                    </th>

                                    <th>
                                        Role
                                    </th>

                                </tr>

                            </thead>


                            <tbody>


                                <tr>

                                    <td>1</td>

                                    <td>
                                        Rev. Fr. K. Vijay Kumar
                                    </td>

                                    <td class="member-role">
                                        Member
                                    </td>

                                </tr>


                                <tr>

                                    <td>2</td>

                                    <td>
                                        Rev. Fr. P. Suresh
                                    </td>

                                    <td class="member-role">
                                        Member
                                    </td>

                                </tr>


                                <tr>

                                    <td>3</td>

                                    <td>
                                        Mr. Swaroop Reddy
                                    </td>

                                    <td class="member-role">
                                        Member
                                    </td>

                                </tr>


                                <tr>

                                    <td>4</td>

                                    <td>
                                        Mr. Kornel
                                    </td>

                                    <td class="member-role">
                                        Member
                                    </td>

                                </tr>


                                <tr>

                                    <td>5</td>

                                    <td>
                                        Ms. P. Carmel
                                    </td>

                                    <td class="member-role">
                                        Member
                                    </td>

                                </tr>


                            </tbody>

                        </table>


                    </div>

                </div>


            </div>

        </div>

    </section>


    <!-- Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>


    <?php include __DIR__ . '/footer.php'; ?>