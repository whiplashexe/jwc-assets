<style>
    .wrap-gallery {
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 250px;
        position: relative;
        border-radius: 5px;
    }

     @media (max-width: 768px) {
        .wrap-gallery { height: 160px; }
    }

    .logo1 { display: none; }

html:not(.sticky-header-active) .logo2 {
    display: block;
}

@media (min-width: 768px) {
    .header-body {
        background-color: white !important;
    }
}
</style>

<?php if ($data->category_name == 'all'): ?>

<section class="bg-primarypage" style="background: var(--colors);">
    <div class="title-primarypage text-center wow fadeInUp" style="z-index: 1; position: relative;">
        <h1>Gallery</h1>
        <p>Home - Gallery</p>
    </div>
</section>

<?php else: ?>

<section class="bg-primarypage" style="background: var(--colors);">
    <div class="title-primarypage text-center wow fadeInUp" style="z-index: 1; position: relative;">
        <h1><?= $data->category_name ?></h1>
        <p><?= strip_tags($data->cat_data->content) ?></p>
    </div>
</section>
    
<?php endif ?>

<section class="pb-4">
     <div class="container" style="max-width: 1240px;">
        
        <div class="row pt-4">
            <?php foreach ($data->result as $items): ?>
            <div class="col-6 col-md-3" style="padding: 3px;">
                <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href="<?= $items->url_img ?>" data-plugin-options="{'type':'image'}">
                    <div class="wrap-gallery lazyload" data-bgset="<?= $items->url_img ?>"></div>
                </a>
            </div> 
            <?php endforeach ?>
        </div>
    </div>
</section>