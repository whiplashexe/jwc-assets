<style>
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
    .wrap-gallery {
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 230px;
        position: relative;
        border-radius: 5px;
    }

     @media (max-width: 768px) {
        .wrap-gallery { height: 160px; }
    }

@media (min-width: 768px) {
    #header.header-no-min-height .header-body { margin-top:-3px; }
}

</style>

<section class="section-allpage lazyload" data-bgset="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1734786333-product_image-21-12-2024-zRewXDypknd8fS6x.webp">
    <div class="text wow fadeIn" data-wow-duration="2s">
        <div class="text-center w-100">
            <h1>Gallery</h1>
        <p>Home - Gallery</p>
        </div>
    </div> 
</section>

<section class="pad6rem">
     <div class="container-global" >
        
        <div class="row pt-4">
            <?php foreach ($data->result as $items): ?>
            <div class="col-6 col-md-2" style="padding: 3px;">
                <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href="<?= $items->url_img ?>" data-plugin-options="{'type':'image'}">
                    <div class="wrap-gallery lazyload" data-bgset="<?= $items->url_img ?>"></div>
                </a>
            </div> 
            <?php endforeach ?>
        </div>
    </div>
</section>