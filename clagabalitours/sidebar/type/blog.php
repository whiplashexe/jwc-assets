<?php if ($opsi == 'footer_article'): ?>
    <?php foreach ($data->data as $key => $item): ?>
        <li><a href="<?= $func->link($route.$item->slug) ?>"><?= $item->title ?></a></li>
    <?php endforeach ?>  
<?php endif ?>