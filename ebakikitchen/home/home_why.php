<!--UNIQUE-->
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