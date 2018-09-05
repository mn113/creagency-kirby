<?php foreach($page->children()->first()->images() as $image): ?>
    <img src="<?= $image->url() ?>">
<?php endforeach ?>

