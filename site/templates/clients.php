<?php snippet('header') ?>

    <main class="main" role="main">
        
        <div class="wrap">
            <h2><?= $page->heading()->html() ?></h2>
            <div class="text">
                <?= $page->text()->kirbytext() ?>
            </div>
            <?php snippet('clientlogos') ?>

            <section class="testimonials">

            </section>
        </div>
      
    </main>

<?php snippet('footer') ?>
