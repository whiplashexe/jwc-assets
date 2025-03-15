<style>
  #__hero-root {
    margin-top: -156px;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    background-image: linear-gradient(rgba(0,0,0,0), rgba(0,0,0,0)),url(https://jwc.gotra-resources.my.id/web-upload/1739354266-12-02-2025-4M0ZJpywqImUhjGkloYN7nbVXDeOxWgv.webp);
    background-color: rgba(255, 255, 255, 0);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    background-blend-mode: lighten;
    font-family: var(--primtext);
  }
  #__hero-root .__gray-layer {
    position: absolute;
    top: 0;
    width: 100%;
    height: 100%;
    left: 0;
    background-color: black;
    z-index: 1;
    opacity: 0.5;
  }
  #__hero-root .__hero-wrapper {
    width: 85%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: start;
    gap: 0.8rem;
    z-index: 3;
    padding: 2rem 0;
  }
  #__hero-root .__hero-wrapper .__uniques {
      width: 100%;
      margin: 4rem 0;
      background-color: white;
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      grid-template-rows: repeat(2, auto);
      border-radius: 1rem;
      padding: 1rem;
      gap: 2rem;
      margin-top: 2rem;
  }
  #__hero-root .__hero-wrapper .__uniques > .__item {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      gap: 1rem;
  }
  #__hero-root .__hero-wrapper .__uniques > .__item .__logo {
      font-size: 1.5rem;
      color: var(--colors);
  }
  #__hero-root .__hero-wrapper .__uniques > .__item .__desc-wrapper {
      display: flex;
      flex-direction: column;
      justify-content: start;
      align-items: center;
      text-align: center;
      gap: 4px;
  }
  #__hero-root .__hero-wrapper .__uniques > .__item .__desc-wrapper .__title {
      font-size: 0.9rem;
      line-height: 1.2rem;
  }
  #__hero-root .__hero-wrapper .__uniques > .__item .__desc-wrapper .__desc {
      font-size: 0.8rem;
      line-height: 1.2rem;
  }
  #__hero-root .__hero-wrapper .__uniques > .__item .__desc-wrapper h4, p {
      margin: 0;
      padding: 0;
  }
  #__hero-root .__hero-wrapper h1.__heading {
    color: white;
    width: 100%;
    font-weight: bold;
    margin: 12rem 0 0 0;
    font-size: 1.6rem;
    text-transform: uppercase;
    letter-spacing: 0.1rem;
  }
  #__hero-root .__hero-wrapper p.__sub-heading-1 {
    color: white;
    width: 100%;
    display: none;
    text-align: center;
    padding: 2px 8px;
    justify-content: center;
    text-transform: capitalize;
    border-radius: 2rem;
    background-color: rgba(255, 255, 255, 0.2);
    margin: 0;
  }
  #__hero-root .__hero-wrapper .__divider {
    width: 100%;
    height: 1px;
    background-color: white;
    display: none;
  }
  #__hero-root .__hero-wrapper .__extra-text {
    display: none;
    width: 100%;
    font-weight: bold;
    font-size: 1.2rem;
    color: white;
  }
  #__hero-root .__hero-wrapper .__brand img {
    width: 150px;
      display: none;
  }
  #__hero-root .__hero-wrapper p.__sub-heading-2 {
    font-size: 1rem;
    display: block;
    color: white;
    margin-top: 2rem;
  }
  #__hero-root .__wave {
    position: absolute;
    bottom: 0;
    width: 100%;
    display: none;
    left: 0;
    z-index: 2;
  }
  #__hero-root .__card-wrapper {
    display: none;
    grid-template-columns: repeat(3, 1fr);
    gap: 12px;
    width: 100%;
  }
  #__hero-root .__card-wrapper > .__card {
    position: relative;
  }
  #__hero-root .__card-wrapper > .__card button {
    position: absolute;
    right: 0;
    bottom: 0;
    margin: 8px;
    background: #8AD1DC;
    border: none;
    border-radius: 10px;
  }
  #__hero-root .__card-wrapper > .__card img {
    width: 100%;
  }
  #__hero-root .__copyright {
    position: absolute;
    bottom: 0;
    right: 0;
    margin: 10px;
    z-index: 2;
    display: none;
  }
  @media screen and (min-width: 768px) {

    #__hero-root .__hero-wrapper {
      align-items: center;
    }
    #__hero-root .__hero-wrapper .__brand {
      display: none;
    }
    #__hero-root .__hero-wrapper h1.__heading {
      text-align: center;
      font-size: 2rem;
    }
    #__hero-root .__hero-wrapper p.__sub-heading-1 {
      font-size: 1.2rem;
      display: block;
    }
    #__hero-root .__hero-wrapper .__divider {
      display: block;
    }
    #__hero-root .__hero-wrapper .__extra-text {
      display: block;
    }
    #__hero-root .__hero-wrapper p.__sub-heading-2 {
      display: none;
    }
    #__hero-root .__card-wrapper {
      display: grid;
    }
    #__hero-root .__copyright {
      display: inline;
      color: white;
    }
  }
  @media (min-width: 768px) {
    #__hero-root {
    }
      #__hero-root .__hero-wrapper .__brand img {
          display: block;
      }
      #__hero-root .__hero-wrapper h1.__heading {
          color: white;
          width: 100%;
          font-weight: bold;
          margin: 12rem 0 0 0;
          font-size: 1.6rem;
          letter-spacing: 0.2rem;
      }
  }
  @media (min-width: 1030px) {
    #__hero-root .__hero-wrapper .__uniques {
        grid-template-columns: repeat(4, 1fr);
        grid-template-rows: auto;
        gap: 0rem;
    }
    #__hero-root .__hero-wrapper .__uniques > .__item {
        flex-direction: row;
    }
    #__hero-root .__hero-wrapper .__uniques > .__item .__logo {
        font-size: 2.5rem;
        padding: 1rem;
    }
    #__hero-root .__hero-wrapper .__uniques > .__item .__desc-wrapper {
        flex: 1;
        align-items: start;
        text-align: start;
    }
    #__hero-root .__hero-wrapper .__uniques > .__item .__desc-wrapper .__title {
        line-clamp: 1;
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    #__hero-root .__hero-wrapper .__uniques > .__item .__desc-wrapper .__desc {
        line-clamp: 2;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
  }

@media (max-width: 768px) {
  #__hero-root .__hero-wrapper .__uniques { background-color:transparent; }

  #__hero-root .__hero-wrapper h1.__heading {
    margin: 12rem 0 0 0;
    text-align: center;
  }

  #__hero-root .__hero-wrapper .__uniques > .__item .__logo {
      color: white;
  }

  #__hero-root .__hero-wrapper .__uniques > .__item .__desc-wrapper .__title { color:white; }

  #__hero-root .__hero-wrapper .__uniques > .__item .__desc-wrapper .__desc { color:#f1f1f1; }

}
</style>
<?php foreach ($item->data as $slide): ?>
  <section id="__hero-root" class="mb-5">
    <div class="__hero-wrapper">
      <div class="__brand">
        <img src="<?= $data->web->site_logo_alternative ?>" alt="logo">
      </div>
      <h1 class="__heading"><?= $slide->title ?></h1>
<!--      <p class="__sub-heading-1">--><?php //= $slide->text ?><!--</p>-->
      <div class="__divider"></div>
<!--      <p class="__extra-text">Collect 'em ...All Yours!</p>-->
<!--      <div class="__card-wrapper">-->
<!--        <div class="__card-1 __card">-->
<!--          <button onclick="window.location.href='https://favotripbalitour.com/view/ubud-trip'">More Info</button>-->
<!--          <img src="https://jwc.gotra-resources.my.id/web-upload/1739515741-14-02-2025-01XGKyaDznUAQ6t5FE32iHhdwsJBg7SW.webp" alt="card">-->
<!--        </div>-->
<!--        <div class="__card-2 __card">-->
<!--          <button onclick="window.location.href='https://favotripbalitour.com/view/2d1n-nusa-penida-with-accommodation-shuttle'">More Info</button>-->
<!--          <img src="https://jwc.gotra-resources.my.id/web-upload/1739515761-14-02-2025-eV6C4ZW7TEGnBMzX5NSpIaQqKcyr9oh8.webp" alt="card">-->
<!--        </div>-->
<!--        <div class="__card-3 __card">-->
<!--          <button onclick="window.location.href='https://favotripbalitour.com/view/water-sport-tanjung-benoa'">More Info</button>-->
<!--          <img src="https://jwc.gotra-resources.my.id/web-upload/1739515771-14-02-2025-XlcVSguU5ZfCoOiA8WHj12zvteFME0qy.webp" alt="card">-->
<!--        </div>-->
<!--      </div>-->
<!--      <p class="__sub-heading-2">experienced tour driver, comfort vehicle, comfort accomodation, reasonable price</p>-->
      <div class="__uniques">
        <div class="__item __item-1">
          <div class="__logo">
            <i class="fas fa-user-cog"></i>
          </div>
          <div class="__desc-wrapper">
            <h4 class="__title">Private & Customized Tours</h4>
            <p class="__desc">Flexible, personalized Bali private tours.</p>
          </div>
        </div>
        <div class="__item __item-2">
          <div class="__logo">
            <i class="fas fa-map-marked-alt"></i>
          </div>
          <div class="__desc-wrapper">
            <h4 class="__title">Expert Local Guides</h4>
            <p class="__desc">Local guides with deep cultural insights.</p>
          </div>
        </div>
        <div class="__item __item-3">
          <div class="__logo">
            <i class="fas fa-car"></i>
          </div>
          <div class="__desc-wrapper">
            <h4 class="__title">Hassle-Free Travel</h4>
            <p class="__desc">Comfortable transport, stress-free trips</p>
          </div>
        </div>
        <div class="__item __item-4">
          <div class="__logo">
            <i class="fas fa-gem"></i>
          </div>
          <div class="__desc-wrapper">
            <h4 class="__title">Exclusive Hidden Gems</h4>
            <p class="__desc">Hidden beaches, waterfalls, unique spots.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="__gray-layer"></div>
    <svg class="__wave" viewBox="0 0 694 71" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M694 52.5205L0 0V71H694V52.5205Z" fill="#0A3248" fill-opacity="0.73"/>
      <path d="M0 61.8904L694 36V71H0V61.8904Z" fill="#1C496A"/>
      <path d="M694 66.8356L0 55V71H694V66.8356Z" fill="#6C8DC8"/>
    </svg>
    <p class="__copyright">Copyright 2025 Favotrip bali tour</p>
  </section>
<?php endforeach; ?>
