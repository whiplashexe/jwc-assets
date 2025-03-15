<style>
  #__unique-root {
    background-color: var(--color2);
    border: none !important;
  }

  #__unique-root .unique-title h2 {
    color: var(--primary-white-col);
  }
  .title-product .tag-atas {
    color: var(--primary-pink-col) !important;
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
    border-radius: 0 !important;
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
    border-radius: 0 !important;
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
      color: var(--color4);
      display: flex;
      font-size: 21px;
      text-transform: capitalize;
      font-family: var(--primtext);
      justify-content: start;
      align-items: center;
      gap: 1rem;
      line-height: 28px;
      letter-spacing: 0px;
  }
  
  #__unique-root .items-wrapper.items-wrapper-mobile .desc {
    line-height: 25px;
    font-size: 13px;
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
      width: 20%;
      position: relative;
      overflow: hidden;
      padding: 1rem;
      display: flex;
      justify-content: center;
      align-items: end;
      border-radius: 0 !important;
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
      border-radius: 0 !important;
    }
    #__unique-root .items-wrapper.items-wrapper-tablet > .item .item-desc-wrapper {
      opacity: 0;
      transition: all ease-in-out 1.5s;
    }
    
    #__unique-root .items-wrapper.items-wrapper-tablet > .item .title {
        font-size: 23px;
        font-weight: 700;
        text-transform: capitalize;
        color: var(--color4);
        font-family: var(--primtext);
        line-height: 30px;
        margin-bottom: 10px;
        letter-spacing: 0;
        grid-area: title;
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
    }

    #__unique-root .items-wrapper.items-wrapper-tablet > .item .desc {
        color: #555;
        font-size: 15px;
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

  #__unique-root .__unique-quotes {
      background-color: var(--color5);
      color: var(--primary-white-col);
      margin-left: auto;
      padding: 20px 30px;
      display: flex;
      justify-content: start;
      align-items: start;
      gap: 1.1rem;
      border-radius: 5px;
  }
  #__unique-root .__unique-quotes i {
    font-size: 2rem;
  }
  #__unique-root .__unique-quotes p {
      padding: 0;
      margin: 0;
      line-height: normal;
      color: var(--primary-white-col);
      font-size: 18px;
      line-height: 29px;
  }
</style>

<?php
  $uniques_data = json_decode(json_encode(
    [
      "span" => "Step Into the Global Spotlight",
      "title" => "Why Go Global",
      "quote" => "<strong><em>Going global is exciting, but it’s also expensive and complex.</em></strong><br>That’s where Pop-Up SanaSini comes into streamline, simplify, and supercharge your international expansion.",
      "items" => [
        [
          "title" => "Brand Visibility & Awareness",
          "description" => "Expand your brand’s reach, establish a strong global presence, and connect with new audiences in high-potential markets.",
          "cover_url" => "https://jwc.gotra-resources.my.id/web-upload/1741508363-09-03-2025-LeQDnbs9hoYBUPC8kFMltJR2xyivVafE.webp",
          "icon" => "fa-solid fa-sun"
        ],
        [
          "title" => "Stronger Brand Credibility",
          "description" => "Enhance your brand’s reputation by positioning it in international markets, gaining trust, and increasing consumer confidence worldwide.",
          "cover_url" => "https://jwc.gotra-resources.my.id/web-upload/1741508363-09-03-2025-5IpeC3RGfWS46VjU9zBL7MDXEoHynNlw.webp",
          "icon" => "fa-solid fa-guitar"
        ],
        [
          "title" => "Market Expansion & Sales Growth",
          "description" => "Gain direct access to new customer bases, increase sales potential, and explore untapped revenue opportunities in thriving global markets.",
          "cover_url" => "https://jwc.gotra-resources.my.id/web-upload/1741508363-09-03-2025-nxhDaogvXOiw1eR9AMrGkEbmc2P74C6B.webp",
          "icon" => "fa-solid fa-utensils"
        ],
        [
          "title" => "B2B Networking Opportunities",
          "description" => "Engage with key industry players, meet potential distributors, and establish strategic partnerships to scale your business internationally.",
          "cover_url" => "https://jwc.gotra-resources.my.id/web-upload/1741508363-09-03-2025-qXiVhEdKZpBG6FbeznJ9f8x7IsOlLjwg.webp",
          "icon" => "fa-solid fa-water"
        ],
      ]
    ]
  ));
?>



<section id="__unique-root">
  <div class="container-global wrapper">

    <div class="row title-product unique-title efect-up ">
        <div class="col-md-9">
            <span class="tag-atas"><i class="fa-solid fa-star-of-life mr-2"></i> <?= $uniques_data->title ?></span>
            <h2><?= $uniques_data->span ?></h2>
            <p style="color: #f1f1f1;">Reaching international markets isn’t just an opportunity. it’s a necessity for brands looking to scale, gain credibility, and unlock new revenue streams.</p>
        </div>

        <div class="col-md-3 align-self-center">
            <div class="text-md-right text-left"><a class="btn btn-gene" href="<?= $func->dm_whatsapp() ?>">Contact Us</a></div>
        </div>
    </div>

    <!-- DESKTOP -->
    <main class="items-wrapper items-wrapper-tablet efect-up">
      <?php $active = 0; ?>
      <?php foreach ($uniques_data->items as $key=>$unique): ?>
        <article class="item <?= ($active == $key) ? 'active' : '' ?>" data-index="<?= $key ?>">
          <div class="item-desc-wrapper">
            <h3 class="title"><?= $unique->title ?></h3>
            <p class="desc"><?= $unique->description ?></p>
          </div>
          <img src="<?= $unique->cover_url ?>" class="item-img" alt="cover">
        </article>
      <?php endforeach; ?>
    </main>

    <!-- MOBILE -->
    <main class="items-wrapper unique-slick ss-arrow items-wrapper-mobile efect-up">
      <?php foreach ($uniques_data->items as $key=>$unique): ?>
        <article class="item" data-index="<?= $key ?>">
          <div class="item-desc-wrapper">
            <h3 class="title">
              <?= $unique->title ?>
            </h3>
            <p class="desc"><?= $unique->description ?></p>
          </div>
          <img src="<?= $unique->cover_url ?>" class="item-img" alt="cover">
        </article>
      <?php endforeach; ?>
    </main>

    <div class="__unique-quotes efect-up">
      <i class="fa-solid fa-quote-left"></i>
      <p>
        <?= $uniques_data->quote ?>
      </p>
    </div>
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