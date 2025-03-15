<style type="text/css">
  #header.header-no-min-height .header-body {
    background: white;
  }
  .btn-book-atas {
    background: var(--colors);
    color: #fff;
  }


  .desc-single h1 {
    font-size: 30px;
    font-family: var(--primtext);
    letter-spacing: 0px;
    font-weight: 600;
    color: var(--colors);
    line-height: 43px;
    margin-bottom: 20px;
  }

  .bg-single {
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    position: relative;
    height: 400px;
  }

  .bg-single:after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: black;
    opacity: 0.4;
  }


  .primarykonsing {
    font-family: var(--primtext);
    color: black;
    font-weight: 500;
    letter-spacing: 0px;
    font-size: 25px;
    margin-bottom: 20px;
    line-height: 30px;
    text-transform: unset;
    font-style: normal;
  }

  h1,h2,h3,h4,h5,h6 {
    font-family: var(--primtext);
    letter-spacing: 0px;
    color: black;
    margin-bottom: 25px;
    text-transform: unset;
  }

  .desc-single p {
    font-family: var(--primtext);
    font-size: 15px;
    color: #333;
    line-height: 28px;
  }

  .desc-single h3 {
    font-size: 17px;
    font-family: var(--primtext);
    letter-spacing: .3px;
    font-weight: 500;
    color: var(--colors);
    line-height: 30px;
  }
  .desc-single p strong, .desc-single p b {
    font-family: var(--primtext);
    letter-spacing: 0px;
    font-weight: 500;
    color: var(--colors);
    line-height: 30px;
  }

  .desc-single li {
    font-family: var(--primtext);
    font-size: 15px;
    color: #333;
    line-height: 28px;
    margin-bottom: 10px;
    text-align: justify;
  }

  .desc-single {
    padding: 25px 10px;
    border-top: 2px solid #EAEEF3;
    position: relative;
  }

  .desc-single table { margin-bottom: 20px; width: 100% !important; }

  .desc-single th {
    text-align: center;
    font-family: var(--primtext);
    padding: 10px;
    background: var(--colors);
    color: white;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    font-size: 12px;
  }

  .desc-single td {
    padding: 5px;
    font-family: var(--primtext);
    font-size: 14px;
    color: #555;
    text-align: center;
  }

  .wrap-booking-sing {
    text-align: center;
    padding: 0px;
    overflow: hidden;
    border-bottom: 4px solid var(--colors);
    border-top: 4px solid var(--colors);
    border-right: 1px solid #EAEEF3;
    border-left: 1px solid #EAEEF3;
  }

  .wrap-booking-sing .price {
    background: var(--colors);
    color: white;
    padding: 10px;
    font-size: 13px;
    font-family: var(--primtext);
  }

  .wrap-booking-sing b { font-size: 17px; }

  .wrap-booking-sing form#contactForm {
    padding: 0px 15px;
  }

  .wrap-booking-sing form#contactForm label {
    font-family: var(--primtext);
    color: black;
    font-weight: 600 !important;
    letter-spacing: 0.5px;
    font-size: 13px;
  }

  .main { background: white !important; }

  .detail-tour {
    border-top: 2px solid #EAEEF3;
    padding: 15px 0px 25px;
  }

  .wrap-detailtour i {
    font-size: 36px;
    color: var(--colors);
  }

  .wrap-detailtour p {
    margin-bottom: 0px;
    color: black;
    font-weight: 600;
    font-family: var(--primtext);
  }

  .wrap-detailtour span { font-family: var(--primtext); }

  .wrap-detailtour .col-md-3 {
    padding-right: 0;
    align-self: center;
  }

  .desc-tour {
    padding: 40px 10px 25px;
  }

  /*section.toggle.active {
      border: 1px solid #ccc;
      border-left: 5px solid var(--colors);
      border-radius: 5px;
      margin-bottom: 10px !important;
  }*/
  .wrap-addons .toggle-primary .toggle label {
    border-top-left-radius: 0;
  }
  .wrap-addons .toggle-primary .toggle.active>label {
    border-top-left-radius: 0;
    border-color: var(--colors) !important;
  }
  .wrap-addons .toggle.toggle-minimal .toggle.active>label {
    background: transparent;
    border: none;
    font-family: var(--primtext);
    padding: 17px 30px;
    color: #1A2B48;
    font-size: 16px;
    letter-spacing: 0.3px;
    font-weight: 500;
    padding-bottom: 17px;
  }

  .wrap-addons  .toggle.toggle-minimal .toggle>label {
    background: transparent;
    border: none;
    font-family: var(--primtext);
    padding: 17px 30px;
    color: #1A2B48;
    font-size: 16px;
    letter-spacing: 0.3px;
    font-weight: 500;
  }

  .wrap-addons .toggle {
    border: 1px solid #ccc;
    border-left: 5px solid var(--colors);
    border-radius: 5px;
    margin-bottom: 10px !important;
  }

  .wrap-addons  .toggle>.toggle-content {
    padding: 17px 30px;
    border: none;
    margin-bottom: 0;
  }

  .wrap-addons .toggle-content img {
    height: 220px;
    width: 100%;
    object-fit: cover;
    border-radius: 3px;
  }

  .img-singlee {
    width: 100% ;
    height: auto;
    object-fit: cover;
    margin-bottom: 40px;
    border-radius: 5px;
  }

  @media (max-width: 768px) {
    .img-singlee { height: auto; }

    .desc-single { padding:unset; }

    .desc-single h1 {
      font-size: 22px;
      line-height: 32px;
    }
  }

  .wrap-addons h4 {
    font-family: var(--primtext);
    letter-spacing: 0px;
    font-weight: 500;
    color: var(--colors);
  }

  .wrap-addons {
    padding: 35px;
    box-shadow: 0px 11px 53px 0px rgb(89 59 36 / 14%);
    border-radius: 20px;
    margin-bottom: 30px;
  }

  .side-blog h2 {
    font-family: var(--primtext);
    font-weight: 500;
    font-size: 24px;
    letter-spacing: 0.5px;
    color: #212121;
    padding-bottom: 10px;
    border-bottom: 3px solid var(--colors);
  }

  .side-blog img {
    height: 105px;
    object-fit: cover;
    border-radius: 5px;
    margin-bottom: 20px;
  }

  .side-blog h3 {
    font-family: var(--primtext);
    text-transform: capitalize;
    font-size: 16px;
    font-weight: 600;
    letter-spacing: 0.5px;
    line-height: 22px;
    margin-bottom: 10px;
  }

  .side-blog p {
    font-family: var(--primtext);
    font-size: 13px;
    line-height: 23px;
    margin-bottom: 20px;
  }

  .pad7 {
    padding-right: 0px;
    padding-left: 5px;
  }

  .btn-whatsapp {
    width: 100%;
    background: var(--colors);
    color: white;
    font-family: var(--primtext);
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.1px;
    padding: 20px;
    font-size: 20px;
    margin-bottom: 25px;
    transition: all ease 500ms;
  }

  .btn-whatsapp:hover {
    transition: all ease 500ms;
    background: black;
    color: white;
  }

  .wrap-addons img {
    width: 100%;
    height: 150px;
    object-fit: cover;
  }

  .wrap-addons p {
    font-family: var(--primtext);
    font-size: 13.5px;
    color: #555;
    text-align: justify;
  }

  @media (max-width: 768px) {
    .slide-fix {
      position: relative;
      z-index: 99;
      overflow-y: scroll;
    }

    .desc-single img {
      width: 100%;
      height: 300px;
      margin-bottom: 10px;
    }

    .wrap-addons img {
      height: 180px;
      margin-bottom: 20px;
    }

    .wrap-addons .img-bawa {
      height: 140px;
      width: 100%;
      margin-bottom: 3px;
    }

    .wrap-addons {
      padding: 20px 25px;
    }

    .wrap-addons h4 { margin-bottom:10px; }
  }

  header#header { position: relative !important; }

  #header.header-no-min-height .header-body {
    min-height: 0!important;
  }

  @media (min-width: 768px) {

    html:not(.sticky-header-active) .header-body {
      margin-top: 0px !important;
      transition: all ease 1000ms !important;
    }
  }

  .wrap-sidebar h3 {
    font-family: var(--primtext);
    color: var(--colors);
    text-transform: capitalize;
    letter-spacing: 0px;
    font-weight: 600;
    font-size: 22px !important;
    margin-bottom: 30px !important;
  }
  .wrap-sidebar ul {
    padding-left: 0;
    list-style: none;
  }
  .wrap-sidebar {
    padding: 30px;
    box-shadow: 10px 10px 30px #00000029;
    border-radius: 10px;
    background: white;
    font-family: var(--primtext);
  }

  .wrap-sidebar li {
    letter-spacing: 0.5px;
    font-weight: 500;
    margin-bottom: 15px;
    padding-left: 40px;
    font-size: 14px;
    position: relative;
  }

  .wrap-sidebar li a { color:#444 !important; }

  .wrap-sidebar li a:hover { color:var(--colors) !important; }

  .wrap-sidebar ul li i {
    position: absolute;
    left: 10px;
    font-size: 15px;
    top: 4px;
    color: var(--colors);
  }

  .btn-bok {
    background: var(--color2);
    color: white;
    padding: 10px 30px;
    border-radius: 5px;
    font-family: var(--primtext);
    transition: all ease 500ms;
    text-transform: uppercase;
    font-size: 17px;
    font-weight: 600;
    margin-top: 30px;
  }

  .btn-bok:hover {
    background: var(--colors);
    color: white;
  }



  .wrap-exbook {
    position: relative;
    background: white;
    font-family: var(--primtext);
    /* border: 1px solid #ccc; */
    box-shadow: 10px 10px 30px #00000029;
    border-radius: 10px;
    padding: 35px;
  }

  .wrap-exbook h5 {
    color: #fff;
  }
  .wrap-exbook p {
    color: #ebebeb;
  }
  .wrap-exbook h3 {
    font-weight: 700;
    color: var(--colors);
    margin-bottom: 20px;
  }

  .wrap-exbook span {
    color: #000;
    font-size: 20px;
    font-weight: 500;
  }

  .wrap-exbook .exp-1 {
    margin-bottom: 0px;
    line-height: 34px;
    letter-spacing: .3px;
    color: #000;
    font-size: 15px;
  }

  .wrap-exbook .btn-exbook {
    width: 100%;
    background: var(--color2);
    margin-top: 20px;
    padding: 11px 0px;
    color: #000;
    text-transform: uppercase;
    font-weight: 500;
    letter-spacing: 1px;
    font-size: 15px;
    transition: all ease 500ms;
  }

  .wrap-exbook .btn-exbook:hover {
    background: var(--colors);
    color: #fff;
  }

  .wrap-exbook2 h5 {
    margin-bottom: 10px;
    letter-spacing: .5px;
  }

  .wrap-exbook2 {
    margin-top: 25px;
    padding: 30px;
    border-radius: 15px;
    background-color: var(--colors);
  }


  .bg-pgallery {
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    border-radius: 5px 0px 0px 5px;
    height: 450px;
  }

  .bg-single {
    background-size: cover;
    background-repeat: no-repeat;
  }

  .bg-pgallery-child {
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    height: 220px;
  }

  @media (min-width: 768px) {
    .pr-andro { padding-right: 5px; }

    .bg-program-lainya {
      background-position: center;
      background-size: cover;
      background-repeat: no-repeat;
      border-radius: 5px;
      height: 150px;
      position: relative;
    }
  }

  @media (max-width: 768px) {
    .bg-pgallery {
      background-position: center;
      background-size: cover;
      background-repeat: no-repeat;
      border-radius: 20px;
      height: 340px;
    }

    .slide-fix {
      position: relative;
      z-index: 99;
      overflow-y: scroll;
    }
  }

  .review-at {
    color: var(--color2) !important;
    font-size: 15px !important;
    margin-bottom: 0;
  }

  .review-at span {
    color: #777;
  }

  .wrp img {
    width: 100%;
    aspect-ratio: 5 / 4;
    object-fit: cover;
    padding: 5px;
    margin-bottom: 25px;
  }

  .wrp-fixed {
    position: sticky;
    top: 5%;
  }

</style>

<!-- <section class="single-accomodation pad6rem">
    <div class="container-global">


         <div class="wrap-single">
            <div class="desc-single pt-0" style="border-top: none;">
                <div class="row mb-3">
                    <div class="col-md-8">
                        <h1 class="mb-3"><?= $data->result->title ?></h1>
                        <p class="mb-0"><i class="fa-solid fa-location-dot mr-2"></i>Bali, Indonesia</p>
                    </div>

                    <div class="col-md-4 align-self-end">
                        <p class="review-at text-md-right"><i class="fas fa-star mr-2"></i> 4.7 <b>(100+ Review)</b> <span>100+ Booked</span></p>
                    </div>
                </div>

            </div>
        </div>

        <?php if (!empty($data->images)): ?>
            <div class="row m-0 mb-md-5 mb-3">
                <div class="col-md-6 pr-andro display-pc">
                    <a class="img-thumbnail img-thumbnail-no-borders lightbox" href="<?= $data->result->img_cover_url ?>" data-plugin-options="{'type':'image'}">
                        <div class="bg-pgallery lazyload" data-bgset="<?= $data->result->img_cover_url ?>"></div>
                    </a>
                </div>

                <div class="col-md-6 display-pc">
                    <div class="row">
                        <?php $i=1; foreach ($data->images as $img): ?>
                        <?php if ($i <= '4'): ?>
                            <?php if ($i == '2'): ?>
                                <div class="col-md-6" style="padding: 2px;">
                                    <a class="img-thumbnail img-thumbnail-no-borders lightbox" href="<?= $img->url ?>" data-plugin-options="{'type':'image'}">
                                        <div class="bg-pgallery-child lazyload" style="border-radius: 0px 5px 0px 0px;" data-bgset="<?= $img->url ?>"></div>
                                    </a>
                                </div>

                             <?php elseif ($i == '4'): ?>
                                <div class="col-md-6" style="padding: 2px;">
                                    <a class="img-thumbnail img-thumbnail-no-borders lightbox" href="<?= $img->url ?>" data-plugin-options="{'type':'image'}">
                                        <div class="bg-pgallery-child lazyload" style="border-radius: 0px 0px 5px 0px;" data-bgset="<?= $img->url ?>"></div>
                                    </a>
                                </div>

                            <?php else: ?>
                                <div class="col-md-6" style="padding: 2px;">
                                    <a class="img-thumbnail img-thumbnail-no-borders lightbox" href="<?= $img->url ?>" data-plugin-options="{'type':'image'}">
                                        <div class="bg-pgallery-child lazyload" style="" data-bgset="<?= $img->url ?>"></div>
                                    </a>
                                </div>
                            <?php endif ?>
                        <?php endif ?>
                        <?php $i++; endforeach ?>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <div class="row">
                <div class="col-md-12 pr-andro">
                    <div style="border-radius: 5px; height: 450px;" class="mb-5 bg-pgallery lazyload" data-bgset="<?= $data->result->img_cover_url ?>"></div>
                </div>
            </div>
        <?php endif ?>

        <div class="display-android">
            <div class="product-slick ss-arrow">
                <div class="wrp">
                    <img class="img-fluid" src="<?= $data->result->img_cover_url ?>" alt="<?= $data->result->title ?>">
                </div>

            <?php if (!empty($data->images)): ?>
                <?php foreach ($data->images as $img): ?>
                    <div class="wrp">
                        <img class="img-fluid" src="<?= $img->url ?>" alt="<?= $data->result->title ?>">
                    </div>
                <?php endforeach ?>
            <?php endif ?>
            </div>
        </div>

        <?php $cutkonten = explode('||', $data->result->content); ?>
        <div class="row">
            <div class="col-md-8">

           <div class="wrap-single">
                <div class="desc-single pt-0" style="border-top: none;">

                    <a class="btn btn-bok mt-0 mb-3 d-block d-md-none" href="#book">Book This Packages</a>

                    <?= $cutkonten[0]; ?>

                    <a class="btn btn-bok mb-5 mb-md-0 d-block d-md-none" href="#book">Book This Packages</a>
                </div>

            <?php if ($data->cat_data->id == '5786'): ?>
            <?php if (!empty($data->addon_contents)): ?>

                <h2 class="primarykonsing">Destination Details</h2>

                <?php $i=1; foreach ($data->addon_contents as $items): ?>
                    <div class="wrap-addons">

                        <div class="row">


                            <div class="col-md-9" style="align-self: center;">
                                <h4><?= $items->name ?></h4>
                                <?= $items->content ?>
                            </div>

                            <div class="col-md-3 d-flex align-item-center justify-content-center">
                                <a class="btn btn-bok m-0" href="<?= $items->custom_field_1 ?>">Book Now</a>
                                <!--<img class="img-fluid" src="<?= $items->img_cover_url ?>" alt="<?= $items->name ?>">
                            </div>
                        </div>
                    </div>
                <?php $i++; endforeach ?>
            <?php endif ?>

            <?php else: ?>

            <?php if (!empty($data->addon_contents)): ?>

                <h2 class="primarykonsing">Detail Destination</h2>

                <?php $i=1; foreach ($data->addon_contents as $items): ?>
                    <div class="wrap-addons">

                        <div class="row">

                            <div class="col-md-3 d-flex align-item-center justify-content-center">
                                <a class="btn btn-bok m-0" href="<?= $items->custom_field_1 ?>">Book Now</a>
                                <img class="img-fluid" src="<?= $items->img_cover_url ?>" alt="<?= $items->name ?>">
                            </div>

                            <div class="col-md-9" style="align-self: center;">
                                <h4><?= $items->name ?></h4>
                                <?= $items->content ?>
                            </div>


                        </div>
                    </div>
                <?php $i++; endforeach ?>
            <?php endif ?>


            <?php endif ?>

            </div>

            </div>


            <div id="book" class="col-md-4">
                <div class="wrp-fixed">
                <aside class="sidebar" id="sidebar" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'containerSelector': '.container', 'padding': {'top': 100}}">
             <?php if (!empty($data->result->custom_field_1)): ?>

                    <div class="wrap-exbook mb-4">
                        <?php if (!empty($data->result->price)): ?>
                        <h3>
                            <span>Starting from </span>
                            <?php if ($data->result->price >= 10000): ?>
                                IDR <?= number_format($data->result->price) ?>
                            <?php else : ?>
                                USD <?= number_format($data->result->price) ?>
                            <?php endif ?>
                        </h3>
                        <?php endif ?>

                        <p class="exp-1"><i class="fa-solid fa-calendar-days mr-2"></i>Book now for tomorrow</p>
                        <p class="exp-1"><i class="fa-solid fa-money-bill mr-2"></i>Lowest Price Guarantee</p>

                        <a class="btn btn-exbook" href="<?= $data->result->custom_field_1 ?>">Book Now!</a>

                        <div class="wrap-exbook2">
                            <h5><i class="fa-solid fa-clock mr-2"></i>Free Cancellation</h5>
                            <p>up to 24 hours before the experience starts (local time)</p>

                            <h5><i class="fa-solid fa-comments mr-2"></i>Instant Confirmation</h5>
                            <p class="mb-0">Secure your spot while staying flexible</p>
                        </div>
                    </div>


                <?php else: ?>

                    <div class="wrap-exbook mb-4">
                        <?php if (!empty($data->result->price)): ?>
                        <h3>
                        <span>From </span>
                        <?php if ($data->result->price >= 10000): ?>
                            IDR  <?= number_format($data->result->price) ?>
                        <?php else : ?>
                            USD <?= number_format($data->result->price) ?>
                        <?php endif ?>
                        </h3>
                        <?php endif ?>

                        <p class="exp-1"><i class="fa-solid fa-calendar-days mr-2"></i>Book now for tomorrow</p>
                        <p class="exp-1"><i class="fa-solid fa-money-bill mr-2"></i>Lowest Price Guarantee</p>

                        <a class="btn btn-exbook" href="https://api.whatsapp.com/send?phone=<?= $data->social->whatsapp?>&text=Hello%2C%20I%20got%20information%20from%20your%20website%20https%3A%2F%2Fwidebalitours.com%2F%20and%20I%20would%20like%20to%20book%20%2A<?= $data->result->title ?>%2A.%20Can%20you%20help%20me%20with%20that%3F">Book Now!</a>

                        <div class="wrap-exbook2">
                            <h5><i class="fa-solid fa-clock mr-2"></i>Free Cancellation</h5>
                            <p>up to 24 hours before the experience starts (local time)</p>

                            <h5><i class="fa-solid fa-comments mr-2"></i>Instant Confirmation</h5>
                            <p class="mb-0">Secure your spot while staying flexible</p>
                        </div>

                    </div>

                <?php endif ?>
                 </aside>

                <div class="wrap-sidebar mt-4">
                    <?= $func->sidebar('main') ?>
                </div>

                <div class="wrap-sidebar mt-4">
                    <h3>Contact Us</h3>
                    <ul>
                        <li><i class="fas fa-phone"></i><a style="color: black;" href="<?= $func->dm_telphone() ?>"><?= $data->company->company_telp ?></a></li>
                        <li><i class="fab fa-whatsapp"></i><a style="color: var(--colors);" href="<?= $func->dm_whatsapp() ?>">+<?= $data->social->whatsapp ?></a></li>
                        <li><i class="fas fa-envelope"></i><a style="color: black;" href="<?= $func->dm_email() ?>"><?= $data->company->company_email ?></a></li>
                    </ul>

                </div>
            </div>
            </div>
        </div>

    </div>
</section> -->


<!-- NEW -->
<!-- DUMMY DATA-->
<?php
  // dummy data
  $plan = json_decode(json_encode([
    'items' => [
      ['title'=>"Pickup", 'time'=> '07.00 AM-08.30 AM', 'description' => 'Our guide and driver will pick you up at your hotel'],
      ['title'=>"Checking Rice Terrace", 'time'=> '09.00 AM', 'description' => 'Visit the authentic Baliinese rice terrace at Tegallalang'],
      ['title'=>"Breakfast", 'time'=> '09.30 AM', 'description' => 'We will get breakfast at Kintamani with view of Batur Volacano and Batur'],
      ['title'=>"Start Cycling", 'time'=> '10.30 AM', 'description' => 'Ready, set, pedal! The cycling route is 95% downhill. Well meander through Balis countryside, visit a Balinese compound, pass by villages, temples, and lush rice fields. Swing by a woodcraft village and explore the Art Museum in Pakudui.'],
      ['title'=>"Lunch", 'time'=> '12.00 PM-13.00 PM', 'description' => 'At the end of the cycling, we’ll get lunch at Balinese house with traditional Indonesian Cuisine'],
      ['title'=>"Drop", 'time'=> '14.30 PM-16.30 PM', 'description' => 'Our guide and driver will drop you at your hotel'],
    ]
  ]));

  $included = [
    "Pick Up and Drop to Hotel",
    "Professional English Speaking Guide",
    "Breakfast",
    "Coffee and Snack",
    "Mineral Water",
    "Wet Weather Gear",
    "Traditional Indonesia Lunch",
    "All the equipment for the tour will be provided",
  ];
?>

<!-- STYLES -->
<style>
  #__hero-root * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
  }
  #__hero-root .slick-dots {
	  display: flex;
	  justify-content: center;
	  margin: 0;
	  padding: 1rem 0;
	  list-style-type: none;
    transform: translateY(-100%);
  }
	
	#__hero-root .slick-dots li {
		margin: 0 0.25rem;
	}
	
	#__hero-root .slick-dots button {
		display: block;
    width: 1rem;
    height: 1rem;
    padding: 0;
    border: none;
    border-radius: 100%;
    background-color: oklch(92.8% 0.006 264.531deg);
    text-indent: -9999px;
	}
	
	#__hero-root .slick-dots li.slick-active button {
      background-color: oklch(44.6% 0.03 256.802deg);
		}
	
  #__hero-root {
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
  }

  #__hero-root .wrapper {
    margin: 4rem 7%;
    width: 90%;
    gap: clamp(1rem, 2vw, 2rem);
    display: flex;
    flex-direction: column;
    justify-content: start;
    align-items: stretch;
  }
  @media (min-width: 48rem) {
    #__hero-root .wrapper {
      width: 80%;
    }
  }
  @media (min-width: 64rem) {
    #__hero-root .wrapper {
      width: 70%;
    }
  }
  #__hero-root .wrapper .title {
    font-size: clamp(1.3rem, 2vw, 3rem);
    letter-spacing: 0.1rem;
    color: oklch(37.3% 0.034 259.733deg);
    line-height: 1.7rem;
    padding: 0 0 1.4rem 0;
    text-align: center;
    font-weight: bold;
  }

  #__hero-root .wrapper .image-wrapper {
    width: 100%;
  }
  #__hero-root .wrapper .slick-slide {
    margin: 0 27px;
  }

  #__hero-root .wrapper .slick-list {
    margin: 0 -27px;
  }
  #__hero-root .wrapper .image-wrapper .image {
    object-fit: cover;
    width: 100%;
    border-radius: 2rem;
    aspect-ratio: 16/9;
  }
  #__hero-root .wrapper .description {
    padding: 1rem;
    border-radius: 1rem;
    background-color: oklch(92.8% 0.006 264.531deg);
    font-size: clamp(1rem, 2vw, 1.2rem);
    letter-spacing: 0.02rem;
    color: oklch(44.6% 0.03 256.802deg);
  }
  #__hero-root .wrapper .description p {
    line-height: 1.8rem;
    padding-bottom: 0.8rem;
  }
</style>
<style>
  #__plan-root * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
  }

  #__plan-root {
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    background-color: oklch(92.8% 0.006 264.531deg);
  }
  #__plan-root .__plan-wrapper {
    margin: 4rem 7%;
    width: 100%;
    gap: clamp(1rem, 2vh, 2rem);
    display: flex;
    flex-direction: column;
    justify-content: start;
    align-items: stretch;
  }
  @media (min-width: 48rem) {
    #__plan-root .__plan-wrapper {
      width: 80%;
    }
  }
  @media (min-width: 64rem) {
    #__plan-root .__plan-wrapper {
      width: 70%;
    }
  }
  #__plan-root .__plan-wrapper .__plan-title {
    font-size: clamp(1.3rem, 2vw, 3rem);
    letter-spacing: 0.1rem;
    color: oklch(37.3% 0.034 259.733deg);
    line-height: 1.7rem;
    font-weight: bold;
    padding: 0 0 1.4rem 0;
  }
  #__plan-root .__plan-wrapper .__plan-content-wrapper {
    display: grid;
    grid-template-columns: auto 1fr;
    grid-template-rows: auto;
  }
  #__plan-root .__plan-wrapper .__plan-content-wrapper .__plan-arrow {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    color: oklch(55.1% 0.027 264.364deg);
    font-weight: bold;
    gap: 0.4rem;
  }
  #__plan-root .__plan-wrapper .__plan-content-wrapper .__plan-arrow .__plan-line {
    margin: 0 1rem;
    height: 100%;
    border-right: 0.3rem dashed oklch(55.1% 0.027 264.364deg);
  }
  @media (min-width: 48rem) {
    #__plan-root .__plan-wrapper .__plan-content-wrapper .__plan-arrow .__plan-line {
      margin: 0 2rem;
    }
  }
  #__plan-root .__plan-wrapper .__plan-content-wrapper .__plan-card-wrapper {
    display: flex;
    flex-direction: column;
    justify-content: start;
    align-items: stretch;
    gap: 1rem;
  }
  #__plan-root .__plan-wrapper .__plan-content-wrapper .__plan-card-wrapper .__plan-card {
    padding: 1rem;
    display: flex;
    flex-direction: column;
    justify-content: start;
    align-items: start;
    gap: 1rem;
    background-color: oklch(96.7% 0.003 264.542deg);
    border-radius: 1rem;
  }
  @media (min-width: 48rem) {
    #__plan-root .__plan-wrapper .__plan-content-wrapper .__plan-card-wrapper .__plan-card {
      padding: 1.4rem;
    }
  }
  @media (min-width: 64rem) {
    #__plan-root .__plan-wrapper .__plan-content-wrapper .__plan-card-wrapper .__plan-card {
      padding: 2.4rem;
    }
  }
  #__plan-root .__plan-wrapper .__plan-content-wrapper .__plan-card-wrapper .__plan-card .__plan-card-header {
    gap: 0.4rem;
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: start;
    align-items: start;
  }
  @media (min-width: 48rem) {
    #__plan-root .__plan-wrapper .__plan-content-wrapper .__plan-card-wrapper .__plan-card .__plan-card-header {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      align-items: center;
    }
  }
  #__plan-root .__plan-wrapper .__plan-content-wrapper .__plan-card-wrapper .__plan-card .__plan-card-header .__plan-card-title {
    font-size: clamp(1rem, 2vw, 1.2rem);
    letter-spacing: 0.02rem;
    color: oklch(37.3% 0.034 259.733deg);
    line-height: 1.7rem;
    padding: 0 0 1.4rem 0;
    font-weight: bold;
  }
  #__plan-root .__plan-wrapper .__plan-content-wrapper .__plan-card-wrapper .__plan-card .__plan-card-header .__plan-card-time {
    background-color: oklch(70.7% 0.022 261.325deg);
    color: white;
    font-size: clamp(0.6rem, 4vw, 1rem);
    padding: 0.4rem 0.6rem;
    border-radius: 999em;
  }
  #__plan-root .__plan-wrapper .__plan-content-wrapper .__plan-card-wrapper .__plan-card .__plan-card-description {
    font-size: clamp(0.8rem, 2vw, 1rem);
    letter-spacing: 0.02rem;
    color: oklch(55.1% 0.027 264.364deg);
    line-height: 1.8rem;
  }
  #__plan-root .__plan-wrapper .__plan-warning {
    margin-top: 2rem;
    font-size: 1.1rem;
    color: oklch(55.1% 0.027 264.364deg);
    text-align: center;
  }
</style>
<style>
  #__included-root * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
  }

  #__included-root {
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
  }
  #__included-root .__included-wrapper {
    display: flex;
    flex-direction: column;
    justify-content: start;
    align-items: start;
    margin: 4rem 7%;
    gap: 1rem;
    width: 100%;
  }
  @media (min-width: 48rem) {
    #__included-root .__included-wrapper {
      width: 80%;
    }
  }
  @media (min-width: 64rem) {
    #__included-root .__included-wrapper {
      width: 70%;
    }
  }
  #__included-root .__included-wrapper .__included-title {
    font-size: clamp(1.3rem, 2vw, 3rem);
    letter-spacing: 0.1rem;
    color: oklch(37.3% 0.034 259.733deg);
    line-height: 1.7rem;
    font-weight: bold;
    padding: 0 0 1.4rem 0;
  }
  #__included-root .__included-wrapper .__included-list-wrapper {
    display: flex;
    flex-direction: column;
    justify-content: start;
    align-items: start;
    gap: 1rem;
    list-style: none;
  }
  #__included-root .__included-wrapper .__included-list-wrapper .__included-item {
    margin-left: 2rem;
    gap: 0.4rem;
    font-size: clamp(1rem, 2vw, 1.2rem);
    letter-spacing: 0.03rem;
    color: oklch(55.1% 0.027 264.364deg);
    line-height: 1.4rem;
    display: flex;
    flex-direction: row;
    justify-content: start;
    align-items: start;
  }
</style>
<style>
  #__price-root * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
  }

  #__price-root {
    background-color: #5B2D5E;
    position: relative;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
  }
  #__price-root .__price-wrapper {
    z-index: 2;
    margin: 4rem 7%;
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: start;
    align-items: stretch;
  }
  #__price-root table {
    border: 1px solid white;
    width: 100%;
    text-align: center;
    color: white;
  }
  #__price-root th,
  #__price-root td {
    border: 1px solid white;
    padding: 10px;
  }

  #__price-root th {
    background-color: rgba(255, 255, 255, 0.2);
  }

  #__price-root p {
    color: white;
  }

  @media (min-width: 48rem) {
    #__price-root .__price-wrapper {
      width: 80%;
    }
  }
  @media (min-width: 64rem) {
    #__price-root .__price-wrapper {
      width: 70%;
    }
  }
  #__price-root .__price-wrapper .__price-title {
    text-align: center;
    font-size: clamp(1.3rem, 2vw, 3rem);
    letter-spacing: 0.1rem;
    color: white;
    line-height: 1.7rem;
    font-weight: bold;
    padding: 0 0 1.4rem 0;
  }
  #__price-root .__price-wrapper .__price-content-wrapper {
    display: grid;
    gap: 2rem;
    grid-template-rows: repeat(2, auto);
    grid-template-columns: 1fr;
  }
  @media (min-width: 48rem) {
    #__price-root .__price-wrapper .__price-content-wrapper {
      grid-template-rows: auto;
      grid-template-columns: repeat(2, 1fr);
    }
  }
  #__price-root .__price-wrapper .__price-content-wrapper .__price-content {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
  #__price-root .__price-wrapper .__price-content-wrapper .__price-content .__price-content-title {
    font-size: clamp(1.2rem, 2vw, 1.6rem);
    letter-spacing: 0.1rem;
    color: white;
    line-height: 1.7rem;
    padding: 0 0 0.4rem 0;
  }
  #__price-root .__price-wrapper .__price-content-wrapper .__price-content .__price-content-time {
    padding: 0.4rem 0.7rem;
    border-radius: 999em;
    background-color: white;
    color: oklch(44.6% 0.03 256.802deg);
  }
  #__price-root .__price-wrapper .__price-content-wrapper .__price-content .__price-content-price {
    margin-top: 1rem;
    font-size: clamp(1rem, 2vw, 1.2rem);
    letter-spacing: 0.1rem;
    color: oklch(92.8% 0.006 264.531deg);
    line-height: 1.4rem;
    font-weight: bold;
  }
  #__price-root .__price-wrapper .__price-content-wrapper .__price-content .__price-content-price tr td:first-child {
    width: 200px;
  }
  #__price-root .__price-pattern-image {
    z-index: 1;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    opacity: 0.1;
  }
  @media (max-width: 64rem) {
    #__price-root .__wrapprice {
        padding: 0 1rem;
    }
    #__price-root .__overflow-mobile {
        overflow-x: scroll; 
        width: 100%;
    }
    #__price-root .__overflow-mobile table {
        width: 180%!important;
    }
  }
  #__booking-root {
    width: 100%;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
  }
  #__booking-root .__booking-wrapper {
    width: 100%;
    margin: 4rem 7%;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
  }
  #__booking-root .__booking-wrapper .__booking-button {
    padding: 2rem;
    background-color: #5B2D5E;
    font-weight: bold;
    border-radius: 1rem;
    font-size: clamp(1.3rem, 2vw, 3rem);
    letter-spacing: 0.1rem;
    color: white;
    line-height: 1.7rem;
  }
  #__booking-root .__booking-wrapper a {
    text-decoration: none;
  }
</style>

<!-- HERO -->
<section id="__hero-root">
  <div class="wrapper">
    <h1 class="title"><?= $data->result->title ?></h1>
    <div class="image-wrapper slick ss-arrow">
      <?php if (!empty($data->images)): foreach($data->images as $item): ?>
        <img class="image" src="<?= $item->url ?>" alt="cover">
      <?php endforeach; endif; ?>
    </div>
    <div class="description">
      <?php $cutkonten = explode('||', $data->result->content); ?>
      <?= $cutkonten[0]; ?>
    </div>
  </div>
</section>

<?php if(!empty($data->addon_contents)): ?>
  <?php foreach($data->addon_contents as $addon): ?>
    <?php if($addon->slug == "plan"): ?>
      <section id="__plan-root">
        <div class="__plan-wrapper">
          <h2 class="__plan-title"><?= $addon->name ?></h2>
          <div class="__plan-content-wrapper">
            <div class="__plan-arrow">
              <div class="__plan-line"></div>
              <i class="fa-solid fa-up-long fa-rotate-180"></i>
            </div>
            <?php
              $__content = str_replace(["\r\n", "\n", "\r"], '', $addon->content);
              $dom = new DOMDocument();
              libxml_use_internal_errors(true);
              $dom->loadHTML($__content);
              libxml_clear_errors();

              $plan_list = [];
              foreach ($dom->getElementsByTagName('li') as $li) {
                $parts = explode('<br>', $li->C14N());
                $title = strip_tags($parts[0]);
                $time = isset($parts[1]) ? strip_tags($parts[1]) : '';
                $description = isset($parts[2]) ? strip_tags($parts[2]) : '';
                $plan_list[] = [
                  'title' => trim($title),
                  'time' => trim($time),
                  'description' => trim($description),
                ];
              }
            ?>
            <?php if (!empty($plan_list)): ?>
              <div class="__plan-card-wrapper">
                <?php foreach ($plan_list as $item): ?>
                  <article class="__plan-card">
                    <div class="__plan-card-header">
                      <h3 class="__plan-card-title"><?= $item['title'] ?></h3>
                      <p class="__plan-card-time"><i class="fa-solid fa-clock"></i> <?= $item['time'] ?></p>
                    </div>
                    <p class="__plan-card-description"><?= $item['description'] ?></p>
                  </article>
                <?php endforeach; ?>
              </div>
            <?php else: ?>
              <?= $addon->content ?>
            <?php endif; ?>
          </div>
          <p class="__plan-warning"><i class="fa-solid fa-triangle-exclamation"></i> The time is not fixed, it can be changes depending on the guest, traffic, etc</p>
        </div>
      </section>
    <?php elseif($addon->slug == "what%e2%80%99s-included"): ?>
      <section id="__included-root">
        <div class="__included-wrapper">
          <h2 class="__included-title"><?= $addon->name ?></h2>
          <?php
            preg_match_all('/<li>(.*?)<\/li>/', $addon->content, $matches);
            $included_items = $matches[1];
          ?>
          <ul class="__included-list-wrapper">
            <?php foreach ($included_items as $item): ?>
              <li class="__included-item"><i class="fa-solid fa-circle-check"></i> <?= $item ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      </section>
    <?php elseif($addon->slug == "price"): ?>
      <section id="__price-root">
        <div class="__price-wrapper">
          <h2 class="__price-title"><?= $addon->name ?></h2>

          <?php if(strpos($addon->content, "</table>") || strpos($addon->content, "</ul>")): ?>
            <div class="__wrapprice">
                <p class="d-block d-md-none mb-3">Swipe to See More Detail <i class="fa-solid fa-arrow-right ml-2"></i></p>
                <div class="__overflow-mobile">
                    <?= $addon->content ?>
                </div>
            </div>
          <?php else: ?>
            <div class="__price-content-wrapper">
              <div class="__price-content-1 __price-content">
                <h4 class="__price-content-title">Pickup in Ubud Area</h4>
                <p class="__price-content-time"><i class="fa-solid fa-clock"></i> 08.30AM</p>
                <table class="__price-content-price"></table>
              </div>
              <div class="content-2 __price-content">
                <h4 class="__price-content-title">Pickup in Ubud Area</h4>
                <p class="__price-content-time"><i class="fa-solid fa-clock"></i> 08.30AM</p>
                <table class="__price-content-price"></table>
              </div>
            </div>
          <?php endif; ?>
          <p class="__price-additional-message"></p>
        </div>
        <img
          class="__price-pattern-image"
          src="https://jwc.gotra-resources.my.id/web-upload/1740725827-28-02-2025-9gRYmMuZTN4PvSXC28nHJl7wkEyiVL3t.webp"
          alt="pattern image"
        />
      </section>
    <?php else: ?>

      <style>
          #__other-root {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
          } 
          #__other-root .__other-wrapper {
            display: flex;
            flex-direction: column;
            justify-content: start;
            align-items: start;
            margin: 4rem 7%;
            gap: 1rem;
            width: 100%;
          }
          @media (min-width: 48rem) {
            #__other-root .__other-wrapper {
            width: 80%;
            }
          }
          @media (min-width: 64rem) {
            #__other-root .__other-wrapper {
            width: 70%;
            }
          }
          #__other-root .__other-wrapper .__other-title {
            font-size: clamp(1.3rem, 2vw, 3rem);
            letter-spacing: 0.1rem;
            color: oklch(37.3% 0.034 259.733deg);
            line-height: 1.7rem;
            font-weight: bold;
            padding: 0 0 1.4rem 0;
          }
          #__other-root .__other-wrapper .__other-content-wrapper {
            width: 100%;
          }
      </style>
      <section id="__other-root">
        <div class="__other-wrapper">
          <h2 class="__other-title"><?= $addon->name ?></h2>
          <div class="__other-content-wrapper">
            <?= $addon->content ?>
          </div>
        </div>
      </section>
    <?php endif; ?>

  <?php endforeach; ?>
<?php endif ?>

<div id="__booking-root">
  <div class="__booking-wrapper">
    <a class="__booking-button" href="https://api.whatsapp.com/send?phone=<?= $data->social->whatsapp?>&text=Hello%2C%20I%20got%20information%20from%20your%20website%20https%3A%2F%2Fclagabalitours.com%2F%20and%20I%20would%20like%20to%20book%20%2A<?= $data->result->title ?>%2A.%20Can%20you%20help%20me%20with%20that%3F">Booking Now</a>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/motion@latest/dist/motion.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", () => {
    $("#__hero-root .image-wrapper.slick").slick({
      autoplay: true,
      draggable: true,
      dots: true,
      arrows: false,
      prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa-solid fa-chevron-left"></i></button>',
      nextArrow: '<button class="slide-arrow next-arrow"><i class="fa-solid fa-chevron-right"></i></button>',
      autoplaySpeed: 3000,
      speed: 1000,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
    })
  })


  const { animate, inView } = Motion
  const fadeAnimation = (component) => {
    const transition = { duration: 1, ease: "anticipate" }
    inView(component, (element) => {
      animate(element, { opacity: [0, 1] }, transition)
      return () => {
        animate(element, { opacity: [1, 0] }, transition)
      }
    })
  }
  fadeAnimation('#__hero-root .title')
  fadeAnimation('#__hero-root .image')
  fadeAnimation('#__plan-root .__plan-card')
  fadeAnimation('#__included-root .__included-list-wrapper .__included-item')
  fadeAnimation('#__price-root .__price-title')
  fadeAnimation('#__price-root .__price-ontent-title')
  fadeAnimation('#__booking-root .__booking-button')
</script>


<!--<?= $func->load('home/home_why') ?>
<?= $func->load('home/home_faq') ?>-->

