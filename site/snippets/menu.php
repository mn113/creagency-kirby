            <nav>
                <ul>
                <?php foreach($pages->visible() as $item): ?>
                    <li class="menu-item<?= r($item->isOpen(), ' active') ?>">
                        <a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
                    </li>
                <?php endforeach ?>
                </ul>
            </nav>
