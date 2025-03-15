 <?php
$title = $item->setting->title;
$subtitle = $item->setting->subtitle;
$subtitle2 = $item->setting->subtitle2;
$grid = $item->setting->grid;
$route = ROUTE_PRODUCT_VIEW;
?>


<?php if ($grid == '1'): ?>

<section id="__tours_root">
  <div class="wrapper">
    <div class="header">
      <h2 class="title"><?= $title ?></h2>
    </div>

    <div class="product-wrapper product-slick ss-arrow">
    <?php $i=1; foreach ($item->data as $item): ?>
        <a href="<?= $func->link(ROUTE_PRODUCT_VIEW, $item->slug) ?>" class="tour-product">
            <div class="tour-image-wrapper">
                <img
                class="tour-image"
                src="<?= $item->img_cover_url ?>"
                alt="product-image"
                />
            </div>
            <h3 class="tour-title"><?= $item->title ?></h3>
        </a>
    <?php endforeach; ?>
    </div>
  </div>
  <img
    class="pattern-image"
    src="https://jwc.gotra-resources.my.id/web-upload/1740725827-28-02-2025-9gRYmMuZTN4PvSXC28nHJl7wkEyiVL3t.webp"
    alt="pattern image"
  />
</section>

<?php elseif ($grid == '2'): ?>
<!--
<section class="pad6rem product" id="populer">
    <div class="container-global wow fadeIn" data-wow-duration="2s">

        <div class="title-global text-center">
            <span class="tag-atas"><?= $subtitle ?></span>
            <h2><?= $title ?></h2>
        </div>
    
        <div class="row  ss-arrow justify-content-center">
        <?php $i=1; foreach ($item->data as $items): ?>
            <div class="col-sm-4 col-6 px-2 pb-md-4 pb-3">
                <a href="<?= $func->link(ROUTE_PRODUCT_VIEW, $items->slug) ?>" class="">
                    <div class="card h-100">
                        <div class="img w-100">
                            <img src="<?= $items->img_cover_url ?>" alt="<?= $items->title ?>" class="w-100" />
                        </div>
                        
                        <div class="card-body p-md-3 pb-md-4 p-2 pb-3">
                                <div class="rating">
                                    <i class="fa-solid fa-star"></i>
                                    <span>5.0 (All guests are satisfied)</span>
                                </div>
                                <h3 class="card-title">
                                    <?php if (strlen($items->title) > 50): ?>
                                        <?= substr($items->title, 0, 50) . '...' ?>
                                    <?php else: ?>
                                        <?= $items->title ?>
                                    <?php endif ?>
                                </h3>
                                <?php if (!empty($items->price)): ?>
                                    <div class="price">
                                        <span>
                                            <?php if ($items->price >= 10000): ?>
                                                IDR <?= number_format($items->price) ?>
                                            <?php else: ?>
                                                USD <?= number_format($items->price) ?>
                                            <?php endif ?>
                                        </span> 
                                        / person
                                    </div>
                                <?php endif ?>
                                
                                <div class="info-tag">
                                    <div class="wrap-info d-flex justify-content-center align-item-center">
                                        <span class="day text-right">
                                            <?php if (!empty($items->custom_field_1)): ?>
                                                <i class="fa-solid fa-clock mr-1"></i><?= $items->custom_field_1 ?>
                                            <?php else: ?>
                                                <i class="fa-solid fa-clock mr-1"></i>1 Day
                                            <?php endif ?>
                                        </span>
                                        <span class="people">
                                            <?php if (!empty($items->custom_field_2)): ?>
                                                <i class="fa-solid fa-users mr-1"></i><?= $items->custom_field_2 ?>
                                            <?php else: ?>
                                                <i class="fa-solid fa-users mr-1"></i>Max 5
                                            <?php endif ?>
                                        </span>
                                        <span class="location text-left">
                                            <?php if (!empty($items->custom_field_2)): ?>
                                                <i class="fa-solid fa-location-crosshairs mr-1"></i><?= $items->custom_field_2 ?>
                                            <?php else: ?>
                                                <i class="fa-solid fa-location-crosshairs mr-1"></i>Bali
                                            <?php endif ?>
                                        </span>
                                    </div>
                                </div>
                            </div>

                    </div>
                </a>
            </div>
        <?php $i++; endforeach ?>
        </div>
    </div>
 
</section>
-->

<section id="__activities_root">
  <div class="wrapper">
    <div class="header">
      <h2 class="title"><?= $title ?></h2>
    </div>
    <div class="product-wrapper product-slick ss-arrow">
    <?php  $i=1; foreach ($item->data as $item): ?>
        <a href="<?= $func->link(ROUTE_PRODUCT_VIEW, $item->slug) ?>" class="activity-product">
            <div class="activity-image-wrapper">
                <img
                class="activity-image"
                src="<?= $item->img_cover_url ?>"
                alt="activity-image"
                />
            </div>
            <h3 class="activity-title"><?= $item->title ?></h3>
        </a>
    <?php endforeach; ?>
    </div>
  </div>
</section>

<?php elseif ($grid == '3'): ?>

<section class="pad6rem car-prod" id="populer">
    <div class="container-global wow fadeIn" data-wow-duration="2s">

        <div class="title-global text-center">
            <span class="tag-atas"><?= $subtitle ?></span>
            <h2><?= $title ?></h2>
        </div>
        <div class="row justify-content-center">
        <?php $i=1; foreach ($item->data as $items): ?>
            <div class="col-md-3 col-6 pb-4 px-2">

                <div class="card h-100">
                    <img src="<?= $items->img_cover_url ?>" alt="<?= $items->title ?>" />
                    <div class="card-body px-md-4 px-3">
                        <h3 class="card-title"><?= $items->title ?></h3>
                        <div class="info d-flex">
                            <div class="bx d-flex align-items-center mr-3">
                                <?php if (!empty($items->custom_field_1)): ?>
                                    <i class="fa-solid fa-suitcase-rolling"></i> <?= $items->custom_field_1 ?>
                                <?php else: ?>
                                    <i class="fa-solid fa-suitcase-rolling"></i> 1 
                                <?php endif ?>
                            </div>
                            <div class="bx d-flex align-items-center mr-3">
                                <?php if (!empty($items->custom_field_2)): ?>
                                    <i class="fa-solid fa-person"></i> <?= $items->custom_field_2 ?>
                                <?php else: ?>
                                    <i class="fa-solid fa-person"></i> 1 
                                <?php endif ?>
                            </div>
                            <div class="bx d-flex align-items-center mr-3">
                                <?php if (!empty($items->custom_field_3)): ?>
                                    <i class="fa-solid fa-sliders"></i> <?= $items->custom_field_3 ?>
                                <?php else: ?>
                                    <i class="fa-solid fa-sliders"></i> Matic/Manual
                                <?php endif ?>
                            </div>
                        </div>
                        <div class="price-wrap">
                            <div class="top d-flex align-items-center justify-content-between">
                                <div class="txt">Start From</div>
                                <?php if (!empty($items->custom_field_4)): ?>
                                    <div class="avb" style="background: #ffdede; color: #ff0000;"><?= $items->custom_field_4 ?></div>
                                <?php else: ?>
                                    <div class="avb">Available</div>
                                <?php endif ?>
                            </div>
                            <?php if (empty($items->custom_field_5)): ?>
                            <div class="disc">
                                <?php if ($items->price >= 1000): ?>
                                    IDR <?= number_format($items->price + 130000) ?>
                                <?php else: ?>
                                    USD <?= number_format($items->price + 14) ?>
                                <?php endif ?>
                            </div>
                            <?php endif ?>

                            <div class="final">
                                <span>
                                    <?php if ($items->price >= 1000): ?>
                                                IDR <?= number_format($items->price) ?>
                                    <?php else: ?>
                                                USD <?= number_format($items->price) ?>
                                    <?php endif ?>
                                </span>

                            </div>

                            <?php if (!empty($items->custom_field_5)): ?>
                            <div class="final">
                                <span>
                                    IDR <?= $items->custom_field_5 ?>
                                </span>
                                    /1 Month
                            </div>
                            <?php endif ?>
                            <div class="notes mt-md-3 mt-2">
                                <p><b>Notes :</b></p>
                                <p>
                                    For durations exceeding 10 hours, an additional charge of 10% of the rental price will apply.
                                </p>
                                <p>
                                    If pickup and drop in remote area Will be charge minimum 100.000 deppend of location in remote area
                                </p>
                                <?= $items->content ?>
                            </div>
                        </div>
                        <a href="https://api.whatsapp.com/send?phone=<?= $data->social->whatsapp ?>&text=Hello%20admin%20<?= $data->web->site_name ?>%2C%20I%20would%20like%20to%20rent%20a%20car%20%2A<?= $items->title ?>%2A%2C%20can%20you%20assist%20me%3F" class="btn btn-prod">
                            <i class="fab fa-whatsapp mr-2"></i>Booking Now!
                        </a>

                    </div>
                </div>

            </div>
        <?php $i++; endforeach ?>
        </div>
        <div class="d-flex pt-5 justify-content-center align-items-center">
            <a href="<?= $subtitle2 ?>" class="btn btn-contact1">
                View More
            </a>
        </div>
    </div>
 
</section>

<?php elseif ($grid == '4'): ?>

<section class="pad6rem product" id="populer">
    <div class="container-global wow fadeIn" data-wow-duration="2s">

        <div class="title-global text-center">
            <span class="tag-atas">About Us</span>
            <h2>Discover the Real Bali with <span>Expert Local Guides</span></h2>
            <p class="mtmb">With over <strong>20 years of experience</strong>, Yuda Bali Tours is dedicated to offering <strong>curated and immersive travel experiences</strong> that go beyond the usual tourist routes. Our small-group tours take you through Bali&rsquo;s <strong>stunning countryside, traditional villages, and breathtaking landscapes</strong>, providing a <strong>deep cultural connection</strong> with the island.</p>
            <p class="mb-5">We specialize in <strong>eco-friendly and authentic adventures</strong>, ensuring every journey is a blend of <strong>culture, nature, and adventure</strong>. Whether you&rsquo;re cycling through lush rice fields or walking through hidden Balinese villages, we promise an experience that is <strong>memorable, personalized, and truly local</strong>.</p>
        </div>
    
        <div class="row  ss-arrow justify-content-center">
        <?php $i=1; foreach ($item->data as $items): ?>
            <div class="col-sm-4 col-6 px-2 pb-md-4 pb-3">
                <a href="<?= $func->link(ROUTE_PRODUCT_VIEW, $items->slug) ?>" class="">
                    <div class="card h-100">
                        <div class="img w-100">
                            <img src="<?= $items->img_cover_url ?>" alt="<?= $items->title ?>" class="w-100" />
                        </div>
                        
                        <div class="card-body p-md-3 pb-md-4 p-2 pb-3">
                                <div class="rating">
                                    <i class="fa-solid fa-star"></i>
                                    <span>5.0 (All guests are satisfied)</span>
                                </div>
                                <h3 class="card-title">
                                    <?php if (strlen($items->title) > 30): ?>
                                        <?= substr($items->title, 0, 30) . '...' ?>
                                    <?php else: ?>
                                        <?= $items->title ?>
                                    <?php endif ?>
                                </h3>
                                <?php if (!empty($items->price)): ?>
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
                                        / person
                                    </div>
                                <?php endif ?>
                                
                                <div class="info-tag">
                                    <div class="wrap-info d-flex justify-content-center align-item-center">
                                        <span class="day text-right">
                                            <?php if (!empty($items->custom_field_1)): ?>
                                                <i class="fa-solid fa-clock mr-1"></i><?= $items->custom_field_1 ?>
                                            <?php else: ?>
                                                <i class="fa-solid fa-clock mr-1"></i>1 Day
                                            <?php endif ?>
                                        </span>
                                        <span class="people">
                                            <?php if (!empty($items->custom_field_2)): ?>
                                                <i class="fa-solid fa-users mr-1"></i><?= $items->custom_field_2 ?>
                                            <?php else: ?>
                                                <i class="fa-solid fa-users mr-1"></i>Max 5
                                            <?php endif ?>
                                        </span>
                                        <span class="location text-left">
                                            <?php if (!empty($items->custom_field_2)): ?>
                                                <i class="fa-solid fa-location-crosshairs mr-1"></i><?= $items->custom_field_2 ?>
                                            <?php else: ?>
                                                <i class="fa-solid fa-location-crosshairs mr-1"></i>Bali
                                            <?php endif ?>
                                        </span>
                                    </div>
                                </div>
                            </div>

                    </div>
                </a>
            </div>
        <?php $i++; endforeach ?>
        </div>
    </div>
 
</section>

<?php endif ?>