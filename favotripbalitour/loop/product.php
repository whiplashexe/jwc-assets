<div class="row pb-3 mb-5" style="position: relative;">                                   
    <div class="col-md-3">
    	<img class="img-fluid img-b" src="<?= $item->img_cover_url; ?>" alt="<?= $item->title; ?>">
    </div>
     <div class="col-md-6">
        <h3 class="title-pdt"><?= $item->title; ?></h3>
        <?php if ($item->price != 0 && $item->price != '') :?>
     	<div class="price-cus">IDR <?= number_format($item->price,0,0,'.'); ?></div>
        <?php endif ?>
                                           
        <p><?= substr(strip_tags($item->content), 0, 150) ?>...</p>
                                            
    </div>
 <div class="col-md-3 position-relative">
     <div class="btn-position">
        <a class="btn btn-primary warna-<?= $wr; ?>" href="<?= $func->link(ROUTE_PRODUCT_VIEW.$item->slug) ?>">View More</a>
     </div>
  	<div style="clear: both;"></div>
  </div>
    <div class="dot-c"></div>
</div>