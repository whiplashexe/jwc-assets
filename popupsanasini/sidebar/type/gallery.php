<?php if($opsi == 'gallery'): ?>
    <?php foreach ($data->data as $key => $item): ?>
          <a class="btn fixed-width btn-rounded mb-0" style="margin-top:5px" href="<?= $func->link(ROUTE_GALLERY).$item->slug ?>">
            <?= $item->name ?>
          </a>
    <?php endforeach; ?>        
<?php endif; ?>