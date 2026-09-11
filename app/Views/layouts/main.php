<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'Diocese of Warangal') ?></title>
    <?= view('partials/head') ?>
</head>
<body>
    <?= view('partials/header') ?>
    <?= $this->renderSection('content') ?>
    <?= view('partials/footer') ?>
</body>
</html>
