<?php snippet('header') ?>

    <main class="main" role="main">

        <div class="wrap">
            <h1><?= $page->title()->html() ?></h1>
            <div class="intro text">
                <?= $page->text()->kirbytext() ?>
            </div>
            <hr />
        </div>
            
        <div class="wrap wide">    
            <?php snippet('showcase') ?>
        </div>

    </main>

<?php snippet('footer') ?>