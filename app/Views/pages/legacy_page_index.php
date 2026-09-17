<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<main class="dio-page">
    <!-- <section class="dio-page-hero">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb dio-breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Home</a></li>
                    <?php if (! empty($section)): ?>
                        <li class="breadcrumb-item"><?= esc($section) ?></li>
                    <?php endif; ?>
                    <li class="breadcrumb-item active" aria-current="page"><?= esc($heading ?? $title ?? '') ?></li>
                </ol>
            </nav>
            <div class="dio-page-heading">
                <span class="dio-cross-mark" aria-hidden="true"></span>
                <div>
                    <p><?= esc($section ?? 'Diocese of Warangal') ?></p>
                    <h1><?= esc($heading ?? $title ?? 'Diocese of Warangal') ?></h1>
                </div>
            </div>
        </div>
    </section> -->
    <section class="dio-content-sectio">
        <div class="container-fluid">
            <div class="dio-content-shell" data-aos="fade-up">
                <?php if (! empty($legacyView)): ?>
                    <?= view($legacyView) ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
</main>
<?= $this->endSection() ?>
