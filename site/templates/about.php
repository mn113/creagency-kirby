<?php snippet('header') ?>

    <main class="main" role="main">
        
        <div class="hero">
            <h1>Live to create...<br>...create to live.</h1>
        </div>

        <div class="wrap">
            <h2><?= $page->heading()->html() ?></h2>
            <div class="text">
                <?= $page->text()->kirbytext() ?>
            </div>
        </div>
      
    </main>

<?php snippet('footer') ?>
