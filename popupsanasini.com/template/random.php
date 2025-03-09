<style>
  #__unique-root {
    font-family: var(--primtext), serif;
    background-color: var(--primary-blue-col);
  }
  #__unique-root .wrapper {
    padding-top: 5rem;
    padding-bottom: 5rem;
    border: 1px solid #eaeaea;
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: stretch;
    gap: 2rem;
    justify-content: start;
  }
  #__unique-root .items-wrapper.items-wrapper-tablet {
    display: none;
  }
  #__unique-root .items-wrapper.items-wrapper-mobile {
    display: block;
  }
  #__unique-root .items-wrapper.items-wrapper-mobile .item {
    height: 500px;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    justify-content: end;
    align-items: stretch;
    padding: 1.2rem;
  }
  #__unique-root .items-wrapper.items-wrapper-mobile .item .item-img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
  #__unique-root .items-wrapper.items-wrapper-mobile .item .item-desc-wrapper {
    z-index: 1;
    background-color: white;
    padding: 1.5rem;
    display: flex;
    gap: 0.4rem;
    flex-direction: column;
    justify-content: start;
    align-items: start;
  }
  #__unique-root .items-wrapper.items-wrapper-mobile .item .item-desc-wrapper i {
    display: none;
  }
  #__unique-root .items-wrapper.items-wrapper-mobile .logo {
    font-size: 2rem;
    color: var(--colors);
  }
  #__unique-root .items-wrapper.items-wrapper-mobile .title {
    font-weight: bold;
    color: var(--colors);
    display: flex;
    font-size: 0.9rem;
    justify-content: start;
    align-items: center;
    gap: 1rem;
    line-height: 1.6rem;
    letter-spacing: 0px;
  }
  #__unique-root .items-wrapper.items-wrapper-mobile .desc {
    line-height: 20px;
    font-size: 0.8rem;
  }
  #__unique-root .items-wrapper.items-wrapper-mobile .item .item-desc-wrapper * {
    padding: 0;
    margin: 0;
  }
  /*TABLET*/
  @media (min-width: 768px) {
    #__unique-root .title {
      font-size: 1.5rem;
    }
    #__unique-root .items-wrapper.items-wrapper-tablet {
      display: flex;
      justify-content: center;
      gap: 1rem;
      align-items: center;
    }
    #__unique-root .items-wrapper.items-wrapper-tablet > .item {
      height: 484px;
      width: 15%;
      position: relative;
      overflow: hidden;
      padding: 1rem;
      display: flex;
      justify-content: center;
      align-items: end;
      transition: all ease-in-out 0.5s;
    }
    #__unique-root .items-wrapper.items-wrapper-tablet > .item.active .item-desc-wrapper {
      width: 100%;
      background-color: white;
      display: grid;
      grid-template-areas: "logo title" "logo description";
      grid-template-columns: auto 1fr;
      grid-template-rows: repeat(2, auto);
      column-gap: 0.8rem;
      padding: 25px 30px;
      z-index: 1;
      opacity: 1;
      transform: scale(1);
    }
    #__unique-root .items-wrapper.items-wrapper-tablet > .item .item-desc-wrapper {
      opacity: 0;
      transition: all ease-in-out 1.5s;
    }
    #__unique-root .items-wrapper.items-wrapper-tablet > .item .title {
      font-size: 1.1rem;
      font-weight: bold;
      color: var(--colors);
      line-height: 30px;
      margin-bottom: 2px;
      letter-spacing: 0;
      grid-area: title;
      overflow: hidden;
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
    }
    #__unique-root .items-wrapper.items-wrapper-tablet > .item .desc {
      color: #555;
      font-size: 0.9rem;
      margin-bottom: 0;
      grid-area: description;
      overflow: hidden;
      line-height: 1.6rem;
      display: -webkit-box;
      -webkit-line-clamp: 3;
      -webkit-box-orient: vertical;
    }
    #__unique-root .items-wrapper.items-wrapper-tablet > .item .item-img {
      width: 100%;
      height: 100%;
      position: absolute;
      top: 0;
      left: 0;
      object-fit: cover;
      filter: grayscale(1);
      transition: all ease-in-out 0.5s;
    }
    #__unique-root .items-wrapper.items-wrapper-tablet > .item .logo-wrapper {
      font-size: 1.4rem;
      display: flex;
      justify-content: center;
      align-items: start;
      color: white;
      grid-area: logo;
    }
    #__unique-root .items-wrapper.items-wrapper-tablet > .item .logo-wrapper .logo {
      background-color: var(--colors);
      color: white;
      padding: 0.8rem;
      border-radius: 999em;
    }
    #__unique-root .items-wrapper.items-wrapper-tablet .item.active {
      width: 40%;
    }
    #__unique-root .items-wrapper.items-wrapper-tablet > .item.active .item-img {
      filter: grayscale(0);
    }
    #__unique-root .items-wrapper.items-wrapper-mobile {
      display: none;
    }
  }
  /*DESKTOP*/
  @media (min-width: 1280px) {
    #__unique-root .title {
      font-size: 2rem;
    }
  }
  @media (min-width: 768px) {
    .start-menu {
      width: 15%;
    }
    .mid-menu {
      width: 70%;
      align-self: center !important;
      height: 45px;
    }
    .end-menu {
      width: 15%;
      align-items: flex-end;
      align-self: center !important;
    }
    .menu-andro {
      align-self: center !important;
    }
  }
  @media (max-width: 768px) {
    .end-menu {
      display: none !important;
    }
    .nav-tabs .nav-item {
      margin-bottom: -1px;
      display: contents;
    }
  }
</style>

<?php
  $uniques_data = json_decode(json_encode(
    [
      "items" => [
        [
          "title" => "Bohemian Tropical Ambiance",
          "description" => "A cozy blend of rustic and bohemian design, creating a warm and inviting space.",
          "cover_url" => "https://jwc.gotra-resources.my.id/web-upload/1740309725-23-02-2025-X7Whe81o9cZg5E63TQFzd4JiNu0ln2VI.webp",
          "icon" => "fa-solid fa-sun"
        ],
        [
          "title" => "Live Music Experience",
          "description" => "Enjoy soulful performances that enhance the relaxing atmosphere.",
          "cover_url" => "https://jwc.gotra-resources.my.id/web-upload/1740217778-22-02-2025-4N5wfnWhmJcbkXEBRqjPDQTZ26O9yUF8.webp",
          "icon" => "fa-solid fa-guitar"
        ],
        [
          "title" => "Curated Culinary Selection",
          "description" => "Fresh, locally sourced ingredients with a mix of authentic Balinese and international flavors.",
          "cover_url" => "https://jwc.gotra-resources.my.id/web-upload/1740309917-23-02-2025-W2stG7jTugJZlSh6XOdEc0epi8zwQ3x4.webp",
          "icon" => "fa-solid fa-utensils"
        ],
        [
          "title" => "Rice Field Serenity",
          "description" => "Overlooking lush Tegallalang rice terraces, offering a peaceful escape.",
          "cover_url" => "https://jwc.gotra-resources.my.id/web-upload/1740309960-23-02-2025-GfKlQYngCHijFXM8IbUTOEodse5h2zWD.webp",
          "icon" => "fa-solid fa-water"
        ],
        [
          "title" => "Sustainability & Local Support",
          "description" => "Supporting local artisans, musicians, and farmers with a commitment to sustainability.",
          "cover_url" => "https://jwc.gotra-resources.my.id/web-upload/1740309490-23-02-2025-QRdVZ5z4uA0ECgIrSikjTv1MY2KNwODP.webp",
          "icon" => "fa-solid fa-hand-holding-heart"
        ],
      ]
    ]
  ));
?>

<section id="__unique-root">
  <div class="container-global wrapper">
    <div class="title-product unique-title text-center">
      <span class="tag-atas"><i class="fa-solid fa-bell-concierge mr-2"></i> Experience the Difference <i class="fa-solid fa-bell-concierge ml-2"></i></span>
      <h2>Discover What Makes <span>E-Baki Special</span></h2>
    </div>

    <!-- DESKTOP -->
    <main class="items-wrapper items-wrapper-tablet">
      <?php $active = 0; ?>
      <?php foreach ($uniques_data->items as $key=>$unique): ?>
        <article class="item <?= ($active == $key) ? 'active' : '' ?>" data-index="<?= $key ?>">
          <div class="item-desc-wrapper">
            <div class="logo-wrapper">
              <div class="logo">
                <i class="<?= $unique->icon ?>"></i>
              </div>
            </div>
            <h3 class="title"><?= $unique->title ?></h3>
            <p class="desc"><?= $unique->description ?></p>
          </div>
          <img src="<?= $unique->cover_url ?>" class="item-img" alt="cover">
        </article>
      <?php endforeach; ?>
    </main>

    <!-- MOBILE -->
    <main class="items-wrapper unique-slick ss-arrow items-wrapper-mobile">
      <?php foreach ($uniques_data->items as $key=>$unique): ?>
        <article class="item" data-index="<?= $key ?>">
          <div class="item-desc-wrapper">
            <div class="logo">
              <i class="<?= $unique->icon ?>"></i>
            </div>
            <h3 class="title">
              <?= $unique->title ?>
            </h3>
            <p class="desc"><?= $unique->description ?></p>
          </div>
          <img src="<?= $unique->cover_url ?>" class="item-img" alt="cover">
        </article>
      <?php endforeach; ?>
    </main>
  </div>
</section>
<script>
  const _unique_title = document.querySelector(".unique-title");
  inView(_unique_title, (element) => {
    animate(element, {y: [50, 0], opacity: [0, 1]}, {ease: "anticipate", duration: 1.5})
    return (leaveInfo) => {
      animate(element, {y: [0, 50], opacity: [1, 0]}, {ease: "anticipate", duration: 1.5})
    }
  })
  document.addEventListener("DOMContentLoaded", function () {
    const articles = document.querySelectorAll("#__unique-root .item");
    articles.forEach(article => {
      article.addEventListener("click", function () {
        articles.forEach(a => a.classList.remove("active"));
        this.classList.add("active");
      });
      article.addEventListener("mouseenter", function () {
        articles.forEach(a => a.classList.remove("active"));
        this.classList.add("active");
      });
    });
    $('.unique-slick').slick({
      autoplay: true,
      draggable: true,
      prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa-solid fa-chevron-left"></i></button>',
      nextArrow: '<button class="slide-arrow next-arrow"><i class="fa-solid fa-chevron-right"></i></button>',
      dots: false,
      fade: true,
      cssEase: 'linear',
      autoplaySpeed: 3000,
      speed: 1000,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
    });
  });
</script>
