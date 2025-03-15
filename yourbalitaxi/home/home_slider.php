<style type="text/css">
  
.slideshow {
  position: relative;
  font-family: var(--primtext);
  z-index: 1;
  min-height: 100vh;
  overflow: hidden;
}

.slider .item {
  height: 100%;
  position: relative;
  z-index: 1;
  background: #000;
}

/* .slider .item:before {
    position: absolute;
    content: '';
    top: 0;
    left: 0;
    right: 0;
    height: 180px;
    background: linear-gradient(180deg, var(--color2) 0%, rgba(0, 0, 0, 0) 100%);
    z-index: 2;
} */

.slider .item:after {
    position: absolute;
    content: '';
    bottom: 0;
    left: 0;
    right: 0;
    height: 25%;
    transform: rotate(180deg);
    background: linear-gradient(180deg, #000000 -50%, rgba(0, 0, 0, 0) 100%);
}

.img-slide {
  width: 100%;
  height: 100vh;
  filter: brightness(.8);
  object-fit: cover;
  object-position: top;
}

.slider-tt {
    position: absolute;
    top: 0;
    bottom: 0;
    align-content: center;
    width: 100%;
    height: 100%;
    left: 0;
    right: 0;
    padding: 0 7%;
    z-index: 100;
}

.slider-tt .sp-slide {
    font-family: var(--subtext);
    color: var(--colors);
    font-size: 20px;
    text-transform: unset;
    letter-spacing: 0px;
    display: block;
    position: relative;
    font-weight: 600;
    margin-bottom: 10px;
}
.slider-tt h1 {
    position: relative;
    font-family: var(--primtext);
    color: #fff;
    font-size: 47px;
    line-height: 50px;
    letter-spacing: .1px;
    text-transform: capitalize;
    display: inline-block;
    font-weight: 700;
    margin: 0 0 20px;

}
.slider-tt .why-slider {
    font-family: var(--subtext);
    color: #fff;
    font-size: 18px;
    text-transform: unset;
    letter-spacing: 0px;
    font-weight: 400;
    margin-bottom: 40px;
}
.slider-tt .ws-items i {
    color: var(--colors);
}
.slider-tt .ws-items {
    margin-right: 15px;
}


@media (max-width: 768px) {
    .img-slide {
        height: 40vh!important;
        opacity: 1;
        filter: brightness(.5);
    }
    .slideshow { height: unset; margin-top:0; }
    .comand-title{
        left: 34px;
        top: -85px;
        color: #fff;
    }
    .slider-tt {
        height: unset;
        bottom: 0%;
        padding: 1.8rem 3%;
        background: #fff;
        margin-top: -3rem;
        border-radius: 0;
        text-align: center;
        position: relative;
    }


    .slider-tt h1 {
        font-size: 28px;
        line-height: 35px;
        font-weight: 600;
        text-transform: capitalize;
        margin-bottom: 15px;
        color: var(--colors);
    }

      .slider-tt .why-slider {
        font-size: 14px;
        font-weight: 400 !important;
        padding: 0px;
        margin-bottom: 0;
        text-align: center;
        color: #626262;
    }
}

.slick-dots {
    display: flex;
    justify-content: center;
    margin: 0;
    position: absolute;
    bottom: 8%;
    right: 10%;
    z-index: 10;
    padding: 1rem 0;
    list-style-type: none;
}
    
.slick-dots li {
    margin: 0 12px;
}

.slick-dots button {
    display: block;
    width: 11px;
    height: 11px;
    padding: 0;
    border: none;
    border-radius: 100%;
    background-color: #ffffff66;
    text-indent: -9999px;
}

.slick-dots li.slick-active button {
    background-color: #fff;
}
    
  .slider .col-custom {
    width: 20%;
  }
  
@media (max-width: 768px) {
    .slick-dots { display:none !important; }
    .slider.col-custom {
      width: 100%;
    }
}  
</style>

<!--<h1 class="invisible d-none"><?= $data->web->site_name ?></h1>-->

<div class="slideshow">
  <div class="slider">

    <?php foreach ($item->data as $slide): ?>
      <div class="item">
        <img alt="img-slider" class="img-slide wow fadeIn" data-wow-duration="2s" data-wow-delay='0.5s' src="<?= $slide->img ?>"/>
      </div>
    <?php endforeach ?>
  </div>

    <div class="slider-tt wow fadeIn" data-wow-duration="1s" data-wow-delay='0.2s'>
        <span class="sp-slide"><?= $data->web->site_name ?></span>
        <h1>
          Your Trusted Bali Taxi <br>And Private Driver Service
        </h1>
        <div class="why-slider d-md-flex d-block align-items-center">
            <div class="ws-items"><i class="fa-solid fa-square-check mr-3"></i>Reliable & Professional Drivers </div>
            <div class="ws-items"><i class="fa-solid fa-square-check mr-3"></i>Affordable & Transparent Pricing </div>
            <div class="ws-items"><i class="fa-solid fa-square-check mr-3"></i>Flexible & Customizable Trips </div>
        </div>

        <?= $func->load('home/home_book') ?>

    </div>

</div>
