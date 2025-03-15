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

    .blog-sec .header .title {
        font-size: clamp(1.3rem, 2vw, 3rem);
        letter-spacing: 0.1rem;
        color: oklch(37.3% 0.034 259.733deg);
        line-height: 1.7rem;
        text-transform: capitalize;
        font-weight: 600;
        text-align: center;
    }
</style>

<section class="pad6rem blog-sec">
    <div class="container-global wow fadeIn" data-wow-duration="2s">
    
        <div class="header">
            <h2 class="title"><?= $title ?></h2>
        </div>

        <div class="row px-0 mt-4 wrap-blog2">

            <?php foreach ($item->data as $items): ?>
            <div class="col-md-4">
                <div class="wrap-blog">

                    <div style="position: relative;">
                        <img class="img-fluid w-100" src="<?= $items->img_cover_url ?>" alt="<?= $items->title ?>">
                        <span class="catcat"><i class="far fa-clock mr-2"></i><?= date('d M Y', strtotime($items->created_at)) ?></span>
                    </div>

                    <div class="wrap-blog2">
                        
                        <h3>
                            <?php if (strlen($items->title) > 60): ?>
                                <?= substr($items->title, 0, 60) . '...' ?>
                            <?php else: ?>
                                <?= $items->title ?>
                            <?php endif ?>
                        </h3>
                        <p><?= $func->trailer($items, 80) ?>...</p>

                        <a class="btn" href="<?= $func->link(ROUTE_BLOG_VIEW, $items->slug) ?>">Read More<i class="fas fa-arrow-right ml-3"></i></a>
                    </div>

                </div>
            </div>

            <?php endforeach ?>

        </div>

    </div>
</section>