<?php $title = $item->setting->title;
$subtitle = $item->setting->subtitle;
$subtitle_2 = $item->setting->subtitle2; ?>

<style type="text/css">
      .review .card {
        border-radius: 0;
        padding: 14px;
        position: relative;
      }
      .review .logo-icon {
        position: absolute;
        width: 25px;
        height: 25px;
        z-index: 2;
        right: 15px;
        top: 15px;
      }
      .review .foto img {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        object-fit: cover;
        margin-right: 10px;
      }
      .review .card .star i {
        color: #ffa127;
      }
      .review .card h3 {
        font-size: 15px;
        margin-bottom: 0;
        font-weight: 600;
        letter-spacing: .1px;
        text-transform: capitalize;
        font-family: var(--primtext);
      }
      .review .card .capt {
        overflow-y: scroll;
        height: 120px;
        padding-right: 10px;
      }
      .review .card .capt::-webkit-scrollbar {
        width: 3px;
        border-radius: 3px;
      }
      .review .card .capt::-webkit-scrollbar-thumb {
        border-radius: 3px;
        background: #ccc;
      }
      .review .card .capt::-webkit-scrollbar-thumb:hover {
        background: #555;
      }
      .review .card p {
        font-size: 14px;
        line-height: 23px;
        font-family: var(--subtext);
      }

      @media (max-width: 768px) {
        .review .foto img {
            width: 35px;
            height: 35px;
        }

        .review .logo-icon { display:none; }
      }

</style>

<section class="pad6rem review" >
    <div class="container-global wow fadeIn" wow-data-ruation="2s">

        <div class="title-product text-center">
            <span class="tag-atas "><?= $subtitle ?></span>
            <h2 class=""><?= $title ?></h2>
        </div>


        <div class="row ss-arrow mx-0 w-100">
        <?php sort($item->data); foreach ($item->data as $items): ?>
            <div class="col-md-3 col-sm-4 col-6 px-md-2 px-1 pb-md-3 pb-2">
                <div class="card">
                <div class="prof-rev d-flex align-items-center">
                    <div class="foto">
                        <?php if (!empty($items->img)): ?>
                            <img src="<?= $items->img ?>" alt="<?= $items->guest ?>" class="" />
                        <?php else: ?>
                            <img src="<?= $data->web->site_logo ?>" alt="<?= $items->guest ?>" class="" />
                        <?php endif ?>
                    </div>
                    <div class="txt-rev">
                        <h3><?= $items->guest ?></b></h3>
                    </div>
                </div>
                <img src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1720689610-11-07-2024-EPbzukNpwDAvCQXFHLl0Te1sJdfc5MO7.webp" alt="google" class="logo-icon" />
                <div class="star my-2">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <div class="capt">
                    <p>
                        <?= $items->message ?>
                    </p>
                </div>
            </div>
          </div>
        <?php endforeach ?>
        </div>

        <div class="text-center mt-5 rmr">

            <a class="btn btn-full mr-2" href="https://www.trustpilot.com/review/balitravelsimcard.com">View All Reviews</a>
        </div>

    </div>
</section>