<div class="wrap-product-loop lazyload" data-bgset="https://gotra.sgp1.cdn.digitaloceanspaces.com/web-upload/1617967026-product_image-09-04-2021-SntXDYJMVCfp3Pjs.jpg">
    <div class="wrap-category-name">
        <h3>Category</h3>
        <p>Our Videos</p>
    </div>
</div>

<section class="section background-color-light border-0 my-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">        
                <div class="row justify-content-center mb-5">
                    <?= $func->loop('video') ?>
                </div>
                <div class="clear mt-5"></div>
                <?= $func->load_pagination('float-left','page-item','page-link') ?>
            </div>
        </div>
    </div>
</section>
