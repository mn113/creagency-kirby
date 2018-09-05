<?php snippet('header') ?>

    <main class="main" role="main">

        <div class="wrap">
            <div>
                <h1><?= $page->title()->html() ?></h1>
                <div class="intro text">
                    <?= $page->intro()->kirbytext() ?>
                </div>
                <hr />
            </div>
        </div>
        
        <div class="grid showcase cf" data-masonry='{ "itemSelector": ".grid-item", "columnWidth": ".grid-sizer", "percentPosition": "true", "gutter": 0 }'>
            <!-- .grid-sizer empty element, only used for element sizing -->
            <div class="grid-sizer"></div>
            <?php foreach($page->children()->visible() as $service): ?>
                <div class="grid-item">
                    <a href="projects/category:<?= explode(" ", $service->title())[0] ?>"><h2><?= $service->title()->html() ?></h2></a>
                    <img src="<?= $service->images()->first()->crop(300,200)->url() ?>" alt="<?= $service->title()->html() ?>" class="showcase-image" />
                    <p><?= $service->text()->html() ?></p>
                </div>
            <?php endforeach ?>
        </div>
        <script src="js/masonry-init.js" defer></script>

    </main>

<?php snippet('footer') ?>
