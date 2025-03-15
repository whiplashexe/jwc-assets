<style type="text/css">
    .btn-book-atas {
        background: var(--color2);
        color: #fff;
    }
    .btn-book-atas:hover {
        background: #fff;
        color: var(--colors);
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

    // section.toggle.active {
    //     border: 1px solid #ccc;
    //     border-left: 5px solid var(--colors);
    //     border-radius: 5px;
    //     margin-bottom: 10px !important;
    // }
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
        font-weight: 500;
        color: var(--color2);
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
        color: white;
        text-transform: uppercase;
        font-weight: 500;
        letter-spacing: 1px;
        font-size: 15px;
        transition: all ease 500ms;
    }

    .wrap-exbook .btn-exbook:hover {
        background: var(--colors);
        color: white;
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

<section class="single-accomodation pad6rem">
    <div class="container-global">


         <div class="wrap-single">
            <div class="desc-single pt-0" style="border-top: none;">
                <div class="row mb-3">
                    <div class="col-md-8">
                        <h1 class="mb-3"><?= $data->result->title ?></h1>
                        <p class="mb-0"><i class="fa-solid fa-location-dot mr-2"></i>Bali, Indonesia</p>
                    </div>

                    <div class="col-md-4 align-self-end">
                        <p class="review-at text-md-right"><i class="fas fa-star mr-2"></i> 4.7 <b>(100+ Reviews)</b> <span>100+ Booked</span></p>
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
                    <div style="border-radius: 5px; height: 450px;" class="bg-pgallery lazyload" data-bgset="<?= $data->result->img_cover_url ?>"></div>
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

                    <a class="btn btn-bok mt-0 mb-3 d-block d-md-none" href="#book">Book This Packages!</a>

                    <?= $cutkonten[0]; ?>

                    <a class="btn btn-bok mb-5 mb-md-0 d-block d-md-none" href="#book">Book This Packages!</a>
                </div>

            <?php if ($data->cat_data->id == '5786'): ?>
            <?php if (!empty($data->addon_contents)): ?>

                <!-- <h2 class="primarykonsing">Destination Details</h2> -->

                <?php $i=1; foreach ($data->addon_contents as $items): ?>
                    <div class="wrap-addons">

                        <div class="row">
                            
                            
                            <div class="col-md-9" style="align-self: center;">
                                <h4><?= $items->name ?></h4>
                                <?= $items->content ?>
                            </div>

                            <div class="col-md-3 d-flex align-item-center justify-content-center">
                                <a class="btn btn-bok m-0" href="<?= $items->custom_field_1 ?>">Book Now</a>
                                <!--<img class="img-fluid" src="<?= $items->img_cover_url ?>" alt="<?= $items->name ?>">-->
                            </div>
                        </div>
                    </div>
                <?php $i++; endforeach ?>
            <?php endif ?>

            <?php else: ?>

            <?php if (!empty($data->addon_contents)): ?>

                <h2 class="primarykonsing">Destination Details</h2>

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


            <?php endif ?>

            </div>

            </div>


            <div id="book" class="col-md-4">
                <div class="wrp-fixed">
                <!-- <aside class="sidebar" id="sidebar" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'containerSelector': '.container', 'padding': {'top': 100}}">
 -->             <?php if (!empty($data->result->custom_field_1)): ?>

                    <div class="wrap-exbook mb-4">
                        <h3>
                        <span>From </span>
                        <?php if ($data->result->price >= 10000): ?>
                            IDR  <?= number_format($data->result->price) ?>
                        <?php else : ?>
                            USD <?= number_format($data->result->price) ?>
                        <?php endif ?>
                        </h3>

                        <p class="exp-1"><i class="fa-solid fa-calendar-days mr-2"></i>Book now pay later</p>
                        <p class="exp-1"><i class="fa-solid fa-thumbs-up mr-2"></i>The Best Service Guarantee</p>

                        <a class="btn btn-exbook" href="<?= $data->result->custom_field_1 ?>">Booking Now!</a>

                        <div class="wrap-exbook2">
                            <h5><i class="fa-solid fa-comments mr-2"></i>Instant Confirmation</h5>
                            <p class="mb-0">Secure your spot while staying flexible</p>
                        </div>
                    </div>

                <?php else: ?>

                    <div class="wrap-exbook mb-4">
                        <h3>
                        <span>From </span>
                        <?php if ($data->result->price >= 10000): ?>
                            IDR  <?= number_format($data->result->price) ?>
                        <?php else : ?>
                            USD <?= number_format($data->result->price) ?>
                        <?php endif ?>
                        </h3>

                        <p class="exp-1"><i class="fa-solid fa-calendar-days mr-2"></i>Book now pay later</p>
                        <p class="exp-1"><i class="fa-solid fa-thumbs-up mr-2"></i>The Best Service Guarantee</p>
                        <?php if ($data->result->package_id == '6643'): ?>
                            <a class="btn btn-exbook" href="https://api.whatsapp.com/send?phone=<?= $data->social->whatsapp?>&text=Hello%2C%20I%20got%20information%20from%20your%20website%20https%3A%2F%2Febakikitchen.com%2F%20and%20I%E2%80%99d%20like%20to%20book%20the%20%2A<?= $data->result->title ?>%2A.%20Could%20you%20assist%20me%20with%20that%3F">Booking Now!</a>
                        <?php else: ?>
                            <a class="btn btn-exbook" href="https://api.whatsapp.com/send?phone=6287847036249&text=Hello%2C%20I%20got%20information%20from%20your%20website%20https%3A%2F%2Febakikitchen.com%2F%20and%20I%E2%80%99d%20like%20to%20book%20the%20%2A<?= $data->result->title ?>%2A.%20Could%20you%20assist%20me%20with%20that%3F">Booking Now!</a>
                        <?php endif ?>
            
                        <div class="wrap-exbook2">
                            <h5><i class="fa-solid fa-comments mr-2"></i>Instant Confirmation</h5>
                            <p class="mb-0">Secure your spot while staying flexible</p>
                        </div>
                    </div>

                <?php endif ?>
                <!-- </aside> -->

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
</section>


    <?= $func->load('home/home_faq') ?>

