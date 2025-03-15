<style>
    .wrap-gallery {
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 200px;
        position: relative;
        border-radius: 0px;
    }

     @media (max-width: 768px) {
        .wrap-gallery { height: 160px; }
    }

.wrap-titfood p {
    font-family: var(--subtext);
    letter-spacing: 0px;
    font-size: 15px;
    line-height: 32px;
    margin-bottom: 25px;
}

.bg-foods { background: #f9f9f9; }

.wrap-titfood {
    padding: 0 15%;
}

.wrap-titfood h3 {
    font-family: var(--primtext);
    color: var(--colors);
    font-weight: 600;
    text-transform: capitalize;
    letter-spacing: 0px;
    font-size: 35px;
    line-height: 45px;
    margin-bottom: 20px;
}

.bg-foods .row { margin:0; }

.btn-food {
    background: var(--colors);
    color: white;
    text-transform: uppercase;
    padding: 11px 28px;
    border-radius: 0;
    font-weight: 500;
    font-family: var(--primtext);
    font-size: 14px;
    letter-spacing: 1px;
    transition: all ease 500ms;
    border: none;
}

.btn-food:hover {
    background: var(--color2);
    color: white;
}

.wrp-img img {
    border-radius: 10px;
    height: 300px;
    object-fit: cover;
}

@media (max-width: 768px) {
    .bg-foods {
        background: #ffff;
    }

    .wrp-img img { height:200px; }

    .wrap-titfood {
        padding: 0 0%;
        text-align: center;
        margin-bottom: 30px;
    }

    .wrap-titfood h3 {
        font-size: 30px;
        line-height: 40px;
        margin-bottom: 20px;
    }

    .wrap-titfood p {
        font-size: 13px;
        line-height: 27px;
    }

    .btn-food {
        font-size: 15px;
    }
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

        <div class="text-center title-product mb-5 wow fadeIn" data-wow-duration="2s">
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
            <a class="btn btn-contact1" href="<?= base_url() ?>gallery/gallery">View All Gallery</a>
        </div>

    </div>
</section>

<?php elseif ( $grid == 2): ?>

<section class="bg-foods ">
    <div class="row wow fadeIn" data-wow-duration="2s">
        <div class="col-md-5 align-self-center">
            <div class="wrap-titfood mt-md-0 mt-5">
                <h3><?= $title ?></h3>
                <p><?= $subtitle ?></p>
                <a class="btn btn-food" href="<?= base_url() ?>gallery/all">View More</a>
            </div>
        </div>

        <div class="col-md-7">
            <div class="row">
            <?php $i=1; foreach ($item->data as $items): ?>
                <div class="col-6 col-md-3" style="padding: 3px;">
                    <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href="<?= $items->url_img ?>" data-plugin-options="{'type':'image'}">
                        <div class="wrap-gallery lazyload" data-bgset="<?= $items->url_img ?>"></div>
                    </a>
                </div>
            <?php $i++; endforeach ?>
        </div>
        </div>
    </div>
</section>

<?php elseif ( $grid == 3): ?>

<section class=" pb-4">
    <div class="carousel-wall ">

    <?php $i=1; foreach ($item->data as $items): ?>
      <div class="px-2">
        <div class="wrp-img">
          <img class="img-fluid w-100" src="<?= $items->url_img ?>" alt="testimonials 1">
        </div>
      </div>
    <?php $i++; endforeach ?>

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