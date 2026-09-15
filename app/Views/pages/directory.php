<section class="dio-editorial">
    <div class="dio-section-intro"><h2>Diocesan directory resources</h2><p>The archived website linked to a 2017 printed directory. Its downloadable file was not reliably recoverable, so this page provides current, accessible web directories without publishing a broken link.</p></div>
    <div class="dio-resource-grid">
        <?php foreach ([
            ['diocesan-priests','fa-solid fa-cross','Diocesan Priests','Names, birthdays and ordination dates'],
            ['diocesan-curia','fa-solid fa-landmark','Diocesan Curia','Offices serving diocesan administration'],
            ['deaneries','fa-solid fa-church','Deaneries','Pastoral groupings and centres'],
            ['parishes','fa-solid fa-location-dot','Parishes','Parish directory and local details'],
            ['education','fa-solid fa-graduation-cap','Education','Schools and training institutions'],
            ['institutions','fa-solid fa-building-columns','Formation Houses','Seminaries and religious formation'],
        ] as $item): ?>
            <a class="dio-resource-card" href="<?= base_url($item[0]) ?>"><i class="<?= esc($item[1]) ?>"></i><span><strong><?= esc($item[2]) ?></strong><small><?= esc($item[3]) ?></small></span></a>
        <?php endforeach; ?>
    </div>
</section>
