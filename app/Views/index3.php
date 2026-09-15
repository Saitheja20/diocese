<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<main class="dio-alt-home">
    <section class="dio-alt-hero">
        <img src="<?= base_url('assets/img/Catholic-Festival-Clergy-Portrait.webp') ?>" alt="Clergy of the Diocese of Warangal">
        <div class="dio-alt-hero-overlay"></div>
        <div class="container dio-alt-hero-content">
            <span>Together in faith · Together in service</span>
            <h1>Welcome to the<br>Diocese of Warangal</h1>
            <p>A community of parishes, clergy, religious and institutions proclaiming the Gospel through worship, formation and compassionate service.</p>
            <div class="d-flex flex-wrap gap-2"><a class="btn btn-light" href="<?= base_url('about-us') ?>">Discover our Diocese</a><a class="btn btn-outline-light" href="<?= base_url('contact-us') ?>">Contact the Bishop's House</a></div>
        </div>
    </section>

    <section class="dio-alt-stats" aria-label="Diocese at a glance">
        <div class="container"><div class="row g-0">
            <?php foreach ([['1952','Diocese erected'],['6','Historical deaneries'],['97','Priests in the directory'],['Warangal','Telangana, India']] as $stat): ?>
                <div class="col-6 col-lg-3"><div><strong><?= esc($stat[0]) ?></strong><span><?= esc($stat[1]) ?></span></div></div>
            <?php endforeach; ?>
        </div></div>
    </section>

    <section class="dio-alt-section">
        <div class="container"><div class="row g-4 g-xl-5 align-items-center">
            <div class="col-12 col-lg-5"><img class="dio-alt-bishop" src="<?= base_url('assets/paual.jpeg') ?>" alt="Most Rev. Dr. D. Vijaya Paul"></div>
            <div class="col-12 col-lg-7"><span class="dio-kicker">Bishop of Warangal</span><h2>Most Rev. Dr. D. Vijaya Paul</h2><p class="lead">Pastoral leadership rooted in faith, wisdom and service.</p><p>Appointed Bishop of Warangal on 9 May 2026, Most Rev. Dr. D. Vijaya Paul was episcopally ordained and installed at Our Lady of Fatima Cathedral Campus on 3 July 2026.</p><div class="d-flex flex-wrap gap-2"><a class="btn btn-primary" href="<?= base_url('bishop') ?>">Meet our Bishop</a><a class="btn btn-outline-primary" href="<?= base_url('bishop-message') ?>">Read his message</a></div></div>
        </div></div>
    </section>

    <section class="dio-alt-section dio-alt-soft">
        <div class="container"><div class="dio-alt-heading"><span class="dio-kicker">Explore</span><h2>Life of the Diocese</h2><p>Direct access to the most useful diocesan directories and ministries.</p></div>
            <div class="row g-3 g-lg-4">
                <?php foreach ([
                    ['parishes','assets/parish.jpeg','Parishes','Local worship and pastoral communities'],
                    ['deaneries','assets/leader.jpeg','Deaneries','Six historical pastoral groupings'],
                    ['diocesan-priests','assets/img/priests.png','Clergy','Priests, birthdays and ordination dates'],
                    ['education','assets/education.jpeg','Education','Schools, colleges and training institutes'],
                    ['institutions','assets/img/institutions.png','Formation','Seminaries and formation houses'],
                    ['commissions','assets/img/commissions.png','Commissions','Pastoral ministries serving Church and society'],
                ] as $card): ?><div class="col-12 col-sm-6 col-lg-4"><a class="dio-alt-card" href="<?= base_url($card[0]) ?>"><img src="<?= base_url($card[1]) ?>" alt=""><div><h3><?= esc($card[2]) ?></h3><p><?= esc($card[3]) ?></p><span>Explore <i class="fa-solid fa-arrow-right"></i></span></div></a></div><?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="dio-alt-section">
        <div class="container"><div class="row g-4 align-items-center">
            <div class="col-12 col-lg-6"><span class="dio-kicker">Our mother church</span><h2>Our Lady of Fatima Cathedral</h2><p>The Cathedral Campus at Fatimanagar is a focal point of diocesan prayer, sacramental life and major celebrations.</p><a class="btn btn-primary" href="<?= base_url('cathedral') ?>">Visit the cathedral page</a></div>
            <div class="col-12 col-lg-6"><img class="dio-alt-cathedral" src="<?= base_url('assets/Grand-Red-and-Beige-Cathedral-Cutout.png') ?>" alt="Our Lady of Fatima Cathedral"></div>
        </div></div>
    </section>

    <section class="dio-alt-section dio-alt-media">
        <div class="container"><div class="dio-alt-heading text-center mx-auto"><span class="dio-kicker">Stay connected</span><h2>News, prayer and diocesan memory</h2></div>
            <div class="dio-resource-grid">
                <a class="dio-resource-card" href="<?= base_url('news-events') ?>"><i class="fa-regular fa-calendar"></i><span><strong>News & Events</strong><small>Celebrations and diocesan life</small></span></a>
                <a class="dio-resource-card" href="<?= base_url('newsletters') ?>"><i class="fa-regular fa-newspaper"></i><span><strong>Newsletters</strong><small>Fatima Vani archive</small></span></a>
                <a class="dio-resource-card" href="<?= base_url('photo-gallery') ?>"><i class="fa-regular fa-images"></i><span><strong>Photo Gallery</strong><small>Moments from across the Diocese</small></span></a>
            </div>
        </div>
    </section>
</main>
<?= $this->endSection() ?>
