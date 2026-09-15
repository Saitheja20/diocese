<section class="dio-editorial">
    <div class="dio-lead-card">
        <span class="dio-kicker">Clergy anniversaries</span>
        <h2>Ordination dates of diocesan priests</h2>
        <p>The priests directory contains the available ordination date for each diocesan priest and can be searched by name or date. The historical calendar view listed anniversaries by month; the complete searchable directory is retained here as the more useful, accessible replacement.</p>
        <a class="btn btn-primary" href="<?= base_url('diocesan-priests') ?>">Search all ordination dates</a>
    </div>
    <div class="dio-anniversary-list">
        <h3>Historical May anniversaries</h3>
        <div class="row g-3">
        <?php foreach ([
            ['1 May','Rev. Fr. B. Chinnappa'], ['2 May','Rev. Fr. M. Anand'],
            ['3 May','Rev. Fr. D. Joseph; Rev. Fr. R. Thomas'], ['4 May','Rev. Fr. P. Raja'],
            ['5 May','Rev. Fr. Gade Prashanth'], ['7 May','Rev. Fr. Gade Chinnappa'],
            ['8 May','Rev. Fr. Y. Satish'], ['9 May','Rev. Fr. P. John Paul'],
            ['12 May','Rev. Fr. Y. Bala'], ['16 May','Rev. Fr. G. Sudhakar'],
        ] as $entry): ?><div class="col-12 col-sm-6"><div class="dio-date-card"><time><?= esc($entry[0]) ?></time><span><?= esc($entry[1]) ?></span></div></div><?php endforeach; ?>
        </div>
    </div>
</section>
