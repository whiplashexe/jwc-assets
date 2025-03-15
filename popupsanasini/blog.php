<style type="text/css">

    .d-flex {
        display: flex;
        flex-wrap: wrap;
    }
    .justify-content-center {
        justify-content: center;
    }
    .align-item-center {
        align-items: center;
    }
@media (min-width: 768px) {
    #header.header-no-min-height .header-body { margin-top:-3px; }
}

</style>

<?php if ($data->category_name == 'all'): ?>

<section class="section-allpage lazyload" data-bgset="https://jwc.gotra-resources.my.id/web-upload/1741427198-08-03-2025-hzMk4ReAJ01CE967FgbaBvcmldOWNXsf.webp">
    <div class="text wow fadeIn" data-wow-duration="2s">
        <h1>Semua Artikel</h1>
        <p>Beranda - Semua Artikel</p>
    </div>
</section>
    
<?php else: ?>

<section class="section-allpage lazyload" data-bgset="https://jwc.gotra-resources.my.id/web-upload/1741427198-08-03-2025-hzMk4ReAJ01CE967FgbaBvcmldOWNXsf.webp">
    <div class="text wow fadeIn" data-wow-duration="2s">
        <div class="text-center w-100">
            <h1><?= $data->category_name ?></h1>
            <p>Home - <?= $data->category_name ?></p>
        </div>
    </div> 
</section>

<?php endif ?>

<section class="pad6rem blog">
    <div class="container-global wow fadeIn" data-wow-duration="2s">

        <div class="row px-0 mt-3 blog-roww">

            <?php foreach ($data->result as $items): ?>
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