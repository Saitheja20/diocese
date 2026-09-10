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
            background: #f8f9fa;
            font-family: "Poppins", sans-serif;
            color: #172033;
        }

        .sec-pd {
            padding: 55px 0 65px;
            width: 100%;
            overflow: hidden;
        }

        .container {
            width: 100%;
            max-width: 1320px;
            padding-left: 24px;
            padding-right: 24px;
        }

        /* Heading */
        .heading {
            text-align: center;
            margin-bottom: 55px;
        }

        .heading h4 {
            margin: 0;
            font-family: "Poppins", sans-serif;
            font-size: 40px;
            font-weight: 700;
            line-height: 1.25;
            color: #d35400;
        }

        .heading h4::after {
            content: "";
            display: block;
            width: 100px;
            height: 5px;
            margin: 15px auto 0;
            border-radius: 10px;
            background: linear-gradient(90deg, #e85d2a, #f39c12);
        }

        /* Top section */
        .top-row {
            margin-bottom: 30px;
        }

        .subheading_necrology {
            height: 100%;
            font-size: 1rem;
            color: #475569;
        }

        .subheading_necrology strong {
            color: #26364d;
            font-weight: 700;
        }

        /* Search */
        .search-wrapper {
            width: 100%;
        }

        .search-group {
            height: 62px;
            border-radius: 35px;
            overflow: hidden;
            background: #fffaf5;
            box-shadow: 0 5px 18px rgba(211, 84, 0, 0.12);
        }

        .search-group .form-control {
            height: 62px;
            border: none;
            background: #fffaf5;
            padding: 0 25px;
            font-size: 1rem;
            color: #26364d;
            box-shadow: none;
        }

        .search-group .form-control:focus {
            background: #fffaf5;
            box-shadow: none;
        }

        .search-group .form-control::placeholder {
            color: #d57b43;
            opacity: 1;
        }

        .clear-btn {
            width: 70px;
            height: 62px;
            border: none !important;
            background: #ff7b12 !important;
            color: #fff !important;
            font-size: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: none !important;
        }

        .clear-btn:hover {
            background: #e86d08 !important;
            color: #fff !important;
        }

        /* Table card */
        .table-card {
            border: none;
            border-radius: 0;
            overflow: hidden;
            background: #fff;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.10);
        }

        /* Horizontal slider */
        .table-slider-viewport {
            width: 100%;
            overflow: hidden;
        }

        .table-slider {
            display: flex;
            width: 100%;
            transition: transform 0.55s cubic-bezier(0.65, 0, 0.35, 1);
            will-change: transform;
        }

        .table-page {
            flex: 0 0 100%;
            width: 100%;
            min-width: 100%;
        }

        .table-responsive {
            overflow-x: auto;
            overflow-y: hidden;
            width: 100%;
        }

        .clergy-table {
            width: 100%;
            min-width: 760px;
            margin: 0;
            border-collapse: collapse;
        }

        .clergy-table thead th {
            background: #ff7b12;
            color: #fff;
            border: none;
            padding: 22px 25px;
            font-size: 1rem;
            font-weight: 600;
            white-space: nowrap;
            vertical-align: middle;
        }

        .clergy-table tbody td {
            padding: 21px 25px;
            font-size: 1rem;
            color: #172033;
            border-bottom: 1px solid #dee2e6;
            vertical-align: middle;
            white-space: nowrap;
        }

        .clergy-table tbody tr:nth-child(odd) td {
            background: #f1f1f1;
        }

        .clergy-table tbody tr:nth-child(even) td {
            background: #ffffff;
        }

        .clergy-table tbody tr:hover td {
            background: #fff4e9;
        }

        .clergy-table tbody tr:last-child td {
            border-bottom: none;
        }

        .clergy-table th:first-child,
        .clergy-table td:first-child {
            width: 12%;
        }

        .clergy-table th:nth-child(2),
        .clergy-table td:nth-child(2) {
            width: 40%;
        }

        .clergy-table th:nth-child(3),
        .clergy-table td:nth-child(3) {
            width: 24%;
        }

        .clergy-table th:nth-child(4),
        .clergy-table td:nth-child(4) {
            width: 24%;
        }

        /* Pagination */
        .pagination-wrapper {
            margin-top: 45px;
            width: 100%;
        }

        .pagination-scroll {
            width: 100%;
            overflow-x: auto;
            overflow-y: hidden;
            padding: 2px 5px 12px;
            scrollbar-width: none;
        }

        .pagination-scroll::-webkit-scrollbar {
            display: none;
        }

        .pagination {
            display: flex;
            flex-wrap: nowrap;
            justify-content: center;
            align-items: center;
            gap: 4px;
            margin: 0;
            min-width: max-content;
        }

        .page-item {
            flex: 0 0 auto;
        }

        .page-link {
            width: 54px;
            height: 54px;
            padding: 0;
            border-radius: 10px !important;
            border: 1px solid #ff9a4d;
            background: #fff;
            color: #f36f10;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1rem;
            font-weight: 500;
            box-shadow: none;
            transition: all 0.25s ease;
        }

        .page-link:hover {
            background: #fff3e8;
            color: #e85d00;
            border-color: #ff7b12;
        }

        .page-item.active .page-link {
            background: #ff7b12;
            border-color: #ff7b12;
            color: #fff;
            box-shadow: 0 6px 15px rgba(255, 123, 18, 0.28);
        }

        .page-item.disabled .page-link {
            background: #f8f9fa;
            border-color: #dee2e6;
            color: #6c757d;
            opacity: 0.75;
        }

        .page-arrow .page-link {
            font-size: 22px;
        }

        /* No result */
        .no-results {
            text-align: center;
            padding: 40px 20px !important;
            font-size: 1rem !important;
            color: #777 !important;
            background: #fff !important;
        }

        /* Large screens */
        @media (min-width: 1400px) {
            .container {
                max-width: 1320px;
            }
        }

        /* Tablet */
        @media (max-width: 991.98px) {
            .sec-pd {
                padding: 45px 0 55px;
            }

            .heading {
                margin-bottom: 40px;
            }

            .heading h4 {
                font-size: 40px;
            }

            .top-row {
                margin-bottom: 25px;
            }

            .subheading_necrology {
                margin-bottom: 20px;
            }

            .search-group,
            .search-group .form-control,
            .clear-btn {
                height: 58px;
            }

            .clergy-table {
                min-width: 720px;
            }
        }

        /* Mobile */
        @media (max-width: 767.98px) {
            .sec-pd {
                padding: 35px 0 45px;
            }

            .container {
                padding-left: 16px;
                padding-right: 16px;
            }

            .heading {
                margin-bottom: 35px;
            }

            .heading h4 {
                font-size: 32px;
                line-height: 1.3;
            }

            .heading h4::after {
                width: 80px;
                height: 4px;
                margin-top: 12px;
            }

            .subheading_necrology {
                font-size: 1rem;
                justify-content: center;
                margin-bottom: 18px;
            }

            .search-group {
                height: 55px;
            }

            .search-group .form-control {
                height: 55px;
                padding: 0 18px;
                font-size: 1rem;
            }

            .clear-btn {
                width: 58px;
                height: 55px;
            }

            .clergy-table {
                min-width: 700px;
            }

            .clergy-table thead th,
            .clergy-table tbody td {
                padding: 17px 18px;
                font-size: 1rem;
            }

            .pagination-wrapper {
                margin-top: 35px;
            }

            .pagination {
                justify-content: flex-start;
            }

            .page-link {
                width: 48px;
                height: 48px;
            }
        }

        /* Small mobile */
        @media (max-width: 575.98px) {
            .sec-pd {
                padding: 30px 0 40px;
            }

            .container {
                padding-left: 12px;
                padding-right: 12px;
            }

            .heading h4 {
                font-size: 28px;
            }

            .heading h4::after {
                width: 70px;
            }

            .clergy-table {
                min-width: 680px;
            }

            .clergy-table thead th,
            .clergy-table tbody td {
                padding: 15px 16px;
                font-size: 1rem;
            }

            .page-link {
                width: 45px;
                height: 45px;
            }
        }
    </style>
</head>

<body>

<section class="sec-pd">

    <div class="container">

        <!-- Heading -->
        <div class="heading">
            <h4>Deceased Clergy Directory</h4>
        </div>

        <!-- Search + Count -->
        <div class="row align-items-center top-row g-4">

            <div class="col-12 col-md-6">
                <div class="d-flex align-items-center subheading_necrology">
                    <span>
                        Total Priests:
                        <strong id="totalPriests">97</strong>
                    </span>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="search-wrapper">
                    <div class="input-group search-group">
                        <input
                            type="text"
                            id="searchInput"
                            class="form-control"
                            placeholder="Search deceased clergy..."
                            autocomplete="off"
                        >

                        <button
                            class="btn clear-btn"
                            type="button"
                            id="clearSearch"
                            aria-label="Clear search"
                        >
                            <i class="bi bi-x-circle"></i>
                        </button>
                    </div>
                </div>
            </div>

        </div>

        <!-- Table -->
        <div class="card table-card">

            <div class="card-body p-0">

                <div class="table-slider-viewport">

                    <div class="table-slider" id="tableSlider">

                        <!-- Pages will be generated here -->

                    </div>

                </div>

            </div>

        </div>

        <!-- Pagination -->
        <div class="pagination-wrapper">

            <div class="pagination-scroll">

                <nav aria-label="Deceased clergy pagination">

                    <ul class="pagination" id="pagination">

                        <!-- Pagination generated by JavaScript -->

                    </ul>

                </nav>

            </div>

        </div>

    </div>

</section>


<script>

    /* =========================================================
       DECEASED CLERGY DATA
    ========================================================= */

    const deceasedClergy = [

        { id: 1, name: "Fr. Kariyil Varghese", dob: "11/10/1931", ordination: "10/08/1958" },
        { id: 2, name: "Fr. Yeruva Sebastian", dob: "11/08/1938", ordination: "12/04/1966" },
        { id: 3, name: "Fr. Idara Abraham", dob: "04/02/1940", ordination: "21/12/1967" },
        { id: 4, name: "Fr. Basani Mathias", dob: "13/03/1943", ordination: "18/12/1970" },
        { id: 5, name: "Fr. Arlagadda Prakash", dob: "14/02/1941", ordination: "29/12/1970" },
        { id: 6, name: "Fr. Yeruva Chinnappa", dob: "15/02/1949", ordination: "02/03/1977" },
        { id: 7, name: "Fr. Basani Prakash", dob: "20/02/1957", ordination: "03/04/1983" },
        { id: 8, name: "Fr. KommareedyVijaya kumar", dob: "06/10/1955", ordination: "08/04/1985" },
        { id: 9, name: "Fr. Pudota Prakash", dob: "09/07/1958", ordination: "12/03/1986" },
        { id: 10, name: "Fr. Singareddy Balashowry", dob: "14/02/1959", ordination: "12/03/1986" },

        { id: 11, name: "Fr. Pudota Chinnaiah", dob: "08/06/1959", ordination: "12/03/1986" },
        { id: 12, name: "Fr. Dodda Raja", dob: "26/07/1959", ordination: "26/03/1987" },
        { id: 13, name: "Fr. Thanugundla Jerome", dob: "10/07/1961", ordination: "24/04/1988" },
        { id: 14, name: "Fr. Annapareddy Jaya Raja", dob: "08/01/1962", ordination: "27/04/1988" },
        { id: 15, name: "Fr. Yeruva Inna", dob: "28/10/1961", ordination: "24/04/1989" },
        { id: 16, name: "Fr. Rachumalla Inna", dob: "10/05/1964", ordination: "12/03/1990" },
        { id: 17, name: "Fr. Basani Chinnappa", dob: "02/12/1962", ordination: "01/05/1990" },
        { id: 18, name: "Fr. Dasari Joseph", dob: "11/06/1963", ordination: "03/05/1990" },
        { id: 19, name: "Fr. Reddimasu Thomas", dob: "29/10/1961", ordination: "04/05/1990" },
        { id: 20, name: "Fr. Pentareddy Raja", dob: "29/10/1961", ordination: "04/05/1990" },

        { id: 21, name: "Fr. Gali Rayappa", dob: "6/05/1961", ordination: "05/04/1991" },
        { id: 22, name: "Fr. Kasu Showreddy", dob: "05/05/1963", ordination: "02/04/1992" },
        { id: 23, name: "Fr. Duggimpudi Vijayapaul", dob: "08/01/1965", ordination: "02/04/1992" },
        { id: 24, name: "Fr. Thirumalareddy Rayappa", dob: "29/11/1964", ordination: "06/04/1992" },
        { id: 25, name: "Fr. Allam Inna", dob: "15/08/1965", ordination: "16/04/1993" },
        { id: 26, name: "Fr. Thirumalareddy Augustine", dob: "02/11/1963", ordination: "13/04/1993" },
        { id: 27, name: "Fr. Ambati Bala", dob: "21/08/1958", ordination: "20/04/1993" },
        { id: 28, name: "Fr. Madanu Jaya", dob: "07/06/1968", ordination: "25/04/1994" },
        { id: 29, name: "Fr. Golamari BalaMartin", dob: "08/02/1967", ordination: "27/04/1994" },
        { id: 30, name: "Fr. Allam Vincent", dob: "17/07/1964", ordination: "29/04/1994" },

        { id: 31, name: "Fr. Mekala Anand", dob: "02/03/1964", ordination: "02/05/1994" },
        { id: 32, name: "Fr. Pentareddy Johnpaul", dob: "14/04/1967", ordination: "09/05/1994" },
        { id: 33, name: "Fr. Yeruva Bala", dob: "19/12/1967", ordination: "12/05/1994" },
        { id: 34, name: "Fr. Golamari Sudhakar", dob: "10/07/1966", ordination: "16/05/1994" },
        { id: 35, name: "Fr. Gali Balaswamy", dob: "19/12/1965", ordination: "20/03/1995" },
        { id: 36, name: "Fr. Pentareddy BalthaRaj", dob: "25/11/1965", ordination: "22/03/1995" },
        { id: 37, name: "Fr. Yeruva Papi Reddy", dob: "04/05/1968", ordination: "03/04/1995" },
        { id: 38, name: "Fr. Golamari Rayappa", dob: "25/05/1967", ordination: "04/04/1995" },
        { id: 39, name: "Fr. Thirumalareddy Joji", dob: "05/01/1970", ordination: "18/04/1996" },
        { id: 40, name: "Fr. Gade Prakash", dob: "14/05/1969", ordination: "07/04/1997" },

        { id: 41, name: "Fr. Thumma Yaga Reddy", dob: "10/06/1969", ordination: "13/04/1998" },
        { id: 42, name: "Fr. Duggimpudi Prathap", dob: "15/08/1971", ordination: "03/06/1999" },
        { id: 43, name: "Fr. Singareddy Inna Reddy", dob: "14/07/1972", ordination: "12/04/1999" },
        { id: 44, name: "Fr. Singareddy Shobhan Reddy", dob: "03/08/1970", ordination: "06/03/2000" },
        { id: 45, name: "Fr. Devarapu Sudhakar", dob: "26/02/1973", ordination: "06/03/2000" },
        { id: 46, name: "Fr. Salibindla Arogya Reddy", dob: "09/04/1972", ordination: "06/03/2000" },
        { id: 47, name: "Fr. Vatti Albeen Reddy", dob: "29/09/1971", ordination: "06/03/2000" },
        { id: 48, name: "Fr. Narisetti Balaswamy", dob: "29/09/1969", ordination: "25/02/2002" },
        { id: 49, name: "Fr. Yetukuri Thomas Kiran", dob: "21/11/1973", ordination: "25/04/2002" },
        { id: 50, name: "Fr. Pentareddy Kirankumar", dob: "08/10/1977", ordination: "30/04/2003" },

        { id: 51, name: "Fr. Thirumalareddy Tharunkumar", dob: "10/04/1975", ordination: "28/04/2003" },
        { id: 52, name: "Fr. Gopu Suresh", dob: "08/01/1977", ordination: "18/04/2005" },
        { id: 53, name: "Fr. Thatikonda Joseph", dob: "10/11/1974", ordination: "18/04/2005" },
        { id: 54, name: "Fr. Thanugundla Vijaya Manohar", dob: "31/08/1972", ordination: "18/04/2005" },
        { id: 55, name: "Fr. Thumma Kiran", dob: "16/09/1977", ordination: "18/04/2006" },
        { id: 56, name: "Fr. Chatta Ravi Kumar", dob: "19/04/2006", ordination: "-" },
        { id: 57, name: "Fr. Macherla Naveenkumar", dob: "05/06/1979", ordination: "20/04/2006" },
        { id: 58, name: "Fr. Gopu Anand", dob: "03/01/1978", ordination: "21/04/2006" },
        { id: 59, name: "Fr. Duggimpudi Prashanth", dob: "16/09/1977", ordination: "11/04/2007" },
        { id: 60, name: "Fr. Pudota Dasaiah", dob: "15/08/1979", ordination: "09/07/2007" },

        { id: 61, name: "Fr. Thirumalareddy Pradeep", dob: "14/06/1977", ordination: "10/04/2007" },
        { id: 62, name: "Fr. Basani Kishore", dob: "16/07/1979", ordination: "21/04/2008" },
        { id: 63, name: "Fr. Gangarapu Naveen", dob: "05/06/1976", ordination: "16/04/2008" },
        { id: 64, name: "Fr. Gopu Thomas", dob: "30/12/1978", ordination: "14/04/2008" },
        { id: 65, name: "Fr. Marapalli Praveen", dob: "24/04/1980", ordination: "15/04/2008" },
        { id: 66, name: "Fr. Thirumalareddy Anthony", dob: "20/03/1980", ordination: "17/04/2008" },
        { id: 67, name: "Fr. Nagothu Mariajoseph", dob: "08/02/1981", ordination: "20/04/2009" },
        { id: 68, name: "Fr. Nagothu Vinod kumar", dob: "10/04/1979", ordination: "18/04/2009" },
        { id: 69, name: "Fr. Thumma Sunil", dob: "15/08/1977", ordination: "13/04/2009" },
        { id: 70, name: "Fr. Macherla Raju", dob: "16/08/1981", ordination: "12/04/2010" },

        { id: 71, name: "Fr. Polumari Suresh", dob: "25/06/1981", ordination: "12/04/2010" },
        { id: 72, name: "Fr. Gopu Kamal Kumar", dob: "02/09/1982", ordination: "02/09/1982" },
        { id: 73, name: "Fr. Polumari Anil", dob: "01/01/1983", ordination: "25/04/2011" },
        { id: 74, name: "Fr. Kommareddy Joseph", dob: "30/01/1981", ordination: "26/04/2011" },
        { id: 75, name: "Fr. Bellamkonda Joseph Praveen", dob: "25/10/1983", ordination: "26/04/2011" },
        { id: 76, name: "Fr. Gangarpu Suresh", dob: "02/05/1984", ordination: "19/04/2012" },
        { id: 77, name: "Fr. Kasu Marreddy", dob: "13/11/1982", ordination: "19/04/2012" },
        { id: 78, name: "Fr. Namindla Surendar", dob: "05/07/1980", ordination: "19.04.2012" },
        { id: 79, name: "Fr. Singaredy Prabhakar", dob: "10/10/1984", ordination: "19/04/2012" },
        { id: 80, name: "Fr. Thumma Ashok", dob: "12/04/1985", ordination: "19/04/2012" },

        { id: 81, name: "Fr. Yerra Kiran Kuamr", dob: "11/09/1982", ordination: "19/04/2012" },
        { id: 82, name: "Fr. Eedara Vijay Kumar", dob: "25/08/1985", ordination: "09/04/2013" },
        { id: 83, name: "Fr. Allam Sravan Kumar", dob: "22/04/1985", ordination: "10/04/2013" },
        { id: 84, name: "Fr. Gade Chinnappa", dob: "12/12/1985", ordination: "07/05/2014" },
        { id: 85, name: "Fr. G. Prashanth", dob: "08/10/1987", ordination: "05/05/2014" },
        { id: 86, name: "Fr. Yeruva. Sathish", dob: "26/08/1984", ordination: "08/05/2014" },
        { id: 87, name: "Fr. Thumma Santhosh", dob: "19/08/1987", ordination: "09/04/2015" },
        { id: 88, name: "Fr. Golamari Joseph", dob: "27/03/1987", ordination: "13/04/2015" },
        { id: 89, name: "Fr. Narisetti Sampath", dob: "09/05/1987", ordination: "14/04/2015" },
        { id: 90, name: "Fr. Golamari Ranjith", dob: "20/04/1987", ordination: "30/03/2016" },

        { id: 91, name: "Fr. Salibindla Mahipaul", dob: "09/08/1988", ordination: "31/03/2016" },
        { id: 92, name: "Fr. Gopu Thomas", dob: "10/10/1981", ordination: "26/04/2017" },
        { id: 93, name: "Fr. Vatti Simon", dob: "12/11/1988", ordination: "27/04/2018" },
        { id: 94, name: "Fr. Thumma Sharan Teja", dob: "29/04/1992", ordination: "22/04/2019" },
        { id: 95, name: "Fr. Gopu Prakash Pradeep", dob: "25/02/1986", ordination: "05/06/2020" },
        { id: 96, name: "Fr. Mettu Sravan", dob: "21/08/1991", ordination: "16/08/2021" },
        { id: 97, name: "Fr. Gangarapu Anukiran", dob: "25/01/1995", ordination: "14/09/2021" }

    ];


    /* =========================================================
       VARIABLES
    ========================================================= */

    let filteredClergy = [...deceasedClergy];

    const itemsPerPage = 10;

    let currentPage = 1;


    /* =========================================================
       DOM ELEMENTS
    ========================================================= */

    const tableSlider = document.getElementById("tableSlider");
    const pagination = document.getElementById("pagination");
    const searchInput = document.getElementById("searchInput");
    const clearSearch = document.getElementById("clearSearch");
    const totalPriests = document.getElementById("totalPriests");


    /* =========================================================
       INITIAL LOAD
    ========================================================= */

    document.addEventListener("DOMContentLoaded", function () {

        renderAllPages();

        renderPagination();

        updateSlider();

    });


    /* =========================================================
       CREATE ALL TABLE PAGES
    ========================================================= */

    function renderAllPages() {

        tableSlider.innerHTML = "";

        const totalPages = Math.ceil(filteredClergy.length / itemsPerPage);


        if (filteredClergy.length === 0) {

            const emptyPage = document.createElement("div");

            emptyPage.className = "table-page";

            emptyPage.innerHTML = `
                <div class="table-responsive">
                    <table class="table clergy-table mb-0">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Name</th>
                                <th>Date of Birth</th>
                                <th>Date of Ordination</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td colspan="4" class="no-results">
                                    No deceased clergy found
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            `;

            tableSlider.appendChild(emptyPage);

            return;
        }


        for (let page = 1; page <= totalPages; page++) {

            const pageDiv = document.createElement("div");

            pageDiv.className = "table-page";


            const startIndex = (page - 1) * itemsPerPage;

            const endIndex = startIndex + itemsPerPage;

            const clergyToShow = filteredClergy.slice(startIndex, endIndex);


            let rows = "";


            clergyToShow.forEach(function (clergy) {

                rows += `
                    <tr>
                        <td>${clergy.id}</td>
                        <td>${escapeHTML(clergy.name)}</td>
                        <td>${clergy.dob}</td>
                        <td>${clergy.ordination || "Not specified"}</td>
                    </tr>
                `;

            });


            pageDiv.innerHTML = `
                <div class="table-responsive">

                    <table class="table clergy-table table-striped table-hover mb-0">

                        <thead>

                            <tr>
                                <th>S.No</th>
                                <th>Name</th>
                                <th>Date of Birth</th>
                                <th>Date of Ordination</th>
                            </tr>

                        </thead>

                        <tbody>
                            ${rows}
                        </tbody>

                    </table>

                </div>
            `;


            tableSlider.appendChild(pageDiv);

        }

    }


    /* =========================================================
       PAGINATION
    ========================================================= */

    function renderPagination() {

        pagination.innerHTML = "";


        const totalPages = Math.ceil(filteredClergy.length / itemsPerPage);


        if (totalPages <= 1) {

            return;

        }


        /* Previous */

        const previous = document.createElement("li");

        previous.className =
            "page-item page-arrow " +
            (currentPage === 1 ? "disabled" : "");


        previous.innerHTML = `
            <button class="page-link" type="button" aria-label="Previous">
                &laquo;
            </button>
        `;


        previous.querySelector("button").addEventListener("click", function () {

            if (currentPage > 1) {

                goToPage(currentPage - 1);

            }

        });


        pagination.appendChild(previous);


        /* Page numbers */

        for (let page = 1; page <= totalPages; page++) {

            const pageItem = document.createElement("li");

            pageItem.className =
                "page-item " +
                (page === currentPage ? "active" : "");


            const button = document.createElement("button");

            button.type = "button";

            button.className = "page-link";

            button.textContent = page;


            button.addEventListener("click", function () {

                goToPage(page);

            });


            pageItem.appendChild(button);

            pagination.appendChild(pageItem);

        }


        /* Next */

        const next = document.createElement("li");

        next.className =
            "page-item page-arrow " +
            (currentPage === totalPages ? "disabled" : "");


        next.innerHTML = `
            <button class="page-link" type="button" aria-label="Next">
                &raquo;
            </button>
        `;


        next.querySelector("button").addEventListener("click", function () {

            if (currentPage < totalPages) {

                goToPage(currentPage + 1);

            }

        });


        pagination.appendChild(next);

    }


    /* =========================================================
       GO TO PAGE
       TABLE MOVES SIDEWAYS LIKE A SLIDE
    ========================================================= */

    function goToPage(page) {

        const totalPages = Math.ceil(filteredClergy.length / itemsPerPage);


        if (page < 1 || page > totalPages) {

            return;

        }


        currentPage = page;


        updateSlider();

        renderPagination();


        /* Keep active button visible */

        setTimeout(function () {

            const activeButton =
                pagination.querySelector(".page-item.active");


            if (activeButton) {

                activeButton.scrollIntoView({
                    behavior: "smooth",
                    block: "nearest",
                    inline: "center"
                });

            }

        }, 100);

    }


    /* =========================================================
       SLIDE TABLE HORIZONTALLY
    ========================================================= */

    function updateSlider() {

        const translateValue =
            (currentPage - 1) * 100;

        tableSlider.style.transform =
            `translateX(-${translateValue}%)`;

    }


    /* =========================================================
       SEARCH
    ========================================================= */

    searchInput.addEventListener("input", function () {

        const searchValue =
            searchInput.value.trim().toLowerCase();


        if (searchValue === "") {

            filteredClergy = [...deceasedClergy];

        } else {

            filteredClergy =
                deceasedClergy.filter(function (clergy) {

                    return (
                        clergy.name.toLowerCase().includes(searchValue) ||
                        clergy.dob.toLowerCase().includes(searchValue) ||
                        clergy.ordination.toLowerCase().includes(searchValue) ||
                        String(clergy.id).includes(searchValue)
                    );

                });

        }


        currentPage = 1;


        totalPriests.textContent =
            filteredClergy.length;


        renderAllPages();

        renderPagination();

        updateSlider();

    });


    /* =========================================================
       CLEAR SEARCH
    ========================================================= */

    clearSearch.addEventListener("click", function () {

        searchInput.value = "";

        filteredClergy = [...deceasedClergy];

        currentPage = 1;

        totalPriests.textContent =
            deceasedClergy.length;

        renderAllPages();

        renderPagination();

        updateSlider();

        searchInput.focus();

    });


    /* =========================================================
       ESCAPE HTML
    ========================================================= */

    function escapeHTML(value) {

        return String(value)
            .replace(/&/g, "&amp;")
            .replace(/</g, "&lt;")
            .replace(/>/g, "&gt;")
            .replace(/"/g, "&quot;")
            .replace(/'/g, "&#039;");

    }

</script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

    <?php include __DIR__ . '/footer.php'; ?>