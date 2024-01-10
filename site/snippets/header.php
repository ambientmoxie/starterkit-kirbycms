<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $page->title() ?> </title>
    <?= snippet('seo/meta') ?>
    <?= css('assets/bundle/css/bundle.css') ?>

</head>

<body>
    <header id="my-header">
        <h1><?= $page->title() ?></h1>
    </header>