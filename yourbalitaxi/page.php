<style>

    .content-page {
        position: relative;
        font-family: var(--subtext);
    }

    .content-page p {
        font-size: 15px;
        line-height: 30px;
        color: #333;
    }

    .content-page ul li {
        font-size: 15px;
        line-height: 30px;
        color: #333;
        margin-bottom: 10px;
    }

    .content-page h2 {
        line-height: 50px;
        color: var(--colors);
        letter-spacing: 0px;
        font-weight: 700;
        margin-bottom: 5px;
    }
    .content-page h3,
    .content-page h4 {
        line-height: 40px;
        font-size: 25px;
        color: var(--color2);
        letter-spacing: 0px;
        font-weight: 700;
        text-transform: capitalize;
        margin-bottom: 5px;
    }
.legality h3 {
    margin-bottom: 9px;
    text-transform: capitalize;
    font-family: var(--primtext);
    letter-spacing: 0.5px;
    font-weight: 700;
    font-size: 20px;
    color: #282828;
}
.img-contain .img-thumbnail {
    border: solid .5px #00000020;
    box-shadow: 5px 5px 10px #00000020;
    margin: 10px;
}
.img-contain img {
    aspect-ratio: 1 / 1;
    width: 460px;
    object-fit: contain;
}

.wrap-sidebar h3 {
    font-family: var(--primtext);
    color: var(--color2);
    text-transform: capitalize;
    letter-spacing: 0px;
    font-weight: 600;
    line-height: 34px;
    font-size: 25px !important;
    margin-bottom: 25px !important;
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
    letter-spacing: 0px;
    font-weight: 400;
    margin-bottom: 14px;
    padding-left: 40px;
    font-size: 14px;
    font-family: var(--subtext);
    position: relative;
    color: #333;
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

</style>

<section class="section-allpage lazyload" data-bgset="https://jwc.gotra-resources.my.id/web-upload/1740819360-01-03-2025-gmNCGwEsY0yaUATqiHzIhDdkclpQORLJ.webp">
    <div class="text wow fadeIn" data-wow-duration="2s">
        <div class="tx text-center w-100">
            <h1><?= $data->result->title ?></h1>
            <p>Home - <?= $data->result->title ?></p>
        </div>
    </div> 
</section>


<?php if ($data->result->title == 'About Us'): ?>

<?= $func->load('home/home_profile') ?>

<?php elseif ($data->result->title == 'Booking Taxi Online'): ?>

<section class="pad6rem" style="background: #f9f9f9;">
    <div class="container-global">
        
        <div class="row">
            <div class="col-md-8">
                <div class="form-style">
                    <h2>Booking Details</h2>
                    <?= $func->load('booking_form_final') ?>
                </div>
            </div>

            <div class="col-md-4">
                <div class="wrap-sidebar">
                    <h3>Reserve Today with Full Flexibility</h3>
                    <ul>
                        <li><i class="fas fa-check"></i>Change your dates and times anytime without any extra charges.</li>
                        <li><i class="fas fa-check"></i>Secure your booking today. rates may increase later.</li>
                        <li><i class="fas fa-check"></i>Add more guests or update your details whenever you need.</li>
                        <li><i class="fas fa-check"></i>Don’t want to wait? Book directly at our domestic and international arrival counters for quick and convenient service.</li>
                    </ul>

                </div>

            </div>
        </div>

    </div>
</section>

<?php else: ?>
<section class="pad6rem">
    <div class="container-global content-page">
        <h2><?= $data->result->title ?></h2>
        <?= $data->result->content ?>
    </div>
</section>

<?php endif ?>

<?= $func->load('home/home_why') ?>

<?= $func->load('home/home_faq') ?>