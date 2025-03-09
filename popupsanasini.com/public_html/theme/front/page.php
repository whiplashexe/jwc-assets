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
        font-weight: 600;
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

</style>

<?php if ($data->result->id == '1381'): ?>

<section class="section-allpage lazyload" data-bgset="https://jwc.gotra-resources.my.id/web-upload/1740217777-22-02-2025-paiqgmr9MnF3dIu7hSevBLyRDczWVjJb.webp">
    <div class="text wow fadeIn" data-wow-duration="2s">
        <div class="text-center w-100">
            <h1>About Us</h1>
            <p>Home - About Us</p>
        </div>
    </div> 
</section>


<section class="pad6rem">
    <div class="container-global content-page">
        <h2><?= $data->result->title ?></h2>
        <?= $data->result->content ?>
    </div>
</section>

<?php elseif ($data->result->id == '1382'): ?>

<style>
    .btn-book-atas {
        background: var(--color2);
        color: #fff;
    }
    .btn-book-atas:hover {
        background: #fff;
        color: var(--colors);
    }
    .title-coninfo {
        color: #282828;
        font-family: var(--primtext);
        font-weight: 600;
        text-transform: capitalize;
        font-size: 30px;
        margin-bottom: 20px;
        line-height: 30px;
        letter-spacing: 0.5px;
    }

    .p-coninfo {
        font-family: lato;
        font-size: 17px;
        color: #616265;
        text-align: justify;
        letter-spacing: 0px;
    }

    .wrap-coninfo {
        padding: 35px 20px;
        text-align: center;
        border: 1px solid #ececec;
        border-radius: 3px;
    }

    .wrap-coninfo .icon-coninfo {
        font-size: 40px;
        color: var(--colors);
        margin-bottom: 20px;
    }

    .wrap-coninfo h3 {
        margin-bottom: 9px;
        text-transform: capitalize;
        font-family: var(--primtext);
        letter-spacing: 0.5px;
        font-weight: bold;
        font-size: 20px;
        color: #282828;
    }

    .wrap-coninfo p {
        font-family: var(--primtext);
        color: #8f8f8f;
        font-size: 14px;
        margin-bottom: 2px;
    }

    @media (max-width: 768px) {
        .title-coninfo {
            font-size: 32px !important;
            line-height: 35px !important;
        }
    }

    html .toggle-primary .toggle label {
        font-family: var(--primtext); 
    }

    .toggle-content p {
        font-family: var(--primtext);
        line-height: 26px;
        font-size: 14px;
        color: #2a2929;
    }

    .image-profile { 
        padding: 0;
        margin-bottom: 20px; 
    }
    .legality h6 {
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
        aspect-ratio: 1/1;
        width: 200px;
        object-fit: cover;
    }

@media (min-width: 768px) {
    #header.header-no-min-height .header-body { margin-top:-3px; }
}

</style>

<section class="section-allpage lazyload" data-bgset="https://jwc.gotra-resources.my.id/web-upload/1740217777-22-02-2025-paiqgmr9MnF3dIu7hSevBLyRDczWVjJb.webp">
    <div class="text wow fadeIn" data-wow-duration="2s">
        <div class="text-center w-100">
            <h1>Visit Us</h1>
            <p>Home - Visit Us</p>
        </div>
    </div> 
</section>

<section>
<div class="container-global">
    <div class="row mt-5">

        <div class="col-md-4">
            <div class="wrap-coninfo">
                <i class="fas fa-map-marker-alt icon-coninfo"></i>
                <h3>Our Address</h3>
                <p><?= $data->company->company_address ?></p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="wrap-coninfo">
                <i class="fas fa-mobile-alt icon-coninfo"></i>
                <h3>Phone & Email</h3>
                <p><?= $data->company->company_telp ?></p>
                <p><?= $data->company->company_email ?></p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="wrap-coninfo">
                <i class="fas fa-share-alt icon-coninfo"></i>
                <h3>Stay in Touch</h3>
                <p>Follow us on Social Media</p>
                 <ul class="social-icons mt-3">
                    <li class="social-icons-instagram"><a style="font-size: 17px;" href="<?= $data->social->instagram_url ?>" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                    <li class="social-icons-instagram"><a style="font-size: 17px;" href="<?= $func->dm_whatsapp() ?>" target="_blank" title="Instagram"><i class="fab fa-whatsapp"></i></a></li>
               </ul>
            </div>
        </div>

    </div>

    <div class="row justify-content-center mt-5">
        <div class="col-lg-12">
            <h3 class="title-coninfo">Location Map</h3>
            <iframe class="mb-2" src="<?= $data->google_maps ?>" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>

        </div>
    </div>

</div>

</section>



<?php endif ?>

<?= $func->load('home/home_why') ?>

<?= $func->load('home/home_faq') ?>