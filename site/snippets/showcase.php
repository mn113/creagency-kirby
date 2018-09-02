<?php

$projects = page('projects')->children()->visible();

if(isset($limit)) $projects = $projects->limit($limit);

?>

<div class="grid showcase cf" data-masonry='{ "itemSelector": ".grid-item", "columnWidth": ".grid-sizer", "percentPosition": "true", "gutter": 0 }'>
    <!-- .grid-sizer empty element, only used for element sizing -->
    <div class="grid-sizer"></div>

    <?php foreach($projects as $project): ?>

        <div class="grid-item grid-item--width<?= $project->width() ?>">
            <a href="<?= $project->url() ?>" class="showcase-link">
                <img src="<?= $project->images()->first()->crop(400,400)->url() ?>" alt="Thumbnail for <?= $project->title()->html() ?>" class="showcase-image" />
                <h2><?= $project->title()->html() ?></h2>
                <p><?= $project->text() ?></p>
            </a>
        </div>

    <?php endforeach ?>
</div>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
