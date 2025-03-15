<style>

.profile {
    position: relative;
}
.profile .background-p {
    bottom: 0;
    left: 0;
    z-index: 2;
    width: 100%;
    height: 50%;
    position: absolute;
    background: #f9f9f9;
}
.profile span {
    color: var(--color2);
    font-family: var(--subtext);
    font-size: 15px;
    line-height: 25px;
    font-weight: 300;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-bottom: 10px;
    display: block;
}

.profile h2 {
    color: #000;
    font-family: var(--subtext);
    font-size: 40px;
    line-height: 50px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0px;
    margin-bottom: 20px;
}

.profile p {
    color: #555;
    font-family: var(--subtext);
    font-size: 15px;
    font-weight: 400;
    line-height: 28px;
    margin-bottom: 20px;
    letter-spacing: 0.2px;
}

.profile .b-img {
    aspect-ratio: 1/1.1;
    object-fit: cover;
}
.profile .img-rg img {
    aspect-ratio: 5/3.4;
    object-fit: cover;
}
.profile .btn {
    border-radius: 0;
    color: white;
    background: var(--colors);
    font-family: var(--subtext);
    font-size: 15px;
    font-weight: 300;
    line-height: 25px;
    margin-top: 10px;
    padding: .6rem 2rem;
    letter-spacing: .5px;
    transition: ease-in-out .2s;
    align-item: center;
}
.profile .btn:hover {
    background: var(--color2);
    color: #fff;
}
@media screen and (max-width: 768px) {
  .profile span {
    font-size: 12px;
    line-height: 25px;
  }

  .profile h2 {
      margin-bottom: 10px;
      font-size: 30px;
      line-height: 45px;
  }

  .profile .background {
    height: 60%;
  }
    .profile p {
        font-size: 13px;
        line-height: 23px;
        letter-spacing: 0px;
    }
  .profile .b-img {
    aspect-ratio: 1/1.4;
  }

  .profile .img-rg {
    margin-bottom: 15px !important;
  }
}
</style>

<section class="pad6rem profile" style="position: relative">
    <div class="background-p" ></div>
    <div class="container-global wow fadeIn" data-wow-duration="2s" style="z-index:3; position: relative;">
        <div class="row">
          <div class="col-md-5 mb-2">
            <span><?= $data->result->title ?></span>
            <h2><?= $data->web->site_name ?> </h2>
          </div>
          <div class="col-md-7 mb-md-3 mb-0 d-flex align-items-end">
            <p>
              At <strong><?= $data->web->site_name ?></strong>, we are passionate about delivering <strong>unforgettable travel experiences</strong> to adventure seekers from around the world.  
            </p>
          </div>
          <div class="col-md-5">
            <img src="https://jwc.gotra-resources.my.id/web-upload/1741318563-product_image-07-03-2025-LUahRXQ87i5y31or.webp" alt="<?= $data->company->company_name ?>" class="w-100 b-img d-md-block d-none" />
          </div>
          <div class="col-md-7">
            <div class="img-rg row mx-0 w-100 mb-4">
              <div class="col-6 px-1">
                <img src="https://jwc.gotra-resources.my.id/web-upload/1741320420-product_image-07-03-2025-24nyG8dJFrtRfvNc.webp" alt="About Us" class="w-100" />
              </div>
              <div class="col-6 px-1">
                <img src="https://jwc.gotra-resources.my.id/web-upload/1741684231-11-03-2025-KGx7JADiRZpEOWf2gM0nyU5Vvk9Ndcwq.webp" alt="About Us" class="w-100" />
              </div>
            </div>

            <?= $data->company->company_desc ?>
           
          </div>
        </div>
    </div>

</section>



