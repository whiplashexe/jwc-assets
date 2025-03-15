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

<section class="section-allpage lazyload" data-bgset="https://jwc.gotra-resources.my.id/web-upload/1740217777-22-02-2025-paiqgmr9MnF3dIu7hSevBLyRDczWVjJb.webp">
    <div class="text wow fadeIn" data-wow-duration="2s">
        <div class="text-center w-100">
            <h1><?= $data->category_name ?></h1>
            <p>Home - <?= $data->category_name ?></p>
        </div>
    </div> 
</section>


<section class="pad6rem product" id="product">
    <div class="container-global wow fadeIn" data-wow-duration="2s">

        <div class="row mt-4 justify-content-center">

            <?php $i=1; foreach ($data->result as $items): ?>
                <div class="col-sm-3 col-6 px-2 pb-4">
                <div class="card h-100 ">
                    <img src="<?= $items->img_cover_url ?>" alt="<?= $items->title ?>" />

                    <?php if (!empty($items->price)): ?>
                        <div class="price">
                            <span>
                                <?php if ($items->price >= 10000): ?>
                                    <?php if ($items->price >= 1000): ?>
                                        IDR <?= number_format($items->price / 1000, 0) . 'K ';?>
                                    <?php endif ?>
                                <?php else: ?>
                                    USD <?= number_format($items->price) ?>
                                <?php endif ?>
                            </span> 
                            /person
                        </div>
                    <?php endif ?>
                    
                    <div class="card-body p-0">
                        
                        <div class="txt p-4">
                            <h3 class="card-title">
                                <?= $items->title ?>
                            </h3>
                            <div class="rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span>(All guests are satisfied)</span>
                            </div>
                            <p class="d-sm-block d-none">
                                <?= $func->trailer($items, 70) ?>...
                            </p>
                        </div>
                        <div class="btn-wraper d-flex justify-content-between">
                            <?php if ($data->cat_data->id == '6643'): ?>
                            <a href="https://api.whatsapp.com/send?phone=<?= $data->social->whatsapp?>&text=Hello%2C%20I%20found%20information%20on%20your%20website%20https%3A%2F%2Febakikitchen.com%2F%20and%20I%20would%20like%20to%20book%20%2A<?= $items->title ?>%2A.%20Can%20you%20help%20me%20with%20that%3F" class="btn btn-book d-sm-block d-none">
                                Book Now <i class="fa-solid fa-arrow-right-long ml-2"></i>
                            </a>
                            <?php else: ?>
                            <a href="https://api.whatsapp.com/send?phone=6287847036249&text=Hello%2C%20I%20found%20information%20on%20your%20website%20https%3A%2F%2Febakikitchen.com%2F%20and%20I%20would%20like%20to%20book%20%2A<?= $items->title ?>%2A.%20Can%20you%20help%20me%20with%20that%3F" class="btn btn-book d-sm-block d-none">
                                Book Now <i class="fa-solid fa-arrow-right-long ml-2"></i>
                            </a>
                            <?php endif ?>
                            <a href="<?= $func->link(ROUTE_PRODUCT_VIEW, $items->slug) ?>" class="btn btn-read">
                                Learn More <i class="fa-solid fa-arrow-right-long ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php $i++; endforeach ?>

        </div>

      <!--<div class="my-5 text-center">
        <a class="btn btn-contact1" href="">Discover More</a>
      </div>-->

    </div>
</section>

    <?= $func->load('home/home_faq') ?>

