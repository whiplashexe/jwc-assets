<style type="text/css">

.desc-single h2 {
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

    .desc-single hr {background: var(--colors);}
    .desc-single ul {
        padding-left: 1rem;
        list-style: none;
    }
    .desc-single ul li i {color: var(--colors);}
    .desc-single li {
        font-family: var(--primtext);
        font-size: 15px;
        color: #333;
        line-height: 28px;
        margin-bottom: 10px;
        text-align: justify;
    }
    .desc-single li strong {color: var(--colors);}

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


    .main { background: white !important; }



header#header { position: relative !important; }

#header.header-no-min-height .header-body {
        min-height: 0!important;
    }

.book-details h3 {
    font-weight: 600;
    font-family: var(--primtext);
    letter-spacing: 0px;
    font-size: 35px;
    line-height: 45px;
    margin-bottom: 40px;
}

.book-details label {
    font-family: var(--primtext);
    color: #333;
}

.btn-cta {
    font-family: var(--primtext);
    background: var(--colors);
    color: #fff;
    border: 1px solid #fff;
    text-transform: capitalize;
    border-radius: 100px;
    padding: 10px 30px;
    font-weight: 600;
    font-size: 15px;
    margin-top: 5px;
    letter-spacing: 1px;
}

.btn-cta1 {
    font-family: var(--primtext);
    background: #25d366;
    color: #fff;
    border: 1px solid #fff;
    text-transform: capitalize;
    border-radius: 100px;
    padding: 10px 30px;
    font-weight: 600;
    font-size: 15px;
    margin-top: 5px;
    letter-spacing: 1px;
}

.btn-cta:hover, .btn-cta1:hover {
    background: black;
    color: white;
}

@media (min-width: 768px) {

    html:not(.sticky-header-active) .header-body {
        margin-top: 0px !important;
        transition: all ease 1000ms !important;
    }
}
@media (max-width: 768px) {
    .desc-single ul {padding-left: 0;}
    .desc-single li {
        font-size: 14px;
        line-height: 25px;
        margin-bottom: 7px;
    }

    .btn-cta, .btn-cta1 {
        width: 100%;
    }

    .desc-single h2 {
        font-size: 24px;
        line-height: 40px;
    }

    .book-details h3 {
        font-size: 25px;
        line-height: 35px;
    }
}


</style>

<section class="section-allpage lazyload" data-bgset="https://jwc.gotra-resources.my.id/web-upload/1740819360-01-03-2025-gmNCGwEsY0yaUATqiHzIhDdkclpQORLJ.webp">
    <div class="text wow fadeIn" data-wow-duration="2s">
        <div class="tx text-center w-100">
            <h1><?= $data->result->title ?></h1>
            <p>Home - <?= $data->result->title ?></p>
        </div>
    </div> 
</section>

<section class="single-accomodation pad6rem">
    <div class="container-global">
        <div class="wrap-single">
            <div class="desc-single pt-0" style="border-top: none;">
                <h2><?= $data->result->title ?></h2>
                <?php $i=1; foreach ($data->addon_contents as $items): ?>
                    <?= $items->content ?>
                <?php $i++; endforeach ?>

                <div class="butcta">
                    <?php if ($data->cat_data->id == '6522'):  ?>
                        <a class="btn btn-cta mr-2" target="_blank" href="https://forms.gle/uUyBfo63WCYCX8Vx9">Order Now!</a>

                        <a class="btn btn-cta1 mr-2" href="<?= $func->dm_whatsapp() ?>"><i class="fab fa-whatsapp mr-2"></i>Have Question ? Contact Us</a>

                    <?php else: ?>

                        <a class="btn btn-cta mr-2" href="https://api.whatsapp.com/send?phone=<?= $data->social->whatsapp ?>&text=Hello%20Admin%20Bali%20Travel%20SIM%20Card.%20I%20want%20to%20order%20<?= $data->result->title ?>.%20Can%20you%20help%20me%3F"><i class="fab fa-whatsapp mr-2"></i>Order Now!</a>

                    <?php endif ?>
                </div>
            </div>
        </div>            
    </div>
</section>


    <?php if ($data->cat_data->id == '6522'):  ?>
        <?= $func->sidebar('esim') ?>
    <?php else :  ?>
        <?= $func->sidebar('topup') ?>
    <?php endif  ?>
    
    <?= $func->load('home/home_our') ?>   

    <?= $func->load('home/home_why') ?>

    <?= $func->load('home/home_faq') ?>

