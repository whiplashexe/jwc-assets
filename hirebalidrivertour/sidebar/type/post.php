<?php 
$route = '';
if ($data->type == 'blog') {
    $route = ROUTE_BLOG_VIEW;
}else{
    $route = ROUTE_PRODUCT_VIEW;
}

?>

<!-- <style>
    .side-text {
        text-transform: capitalize;
        font-size: 18px !important;
        font-weight: 600;
        color: #333;
    }
</style> -->

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

<?php if ($opsi == 'listtour'): ?>

<?php foreach ($data->data as $items): ?>
    <option value="<?= $items->title ?>"><?= $items->title ?></option>
<?php endforeach ?>

<?php endif ?>

<?php if ($opsi == 'popular'): ?>

<?php $i=1; foreach ($data->data as $items): ?>
<div class="col-sm-4 pb-4">
    <div class="card h-100 ">
        <img src="<?= $items->img_cover_url ?>" alt="<?= $items->title ?>" />
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
            /person
        </div>
        <div class="card-body p-0">
            <div class="info-tag">
                <div class="wrap-info d-flex justify-content-between align-item-center">
                    <span class="day">
                        <?php if (!empty($items->custom_field_1)): ?>
                            <i class="fa-solid fa-calendar-days"></i> <?= $items->custom_field_1 ?>
                        <?php else: ?>
                            <i class="fa-solid fa-calendar-days"></i> 1 Hari
                        <?php endif ?>
                    </span>
                    <span class="people">
                        <?php if (!empty($items->custom_field_2)): ?>
                            <i class="fa-solid fa-user"></i> <?= $items->custom_field_2 ?>
                        <?php else: ?>
                            <i class="fa-solid fa-user"></i> 5 orang
                        <?php endif ?>
                    </span>
                    <span class="location">
                        <?php if (!empty($items->custom_field_3)): ?>
                            <i class="fa-solid fa-location-dot"></i> <?= $items->custom_field_3 ?>
                        <?php else: ?>
                            <i class="fa-solid fa-location-dot"></i> Bali
                        <?php endif ?>
                    </span>
                </div>
            </div>
            <div class="txt p-4">
                <h3 class="card-title">
                    <?= substr($items->title, 0, 50) ?>...
                </h3>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <span>(All guests are satisfied)</span>
                </div>
                <p>
                    <?= $func->trailer($items, 80) ?>...
                </p>
            </div>
            <div class="btn-wraper d-flex justify-content-between">
                <a href="https://api.whatsapp.com/send?phone=<?= $data->social->whatsapp?>&text=Hello%2C%20I%20found%20information%20on%20your%20website%20https%3A%2F%2Fnusapenidatravelescape.com%2F%20and%20I%20would%20like%20to%20book%20%2A<?= $items->title ?>%2A.%20Can%20you%20assist%20me%20with%20that%3F" class="btn btn-book">
                    Book Now <i class="fa-solid fa-arrow-right-long ml-2"></i>
                </a>
                <a href="<?= $func->link(ROUTE_PRODUCT_VIEW, $items->slug) ?>" class="btn btn-read">
                    Read More <i class="fa-solid fa-arrow-right-long ml-2"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<?php $i++; endforeach ?>

<?php endif ?>
