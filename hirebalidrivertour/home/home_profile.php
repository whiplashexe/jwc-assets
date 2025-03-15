<style>

.profile {
    position: relative;
}
.profile .background {
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
    color: var(--colors);
    font-family: var(--primtext);
    font-size: 38px;
    line-height: 50px;
    font-weight: 600;
    text-transform: capitalize;
    letter-spacing: 1px;
    margin-bottom: 20px;
}

.profile p {
    color: #555;
    font-family: var(--subtext);
    font-size: 15px;
    font-weight: 300;
    text-align: justify;
    line-height: 28px;
    margin-bottom: 20px;
    letter-spacing: 0.2px;
}

.profile .b-img {
    aspect-ratio: 1/1.3;
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
    <div class="background" ></div>
    <div class="container-global wow fadeIn" data-wow-duration="2s" style="z-index:3; position: relative;">
        <div class="row">
          <div class="col-md-5 mb-2">
            <span>Welcome To</span>
            <h2><?= $data->company->company_name ?></h2>
          </div>
          <div class="col-md-7 mb-md-3 mb-0 d-flex align-items-end">
            <p>
              <strong>Hire Bali Driver Tour</strong> offers private drivers, tour packages, and car rentals in Bali. Enjoy a hassle-free journey with professional drivers, transparent pricing, and 24/7 service.
            </p>
          </div>
          <div class="col-md-5">
            <img src="<?= $data->company->company_image ?>" alt="<?= $data->company->company_name ?>" class="w-100 b-img d-md-block d-none" />
          </div>
          <div class="col-md-7">
            <div class="img-rg row mx-0 w-100 mb-4">
              <div class="col-6 px-1">
                <img src="https://jwc.gotra-resources.my.id/web-upload/1741850509-13-03-2025-BIgsa9VcxrwApZfh4d0WMRPTvqiLG6K2.webp" alt="About Us" class="w-100" />
              </div>
              <div class="col-6 px-1">
                <img src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1741848593-product_image-13-03-2025-M0JstQECfAGPpdDF.jpg" alt="About Us" class="w-100" />
              </div>
            </div>

            <?= $data->company->company_desc ?>
            <!--<a href="https://ubudartresort.com/about" class="btn">Read More <i class="fa-solid fa-arrow-right-long ml-3"></i></a>-->
          </div>
        </div>
    </div>

</section>



