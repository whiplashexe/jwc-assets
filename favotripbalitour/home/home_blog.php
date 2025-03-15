<?php 
$title = $item->setting->title;
$subtitle = $item->setting->subtitle;
$subtitle_2 = $item->setting->subtitle2;
$grid = $item->setting->grid;
$route = ROUTE_BLOG_VIEW; ?>

<style type="text/css">
    .product-default1 .owl-dots {
        display: none !important;
    }

</style>

<?php if ($grid == 1): ?>


<section class="pad6rem product-default1">
    
    <div class="container-global">

        <div class="title-product text-center">
            <span class="tag-atas"><?= $subtitle ?></span>
            <h2><?= $title ?></h2>
        </div>

       <div class="row mt-5">

            <?php foreach ($item->data as $items): ?>

            <div class="col-md-4">
                <div class="blog">

                    <div style="position: relative;">
                        <img class="img-fluid w-100" src="<?= $items->img_cover_url ?>" alt="<?= $items->title ?>">

                        <div class="catcat text-center">
                            <span>
                                <?= date('d', strtotime($items->created_at)) ?>
                            </span> <br>
                            <?= date('M', strtotime($items->created_at)) ?>
                        </div>
                    </div>

                    <div class="blog2">
                        
                        <h3><?= $items->title ?></h3>
                        <p><?= $func->trailer($items, 100) ?>...</p>

                        <a class="btn" href="<?= $func->link(ROUTE_BLOG_VIEW, $items->slug) ?>">Read More<i class="fas fa-arrow-right ml-3"></i></a>
                    </div>

                </div>
            </div>

            <?php endforeach ?>

        </div>

    </div>

    </div>
</section>

<?php elseif ($grid == 3): ?>

<section class="pad6rem nearby">
    <div class="container-global">
        
        <div class="title-why2 mb-5">
            <div class="row">
                <div class="col-md-6">
                    <span class="sp-atas"><?= $subtitle_2 ?></span>
                    <h2><?= $title ?></h2>
                </div>

                <div class="col-md-6 align-self-center">
                    <p><?= $subtitle ?></p>
                    <a href="https://ubudartresort.com/article-category/nearby-attractions">View More <i class="fa-solid fa-arrow-right-long ml-2"></i></a>
                </div>
            </div>
        </div>

        <div class="row rowdesi ss-arrow">

            <?php $i=1; foreach ($item->data as $items): ?>
            <div class="px-3">
                <div class="card border-0">
                    <img src="<?= $items->img_cover_url ?>" alt="<?= $items->title ?>" />

                    <div class="card-img-overlay py-3 px-4">
                        <h3><?= $items->title ?></h3>
                    </div>

                    <div class="desc py-3 px-4">
                        <h3><?= $items->title ?></h3>
                        <p><?= $func->trailer($items, 60) ?>...</p>
                        <a class="btn" href="<?= $func->link(ROUTE_BLOG_VIEW. $items->slug) ?>">Learn More <i class="fa-solid fa-arrow-right ml-2"></i></a>
                    </div>
                </div>
            </div>
            <?php $i++; endforeach ?>

        </div>
    </div>
</section>
<?php endif ?>