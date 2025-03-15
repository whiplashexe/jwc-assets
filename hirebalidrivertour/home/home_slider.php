

<style type="text/css">
.slider-video {
  position: relative;
}
.slider-video:after {
    position: absolute;
    z-index: 4;
    content: '';
    top: 0;
    left: 0;
    right: 0;
    height: 40vh;
    transform: rotate(180deg);
    background-image: linear-gradient(180deg, rgba(0, 0, 0, 0) , rgb(0 0 0 / 70%) );
    opacity: .8;
}

.slider-video:before {
    position: absolute;
    content: '';
    bottom: 0;
    z-index: 2;
    left: 0;
    right: 0;
    height: 40vh;
    transform: rotate(0deg);
    background: linear-gradient(180deg, rgba(0, 0, 0, 0) , rgb(0 0 0 / 70%) );;
}
.img-slide {
  width: 100%;
  position: relative;
  height: 100vh;
  object-fit: cover;
  object-position: center;
  filter: brightness(.9);
}
.slider-video .text {
  position: absolute;
  z-index: 5;
  width: 100%;
  left: 0%;
  top: 50%;
  padding: 0 7%;
  transform: translateY(-40%);
}


.slider-video .text h1,
.slider-video .text h2 {
    font-size: 60px;
    line-height: 70px;
    color: #fff;
    margin: 0 0 18px auto;
    text-transform: capitalize;
    font-weight: 800;
    font-family: var(--primtext);
    letter-spacing: 1px;
    text-align: center;
    max-width: 900px;  
    margin-left: auto;  
    margin-right: auto;  
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.8);
}

.slider-video .text span {
    font-size: 14px;
    line-height: 20px;
    color: #fff;
    font-family: var(--subtext);
    letter-spacing: 2px;
    text-transform: uppercase;
    font-weight: 600;
    display: block;
    padding: 0 10px;
    text-align: center;
    width: max-content;
    margin-left: auto;
    margin-bottom: 15px;
    margin-right: auto;
    position: relative;
}
.slider-video .text span:after {
    content: "";
    width: 100%;
    height: 2px;
    position: absolute;
    background: #fff;
    bottom: 0px;
    left: 0;
}
.slider-video .text p {
    font-size: 16px;
    line-height: 30px;
    color: #fff;
    font-family: var(--subtext);
    letter-spacing: .1px;
    max-width: 800px;
    margin-left: auto;  
    margin-right: auto; 
    font-weight: 400;
    text-align: center;
}

.slider-video .text .btn {
    color: #000;
    background: var(--color2);
    margin-top: 5px;
    text-transform: uppercase;
    font-size: 14px;
    font-weight: 600;
    font-family: var(--subtext);
    padding: 12px 30px;
    letter-spacing: 2px;
    border-radius: 0;
    z-index: 5;
    border: none;
    transition: all ease 300ms;
}

.slider-video .text .btn:hover {
  background-color: #fff;
  border-color: #fff;
  color: #000;
  
}
video.videoembed {
  object-fit: cover;
  width: 100%;
  height: 100vh;
}

.patern {
  position: absolute;
  left: 0;
  bottom: -1px;
  width: 100%;
  z-index: 3;
}

@media (max-width: 768px) {
     .img-slide {
        height: 70vh;
    }
  .slider-video .baner-smal {display: none;}

  .slider-video .baner {
    left: 50%;
    transform: translateX(-50%);
    width: 50%;
    height:90%;
    background: transparent;
    background-image: linear-gradient(180deg, var(--colors),var(--colors), #00000000);
  }
  .slider-video .text {
      top: 50%;
      left: 0;
      padding-left: 3%;
      padding-right: 3%;
      width: 100%
  }

  .slider-video .text span {
    margin-left: auto;
    margin-right: auto;
    display: block;
    font-size: 10px;
  }

  .slider-video .text h1,
  .slider-video .text h2 {
    font-size: 28px;
    text-align: center;
    line-height: 38px;
  }

  .slider-video .text p {
      font-size: 13px;
      line-height: 23px;
      color: #fff;
      text-align: center;
  }

  .slider-video .text .btn {
    font-size: 12px;
    padding: 12px 20px;
}

  .slider-video:after { height: 10vh; }
}
</style>

<section class="slider-video">

  <?php foreach ($item->data as $slide): ?>
    <!--<video width="100%" height="100%" class="videoembed" preload="none" autoplay muted autobuffer playsinline loop>
      <source src="<?= base_url() ?>video.mp4" type="video/mp4">

    </video>-->
    <div class="baner"></div>
    <div class="baner-smal"></div>
    <img alt="<?= $slide->title ?>" class="img-slide" src="<?= $slide->img ?>"/>

    <div class="text">
      <span><?= $data->web->site_name ?></span>
      <h1 class="d-md-block d-none"><?= $slide->title ?></h1>
      <h2 class="d-md-none d-block">Plan Your Dream Bali Trip with Wide Bali Tours</h2>
      <p><?= $slide->text ?></p>
      <div class="d-md-flex d-flex justify-content-center">
        <a href="<?= $slide->url ?>" class="btn"><?= $slide->text_url ?></a>
      </div>
    </div>
    <?php endforeach ?>
    
</section>