
<style>

  html.sticky-header-active #header .header-body {
    background: var(--colors) !important;
  }
</style>

<section class="section-allpage lazyload" data-bgset="https://jwc.gotra-resources.my.id/web-upload/1739354266-12-02-2025-4M0ZJpywqImUhjGkloYN7nbVXDeOxWgv.webp">
  <div class="text wow fadeIn" data-wow-duration="2s">
    <h1>Search Result</h1>
    <p>Home - Search Result</p>
  </div>
  <div class="bg-overlay"></div>
</section>


<section class="pad6rem product" id="populer">
  <div class="container-global wow fadeIn" data-wow-duration="2s">

    <div class="row  ss-arrow">
      <?php $i=1; foreach ($data->result as $items): ?>
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
                                          <i class="fa-solid fa-calendar-days"></i> <?= $items->custom_field_1 ?>
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


  </div>
</section>

