<?php $title = $item->setting->title;
$subtitle = $item->setting->subtitle;
$subtitle_2 = $item->setting->subtitle2; ?>

<style type="text/css">

</style>

<section class="pad6rem" style="background: #f9f9f9;">
    <div class="container-global wow fadeIn" wow-data-ruation="2s">

        <div class="title-why2 mb-5">
            <div class="row">
                <div class="col-md-6">
                    <span class="sp-atas">Our Testimonials</span>
                    <h2><?= $title ?></h2>
                </div>

                <div class="col-md-6 align-self-center">
                    <p><?= $subtitle ?></p>
                </div>
            </div>
        </div>


        <div class="review-slide revrev ss-arrow">
        <?php sort($item->data); foreach ($item->data as $items): ?>
            <div class="wrap-slidelide">
                
                <div class="wrap-review">
                    <p>“<?= $items->message ?>”</p>

                    <div class="list-stars">
                        <i class="fas fa-star mr-1"></i>
                        <i class="fas fa-star mr-1"></i>
                        <i class="fas fa-star mr-1"></i>
                        <i class="fas fa-star mr-1"></i>
                        <i class="fas fa-star mr-1"></i>
                    </div>

                    <div class="from-reveiw">
                        <img class="img-fluid" src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1720689610-11-07-2024-EPbzukNpwDAvCQXFHLl0Te1sJdfc5MO7.webp" alt="Tripadvisor Logo">
                        <p><b><?= $items->guest ?></b> - Review from <a href="https://maps.app.goo.gl/oyvsxsAFnNSPgSkt7">Google</a></p>

                    </div>

                </div>

            </div>
        <?php endforeach ?>
        </div>

        <div class="text-center mt-5 rmr">
            <p style="font-family: var(--subtext);">Read more review about us on :</p>

            <a class="btn btn-full mr-2" href="https://www.tripadvisor.com/Attraction_Review-g297701-d25058147-Reviews-Bali_Gate_Tours-Ubud_Gianyar_Regency_Bali.html">Our Tripadvisor</a>

            <a class="btn btn-full" href="https://maps.app.goo.gl/oyvsxsAFnNSPgSkt7">Our Google Review</a>
        </div>

    </div>
</section>