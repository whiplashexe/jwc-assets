
<?php
  $title = $item->setting->title;
  $subtitle = $item->setting->subtitle;
  $subtitle_2 = $item->setting->subtitle2;
  $grid = $item->setting->grid;
  $route = ROUTE_PRODUCT_VIEW;
?>

<?php if ($grid == "1"): ?>
  <section id="__other-services-root">
    <div class="__slider-wrapper">

      <div class="title-why2 mb-md-3 mb-3">
        <div class="row ">
          <div class="col-md-6 px-2">
            <h2><?= $title ?></h2>
            <p><?= $subtitle ?></p>
          </div>
          <div class="col-md-6 px-2 d-flex justify-content-end align-items-center">
            <!-- <a class="__explore-top" href="<?= $subtitle_2 ?>">Explore More</a> -->
          </div>
        </div>
      </div>
      
      <div class="product-slick ss-arrow">
        <?php
        $i = 1;
        foreach ($item->data as $items): ?>
          <a href="<?= $func->link(ROUTE_PRODUCT_VIEW, $items->slug) ?>" class="__item">
            <p class="__item-title"><?= $items->title ?></p>
            <div class="__item-gradient"></div>
            <img class="__item-img" src="<?= $items->img_cover_url ?>" alt="<?= $items->title ?>">
          </a>
          <?php $i++;endforeach;
        ?>
      </div>
    </div>
  </section>



<?php elseif ($grid == "4"): ?>
  <section class="pad3rem product pb-3" id="populer">
    <div class="container-global wow fadeIn" data-wow-duration="2s">
      <div class="title-why2 mb-md-3 mb-3">
        <div class="row ">
          <div class="col-md-6 px-2">
<!--            <span class="sp-atas">Paket Terpopuler</span>-->
            <h2><?= $title ?></h2>
            <p><?= $subtitle ?></p>
          </div>
          <div class="col-md-6 px-2 d-flex justify-content-end align-items-center">
<!--            <p>--><?php //= $subtitle ?><!--</p>-->
            <a class="__explore-top" href="<?= $subtitle_2 ?>">Explore More</a>
          </div>
        </div>
      </div>
      <div class="row product-slick ss-arrow">
        <?php $i=1; foreach ($item->data as $items): ?>
          <div class="col-sm-4 col-6 px-2 pb-4">
            <div class="card h-100 ">
              <img src="<?= $items->img_cover_url ?>" alt="<?= $items->title ?>" />
              <div class="price">
                  <span>
                      <?php if ($items->price >= 10000): ?>
                        <?php if ($items->price >= 1000): ?>
                          IDR <?= number_format($items->price / 1000, 0) . 'K ';?>
                        <?php endif ?>
                      <?php else: ?>
                        USD <?= number_format($items->price) ?>
                      <?php endif ?>
                  </span>
                
              </div>
              <div class="card-body p-0">
                <div class="info-tag d-sm-block d-none">
                  <div class="wrap-info d-flex justify-content-between align-item-center">
                                    <span class="day">
                                        <?php if (!empty($items->custom_field_1)): ?>
                                          <i class="fa-solid fa-calendar-days"></i> <?=  $items->custom_field_1 ?>
                                        <?php else: ?>
                                          <i class="fa-solid fa-calendar-days"></i> 1 Day
                                        <?php endif ?>
                                    </span>
                    <span class="people">
                                        <?php if (!empty($items->custom_field_2)): ?>
                                          <i class="fa-solid fa-user"></i> <?= $items->custom_field_2 ?>
                                        <?php else: ?>
                                          <i class="fa-solid fa-user"></i> 6 Person
                                        <?php endif ?>
                                    </span>
                    <span class="location">
                                        <?php if (!empty($items->custom_field_3)): ?>
                                          <i class="fa-solid fa-location-dot"></i> <?= $items->custom_field_3 ?>
                                        <?php else: ?>
                                          <i class="fa-solid fa-location-dot"></i> Bali
                                        <?php endif ?>
                                    </span>
                  </div>
                </div>
                <div class="txt p-4">
                  <h3 class="card-title">
                    <?= $items->title ?>
                  </h3>
                  <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <span>(All guests are satisfied)</span>
                  </div>
                  <p class="d-sm-block d-none">
                    <?= $func->trailer($items, 70) ?>...
                  </p>
                </div>
                <div class="btn-wraper d-flex justify-content-between">
                  <a href="<?= $func->dm_whatsapp() ?>" class="btn btn-book d-sm-block d-none">
                    Book <i class="fa-solid fa-arrow-right-long ml-2"></i>
                  </a>
                  <a href="<?= $func->link(ROUTE_PRODUCT_VIEW, $items->slug) ?>" class="btn btn-read">
                    More Details <i class="fa-solid fa-arrow-right-long ml-2"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <?php $i++; endforeach ?>
      </div>

      <div class="__explore-bottom w-100 justify-content-center align-items-center">
        <a href="<?= $subtitle_2 ?>">Explore More</a>
      </div>
    </div>
  </section>


<?php endif; ?>



