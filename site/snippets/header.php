<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
        <meta name="description" content="<?= $site->description()->html() ?>">

        <?= css('https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css') ?>
        <?= css('https://fonts.googleapis.com/css?family=Bitter|Cabin+Sketch|Dosis') ?>
        <?= css('assets/css/style.css') ?>
    </head>
    <body id="<?= $page->title() ?>">
        <!--[if lt IE 8]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div id="wrap">
            <header>
                <p><a href="<?= url() ?>" rel="home"><?= $site->title()->html() ?></a></p>
                <span>Creative Agency</span>
                <?php snippet('socialicons') ?>
            </header>
            <?php snippet('menu') ?>
