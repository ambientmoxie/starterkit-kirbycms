<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $page->title() ?> </title>

    <?php if (option('vite.dev')): ?>
        <!-- Include Vite dev server for HMR -->
        <script type="module" src="http://<?= option('vite.ip') ?>:3000/@vite/client"></script>
        <script type="module" src="http://<?= option('vite.ip') ?>:3000/assets/js/main.js" defer></script>
    <?php else: ?>
        <!-- Include the production build files -->
        <link rel="stylesheet" href="<?= hashedAssetURL("css") ?>">
        <script src="<?= hashedAssetURL("js") ?>" type="module" defer></script>
    <?php endif; ?>
    
</head>

<body>