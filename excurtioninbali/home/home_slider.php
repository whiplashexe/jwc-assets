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
  filter: brightness(.6);
  object-fit: cover;
  object-position: top;
}

.slider-tt {
    position: absolute;
    top: 50%;
    width: 100%;
    left: 0;
    right: 0;
    text-align: center;
    transform: translateY(-40%);
    z-index: 100;
}

.slider-tt h1 {
    font-family: var(--primtext);
    color: white;
    font-weight: 900;
    letter-spacing: 0.5px;
    font-size: 55px;
    line-height: 65px;
    margin-bottom: 15px;
    text-align: center;
    text-transform: uppercase;
    font-style: italic;
}

.slider-tt span {
    font-family: var(--spantext);
    color: var(--colors);
    font-size: 22px;
    letter-spacing: 1px;
    display: block;
    margin-bottom: 8px;
    line-height: 45px;
}

.slider-tt p {
    font-family: var(--subtext);
    color: #fff;
    font-size: 18px;
    text-align: center;
    text-transform: unset;
    letter-spacing: 0.5px;
    font-weight: 400;
    width: 850px;
    line-height: 30px;
    margin-bottom: 0px;
    margin: auto;
}

.btn-slider {
    font-family: var(--primtext);
    background: var(--colors);
    color: black;
    margin-top: 27px;
    padding: 12px 25px;
    text-transform: uppercase;
    font-weight: 700;
    font-size: 15px;
    letter-spacing: 1px;
    border-radius: 100px;
    transition: all ease 500ms;
}

.btn-slider i { color:#000; transition:all ease 500ms; }

.btn-slider:hover {
  background: var(--colors);
  color: white;
}

.btn-slider:hover i { color:white; }

@media (max-width: 768px) {

  .img-slide {
    height: 65vh;
    opacity: 1;
    filter: brightness(.5);

  }
  .slideshow { min-height: unset; height: 65vh; margin-top:0; }

    .slider-tt {
        height: fit-content;
        bottom: 0%;
        text-align: center;
    }

  .slider-tt h1 span {
        font-size: 25px;
        line-height: 25px;
    }

    .slider-tt span {
        font-size: 15px;
        margin-bottom: 8px;
        line-height: 23px;
    }

    .slider-tt h1 {
        font-size: 26px;
        line-height: 35px;
        margin-bottom: 13px;
    }

    .slider-tt p {
        font-size: 14px;
        font-weight: 400 !important;
        padding: 0px 10px;
        width: unset;
        line-height: 25px;
    }

    .btn-slider {
        padding: 10px 20px;
        font-size: 12px;
    }

    .slider-tt { top: 46%; }
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

  <?php 
    $_slider = json_decode(json_encode([
      'span' => 'Welcome to Excurtion in Bali',
      'title' => 'Experience the Best<br>Bali Adventures & Tours!',
      'description' => 'Unforgettable adventures from Bali’s stunning beaches to thrilling jungle rides. Book now & create your best Bali memories!',
      'actions' => [
        'button' => [
            'text'=> 'Explore Our Activities',
            'link'=> 'https://excurtioninbali.com/category/bali-adventure'
        ]
      ] 
    ]))
  ?>
  <div class="slider">

    <?php foreach ($item->data as $slide): ?>
      <div class="item">
        <img alt="img-slider" class="img-slide" src="<?= $slide->img ?>"/>
      </div>
    <?php endforeach ?>
  </div>

    <div class="slider-tt wow fadeIn" data-wow-duration="2s" data-wow-delay='0.5s'>
      <span>Welcome to <?= $data->web->site_name ?></span>
        <h1>
          <?= $_slider->title; ?>
        </h1>
        <p><?= $_slider->description; ?></p>

        <a class="btn btn-slider" href="<?= $_slider->actions->button->link; ?>">
          <i class="fa-solid fa-arrow-right mr-2"></i><?= $_slider->actions->button->text; ?>
        </a>

    </div>

</div>
