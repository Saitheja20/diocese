<?php
$congregations = [
    'Assisi Sisters of Mary Immaculate (ASMI)', 'Catechist Sisters of St. Ann (CSA)',
    'Congregation of the Carmelite Religious of Trivandrum (CCR)', 'Congregation of Mother of Carmel',
    'Daughters of Mary Help of Christians', 'Daughters of the Presentation of Mary in the Temple (DPM)',
    'Franciscan Clarist Congregation', 'Franciscan Sisters of the Immaculate Heart of Mary (FIHM)',
    'Franciscan Missionaries of Mary (FMM)', 'Missionaries of Charity (MC)',
    'Missionaries of Mary Mediatrix (MMM)', 'Missionary Sisters of Mary Help of Christians',
    'Missionary Sisters of the Immaculate (MSI)', 'Seva Missionary Sisters of Mary',
    'Sisters of Charity', 'Sisters of Our Lady of Fatima', 'Sisters of St. Aloysius de Gonzague (FSAG)',
    'Sisters of St. Anne, Bangalore', 'Sisters of St. Ann of Providence (SAP)',
    'Sisters of St. Joseph of Cluny', 'Sisters of the Adoration of the Blessed Sacrament',
    'Sisters of the Catholic Apostolate', 'Sisters of the Destitute',
    'Sisters of St. John the Baptist (SJB)', 'Society of Jesus, Mary and Joseph (JMJ)',
    'Ancillae Secular Institute', 'Divya Jyothi', 'CRI – Warangal Unit',
];
?>
<section class="dio-directory-page">
    <div class="dio-section-intro"><h2>Women religious serving the Diocese</h2><p>This directory preserves the congregations listed in the historical diocesan record. Their apostolates include education, health care, formation, pastoral ministry and service to vulnerable communities.</p></div>
    <div class="row g-3">
        <?php foreach ($congregations as $index => $name): ?>
            <div class="col-12 col-md-6 col-xl-4"><article class="dio-name-card"><span><?= $index + 1 ?></span><h3><?= esc($name) ?></h3></article></div>
        <?php endforeach; ?>
    </div>
</section>
