<style type="text/css">

html.sticky-header-active #header .header-body {
    background: var(--colors) !important;
  }

</style>

<section class="section-allpage lazyload" data-bgset="https://jwc.gotra-resources.my.id/web-upload/1739354266-12-02-2025-4M0ZJpywqImUhjGkloYN7nbVXDeOxWgv.webp">
    <div class="text wow fadeIn" data-wow-duration="2s">
        <h1><?= $data->category_name ?></h1>
        <p>Home - <?= $data->category_name ?></p>
    </div>

    <div class="bg-overlay"></div>
</section>

<section class="pad6rem">
    <div class="container-global">

        <div class="row mt-5">

            <?php foreach ($data->result as $items): ?>

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
</section>
