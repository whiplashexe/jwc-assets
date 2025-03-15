 <?php
$title = $item->setting->title;
$subtitle = $item->setting->subtitle;
$subtitle2 = $item->setting->subtitle2;
$grid = $item->setting->grid;
$route = ROUTE_PRODUCT_VIEW;
?>

<style type="text/css">

/* Cate */

* { scroll-behavior:smooth; }

.wrap-cate {
    font-family: var(--primtext);
    position: relative;
    border-radius: 0px;
    overflow: hidden;
    margin-bottom: 3px;
    transition: all ease 500ms;
    background: black;
    border-radius: 20px;
    /* box-shadow: 2px 4px 20px #00000047; */
}

.wrap-cate img {
    height: 450px;
    width: 100%;
    object-fit: cover;
    transition: all ease 500ms !important;
}

.wrap-cate:before {
    position: absolute;
    content: '';
    top: 20%;
    left: 0;
    transition: all ease 500ms;
    right: 0;
    bottom: 0;
    z-index: 1;
    opacity: .8;
    background: transparent linear-gradient(180deg, rgb(13 28 52 / 0) 0, var(--colors) 100%) 0 0 no-repeat padding-box;
}

.wrap-cate2 {
    position: absolute;
    z-index: 2;
    left: 0;
    right: 0;
    bottom: 8%;
    padding: 0px 35px;
}

.wrap-cate2 h3 {
    color: white;
    text-transform: capitalize;
    font-weight: 600;
    font-size: 20px;
    line-height: 35px;
    letter-spacing: 0px;
    margin-bottom: 10px;
}

.wrap-cate2 p {
    color: #f1f1f1;
    font-size: 15px;
    line-height: 25px;
    font-weight: 400;
    padding: 0px;
    margin: 0;
    margin-bottom: 20px;
    font-family: var(--primtext);
}

.wrap-cate2 .price {
    font-size: 21px;
    margin-bottom: 20px;
}

.wrap-cate2 .btn-cate {
    background: white;
    color: var(--color);
    border: 1px solid;
    text-transform: uppercase;
    border-radius: 100px;
    padding: 10px 28px;
    font-size: 11px;
    letter-spacing: 1px;
    font-weight: 600;
    transition: all ease 500ms;
}

.wrap-cate2 .btn-cate:hover {
    transition: all ease 500ms;
    background: #111;
    color: #fff;
    border-color: #111;
}

.wrap-cate:hover img {
    transform: scale(1.1);
}

@media (min-width: 768px) {

    .rowdes { margin:0; }
}

@media (max-width : 768px) {
    .col-cate { padding:0px 5px; }

    .wrap-cate { margin-bottom: 5px; }

    .wrap-cate2 {
        bottom: 4%;
        padding: 10px;
        text-align: center;
    }

    .wrap-cate img {
        height: 220px !important;
    }

    .wrap-cate2 h3 {
        font-size: 13px;
        line-height: 30px;
        margin-bottom: 7px;
    }

    .catcat { margin-bottom:0px; }

    .wrap-cate2 p {
        display: none;
    }

    .wrap-cate2 .price {
        font-size: 18px;
        margin-bottom: 11px;
    }

   .wrap-cate2 .btn-cate {
        padding: 5px 15px;
        font-size: 7px;
    }

    .wrap-cate:before {
        background: transparent linear-gradient(180deg, rgb(13 28 52 / 0) 0, #000000 100%) 0 0 no-repeat padding-box;
    }
}
.bg-prodct {
    background-color: #d5deff35;
}

</style>

<?php if ($grid == '1'): ?>

<section class="pad6rem">
    <div class="container-global wow fadeIn" data-wow-duration="2s" style="z-index: 4; position: relative;">

        <div class="title-global text-center">
            <span class="tag-atas"><?= $subtitle ?></span>
            <h2><?= $title ?></h2>
        </div>

        <div class="product-home ss-arrow">

            <?php $i=1; foreach ($data->category as $items): ?>
            
                <div class="col-md-3 col-6 text-md-left px-2">
                    <div class="wrap-cate mb-4">

                        <img class="img-fluid" loading="lazy" src="<?= $items->image ?>" alt="<?= $items->name ?>">

                        <div class="wrap-cate2">
                                <h3><?= $items->name ?></h3>
                                <p><?= $items->custom_field_1 ?></p>
                                <a class="btn btn-cate" href="<?= $func->link(ROUTE_PRODUCT. $items->slug) ?>">View More <i class="fa-solid fa-chevron-right ml-2"></i></a>
                        </div>
                    </div>
                </div>

            <?php $i++; endforeach ?>

        </div>

    </div>
</section>

<?php elseif ($grid == '2'): ?>

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

<?php elseif ($grid == '3'): ?>

<section class="pad6rem car-prod" id="populer" style="background: #fafff4;">
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
                        
                        <a href="<?= $func->link(ROUTE_PRODUCT_VIEW, $items->slug) ?>" class="btn btn-prod">
                            Booking Now!
                        </a>
                        <!-- <a href="https://api.whatsapp.com/send?phone=<?= $data->social->whatsapp ?>&text=Hello%20admin%20<?= $data->web->site_name ?>%2C%20I%20would%20like%20to%20rent%20a%20car%20%2A<?= $items->title ?>%2A%2C%20can%20you%20assist%20me%3F" class="btn btn-prod">
                            <i class="fab fa-whatsapp mr-2"></i>Booking Now!
                        </a> -->

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