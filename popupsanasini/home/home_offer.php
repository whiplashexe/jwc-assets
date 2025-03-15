<!-- OFFER -->

<style>
#_offer-root {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  background-color: var(--primary-white-col);
  gap: 2rem;
}
#_offer-root ._offer-header-wrapper {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  gap: 0.8rem;
}
#_offer-root ._offer-header-wrapper ._offer-span {
  font-size: clamp(0.8rem, 4vw, 1.4rem);
  font-weight: bold;
  color: var(--primary-pink-col);
}
#_offer-root ._offer-header-wrapper ._offer-span i {
  font-size: 1rem;
}
#_offer-root ._offer-header-wrapper ._offer-title {
  font-size: clamp(1.6rem, 4vw, 2.4rem);
  color: var(--primary-gray-col);
  font-weight: bold;
  font-family: var(--primtext);
}
#_offer-root ._offer-content-wrapper {
  display: grid;
  gap: 1rem;
  grid-template-columns: 1fr;
  grid-template-rows: repeat(3, auto);
}
@media (min-width: 48rem) {
  #_offer-root ._offer-content-wrapper {
    grid-template-columns: repeat(3, 1fr);
    grid-template-rows: auto;
  }
}
#_offer-root ._offer-content-wrapper ._offer-content {
  display: flex;
  flex-direction: column;
  justify-content: start;
  align-items: stretch;
  gap: 1rem;
}
#_offer-root ._offer-content-wrapper ._offer-content ._offer-card {
    padding: 2rem;
    display: flex;
    flex-direction: column;
    justify-content: start;
    align-items: stretch;
    border-radius: 10px;
    gap: 1rem;
    background-color: var(--color2);
    height: 100%;
}
#_offer-root ._offer-content-wrapper ._offer-content ._offer-card ._offer-card-title {
    font-size: clamp(1rem, 2vw, 1.4rem);
    font-weight: bold;
    line-height: 150%;
    color: var(--color4);
    font-family: var(--primtext);
    margin-bottom: 10px;
}
#_offer-root ._offer-content-wrapper ._offer-content ._offer-card ._offer-card-list {
  display: flex;
  flex-direction: column;
  justify-content: start;
  align-items: stretch;
  gap: 0.2rem;
}
#_offer-root ._offer-content-wrapper ._offer-content ._offer-card ._offer-card-list ._offer-card-list-item {
    gap: 0.6rem;
    display: flex;
    flex-direction: row;
    justify-content: start;
    align-items: start;
    font-size: 15px;
}
#_offer-root ._offer-content-wrapper ._offer-content ._offer-card ._offer-card-list ._offer-card-list-item ._offer-card-list-icon {
  margin-top: 0.4rem;
  color: var(--primary-white-col);
}
#_offer-root ._offer-content-wrapper ._offer-content ._offer-card ._offer-card-list ._offer-card-list-item ._offer-card-list-description {
    line-height: 150%;
    margin-bottom: 13px;
    color: var(--primary-white-col) !important;
}

@media (max-width: 768px) {
  #_offer-root ._offer-content-wrapper ._offer-content ._offer-card ._offer-card-title {
    font-size: 20px;
  }
}

/*# sourceMappingURL=offer.css.map */
</style>

<section id="_offer-root" class="pad6rem">
  <div class="container-global">
  <?php
    $_offer = json_decode(json_encode([
      'span' => 'What We Offer',
      'title' => 'Comprehensive Solutions for Your Global Expansion',
      'items' => [
        'left' => [
          (object) [
            "category" => "Pre-Event Strategy & Planning",
            "items" => [
              "Market research & location scouting",
              "Permits & logistics management",
              "Brand positioning & marketing strategy"
            ]
          ],
          (object) [
            "category" => "Pop-Up Design & Production",
            "items" => [
              "Visually captivating booth designs",
              "Functional, engaging layouts that enhance customer experience"
            ]
          ],
        ],
        'mid' => [
          (object) [
            "category" => "Event Management & Execution",
            "items" => [
              "Seamless on-ground operations & logistics",
              "Customer engagement & brand storytelling",
              "On-site training for your team to maximize global exposure"
            ]
          ],
          (object) [
            "category" => "Content Creation for Digital Amplification",
            "items" => [
              "Pre-event teaser videos",
              "Event coverage for social media & brand marketing",
              "Post-event storytelling to extend brand visibility"
            ]
          ],
        ],
        'right' => [
          (object) [
            "category" => "Media Exposure & PR Support",
            "items" => [
              "We ensure your pop-up gets featured in online media, boosting your brand’s credibility and visibility in the global market"
            ]
          ],
          (object) [
            "category" => "B2B Matchmaking & Networking",
            "items" => [
              "Gain access to potential local distributors, investors, and business partners",
              "Opportunities to collaborate with regional entrepreneurs and retailers"
            ]
          ]
        ],
      ],
    ])
    )
  ?>
  
  <div class="row title-product efect-up ">
     <div class="col-md-9">
         <span class="tag-atas"><i class="fa-solid fa-star-of-life mr-2"></i> <?= $_offer->span ?></span>
         <h2><?= $_offer->title ?></h2>
         <p>From planning to execution, PopupSanaSini offers a full-service solution to help brands expand globally through curated pop-up stores. We take care of everything. so you can focus on growing your business.</p>
     </div>

     <div class="col-md-3 align-self-center">
         <div class="text-md-right text-left"><a class="btn btn-gene" href="<?= $func->dm_whatsapp() ?>">Contact Us</a></div>
     </div>
  </div>

  <div class="_offer-content-wrapper mt-4">
    <div class="_offer-content-left _offer-content">
      <?php foreach ($_offer->items->left as $item):?>
        <div class="_offer-card">
          <p class="_offer-card-title"><?= $item->category ?></p>
          <div class="_offer-card-list">
            <?php foreach ($item->items as $list): ?>
              <div class="_offer-card-list-item">
                <i class="fa-solid fa-circle-dot _offer-card-list-icon"></i>
                <p class="_offer-card-list-description">
                  <?= $list ?>
                </p>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      <?php endforeach;?>
    </div>
    <div class="_offer-content-mid _offer-content">
      <?php foreach ($_offer->items->mid as $item):?>
        <div class="_offer-card">
          <p class="_offer-card-title"><?= $item->category ?></p>
          <div class="_offer-card-list">
            <?php foreach ($item->items as $list): ?>
              <div class="_offer-card-list-item">
                <i class="fa-solid fa-circle-dot _offer-card-list-icon"></i>
                <p class="_offer-card-list-description">
                  <?= $list ?>
                </p>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      <?php endforeach;?>
    </div>
    <div class="_offer-content-right _offer-content">
      <?php foreach ($_offer->items->right as $item):?>
        <div class="_offer-card">
          <p class="_offer-card-title"><?= $item->category ?></p>
          <div class="_offer-card-list">
            <?php foreach ($item->items as $list): ?>
              <div class="_offer-card-list-item">
                <i class="fa-solid fa-circle-dot _offer-card-list-icon"></i>
                <p class="_offer-card-list-description">
                  <?= $list ?>
                </p>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      <?php endforeach;?>
    </div>
  </div>

  </div>
</section>

<script>
  const _offer_title = document.querySelector("#_offer-root ._offer-header-wrapper");
  const _offer_cards = document.querySelectorAll("#_offer-root ._offer-card");

  inView(_offer_title, (element) => {
    animate(element, {y: [50, 0], opacity: [0, 1]}, {ease: "anticipate", duration: 1.5})
    return (leaveInfo) => {
      animate(element, {y: [0, 50], opacity: [1, 0]}, {ease: "anticipate", duration: 1.5})
    }
  })

  inView(_offer_cards, (element) => {
    animate(element, {y: [50, 0], opacity: [0, 1]}, {ease: "anticipate", duration: 1.5})
    return (leaveInfo) => {
      animate(element, {y: [0, 50], opacity: [1, 0]}, {ease: "anticipate", duration: 1.5})
    }
  })
</script>