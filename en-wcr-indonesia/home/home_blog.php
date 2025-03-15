<?php 
$title = $item->setting->title;
$subtitle = $item->setting->subtitle;
$grid = $item->setting->grid;
$route = ROUTE_BLOG_VIEW; ?>

<style type="text/css">

</style>

<section class="py-5">
    <div class="container wow fadeInUp" data-wow-duration="2s">

        <div class="row title-product text-center justify-content-center">
          <div class="col-md-8">
              <h2><?= $title ?></h2>
              <p><?= $subtitle ?></p>
          </div>
      </div>

       <div class="row mt-5">

            <?php foreach ($item->data as $items): ?>

            <div class="col-md-6">
                <div class="wrap-blog">

                    <div style="position: relative;">
                        <img class="img-fluid w-100" src="<?= $items->img_cover_url ?>" alt="<?= $items->title ?>">
                        <span class="catcat"><i class="far fa-clock mr-2"></i><?= date('d M Y', strtotime($items->created_at)) ?></span>
                    </div>

                    <div class="wrap-blog2">
                        
                        <h3><?= $items->title ?></h3>
                        <p><?= $func->trailer($items, 100) ?>...</p>

                        <a class="btn" href="<?= $func->link(ROUTE_BLOG_VIEW, $items->slug) ?>">Read More<i class="fas fa-arrow-right ml-3"></i></a>
                    </div>

                </div>
            </div>

            <?php endforeach ?>

        </div>


        <div class="mt-4 text-center">
            <a class="btn btn-proak" href="https://en.wcr-indonesia.org/article-category/all">View All Article</a>
          </div>

    </div>
</section>