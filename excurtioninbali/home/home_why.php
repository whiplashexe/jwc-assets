<style>

.why .sp-atas {
    color: var(--colors);
    font-family: var(--spantext);
    font-size: 20px;
    line-height: 27px;
    font-weight: 400;
    text-transform: capitalize;
    letter-spacing: 0px;
    margin-bottom: 10px;
    display: block;
}

.why h2 {
    color: #fff;
    font-family: var(--primtext);
    font-size: 40px;
    line-height: 50px;
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 20px;
}

.why .number span {
    font-size: 20px;
    letter-spacing: 0.4px;
    line-height: 30px;
    display: block;
    text-align: right;
    font-weight: 500;
    color: var(--colors);
    font-family: var(--primtext);
}

.why .why-contain.center {
    background: #000;
    border: none;
    border-radius: 8px;
}

.why .list-why h3 {
    color: #fff;
    font-family: var(--primtext);
    font-size: 25px;
    line-height: 30px;
    font-weight: 800;
    text-transform: capitalize;
    letter-spacing: 0.2px;
    margin-bottom: 10px;
}

.why .list-why p {
    color: #f1f1f1;
    font-family: var(--subtext);
    font-size: 17px;
    line-height: 28px;
    font-weight: 400;
    letter-spacing: 0px;
    margin-bottom: 0px;
}

.why .why-contain {
  width: 80%;
}
.why .img-wraper {
  position: relative;
  height: 600px;
}
.why .img-wraper .img-back {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 2;
  width: 80%;
  height: 100%;
  object-fit: cover;
  filter: brightness(.5);
  border-radius: 18px;
}
.why .img-wraper .img-why {
  border-radius: 18px;
  transform: translateY(-50%);
  height: 85%;
  width: 80%;
  z-index: 3;
  right: 0;
  top: 50%;
  position: absolute;
  object-fit: cover;
}

@media (max-width: 768px) {

  .why h2 {
      text-align: center;
      margin-bottom: 10px;
      font-size: 25px;
      line-height: 33px;
  }

  .why h2 span {
    text-align: center;
    font-size: 33px;
    line-height: 35px;
  }

  .why .sp-atas {
    font-size: 15px;
    line-height: 15px;
    margin-bottom: 10px;
    text-align: center;
  }
  .why .why-contain h3 {
    font-size: 21px;

  }

  .why .icon .bx {
    width: 3rem;
    height: 3rem;
    margin-bottom: 1rem;
  }
  .why .why-contain {
    width: 100%;
  }
  .why .img-wraper {
    height: 400px;
  }
}
</style>

<section class="pad6rem why wow fadeIn" style="background: #1a1a1a;">

  <?php 
    $_why = json_decode(json_encode([
      'span' => 'Why Choose Us',
      'title' => 'Here\'s Why Travelers Love Us!',
      'items' => [
        [
          'title' => 'Best Price Guarantee',
          'description' => 'Get the best value for your money with our transparent pricing and exclusive deals on Bali’s top tours and activities.'
        ],
        [
          'title' => 'Instant Booking',
          'description' => 'Enjoy a seamless online booking experience with secure payment options and 24/7 customer support.'
        ],
        [
          'title' => 'Family-Friendly & Customizable',
          'description' => 'Whether you\'re a solo traveler, couple, or family, our tours are designed to fit all ages and preferences.'
        ],
      ],
      'images' => [
        'front' => ['link'=> 'https://jwc.gotra-resources.my.id/web-upload/1741684231-11-03-2025-KGx7JADiRZpEOWf2gM0nyU5Vvk9Ndcwq.webp', 'alt' => 'why choose us image'],
        'back' => ['link'=> 'https://jwc.gotra-resources.my.id/web-upload/1741684200-11-03-2025-s2GwIzHDQSAUX65a3WftLZhvrEJPk1Cy.webp', 'alt' => 'why choose us image'],
      ]
    ]))
  ?>

  <div class="container-global">
    <div class="row justify-content-between" style="flex-direction: row-reverse;">
      <div class="col-md-5 align-self-center">
        <div class="img-wraper w-100 ">
          <img src="<?= $_why->images->back->link; ?>" class="img-back" alt="<?= $_why->images->back->alt; ?>" />
          <img src="<?= $_why->images->front->link; ?>" class="img-why" alt="<?= $_why->images->front->alt; ?>" />
        </div>
      </div>
      <div class="col-md-6">
        <div class="text mt-4">
          <span class="sp-atas"><?= $_why->span ?></span>
          
          <h2><?= $_why->title ?></h2>

          <?php foreach($_why->items as $key=>$item): ?>
            <div class="why-contain mb-3">
              <div class="list-why row mx-0 p-4">
                <div class="number col-2">
                  <span>00<?= $key + 1 ?>.</span>
                </div>
                <div class="desc-why col-10">
                  <h3 class="title-listw"><?= $item->title ?></h3>
                  <p class="text-listw"><?= $item->description ?></p>
                </div>
              </div>
            </div>
          <?php endforeach;?>
        </div>
      </div>
    </div>
  </div>
</section>