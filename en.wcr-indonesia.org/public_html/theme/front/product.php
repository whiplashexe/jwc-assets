<style type="text/css">

.logo1 { display: none; }

@media (min-width: 768px) {
    .header-body {
        background-color: white !important;
    }
}

html:not(.sticky-header-active) .logo2 {
    display: block;
}

</style>

<section class="bg-primarypage" style="background: var(--colors);">
    <div class="title-primarypage text-center wow fadeInUp" style="z-index: 1; position: relative;">
        <h1><?= $data->category_name ?></h1>
        <p>Home - <?= $data->category_name ?></p>
    </div>
</section>

<section class="service-section">
<div class="container" style="position: relative; z-index: 1;">

    <div class="row mt-3 justify-content-center">
        <?php foreach ($data->result as $items): ?>
            <div class="col-md-4">
                <div class="wrap-pvilla mb-3">
                    <img class="img-fluid img-pvilla" src="<?= $items->img_cover_url ?>">
                        
                    <!-- <span class="recommended">Recommended!</span> -->
                    <div class="wrap-text">
                        <h3><?= $items->title ?></h3>
                        <p><?= $func->trailer($items, 80) ?></p>

                        <!-- <a class="btn btn-pvilla" href="<?= $func->link(ROUTE_PRODUCT_VIEW, $items->slug) ?>">Read More</a> -->
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>

    <div class="text-center mt-4">
        <?= $func->load_pagination("pagination justify-content-center","page-item","page-link") ?>
    </div>

</div>
</section>