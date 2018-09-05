<?php

$projects = page('projects')->children()->visible();

if (null !== param('category')) $projects = $projects->filterBy('category', param('category'));

if (isset($limit)) $projects = $projects->limit($limit)->sortBy('year', 'desc');

?>

<div class="grid showcase cf" data-xmasonry='{ "itemSelector": ".grid-item", "columnWidth": ".grid-sizer", "percentPosition": "true", "gutter": 0 }'>
    <!-- .grid-sizer empty element, only used for element sizing -->
    <div class="grid-sizer"></div>

    <?php foreach($projects as $project): ?>

        <div class="grid-item grid-item--width<?= $project->width() ?>">
            <img src="<?= $project->images()->first()->crop(400,400)->url() ?>" alt="Thumbnail for <?= $project->title()->html() ?>" class="showcase-image" />
            <a href="#" class="showcase-link">
                <h2><?= $project->title()->html() ?> <span><?= $project->year() ?></span></h2>
            </a>
            <p><?= $project->text() ?></p>
        </div>

    <?php endforeach ?>
</div>
