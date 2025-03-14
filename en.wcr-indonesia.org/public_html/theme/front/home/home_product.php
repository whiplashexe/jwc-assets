 <?php
$title = $item->setting->title;
$subtitle = $item->setting->subtitle;
$grid = $item->setting->grid;
$route = ROUTE_PRODUCT_VIEW;
?>

<style type="text/css">
          .text-2xl{
        font-size: 1.5rem;
      }
    .percentage {
      font-family: "DINNextRoundedLTW01-Light";
    }
    .progressbar-text {
      font-size: 30px;
      text-align: center;
      color: black !important;
    }
    .text-educators {
      text-align: center;
    }
    #timeline {
      width: 100%;
      height: 200px;
    }
    .progress-card {
      box-shadow: 0 2px 3px rgba(0, 0, 0, 0.3);
      border-radius: 15px;
      padding: 10px;
      height: 25rem
    }

    .progressbar {
      width: 80%;
    }
    .progressbar.w-50 {
      width: 50% !important;
    }
    @media screen and (min-width: 768px) {
      .progressbar-text {
        font-size: 30px;
        text-align: center;
        color: black !important;
      }
    }
      
       .parallax-title {
      color: #59ce8f;
      font-weight: 700;
      font-size: 3rem;
    }
    .parallax-desc {
      font-weight: 400;
      color:white
    }
          .parallax {
      background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0.6)), url("https://gotra.sgp1.cdn.digitaloceanspaces.com/web-upload/1678330042-09-03-2023-0lQYJ5XVbnUCtzdfjKZ9xaDmikIvOHFq.webp");
      width: 100%;
      height: 100%;
      background-size: cover;
      background-position: center;
    }
      .tentang-kami-btn {
      background-color: #16a560;
      font-weight: 600;
    }
    .tentang-kami-btn:hover {
      background-color: #0e693d;
    }

    .progress-card h3 {
      text-transform: capitalize;
      margin-bottom: 5px !important;
      line-height: 40px;
      font-weight: 800;
      color: var(--colors);
      letter-spacing: 0px;
      font-size: 22px;
  }

.btn-proak {
    padding: 10px 25px;
    background: var(--colors);
    color: white;
    font-family: 'DINNextRoundedLTW01-Light';
    text-transform: uppercase;
    letter-spacing: 0.5px;
    font-weight: 500;
    font-size: 14px;
    border-radius: 3px;
    margin-top: 5px;
}

</style>

<?php if ($grid == '1'): ?>

<section class="py-5">
<div class="container">
  
  <div class="row title-product">
      <div class="col-md-8">
          <span>Our Impact</span>
          <h2><?= $title ?></h2>
          <p><?= $subtitle ?></p>
      </div>

      <div class="col-md-4 btnl">
          <a class="btn btn-product" href="#">Bergabung Bersama Kami!</a>
      </div>
  </div>

<div class="py-4 percentage text-center w-100 wow fadeInUp">
      <div class="row g-4 g-md-2 w-100 mx-auto">
        <?php foreach ($item->data as $items): ?>
            <?php $cutcut = explode('||', $items->content) ?>
            <section class="col-md-3 mb-3">
              <div class="progress-card">
                <div id="educators" class="mx-auto relative progressbar w-75" data-progress="0.<?= $items->price ?>" data-color="<?= strip_tags($cutcut[1]) ?>" data-text=""></div>
                <h3 class="fw-bold fs-5 mt-3 mb-0"><?= $items->title ?></h3>
                <p class="mt-1"><?= strip_tags($cutcut[0]) ?></p>
              </div>
            </section>

        <?php endforeach ?>
      </div>
    </div>
</div>

</div>
</section>

<?php elseif ($grid == '2'): ?>

<section class="py-5">
<div class="container wow fadeInUp" data-wow-duration="2s">
  
  <div class="row title-product text-center justify-content-center">
      <div class="col-md-8">
          <h2><?= $title ?></h2>
          <p><?= $subtitle ?></p>
      </div>
  </div>

  <div class="row mt-3 justify-content-center">
      <?php $i=1; foreach ($item->data as $items): ?>
          <div class="col-md-4">
              <div class="wrap-pvilla mb-3">
                  <img alt="<?= $items->title ?>" class="img-fluid img-pvilla" src="<?= $items->img_cover_url ?>">
                      
                 <!--  <span class="recommended">Our Program</span> -->
                  <div class="wrap-text">
                      <h3><?= $items->title ?></h3>
                      <p><?= $items->content ?></p>

                      <!-- <a class="btn btn-pvilla" href="<?= $func->link(ROUTE_PRODUCT_VIEW, $items->slug) ?>">Read More</a> -->
                  </div>
              </div>
          </div>
      <?php $i++; endforeach ?>
  </div>

  <div class="mt-4 text-center">
    <a class="btn btn-proak" href="https://wcr-indonesia.org/category/program-aktivitas">Lihat Semua Program</a>
  </div>

</div>
</section>

<?php endif ?>