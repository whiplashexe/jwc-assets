 <?php
$title = $item->setting->title;
$subtitle = $item->setting->subtitle;
$subtitle_2 = $item->setting->subtitle2;
$grid = $item->setting->grid;
$route = ROUTE_PRODUCT_VIEW;
?>
<style>


/* Cate */

* { scroll-behavior:smooth; }

</style>

<style type="text/css">

* { scroll-behavior:smooth; }

.smooth-slide {
    position: relative;
    bottom: 100px;
}

@media (max-width: 768px) {
    .col-tour {
        position: relative;
        overflow-y: scroll;
        z-index: 1;
    }
}

.wrap-cate {
    font-family: var(--primtext);
    text-align: center;
    position: relative;
    border-radius: 10px;
    overflow: hidden;
    background: black;
    margin-bottom: 20px;
    transition: all ease 500ms;
}
.wrap-cate img {
    height: 300px;
    width: 100%;
    object-fit: cover;
    opacity: 0.7;
    transition: all ease 500ms;
}

.wrap-cate2 {
    position: absolute;
    z-index: 1;
    left: 0;
    right: 0;
    top: 38%;
}
.wrap-cate2 h3 {
    color: white;
    text-transform: capitalize;
    font-weight: 600;
    font-size: 22px;
    letter-spacing: 0px;
    margin-bottom: 25px;
}
.wrap-cate2 .btn-cate {
    background: transparent;
    color: #fff;
    border: 1px solid;
    border-radius: 100px;
    padding: 7px 25px;
    font-size: 13px;
    font-weight: 500;
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
    opacity: 0.5;
}

@media (max-width : 768px) {
    .col-cate { padding:0px 5px; }

    .wrap-cate { margin-bottom: 5px; }

    .wrap-cate img { height: 185px; opacity:0.7; }

    .wrap-cate2 { top:37%; }

    .wrap-cate2 h3 {
        font-size: 16px;;
        margin-bottom: 14px;
    }

    .wrap-cate2 .btn-cate {;
        padding: 5px 15px;
        font-size: 11px;
    }
}

/* Tabel Watersport */

.table-mobil th {
    padding: 20px 20px;
    background: var(--colors);
    color: white;
    font-family: var(--primtext);
    letter-spacing: 0.3px;
}

.table-mobil td {
    padding: 15px;
    font-family: var(--primtext);
    color: #333;
    font-size: 14px;
}

.table-mobil table {
    overflow: hidden;
    text-align: center;
    border-radius: 5px;
    box-shadow: 0px 2px 20px 0px #0000001f;
    background: white;
}

@media (max-width: 768px) {
    .table-mobil th {
        padding: 15px 5px;
        background: var(--colors);
        color: white;
        font-family: var(--primtext);
        letter-spacing: 0.3px;
        font-size: 10px;
    }

    .table-mobil td {
        padding: 15px 2px;
        font-family: var(--primtext);
        color: #333;
        font-size: 10px;
    }
}

.bg-paralax {
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    padding: 80px 0px;
    position: relative;
    background-color: #fff;
}

/* Button Display 2  */
.btn-v-all {
    background: var(--color2);
    color: white;
    font-family: var(--primtext);
    letter-spacing: 00.5px;
    font-weight: 600;
    padding: 10px 30px;
    text-transform: capitalize;
    font-size: 16px;
    transition: all ease 500ms;
}

.btn-v-all:hover {
    background: black;
    color: white;
}

#_watersport-root ._watersport-card-wrapper {
  display: grid !important;
  grid-template-columns: repeat(2, 1fr);
  gap: .8rem;
}

@media (min-width: 768px) {
  #_watersport-root ._watersport-card-wrapper {
    grid-template-columns: repeat(4, 1fr);
  }
}


</style>





<?php if ($grid == '1'): ?>

<section class="pad6rem product" id="category">
    <div class="container-global wow fadeIn" data-wow-duration="2s" style="z-index: 4; position: relative;">

        <div class="title-general text-center">
            <span class="tag-ats"><?= $subtitle ?></span>
            <h2 class="title"><?= $title ?></h2>
        </div>

        <div class="row w-100 mx-0 px-0 mt-md-5 mt-3 ss-arrow justify-content-center product-slick">
        <?php $i=1; foreach ($item->data as $items): ?>
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

<?php elseif($grid == '2'): ?>



<section id="_watersport-root" class="pad6rem product" id="category">
    <div class="container-global wow fadeIn" data-wow-duration="2s" style="z-index: 4; position: relative;">

        <div class="title-general text-center">
            <span class="tag-ats"><?= $subtitle ?></span>
            <h2 class="title"><?= $title ?></h2>
        </div>

        <div class="w-100 row mx-0 px-0 mt-md-5 mt-3" style="">
          
          <?php $i=1; foreach ($item->data as $items): ?>
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


<?php endif ?>