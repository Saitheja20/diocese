<?php
$nav = [
    'About' => [
        ['Origins and Formation', 'about-us'],
        ['History', 'history'],
        ['Bishop', 'bishop'],
        ["Bishop's Message", 'bishop-message'],
        ['Diocesan Curia', 'diocesan-curia'],
        ['Marriage Tribunal', 'marriage-tribunal'],
    ],
    'Administration' => [
        ['College of Consultors', 'college-consultors'],
        ['Senate Members', 'senate-members'],
        ['Committees', 'committees'],
        ['Commissions', 'commissions'],
    ],
    'Clergy' => [
        ['Diocesan Priests', 'diocesan-priests'],
        ['Religious Priests', 'religious-priests'],
        ['Religious Sisters', 'religious-sisters'],
        ['Deaneries', 'deaneries'],
        ['Seminarians', 'seminarians'],
        ['Necrology', 'necrology'],
        ['Birthday Calendar', 'birthday-calendar'],
        ['Ordination Calendar', 'ordination-calendar'],
    ],
    'Parishes & Institutions' => [
        ['Parishes', 'parishes'],
        ['Cathedral', 'cathedral'],
        ['Diocesan Shrines', 'diocesan-shrines'],
        ['Education', 'education'],
        ['Institutions', 'institutions'],
        ['Institute Men', 'institute-men'],
        ['Institute Women', 'institute-women'],
        ['Seminaries', 'institute-seminaries'],
    ],
    'Media' => [
        ['Newsletters', 'newsletters'],
        ['News & Events', 'news-events'],
        ['Articles', 'articles'],
        ['Photo Gallery', 'photo-gallery'],
        ['Jubilee Gallery', 'gallery/jubilee-2025'],
        ['Video Gallery', 'video-gallery'],
        ['Songs Gallery', 'songs-gallery'],
    ],
    'Connect' => [
        ['Feedback', 'feedback'],
        ['Contact Us', 'contact-us'],
    ],
];
?>
<div class="warangal-blue-line"></div>
<header class="top-header">
    <div class="top-header-container">
        <div class="top-header-content">
            <div class="contact-details">
                <a href="tel:+918702459128">+91 870 245 9128</a>
                <span>|</span>
                <a href="mailto:wgldiocese@gmail.com">wgldiocese@gmail.com</a>
            </div>
            <div class="social-icons">
                <a href="https://www.instagram.com/" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.facebook.com/" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="https://www.youtube.com/" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>
    </div>
</header>
<nav class="main-navbar">
    <div class="navbar-container">
        <div class="navbar-content">
            <a href="<?= base_url('/') ?>" class="logo">
                <img src="<?= base_url('assets/img/logo2.png') ?>" alt="Diocese of Warangal">
            </a>
            <div class="desktop-menu dio-desktop-menu">
                <a href="<?= base_url('/') ?>">Home</a>
                <?php foreach ($nav as $label => $items): ?>
                    <div class="dio-nav-dropdown">
                        <button type="button" class="dio-nav-toggle"><?= esc($label) ?> <i class="fa-solid fa-chevron-down"></i></button>
                        <div class="dio-nav-menu">
                            <?php foreach ($items as $item): ?>
                                <a href="<?= base_url($item[1]) ?>"><?= esc($item[0]) ?></a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <button class="menu-button" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu" aria-controls="mobileMenu" aria-label="Open menu">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
    </div>
</nav>
<div class="offcanvas offcanvas-end" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenuLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="mobileMenuLabel">Diocese of Warangal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="mobile-menu">
            <a href="<?= base_url('/') ?>">Home</a>
            <?php foreach ($nav as $label => $items): ?>
                <?php $mobileId = strtolower(preg_replace('/[^a-z0-9]+/i', '-', $label)); ?>
                <div class="dio-mobile-group">
                    <button class="dio-mobile-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#mobile-<?= esc($mobileId) ?>">
                        <?= esc($label) ?> <i class="fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="collapse" id="mobile-<?= esc($mobileId) ?>">
                        <?php foreach ($items as $item): ?>
                            <a href="<?= base_url($item[1]) ?>"><?= esc($item[0]) ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
