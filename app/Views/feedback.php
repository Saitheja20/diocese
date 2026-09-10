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
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: #f8f9fa;
        }


        /* =================================
           FEEDBACK SECTION
        ================================= */

        .feedback_section {
            width: 100%;
            padding: 60px 15px;
            overflow: hidden;
        }


        /* =================================
           HEADING
        ================================= */

        .feedback_section .heading {
            width: 100%;
            text-align: center;
            margin-bottom: 30px;
        }

        .feedback_section .heading h2 {
            margin: 0;
            font-size: 36px;
            font-weight: 700;
            line-height: 1.3;
            color: #333333;
        }


        /* =================================
           FORM BOX
        ================================= */

        .feedback-form {
            width: 100%;
            max-width: 650px;
            margin: 0 auto;
            padding: 35px;
            background: #ffffff;
            border: 1px solid #e2e2e2;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        }


        /* =================================
           LABEL
        ================================= */

        .feedback-form .form-label {
            display: block;
            width: 100%;
            margin-bottom: 8px;
            font-size: 15px;
            font-weight: 600;
            color: #333333;
        }


        /* =================================
           INPUT & SELECT
        ================================= */

        .feedback-form .form-control,
        .feedback-form .form-select {
            width: 100%;
            min-height: 48px;
            padding: 10px 14px;
            font-size: 15px;
            color: #333333;
            background: #ffffff;
            border: 1px solid #cccccc;
            border-radius: 6px;
            box-shadow: none;
            outline: none;
        }


        /* =================================
           TEXTAREA
        ================================= */

        .feedback-form textarea.form-control {
            min-height: 120px;
            resize: vertical;
        }


        /* =================================
           PLACEHOLDER
        ================================= */

        .feedback-form .form-control::placeholder {
            color: #999999;
            opacity: 1;
        }


        /* =================================
           FOCUS
        ================================= */

        .feedback-form .form-control:focus,
        .feedback-form .form-select:focus {
            border-color: #176b25;
            box-shadow: 0 0 0 3px rgba(23, 107, 37, 0.10);
        }


        /* =================================
           SUBMIT BUTTON
        ================================= */

        .feedback-form .btn {
            width: 100%;
            min-height: 48px;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: 600;
            border: none;
            border-radius: 6px;
            background: #176b25;
            color: #ffffff;
        }

        .feedback-form .btn:hover {
            background: #12591e;
        }


        /* =================================
           VALIDATION
        ================================= */

        .feedback-form .invalid-feedback {
            font-size: 13px;
            margin-top: 5px;
        }


        /* =================================
           THANK YOU POPUP
        ================================= */

        .thank-you-popup {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.45);
            display: none;
            align-items: center;
            justify-content: center;
            padding: 20px;
            z-index: 9999;
        }

        .thank-you-popup.show {
            display: flex;
        }


        /* POPUP BOX */

        .thank-you-box {
            width: 100%;
            max-width: 420px;
            background: #ffffff;
            padding: 35px 30px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.20);
        }


        /* POPUP MESSAGE */

        .thank-you-box h3 {
            margin: 0;
            font-size: 24px;
            font-weight: 600;
            color: #176b25;
        }


        /* POPUP CLOSE BUTTON */

        .thank-you-box button {
            margin-top: 20px;
            padding: 10px 25px;
            border: none;
            border-radius: 5px;
            background: #176b25;
            color: #ffffff;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
        }


        /* =================================
           LARGE DESKTOP
        ================================= */

        @media (min-width: 1200px) {

            .feedback_section {
                padding: 70px 15px;
            }

            .feedback-form {
                padding: 40px;
            }

        }


        /* =================================
           LAPTOP
        ================================= */

        @media (min-width: 992px) and (max-width: 1199px) {

            .feedback_section {
                padding: 55px 15px;
            }

            .feedback-form {
                padding: 35px;
            }

        }


        /* =================================
           TABLET
        ================================= */

        @media (min-width: 768px) and (max-width: 991px) {

            .feedback_section {
                padding: 50px 15px;
            }

            .feedback_section .heading h2 {
                font-size: 32px;
            }

            .feedback-form {
                padding: 30px;
            }

        }


        /* =================================
           MOBILE
        ================================= */

        @media (max-width: 767px) {

            .feedback_section {
                padding: 40px 12px;
            }

            .feedback_section .heading {
                margin-bottom: 22px;
            }

            .feedback_section .heading h2 {
                font-size: 28px;
            }

            .feedback-form {
                max-width: 100%;
                padding: 25px 20px;
                border-radius: 8px;
            }

            .feedback-form .mb-3 {
                margin-bottom: 18px !important;
            }

            .feedback-form .form-label {
                font-size: 14px;
                margin-bottom: 7px;
            }

            .feedback-form .form-control,
            .feedback-form .form-select {
                min-height: 46px;
                padding: 9px 12px;
                font-size: 14px;
            }

            .feedback-form textarea.form-control {
                min-height: 110px;
            }

            .feedback-form .btn {
                min-height: 46px;
                font-size: 15px;
            }


            /* MOBILE POPUP */

            .thank-you-box {
                max-width: 100%;
                padding: 30px 20px;
            }

            .thank-you-box h3 {
                font-size: 22px;
            }

        }


        /* =================================
           SMALL MOBILE
        ================================= */

        @media (max-width: 575px) {

            .feedback_section {
                padding: 35px 10px;
            }

            .feedback_section .heading h2 {
                font-size: 26px;
            }

            .feedback-form {
                padding: 22px 16px;
            }

        }


        /* =================================
           VERY SMALL MOBILE
        ================================= */

        @media (max-width: 400px) {

            .feedback_section {
                padding: 30px 8px;
            }

            .feedback_section .heading h2 {
                font-size: 24px;
            }

            .feedback-form {
                padding: 18px 13px;
                border-radius: 6px;
            }

            .feedback-form .form-label {
                font-size: 13px;
            }

            .feedback-form .form-control,
            .feedback-form .form-select {
                min-height: 44px;
                padding: 8px 10px;
                font-size: 13px;
            }

            .feedback-form textarea.form-control {
                min-height: 100px;
            }

            .feedback-form .btn {
                min-height: 44px;
                font-size: 14px;
            }


            /* SMALL POPUP */

            .thank-you-popup {
                padding: 15px;
            }

            .thank-you-box {
                padding: 25px 15px;
            }

            .thank-you-box h3 {
                font-size: 20px;
            }

        }


        /* =================================
           320px MOBILE
        ================================= */

        @media (max-width: 320px) {

            .feedback_section {
                padding-left: 5px;
                padding-right: 5px;
            }

            .feedback_section .heading h2 {
                font-size: 22px;
            }

            .feedback-form {
                padding: 16px 11px;
            }

            .feedback-form .form-control,
            .feedback-form .form-select {
                font-size: 13px;
            }

            .thank-you-box h3 {
                font-size: 19px;
            }

        }

    </style>

</head>


<body>


    <!-- ================================
         FEEDBACK FORM
    ================================= -->

    <section class="feedback_section">

        <div class="heading">

            <h2 class="mb-4">
                Feedback Form
            </h2>

        </div>


        <div class="container">

            <div class="row justify-content-center">

                <div class="col-lg-6 col-md-8 col-sm-10 col-12">

                    <div class="feedback-form">

                        <form class="needs-validation"
                              id="feedbackForm"
                              novalidate>


                            <!-- Name -->

                            <div class="mb-3">

                                <label for="name"
                                       class="form-label">
                                    Name *
                                </label>

                                <input type="text"
                                       class="form-control"
                                       id="name"
                                       placeholder="Enter your name"
                                       required>

                                <div class="invalid-feedback">
                                    Please enter your name (min 2 characters).
                                </div>

                            </div>


                            <!-- Email -->

                            <div class="mb-3">

                                <label for="email"
                                       class="form-label">
                                    Email *
                                </label>

                                <input type="email"
                                       class="form-control"
                                       id="email"
                                       placeholder="Enter your email"
                                       required>

                                <div class="invalid-feedback">
                                    Please enter a valid email.
                                </div>

                            </div>


                            <!-- Feedback -->

                            <div class="mb-3">

                                <label for="feedback"
                                       class="form-label">
                                    Feedback *
                                </label>

                                <textarea class="form-control"
                                          id="feedback"
                                          rows="4"
                                          placeholder="Your feedback"
                                          required></textarea>

                                <div class="invalid-feedback">
                                    Please enter at least 10 characters of feedback.
                                </div>

                            </div>


                            <!-- Rating -->

                            <div class="mb-3">

                                <label class="form-label">
                                    Rating *
                                </label>

                                <select class="form-select"
                                        id="rating"
                                        required>

                                    <option value=""
                                            selected
                                            disabled>
                                        Choose...
                                    </option>

                                    <option value="1">
                                        1 - Poor
                                    </option>

                                    <option value="2">
                                        2 - Fair
                                    </option>

                                    <option value="3">
                                        3 - Good
                                    </option>

                                    <option value="4">
                                        4 - Very Good
                                    </option>

                                    <option value="5">
                                        5 - Excellent
                                    </option>

                                </select>

                                <div class="invalid-feedback">
                                    Please select a rating.
                                </div>

                            </div>


                            <!-- Submit -->

                            <button class="btn btn-primary w-100"
                                    type="submit">
                                Submit Feedback
                            </button>

                        </form>


                        <div id="successMessage"
                             class="mt-3 text-center">
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <br>


    <!-- ================================
         THANK YOU POPUP
    ================================= -->

    <div class="thank-you-popup"
         id="thankYouPopup">

        <div class="thank-you-box">

            <h3>
                Thank you for your feedback!
            </h3>

       

        </div>

    </div>


    <!-- ================================
         JAVASCRIPT
    ================================= -->

    <script>

        (function () {

            'use strict';

            const form =
                document.getElementById('feedbackForm');

            const popup =
                document.getElementById('thankYouPopup');

            const closePopup =
                document.getElementById('closePopup');


            /* SUBMIT FORM */

            form.addEventListener('submit', function (event) {

                event.preventDefault();


                /* CHECK VALIDATION */

                if (!form.checkValidity()) {

                    event.stopPropagation();

                    form.classList.add('was-validated');

                    return;

                }


                form.classList.add('was-validated');


                /* SHOW THANK YOU POPUP */

                popup.classList.add('show');


                /* RESET FORM */

                form.reset();

                form.classList.remove('was-validated');

            });


            /* CLOSE POPUP */

            closePopup.addEventListener('click', function () {

                popup.classList.remove('show');

            });


            /* CLOSE WHEN CLICKING OUTSIDE */

            popup.addEventListener('click', function (event) {

                if (event.target === popup) {

                    popup.classList.remove('show');

                }

            });

        })();

    </script>


    <!-- Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>




        <?php include __DIR__ . '/footer.php'; ?>



</body>
</html>



