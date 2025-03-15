
<style type="text/css">
    .wrap-profil .img-profile {
      width: 90%;
      position: relative;
      object-fit: cover; 
      background: #fff;
      z-index: 5;
    }
    .wrap-profil .img {
        position: relative;
    }
    .wrap-profil .img:before {
        content: "";
        position: absolute;
        left: -5px;
        top: -5px;
        width: 80%;
        z-index: 2;
        height: 40%;
        background: var(--colors);
    }
    .wrap-profil .img:after {
        content: "";
        position: absolute;
        right: 10%;
        bottom: -5px;
        width: 80%;
        z-index: 2;
        transform: translateX(5px);
        height: 30%;
        background: var(--color2);
    }
    .wrap-profil .span {
        font-size: 14px;
        font-weight: 600;
        text-transform: uppercase;
        line-height: 20px;
        color: var(--colors);
        letter-spacing: .5px;
        border-radius: 50px;
        padding: 1px 3px;
        font-family: var(--subtext);
        display: block;
        width: max-content;
        position: relative;
        margin-bottom: 8px;
    }
    .wrap-profil span:after {
        content: "";
        width: 100%;
        height: 2px;
        position: absolute;
        background: var(--colors);
        bottom: 0px;
        left: 0;
    }
    .wrap-profil h2 {
        font-size: 45px;
        line-height: 115%;
        font-weight: 700;
        color: var(--color2);
        max-width: 800px;
        margin: auto;
        margin-bottom: 50px;
        text-transform: unset;
        font-family: var(--primtext);
    }
    .wrap-profil p {
      text-align: justify;
      font-family: var(--primtext);
      font-size: 15px;
      font-weight: 400;
      color: #696969;
    }
    .wrap-profil p strong {
        color: var(--color2);
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
    .wrap-profil .btn {
      color: #fff;
      font-size: 14px;
      border-radius: 5px;
      letter-spacing: .5px;
      display: inline-block;
      text-decoration: none;
      padding: 0.5rem 1.7rem;
      text-transform: uppercase;
      transition: ease-in-out 0.3s;
      font-family: var(--primtext);
      border: 2px solid var(--color2);
      background-color: var(--color2);
    }
    .wrap-profil .btn:hover {
      background-color: var(--colors);
      border: 2px solid var(--colors);
    }
    @media screen and (max-width: 768px) {
      .wrap-profil .img-profile {
        width: 100%;
        height: 350px;
      }
      .wrap-profil .img:after {
        right: 0;
      }
      .wrap-profil .span {
        text-align: center;
        margin-left: auto;
        margin-right: auto;
        font-size: 11px;
      }
      .wrap-profil h2 {
        font-size: 28px;
        line-height: 38px;
      }
      .wrap-profil p {
        text-align: justify;
        font-size: 14px;
      }
    }
</style>

<section class="py-5 mt-md-5 mb-md-4 wow fadeIn" data-wow-duration="2s">
    <div class="container wrap-profil text-center text-md-left" >

      <div class="container">
        <div class="row">

          <div class="col-sm-6 order-lg-1 order-2 d-flex align-items-center">
            <div class="img h-100">
                <img
                src="<?= $data->company->company_image ?>"
                alt="About Us"
                class="img-profile h-100"
                />
            </div>
          </div>

          <div class="col-sm-6 order-lg-2 order-1 mb-4 d-flex align-items-center">
            <div class="text">
              <span class="span">About Us</span>
              <h2 class="mb-3"><?= $data->company->company_name ?></h2>
              <?= $data->company->company_desc ?>

              <!--<div class="check mt-4 d-flex">
                <div class="col-6 p-0 mb-2">
                  <i class="fa-solid fa-circle-check"></i>
                  Already Certified
                </div>
                <div class="col-6 p-0 mb-2">
                  <i class="fa-solid fa-circle-check"></i>
                  Professional Team
                </div>
                <div class="col-6 p-0 mb-2">
                  <i class="fa-solid fa-circle-check"></i>
                  Facilities & Services
                </div>
                <div class="col-6 p-0 mb-2">
                  <i class="fa-solid fa-circle-check"></i>
                  Best Experience
                </div>
              </div>-->

            </div>
          </div>
          
        </div>
      </div>     

    </div>
</section>



