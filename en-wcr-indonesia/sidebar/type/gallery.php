<?php if($opsi == 'gallery'): ?>

<section class="py-5">
  <div class="container">
    <div class="row mb-4 title-product text-center justify-content-center">
        <div class="col-md-8">
            <h2>Jaringan Mitra Kami</h2>
            <p>Kolaborasi kami dengan berbagai mitra membuka peluang untuk memperkuat ketahanan perempuan, anak, dan pemuda.</p>
        </div>
    </div>
  </div>

  <div class="lightbox" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}, 'mainClass': 'mfp-with-zoom', 'zoom': {'enabled': true, 'duration': 300}}">
        <div class="carousel-wall mb-3">
            <?php $i=1; foreach ($data->data as $items): ?>
                <?php if ($i <= '12'): ?>
                    <div class="px-2">
                        <div class="wrp-img">
                            <a class="lightbox" href="<?= $items->url_img ?>">
                                <img class="img-fluid w-100" src="<?= $items->url_img ?>" alt="Partners">
                            </a>
                        </div>
                    </div>
                <?php endif ?>
            <?php $i++; endforeach ?>
        </div>


        <div class="carousel-wall1 mb-5">
            <?php $i=1; foreach ($data->data as $items): ?>
                <?php if ($i >= '13'): ?>
                    <div class="px-2">
                        <div class="wrp-img">
                            <a class="lightbox" href="<?= $items->url_img ?>">
                                <img class="img-fluid w-100" src="<?= $items->url_img ?>" alt="Partners">
                            </a>
                        </div>
                    </div>
                <?php endif ?>
            <?php $i++; endforeach ?>
        </div>
    </div>

</section>   

<?php endif; ?>