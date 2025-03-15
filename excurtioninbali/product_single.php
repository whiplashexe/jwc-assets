<style type="text/css">
   #header.header-no-min-height .header-body {
        min-height: 0!important;
        background: var(--color2) !important;
        margin-top: 0 !important;
    }

.single-accomodation {margin-top: -5rem}
.desc-single h1 {
    font-size: 30px;
    font-family: var(--primtext);
    letter-spacing: 0px;
    font-weight: 800;

    color: #000;
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
        font-family: var(--subtext);
        font-size: 15px;
        color: #555;
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
        font-family: var(--subtext);
        letter-spacing: 0px;
        font-weight: 500;
        color: #000;
        line-height: 30px;
    }

    .desc-single li {
        font-family: var(--subtext);
        font-size: 15px;
        color: #333;
        line-height: 23px;
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
        font-family: var(--subtext);
        padding: 10px;
        background: var(--colors);
        color: white;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-size: 12px;
    }

    .desc-single td {
        padding: 5px;
        font-family: var(--subtext);
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
        font-family: var(--subtext);
    }

    .wrap-booking-sing b { font-size: 17px; }

    .wrap-booking-sing form#contactForm {
        padding: 0px 15px;
    }

    .wrap-booking-sing form#contactForm label {
        font-family: var(--subtext);
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
        font-family: var(--subtext);
    }

    .wrap-detailtour span { font-family: var(--subtext); }

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
        font-family: var(--subtext);
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
        font-family: var(--subtext);
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
        .single-accomodation {margin-top: -2rem}

        .img-singlee { height: auto; }

        .desc-single { padding:unset; }

        .desc-single h1 {
            font-size: 25px;
            line-height: 32px;
        }
    }

    .wrap-addons h4 {
        font-family: var(--subtext);
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
    font-family: var(--subtext);
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
    font-family: var(--subtext);
    text-transform: capitalize;
    font-size: 16px;
    font-weight: 800;
    letter-spacing: 0.5px;
    line-height: 22px;
    margin-bottom: 10px;
}

.side-blog p {
    font-family: var(--subtext);
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
    font-family: var(--subtext);
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
    font-family: var(--subtext);
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
    color: #000;
    text-transform: capitalize;
    letter-spacing: 0.3px;
    font-weight: 800;
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
    font-family: var(--subtext);
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
    font-family: var(--subtext);
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
        font-family: var(--subtext);
        /* border: 1px solid #ccc; */
        box-shadow: 10px 10px 30px #00000029;
        border-radius: 10px;
        padding: 35px;
    }

    .wrap-exbook h5 {
        color: #000;
    }
    .wrap-exbook p {
        color: #000;
    }
    .wrap-exbook h3 {
        font-weight: 800;
        color: var(--colors);
        margin-bottom: 20px;
        font-family: var(--primtext);
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
        background: var(--colors);
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
        background: var(--color2);
        color: var(--colors);
    }

    .wrap-exbook2 h5 {
        margin-bottom: 10px;
        letter-spacing: .5px;
        font-family: var(--subtext);
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
.faq.pt-0 {
    padding-top: unset;
}

.wrp-img img {
    border-radius: 10px;
    height: 400px;
    object-fit: cover;
}
.carousel-wall1 .slick-track {
  display: flex;
  flex-direction: row-reverse; /* Balik urutan slide */
}

.carousel-wall1 .slick-slide {
  transform: scaleX(-1); /* Balik setiap slide secara horizontal */
}

.carousel-wall1 {
  transform: scaleX(-1); /* Balik container untuk mengembalikan tampilan normal */
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
   .wrp-img img {
        height: 200px;
    }
}

</style>

<section class="single-accomodation pad6rem">
    <div class="img-slide-wrap">
        <?php if (!empty($data->images)): ?>
            <div class="lightbox" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}, 'mainClass': 'mfp-with-zoom', 'zoom': {'enabled': true, 'duration': 300}}">
                <div class="carousel-wall mb-3">
                    <div class="px-2">
                        <div class="wrp-img">
                            <a class="lightbox" href="<?= $data->result->img_cover_url ?>">
                                <img class="img-fluid w-100" src="<?= $data->result->img_cover_url ?>" alt="<?= $data->result->title ?>">
                            </a>
                        </div>
                    </div>
                    <?php $i=1; foreach ($data->images as $img): ?>
                        <div class="px-2">
                            <div class="wrp-img">
                                <a class="lightbox" href="<?= $img->url ?>">
                                    <img class="img-fluid w-100" src="<?= $img->url ?>" alt="<?= $data->result->title ?>">
                                </a>
                            </div>
                        </div>
                    <?php $i++; endforeach ?>
                </div>
            </div>
            
        <?php else: ?>
            <div class="row">
                <div class="col-md-12 pr-andro">
                    <div style="border-radius: 5px; height: 450px;" class="bg-pgallery lazyload" data-bgset="<?= $data->result->img_cover_url ?>"></div>
                </div>
            </div>
        <?php endif ?>
    </div>

    <div class="container-global pt-md-4 pt-3">

        <?php $cutkonten = explode('||', $data->result->content); ?>
        <div class="row ">
            <div class="col-md-8">

           <div class="wrap-single">
                <div class="desc-single pt-0" style="border-top: none;">
                    <h1 class="mb-3"><?= $data->result->title ?></h1>

                    <?= $cutkonten[0]; ?>

                </div>

            </div>

            </div>


            <div id="book" class="col-md-4">
                <div class="wrp-fixed">
                <!-- <aside class="sidebar" id="sidebar" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'containerSelector': '.container', 'padding': {'top': 100}}">
 -->          

                    <div class="wrap-exbook mb-4">
                        <h3>
                            <span>From </span>
                            <?php if ($data->result->price >= 10000): ?>
                                IDR <?= number_format($data->result->price) ?>
                            <?php else : ?>
                                USD <?= number_format($data->result->price) ?>
                            <?php endif ?>
                        </h3>

                        <p class="exp-1"><i class="fa-solid fa-calendar-days mr-2"></i>Order now for tomorrow</p>
                        <p class="exp-1"><i class="fa-solid fa-money-bill mr-2"></i>Lowest Price Guarantee</p>

                        <a class="btn btn-exbook" href="https://api.whatsapp.com/send?phone=<?= $data->social->whatsapp?>&text=Hello%2C%20I%20got%20information%20from%20your%20website%20<?= $data->web->site_domain ?>%2F%20and%20I%20would%20like%20to%20book%20%2A<?= $data->result->title ?>%2A.%20Can%20you%20help%20me%20with%20that%3F">Booking Now</a>

                        <div class="wrap-exbook2">
                            <h5><i class="fa-solid fa-clock mr-2"></i>Free Cancellation</h5>
                            <p>up to 24 hours before the experience starts (local time)</p>

                            <h5><i class="fa-solid fa-comments mr-2"></i>Instant Confirmation</h5>
                            <p class="mb-0">Secure a spot while remaining flexible</p>
                        </div>

                    </div>


                <!-- </aside> -->

                <div class="wrap-sidebar mt-4">
                    <?= $func->sidebar('mainmain') ?>
                </div>

                <div class="wrap-sidebar mt-4">
                    <h3>Contact Us</h3>
                    <ul>
                        <li><i class="fas fa-phone"></i><a style="color: black;" href="<?= $func->dm_telphone() ?>"><?= $data->company->company_telp ?></a></li>
                        <li><i class="fab fa-whatsapp"></i><a style="color: var(--colors);" href="https://api.whatsapp.com/send?phone=<?= $data->social->whatsapp ?>&text=Hello%2C%20I%20got%20this%20number%20from%20the%20website%20https%3A%2F%2F<?= $data->web->site_domain; ?>.%20I%E2%80%99d%20like%20to%20ask%20something%20can%20you%20help%20me%3F">+<?= $data->social->whatsapp ?></a></li>
                        <li><i class="fas fa-envelope"></i><a style="color: black;" href="<?= $func->dm_email() ?>"><?= $data->company->company_email ?></a></li>
                    </ul>

                </div>
            </div>
            </div>
        </div>

    </div>
</section>

<?= $func->load('home/home_reviewcut') ?>

<?= $func->load('home/home_faq') ?>