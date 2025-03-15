<style type="text/css">
  
.slideshow {
  position: relative;
  z-index: 1;
  height: 100%;
  overflow: hidden;
}

.slider .item {
  height: 100%;
  position: relative;
  z-index: 1;
  background: #000;
}  

.img-slide {
  width: 100%;
  height: 100vh;
  object-fit: cover;
  object-position: center;
}


@media (max-width: 768px) {
  .img-slide {
        height: 50vh;
        opacity: 1;
    }

  .slideshow {
        height: 100%;
        margin-top: 0px;
        padding-top: 0;
    }
}

    
  
</style>

<h1 class="invisible d-none">Experience the magic of Bali with Claga Bali Tours</h1>

<div class="slideshow wow fadeIn" data-wow-duration="2s">
  <div class="slider ss-slider">
    <?php $i=1; foreach ($item->data as $slide): ?>
      <div class="item">
        <img alt="img-slider" class="img-slide" src="<?= $slide->img ?>"/>
      </div>
    <?php $i++; endforeach ?>
  </div>
</div>