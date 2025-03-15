<style type="text/css">
    #header.header-no-min-height .header-body {
        background: var(--colors)!important;
    }
    .btn-book-atas {
        background: var(--color2);
        color: #fff;
    }
    .btn-book-atas:hover {
        background: #fff;
        color: var(--colors);
    }

</style>

<section class="section-allpage lazyload" data-bgset="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1721620085-22-07-2024-mhRwfKxbnapeF5LYVE24szkBoT9UIAul.webp">
    <div class="text wow fadeIn" data-wow-duration="2s">
        <h1>Search Result</h1>
        <p>Home - Search Result</p>
    </div> 
</section>

<section class="pad6rem product">
    <div class="container-global wow fadeIn" data-wow-duration="2s">

        <div class="row ss-arrow justify-content-center">

            <?php $i=1; foreach ($data->result as $items): ?>
            <div class="col-sm-4 mb-4">
                <a href="<?= $func->link(ROUTE_PRODUCT_VIEW, $items->slug) ?>">
                <div class="card border-0">
                    <img src="<?= $items->img_cover_url ?>" alt="<?= $items->title ?>">
                    <div class="card-body">

                        <?php if (!empty($items->custom_field_1)): ?>
                            <div class="tag"><?= $items->custom_field_1 ?></div>
                        <?php else: ?>
                            <div class="tag">Hot Sale!</div>
                        <?php endif ?>
                       
                        <h5 class="card-title mt-3 mb-3">
                            <?= $items->title ?>
                        </h5>

                        <div class="times d-flex align-items-center mb-2">
                            <i class="fa-regular fa-clock"></i>
                            <?php if (!empty($items->custom_field_2)): ?>
                                <?= $items->custom_field_2 ?>
                            <?php else: ?>
                                Bali, Indonesia
                            <?php endif ?>
                        </div>

                        <div class="avilability d-flex align-items-center mb-3">
                            <i class="fa-solid fa-calendar-days"></i>
                            Availability : Available
                        </div>

                        <div class="wrap d-flex justify-content-between">
                            <div class="rating d-flex">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <?php if (!empty($items->price)): ?>
                              <div class="disc">
                                <?php if ($items->price >= 10000): ?>
                                  IDR <?= number_format( $items->price + 99900 )?>
                                <?php else: ?>
                                  USD <?= number_format( $items->price + 38 )?>
                                <?php endif ?>
                              </div>
                            <?php else: ?>
                              <style type="text/css">
                                .disc {
                                  letter-spacing: .5px;
                                }
                                .disc::after {display: none}
                              </style >
                              <div class="disc" style="color: #556575;">
                                More Information
                              </div>
                            <?php endif ?>
                        </div>

                        <?php if (!empty($items->price)): ?>
                        <div class="wrap d-flex justify-content-between">
                            <div class="review">(All guests are satisfied)</div>
                            <div class="price">
                              <?php if ($items->price >= 10000): ?>
                                IDR <?= number_format($items->price) ?>
                              <?php else: ?>
                                USD <?= number_format($items->price) ?>
                              <?php endif ?>
                              </div>
                        </div>

                        <?php else: ?>
                        
                        <div class="wrap d-flex justify-content-between">
                            <div class="review">(All guests are satisfied)</div>
                            <div class="btn">Read More</div>
                        </div>
                        <?php endif ?>

                    </div>
                </div>
                </a>
            </div>
            <?php $i++; endforeach ?>

        </div>

    </div>
</section>