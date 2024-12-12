<?php
snippet('head');
snippet('header');
?>

<main>

    <?php
    echo $site->title()         . " is running."                . "<br><br>";
    echo "VITE_DEV: "           . viteEnv('VITE_DEV')           . "<br>";
    echo "VITE_DEV_SERVER_IP: " . viteEnv('VITE_DEV_SERVER_IP') . "<br>";
    echo "LOCATION: "           . $page->intendedTemplate()     . "<br>";
    echo "DOCUMENT_ROOT: "      . $_SERVER['DOCUMENT_ROOT']     . "<br>";
    ?>

</main>

<?php
snippet('foot');
snippet('footer');
?>