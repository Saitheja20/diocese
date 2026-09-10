<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Reconstitution of the Diocesan Tribunal</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <style>

        /* =========================================
           GENERAL
        ========================================= */

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

        .tribunal-section {
            padding: 65px 15px;
        }

        .tribunal-container {
            max-width: 1100px;
            margin: auto;
        }


        /* =========================================
           PAGE HEADING
        ========================================= */

        .page-heading {
            text-align: center;
            margin-bottom: 35px;
        }

        .page-heading h1 {
            margin: 0;
            font-family: "Poppins", sans-serif;
            font-size: 40px;
            font-weight: 700;
            color: #731d27;
            line-height: 1.3;
        }

        .heading-decoration {
            width: 70px;
            height: 3px;
            background: #b28a35;
            margin: 15px auto 0;
        }


        /* =========================================
           INTRODUCTION
        ========================================= */

        .intro-text {
            max-width: 950px;
            margin: 0 auto 35px;
        }

        .intro-text p {
            margin: 0;
            color: #555555;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.9;
            text-align: justify;
        }


        /* =========================================
           APPOINTMENT PERIOD
        ========================================= */

        .period-strip {
            border-top: 1px solid #d9d9d9;
            border-bottom: 1px solid #d9d9d9;
            padding: 18px 15px;
            margin-bottom: 55px;
            text-align: center;
        }

        .period-label {
            font-size: 1rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            color: #8b6b25;
            margin-right: 12px;
        }

        .period-date {
            font-family: "Poppins", sans-serif;
            color: #731d27;
            font-size: 1rem;
            font-weight: 500;
        }


        /* =========================================
           CONTENT SECTION
        ========================================= */

        .official-section {
            margin-bottom: 50px;
        }

        /*
           SMALL SECTION HEADING
           Kept exactly as the original style.
           No vertical line added.
        */

        .section-heading {
            display: flex;
            align-items: center;
            margin-bottom: 0;
            border-bottom: 2px solid #731d27;
        }

        .section-heading h2 {
            margin: 0;
            padding: 10px 18px;
            background: #731d27;
            color: #ffffff;
            font-family: "Poppins", sans-serif;
            font-size: 1rem;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
        }


        /* =========================================
           OFFICIAL INFORMATION ROW
        ========================================= */

        .official-item {
            display: grid;
            grid-template-columns: 32% 68%;
            border-bottom: 1px solid #dddddd;
            min-height: 58px;
        }

        .official-role {
            background: #f5f5f3;
            padding: 16px 20px;
            color: #731d27;
            font-family: "Poppins", sans-serif;
            font-size: 1rem;
            font-weight: 600;
            display: flex;
            align-items: center;
        }

        .official-name {
            padding: 16px 20px;
            color: #333333;
            font-family: "Poppins", sans-serif;
            font-size: 1rem;
            font-weight: 400;
            display: flex;
            align-items: center;
            line-height: 1.6;
        }


        /* =========================================
           MEMBER LIST
        ========================================= */

        .member-heading {
            display: grid;
            grid-template-columns: 80px 1fr;
            background: #f5f5f3;
            border-bottom: 1px solid #d5d5d5;
            padding: 11px 15px;
            color: #731d27;
            font-family: "Poppins", sans-serif;
            font-size: 1rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .member-row {
            display: grid;
            grid-template-columns: 80px 1fr;
            border-bottom: 1px solid #dddddd;
            min-height: 56px;
        }

        .member-number {
            display: flex;
            align-items: center;
            justify-content: center;
            color: #8b6b25;
            font-family: "Poppins", sans-serif;
            font-size: 1rem;
            font-weight: 600;
            border-right: 1px solid #dddddd;
        }

        .member-name {
            display: flex;
            align-items: center;
            padding: 14px 20px;
            font-family: "Poppins", sans-serif;
            font-size: 1rem;
            font-weight: 400;
            color: #333333;
            line-height: 1.6;
        }


        /* =========================================
           FEATURED OFFICIAL
        ========================================= */

        .featured-official {
            border-bottom: 1px solid #dddddd;
        }

        .featured-official .official-role {
            font-size: 1rem;
        }

        .featured-official .official-name {
            font-family: "Poppins", sans-serif;
            font-size: 1rem;
            font-weight: 500;
        }


        /* =========================================
           TABLET
        ========================================= */

        @media (max-width: 768px) {

            .tribunal-section {
                padding: 50px 15px;
            }

            .page-heading h1 {
                font-size: 40px;
            }

            .intro-text p {
                text-align: left;
                font-size: 1rem;
            }

            .period-strip {
                margin-bottom: 40px;
            }

            .period-label {
                display: block;
                margin: 0 0 5px;
            }

            .official-item {
                grid-template-columns: 38% 62%;
            }

        }


        /* =========================================
           MOBILE
        ========================================= */

        @media (max-width: 576px) {

            .tribunal-section {
                padding: 40px 12px;
            }

            .page-heading {
                margin-bottom: 28px;
            }

            .page-heading h1 {
                font-size: 32px;
                font-weight: 700;
                line-height: 1.35;
            }

            .heading-decoration {
                width: 55px;
                height: 2px;
            }

            .intro-text p {
                font-size: 1rem;
                line-height: 1.8;
            }

            .period-strip {
                padding: 15px 8px;
                margin-bottom: 35px;
            }

            .period-label {
                font-size: 0.9rem;
            }

            .period-date {
                font-size: 1rem;
            }


            /* Small heading remains a small button */

            .section-heading h2 {
                font-size: 1rem;
                padding: 9px 13px;
            }


            /* Official information */

            .official-item {
                display: block;
            }

            .official-role {
                min-height: auto;
                padding: 10px 14px 5px;
                background: #f5f5f3;
                font-size: 1rem;
            }

            .official-name {
                padding: 8px 14px 14px;
                font-size: 1rem;
            }

            .featured-official .official-name {
                font-size: 1rem;
            }


            /* Member heading */

            .member-heading {
                grid-template-columns: 55px 1fr;
                padding: 9px 10px;
                font-size: 0.9rem;
            }

            .member-row {
                grid-template-columns: 55px 1fr;
            }

            .member-number {
                font-size: 1rem;
            }

            .member-name {
                padding: 13px 12px;
                font-size: 1rem;
            }

            .official-section {
                margin-bottom: 38px;
            }

        }


        /* =========================================
           VERY SMALL MOBILE
        ========================================= */

        @media (max-width: 380px) {

            .page-heading h1 {
                font-size: 28px;
                font-weight: 700;
            }

            .period-date {
                font-size: 0.95rem;
            }

            .member-name {
                font-size: 1rem;
            }

            .section-heading h2 {
                font-size: 0.9rem;
                padding: 8px 11px;
            }

        }

    </style>

</head>


<body>


<section class="tribunal-section">

    <div class="tribunal-container">


        <!-- =====================================
             PAGE HEADING
        ====================================== -->

        <div class="page-heading">

            <h1>
                Reconstitution of the Diocesan Tribunal
            </h1>

            <div class="heading-decoration"></div>

        </div>


        <!-- =====================================
             INTRODUCTION
        ====================================== -->

        <div class="intro-text">

            <p>
                According to the canons 1420 and 1421§1 with the necessary
                dispensation and approval from 'Supermo Tribunal della
                Segnatura Apostolica', the Bishop of Warangal and the judge
                at first instance of the diocese of Warangal appoint the
                following members for a period of 5 years from 1st of June
                2014 to 31st May, 2019.
            </p>

        </div>


        <!-- =====================================
             PERIOD
        ====================================== -->

        <div class="period-strip">

            <span class="period-label">
                Appointment Period
            </span>

            <span class="period-date">
                1st June 2014 – 31st May 2019
            </span>

        </div>


        <!-- =====================================
             TRIBUNAL OFFICIALS
        ====================================== -->

        <div class="official-section">

            <div class="section-heading">

                <h2>
                    Tribunal Officials
                </h2>

            </div>


            <!-- Judicial Vicar -->

            <div class="official-item featured-official">

                <div class="official-role">
                    Judicial Vicar
                </div>

                <div class="official-name">
                    Rev. Fr. Yetukuti Thomas Kiran, MCL
                </div>

            </div>


            <!-- Defender of the Bond -->

            <div class="official-item featured-official">

                <div class="official-role">
                    Defender of the Bond
                </div>

                <div class="official-name">
                    Rev. Fr. Thatikonda Joseph, MCI
                </div>

            </div>

        </div>


        <!-- =====================================
             JUDGES
        ====================================== -->

        <div class="official-section">

            <div class="section-heading">

                <h2>
                    Judges
                </h2>

            </div>


            <div class="member-heading">

                <div>
                    Sl. No.
                </div>

                <div>
                    Name
                </div>

            </div>


            <div class="member-row">

                <div class="member-number">
                    01
                </div>

                <div class="member-name">
                    Rev. Fr. Singareddy Bala Showry
                </div>

            </div>


            <div class="member-row">

                <div class="member-number">
                    02
                </div>

                <div class="member-name">
                    Rev. Fr. A. Anthony Swamy, SVD
                </div>

            </div>


            <div class="member-row">

                <div class="member-number">
                    03
                </div>

                <div class="member-name">
                    Rev. Fr. Thumma Yaga Reddy
                </div>

            </div>


            <div class="member-row">

                <div class="member-number">
                    04
                </div>

                <div class="member-name">
                    Dr. Prathap Reddy, M.S
                </div>

            </div>

        </div>


        <!-- =====================================
             ADVOCATES
        ====================================== -->

        <div class="official-section">

            <div class="section-heading">

                <h2>
                    Advocates
                </h2>

            </div>


            <div class="member-heading">

                <div>
                    Sl. No.
                </div>

                <div>
                    Name
                </div>

            </div>


            <div class="member-row">

                <div class="member-number">
                    01
                </div>

                <div class="member-name">
                    Mr. Prasangi, LLB
                </div>

            </div>


            <div class="member-row">

                <div class="member-number">
                    02
                </div>

                <div class="member-name">
                    Rev. Fr. Jyothis IMS
                </div>

            </div>


            <div class="member-row">

                <div class="member-number">
                    03
                </div>

                <div class="member-name">
                    Rev. Fr. Pasala Anthony
                </div>

            </div>


            <div class="member-row">

                <div class="member-number">
                    04
                </div>

                <div class="member-name">
                    Rev. Fr. Yeruva Lourdu Rddy M.S (dev.com)
                </div>

            </div>

        </div>


        <!-- =====================================
             NOTARY
        ====================================== -->

        <div class="official-section">

            <div class="section-heading">

                <h2>
                    Notary
                </h2>

            </div>


            <div class="official-item featured-official">

                <div class="official-role">
                    Notary
                </div>

                <div class="official-name">
                    Rev. Fr. Yeruva Lourdu Rddy M.S (dev.com)
                </div>

            </div>

        </div>


    </div>

</section>


</body>

</html>