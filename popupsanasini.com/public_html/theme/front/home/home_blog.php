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

<section class="pad6rem">
    <div class="container-global wow fadeIn" data-wow-duration="2s">
    
        <div class="title-product blog-title text-center">
            <span class="tag-atas"><i class="fa-solid fa-bell-concierge mr-2"></i> <?= $subtitle ?> <i class="fa-solid fa-bell-concierge ml-2"></i></span>
            <h2><?= $title ?></h2>
        </div>

        <div class="row px-0 mt-5 blog-roww">

            <?php foreach ($item->data as $items): ?>

            <div class="col-md-4">
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

    </div>
</section>
<script>

  const _blog = document.querySelector(".blog-title");
  const _blog_items = document.querySelectorAll(".wrap-blog")
  inView(_blog, (element) => {
    animate(element, {y: [50, 0], opacity: [0, 1]}, {ease: "anticipate", duration: 1.5})
    return (leaveInfo) => {
      animate(element, {y: [0, 50], opacity: [1, 0]}, {ease: "anticipate", duration: 1.5})
    }
  })
  inView(_blog_items, (element) => {
    animate(element, {y: [50, 0], opacity: [0, 1]}, {ease: "anticipate", duration: 1.5})
    return (leaveInfo) => {
      animate(element, {y: [0, 50], opacity: [1, 0]}, {ease: "anticipate", duration: 1.5})
    }
  })
</script>