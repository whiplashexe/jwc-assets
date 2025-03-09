
<style type="text/css">
    .wrap-profil .profile .text h2 {
        font-size: 30px;
        line-height: 40px;
        color: #000;
        font-weight: 700;
        margin-bottom: 10px;
        letter-spacing: .3px;
        text-transform: unset;
        font-family: var(--primtext);
    } 
    .wrap-profil .profile .text h3 {
        font-size: 20px;
        line-height: 28px;
        color: #000;
        font-weight: 600;
        margin-bottom: 10px;
        letter-spacing: .3px;
        text-transform: unset;
        font-family: var(--primtext);
    } 
    .wrap-profil .profile .text p {
        text-align: left;
    }
    .wrap-profil .img-prof {
        max-height: 300px
    }
    .wrap-profil p {
        text-align: center;
        font-family: var(--primtext);
        font-size: 15px;
        letter-spacing: 0px;
        font-weight: 400;
        font-weight: 400;
        color: #5b5b5b;
    }

    .wrap-profil h3 {
        font-size: 30px;
        line-height: 40px;
        color: #000;
        font-weight: 600;
        margin-bottom: 25px;
        letter-spacing: .3px;
        text-transform: unset;
        font-family: var(--primtext);
    }

    .wrap-profil p b,
    .wrap-profil p strong {
        color: var(--color3);
    }
    .wrap-profil .check i {
        color: var(--color2);
        margin-right: 12px;
        font-size: 15px;
    }
    .wrap-profil .check .col-6 {
        font-size: 14px;
        font-weight: 400;
        color: #5b5b5b;
        font-family: var(--primtext);
        display: flex;
        justify-content: start;
    }

    .wrap-profil .btn-prof {
        color: #fff;
        background: var(--colors);
        margin-top: 5px;
        margin-right: 20px;
        text-transform: uppercase;
        font-size: 14px;
        font-weight: 600;
        font-family: var(--subtext);
        padding: 12px 30px;
        letter-spacing: 1px;
        border-radius: 50px;
        z-index: 5;
        border: none;
        transition: all ease 300ms;
    }

    .wrap-profil .btn-prof2 {
        color: #fff;
        background: black;
        margin-top: 5px;
        margin-right: 20px;
        text-transform: uppercase;
        font-size: 14px;
        font-weight: 600;
        font-family: var(--subtext);
        padding: 12px 30px;
        letter-spacing: 1px;
        border-radius: 50px;
        z-index: 5;
        border: none;
        transition: all ease 300ms;
    }

    .wrap-profil .btn-prof2:hover, 
    .wrap-profil .btn-prof:hover {
        background: transparent;
        border: 1px solid black;
        color: black;
    }

    .head-prof {
        background: #f1f1f1;
        padding: 40px;
        border-radius: 10px;
        margin-bottom: 50px;
    }
    @media screen and (max-width: 768px) {
      .wrap-profil .img-profile {
        width: 100%;
      }
      .wrap-profil .profile {
        flex-wrap: wrap;
      }
      .wrap-profil .profile h2 {
        margin-top: 15px;
      }
      .wrap-profil h6 {
        text-align: left;
      }
      .wrap-profil h2 {
        text-align: left;
        font-size: 30px;
        line-height: 38px;
      }
      .wrap-profil p {
        text-align: justify;
        font-size: 14px;
      }
    }
</style>
<!--n<?= $data->company->company_name ?>b-->
<section class="pad6rem pt-2 wow fadeIn" data-wow-duration="2s">
    <div class="container-global wrap-profil text-center text-md-left" >
      <div class="head-prof">
        <div class="profile d-flex ">
            <div class="img mr-md-5">
                <img class="img-prof" alt="Profile" src="https://jwc.gotra-resources.my.id/web-upload/1738661779-04-02-2025-GV8NdISbqph6FByUOCZkJuncltALorDs.webp" />
            </div>
            <div class="text d-flex align-items-center">
                <div class="wr">
                    <h2>Butuh Penawaran Terbaik ?</h2>
                    <p>Jangan Ragu Untuk Menghubungi Kami. Kami siap melayani 24 Jam. Kami pastikan anda akan mendapatakan penawaran dengan service dan harga terbaik.</p>
                    <div class="button">
                        <a href="<?= $func->dm_whatsapp() ?>" class="btn btn-prof"><i class="fa-brands fa-whatsapp mr-2"></i>Whatsapp Kami</a>
                        <a href="<?= $func->dm_telphone() ?>" class="btn btn-prof2"><i class="fa-solid fa-phone-volume"></i>Telepon Kami</a>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="text mt-4 text-center">
        
        <h3>Sewa Mobil di Bali dengan Layanan Terbaik dan Harga Terjangkau</h3>

        <?= $data->company->company_desc ?>

      </div>

    </div>
</section>



