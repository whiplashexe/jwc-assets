<?php 
$route = '';
if ($data->type == 'blog') {
    $route = ROUTE_BLOG_VIEW;
}else{
    $route = ROUTE_PRODUCT_VIEW;
}

?>

<style>
    .side-text {
        text-transform: capitalize;
        font-size: 18px !important;
        font-weight: 600;
        color: #333;
    }
</style>

<?php if ($opsi == 'mainblog'): ?>
    <div class="side-blog">
        <h2><?= $data->title ?></h2>

    <?php foreach ($data->data as $items): ?>
        <div class="border-bawah" style="border-bottom: 1px solid #ccc; margin-bottom: 15px;">
        	<a href="<?= $func->link($route, $items->slug) ?>" style="text-decoration: none;">
            <div class="row">
                <div class="col-5">
                    <img class="img-fluid" alt="<?= $items->title ?>" src="<?= $items->img_cover_url ?>">
                </div>

                <div class="col-7 pad7">
                    <h3><?= substr($items->title, 0, 40) ?>...</h3>
                    <p><?= $func->trailer($items, 60) ?>...</p>
                </div>
            </div>
            </a>
        </div>
    <?php endforeach ?>

    </div>
<?php endif ?>

<?php if ($opsi == 'mainmain'): ?>

<ul>
    <h3 style="margin-bottom: 30px; font-size: 20px;"><?= $data->title ?></h3>
    <?php $i=1; foreach ($data->data as $items): ?>
        <li><i class="fas fa-arrow-right"></i><a href="<?= $func->link($route.$items->slug) ?>" style="color: black"><?= $items->title ?></a></li>
    <?php $i++; endforeach ?>
</ul>

<?php endif ?>

<?php if ($opsi == 'mainroom'): ?>

<ul>
    <h3 style="margin-bottom: 30px; font-size: 20px;"><?= $data->title ?></h3>
    <?php $i=1; foreach ($data->data as $items): ?>
        <li><i class="fas fa-arrow-right"></i><a href="<?= $func->link($route.$items->slug) ?>" style="color: black"><?= $items->title ?></a></li>
    <?php $i++; endforeach ?>
</ul>

<?php endif ?>

<?php if ($opsi == 'specialoffer'): ?>

<?php $i=1; foreach ($data->data as $items): ?>
<div class="row">
    <div class="col-md-6 order-2 order-lg-1" style="align-self: center;">
        <div class="wrap-popup-first">
            <span>Special Offers</span>
            <h3>Take Advantage of Exclusive Deals and Packages</h3>
            <p>Discover unmatched value and luxury with our exclusive deals at Mahagiri Villas Dreamland. Enjoy special packages designed to enhance your stay, from romantic escapes to family adventures. Book now and experience the best of Bali with our limited-time offers.</p>
            <a class="btn" href="https://mahagirivillasdreamland.com/category/special-offers">Reservation Now</a>
        </div>
    </div>

    <div class="col-md-6 order-1 order-lg-2">
        <img class="img-fluid" loading="lazy" alt="Promo & Offers" src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1718872836-20-06-2024-fLbyqKhUOQpG9JucEzBAV4iraSFP07Mm.webp">

        <span class="close-popup" id="closeBtn">&times;</span>
    </div>
</div>
<?php $i++; endforeach ?>

<?php endif ?>
