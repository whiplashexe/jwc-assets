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

<section class="pad6rem blog">
    <div class="container-global wow fadeIn" data-wow-duration="2s">
    
        <div class="row title-product efect-up ">
            <div class="col-md-9">
                <span class="tag-atas"><i class="fa-solid fa-star-of-life mr-2"></i> <?= $subtitle_2 ?> </span>
                <h2><?= $title ?></h2>
                <p><?= $subtitle ?></p>
            </div>

            <div class="col-md-3 align-self-center">
                <div class="text-md-right text-left"><a class="btn btn-gene" href="https://popupsanasini.com/blog-article">View All Blogs</a></div>
            </div>
        </div>

        <div class="row px-0 mt-3 blog-roww">

            <?php foreach ($item->data as $items): ?>
            <div class="col-md-4 col-sm-6 col-12 blog-eff">
                <div class="card">
                    <img src="<?= $items->img_cover_url ?>" class="w-100" alt="<?= $items->title ?>" />
                    <div class="card-body py-0 px-3">
                        <div class="wrap p-4">
                            <h3><?= $items->title ?></h3>
                            <div class="info-blog my-2">
                                <div class="info-item mr-2">
                                    <i class="fa-solid fa-user mr-2"></i> Admin
                                </div>
                                <div class="info-item mx-2">
                                    <i class="fa-solid fa-calendar-days mr-2"></i><?= date('d M Y', strtotime($items->created_at)) ?>
                                </div>
                            </div>
                            <p class="desc-trailer">
                                <?= $func->trailer($items, 60) ?>...
                            </p>
                            <a href="<?= $func->link(ROUTE_BLOG_VIEW, $items->slug) ?>" class="btn btn-blog">Read More <i class="fa-solid fa-chevron-right ml-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach ?>

        </div>

    </div>
</section>
<script>

  const _blog = document.querySelectorAll(".efect-up");
  const _blog_items = document.querySelectorAll(".blog-eff")
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