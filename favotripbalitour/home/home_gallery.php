<style>
 .wrap-gallery {
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 300px;
        position: relative;
        border-radius: 5px;
    }

    .wrp-img img {
        border-radius: 10px;
        height: 280px;
        object-fit: cover;
    }

    .carousel-wall1 .slick-track {
      display: flex;
      flex-direction: row-reverse; /* Balik urutan slide */
    }

    .carousel-wall1 .slick-slide {
      transform: scaleX(-1); /* Balik setiap slide secara horizontal */
    }

    .carousel-wall1 {
      transform: scaleX(-1); /* Balik container untuk mengembalikan tampilan normal */
    }

    @media (max-width: 768px) {
        .wrap-gallery { height: 160px; }

        .wrp-img img { height:200px; }
    }

</style>
<?php
$title = $item->setting->title;
$subtitle = $item->setting->subtitle;
$grid = $item->setting->grid;
$route = ROUTE_PRODUCT_VIEW;
?>

<?php if ( $grid == 1): ?>

<section class="py-5">
    <div class="container">

        <div class="text-center title-product mb-5">
            <img class="img-fluid img-lotus" src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1712979247-13-04-2024-vp4gS3hCtnP8MoKcwI0FyrLsV6qfQBE2.webp" alt="Lotus Icon">
            <h2><?= $title ?></h2>
            <p><?= $subtitle ?></p>
        </div>
        
        <div class="row wow fadeInUp" data-wow-duration="2s">
            <?php $i=1; foreach ($item->data as $items): ?>
                <?php if ($i == '1'): ?>
                    <div class="col-12 col-md-6" style="padding: 3px;">
                        <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href="<?= $items->url_img ?>" data-plugin-options="{'type':'image'}">
                            <div class="wrap-gallery lazyload" data-bgset="<?= $items->url_img ?>"></div>
                        </a>
                    </div>
                <?php else: ?>
                    <div class="col-6 col-md-3" style="padding: 3px;">
                        <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href="<?= $items->url_img ?>" data-plugin-options="{'type':'image'}">
                            <div class="wrap-gallery lazyload" data-bgset="<?= $items->url_img ?>"></div>
                        </a>
                    </div>
                <?php endif ?>
            <?php $i++; endforeach ?>
        </div>

        <div class="mt-5 text-center">
            <a class="btn btn-contact1" href="<?= base_url() ?>gallery/gallery">Discover More</a>
        </div>

    </div>
</section>

<?php elseif ( $grid == 2): ?>

<section class="pt-5">
    
<div class="review-slide2">
    <?php foreach ($item->data as $items): ?>
        <div class="slidd">
            <a class="img-thumbnail-no-borders img-thumbnail-hover-icon lightbox" style="border-radius: 0px;" href="<?= $items->url_img_thumb ?>" data-plugin-options="{'type':'image'}">
                <img class="img-fluid wrap-gallery2" src="<?= $items->url_img_thumb ?>" alt="<?= $items->title ?>">
            </a>
        </div>
    <?php endforeach ?>
</div>

</section>

<?php elseif ( $grid == 3): ?>

<section class="pad6rem pb-0">
    <div class="container-global">
        <div class="title-product text-center">
            <span class="tag-atas"><?= $subtitle ?></span>
            <h2><?= $title ?></h2>
        </div>
    </div>

    <div class="lightbox" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}, 'mainClass': 'mfp-with-zoom', 'zoom': {'enabled': true, 'duration': 300}}">
        <div class="carousel-wall mb-3">
            <?php $i=1; foreach ($item->data as $items): ?>
                <?php if ($i <= '7'): ?>
                    <div class="px-2">
                        <div class="wrp-img">
                            <a class="lightbox" href="<?= $items->url_img ?>">
                                <img class="img-fluid w-100" src="<?= $items->url_img ?>" alt="Gallery <?= $i ?>">
                            </a>
                        </div>
                    </div>
                <?php endif ?>
            <?php $i++; endforeach ?>
        </div>


        <div class="carousel-wall1 mb-5">
            <?php $i=1; foreach ($item->data as $items): ?>
                <?php if ($i >= '7'): ?>
                    <div class="px-2">
                        <div class="wrp-img">
                            <a class="lightbox" href="<?= $items->url_img ?>">
                                <img class="img-fluid w-100" src="<?= $items->url_img ?>" alt="Gallery <?= $i ?>">
                            </a>
                        </div>
                    </div>
                <?php endif ?>
            <?php $i++; endforeach ?>
        </div>
    </div>

</section>

<?php else : ?>
<section class="mt-5">
    <div class="container" style="max-width: 1240px;">
        <div class="row mb-3">
            <div class="col-md-10 justify-content-start wow fadeInRight">
                <h3 class="title-gallery" style="margin-bottom: 5px;"><?= $item->setting->title ?></h3>
                <p><?= $item->setting->subtitle ?></p>
            </div>

            <div class="col-md-2 col-cus wow fadeInRight">
                <a class="btn btn-primary-cus" href="http://thedesaubud.com/gallery/all">View All</a>
            </div>
        </div>

        <div class="row">
            <?php foreach ($item->data as $items): ?>
            <div class="col-md-4 mb-2 wow fadeInUp" style="padding: 0; padding-right: 10px;">
                <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href="<?= $items->url_img ?>" data-plugin-options="{'type':'image'}">
                    <img class="img-fluid" style="width: 100%; height: 250px;" src="<?= $items->url_img_thumb ?>" alt="<?= $items->title ?>">
                </a>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</section>
<?php endif ?>