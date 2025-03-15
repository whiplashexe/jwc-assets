<style type="text/css">
    #header.header-no-min-height .header-body {
        background: var(--colors)!important;
    }
    .btn-book-atas {
        background: transparent;
        color: #fff;
    }
    .btn-book-atas:hover {
        background: #fff;
        color: var(--colors);
    }

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

<section class="section-allpage lazyload" data-bgset="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1741847252-13-03-2025-n956XKrvGfpsHYbRaSCMq8UwitJzPd2j.webp">
    <div class="text wow fadeIn" data-wow-duration="2s">
        <h1>Semua Artikel</h1>
        <p>Beranda - Semua Artikel</p>
    </div>
</section>
    
<?php else: ?>

<section class="section-allpage lazyload" data-bgset="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1741847252-13-03-2025-n956XKrvGfpsHYbRaSCMq8UwitJzPd2j.webp">
    <div class="text wow fadeIn" data-wow-duration="2s">
        <div class="text-center w-100">
            <h1><?= $data->category_name ?></h1>
            <p>Home - <?= $data->category_name ?></p>
        </div>
    </div> 
</section>

<?php endif ?>

<section class="pad6rem">
    <div class="container-global wow fadeIn" data-wow-duration="2s">

        <div class="row mt-4 wrap-blog2 px-0">

            <?php foreach ($data->result as $items): ?>

            <div class="col-md-4">
                <div class="wrap-blog">

                    <div style="position: relative;">
                        <img class="img-fluid w-100" src="<?= $items->img_cover_url ?>" alt="<?= $items->title ?>">
                        <span class="catcat"><i class="far fa-clock mr-2"></i><?= date('d M Y', strtotime($items->created_at)) ?></span>
                    </div>

                    <div class="wrap-blog2">
                        
                        <h3>
                            <?php if (strlen($items->title) > 70): ?>
                                <?= substr($items->title, 0, 70) . '...' ?>
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

    <?= $func->load('home/home_why') ?>

    <?= $func->load('home/home_faq') ?>