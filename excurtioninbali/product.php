
<section class="section-allpage lazyload" data-bgset="https://jwc.gotra-resources.my.id/web-upload/1741756806-12-03-2025-xVlzZs0fkGurvgEwUMX6HSPiCAh1qa2L.webp">
    <div class="text wow fadeIn" data-wow-duration="2s">
        <h1><?= $data->category_name ?></h1>
        <p>Home - <?= $data->category_name ?></p>
    </div>
</section>

<?php if ($data->category_name == "Bali Watersports"): ?>

<section id="_watersport-root" class="pad6rem product" id="category">
    <div class="container-global wow fadeIn" data-wow-duration="2s" style="z-index: 4; position: relative;">

        <div class="w-100 row mx-0 px-0 mt-md-5 mt-3" style="">
          
          <?php $i=1; foreach ($data->result as $items): ?>
            <div class="col-sm-3 col-6" style="padding-left: 4px; padding-right: 4px;">
              <div class="card mb-3">
                <img src="<?= $items->img_cover_url ?>" alt="<?= $items->title ?>" class="card-img" />
                <div class="card-body px-2" style="padding-bottom: 1rem !important;">
                    <h5 class="card-title text-center"><?= $items->title ?></h5>
                    <p class="price text-center"><span>Rp <?= number_format($items->price) ?> / Person</span></p>
                    <hr />
                    <div class="info">
                    <div class="row w-100 p-0 m-0">
                        <div class="col-12">
                          <div class="box">
                            <div class="icon d-flex justify-content-center align-items-center" style="font-size: clamp(.6rem, 2vw, 1rem)">
                            <i class="fa-solid fa-stopwatch pr-2"></i>Duration <span class="pl-2"><?= $items->custom_field_1 ?></span>
                            </div>
                            <hr />
                            <div class="text-center">
                            <p><b>Note</b></p>
                            <p>Free pick-up and drop-off in Ubud, Seminyak, Nusa Dua, and Canggu.</p>
                            <p>Pick-up in other areas can be arranged upon request.</p>
                            </div>
                          </div>
                        </div>
                    </div>
                    <hr />
                    <div class="row w-100 p-0 m-0">
                        <div class="col-6 px-1 py-2">
                          <a href="https://api.whatsapp.com/send?phone=<?= $data->social->whatsapp ?>&text=Hello%20Admin%20<?= $data->web->site_name ?>%2C%20I%20would%20like%20to%20book%20<?= $items->title ?>.%20Is%20it%20still%20available%3F%20Please%20assist%20me%21" class="btn w-100" style="background: #ffffff; color: #000;">Whatsapp</a>
                        </div>
                        <div class="col-6 px-1 py-2" style="background: var(--colors);">
                          <a href="https://api.whatsapp.com/send?phone=<?= $data->social->whatsapp ?>&text=Hello%20Admin%20<?= $data->web->site_name ?>%2C%20I%20would%20like%20to%20book%20<?= $items->title ?>.%20Is%20it%20still%20available%3F%20Please%20assist%20me%21" class="btn w-100 text-light">Message</a>
                        </div>
                    </div>
                    </div>
                </div>
              </div>
            </div>
            <?php $i++; endforeach; ?>

        </div>
    </div>
</div>

<?php elseif ($data->cat_data->id == "6649"): ?>

<section class="pad6rem car-prod" id="populer">
    <div class="container-global wow fadeIn" data-wow-duration="2s">

        <div class="row justify-content-center">
        <?php $i=1; foreach ($data->result as $items): ?>
            <div class="col-md-3 col-6 pb-4 px-2">

                <div class="card h-100">
                    <img src="<?= $items->img_cover_url ?>" alt="<?= $items->title ?>" />
                    <div class="card-body px-md-4 px-3">
                        <h3 class="card-title"><?= $items->title ?></h3>
                        
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
    </div>
 
</section>

<?php else: ?>

<section class="pad6rem product">
    <div class="container-global wow fadeIn" wow-data-ruation="2s">
        
        <div class="row w-100 mx-0 px-0 ss-arrow justify-content-center">
        <?php $i=1; foreach ($data->result as $items): ?>
            <div class="col-sm-4 col-6 px-2 pb-md-4 pb-3">
                <a href="<?= $func->link(ROUTE_PRODUCT_VIEW, $items->slug) ?>" class="">
                    <div class="card h-100">
                        <div class="img w-100">
                            <img src="<?= $items->img_cover_url ?>" alt="<?= $items->title ?>" class="w-100" />
                        </div>
                        
                        <div class="card-body p-md-4 pb-md-4 p-2 pb-3">
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

                                <p class="d-none d-md-block"><?= $func->trailer($items, 80) ?></p>

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

<?php endif; ?>

<?= $func->load('home/home_why') ?>

<?= $func->load('home/home_faq') ?>