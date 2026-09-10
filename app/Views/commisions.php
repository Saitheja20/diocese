<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Warangal Diocesan Presbyteral Council</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <style>

        body {
            margin: 0;
            padding: 0;
            background: #f7f7f7;
            font-family: "Poppins", sans-serif;
            color: #333;
        }

        .council-section {
            padding: 60px 15px;
        }

        .council-title {
            text-align: center;
            margin-bottom: 40px;
        }

        .council-title h1 {
            font-size: 32px;
            font-weight: 700;
            color: #333;
            margin-bottom: 12px;
        }

        .title-line {
            width: 70px;
            height: 3px;
            background: #8b1e2d;
            margin: 0 auto;
        }

        /* Accordion */

        .council-accordion {
            max-width: 1000px;
            margin: 0 auto;
        }

        .accordion-item {
            border: 1px solid #ddd;
            margin-bottom: 12px;
            border-radius: 0 !important;
            background: #fff;
            overflow: hidden;
        }

        .accordion-button {
            background: #fff;
            color: #333;
            font-size: 17px;
            font-weight: 600;
            padding: 18px 22px;
            box-shadow: none !important;
        }

        .accordion-button:not(.collapsed) {
            background: #f4f4f4;
            color: #8b1e2d;
        }

        .accordion-button::after {
            background-size: 16px;
        }

        .accordion-body {
            background: #fff;
            padding: 22px;
        }

        /* Member Heading */

        .member-heading {
            margin-bottom: 15px;
            font-size: 16px;
            font-weight: 600;
            color: #555;
            padding-bottom: 10px;
            border-bottom: 1px solid #ddd;
        }

        /* Member List */

        .member-list {
            width: 100%;
        }

        .member-row {
            border-bottom: 1px solid #e5e5e5;
            padding: 13px 5px;
        }

        .member-row:last-child {
            border-bottom: none;
        }

        .member-number {
            display: inline-block;
            width: 45px;
            font-size: 14px;
            font-weight: 600;
            color: #8b1e2d;
        }

        .member-name {
            font-size: 16px;
            color: #333;
        }

        /* Tablet */

        @media (max-width: 768px) {

            .council-section {
                padding: 45px 15px;
            }

            .council-title h1 {
                font-size: 27px;
            }

            .accordion-button {
                font-size: 16px;
                padding: 16px 18px;
            }

            .accordion-body {
                padding: 18px;
            }

        }

        /* Mobile */

        @media (max-width: 576px) {

            .council-section {
                padding: 35px 12px;
            }

            .council-title {
                margin-bottom: 25px;
            }

            .council-title h1 {
                font-size: 23px;
                line-height: 1.4;
            }

            .title-line {
                width: 55px;
            }

            .accordion-item {
                margin-bottom: 9px;
            }

            .accordion-button {
                font-size: 15px;
                line-height: 1.4;
                padding: 15px 14px;
                padding-right: 45px;
            }

            .accordion-body {
                padding: 15px;
            }

            .member-heading {
                font-size: 15px;
            }

            .member-row {
                padding: 12px 0;
            }

            .member-number {
                width: 38px;
                font-size: 13px;
            }

            .member-name {
                font-size: 15px;
            }

        }

    </style>

</head>

<body>

<section class="council-section">

    <div class="container">

        <!-- Page Heading -->

        <div class="council-title">

            <h1>
                WARANGAL DIOCESAN PRESBYTERAL COUNCIL
            </h1>

            <div class="title-line"></div>

        </div>


        <!-- Accordion -->

        <div class="accordion council-accordion" id="commissionAccordion">


            <!-- ================================================= -->
            <!-- COMMISSION 1 -->
            <!-- ================================================= -->

            <div class="accordion-item">

                <h2 class="accordion-header" id="headingOne">

                    <button class="accordion-button"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#commissionOne"
                        aria-expanded="true"
                        aria-controls="commissionOne">

                        Commission for Evangelization / Small Christian Communities & Charismatic Renewal

                    </button>

                </h2>

                <div id="commissionOne"
                    class="accordion-collapse collapse show"
                    aria-labelledby="headingOne"
                    data-bs-parent="#commissionAccordion">

                    <div class="accordion-body">

                        <div class="member-heading">
                            Commission Members
                        </div>

                        <div class="member-list">

                            <div class="member-row">
                                <span class="member-number">01</span>
                                <span class="member-name">Fr. G. Kamal</span>
                            </div>

                            <div class="member-row">
                                <span class="member-number">02</span>
                                <span class="member-name">Fr. D. Joseph</span>
                            </div>

                            <div class="member-row">
                                <span class="member-number">03</span>
                                <span class="member-name">Fr. Allam Inna</span>
                            </div>

                            <div class="member-row">
                                <span class="member-number">04</span>
                                <span class="member-name">Fr. A. Prakash</span>
                            </div>

                            <div class="member-row">
                                <span class="member-number">05</span>
                                <span class="member-name">Fr. G. Ranjith</span>
                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!-- ================================================= -->
            <!-- COMMISSION 2 -->
            <!-- ================================================= -->

            <div class="accordion-item">

                <h2 class="accordion-header" id="headingTwo">

                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#commissionTwo"
                        aria-expanded="false"
                        aria-controls="commissionTwo">

                        Commission for Catechetics

                    </button>

                </h2>

                <div id="commissionTwo"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingTwo"
                    data-bs-parent="#commissionAccordion">

                    <div class="accordion-body">

                        <div class="member-heading">
                            Commission Members
                        </div>

                        <div class="member-list">

                            <div class="member-row">
                                <span class="member-number">01</span>
                                <span class="member-name">Fr. G. Kamal</span>
                            </div>

                            <div class="member-row">
                                <span class="member-number">02</span>
                                <span class="member-name">Fr. A. Vincent</span>
                            </div>

                            <div class="member-row">
                                <span class="member-number">03</span>
                                <span class="member-name">Fr. Y. Bala</span>
                            </div>

                            <div class="member-row">
                                <span class="member-number">04</span>
                                <span class="member-name">Fr. G. Chinnapu Reddy (Jr)</span>
                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!-- ================================================= -->
            <!-- COMMISSION 3 -->
            <!-- ================================================= -->

            <div class="accordion-item">

                <h2 class="accordion-header" id="headingThree">

                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#commissionThree">

                        Commission for Family

                    </button>

                </h2>

                <div id="commissionThree"
                    class="accordion-collapse collapse"
                    data-bs-parent="#commissionAccordion">

                    <div class="accordion-body">

                        <div class="member-heading">
                            Commission Members
                        </div>

                        <div class="member-list">

                            <div class="member-row">
                                <span class="member-number">01</span>
                                <span class="member-name">Fr. Y. Chinnappa</span>
                            </div>

                            <div class="member-row">
                                <span class="member-number">02</span>
                                <span class="member-name">Fr. Y. Inna</span>
                            </div>

                            <div class="member-row">
                                <span class="member-number">03</span>
                                <span class="member-name">Fr. T. Santhosh</span>
                            </div>

                            <div class="member-row">
                                <span class="member-number">04</span>
                                <span class="member-name">Fr. S. Mahipaul</span>
                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!-- ================================================= -->
            <!-- COMMISSION 4 -->
            <!-- ================================================= -->

            <div class="accordion-item">

                <h2 class="accordion-header" id="headingFour">

                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#commissionFour">

                        Commission for Liturgy

                    </button>

                </h2>

                <div id="commissionFour"
                    class="accordion-collapse collapse"
                    data-bs-parent="#commissionAccordion">

                    <div class="accordion-body">

                        <div class="member-heading">
                            Commission Members
                        </div>

                        <div class="member-list">

                            <div class="member-row">
                                <span class="member-number">01</span>
                                <span class="member-name">Fr. S. Inna</span>
                            </div>

                            <div class="member-row">
                                <span class="member-number">02</span>
                                <span class="member-name">Fr. A. Bala</span>
                            </div>

                            <div class="member-row">
                                <span class="member-number">03</span>
                                <span class="member-name">Fr. R. Thomas</span>
                            </div>

                            <div class="member-row">
                                <span class="member-number">04</span>
                                <span class="member-name">Fr. G. Naveen</span>
                            </div>

                            <div class="member-row">
                                <span class="member-number">05</span>
                                <span class="member-name">Fr. V. Simon</span>
                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!-- ================================================= -->
            <!-- COMMISSION 5 -->
            <!-- ================================================= -->

            <div class="accordion-item">

                <h2 class="accordion-header" id="headingFive">

                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#commissionFive">

                        Commission for Education

                    </button>

                </h2>

                <div id="commissionFive"
                    class="accordion-collapse collapse"
                    data-bs-parent="#commissionAccordion">

                    <div class="accordion-body">

                        <div class="member-heading">
                            Commission Members
                        </div>

                        <div class="member-list">

                            <div class="member-row">
                                <span class="member-number">01</span>
                                <span class="member-name">Fr. M. Jaya Paul</span>
                            </div>

                            <div class="member-row">
                                <span class="member-number">02</span>
                                <span class="member-name">Fr. B. Prakash</span>
                            </div>

                            <div class="member-row">
                                <span class="member-number">03</span>
                                <span class="member-name">Fr. R. Inna</span>
                            </div>

                            <div class="member-row">
                                <span class="member-number">04</span>
                                <span class="member-name">Fr. T. Augustine</span>
                            </div>

                            <div class="member-row">
                                <span class="member-number">05</span>
                                <span class="member-name">Fr. T. Joseph</span>
                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!-- ================================================= -->
            <!-- COMMISSION 6 -->
            <!-- ================================================= -->

            <div class="accordion-item">

                <h2 class="accordion-header" id="headingSix">

                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#commissionSix">

                        Commission for Bible

                    </button>

                </h2>

                <div id="commissionSix"
                    class="accordion-collapse collapse"
                    data-bs-parent="#commissionAccordion">

                    <div class="accordion-body">

                        <div class="member-heading">
                            Commission Members
                        </div>

                        <div class="member-list">

                            <div class="member-row">
                                <span class="member-number">01</span>
                                <span class="member-name">Fr. D. Raja</span>
                            </div>

                            <div class="member-row">
                                <span class="member-number">02</span>
                                <span class="member-name">Fr. P. Prakash</span>
                            </div>

                            <div class="member-row">
                                <span class="member-number">03</span>
                                <span class="member-name">Fr. Basani Chinnappa</span>
                            </div>

                            <div class="member-row">
                                <span class="member-number">04</span>
                                <span class="member-name">Fr. P. Dasaiah</span>
                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!-- ================================================= -->
            <!-- COMMISSION 7 -->
            <!-- ================================================= -->

            <div class="accordion-item">

                <h2 class="accordion-header" id="headingSeven">

                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#commissionSeven">

                        Commission for S.C. and S.T.

                    </button>

                </h2>

                <div id="commissionSeven"
                    class="accordion-collapse collapse"
                    data-bs-parent="#commissionAccordion">

                    <div class="accordion-body">

                        <div class="member-heading">
                            Commission Members
                        </div>

                        <div class="member-list">

                            <div class="member-row">
                                <span class="member-number">01</span>
                                <span class="member-name">Fr. K. Vijay Kumar</span>
                            </div>

                            <div class="member-row">
                                <span class="member-number">02</span>
                                <span class="member-name">Fr. T. Jerome</span>
                            </div>

                            <div class="member-row">
                                <span class="member-number">03</span>
                                <span class="member-name">Fr. N. Surender</span>
                            </div>

                            <div class="member-row">
                                <span class="member-number">04</span>
                                <span class="member-name">Fr. G. Prashanth</span>
                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!-- ================================================= -->
            <!-- COMMISSION 8 -->
            <!-- ================================================= -->

            <div class="accordion-item">

                <h2 class="accordion-header" id="headingEight">

                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#commissionEight">

                        Commission for Vocations, Seminary, Clergy and Religious

                    </button>

                </h2>

                <div id="commissionEight"
                    class="accordion-collapse collapse"
                    data-bs-parent="#commissionAccordion">

                    <div class="accordion-body">

                        <div class="member-heading">
                            Commission Members
                        </div>

                        <div class="member-list">

                            <div class="member-row">
                                <span class="member-number">01</span>
                                <span class="member-name">Fr. D. Prashanth</span>
                            </div>

                            <div class="member-row">
                                <span class="member-number">02</span>
                                <span class="member-name">Fr. Thomas Kiran</span>
                            </div>

                            <div class="member-row">
                                <span class="member-number">03</span>
                                <span class="member-name">Fr. A. Raja</span>
                            </div>

                            <div class="member-row">
                                <span class="member-number">04</span>
                                <span class="member-name">Fr. M. Praveen</span>
                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!-- ================================================= -->
            <!-- COMMISSION 9 -->
            <!-- ================================================= -->

            <div class="accordion-item">

                <h2 class="accordion-header" id="headingNine">

                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#commissionNine">

                        Commission for Health

                    </button>

                </h2>

                <div id="commissionNine"
                    class="accordion-collapse collapse"
                    data-bs-parent="#commissionAccordion">

                    <div class="accordion-body">

                        <div class="member-heading">
                            Commission Members
                        </div>

                        <div class="member-list">

                            <div class="member-row">
                                <span class="member-number">01</span>
                                <span class="member-name">Fr. Y. Joji</span>
                            </div>

                            <div class="member-row">
                                <span class="member-number">02</span>
                                <span class="member-name">Fr. P. John Paul</span>
                            </div>

                            <div class="member-row">
                                <span class="member-number">03</span>
                                <span class="member-name">Fr. G. Prakash</span>
                            </div>

                            <div class="member-row">
                                <span class="member-number">04</span>
                                <span class="member-name">Fr. S. Prabhakar</span>
                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!-- ================================================= -->
            <!-- COMMISSION 10 -->
            <!-- ================================================= -->

            <div class="accordion-item">

                <h2 class="accordion-header" id="headingTen">

                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#commissionTen">

                        Commission for Youth

                    </button>

                </h2>

                <div id="commissionTen"
                    class="accordion-collapse collapse"
                    data-bs-parent="#commissionAccordion">

                    <div class="accordion-body">

                        <div class="member-heading">
                            Commission Members
                        </div>

                        <div class="member-list">

                            <div class="member-row">
                                <span class="member-number">01</span>
                                <span class="member-name">Fr. G. Thomas (Jr.)</span>
                            </div>

                            <div class="member-row">
                                <span class="member-number">02</span>
                                <span class="member-name">Fr. M. Naveen</span>
                            </div>

                            <div class="member-row">
                                <span class="member-number">03</span>
                                <span class="member-name">Fr. Kasu Marreddy</span>
                            </div>

                            <div class="member-row">
                                <span class="member-number">04</span>
                                <span class="member-name">Fr. B. J. Praveen</span>
                            </div>

                            <div class="member-row">
                                <span class="member-number">05</span>
                                <span class="member-name">Fr. T. Sheran Teja</span>
                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!-- ================================================= -->
            <!-- COMMISSION 11 -->
            <!-- ================================================= -->

            <div class="accordion-item">

                <h2 class="accordion-header" id="headingEleven">

                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#commissionEleven">

                        Commission for Labour, Justice & Peace

                    </button>

                </h2>

                <div id="commissionEleven"
                    class="accordion-collapse collapse"
                    data-bs-parent="#commissionAccordion">

                    <div class="accordion-body">

                        <div class="member-heading">
                            Commission Members
                        </div>

                        <div class="member-list">

                            <div class="member-row">
                                <span class="member-number">01</span>
                                <span class="member-name">Fr. D. Vijaya Paul</span>
                            </div>

                            <div class="member-row">
                                <span class="member-number">02</span>
                                <span class="member-name">Fr. G. Bala Martin</span>
                            </div>

                            <div class="member-row">
                                <span class="member-number">03</span>
                                <span class="member-name">Fr. T. Kiran</span>
                            </div>

                            <div class="member-row">
                                <span class="member-number">04</span>
                                <span class="member-name">Fr. E. Vijay</span>
                            </div>

                            <div class="member-row">
                                <span class="member-number">05</span>
                                <span class="member-name">Fr. A. Sravan</span>
                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!-- ================================================= -->
            <!-- COMMISSION 12 -->
            <!-- ================================================= -->

            <div class="accordion-item">

                <h2 class="accordion-header" id="headingTwelve">

                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#commissionTwelve">

                        Commission for Women

                    </button>

                </h2>

                <div id="commissionTwelve"
                    class="accordion-collapse collapse"
                    data-bs-parent="#commissionAccordion">

                    <div class="accordion-body">

                        <div class="member-heading">
                            Commission Members
                        </div>

                        <div class="member-list">

                            <div class="member-row">
                                <span class="member-number">01</span>
                                <span class="member-name">Fr. S. Bala Showry</span>
                            </div>

                            <div class="member-row">
                                <span class="member-number">02</span>
                                <span class="member-name">Fr. Y. Lourdu</span>
                            </div>

                            <div class="member-row">
                                <span class="member-number">03</span>
                                <span class="member-name">Fr. N. Bala Swamy</span>
                            </div>

                            <div class="member-row">
                                <span class="member-number">04</span>
                                <span class="member-name">Fr. Gangarapu Suresh</span>
                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!-- ================================================= -->
            <!-- COMMISSION 13 -->
            <!-- ================================================= -->

            <div class="accordion-item">

                <h2 class="accordion-header" id="headingThirteen">

                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#commissionThirteen">

                        Commission for Ecumenism & Dialogue

                    </button>

                </h2>

                <div id="commissionThirteen"
                    class="accordion-collapse collapse"
                    data-bs-parent="#commissionAccordion">

                    <div class="accordion-body">

                        <div class="member-heading">
                            Commission Members
                        </div>

                        <div class="member-list">

                            <div class="member-row">
                                <span class="member-number">01</span>
                                <span class="member-name">Fr. M. Anand</span>
                            </div>

                            <div class="member-row">
                                <span class="member-number">02</span>
                                <span class="member-name">Fr. Gali Rayappa</span>
                            </div>

                            <div class="member-row">
                                <span class="member-number">03</span>
                                <span class="member-name">Fr. G. Rayappa</span>
                            </div>

                            <div class="member-row">
                                <span class="member-number">04</span>
                                <span class="member-name">Fr. T. Ashok</span>
                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!-- ================================================= -->
            <!-- COMMISSION 14 -->
            <!-- ================================================= -->

            <div class="accordion-item">

                <h2 class="accordion-header" id="headingFourteen">

                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#commissionFourteen">

                        Commission for Social Communications

                    </button>

                </h2>

                <div id="commissionFourteen"
                    class="accordion-collapse collapse"
                    data-bs-parent="#commissionAccordion">

                    <div class="accordion-body">

                        <div class="member-heading">
                            Commission Members
                        </div>

                        <div class="member-list">

                            <div class="member-row">
                                <span class="member-number">01</span>
                                <span class="member-name">Fr. Y. Kiran Kumar</span>
                            </div>

                            <div class="member-row">
                                <span class="member-number">02</span>
                                <span class="member-name">Fr. K. Joseph</span>
                            </div>

                            <div class="member-row">
                                <span class="member-number">03</span>
                                <span class="member-name">Fr. G. Joseph</span>
                            </div>

                            <div class="member-row">
                                <span class="member-number">04</span>
                                <span class="member-name">Fr. D. Prathap</span>
                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!-- ================================================= -->
            <!-- COMMISSION 15 -->
            <!-- ================================================= -->

            <div class="accordion-item">

                <h2 class="accordion-header" id="headingFifteen">

                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#commissionFifteen">

                        Commission for Laity

                    </button>

                </h2>

                <div id="commissionFifteen"
                    class="accordion-collapse collapse"
                    data-bs-parent="#commissionAccordion">

                    <div class="accordion-body">

                        <div class="member-heading">
                            Commission Members
                        </div>

                        <div class="member-list">

                            <div class="member-row">
                                <span class="member-number">01</span>
                                <span class="member-name">Fr. P. Raja</span>
                            </div>

                            <div class="member-row">
                                <span class="member-number">02</span>
                                <span class="member-name">Fr. P. Chinnaiah</span>
                            </div>

                            <div class="member-row">
                                <span class="member-number">03</span>
                                <span class="member-name">Fr. N. Maria Joseph</span>
                            </div>

                            <div class="member-row">
                                <span class="member-number">04</span>
                                <span class="member-name">Fr. P. Suresh</span>
                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!-- ================================================= -->
            <!-- COMMISSION 16 -->
            <!-- ================================================= -->

            <div class="accordion-item">

                <h2 class="accordion-header" id="headingSixteen">

                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#commissionSixteen">

                        Commission for Migrants

                    </button>

                </h2>

                <div id="commissionSixteen"
                    class="accordion-collapse collapse"
                    data-bs-parent="#commissionAccordion">

                    <div class="accordion-body">

                        <div class="member-heading">
                            Commission Members
                        </div>

                        <div class="member-list">

                            <div class="member-row">
                                <span class="member-number">01</span>
                                <span class="member-name">Fr. G. Sudhakar</span>
                            </div>

                            <div class="member-row">
                                <span class="member-number">02</span>
                                <span class="member-name">Fr. T. Yaga Reddy</span>
                            </div>

                            <div class="member-row">
                                <span class="member-number">03</span>
                                <span class="member-name">Fr. Kasu Showreddy</span>
                            </div>

                            <div class="member-row">
                                <span class="member-number">04</span>
                                <span class="member-name">Fr. N. Sampatha</span>
                            </div>

                        </div>

                    </div>

                </div>

            </div>


        </div>

    </div>

</section>


<!-- Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>