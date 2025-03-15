<style type="text/css">
    #header.header-no-min-height .header-body {
        background: var(--colors)!important;
    }
    .btn-book-atas {
        background: transparent;
        color: #fff;
    }
    .btn-book-atas:hover {
        background: #fff;
        color: var(--colors);
    }

    .desc-cate-prd .logo img {
        height: 70px;
        border-radius: 50%;
    }
    .desc-cate-prd .logo h2 {
        font-family: var(--primtext);
        font-size: 30px;
        line-height: 48px;
        font-weight: 600;
        color: var(--colors);
        letter-spacing: .5px;
    }
    .desc-cate-prd  p {
        font-family: var(--primtext);
        font-size: 15px;
        line-height: 28px;
        margin-bottom: 1.3rem;
        letter-spacing: .3px;
        max-width: 1000px;
        text-align: center;
        margin-left: auto;
        margin-right: auto;
    }
    
    @media (max-width: 768px) {
        .desc-cate-prd .logo img {
            height: 60px;
            border-radius: 50%;
        }
        .desc-cate-prd .logo h2 {
            font-size: 25px;
            line-height: 38px;
        }
        .desc-cate-prd p {
            font-size: 13px;
            line-height: 25px;
        }
    }
/* ===================================== */
/* ===================================== */
/* ===================================== */



</style>

<section class="section-allpage lazyload" data-bgset="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1741847252-13-03-2025-n956XKrvGfpsHYbRaSCMq8UwitJzPd2j.webp">
    <div class="text wow fadeIn" data-wow-duration="2s">
        <div class="text-center w-100">
            <h1><?= $data->category_name ?></h1>
            <p>Home - <?= $data->category_name ?></p>
        </div>
    </div> 
</section>

<?php if ($data->cat_data->id == '6645'): ?>
    <section class="pad6rem car-prod" id="product">
    <div class="container-global wow fadeIn" data-wow-duration="2s">

        <div class="row mt-4 justify-content-center">
        <?php $i=1; foreach ($data->result as $items): ?>
            <div class="col-md-3 col-6 pb-4 px-2">

                <div class="card h-100">
                    <img src="<?= $items->img_cover_url ?>" alt="<?= $items->title ?>" />
                    <div class="card-body px-md-4 px-3">
                        <h3 class="card-title"><?= $items->title ?></h3>
                        <!--<div class="info d-flex">
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
                        </div>-->
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
                            <div class="notes mt-md-3 mt-2 ">
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
                        
                        <a href="<?= $func->link(ROUTE_PRODUCT_VIEW, $items->slug) ?>" class="btn btn-prod">
                            Booking Now!
                        </a>

                        <!--<a href="https://api.whatsapp.com/send?phone=<?= $data->social->whatsapp ?>&text=Hello%20admin%20<?= $data->web->site_name ?>%2C%20I%20would%20like%20to%20rent%20a%20car%20%2A<?= $items->title ?>%2A%2C%20can%20you%20assist%20me%3F" class="btn btn-prod">
                            <i class="fab fa-whatsapp mr-2"></i>Booking Now!
                        </a>-->

                    </div>
                </div>

            </div>
        <?php $i++; endforeach ?>

        </div>

    </div>
</section>

<?php else: ?>

<section class="pad6rem product" id="product">
    <div class="container-global wow fadeIn" data-wow-duration="2s">

        <div class="row mt-4 justify-content-center">

            <?php $i=1; foreach ($data->result as $items): ?>
                <div class="col-sm-4 col-6 px-2 pb-md-4 pb-3">
                    <a href="<?= $func->link(ROUTE_PRODUCT_VIEW, $items->slug) ?>" class="">
                        <div class="card h-100">
                            <div class="img w-100">
                                <img src="<?= $items->img_cover_url ?>" alt="<?= $items->title ?>" class="w-100" />
                            </div>
                            
                            <div class="card-body p-md-3 pb-md-4 p-2 pb-3">
                                    <div class="rating">
                                        <i class="fa-solid fa-star"></i>
                                        <span>51.0 (All guests are satisfied)</span>
                                    </div>
                                    <h3 class="card-title">
                                        <?php if (strlen($items->title) > 40): ?>
                                            <?= substr($items->title, 0, 40) . '...' ?>
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
<?php endif ?>

    <?= $func->load('home/home_why') ?>

    <?= $func->load('home/home_faq') ?>

