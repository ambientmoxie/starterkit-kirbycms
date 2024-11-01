<?php
require_once __DIR__ . '/../helpers/assetHandler.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $page->title() ?> </title>
    <?= snippet('seo/meta') ?>

    <?php if (option('vite.dev')): ?>
        <!-- Include Vite dev server for HMR -->
        <script type="module" src="http://<?= option('vite.ip') ?>:3000/@vite/client"></script>
        <script type="module" src="http://<?= option('vite.ip') ?>:3000/assets/js/main.js" defer></script>
    <?php else: ?>
        <!-- Include the production build files -->
        <link rel="stylesheet" href="<?= handleHashedAsset('assets/js/main.js', "css") ?>">
        <script src="<?= handleHashedAsset('assets/js/main.js', "js") ?>" type="module" defer></script>
    <?php endif; ?>

</head>

<body>
    <header id="my-header">
        <p><?= $site->title() ?> is running</p>
        <p><?= $page->title() ?></p>
    </header>