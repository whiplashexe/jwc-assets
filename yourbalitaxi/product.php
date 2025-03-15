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

<section class="section-allpage lazyload" data-bgset="https://jwc.gotra-resources.my.id/web-upload/1740819360-01-03-2025-gmNCGwEsY0yaUATqiHzIhDdkclpQORLJ.webp">
    <div class="text wow fadeIn" data-wow-duration="2s">
        <div class="tx text-center w-100">
            <h1><?= $data->category_name ?></h1>
            <p>Home - <?= $data->category_name ?></p>
        </div>
    </div> 
</section>


<section class="pad6rem simcard" id="populer" >
    <div class="background" ></div>
    <div class="container-global px-md-5 px-3 wow fadeIn" data-wow-duration="2s">

        <div class="slide-sim ss-arrow justify-content-start">
            <?php $i=1; foreach ($data->result as $items): ?>
                <div class=" px-2 h-100">
                    <div class="card h-100">
                        <div class="head-card">
                            <div class="head">
                                <p class="cate-prd"><?= $items->category_name ?></p>
                                <h3><?= $items->title ?></h3>
                            </div>
                        </div>
                        <div class="feature pt-0">
                            <div class="icon mx-auto mb-3">
                                <i class="fa-solid fa-wifi"></i>
                            </div>
                            <?= $items->content ?>
                        </div>
                        <div class="price">
                            <span>
                                <?php if ($items->price >= 10000): ?>
                                    IDR <?= number_format($items->price) ?>
                                <?php else: ?>
                                    USD <?= number_format($items->price) ?>
                                <?php endif ?>
                            </span>
                            | <?= $items->custom_field_1 ?>
                        </div>
                        <div class="button d-flex align-items-center justify-content-center py-3 mb-3" style="flex-wrap: wrap;">
                            <a href="<?= $func->link(ROUTE_PRODUCT_VIEW, $items->slug) ?>#book" class="btn btn-prd mr-1 mb-1">Buy Now!</a>
                            <a href="<?= $func->link(ROUTE_PRODUCT_VIEW, $items->slug) ?>" class="btn btn-prd btn-det mb-1">View Detail</a>
                        </div>
                    </div>
                </div>

            <?php $i++; endforeach ?>
        </div>


    </div>
</section>


    <?= $func->load('home/home_why') ?>

    <?= $func->load('home/home_faq') ?>

