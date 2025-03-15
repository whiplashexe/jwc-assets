<?php $title = $item->setting->title;
  $subtitle = $item->setting->subtitle;
  $subtitle_2 = $item->setting->subtitle2;
?>

<style>
  #__review-root {
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: var(--primtext);
  }
  #__review-root * {
    margin: 0;
    padding: 0;
  }
  #__review-root .__slider-wrapper {
    width: 95%;
    display: flex;
    flex-direction: column;
    justify-content: start;
    align-items: stretch;
    margin: 4rem 0;
  }
  #__review-root .__slider-wrapper header h2 {
    font-size: 1.2rem;
    font-weight: bold;
  }
  #__review-root .__slider-wrapper .product-slick {
    position: relative;
    padding: 1rem 0;
  }
  #__review-root .__slider-wrapper .product-slick .slick-list .slick-track > .__item {
    width: 400px;
    display: flex;
    border-radius: 0.7rem;
    overflow: hidden;
    padding: 2rem 1rem;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-left: 5px;
    margin-right: 5px;
    border: 1px solid gray;
  }
  #__review-root .__slider-wrapper .product-slick .slick-list .slick-track > .__item .__user {
    display: flex;
    flex-direction: column;
    justify-content: center;
    gap: 4px;
    align-items: center;
  }
  #__review-root .__slider-wrapper .product-slick .slick-list .slick-track > .__item .__user .__avatar {
    border-radius: 999em;
    overflow: hidden;
    border: 1px solid gray;
  }
  #__review-root .__slider-wrapper .product-slick .slick-list .slick-track > .__item .__user .__avatar img {
    width: 3rem;
    aspect-ratio: 4/4;
  }
  #__review-root .__slider-wrapper .product-slick .slick-list .slick-track > .__item .__user .__name {
    font-size: 0.9rem;
    font-weight: bold;
    text-align: center;
  }
  #__review-root .__slider-wrapper .product-slick .slick-list .slick-track > .__item .__message {
    margin-top: 1rem;
    width: 80%;
    text-align: center;
    display: none;
  }
  @media (min-width: 375px) {
    #__review-root .__slider-wrapper .product-slick .slick-list .slick-track > .__item .__message {
      display: inline;
    }
  }
  @media (min-width: 768px) {
    #__review-root .__slider-wrapper {
      width: 85%;
    }
    #__review-root .__slider-wrapper header h2 {
      font-size: 1.6rem;
    }
    #__review-root .__slider-wrapper .product-slick .slick-list .slick-track > .__item .__user .__name {
      font-size: 1.1rem;
    }
  }
</style>

<section id="__review-root">
  <div class="__slider-wrapper">
    
    <div class="title-why2 mb-md-3 mb-3">
        <div class="row ">
          <div class="col-md-6 px-2">
            <h2>What they say about us</h2>
            <p>Read real reviews from happy travelers who explored Bali with us.</p>
          </div>
          <div class="col-md-6 px-2 d-flex justify-content-end align-items-center">
            <!-- <a class="__explore-top" href="<?= $subtitle_2 ?>">Explore More</a> -->
          </div>
        </div>
      </div>

    <div class="product-slick ss-arrow">
      <?php
        sort($item->data);
        foreach ($item->data as $items): ?>
          <div class="__item">
            <div class="__user">
              <div class="__avatar">
                <?php if (!empty($items->img)): ?>
                  <img src="<?= $items->img ?>" alt="avatar">
                <?php else: ?>
                  <img src="https://cdn-icons-png.flaticon.com/512/219/219983.png" alt="avatar">
                <?php endif; ?>
              </div>
              <p class="__name"><?= $items->guest ?></p>
            </div>
            <div class="__rating">
              <?php
                $stars = 5;
                for ($j = 0; $j < $stars; $j++) {
                  echo "⭐";
                }
              ?>
            </div>
            <div class="__message">
              <p class="review-message" id="message-<?= $items->id ?>" data-full-message="<?= htmlspecialchars(
                $items->message
              ) ?>" data-short-message="<?= htmlspecialchars(
                strlen($items->message) > 300
                  ? substr($items->message, 0, 300) . "..."
                  : $items->message
              ) ?>">
                <?= strlen($items->message) > 100
                  ? substr($items->message, 0, 100) . "..."
                  : $items->message ?>
              </p>
              <?php if (strlen($items->message) > 50): ?>
                <a class="read-more" onclick="toggleMessage('message-<?= $items->id ?>', true)">Read More</a>
                <!-- <a class="read-less d-none" onclick="toggleMessage('message-<?= $items->id ?>', false)">Read Less</a> -->
              <?php endif; ?>
            </div>
          </div>
        <?php endforeach;
      ?>
    </div>
  </div>
</section>
