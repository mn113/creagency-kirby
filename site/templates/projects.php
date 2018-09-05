<?php snippet('header') ?>

    <main class="main" role="main">

        <div class="wrap">
            <h1><?= param('category') ?> <?= $page->title()->html() ?></h1>
        </div>
            
        <div class="wrap wide">    
            <?php snippet('showcase') ?>
        </div>

    </main>

<?php snippet('footer') ?>