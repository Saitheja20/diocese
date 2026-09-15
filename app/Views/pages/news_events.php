<section class="dio-editorial">
    <div class="dio-section-intro"><h2>Diocesan life and celebrations</h2><p>The archived News & Events address no longer contained a recoverable listing. These verified project collections preserve the available event coverage without inventing reports.</p></div>
    <div class="row g-4">
        <?php foreach ([
            ['gallery/jubilee-2025','assets/img/bishop-house-opening.jpeg','Jubilee 2025','Inauguration of Jubilee 2025 in the Diocese of Warangal'],
            ['photo-gallery','assets/church.jpeg','Photo Gallery','Celebrations, pastoral gatherings and diocesan memories'],
            ['newsletters','assets/Shepherd’s-Call-diocesan-newsletter.png','Newsletters','Fatima Vani and diocesan publications'],
        ] as $item): ?><div class="col-12 col-md-6 col-xl-4"><a class="dio-media-card" href="<?= base_url($item[0]) ?>"><img src="<?= base_url($item[1]) ?>" alt=""><div><span><?= esc($item[2]) ?></span><h3><?= esc($item[3]) ?></h3><strong>View collection <i class="fa-solid fa-arrow-right"></i></strong></div></a></div><?php endforeach; ?>
    </div>
</section>
