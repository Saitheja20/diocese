



<section class="sec-pd">
    <div class="container">
        <div class="heading">
            <h4>R.I.P. Deceased Clergy</h4>
            <!-- <p class="memorial-subtitle">Let us continue to pray for our departed spiritual fathers</p> -->
        </div>

        <!-- <p class="prayer-text">
            "Eternal rest grant unto them, O Lord, and let perpetual light shine upon them. May their souls and the souls of all the faithful departed, through the mercy of God, rest in peace. Amen."
        </p> -->

        <div class="row mb-4">
            <div class="col-md-6">
                <div class="d-flex align-items-center h-100">
                    <span class="text-muted">Total Deceased Clergy: <strong>51</strong></span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="input-group">
                    <!-- <span class="input-group-text bg-transparent"><i class="bi bi-search"></i></span> -->
                    <input type="text" id="searchInput" class="form-control" placeholder="Search deceased clergy...">
                    <button class="btn btn-outline-secondary" type="button" id="clearSearch">
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
                                <tbody id="clergyTableBody">
                                    <!-- Data will be populated by JavaScript -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-12">
                <nav aria-label="Deceased clergy pagination">
                    <ul class="pagination justify-content-center" id="pagination">
                        <!-- Pagination will be populated by JavaScript -->
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>

    
    <script>
        // Deceased clergy data
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

        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize table with pagination
            renderTable(1);
            
            // Add event listeners
            document.getElementById('searchInput').addEventListener('input', handleSearch);
            document.getElementById('clearSearch').addEventListener('click', clearSearch);
        });

        // Variables for search functionality
        let filteredClergy = [...deceasedClergy];
        const itemsPerPage = 10;

        // Render table with pagination
        function renderTable(page) {
            const startIndex = (page - 1) * itemsPerPage;
            const endIndex = startIndex + itemsPerPage;
            const clergyToShow = filteredClergy.slice(startIndex, endIndex);
            
            // Populate table body
            const tableBody = document.getElementById('clergyTableBody');
            tableBody.innerHTML = '';
            
            clergyToShow.forEach(clergy => {
                const row = document.createElement('tr');
                
                row.innerHTML = `
                    <td>${clergy.id}</td>
                    <td>${clergy.name}</td>
                    <td>${clergy.died}</td>
                    <td>${clergy.buried || 'Not specified'}</td>
                `;
                
                tableBody.appendChild(row);
            });
            
            // Update pagination
            renderPagination(page);
        }

        // Render pagination controls
        function renderPagination(currentPage) {
            const totalPages = Math.ceil(filteredClergy.length / itemsPerPage);
            const paginationElement = document.getElementById('pagination');
            paginationElement.innerHTML = '';
            
            // Previous button
            const prevLi = document.createElement('li');
            prevLi.classList.add('page-item');
            if (currentPage === 1) prevLi.classList.add('disabled');
            
            prevLi.innerHTML = `
                <a class="page-link" href="#" aria-label="Previous" data-page="${currentPage - 1}">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            `;
            
            paginationElement.appendChild(prevLi);
            
            // Page numbers
            for (let i = 1; i <= totalPages; i++) {
                const pageLi = document.createElement('li');
                pageLi.classList.add('page-item');
                if (i === currentPage) pageLi.classList.add('active');
                
                pageLi.innerHTML = `<a class="page-link" href="#" data-page="${i}">${i}</a>`;
                paginationElement.appendChild(pageLi);
            }
            
            // Next button
            const nextLi = document.createElement('li');
            nextLi.classList.add('page-item');
            if (currentPage === totalPages) nextLi.classList.add('disabled');
            
            nextLi.innerHTML = `
                <a class="page-link" href="#" aria-label="Next" data-page="${currentPage + 1}">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            `;
            
            paginationElement.appendChild(nextLi);
            
            // Add event listeners to pagination links
            document.querySelectorAll('.page-link').forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const page = parseInt(this.getAttribute('data-page'));
                    if (!isNaN(page) && page >= 1 && page <= totalPages) {
                        renderTable(page);
                    }
                });
            });
        }

        // Handle search functionality
        function handleSearch() {
            const searchTerm = document.getElementById('searchInput').value.toLowerCase();
            
            if (searchTerm === '') {
                filteredClergy = [...deceasedClergy];
            } else {
                filteredClergy = deceasedClergy.filter(clergy => 
                    clergy.name.toLowerCase().includes(searchTerm) ||
                    clergy.died.toLowerCase().includes(searchTerm) ||
                    clergy.buried.toLowerCase().includes(searchTerm)
                );
            }
            
            renderTable(1);
        }

        // Clear search
        function clearSearch() {
            document.getElementById('searchInput').value = '';
            filteredClergy = [...deceasedClergy];
            renderTable(1);
        }
    </script>
