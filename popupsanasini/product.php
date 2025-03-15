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

<section class="section-allpage lazyload" data-bgset="https://jwc.gotra-resources.my.id/web-upload/1738755783-05-02-2025-s3TbpRK6McCqaYhLe9P5rNvkI2i0mZQG.webp">
    <div class="text wow fadeIn" data-wow-duration="2s">
        <div class="text-center w-100">
            <h1><?= $data->category_name ?></h1>
            <p>Home - <?= $data->category_name ?></p>
        </div>
    </div> 
</section>

<?php if ($data->cat_data->id == '6475'): ?>
<section class="pad6rem car-prod" id="product">
    <div class="container-global wow fadeIn" data-wow-duration="2s">

        <div class="row mt-4 justify-content-center">

            <?php $i=1; foreach ($data->result as $items): ?>
                <div class="col-md-3 col-6 pb-4 px-2">

                        <div class="card h-100">
                            <img src="<?= $items->img_cover_url ?>" alt="<?= $items->title ?>" />
                            <div class="card-body px-md-4 px-3">
                                <h3 class="card-title"><?= $items->title ?></h3>
                                <div class="info d-flex">
                                    <div class="bx d-flex align-items-center mr-3">
                                        <?php if (!empty($items->custom_field_1)): ?>
                                            <i class="fa-solid fa-suitcase-rolling"></i> <?= $items->custom_field_1 ?>
                                        <?php else: ?>
                                            <i class="fa-solid fa-suitcase-rolling"></i> 1 
                                        <?php endif ?>
                                    </div>
                                    <div class="bx d-flex align-items-center mr-3">
                                        <?php if (!empty($items->custom_field_2)): ?>
                                            <i class="fa-solid fa-person"></i> <?= $items->custom_field_2 ?>
                                        <?php else: ?>
                                            <i class="fa-solid fa-person"></i> 1 
                                        <?php endif ?>
                                    </div>
                                    <div class="bx d-flex align-items-center mr-3">
                                        <?php if (!empty($items->custom_field_3)): ?>
                                            <i class="fa-solid fa-sliders"></i> <?= $items->custom_field_3 ?>
                                        <?php else: ?>
                                            <i class="fa-solid fa-sliders"></i> Matic
                                        <?php endif ?>
                                    </div>
                                </div>
                                <div class="price-wrap">
                                    <div class="top d-flex align-items-center justify-content-between">
                                        <div class="txt">Mulai Dari</div>
                                        <?php if (!empty($items->custom_field_4)): ?>
                                            <div class="avb" style="background: #ffdede; color: #ff0000;"><?= $items->custom_field_4 ?></div>
                                        <?php else: ?>
                                            <div class="avb">Tersedia</div>
                                        <?php endif ?>
                                    </div>
                                    
                                    <?php if (empty($items->custom_field_5)): ?>
                                    <div class="disc">
                                        <?php if ($items->price >= 1000): ?>
                                            IDR <?= number_format($items->price + 130000) ?>
                                        <?php else: ?>
                                            USD <?= number_format($items->price + 14) ?>
                                        <?php endif ?>
                                    </div>
                                    <?php endif ?>

                                    <div class="final">
                                        <span>
                                            <?php if ($items->price >= 1000): ?>
                                                IDR <?= number_format($items->price) ?>
                                            <?php else: ?>
                                                USD <?= number_format($items->price) ?>
                                            <?php endif ?>
                                        </span>
                                        /24 Hours
                                    </div>

                                    <?php if (!empty($items->custom_field_5)): ?>
                                    <div class="final">
                                        <span>
                                            IDR <?= $items->custom_field_5 ?>
                                        </span>
                                        /1 Month
                                    </div>
                                    <?php endif ?>
                                </div>
                                <a href="https://api.whatsapp.com/send?phone=<?= $data->social->whatsapp ?>&text=Halo%20admin%20<?= $data->web->site_name ?>%2C%20Saya%20ingin%20menyewa%20mobil%20%2A<?= $items->title ?>%2A%2C%20apakah%20bisa%20di%20bantu%20%3F" class="btn btn-prod"><i class="fab fa-whatsapp mr-2"></i>Pesan Sekarang!</a>
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

<?php else: ?>

<section class="pad6rem car-prod supir" id="product">
    <div class="container-global wow fadeIn" data-wow-duration="2s">

        <div class="row mt-4 justify-content-center">

            <?php $i=1; foreach ($data->result as $items): ?>
                <div class="col-md-3 col-6 pb-4 px-2">

                        <div class="card h-100">
                            <img src="<?= $items->img_cover_url ?>" alt="<?= $items->title ?>" />
                            <div class="card-body px-md-4 px-3">
                                <h3 class="card-title"><?= $items->title ?></h3>
                                <div class="info d-flex">
                                    <div class="bx d-flex align-items-center mr-3">
                                        <?php if (!empty($items->custom_field_1)): ?>
                                            <i class="fa-solid fa-suitcase-rolling"></i> <?= $items->custom_field_1 ?>
                                        <?php else: ?>
                                            <i class="fa-solid fa-suitcase-rolling"></i> 1 
                                        <?php endif ?>
                                    </div>
                                    <div class="bx d-flex align-items-center mr-3">
                                        <?php if (!empty($items->custom_field_2)): ?>
                                            <i class="fa-solid fa-person"></i> <?= $items->custom_field_2 ?>
                                        <?php else: ?>
                                            <i class="fa-solid fa-person"></i> 1 
                                        <?php endif ?>
                                    </div>
                                    <div class="bx d-flex align-items-center mr-3">
                                        <?php if (!empty($items->custom_field_3)): ?>
                                            <i class="fa-solid fa-sliders"></i> <?= $items->custom_field_3 ?>
                                        <?php else: ?>
                                            <i class="fa-solid fa-sliders"></i> Matic/Manual
                                        <?php endif ?>
                                    </div>
                                </div>
                                <div class="price-wrap">
                                    <div class="top d-flex align-items-center justify-content-between">
                                        <div class="txt">Mulai Dari</div>
                                        <?php if (!empty($items->custom_field_4)): ?>
                                            <div class="avb" style="background: #ffdede; color: #ff0000;"><?= $items->custom_field_4 ?></div>
                                        <?php else: ?>
                                            <div class="avb">Tersedia</div>
                                        <?php endif ?>
                                    </div>
                                    <div class="nominal">
                                        <div class="final mb-1">
                                            <span>
                                                Supir : 
                                                <?php if ($items->price >= 1000): ?>
                                                    IDR <?= number_format($items->price) ?>
                                                <?php else: ?>
                                                    USD <?= number_format($items->price) ?>
                                                <?php endif ?>
                                            </span>
                                            /24 Hours
                                        </div>
                                        <?php if (!empty($items->custom_field_5)): ?>
                                        <div class="final">
                                            <span>
                                                Supir + BBM : IDR <?= $items->custom_field_5 ?>
                                            </span>
                                            /24 Hours
                                        </div>
                                        <?php endif ?>
                                    </div>
                                </div>
                                <a href="https://api.whatsapp.com/send?phone=<?= $data->social->whatsapp ?>&text=Halo%20admin%20<?= $data->web->site_name ?>%2C%20Saya%20ingin%20menyewa%20mobil%20%2A<?= $items->title ?>%2A%2C%20apakah%20bisa%20di%20bantu%20%3F" class="btn btn-prod"><i class="fab fa-whatsapp mr-2"></i>Pesan Sekarang!</a>
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
<?php endif ?>

    <?= $func->load('home/home_why') ?>

    <?= $func->load('home/home_faq') ?>

