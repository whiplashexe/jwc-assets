<div class="col-md-3">
    <div class="img-thumbnail">                    
        <img class="img-responsive cover" width="100%" src="<?= $item->img_thumb_url ?>" alt="<?= $item->title ?>">
    </div>
    <div class="text-center pt-2">
        <h5 class="mb-1"><strong><?= $item->title ?></strong></h5>
        <p class="mb-1"><?= $func->trailer($item, 50)  ?></p>
        <p><a href="<?= $func->link(ROUTE_PRODUCT_VIEW.$item->slug) ?>" class="btn btn-primary btn-sm mb-2">View More</a></p>
    </div>
</div>
<?php if ($i % 4 == 1 ): ?>
<div class="clear"></div>
<?php endif ?>