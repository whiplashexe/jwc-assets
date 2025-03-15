<style type="text/css">
    

    .desc-cate-prd .logo img {
        height: 70px;
        border-radius: 50%;
    }
    .desc-cate-prd .logo h2 {
        font-family: var(--primtext);
        font-size: 30px;
        line-height: 48px;
        font-weight: 600;
        color: var(--colors);
        letter-spacing: .5px;
    }
    .desc-cate-prd  p {
        font-family: var(--primtext);
        font-size: 15px;
        line-height: 28px;
        margin-bottom: 1.3rem;
        letter-spacing: .3px;
        max-width: 1000px;
        text-align: center;
        margin-left: auto;
        margin-right: auto;
    }
    
    @media (max-width: 768px) {
        .desc-cate-prd .logo img {
            height: 60px;
            border-radius: 50%;
        }
        .desc-cate-prd .logo h2 {
            font-size: 25px;
            line-height: 38px;
        }
        .desc-cate-prd p {
            font-size: 13px;
            line-height: 25px;
        }
    }
/* ===================================== */
/* ===================================== */
/* ===================================== */



</style>

<section class="section-allpage lazyload" data-bgset="https://jwc.gotra-resources.my.id/web-upload/1740128522-21-02-2025-87jZwiXbyAnmTMaNJSrLz5RPg0oufCqU.webp">
    <div class="text wow fadeIn" data-wow-duration="2s">
        <div class="text-center w-100">
            <h1><?= $data->category_name ?></h1>
            <p>Home - <?= $data->category_name ?></p>
        </div>
    </div> 
</section>

<section id="__activities_root">
  <div class="wrapper">

    <div class="product-wrapper row ss-arrow">
    <?php  $i=1; foreach ($data->result as $item): ?>
    <div class="col-md-4 col-6 pb-md-4 pb-3">
        <a href="<?= $func->link(ROUTE_PRODUCT_VIEW, $item->slug) ?>" class="activity-product">
            <div class="activity-image-wrapper">
                <img
                class="activity-image"
                src="<?= $item->img_cover_url ?>"
                alt="activity-image"
                />
            </div>
            <p class="activity-title"><?= $item->title ?></p>
        </a>
    </div>
    <?php endforeach; ?>
    </div>
  </div>
</section>

    <?= $func->load('home/home_why') ?>

    <?= $func->load('home/home_faq') ?>

