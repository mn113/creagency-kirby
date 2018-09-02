<?php snippet('header') ?>

    <main class="main" role="main">
        
        <div class="wrap">
            <h1><?= $page->title()->html() ?></h1>      
            <div class="intro text">
                <?= $page->intro()->kirbytext() ?>
            </div>    
            <hr />      
        </div>
        
        <div class="wrap wide">
            <h2>Get in Touch</h2>
            
        </div>
            
        <div class="contact-twitter text wrap cf">
            <?= $page->text()->kirbytext() ?>
        </div>
        
    </main>

<?php snippet('footer') ?>