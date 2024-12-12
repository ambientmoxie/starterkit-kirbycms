<?php
snippet('head');
snippet('header');
?>

<main>
    <p><?= $site->title() ?> is running</p>
    <p><?= $page->title() ?></p>
</main>

<?php
snippet('foot');
snippet('footer');
?>