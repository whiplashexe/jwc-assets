<style type="text/css">
    #header.header-no-min-height .header-body {
        background: var(--colors)!important;
    }
    .btn-book-atas {
        background: var(--color2);
        color: #000;
    }
    .btn-book-atas:hover {
        color: #fff;
        background: var(--colors);
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

    .desc-single .li-icon {
        list-style: none;
        padding-left: 1.5rem;
    }
    .desc-single .li-icon i {color: var(--color2);}

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

        .menu-biru-andro { background:var(--colors) !important; }

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

<!-- NEW CSS -->
<style>
  #__single-product-root {

      flex-direction: column;
      justify-content: start;
      align-items: center;
      margin-top: 2rem;
      display: flex;
      font-family: var(--primtext), serif;
    }
  #__single-product-root .__single-product-wrapper {
      display: grid;
      gap: 2rem;
      grid-template-columns: 1fr;
      width: 85%;
    grid-template-rows: auto 220px auto auto;
      grid-template-areas: "header" "slider" "content" "aside";
    }
  #__single-product-root .__single-product-wrapper .__header {
      grid-area: header;
      display: flex;
      flex-direction: column;
      justify-content: start;
      align-items: start;
      gap: 0.4rem;
    }
  #__single-product-root .__single-product-wrapper .__header * {
      padding: 0;
      margin: 0;
  }
  #__single-product-root .__single-product-wrapper .__header .__title {
      font-size: 1.6rem;
      font-weight: bold;
  }
  #__single-product-root .__single-product-wrapper .__header .__price {
      font-size: 1.2rem;
      color: red;
      font-weight: bold;
  }
  #__single-product-root .__single-product-wrapper .__header .__duration {
      font-size: 1rem;
      color: black;
      font-weight: normal;
  }

  .__single-product-root .__single-product-wrapper .__content > * {
      display: inline-block;
      margin-bottom: 0.8rem !important;
      color: black !important;
  }
  #__single-product-root .__single-product-wrapper .__slider {
      grid-area: slider;
      position: relative;
  }
  #__single-product-root .__single-product-wrapper .__slider button.__slider-button {
      position: absolute;
      top: 50%;
      z-index: 2;
      transform: translate(0, -50%);
      border: none;
      width: 2rem;
      border-radius: 999em;
      margin: 0 4px;
      cursor: pointer;
      aspect-ratio: 1/1;
      transition: all ease-in-out .3s;
  }
  #__single-product-root .__single-product-wrapper .__slider button.__slider-button:hover {
      background-color: var(--colors);
      color: white;
  }
  #__single-product-root .__single-product-wrapper .__slider button.__slider-button.left {
      left: 0;
  }
  #__single-product-root .__single-product-wrapper .__slider button.__slider-button.right {
      right: 0;
  }
  #__single-product-root .__single-product-wrapper .__desktop-mode {
      display: none;
  }
  #__single-product-root .__single-product-wrapper .__mobile-mode {
      display: block;
  }
  #__single-product-root .__single-product-wrapper .__content {
      grid-area: content;
  }
  #__single-product-root .__single-product-wrapper .__aside {
      grid-area: aside;
  }
  @media (min-width: 768px) {
      #__single-product-root .__single-product-wrapper {
          grid-template-columns: 70% 30%;
          grid-template-rows: auto auto 1fr;
          grid-template-areas: "header aside" "slider aside" "content aside";
      }
      #__single-product-root .__single-product-wrapper .__header .__title {
          font-size: 2rem;
      }
      #__single-product-root .__single-product-wrapper .__header .__price {
          font-size: 1.4rem;
      }
      #__single-product-root .__single-product-wrapper .__header .__duration {
          font-size: 1.2rem;
      }
      #__single-product-root .__single-product-wrapper .__desktop-mode {
          display: block;
      }
      #__single-product-root .__single-product-wrapper .__mobile-mode {
          display: none;
      }
  }

@media (max-width: 768px) {
    #__single-product-root { margin-top: 0rem; }

    #__single-product-root {
          flex-direction: unset;
          justify-content: unset;
          align-items: unset;
          margin-top: unset;
          display: unset;
          font-family: unset;
    }

    #__single-product-root .__single-product-wrapper {
          display: block;
          gap: unset;
          grid-template-columns: unset;
          width: unset;
        grid-template-rows: unset;
          grid-template-areas: unset;
          padding: 8% 3%;
    }
}
</style>

<section id="__single-product-root" class="pad6rem">
  <div class="__single-product-wrapper">

    <!-- TODO:HEADER -->
    <header class="__header">
      <h1 class="__title"><?= $data->result->title ?></h1>
      <h3 class="__price">
        <?php if ($data->result->price >= 10000): ?>
            IDR <?= number_format($data->result->price) ?>
        <?php else : ?>
            USD <?= number_format($data->result->price) ?>
        <?php endif ?>

    <?php if (!empty($data->result->custom_field_4)): ?>
        /<?= $data->result->custom_field_4 ?>
    <?php endif ?>

        <?php if (!empty($data->result->custom_field_1)): ?>
            <span class="__duration">Duration: <?= $data->result->custom_field_1 ?></span>
        <?php endif ?>
        
      </h3>
      <p class="__stars">
        <?php
          $stars = 5;
          for ($i = 0; $i < $stars; $i++) {
            echo '⭐️';
          }
              echo " {$stars}/5"
        ?>
      </p>
    </header>

    <!-- TODO:SLIDER -->
    <?php if(!empty($data->images)): ?>
      <section class="__slider __desktop-mode">
        <div class="product-slick ss-arrow">
          <?php foreach ($data->images as $image): ?>
            <a style="width: 100%" class="img-thumbnail img-thumbnail-no-borders lightbox" href="<?= $image->url ?>" data-plugin-options="{'type':'image'}">
              <div class="bg-pgallery-child lazyload" data-bgset="<?= $image->url ?>"></div>
            </a>
          <?php endforeach ?>
        </div>
      </section>
        
        <!-- mobile -->
<!--      <section class="__slider __mobile-mode" style="overflow: auto">-->
<!--        <button class="__slider-button left"><i class="fa-solid fa-chevron-left"></i></button>-->
<!--        <button class="__slider-button right"><i class="fa-solid fa-chevron-right"></i></button>-->
<!--        <div class="__slider-wrapper" style="width: 100%; overflow: auto;">-->
<!--          <div style="display: flex">-->
<!--						--><?php //foreach ($data->images as $image): ?>
<!--              <a style="" class="img-thumbnail img-thumbnail-no-borders lightbox" href="--><?php //= $image->url ?><!--" data-plugin-options="{'type':'image'}">-->
<!--                <div style="width: 400px; aspect-ratio: 16/9; object-fit: cover" class="bg-pgallery-child lazyload" data-bgset="--><?php //= $image->url ?><!--"></div>-->
<!--              </a>-->
<!--						--><?php //endforeach; ?>
<!--          </div>-->
<!--        </div>-->
<!--      </section>-->

              <section class="__slider __mobile-mode" style="overflow: hidden">
<!--                <button class="__slider-button left"><i class="fa-solid fa-chevron-left"></i></button>-->
<!--                <button class="__slider-button right"><i class="fa-solid fa-chevron-right"></i></button>-->
                <div class="__slider-wrapper product-slick-single-item-mobile ss-arrow">
                    						<?php foreach ($data->images as $image): ?>
                                  <a style="" class="img-thumbnail img-thumbnail-no-borders lightbox" href="<?= $image->url ?>" data-plugin-options="{'type':'image'}">
                                    <div style="width: 400px; aspect-ratio: 16/9; object-fit: cover" class="bg-pgallery-child lazyload" data-bgset="<?= $image->url ?>"></div>
                                  </a>
                    						<?php endforeach; ?>
                </div>
              </section>
    <?php else: ?>
    <?php endif; ?>

    <!-- TODO:CONTENT -->
    <main class="__content">
      <div class="desc-single pt-0" style="border-top: none; padding: 0">
				<?php $cutkonten = explode('||', $data->result->content); ?>
				<?= $cutkonten[0] ?>
      </div>

			<?php if ($data->cat_data->id == '5786'): ?>
        <?php if (!empty($data->addon_contents)): ?>
          <?php $i=1; foreach ($data->addon_contents as $items): ?>
            <div class="wrap-addons">
              <div class="row">
                <div class="col-md-9" style="align-self: center;">
                  <h4><?= $items->name ?></h4>
									<?= $items->content ?>
                </div>
                <div class="col-md-3 d-flex align-item-center justify-content-center">
                  <a class="btn btn-bok m-0" href="<?= $items->custom_field_1 ?>">Book Now</a>
                </div>
              </div>
            </div>
          <?php endforeach ?>
        <?php endif; ?>
			<?php else: ?>
				<?php if (!empty($data->addon_contents)): ?>
          <h2 class="primarykonsing">Detail Destination</h2>
					<?php $i=1; foreach ($data->addon_contents as $items): ?>
            <div class="wrap-addons">
              <div class="row">
                <div class="col-md-3 d-flex align-item-center justify-content-center">
                  <!-- <a class="btn btn-bok m-0" href="<?= $items->custom_field_1 ?>">Book Now</a> -->
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
			<?php endif; ?>
    </main>

    <!-- TODO:SIDEBAR -->
    <aside id="book" class="__aside">
      <div class="smooth-slide" id="book"></div>
      <div class="wrap-booking-sing mb-3">
        <p class="price"><b>Booking Form</b></p>
        <?php if (!empty($data->result->custom_field_5)): ?>
            <?= $func->load('booking_form2') ?>
        <?php else: ?>
            <?= $func->load('booking_form') ?>
        <?php endif ?>
		
      </div>
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
    </aside>
  </div>
</section>
<?= $func->load('home/home_why') ?>
<?= $func->load('home/home_faq') ?>

<!--function for slider in mobile mode-->
<script>
  const leftBtn = document.querySelector(".__slider.__mobile-mode .__slider-button.left");
  const rightBtn = document.querySelector(".__slider.__mobile-mode .__slider-button.right");
  const container = document.querySelector(".__slider.__mobile-mode .__slider-wrapper");

  const scrollAmount = 400;

  leftBtn.addEventListener("click", () => {
    container.scrollBy({
      left: -scrollAmount,
      behavior: "smooth"
    });
  });

  rightBtn.addEventListener("click", () => {
    container.scrollBy({
      left: scrollAmount,
      behavior: "smooth"
    });
  });
</script>