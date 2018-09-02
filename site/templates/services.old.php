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
            
            <div class="text">
                <?= $page->text()->kirbytext() ?>
            </div>
            
        </div>
        
        <?php foreach($page->services() as $section): ?>
            <section class="team wrap wide">
            
                <h2>$section</h2>

                <?= img() ?>
            
            </section>
        <?php endforeach ?>

    </main>

<?php snippet('footer') ?>
