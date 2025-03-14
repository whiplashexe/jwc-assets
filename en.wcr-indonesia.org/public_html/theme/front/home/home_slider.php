<style type="text/css">
  
  /*Slider*/

@media (min-width: 768px) {

   .text-slider h1 {
      font-family: 'DINNextRoundedLTW01-Light';
      line-height: 55px;
      font-size: 45px;
      text-align: left;
      letter-spacing: 0px;
      margin-bottom: 20px;
      font-weight: 500;
      color: white;
      width: 580px;
      padding-left: 70px;
  }

  .text-slider p {
    font-family: 'DINNextRoundedLTW01-Light';
    font-weight: 400;
    font-size: 17px;
    font-style: normal;
    letter-spacing: 0.5px;
    width: 800px;
    line-height: 25px;
    margin: auto;
    margin-bottom: 30px;
}

  .text-slider hr {
    width: 35px;
    margin: auto;
    margin-bottom: 20px;
    background: white;
    height: 3px;
  }

  .text-slider {
      position: absolute;
      top: 28%;
      left: 0%;
      right: 0;
      text-align: center;
  }

  .btn-slider-f {
    padding: 15px 25px;
    background: var(--colors);
    font-family: 'DINNextRoundedLTW01-Light';
    color: white;
    border-radius: 5px;
    font-weight: 600;
    letter-spacing: 2px;
    text-transform: uppercase;
    transition: all ease 500ms;
}

  .wrap-slider {
    height: 500px;
  }
}


@media (max-width: 768px) {

  .text-slider h1 {
   display: none;
  }

  .text-slider p {
      font-family: 'Poppins';
      font-weight: 300;
      font-size: 12px;
      font-style: normal;
      letter-spacing: 0.5px;
      padding: 0px 10px;
      line-height: 21px;
      margin: auto;
      margin-bottom: 40px;
  }

  .btn-slider-f {
    display: none;
  }

  .text-slider { 
    top: 27%;
  }

  .wrap-slider {
      height: 300px;
  }

}

.btn-slider-f:hover {
  transition: all ease 500ms;
  color: white;
  background-color: black;
  border-color: black;
}

.wrap-slider:after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: black;
    opacity: 0.2;
}


</style>

<div class="wrap-slider-atas" style="margin: 0px 5%; margin-top: 110px; margin-bottom: 40px;">
<section class="position-relative margin-atas" style="position: relative;">  
  <div class="owl-carousel owl-theme nav-inside nav-style-1 nav-light mb-0" data-plugin-options="{'items': 1, 'margin': 0, 'loop': true, 'nav': false, 'dots': false, 'autoplay': true, 'autoplayTimeout': 6000}">

    <?php foreach ($item->data as $slide): ?>
    <div class="wrap-slider lazyload" data-bgset="<?= $slide->img ?>">

      <div class="text-slider wow fadeInUp" style="z-index: 1;">
        <h1><?= $slide->title ?></h1>
        <p><?= $slide->text ?></p>
        <?php if (!empty($slide->text_url)): ?>
          <a class="btn btn-slider-f" href="<?= $slide->url ?>"><?= $slide->text_url ?></a>
        <?php endif ?>
      </div>

    </div>
     <?php endforeach ?>

  </div>

</section>
</div>