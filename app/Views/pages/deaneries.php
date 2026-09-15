<?php
$deaneries = [
    'Karunapuram' => ['Janakipuram','Velair','Dharmasagar','Pallagutta','Sagaram','Reddypalem','Karunapuram','Rampur','Mallakpalli','Venkatapuram','Singaram','Mariapuram'],
    'Jangaon' => ['Jangaon','Cherial','Bachannapet','Narimetta','Kadavendi','Madhapuram','Kanchanapalli','Ghanpur','Malkapur'],
    'Karimnagar' => ['Karimnagar','Korutla','Jagtial','Ranipuram','Godavarikhani','Manthani','Appannapet','Dacharam','Husnabad','Shanthinagar','Shanthipuram','Elkathurthy'],
    'Fatimanagar' => ['Fatimanagar','Kazipet','Diesel Colony',"St. Peter's Colony",'Waddepally','Subedari','Kumarapalli','Reddipuram','Palivelpula','Ekasilanagar','Assisi Nagar','Hasanparthy'],
    'Ookal' => ['Devagiripatnam','Kamalapuram','Pasra','Thimmaraopet','Narsampet','Ookal','Atmakur','Parkal','Manugonda','Pulukurthy'],
    'Mahabubabad' => ['Mahabubabad','Dornakal','Kesamudram','Nekkonda','Nellikuduru','Theegarajupalli','Wardhannapet','Thorrur','Maripeda'],
];
?>
<section class="dio-directory-page">
    <div class="dio-section-intro"><h2>Parishes grouped for pastoral care</h2><p>The historical diocesan directory records six deaneries. Select a deanery to review its parish and mission centres.</p></div>
    <div class="accordion dio-accordion" id="deaneryAccordion">
        <?php foreach ($deaneries as $deanery => $places): $id = strtolower($deanery); ?>
            <div class="accordion-item">
                <h2 class="accordion-header"><button class="accordion-button <?= $deanery !== 'Karunapuram' ? 'collapsed' : '' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#<?= esc($id) ?>-deanery"><?= esc($deanery) ?> Deanery <span class="badge ms-auto me-3"><?= count($places) ?> centres</span></button></h2>
                <div id="<?= esc($id) ?>-deanery" class="accordion-collapse collapse <?= $deanery === 'Karunapuram' ? 'show' : '' ?>" data-bs-parent="#deaneryAccordion"><div class="accordion-body"><ol class="dio-place-grid"><?php foreach ($places as $place): ?><li><?= esc($place) ?></li><?php endforeach; ?></ol></div></div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="mt-4"><a class="btn btn-primary" href="<?= base_url('parishes') ?>">Open parish directory</a></div>
</section>
