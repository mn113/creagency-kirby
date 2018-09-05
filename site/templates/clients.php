<?php snippet('header') ?>

    <main class="main" role="main">
        
        <div class="wrap">
            <h2><?= $page->heading()->html() ?></h2>
            <div class="text">
                <?= $page->text()->kirbytext() ?>
            </div>
            <?php snippet('clientlogos') ?>

            <section class="testimonials">
                <h2>Testimonials</h2>
                <?php foreach($page->testimonials()->toStructure() as $test): ?>
                <blockquote>
                    <p><?= $test->words()->kirbytext() ?></p>
                    <span class="name"><?= $test->name()->html() ?></span>
                </blockquote>
                <?php endforeach ?>
            </section>
        </div>
      
    </main>

<?php snippet('footer') ?>
