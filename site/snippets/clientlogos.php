<div class="clientlogos">
<?php foreach($page->children()->first()->images() as $image): ?>
    <img src="<?= $image->url() ?>" alt="Logo for <?= $image->filename() ?>">
<?php endforeach ?>
</div>
