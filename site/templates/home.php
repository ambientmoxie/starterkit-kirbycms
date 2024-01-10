<!-- Header -->

<?php snippet('header') ?>

<!-- Gallery -->

<?php
    $sizes = "50vw";

    if ($page->hasFiles()):
        $images = $pages->files();
        foreach ($images as $image):
            $placeholder = $image->placeholderUri([
                                'width' => 30,
                                'ratio' => $image->ratio()
                            ]);
    ?>

    <picture>
        <source
            data-srcset="<?= $image->srcset('avif') ?>"
            sizes="<?= $sizes ?>"
            type="image/avif"
        >
        <source
            data-srcset="<?= $image->srcset('webp') ?>"
            sizes="<?= $sizes ?>"
            type="image/webp"
        >
        <img
            alt="<?= $image->alt() ?>"
            src=<?= $placeholder ?>
            data-src="<?= $image->resize(300)->url() ?>"
            data-srcset="<?= $image->srcset() ?>"
            sizes="<?= $sizes ?>"
            width="<?= $image->resize(1800)->width() ?>"
            height="<?= $image->resize(1800)->height() ?>"
            data-lazyload
            
        >
    </picture>

    <?php endforeach ?>
<?php endif ?>

<!-- Switch language -->

<?php snippet('switch_language') ?>

<!-- Footer -->

<?php snippet('footer') ?>

