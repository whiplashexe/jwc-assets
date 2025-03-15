<?php
$title = $item->setting->title;
$subtitle = $item->setting->subtitle;
$grid = $item->setting->grid;
$route = ROUTE_PRODUCT_VIEW;
?>

<style>
    .owl-stage-outer.owl-height {
        height: auto;
    }

    @media (max-width: 768px) {
        .slide-fixed {
            position: relative;
            overflow: scroll;
            z-index: 5;
        }

        .pro-img img {
            transition: .5s ease;
            min-height: 230px;
            max-height: 230px;
        }
    }

    /*Product Baru 1*/
    .title-pro-baru {
        font-family: lato;
        font-weight: 600;
        font-size: 25px;
        text-transform: capitalize;
        letter-spacing: 1px;
        margin-bottom: 5px;
    }

    .wrap-pro {
        background: white;
        box-shadow: 2px 1px 5px #000000a1;
    }

    .title-propro {
        font-size: 17px;
        text-transform: capitalize;
        font-family: lato;
        color: #2d3e52;
        font-weight: 600;
        margin-bottom: 0px;
    }

    .wrap-content {
        padding: 0px 13px;
    }

    .img-thumbnail.img-thumbnail-no-borders:hover {
        transform: scale(1.1);
        transition: 0.8s ease;
    }
    .img-thumbnail.img-thumbnail-no-borders {
        transition: 0.8s ease;
    }

    .img-thumbnail {
        border-radius: unset;
    }

    .title-avg {
        margin-bottom: 0px;
        color: #2d3e52;
        font-size: 12px;
        font-family: lato;
    }

    @media (min-width: 768px) {
        .img-b {
            width: 100%;
            height: 190px;
        }

        .display-ba {
            padding: 0px 5px;
        }
    }

    @media (max-width: 768px) {
        .img-b {
            width: 100%;
            height: auto;
        }
    }

    .icon-s {
        font-size: 13px;
        color: #fdb714;
    }

    .style-price {
        font-size: 14px;
        color: #7db921;
        font-weight: 600;
        font-family: lato;
        margin-bottom: 0px;
    }

    .content-pro-baru {
        font-family: lato;
        color: #838383;
        margin-bottom: 0px;
        text-align: justify;
    }

    .btn-baru1  {
        background: #01b7f2;
        padding: 5px 35px;
        color: white;
        font-weight: 600;
        font-size: 11px;
        text-transform: uppercase;
        transition: 0.5s ease;
        border-radius: unset;
    }

    .btn-baru1:hover {
        transition: 0.5s ease;
        background: #07a5d8;
        color: white;
    }

    .btn-baru2  {
        background: #fdb714;
        padding: 5px 30px;
        color: white;
        font-weight: 600;
        font-size: 11px;
        text-transform: uppercase;
        transition: 0.5s ease;
        border-radius: unset;
    }

    .btn-baru2:hover {
        transition: 0.5s ease;
        background: #e9b02b;
        color: white;
    }
    /*END*/

    /*Product Baru 2*/
    .title-acti {
        text-align: center;
        font-family: lato;
        color: #2d3e52;
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 5px;
    }

    @media (max-width: 768px) {
        .slidefix {
            position: relative;
            overflow-y: scroll;
            z-index: 99;
        }
    }

</style>

<?php if ($grid == '1'): ?>
    
<section style="background-color: #f4f4f4" class="pt-5">
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="mb-0 title-cat"><?= $title ?></h1>
                <h5 class="mb-0 subtitle-cat none-768">Everything you need to dream, plan and book your next getaway</h5>
            </div>
            <div class="col-4 position-relative"><a href="<?= base_url() ?>category/all" class="btn btn-outline-primary custom">See More</a></div>
        </div>
        <div class="row">
        <?php 
            $hitung = count($data->category);
            $hitung2 = $hitung % 2;
            if ($hitung == '5') {
                $hasil = $hitung2 + 2;

            } elseif ($hitung == '7') {
                $hasil = $hitung2 + 3;

            }
         ?>

        <?php $i=1; foreach ($data->category as $items): ?>

        <?php if ($hitung == '5') : ?>
            <?php if ($i >= $hasil): ?>
            <div class="col-md-4 pt-3 pb-2">
                <a href="<?= $func->link(ROUTE_PRODUCT,$items->slug); ?>">
                    <div class="card-content position-relative">
                        <div class="card-background" style="background-image: url('<?= $items->image ?>');">
                        </div>
                        <div class="card-title-content text-center">
                            <h3 class="card-title"><?= $items->name; ?></h3>
                        </div>
                    <div class="card-overlay"></div>
                    </div>
                </a>
            </div>

            <?php else: ?>
            <div class="col-md-6 pt-3 pb-2">
                <a href="<?= $func->link(ROUTE_PRODUCT,$items->slug); ?>">
                    <div class="card-content position-relative">
                        <div class="card-background" style="background-image: url('<?= $items->image ?>');">
                        </div>
                        <div class="card-title-content text-center">
                            <h3 class="card-title"><?= $items->name; ?></h3>
                        </div>
                    <div class="card-overlay"></div>
                    </div>
                </a>
            </div>
            <?php endif ?>

        <?php elseif ($hitung == '7') : ?>
            <?php if ($i >= $hasil): ?>
            <div class="col-md-3 pt-3 pb-2">
                <a href="<?= $func->link(ROUTE_PRODUCT,$items->slug); ?>">
                    <div class="card-content position-relative">
                        <div class="card-background" style="background-image: url('<?= $items->image ?>');">
                        </div>
                        <div class="card-title-content text-center">
                            <h3 class="card-title"><?= $items->name; ?></h3>
                        </div>
                    <div class="card-overlay"></div>
                    </div>
                </a>
            </div>

            <?php else: ?>
            <div class="col-md-4 pt-3 pb-2">
                <a href="<?= $func->link(ROUTE_PRODUCT,$items->slug); ?>">
                    <div class="card-content position-relative">
                        <div class="card-background" style="background-image: url('<?= $items->image ?>');">
                        </div>
                        <div class="card-title-content text-center">
                            <h3 class="card-title"><?= $items->name; ?></h3>
                        </div>
                    <div class="card-overlay"></div>
                    </div>
                </a>
            </div>
            <?php endif ?>

        <?php elseif ($hitung == '6' || $hitung == '3') : ?>
            <div class="col-md-4 pt-3 pb-2">
                <a href="<?= $func->link(ROUTE_PRODUCT,$items->slug); ?>">
                    <div class="card-content position-relative">
                        <div class="card-background" style="background-image: url('<?= $items->image ?>');">
                        </div>
                        <div class="card-title-content text-center">
                            <h3 class="card-title"><?= $items->name; ?></h3>
                        </div>
                    <div class="card-overlay"></div>
                    </div>
                </a>
            </div>

        <?php elseif ($hitung == '4' || $hitung == '8') : ?>
            <div class="col-md-3 pt-3 pb-2">
                <a href="<?= $func->link(ROUTE_PRODUCT,$items->slug); ?>">
                    <div class="card-content position-relative">
                        <div class="card-background" style="background-image: url('<?= $items->image ?>');">
                        </div>
                        <div class="card-title-content text-center">
                            <h3 class="card-title"><?= $items->name; ?></h3>
                        </div>
                    <div class="card-overlay"></div>
                    </div>
                </a>
            </div>

        <?php elseif ($hitung == '2') : ?>
            <div class="col-md-6 pt-3 pb-2">
                <a href="<?= $func->link(ROUTE_PRODUCT,$items->slug); ?>">
                    <div class="card-content position-relative">
                        <div class="card-background" style="background-image: url('<?= $items->image ?>');">
                        </div>
                        <div class="card-title-content text-center">
                            <h3 class="card-title"><?= $items->name; ?></h3>
                        </div>
                    <div class="card-overlay"></div>
                    </div>
                </a>
            </div>

        <?php else: ?>

            <div class="col-md-3 pt-3 pb-2">
                <a href="<?= $func->link(ROUTE_PRODUCT,$items->slug); ?>">
                    <div class="card-content position-relative">
                        <div class="card-background" style="background-image: url('<?= $items->image ?>');">
                        </div>
                        <div class="card-title-content text-center">
                            <h3 class="card-title"><?= $items->name; ?></h3>
                        </div>
                    <div class="card-overlay"></div>
                    </div>
                </a>
            </div>

        <?php endif ?>

        <?php $i++; endforeach ?>

        </div>
    </div>
</section>
<?php elseif ( $grid == 2 ): ?>
<section style="background-color: #f4f4f4; position: relative;" class="pt-3">
    <div class="container">
        <div class="row mb-2 py-3">
            <div class="col-8">
                <h1 class="mb-0 title-cat"><?= $title; ?></h1>
                <h5 class="mb-0 subtitle-cat none-768">Favourite experiences booked by travellers</h5>
            </div>
            <div class="col-4 position-relative"><a href=<?= base_url().'tag/'.str_replace(' ', '-', $item->setting->criteria) ?> class="btn btn-outline-primary custom">See More</a></div>
        </div>

        <div class="row">
            <div class="owl-carousel owl-theme nav-inside nav-inside-edge nav-squared nav-with-transparency nav-dark" data-plugin-options="{'items': 4, 'margin': 10, 'loop': false, 'nav': false, 'dots': false,'autoplay':false, 'autoplayTimeout': 7000, 'autoHeight': true}">
            
            <?php  foreach ($item->data as $item) : ?>
            <div class="col-md-12 slide-fixed pt-3 pb-2">
                <div class="pro-contain">
                    <div class="pro-img">
                        <img src="<?= $item->img_cover_url; ?>" alt="">
                    </div>
                    <div class="pro-body">
                        <h3 class="pro-title mb-0"><a href="<?= $func->link($route,$item->slug); ?>"><?= $item->title; ?></a></h3>
                        <?php if ($item->price != 0 && $item->price != ''): ?>
                        <div class="row">
                            <div class="col-6 position-relative">
                                <?php foreach ($data->category as $items): ?>
                                <?php if ( $items->id == $item->package_id): ?>
                                <div class="pro-posisi" style="position: relative;"><?= $items->name ?></div>
                                <?php endif ?>
                                <?php endforeach ?>
                            </div>
                            <div class="col-6">
                                <p class="mb-0 text-right" style="line-height: 10px">From</p>
                                <p class="mb-0 text-right pro-price"><span>IDR <?= number_format($item->price,0,0,'.'); ?></p>
                            </div>
                        </div>
                        <?php endif ?>
                        <?php if ($item->price == 0): ?>
                            <p><?= $func->trailer($item, 100); ?></p>
                        <?php endif ?>
                    </div>
                </div>
            </div>
            <?php endforeach ?>

        </div>
        </div>
    </div>
    <div class="slide-fixed"></div>
</section>
<?php elseif ( $grid == 3 ): ?>

<section class="py-3">
    <div class="container">
        <h3 class="title-pro-baru text-left"><?= $title ?></h3>
        <h3 class="mb-0 subtitle-cat" style="font-family: lato;font-weight: 600;">Favourite experiences booked by travellers</h3>

        <div class="row mt-4">
        <?php foreach ($item->data as $items) : ?>
            <div class="col-md-3 mb-4 display-ba">
                <div class="wrap-pro">
                     <div class="portfolio-item" style="overflow: hidden;">
                         <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href="<?= $items->img_cover_url ?>" data-plugin-options="{'type':'image'}">
                             <img class="img-fluid img-b" src="<?= $items->img_cover_url ?>" alt="<?= $items->title ?>">
                         </a>
                     </div>
                <div class="wrap-content mt-2">

                    <?php if ($items->price != 0 && $items->price != ''): ?>
                     <div class="row">
                         <div class="col-7" style="padding-right: 0;">
                             <h3 class="title-propro"><?= $items->title ?></h3>
                         </div>

                         <div class="col-5" style="padding-left: 0;">
                             <p class="text-right title-avg">AVG/PERSON</p>
                         </div>
                     </div>

                     <div class="row">
                         <div class="col-5" style="padding-right: 0;">
                            <i class="fas fa-star icon-s"></i>
                            <i class="fas fa-star icon-s"></i>
                            <i class="fas fa-star icon-s"></i>
                            <i class="fas fa-star icon-s"></i>
                            <i class="fas fa-star icon-s"></i>
                         </div>
                    
                         <div class="col-7" style="padding-left: 0px;">
                            <?php if (isset($_GET['idr']) && $_GET['idr'] == 1): ?>
                                <?php $hasilcon = $items->price * 14000; ?>

                             <p class="style-price text-right">IDR <?= number_format($hasilcon,0,0,'.'); ?></p>

                             <?php elseif (isset($_GET['usd']) && $_GET['usd'] == 1): ?>

                                <p class="style-price text-right">USD <?= number_format($items->price,0,0,'.'); ?></p>
                             <?php else: ?>
                                <p class="style-price text-right"><?= $func->price($items, 'usd') ?></p>
                            <?php endif ?>
                         </div>

                     </div>

                    <?php else: ?>

                    <div class="row">
                         <div class="col-12" style="padding-right: 5px;">
                             <h3 class="title-propro"><?= $items->title ?></h3>
                         </div>

                     </div>

                     <div class="row">
                         <div class="col-5" style="padding-right: 0;">
                            <i class="fas fa-star icon-s"></i>
                            <i class="fas fa-star icon-s"></i>
                            <i class="fas fa-star icon-s"></i>
                            <i class="fas fa-star icon-s"></i>
                            <i class="fas fa-star icon-s"></i>
                         </div>

                     </div>
                    <?php endif ?>

                         <p class="content-pro-baru"><?= $func->trailer($items, 150) ?></p>
                        
                        <div class="row justify-content-center py-3">
                            <div class="col-6">
                                <a class="btn btn-baru1" href="<?= $func->link(ROUTE_PRODUCT_VIEW,$items->slug); ?>">Detail</a>
                            </div>

                            <div class="col-6 text-right">
                                 <a class="btn btn-baru2" href="<?= $func->dm_whatsapp(); ?>">Booking</a>
                            </div>
                        </div>

                </div>

                </div>
            </div>

            <?php $tampung = $items->package_id; ?>
        <?php endforeach ?>
        </div>

        <div class="text-center my-3">
            <?php foreach ($data->category as $cate): ?>
                <?php if ($tampung == $cate->id): ?>
                    <a class="btn btn-baru1" style="border-radius: 4px; padding: 10px 30px;" href="<?= base_url(); ?>category/<?= $cate->slug ?>">View All</a>
                <?php endif ?>
            <?php endforeach ?>
        </div>
    </div>
</section>

<?php elseif ( $grid == 4 ): ?>
    
<section class="py-4" style="background: white;">
<div class="container">
        <h3 class="title-pro-baru text-left"><?= $title ?></h3>
        <h3 class="mb-0 subtitle-cat" style="font-family: lato;font-weight: 600;">Favourite experiences booked by travellers</h3>

    <div class="owl-carousel owl-theme show-nav-hover mt-3" data-plugin-options="{'items': 5, 'margin': 10, 'loop': false, 'nav': true, 'dots': false, 'autoplay':true, 'autoplayTimeout':7000}">
    <?php foreach ($item->data as $items) : ?>
        <div class="col-md-12 mb-3" style="padding: 0;">
            <div class="slidefix">

            <div class="portfolio-item" style="overflow: hidden;">
                  <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href="<?= $items->img_cover_url ?>" data-plugin-options="{'type':'image'}">
                      <img class="img-fluid img-b" src="<?= $items->img_cover_url ?>" alt="<?= $items->title ?>">
                  </a>
              </div>

              <div class="icon mt-3 text-center mb-1">
                <i class="fas fa-star icon-s"></i>
                <i class="fas fa-star icon-s"></i>
                <i class="fas fa-star icon-s"></i>
                <i class="fas fa-star icon-s"></i>
                <i class="fas fa-star icon-s"></i>
              </div>

              <p class="title-acti"><?= $items->title ?></p>
            <?php if ($items->price != 0 && $items->price != ''): ?>
                <?php if (isset($_GET['idr']) && $_GET['idr'] == 1): ?>
                    <?php $hasilcon = $items->price * 14000; ?>

                 <p class="style-price text-center" style="font-size: 17px;">IDR <?= number_format($hasilcon,0,0,'.'); ?></p>

                 <?php elseif (isset($_GET['usd']) && $_GET['usd'] == 1): ?>

                    <p class="style-price text-center" style="font-size: 17px;">USD <?= number_format($items->price,0,0,'.'); ?></p>
                 <?php else: ?>
                    <p class="style-price text-center" style="font-size: 17px;"><?= $func->price($items, 'usd') ?></p>
                <?php endif ?>
            <?php endif ?>
            <div class="text-center mt-3">  
                <a class="btn btn-baru1" href="<?= $func->link(ROUTE_PRODUCT_VIEW,$items->slug); ?>">Read More</a>
            </div>

            </div>
        </div>
    <?php endforeach ?>
    </div>

</div>
</section>


<?php else : ?>
<section>
<div class="offers">
    <div class="container">
        <div class="row">
            <div class="col text-center" style="top: 50px">
                <h2 class="section_title wow fadeInUp" style="font-family: StoneInformal;letter-spacing: 5px"><?= $item->setting->title ?></h2>
            </div>
        </div>
        <div class="row offers_items">
            <?php  foreach ($item->data as $items) : ?>

                <!-- Offers Item -->
                <div class="col-lg-6 offers_col">
                    <div class="offers_item">
                        <div class="row">
                            <div class="col-lg-6 wow bounceInDown">
                                <div class="offers_image_container">
                                    <div class="offers_image_background" style="background-image:url('<?= $items->img_cover_url ?>')"></div>
                                    <div class="offer_name" style="width:250px"><a href="<?= $func->link(ROUTE_PRODUCT_VIEW.$items->slug) ?>"><?= $items->title ?></a></div>
                                </div>
                                
                            </div>
                            <div class="col-lg-6">
                                <div class="offers_content wow fadeInUp ">
                                    <p class="offers_text wow fadeInUp wow fadeInUp"><?= $func->trailer($items, 250)  ?></p>
                                    <div class="offers_link wow fadeInUp "><a href="<?= $func->link(ROUTE_PRODUCT_VIEW.$items->slug) ?>" title="<?= $items->title ?>">Read More<i class="fas fa-long-arrow-alt-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>

            

        </div>
    </div>
</div>
</section>
<?php endif ?>