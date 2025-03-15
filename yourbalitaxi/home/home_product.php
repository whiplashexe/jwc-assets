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
    height: 400px;
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
    background: transparent linear-gradient(180deg, rgb(13 28 52 / 0) 0, var(--colors) 100%) 0 0 no-repeat padding-box;
}
.blog-dest .wrap-cate:before {
    background: transparent linear-gradient(180deg, rgb(13 28 52 / 0) 0, #000000 100%) 0 0 no-repeat padding-box;
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
    font-weight: 500;
    font-size: 20px;
    line-height: 35px;
    letter-spacing: 0px;
    margin-bottom: 10px;
}

.wrap-cate2 p {
    color: #f1f1f1;
    font-size: 13px;
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
    background: var(--color2);
    color: white;
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
        bottom: 3%;
        padding: 20px 5px;
        text-align: center;
    }

    .wrap-cate img {
        height: 220px !important;
    }

    .wrap-cate2 h3 {
        font-size: 15px;
        line-height: 30px;
        margin-bottom: 9px;
    }

    .catcat { margin-bottom:0px; }

    .wrap-cate2 p {
        font-size: 13px;
        display: none;
    }

    .wrap-cate2 .price {
        font-size: 18px;
        margin-bottom: 11px;
    }

    .wrap-cate2 .btn-cate {
        padding: 5px 14px;
        font-size: 8px;
    }
}
/* ======== car ========== */
.car .title-carm {
    position: relative;
    height: 60vh;
}
.car .background {
    top: 0;
    left: 0;
    z-index: 1;
    width: 100%;
    height: 100%;
    filter: brightness(.6);
    position: absolute;
    background-size: cover;
    background-position: center;
    background-image: url(https://gotra.sgp1.digitaloceanspaces.com/web-upload/1734787768-product_image-21-12-2024-28CebMUnZDLXgu7I.webp);
}
.car .title-product {
    position: relative;
    z-index: 4;
}
.car .title-product h2 {
    margin-bottom: 20px;
    font-weight: 600;
    text-transform: capitalize;
}
.car .title-product p {
    margin-bottom: 30px;
    font-size: 18px;
}
.car .title-product i {font-size: 2rem; color: #fff; transition: all ease 500ms;}
.car .title-product a:hover i {color: var(--color2)}
@media (max-width : 768px) {
    .car .title-carm {
        height: 50vh;
    }
}


</style>

<?php if ($grid == '1'): ?>

<section class="pad6rem bg-prodct category-wr" id="category" style="background: #00688617">
    <div class="container-global wow fadeIn" data-wow-duration="2s" style="z-index: 4; position: relative;">

        <div class="title-product text-center">
            <span class="tag-atas"><?= $subtitle ?></span>
            <h2><?= $title ?></h2>
        </div>

        <div class="row ss-arrow justify-content-center">

            <?php $i=1; foreach ($data->category as $items): ?>
            <?php if ($items->id != '6230' && $items->id != '6236'): ?>
                
              <div class="col-md-3 col-6 text-md-left px-2 pb-3">
                   <div class="wrap-cate">

                       <img class="img-fluid" loading="lazy" src="<?= $items->image ?>" alt="<?= $items->name ?>">

                       <div class="wrap-cate2">
                            <h3><?= $items->name ?></h3>
                            <p><?= strip_tags($items->content) ?></p>
                            <a class="btn btn-cate" href="<?= $func->link(ROUTE_PRODUCT. $items->slug) ?>">View More <i class="fa-solid fa-chevron-right ml-2"></i></a>
                       </div>
                   </div>
              </div>
            <?php endif ?>
            <?php $i++; endforeach ?>
        </div>

    </div>
</section>

<?php elseif ($grid == '2'): ?>


<!-- CAR PRODUCT -->


<style>
._allvehicles-item-content {
  padding: clamp(1rem, 2vw, 1.6rem);
  display: grid;
  grid-template-columns: 1fr;
  gap: clamp(.4rem, 2vw, .8rem);
}

._allvehicles-item-content * {
  padding: 0;
  margin: 0;
}

._allvehicles-item-content ._allvehicles-content-header {
  font-weight: bold;
  color: var(--colors);
  font-size: clamp(1rem, 2vw, 1.1rem);
}

@media (min-width: 600px) {
  ._allvehicles-item-content {
    grid-template-columns: repeat(2, 1fr);
  }
} 
</style>

<section class="pad6rem car" id="populer" style="background: #00688617">
    <div class="container-global wow fadeIn" data-wow-duration="2s">
        <div class="title-product text-center">
            <span class="tag-atas"><?= $subtitle ?></span>
            <h2><?= $title ?></h2>
        </div>
        <div class="row product-slick ss-arrow justify-content-center" id="car">
            <?php $i=1; foreach ($item->data as $items): ?>

                <?php
                    $html = $items->content;

                    $doc = new DOMDocument();
                    libxml_use_internal_errors(true);
                    $doc->loadHTML($html);
                    libxml_clear_errors();

                    $data = [];

                    foreach ($doc->getElementsByTagName('p') as $p) {
                        $strong = $p->getElementsByTagName('strong')->item(0);
                        $span = $p->getElementsByTagName('span')->item(0);

                        if ($strong && $span) {
                            $data[] = [
                                'title' => trim($strong->textContent),
                                'content' => $doc->saveHTML($span),
                            ];
                        }
                    }

                    $_content = json_decode(json_encode($data));
                    ?>

                <div class="col-md-4 slide-fix">
                    <div class="wrap-mobil-b wrap-mobil-bpt2">
                        <img class="img-fluid" src="<?= $items->img_cover_url ?>" loading="lazy" alt="<?= $items->title ?>">

                        <div class="wraphar wraphar2 text-center">
                            <?php foreach ($data->category as $cate): ?>
                                <?php if ($cate->id == $items->package_id): ?>
                                    <span><?= $cate->name ?></span>
                                <?php endif ?>
                            <?php endforeach ?>
                            
                            <h3><?= $items->title ?></h3>   
                        </div>


                            <div class="_allvehicles-item-content">
                            <?php foreach($_content as $con): ?> 
                                <div class="_allvehicles-content-wrapper">
                                <p class="_allvehicles-content-header"><?= $con->title ?></p>
                                <p class="_allvehicles-content-desc"><?= $con->content?></p>
                                </div>
                            <?php endforeach; ?>
                            </div>

                            <a class="btn btn-momo" href="https://api.whatsapp.com/send?phone=<?= $data->social->whatsapp ?>&text=Hello%20<?= $data->web->site_name ?>%20admin%2C%20I%20would%20like%20to%20rent%20a%20car%20%2A<?= $items->title ?>%2A%2C%20can%20you%20assist%20me%20%3F">Booking via Whatsapp</a>


                        <!--<div class="wrap-mobil-b2 text-center">
                            <?= $items->content ?>

                            <a class="btn btn-momo" href="https://api.whatsapp.com/send?phone=<?= $data->social->whatsapp ?>&text=Hello%20<?= $data->web->site_name ?>%20admin%2C%20I%20would%20like%20to%20rent%20a%20car%20%2A<?= $items->title ?>%2A%2C%20can%20you%20assist%20me%20%3F">Booking via Whatsapp</a>

                        </div>-->

                    </div>
                </div>

               
            <?php $i++; endforeach ?>
        </div>

    </div>
</section>

<?php elseif ($grid == '3'): ?>


<section class="pad6rem car-prod" id="populer">
    <div class="container-global wow fadeIn" data-wow-duration="2s">

        <div class="title-product text-center">
            <span class="tag-atas"><?= $subtitle ?></span>
            <h2><?= $title ?></h2>
        </div>

        <div class="row ss-arrow justify-content-start">
            <?php $i=1; sort($item->data); foreach ($item->data as $items): ?>
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
                                            <i class="fa-solid fa-sliders"></i> Matic
                                        <?php endif ?>
                                    </div>
                                </div>
                                <div class="price-wrap">
                                    <div class="top d-flex align-items-center justify-content-between">
                                        <div class="txt">Mulai Dari</div>
                                        <?php if (!empty($items->custom_field_4)): ?>
                                            <div class="avb" style="background: #ffdede; color: #ff0000;"><?= $items->custom_field_4 ?></div>
                                        <?php else: ?>
                                            <div class="avb">Tersedia</div>
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
                                        /24 Hours
                                    </div>

                                    <?php if (!empty($items->custom_field_5)): ?>
                                    <div class="final">
                                        <span>
                                            IDR <?= $items->custom_field_5 ?>
                                        </span>
                                        /1 Month
                                    </div>
                                    <?php endif ?>
                                </div>
                                <a href="https://api.whatsapp.com/send?phone=<?= $data->social->whatsapp ?>&text=Halo%20admin%20<?= $data->web->site_name ?>%2C%20Saya%20ingin%20menyewa%20mobil%20%2A<?= $items->title ?>%2A%2C%20apakah%20bisa%20di%20bantu%20%3F" class="btn btn-prod"><i class="fab fa-whatsapp mr-2"></i>Pesan Sekarang!</a>
                            </div>
                        </div>
                </div>
            <?php $i++; endforeach ?>
        </div>
        <div class="d-flex pt-5 justify-content-center align-items-center">
            <a href="<?= $subtitle2 ?>" class="btn btn-contact1">
                Lihat Daftar Mobil
            </a>
        </div>

    </div>
</section>

<?php elseif ($grid == '4'): ?>

<section class="pad6rem simcard" id="populer" >
    <div class="background" ></div>
    <div class="container-global px-md-5 px-3 wow fadeIn" data-wow-duration="2s">

        <div class="title-product text-center">
            <span class="tag-atas "><?= $subtitle ?></span>
            <h2 class=""><?= $title ?></h2>
        </div>

        <div class="slide-sim ss-arrow justify-content-start">
            <?php $i=1; sort($item->data); foreach ($item->data as $items): ?>
                <div class=" px-2 h-100">
                    <div class="card h-100">
                        <div class="head-card">
                            <div class="head">
                                <p class="cate-prd">Bali eSIM Plans</p>
                                <h3><?= $items->title ?></h3>
                            </div>
                        </div>
                        <div class="feature pt-0">
                            <div class="icon mx-auto mb-3">
                                <i class="fa-solid fa-wifi"></i>
                            </div>
                            <?= $items->content ?>
                        </div>
                        <div class="price">
                            <span>
                                <?php if ($items->price >= 10000): ?>
                                    IDR <?= number_format($items->price) ?>
                                <?php else: ?>
                                    USD <?= number_format($items->price) ?>
                                <?php endif ?>
                            </span>
                            | <?= $items->custom_field_1 ?>
                        </div>
                        <div class="button d-flex align-items-center justify-content-center py-3 mb-3" style="flex-wrap: wrap;">
                            <a href="<?= $func->link(ROUTE_PRODUCT_VIEW, $items->slug) ?>" class="btn btn-prd mr-1 mb-1">Buy Now!</a>
                            <a href="<?= $func->link(ROUTE_PRODUCT_VIEW, $items->slug) ?>" class="btn btn-prd btn-det mb-1">View Detail</a>
                        </div>
                    </div>
                </div>

            <?php $i++; endforeach ?>
        </div>


    </div>
</section>

<?php elseif ($grid == '6'): ?>

<section class="pad6rem simcard" id="populer" style="background: #fff7f8;">
    <div class="background" ></div>
    <div class="container-global px-md-5 px-3 wow fadeIn" data-wow-duration="2s">

        <div class="title-product text-center">
            <span class="tag-atas "><?= $subtitle ?></span>
            <h2 class=""><?= $title ?></h2>
        </div>

        <div class="slide-sim ss-arrow justify-content-start">
            <?php $i=1; sort($item->data); foreach ($item->data as $items): ?>
                <div class=" px-2 h-100">
                    <div class="card h-100">
                        <div class="head-card">
                            <div class="head">
                                <p class="cate-prd">Bali eSIM Top Up</p>
                                <h3><?= $items->title ?></h3>
                            </div>
                        </div>
                        <div class="feature pt-0">
                            <div class="icon mx-auto mb-3">
                                <i class="fa-solid fa-wifi"></i>
                            </div>
                            <?= $items->content ?>
                        </div>
                        <div class="price">
                            <span>
                                <?php if ($items->price >= 10000): ?>
                                    IDR <?= number_format($items->price) ?>
                                <?php else: ?>
                                    USD <?= number_format($items->price) ?>
                                <?php endif ?>
                            </span>
                            | <?= $items->custom_field_1 ?>
                        </div>
                        <div class="button d-flex align-items-center justify-content-center py-3 mb-3" style="flex-wrap: wrap;">
                            <a href="<?= $func->link(ROUTE_PRODUCT_VIEW, $items->slug) ?>" class="btn btn-prd mr-1 mb-1">Buy Now!</a>
                            <a href="<?= $func->link(ROUTE_PRODUCT_VIEW, $items->slug) ?>" class="btn btn-prd btn-det mb-1">View Detail</a>
                        </div>
                    </div>
                </div>

            <?php $i++; endforeach ?>
        </div>


    </div>
</section>

<?php endif ?>