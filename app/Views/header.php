   
   <style>
    /* =========================================
   DESKTOP DROPDOWN
========================================= */

.nav-dropdown {
    position: relative;
}

.dropdown-trigger {
    display: flex;
    align-items: center;
    gap: 7px;
}

.dropdown-trigger i {
    font-size: 10px;
    transition: transform 0.3s ease;
}


/* DROPDOWN MENU */

.nav-dropdown-menu {
    position: absolute;
    top: calc(100% + 15px);
    left: 0;

    min-width: 240px;
    max-height: 75vh;
    overflow-y: auto;

    background: #ffffff;

    padding: 8px 0;

    border-top: 3px solid #a00000;

    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);

    opacity: 0;
    visibility: hidden;

    transform: translateY(10px);

    transition:
        opacity 0.25s ease,
        visibility 0.25s ease,
        transform 0.25s ease;

    z-index: 9999;
}


/* DROPDOWN LINKS */

.nav-dropdown-menu a {
    display: block;

    padding: 10px 18px;

    color: #333 !important;

    text-decoration: none;

    font-size: 14px;

    line-height: 1.4;

    transition:
        background 0.25s ease,
        color 0.25s ease,
        padding-left 0.25s ease;
}


/* HOVER */

.nav-dropdown-menu a:hover {
    background: #f7eeee;

    color: #a00000 !important;

    padding-left: 23px;
}


/* SHOW DROPDOWN */

/* =========================================
   CLICK BASED DESKTOP DROPDOWN
========================================= */

.nav-dropdown {
    position: relative;
}

.dropdown-trigger {
    display: flex;
    align-items: center;
    gap: 7px;
    cursor: pointer;
}

.dropdown-trigger i {
    font-size: 10px;
    transition: transform 0.3s ease;
}


/* DROPDOWN */

.nav-dropdown-menu {
    position: absolute;
    top: calc(100% + 15px);
    left: 0;

    min-width: 240px;
    max-height: 75vh;
    overflow-y: auto;

    background: #fff;

    padding: 8px 0;

    border-top: 3px solid #a00000;

    box-shadow: 0 12px 30px rgba(0,0,0,0.15);

    opacity: 0;
    visibility: hidden;

    transform: translateY(10px);

    transition: all 0.25s ease;

    z-index: 9999;
}


/* OPEN STATE */

.nav-dropdown.active .nav-dropdown-menu {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}


/* ARROW */

.nav-dropdown.active .dropdown-trigger i {
    transform: rotate(180deg);
}


/* LINKS */

.nav-dropdown-menu a {
    display: block;

    padding: 10px 18px;

    color: #333 !important;

    text-decoration: none;

    font-size: 14px;

    transition: all 0.2s ease;
}

.nav-dropdown-menu a:hover {
    background: #f7eeee;
    color: #a00000 !important;
    padding-left: 23px;
}


/* ARROW */

.nav-dropdown:hover .dropdown-trigger i {
    transform: rotate(180deg);
}


/* =========================================
   MOBILE DROPDOWNS
========================================= */

.mobile-dropdown {
    width: 100%;

    border-bottom: 1px solid #eeeeee;
}


/* MOBILE DROPDOWN BUTTON */

.mobile-dropdown-btn {
    width: 100%;

    border: none;

    background: transparent;

    padding: 15px 0;

    display: flex;

    align-items: center;

    justify-content: space-between;

    text-align: left;

    color: #333;

    font-size: 16px;

    font-weight: 600;

    cursor: pointer;
}


/* MOBILE ARROW */

.mobile-dropdown-btn i {
    font-size: 11px;

    transition: transform 0.3s ease;
}


/* ROTATE ARROW WHEN OPEN */

.mobile-dropdown-btn[aria-expanded="true"] i {
    transform: rotate(180deg);
}


/* MOBILE SUBMENU */

.mobile-submenu {
    padding: 5px 0 10px 15px;
}


/* MOBILE SUBMENU LINKS */

.mobile-submenu a {
    display: block;

    padding: 10px 12px;

    color: #555 !important;

    font-size: 14px;

    text-decoration: none;

    border-left: 2px solid transparent;

    transition:
        color 0.25s ease,
        background 0.25s ease,
        border-color 0.25s ease;
}


/* MOBILE SUBMENU HOVER */

.mobile-submenu a:hover {
    color: #a00000 !important;

    background: #f8f1f1;

    border-left-color: #a00000;
}


/* =========================================
   MOBILE MENU GENERAL
========================================= */

.mobile-menu > a {
    display: flex;

    align-items: center;

    width: 100%;

    padding: 15px 0;

    color: #333 !important;

    text-decoration: none;

    font-size: 16px;

    font-weight: 600;

    border-bottom: 1px solid #eeeeee;

    transition: color 0.25s ease;
}


.mobile-menu > a:hover {
    color: #a00000 !important;
}


/* =========================================
   OFFCANVAS
========================================= */

#mobileMenu {
    width: 330px;

    max-width: 90%;
}


#mobileMenu .offcanvas-header {
    border-bottom: 1px solid #eeeeee;

    padding: 18px 20px;
}


#mobileMenu .offcanvas-title {
    font-size: 18px;

    font-weight: 700;

    color: #a00000;
}


#mobileMenu .offcanvas-body {
    padding: 15px 20px;
}
   </style>
   
   <!-- =====================================
         TOP HEADER
    ====================================== -->

    <header class="top-header">

        <div class="top-header-container">

            <div class="top-header-content">

                <div class="contact-details">
                    +91- 870- 2459128 | waldioabu@gmail.com
                </div>

                <div class="social-icons">

                    <a href="#" aria-label="Instagram">
                        <i class="fa-brands fa-instagram"></i>
                    </a>

                    <a href="#" aria-label="Facebook">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>

                    <a href="#" aria-label="X">
                        <i class="fa-brands fa-x-twitter"></i>
                    </a>

                    <a href="#" aria-label="YouTube">
                        <i class="fa-brands fa-youtube"></i>
                    </a>

                    <a href="#" aria-label="LinkedIn">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>

                </div>

            </div>

        </div>

    </header>


    <!-- =====================================
         MAIN NAVBAR
    ====================================== -->

<!-- =========================================
     MAIN NAVBAR
========================================= -->

<nav class="main-navbar"> 
 
    <div class="navbar-container"> 
 
        <div class="navbar-content"> 
 
            <!-- LOGO --> 
            <a href="<?= base_url('index'); ?>" class="logo"> 
                <img src="<?= base_url('assets/img/logo2.png'); ?>" 
                     alt="Diocese of Warangal"> 
            </a> 
 
 
            <!-- ========================================= 
                 DESKTOP MENU 
            ========================================== --> 
            <div class="desktop-menu"> 
 
                <!-- HOME --> 
                <a href="<?= base_url('index'); ?>">Home</a> 
 
 
                <!-- =============================== 
                     DIOCESE DROPDOWN 
                ================================= --> 
                <div class="nav-dropdown"> 
 
                    <a href="javascript:void(0);" class="dropdown-trigger"> 
                        Diocese 
                        <i class="fa-solid fa-chevron-down"></i> 
                    </a> 
 
                    <div class="nav-dropdown-menu"> 
 
                        <a href="<?= base_url('about_us'); ?>">About Us</a> 
 
                        <a href="<?= base_url('history'); ?>">History</a> 
 
                        <a href="<?= base_url('diocean'); ?>">Diocesan Curia</a> 
 
                        <a href="<?= base_url('college_commities'); ?>">College of Consultors</a> 
 
                        <a href="<?= base_url('deaneries'); ?>">Senate Members</a> 
 
                        <a href="<?= base_url('commisions'); ?>">Commissions</a> 
 
                        <a href="<?= base_url('commities'); ?>">Committees</a> 
 
                        <a href="<?= base_url('tribunal'); ?>">Marriage Tribunal</a> 
 
                        <a href="<?= base_url('deaneries'); ?>">Deaneries</a> 
 
                        <a href="<?= base_url('directress'); ?>">Directress</a> 
 
                        <a href="<?= base_url('parishes'); ?>">Parishes</a> 
 
                        <a href="<?= base_url('cathedral'); ?>">Cathedral</a> 
 
                        <a href="<?= base_url('dioceanshrine'); ?>">Diocesan Shrines</a> 
 
                        <a href="<?= base_url('seminarians'); ?>">Seminarians</a> 
 
                    </div> 
                </div> 
 
 
                <!-- =============================== 
                     BISHOP DROPDOWN 
                ================================= --> 
                <div class="nav-dropdown"> 
 
                    <a href="javascript:void(0);" class="dropdown-trigger"> 
                        Bishop 
                        <i class="fa-solid fa-chevron-down"></i> 
                    </a> 
 
                    <div class="nav-dropdown-menu"> 
 
                        <a href="<?= base_url('bishop'); ?>">Bishop</a> 
 
                        <a href="<?= base_url('bishop_message'); ?>">Bishop's Message</a> 
 
                    </div> 
                </div> 
 
 
                <!-- =============================== 
                     INSTITUTIONS DROPDOWN 
                ================================= --> 
                <div class="nav-dropdown"> 
 
                    <a href="javascript:void(0);" class="dropdown-trigger"> 
                        Institutions 
                        <i class="fa-solid fa-chevron-down"></i> 
                    </a> 
 
                    <div class="nav-dropdown-menu"> 
 
                        <a href="<?= base_url('institution'); ?>">Institutions</a> 
 
                        <a href="<?= base_url('eduactionalinstitution'); ?>">Educational Institutions</a> 
 
                        <a href="<?= base_url('hospitals'); ?>">Hospitals</a> 
 
                    </div> 
                </div> 
 
 
                <!-- =============================== 
                     PRIESTS & RELIGIOUS DROPDOWN 
                ================================= --> 
                <div class="nav-dropdown"> 
 
                    <a href="javascript:void(0);" class="dropdown-trigger"> 
                        Priests & Religious 
                        <i class="fa-solid fa-chevron-down"></i> 
                    </a> 
 
                    <div class="nav-dropdown-menu"> 
 
                        <a href="<?= base_url('dioceanpreiest'); ?>">Diocesan Priests</a> 
 
                        <a href="<?= base_url('religiouspreiest'); ?>">Religious Priests</a> 
 
                        <a href="<?= base_url('religioussisters'); ?>">Religious Sisters</a> 
 
                    </div> 
                </div> 
 
 
                <!-- =============================== 
                     CALENDARS DROPDOWN 
                ================================= --> 
                <div class="nav-dropdown"> 
 
                    <a href="javascript:void(0);" class="dropdown-trigger"> 
                        Calendars 
                        <i class="fa-solid fa-chevron-down"></i> 
                    </a> 
 
                    <div class="nav-dropdown-menu"> 
 
                        <a href="<?= base_url('birthdaycalender'); ?>">Birthday Calendar</a> 
 
                        <a href="<?= base_url('ordinationcalender'); ?>">Ordination Calendar</a> 
 
                        <a href="<?= base_url('necrology'); ?>">Necrology</a> 
 
                    </div> 
                </div> 
 
 
                <!-- =============================== 
                     MEDIA DROPDOWN 
                ================================= --> 
                <div class="nav-dropdown"> 
 
                    <a href="javascript:void(0);" class="dropdown-trigger"> 
                        Media 
                        <i class="fa-solid fa-chevron-down"></i> 
                    </a> 
 
                    <div class="nav-dropdown-menu"> 
 
                        <a href="<?= base_url('news'); ?>">News & Events</a> 
 
                        <a href="<?= base_url('articles'); ?>">Articles</a> 
 
                        <a href="<?= base_url('gallery'); ?>">Photo Gallery</a> 
 
                        <a href="<?= base_url('vedio'); ?>">Video Gallery</a> 
 
                        <a href="<?= base_url('songs'); ?>">Songs Gallery</a> 
 
                        <a href="<?= base_url('newsletters'); ?>">Newsletters</a> 
 
                    </div> 
                </div> 
 
 
                <!-- FEEDBACK --> 
                <a href="<?= base_url('feedback'); ?>"> 
                    Feedback 
                </a> 
 
 
                <!-- CONTACT --> 
                <a href="<?= base_url('contact'); ?>"> 
                    Contact Us 
                </a> 
 
            </div> 
 
 
            <!-- ========================================= 
                 MOBILE MENU BUTTON 
            ========================================== --> 
            <button class="menu-button" 
                    type="button" 
                    data-bs-toggle="offcanvas" 
                    data-bs-target="#mobileMenu" 
                    aria-controls="mobileMenu"> 
 
                <i class="fa-solid fa-bars"></i> 
 
            </button> 
 
        </div> 
 
    </div> 
 
</nav>



<!-- =========================================
     MOBILE OFFCANVAS MENU
========================================= -->

<div class="offcanvas offcanvas-end"
     tabindex="-1"
     id="mobileMenu"
     aria-labelledby="mobileMenuLabel">

    <!-- HEADER -->
    <div class="offcanvas-header">

        <h5 class="offcanvas-title" id="mobileMenuLabel">
            Diocese of Warangal
        </h5>

        <button type="button"
                class="btn-close"
                data-bs-dismiss="offcanvas"
                aria-label="Close">
        </button>

    </div>


    <!-- BODY -->
    <div class="offcanvas-body">

        <div class="mobile-menu">


            <!-- HOME -->
            <a href="<?= base_url('index'); ?>">
                Home
            </a>


            <!-- =================================
                 DIOCESE
            ================================== -->
            <div class="mobile-dropdown">

                <button class="mobile-dropdown-btn"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#mobileDiocese"
                        aria-expanded="false">

                    <span>Diocese</span>

                    <i class="fa-solid fa-chevron-down"></i>

                </button>

                <div class="collapse mobile-submenu"
                     id="mobileDiocese">

                    <a href="<?= base_url('about_us'); ?>">
                        About Us
                    </a>

                    <a href="<?= base_url('history'); ?>">
                        History
                    </a>

                    <a href="<?= base_url('diocean'); ?>">
                        Diocesan Curia
                    </a>

                    <a href="<?= base_url('college_commities'); ?>">
                        College of Consultors
                    </a>

                    <a href="<?= base_url('deaneries'); ?>">
                        Senate Members
                    </a>

                    <a href="<?= base_url('commisions'); ?>">
                        Commissions
                    </a>

                    <a href="<?= base_url('commities'); ?>">
                        Committees
                    </a>

                    <a href="<?= base_url('tribunal'); ?>">
                        Marriage Tribunal
                    </a>

                    <a href="<?= base_url('deaneries'); ?>">
                        Deaneries
                    </a>

                    <a href="<?= base_url('directress'); ?>">
                        Directress
                    </a>

                    <a href="<?= base_url('parishes'); ?>">
                        Parishes
                    </a>

                    <a href="<?= base_url('cathedral'); ?>">
                        Cathedral
                    </a>

                    <a href="<?= base_url('dioceanshrine'); ?>">
                        Diocesan Shrines
                    </a>

                    <a href="<?= base_url('seminarians'); ?>">
                        Seminarians
                    </a>

                </div>

            </div>


            <!-- =================================
                 BISHOP
            ================================== -->
            <div class="mobile-dropdown">

                <button class="mobile-dropdown-btn"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#mobileBishop"
                        aria-expanded="false">

                    <span>Bishop</span>

                    <i class="fa-solid fa-chevron-down"></i>

                </button>

                <div class="collapse mobile-submenu"
                     id="mobileBishop">

                    <a href="<?= base_url('bishop'); ?>">
                        Bishop
                    </a>

                    <a href="<?= base_url('bishop_message'); ?>">
                        Bishop's Message
                    </a>

                </div>

            </div>


            <!-- =================================
                 INSTITUTIONS
            ================================== -->
            <div class="mobile-dropdown">

                <button class="mobile-dropdown-btn"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#mobileInstitutions"
                        aria-expanded="false">

                    <span>Institutions</span>

                    <i class="fa-solid fa-chevron-down"></i>

                </button>

                <div class="collapse mobile-submenu"
                     id="mobileInstitutions">

                    <a href="<?= base_url('institution'); ?>">
                        Institutions
                    </a>

                    <a href="<?= base_url('eduactionalinstitution'); ?>">
                        Educational Institutions
                    </a>

                    <a href="<?= base_url('hospitals'); ?>">
                        Hospitals
                    </a>

                </div>

            </div>


            <!-- =================================
                 PRIESTS & RELIGIOUS
            ================================== -->
            <div class="mobile-dropdown">

                <button class="mobile-dropdown-btn"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#mobilePriests"
                        aria-expanded="false">

                    <span>Priests & Religious</span>

                    <i class="fa-solid fa-chevron-down"></i>

                </button>

                <div class="collapse mobile-submenu"
                     id="mobilePriests">

                    <a href="<?= base_url('dioceanpreiest'); ?>">
                        Diocesan Priests
                    </a>

                    <a href="<?= base_url('religiouspreiest'); ?>">
                        Religious Priests
                    </a>

                    <a href="<?= base_url('religioussisters'); ?>">
                        Religious Sisters
                    </a>

                </div>

            </div>


            <!-- =================================
                 CALENDARS
            ================================== -->
            <div class="mobile-dropdown">

                <button class="mobile-dropdown-btn"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#mobileCalendars"
                        aria-expanded="false">

                    <span>Calendars</span>

                    <i class="fa-solid fa-chevron-down"></i>

                </button>

                <div class="collapse mobile-submenu"
                     id="mobileCalendars">

                    <a href="<?= base_url('birthdaycalender'); ?>">
                        Birthday Calendar
                    </a>

                    <a href="<?= base_url('ordinationcalender'); ?>">
                        Ordination Calendar
                    </a>

                    <a href="<?= base_url('necrology'); ?>">
                        Necrology
                    </a>

                </div>

            </div>


            <!-- =================================
                 MEDIA
            ================================== -->
            <div class="mobile-dropdown">

                <button class="mobile-dropdown-btn"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#mobileMedia"
                        aria-expanded="false">

                    <span>Media</span>

                    <i class="fa-solid fa-chevron-down"></i>

                </button>

                <div class="collapse mobile-submenu"
                     id="mobileMedia">

                    <a href="<?= base_url('news'); ?>">
                        News & Events
                    </a>

                    <a href="<?= base_url('articles'); ?>">
                        Articles
                    </a>

                    <a href="<?= base_url('gallery'); ?>">
                        Photo Gallery
                    </a>

                    <a href="<?= base_url('vedio'); ?>">
                        Video Gallery
                    </a>

                    <a href="<?= base_url('songs'); ?>">
                        Songs Gallery
                    </a>

                    <a href="<?= base_url('newsletters'); ?>">
                        Newsletters
                    </a>

                </div>

            </div>


            <!-- FEEDBACK -->
            <a href="<?= base_url('feedback'); ?>">
                Feedback
            </a>


            <!-- CONTACT -->
            <a href="<?= base_url('contact'); ?>">
                Contact Us
            </a>

        </div>

    </div>

</div>


<script>
document.addEventListener("DOMContentLoaded", function () {

    const dropdowns = document.querySelectorAll(".nav-dropdown");

    dropdowns.forEach(function (dropdown) {

        const trigger = dropdown.querySelector(".dropdown-trigger");

        trigger.addEventListener("click", function (e) {

            e.preventDefault();
            e.stopPropagation();

            // Close other dropdowns
            dropdowns.forEach(function (otherDropdown) {

                if (otherDropdown !== dropdown) {
                    otherDropdown.classList.remove("active");
                }

            });

            // Toggle current dropdown
            dropdown.classList.toggle("active");

        });

    });


    // Close dropdown when clicking outside navbar
    document.addEventListener("click", function (e) {

        if (!e.target.closest(".nav-dropdown")) {

            dropdowns.forEach(function (dropdown) {
                dropdown.classList.remove("active");
            });

        }

    });

});
</script>