<!-- About -->
<style>
#_about-root * {
  padding: 0;
  margin: 0;
}

#_about-root {
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: start;
  background-color: var(--primary-white-col);
}
#_about-root ._about-description-wrapper {
  width: 100%;
  gap: 1rem;
  padding: clamp(1rem, 4vw, 4rem);
  display: flex;
  flex-direction: column;
  justify-content: start;
  align-items: stretch;
}
@media (min-width: 40rem) {
  #_about-root ._about-description-wrapper {
    width: 50%;
  }
}
#_about-root ._about-description-wrapper ._about-description-header {
  display: flex;
  flex-direction: column;
  justify-content: start;
  align-items: start;
  gap: 0.8rem;
}

#_about-root ._about-description-wrapper ._about-description-header ._about-description-image {
  width: 100%;
  aspect-ratio: 16/9;
  object-fit: cover;
}
@media (min-width: 40rem) {
  #_about-root ._about-description-wrapper ._about-description-header ._about-description-image {
    display: none;
  }
}

#_about-root ._about-description-wrapper ._about-description-desc ._about-description {
    font-size: 16px;
    color: var(--color2);
    line-height: 28px;
    margin-bottom: 15px;
    font-weight: 400;
}
#_about-root ._about-description-wrapper ._about-card-wrapper {
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: start;
  gap: 0.8rem;
}
@media (min-width: 40rem) {
  #_about-root ._about-description-wrapper ._about-card-wrapper {
    display: flex;
    flex-direction: column;
    justify-content: start;
    align-items: stretch;
  }
}
@media (min-width: 48rem) {
  #_about-root ._about-description-wrapper ._about-card-wrapper {
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: start;
  }
}
#_about-root ._about-description-wrapper ._about-card-wrapper ._about-card-left, #_about-root ._about-description-wrapper ._about-card-wrapper ._about-card-right {
  width: 50%;
  display: flex;
  flex-direction: column;
  justify-content: start;
  align-items: stretch;
  gap: 0.8rem;
}
@media (min-width: 40rem) {
  #_about-root ._about-description-wrapper ._about-card-wrapper ._about-card-left, #_about-root ._about-description-wrapper ._about-card-wrapper ._about-card-right {
    width: 100%;
  }
}
@media (min-width: 48rem) {
  #_about-root ._about-description-wrapper ._about-card-wrapper ._about-card-left, #_about-root ._about-description-wrapper ._about-card-wrapper ._about-card-right {
    width: 50%;
  }
}
#_about-root ._about-description-wrapper ._about-card-wrapper ._about-card-left ._about-card-dummy, #_about-root ._about-description-wrapper ._about-card-wrapper ._about-card-right ._about-card-dummy {
  height: 2rem;
}
@media (min-width: 40rem) {
  #_about-root ._about-description-wrapper ._about-card-wrapper ._about-card-left ._about-card-dummy, #_about-root ._about-description-wrapper ._about-card-wrapper ._about-card-right ._about-card-dummy {
    display: none;
  }
}
@media (min-width: 48rem) {
  #_about-root ._about-description-wrapper ._about-card-wrapper ._about-card-left ._about-card-dummy, #_about-root ._about-description-wrapper ._about-card-wrapper ._about-card-right ._about-card-dummy {
    display: block;
  }
}
#_about-root ._about-description-wrapper ._about-card-wrapper ._about-card-left ._about-card, #_about-root ._about-description-wrapper ._about-card-wrapper ._about-card-right ._about-card {
    background-color: var(--color5);
    padding: clamp(1rem, 2vw, 1.5rem);
    display: flex;
    flex-direction: column;
    justify-content: start;
    align-items: stretch;
    gap: 0.8rem;
    border-radius: 5px;
}
#_about-root ._about-description-wrapper ._about-card-wrapper ._about-card-left ._about-card ._about-card-title-icon, #_about-root ._about-description-wrapper ._about-card-wrapper ._about-card-right ._about-card ._about-card-title-icon {
  display: flex;
  flex-direction: column;
  justify-content: start;
  align-items: start;
  gap: 1.3rem;
}
@media (min-width: 40rem) {
  #_about-root ._about-description-wrapper ._about-card-wrapper ._about-card-left ._about-card ._about-card-title-icon, #_about-root ._about-description-wrapper ._about-card-wrapper ._about-card-right ._about-card ._about-card-title-icon {
    display: flex;
    flex-direction: row;
    justify-content: start;
    align-items: start;
  }
}
#_about-root ._about-description-wrapper ._about-card-wrapper ._about-card-left ._about-card ._about-card-title-icon ._about-card-icon, #_about-root ._about-description-wrapper ._about-card-wrapper ._about-card-right ._about-card ._about-card-title-icon ._about-card-icon {
    font-size: 30px;
    color: #F0ECDD;
}
#_about-root ._about-description-wrapper ._about-card-wrapper ._about-card-left ._about-card ._about-card-title-icon ._about-card-title, #_about-root ._about-description-wrapper ._about-card-wrapper ._about-card-right ._about-card ._about-card-title-icon ._about-card-title {
    font-size: 19px;
    font-weight: bold;
    color: #F0ECDD;
    line-height: 26px;
    font-family: var(--primtext);
}
#_about-root ._about-description-wrapper ._about-card-wrapper ._about-card-left ._about-card ._about-card-description, #_about-root ._about-description-wrapper ._about-card-wrapper ._about-card-right ._about-card ._about-card-description {
    font-size: 14px;
    color: #F0ECDD;
    line-height: 25px;
}
#_about-root ._about-image-wrapper {
  height: 40rem;
  position: sticky;
  top: 0;
  display: none;
}
@media (min-width: 40rem) {
  #_about-root ._about-image-wrapper {
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    width: 50%;
  }
}
#_about-root ._about-image-wrapper img {
    width: 60%;
    height: 90%;
    position: absolute;
    object-fit: cover;
    border-radius: 5px;
}
#_about-root ._about-image-wrapper ._about-image-custom {
  left: 0;
  z-index: 2;
}
#_about-root ._about-image-wrapper ._about-image-grid {
  right: 0;
  bottom: 0;
  z-index: 1;
}


/* ========= title general ========*/
#_about-root ._about-description-wrapper ._about-description-header ._about-span {
    font-size: 11px;
    text-align: left;
    font-weight: 500;
    text-transform: uppercase;
    line-height: 24px;
    color: var(--color4);
    letter-spacing: 1px;
    border-radius: 50px;
    padding: 2px 0 ;
    font-family: var(--subtext);
    display: block;
    text-align: left;
}

#_about-root ._about-description-wrapper ._about-description-header ._about-title {
    font-size: 27px;
    line-height: 40px;
    text-align: left;
    color: var(--color2);
    font-weight: 700;
    margin: auto;
    letter-spacing: .3px;
    text-transform: unset;
    font-family: var(--primtext);
}

@media (min-width: 768px) {

    #_about-root ._about-description-wrapper ._about-description-header ._about-span {
        font-size: 12px;
        line-height: 24px;
    }

    #_about-root ._about-description-wrapper ._about-description-header ._about-title {
        font-size: 35px;
        line-height: 45px;
    }

}

@media (min-width: 1280px) {

    #_about-root ._about-description-wrapper ._about-description-header ._about-span {
        font-size: 13px;
        line-height: 24px;
    }

    #_about-root ._about-description-wrapper ._about-description-header ._about-title {
        font-size: 40px;
        line-height: 50px;
    }

}

@media (max-width: 768px) {
  #_about-root ._about-description-wrapper {
    width: 100%;
    gap: 1rem;
    padding: 3rem 3%;
  }
}

/*# sourceMappingURL=about.css.map */
</style>

<section id="_about-root">
  <?php
    $_about = json_decode(json_encode([
      'span' => 'About Us',
      'title' => 'Bringing Indonesian Brands to the Global Stage',
      'description' => '',
      'items_left' => [
        ['icon' => 'fa-solid fa-wallet', 'title' => 'Cost-Effective Expansion', 'description' => 'Expand globally at lower costs with a shared pop-up model for impact.'],
        ['icon' => 'fa-solid fa-map-marker-alt', 'title' => 'Strategic Locations', 'description' => 'Carefully selected international markets to boost brand visibility and reach.'],
      ],
      'items_right' => [
        ['icon' => 'fa-solid fa-bullhorn', 'title' => 'Powerful Brand Activation', 'description' => 'Transform your pop-up into a powerful digital storytelling asset.'],
        ['icon' => 'fa-solid fa-handshake', 'title' => 'Global Networking', 'description' => 'Connect with distributors, investors, and partners to scale your business globally.'],
      ],
      'images' => [
        'custom_1'=>'https://jwc.gotra-resources.my.id/web-upload/1741501837-09-03-2025-x5WTpj7gtRQ0OuSAN3VfzyGoiX9FEUD8.webp',
        'grid_1' => 'https://jwc.gotra-resources.my.id/web-upload/1741408079-08-03-2025-KWcuQksn5Gd9ZpSgfPeClU7t3DbBLATF.webp'
      ],
    ]))
  ?>
  <div class="_about-description-wrapper">
    <header class="_about-description-header efect-up">
      <span class="_about-span"><i class="fa-solid fa-star-of-life mr-2"></i><?= $_about->span ?></span>
      <!-- <img src="<?= $_about->images->custom_1 ?>" class="_about-description-image" alt="header image"> -->
      <h2 class="_about-title"><?= $_about->title ?></h2>
    </header>
    <div class="_about-description-desc efect-up">
      <p class="_about-description">Pop-Up SanaSini is an event planner that helps Indonesian brands and SMEs break into international markets through curated pop-up stores and exhibitions abroad.</p>

      <p class="_about-description">Our collaborative concept allows multiple brands to share costs, making the global expansion journey more affordable and impactful.</p>
    </div>
    <div class="_about-card-wrapper">
      <div class="_about-card-left efect-up">
        <div class="_about-card-dummy"></div>
        <?php foreach ($_about->items_left as $item): ?>
          <div class="_about-card">
            <div class="_about-card-title-icon">
              <i class="<?= $item->icon ?> _about-card-icon"></i>
              <p class="_about-card-title"><?= $item->title ?></p>
            </div>
            <p class="_about-card-description"><?= $item->description ?></p>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="_about-card-right efect-up">
        <?php foreach ($_about->items_right as $item): ?>
          <div class="_about-card">
            <div class="_about-card-title-icon">
              <i class="<?= $item->icon ?> _about-card-icon"></i>
              <p class="_about-card-title"><?= $item->title ?></p>
            </div>
            <p class="_about-card-description"><?= $item->description ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
  <div class="_about-image-wrapper">
    <img class="_about-image-custom efect-up" src="<?= $_about->images->custom_1 ?>" alt="images grid">
    <img class="_about-image-grid" src="<?= $_about->images->grid_1 ?>" alt="images grid">
  </div>
</section>