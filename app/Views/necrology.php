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
            width: 100%;
            padding: 55px 0 65px;
            overflow: hidden;
        }

        .container {
            max-width: 1320px;
            padding-left: 24px;
            padding-right: 24px;
        }

        .heading h4 {
            margin: 0 0 35px;
            font-family: "Poppins", sans-serif;
            font-size: 40px;
            font-weight: 700;
            color: #d35400;
            text-align: center;
        }

        .subheading_necrology {
            font-size: 1rem;
            color: #344054 !important;
        }

        .subheading_necrology strong {
            font-weight: 600;
        }

        .input-group {
            height: 62px;
            border-radius: 35px;
            overflow: hidden;
            background: #fff8f1;
            box-shadow: 0 5px 15px rgba(211, 84, 0, 0.12);
        }

        .input-group .form-control {
            height: 62px;
            border: none;
            padding: 0 25px;
            font-size: 1rem;
            color: #344054;
            background: #fff8f1;
            box-shadow: none;
        }

        .input-group .form-control:focus {
            border: none;
            box-shadow: none;
        }

        .input-group .form-control::placeholder {
            color: #d27a3b;
            opacity: 1;
        }

        #clearSearch {
            width: 70px;
            border: none;
            background: #ff7b12;
            color: #fff;
            font-size: 20px;
            border-radius: 0;
        }

        #clearSearch:hover {
            background: #ff7b12;
            color: #fff;
        }

        .card {
            border: none;
            border-radius: 0;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.12);
        }

        .table-responsive {
            width: 100%;
            overflow-x: auto;
        }

        table {
            width: 100%;
            min-width: 700px;
            margin: 0 !important;
        }

        thead th {
            padding: 20px 24px !important;
            background: #ff7b12 !important;
            color: #fff !important;
            border: none !important;
            font-size: 1rem;
            font-weight: 600;
            white-space: nowrap;
        }

        tbody td {
            padding: 20px 24px !important;
            font-size: 1rem;
            vertical-align: middle;
            border: none !important;
            white-space: nowrap;
        }

        tbody tr:nth-child(odd) td {
            background: #f3f3f3;
        }

        tbody tr:nth-child(even) td {
            background: #ffffff;
        }

        .pagination {
            margin: 0;
            gap: 3px;
        }

        .pagination .page-item {
            margin: 0;
        }

        .pagination .page-link {
            width: 54px;
            height: 54px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #ffb66f;
            border-radius: 9px !important;
            background: #fff;
            color: #ff7b12;
            font-size: 1rem;
            box-shadow: none;
        }

        .pagination .page-link:hover {
            background: #fff;
            color: #ff7b12;
            border-color: #ff7b12;
        }

        .pagination .page-item.active .page-link {
            background: #ff7b12;
            border-color: #ff7b12;
            color: #fff;
            box-shadow: 0 5px 12px rgba(255, 123, 18, 0.25);
        }

        .pagination .page-item.disabled .page-link {
            color: #789;
            background: #f8f9fa;
            border-color: #d8dee5;
        }

        @media (max-width: 991.98px) {
            .sec-pd {
                padding: 45px 0 55px;
            }

            .heading h4 {
                font-size: 36px;
            }

            .subheading_necrology {
                margin-bottom: 15px;
            }

            .input-group {
                height: 58px;
            }

            .input-group .form-control {
                height: 58px;
            }

            thead th,
            tbody td {
                padding: 18px 20px !important;
            }
        }

        @media (max-width: 767.98px) {
            .sec-pd {
                padding: 40px 0 50px;
            }

            .container {
                padding-left: 15px;
                padding-right: 15px;
            }

            .heading h4 {
                font-size: 32px;
                margin-bottom: 30px;
            }

            .row.mb-4 {
                margin-bottom: 25px !important;
            }

            .subheading_necrology {
                justify-content: center;
                margin-bottom: 15px;
                font-size: 1rem;
            }

            .input-group {
                height: 56px;
            }

            .input-group .form-control {
                height: 56px;
                padding: 0 20px;
                font-size: 0.95rem;
            }

            #clearSearch {
                width: 60px;
            }

            table {
                min-width: 650px;
            }

            thead th,
            tbody td {
                padding: 16px 18px !important;
                font-size: 0.95rem;
            }

            .pagination {
                gap: 2px;
                flex-wrap: wrap;
            }

            .pagination .page-link {
                width: 45px;
                height: 45px;
                font-size: 0.95rem;
            }
        }

        @media (max-width: 575.98px) {
            .sec-pd {
                padding: 35px 0 45px;
            }

            .heading h4 {
                font-size: 28px;
            }

            .container {
                padding-left: 12px;
                padding-right: 12px;
            }

            .subheading_necrology {
                justify-content: flex-start;
            }

            .input-group .form-control {
                padding: 0 15px;
            }

            table {
                min-width: 600px;
            }

            .pagination {
                gap: 2px;
            }

            .pagination .page-link {
                width: 40px;
                height: 40px;
                font-size: 0.9rem;
            }
        }
    </style>
</head>

<body>

<section class="sec-pd">
    <div class="container">

        <div class="heading">
            <h4>R.I.P. Deceased Clergy</h4>
        </div>

        <div class="row mb-4 align-items-center">
            <div class="col-md-6">
                <div class="d-flex align-items-center h-100 subheading_necrology">
                    <span>
                        Total Deceased Clergy:
                        <strong>51</strong>
                    </span>
                </div>
            </div>

            <div class="col-md-6">
                <div class="input-group">
                    <input
                        type="text"
                        id="searchInput"
                        class="form-control"
                        placeholder="Search deceased clergy..."
                    >

                    <button
                        class="btn"
                        type="button"
                        id="clearSearch"
                    >
                        <i class="bi bi-x-circle"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body p-0">

                        <div class="table-responsive">
                            <table class="table table-striped table-hover mb-0">

                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Name</th>
                                        <th>Died</th>
                                        <th>Buried at/in</th>
                                    </tr>
                                </thead>

                                <tbody id="clergyTableBody"></tbody>

                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-12">

                <nav aria-label="Deceased clergy pagination">
                    <ul
                        class="pagination justify-content-center"
                        id="pagination"
                    ></ul>
                </nav>

            </div>
        </div>

    </div>
</section>

<script>
    const deceasedClergy = [
        { id: 1, name: "Most Rev. A. Beretta, PIME", died: "1998", buried: "Fatimanagar" },
        { id: 2, name: "Most Rev. D. Vismara, PIME", died: "1953", buried: "Secunderabad" },
        { id: 3, name: "Most Rev. T. Balashowry", died: "1974", buried: "Guntur" },
        { id: 4, name: "Rev Fr. H. M. Pezzoni, PIME", died: "1953", buried: "Secunderabad" },
        { id: 5, name: "Rev Fr. C. Longhi, PIME", died: "1954", buried: "Italy" },
        { id: 6, name: "Rev Fr. G. Pazzaglini, PIME", died: "1958", buried: "Fatimanagar" },
        { id: 7, name: "Rev Fr. J. Tinti, PIME", died: "1960", buried: "Narimetta" },
        { id: 8, name: "Rev Fr. A. Tasca, PIME", died: "1963", buried: "Italy" },
        { id: 9, name: "Rev Fr. Bortolato, PIME", died: "1964", buried: "Fatimanagar" },
        { id: 10, name: "Rev Fr. Lanza, PIME", died: "1964", buried: "Fatimanagar" },

        { id: 11, name: "Rev Fr. Berlusconi, PIME", died: "1970", buried: "Wangamatrhy, Nalgonda Dt." },
        { id: 12, name: "Rev Fr. Mazzola, PIME", died: "1972", buried: "Fatimanagar" },
        { id: 13, name: "Rev Fr. Silva, PIME", died: "1973", buried: "Fatimanagar" },
        { id: 14, name: "Rev Fr. Farina, PIME", died: "1975", buried: "Reddipalem" },
        { id: 15, name: "Rev Fr. Semplicetto, PIME", died: "1977", buried: "Italy" },
        { id: 16, name: "Rev Fr. Pasquale Sale, PIME", died: "1977", buried: "Italy" },
        { id: 17, name: "Rev Fr. M. Showraiah ( Guntur)", died: "1979", buried: "Fatimanagar" },
        { id: 18, name: "Fr. Carlo Redice, PIME", died: "1980", buried: "Italy" },
        { id: 19, name: "Rev Fr. Seminati Giovanni, PIME", died: "1981", buried: "Fatimanagar" },
        { id: 20, name: "Fr. Fabian, OCD", died: "1984", buried: "Vijayawada" },

        { id: 21, name: "Fr. R. Musselli, PIME", died: "1993", buried: "Italy" },
        { id: 22, name: "Rev Fr. Kuriakose, SJ", died: "1994", buried: "Loyola Academy, Secibad" },
        { id: 23, name: "Rev Fr. Politi, PIME", died: "1995", buried: "Italy" },
        { id: 24, name: "Rev Fr. V. lourdu Samy, SJ", died: "1995", buried: "Loyola College, Vijayawada" },
        { id: 25, name: "Rev Fr. Anselme Finelli, PIME", died: "1996", buried: "Italy" },
        { id: 26, name: "Rev Fr. John Subramaniam, PIME", died: "1996", buried: "Gunadala, Vijayawada" },
        { id: 27, name: "Rev Fr. Dominic ghezzi", died: "1997", buried: "Fatimanagar" },
        { id: 28, name: "Rev Fr. Lino Dalbalcon, PIME", died: "1997", buried: "Italy" },
        { id: 29, name: "Rev. Fr. E. Maanuel", died: "1998", buried: "Fatimanagar" },
        { id: 30, name: "Rev Fr. Antonello, PIME", died: "2001", buried: "Italy" },

        { id: 31, name: "Rev Fr. Guido Tirinzoni, PIME", died: "2003", buried: "Fatimanagar" },
        { id: 32, name: "Rev Fr. Madanu Yagaiah", died: "2004", buried: "Fatimanagar" },
        { id: 33, name: "Rev Fr. Avito Pottukulam. OFM Cap", died: "2004", buried: "Avutapalli, Vijayawada" },
        { id: 34, name: "Msgr. Katakam Joseph", died: "2005", buried: "Fatimanagar" },
        { id: 35, name: "Rev Fr. Mathew Manakkat, OFM Cap", died: "2007", buried: "Avutapalli, Vijayawada" },
        { id: 36, name: "Rev Fr. Singareddy Elias", died: "2008", buried: "Kerala" },
        { id: 37, name: "Rev Fr. Oswald Prathap, OFM Cap", died: "2008", buried: "Fatimanagar" },
        { id: 38, name: "Fr. Beereddy Prakash", died: "2008", buried: "Fatimanagar" },
        { id: 39, name: "Fr. Augusto Colombo PIME", died: "2009", buried: "Karunapuram" },
        { id: 40, name: "Rev Fr. M. Goa Showraiah", died: "2010", buried: "Fatimanagar" },

        { id: 41, name: "Rev Fr. Goa Showraiah", died: "2010", buried: "Fatimanagar" },
        { id: 42, name: "Rev Fr. Kasu Rayappa", died: "2011", buried: "Fatimanagar" },
        { id: 43, name: "Fr. Luigi Delissandri", died: "2011", buried: "" },
        { id: 44, name: "Fr. Yeruva Marreddy", died: "2013", buried: "Fatimanagar" },
        { id: 45, name: "Fr. Boyapati Leeno", died: "2016", buried: "Fatimanagar" },
        { id: 46, name: "Fr. Pasala Anthony", died: "2016", buried: "Fatimanagar" },
        { id: 47, name: "Fr. Vatti Raja Reddy", died: "2017", buried: "Fatimanagar" },
        { id: 48, name: "Fr. Pothireddy Papi Reddy", died: "2018", buried: "Fatimanagar" },
        { id: 49, name: "Fr. Antonio Grugni PIME", died: "2018", buried: "Fatimanagar" },
        { id: 50, name: "Fr. Boyapati Antony", died: "2019", buried: "Fatimanagar" },

        { id: 51, name: "Fr. M.P Joseph", died: "2020", buried: "Fatimanagar" }
    ];

    const itemsPerPage = 10;

    let currentPage = 1;
    let filteredClergy = [...deceasedClergy];

    const tableBody = document.getElementById("clergyTableBody");
    const pagination = document.getElementById("pagination");
    const searchInput = document.getElementById("searchInput");
    const clearSearch = document.getElementById("clearSearch");

    function renderTable(page) {
        currentPage = page;

        const start = (page - 1) * itemsPerPage;
        const end = start + itemsPerPage;

        const pageData = filteredClergy.slice(start, end);

        tableBody.innerHTML = "";

        pageData.forEach((clergy) => {
            const row = document.createElement("tr");

            row.innerHTML = `
                <td>${clergy.id}</td>
                <td>${clergy.name}</td>
                <td>${clergy.died}</td>
                <td>${clergy.buried}</td>
            `;

            tableBody.appendChild(row);
        });

        renderPagination();
    }

    function renderPagination() {
        const totalPages = Math.ceil(filteredClergy.length / itemsPerPage);

        pagination.innerHTML = "";

        const previous = document.createElement("li");
        previous.className = `page-item ${currentPage === 1 ? "disabled" : ""}`;

        previous.innerHTML = `
            <a class="page-link" href="#" aria-label="Previous">
                &laquo;
            </a>
        `;

        previous.addEventListener("click", function (e) {
            e.preventDefault();

            if (currentPage > 1) {
                renderTable(currentPage - 1);
            }
        });

        pagination.appendChild(previous);

        for (let i = 1; i <= totalPages; i++) {
            const pageItem = document.createElement("li");

            pageItem.className =
                `page-item ${i === currentPage ? "active" : ""}`;

            pageItem.innerHTML = `
                <a class="page-link" href="#">${i}</a>
            `;

            pageItem.addEventListener("click", function (e) {
                e.preventDefault();
                renderTable(i);
            });

            pagination.appendChild(pageItem);
        }

        const next = document.createElement("li");

        next.className =
            `page-item ${currentPage === totalPages ? "disabled" : ""}`;

        next.innerHTML = `
            <a class="page-link" href="#" aria-label="Next">
                &raquo;
            </a>
        `;

        next.addEventListener("click", function (e) {
            e.preventDefault();

            if (currentPage < totalPages) {
                renderTable(currentPage + 1);
            }
        });

        pagination.appendChild(next);
    }

    searchInput.addEventListener("input", function () {
        const searchValue = this.value.toLowerCase().trim();

        filteredClergy = deceasedClergy.filter((clergy) => {
            return (
                clergy.name.toLowerCase().includes(searchValue) ||
                clergy.died.toLowerCase().includes(searchValue) ||
                clergy.buried.toLowerCase().includes(searchValue) ||
                clergy.id.toString().includes(searchValue)
            );
        });

        currentPage = 1;
        renderTable(1);
    });

    clearSearch.addEventListener("click", function () {
        searchInput.value = "";
        filteredClergy = [...deceasedClergy];
        currentPage = 1;
        renderTable(1);
    });

    document.addEventListener("DOMContentLoaded", function () {
        renderTable(1);
    });
</script>

</body>

    <?php include __DIR__ . '/footer.php'; ?>