<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diocese of Warangal</title>
    <?php include __DIR__ . '/header-links.php'; ?>


    <?php include __DIR__ . '/header.php'; ?>

</head>
<body>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: "Poppins", sans-serif;
            font-size: 1rem;
            background: #f5f7fb;
            color: #1f2937;
        }

        .community-section {
            width: 100%;
            padding: 55px 20px 70px;
        }

        /* Heading */
        .section-title {
            text-align: center;
            margin-bottom: 45px;
        }

        .section-title h1 {
            font-family: "Poppins", sans-serif;
            font-size: 40px;
            font-weight: 700;
            line-height: 1.3;
            color: #147b23;
            margin-bottom: 14px;
        }

        .title-line {
            width: 75px;
            height: 4px;
            margin: 0 auto;
            border-radius: 50px;
            background: #0066ff;
        }

        /* Main Box */
        .community-box {
            width: min(100%, 1250px);
            margin: 0 auto;
            background: #ffffff;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(20, 123, 35, 0.08);
        }

        /* Header */
        .community-header {
            display: grid;
            grid-template-columns: 100px minmax(0, 1fr) 180px;
            align-items: center;
            min-height: 70px;
            padding: 0 28px;
            background: #147b23;
            color: #ffffff;
            font-size: 1rem;
            font-weight: 600;
        }

        .community-header .heading-number {
            text-align: center;
        }

        .community-header .heading-community {
            padding-left: 45px;
        }

        .community-header .heading-abbreviation {
            text-align: center;
        }

        /* Rows */
        .community-row {
            display: grid;
            grid-template-columns: 100px minmax(0, 1fr) 180px;
            align-items: center;
            min-height: 72px;
            padding: 0 28px;
            background: #ffffff;
            border-bottom: 1px solid #e8edf2;
            font-size: 1rem;
            transition: background 0.25s ease, transform 0.25s ease;
            outline: none;
        }

        .community-row:last-child {
            border-bottom: none;
        }

        .community-row:hover {
            background: #f3f8ff;
        }

        .community-row:focus,
        .community-row:focus-visible,
        .community-row:active {
            outline: none;
            border-left: none;
            border-right: none;
        }

        .serial-number {
            text-align: center;
            font-weight: 500;
            color: #52616b;
        }

        .community-name {
            padding-left: 45px;
            font-weight: 600;
            color: #263746;
            line-height: 1.5;
        }

        .abbreviation {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Badge */
        .badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 65px;
            min-height: 34px;
            padding: 5px 15px;
            border-radius: 8px;
            background: #0066ff;
            color: #ffffff;
            font-size: 1rem;
            font-weight: 600;
            line-height: 1.2;
            white-space: nowrap;
        }

        /* Tablet */
        @media (max-width: 768px) {

            .community-section {
                padding: 45px 15px 55px;
            }

            .section-title {
                margin-bottom: 35px;
            }

            .section-title h1 {
                font-size: 40px;
            }

            .community-box {
                border-radius: 14px;
            }

            .community-header {
                grid-template-columns: 80px minmax(0, 1fr) 150px;
                padding: 0 18px;
            }

            .community-row {
                grid-template-columns: 80px minmax(0, 1fr) 150px;
                padding: 0 18px;
            }

            .community-header .heading-community,
            .community-name {
                padding-left: 25px;
            }
        }

        /* Mobile */
        @media (max-width: 576px) {

            .community-section {
                padding: 35px 10px 45px;
            }

            .section-title {
                margin-bottom: 30px;
            }

            .section-title h1 {
                font-size: 40px;
                line-height: 1.25;
            }

            .title-line {
                width: 65px;
            }

            .community-box {
                border-radius: 12px;
            }

            .community-header {
                grid-template-columns: 55px minmax(0, 1fr) 110px;
                min-height: 64px;
                padding: 0 12px;
            }

            .community-row {
                grid-template-columns: 55px minmax(0, 1fr) 110px;
                min-height: 70px;
                padding: 0 12px;
            }

            .community-header .heading-community,
            .community-name {
                padding-left: 15px;
            }

            .community-name {
                font-size: 1rem;
            }

            .badge {
                min-width: 55px;
                padding: 5px 10px;
                font-size: 1rem;
            }
        }

        /* Very Small Screens */
        @media (max-width: 400px) {

            .community-section {
                padding-left: 8px;
                padding-right: 8px;
            }

            .section-title h1 {
                font-size: 40px;
            }

            .community-header {
                grid-template-columns: 45px minmax(0, 1fr) 95px;
                padding: 0 8px;
            }

            .community-row {
                grid-template-columns: 45px minmax(0, 1fr) 95px;
                padding: 0 8px;
            }

            .community-header .heading-community,
            .community-name {
                padding-left: 10px;
            }

            .community-name {
                overflow-wrap: anywhere;
            }

            .badge {
                min-width: 48px;
                padding: 5px 7px;
            }
        }
    </style>
</head>

<body>

    <section class="community-section">

        <div class="section-title">
            <h1>Religious Priests Communities</h1>
            <div class="title-line"></div>
        </div>

        <div class="community-box">

            <!-- Header -->
            <div class="community-header">
                <div class="heading-number">S.No</div>
                <div class="heading-community">Religious Community</div>
                <div class="heading-abbreviation">Abbreviation</div>
            </div>

            <!-- 1 -->
            <div class="community-row">
                <div class="serial-number">1</div>
                <div class="community-name">Capuchins</div>
                <div class="abbreviation">
                    <span class="badge">OFM Cap</span>
                </div>
            </div>

            <!-- 2 -->
            <div class="community-row">
                <div class="serial-number">2</div>
                <div class="community-name">Carmelites (Carmelites First Order)</div>
                <div class="abbreviation">
                    <span class="badge">O.C.D</span>
                </div>
            </div>

            <!-- 3 -->
            <div class="community-row">
                <div class="serial-number">3</div>
                <div class="community-name">Holy Cross Fathers</div>
                <div class="abbreviation">
                    <span class="badge">C.S.C</span>
                </div>
            </div>

            <!-- 4 -->
            <div class="community-row">
                <div class="serial-number">4</div>
                <div class="community-name">Indian Missionary Society</div>
                <div class="abbreviation">
                    <span class="badge">-</span>
                </div>
            </div>

            <!-- 5 -->
            <div class="community-row">
                <div class="serial-number">5</div>
                <div class="community-name">Mill Hill Missionaries</div>
                <div class="abbreviation">
                    <span class="badge">-</span>
                </div>
            </div>

            <!-- 6 -->
            <div class="community-row">
                <div class="serial-number">6</div>
                <div class="community-name">Missionaries of St. Francis De Sales</div>
                <div class="abbreviation">
                    <span class="badge">MSFS</span>
                </div>
            </div>

            <!-- 7 -->
            <div class="community-row">
                <div class="serial-number">7</div>
                <div class="community-name">Missionaries of the Poor</div>
                <div class="abbreviation">
                    <span class="badge">-</span>
                </div>
            </div>

            <!-- 8 -->
            <div class="community-row">
                <div class="serial-number">8</div>
                <div class="community-name">Pontificio Instituto Missioni Estere</div>
                <div class="abbreviation">
                    <span class="badge">P.I.M.E</span>
                </div>
            </div>

            <!-- 9 -->
            <div class="community-row">
                <div class="serial-number">9</div>
                <div class="community-name">Salesians of Don Bosco</div>
                <div class="abbreviation">
                    <span class="badge">-</span>
                </div>
            </div>

            <!-- 10 -->
            <div class="community-row">
                <div class="serial-number">10</div>
                <div class="community-name">Society of the Divine Word</div>
                <div class="abbreviation">
                    <span class="badge">S.V.D</span>
                </div>
            </div>

            <!-- 11 -->
            <div class="community-row">
                <div class="serial-number">11</div>
                <div class="community-name">The Society of Jesus</div>
                <div class="abbreviation">
                    <span class="badge">S.J</span>
                </div>
            </div>

        </div>

    </section>




        <?php include __DIR__ . '/footer.php'; ?>



</body>
</html>



