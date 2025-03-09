<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>popupsanasini</title>
  <link rel="stylesheet" href="./css/root.css">
  <link rel="stylesheet" href="./css/hero.css">
  <link rel="stylesheet" href="./css/about.css">
  <link rel="stylesheet" href="./css/goglobal.css">
  <link rel="stylesheet" href="./css/what.css">
  <link rel="stylesheet" href="./css/why.css">
  <link rel="stylesheet" href="./css/offer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

</head>
<body>


<section id="_hero">
  <?php
    $_hero = json_decode(json_encode([
      'title' => 'Pop-Up SanaSini',
      'subtitle' => 'A cost-effective, strategic way to enter international markets. Join PopupSanaSini and showcase your brand worldwide.',
      'description' => 'Taking Local Brand to expand the Market',
      'images' => [
        'image_1_url'=> 'https://images.unsplash.com/photo-1577638104555-83af2d50b5e7?q=80&w=1700&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
        'image_2_url' => 'https://images.unsplash.com/photo-1597246008239-68899ba60091?q=80&w=3087&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
      ],
      'actions' => [
        'button' => [
          'text' => 'How it Works',
          'path' => '#'
        ],
        'instagram' => [
          'text'=> 'https://jwc.gotra-resources.my.id/web-upload/1741339386-07-03-2025-omZVSshQY9ri8IM1XtdJG3qbk4cf5g2l.webp',
          'path'=> '#'
        ],
        'facebook' => [
          'text'=> 'https://jwc.gotra-resources.my.id/web-upload/1741339386-07-03-2025-9xA1s3oklj7NFdvYragRDZ6CymIpKbH2.webp',
          'path'=> '#'
        ],
      ]
    ]));
  ?>
  
  <div class="_hero-image-1 _hero-image-wrapper">
    <div class="_hero-image-overlay-animate _hero-image-overlay-animate-1"></div>
    <div class="_hero-image-overlay"></div>
    <img class="_hero-image" src="<?= $_hero->images->image_1_url ?>" alt="hero image">
  </div>
  <div class="_hero-title-wrapper _hero-section-wrapper">
    <div class="_hero_title-animate-wrapper">
      <h1 class="_hero-title"><?= $_hero->title ?></h1>
    </div>
    <div class="_hero-subtitle-animate-wrapper">
      <p class="_hero-subtitle"><?= $_hero->subtitle ?></p>
    </div>
  </div>
  <div class="_hero-image-2 _hero-image-wrapper">
    <div class="_hero-image-overlay-animate _hero-image-overlay-animate-2"></div>
    <div class="_hero-image-overlay"></div>
    <img class="_hero-image" src="<?= $_hero->images->image_2_url ?>" alt="hero image">
  </div>
  <div class="_hero-description-wrapper _hero-section-wrapper">
    <h3 class="_hero-description"><?= $_hero->description ?></h3>
    <div class="_hero-actions">
      <a class="_hero-explore" href="<?= $_hero->actions->button->path ?>"><?= $_hero->actions->button->text ?></a>
      <a class="_hero-explore" href="<?= $_hero->actions->button->path ?>">
        <img src="<?= $_hero->actions->instagram->text ?>" alt="social" />
      </a>
    </div>
  </div>
</section>

<section id="_what-root">
  <?php
    $_what = json_decode(json_encode([
      'title' => '<span style="font-style: italic">What is</span> Pop-Up SanaSini?',
      'desc1'=>'Pop–Up SanaSini is an <span style="font-weight: bold">event planner</span> that helps Indonesian brands and SMEs break into international markets through curated pop-up stores and exhibitions abroad',
      'desc2' => 'Our collaborative concept allows multiple brands to share costs, making the global expansion journey more affordable and impactful.',
      'title_image' => './assets/grid.png',
      'desc_image' => 'https://images.unsplash.com/photo-1516382461343-35e1ba016e01?q=80&w=3174&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
    ]))
  ?>
  <div class="_what-title-wrapper">
    <div class="_what-title-header">
      <div class="_what-title-animate-wrapper">
        <h3 class="_what-title"><?= $_what->title ?></h3>
      </div>
    </div>
    <img src="<?= $_what->title_image ?>" class="_what-title-image" alt="what title image">
  </div>
  <div class="_what-content-wrapper">
    <p class="_what-description _what-description-1"><?= $_what->desc1 ?></p>
    <div class="_what-description-image-wrapper">
      <div class="_what-image-overlay"></div>
      <img class="_what-description-image" src="<?= $_what->desc_image ?>" alt="image">
    </div>
    <p class="_what-description _what-description-2"><?= $_what->desc2 ?></p>
  </div>
</section>

<section id="_why-root">
  <?php
    $_why = json_decode(json_encode([
      'title' => '<span style="font-style: italic">Why</span> Pop-Up SanaSini?',
      'items' => [
        'We help brands launch pop-ups abroad without breaking the bank',
        'We leverage collaboration to amplify reach and engagement',
        'We provide an all-in-one solution from planning and execution to content creation and media exposure',
        'Affordable & Strategic – A smarter, cost-effective way to go global',
        'Prime Locations – Carefully curated destinations tailored to your target market',
        'Content-First Approach – Turning your pop-up into a digital storytelling asset',
        'B2B Growth Potential – Helping you connect with the right business partners abroad'
      ],
      'image' => './assets/grid-2.png',
    ]))
  ?>
  <div class="_why-content-wrapper">
    <?php foreach ($_why->items as $key=>$item): ?>
      <div class="_why-card">
        <p class="_why-card-number">
          <?= ($key + 1) ?>
        </p>
        <p class="_why-card-desc">
          <?= $item ?>
        </p>
      </div>
    <?php endforeach;?>
  </div>
  <div class="_why-title-wrapper">
    <div class="_why-title-header">
      <div class="_why-title-animate-wrapper">
        <h3 class="_why-title"><?= $_why->title ?></h3>
      </div>
    </div>
    <img class="_why-title-image" src="<?= $_why->image ?>" alt="image">
  </div>
</section>

<section id="_about-root">
  <?php
    $_about = json_decode(json_encode([
      'span' => 'About Us',
      'title' => 'Bringing Indonesian Brands to the Global Stage',
      'description' => 'Pop-Up SanaSini is an event planner that helps Indonesian brands and SMEs break into international markets through curated pop-up ...',
      'items_left' => [
        ['icon' => 'fa-solid fa-wallet', 'title' => 'Cost-Effective Expansion', 'description' => 'Expand globally at lower costs with a shared pop-up model for impact.'],
        ['icon' => 'fa-solid fa-map-marker-alt', 'title' => 'Strategic Locations', 'description' => 'Carefully selected international markets to boost brand visibility and reach.'],
      ],
      'items_right' => [
        ['icon' => 'fa-solid fa-bullhorn', 'title' => 'Powerful Brand Activation', 'description' => 'Transform your pop-up into a powerful digital storytelling asset.'],
        ['icon' => 'fa-solid fa-handshake', 'title' => 'Global Networking', 'description' => 'Connect with distributors, investors, and partners to scale your business globally.'],
      ],
      'images' => [
        'custom_1'=>'https://jwc.gotra-resources.my.id/web-upload/1741408085-08-03-2025-JFkCSZrY8K9O3tPybwoWlgMXdaBU1TzQ.webp',
        'grid_1' => 'https://jwc.gotra-resources.my.id/web-upload/1741408079-08-03-2025-KWcuQksn5Gd9ZpSgfPeClU7t3DbBLATF.webp'
      ],
    ]))
  ?>
  <div class="_about-description-wrapper">
    <header class="_about-description-header">
      <span class="_about-span"><?= $_about->span ?></span>
      <img src="<?= $_about->images->custom_1 ?>" class="_about-description-image" alt="header image">
      <h2 class="_about-title"><?= $_about->title ?></h2>
    </header>
    <div class="_about-description-desc">
      <p class="_about-description"><?= $_about->description ?></p>
    </div>
    <div class="_about-card-wrapper">
      <div class="_about-card-left">
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
      <div class="_about-card-right">
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
    <img class="_about-image-custom" src="<?= $_about->images->custom_1 ?>" alt="images grid">
    <img class="_about-image-grid" src="<?= $_about->images->grid_1 ?>" alt="images grid">
  </div>
</section>

<section id="_goglobal-root">
  <?php
    $_goglobal = json_decode(json_encode([
      'span' => 'Step Into the Global Spotlight',
      'title' => 'Why Go Global?',
      'items' => [
        [
          "title" => "Brand Visibility & Awareness",
          "description" => "Establish a global presence and reach new audiences",
          "cover_url" => "https://jwc.gotra-resources.my.id/web-upload/1740309725-23-02-2025-X7Whe81o9cZg5E63TQFzd4JiNu0ln2VI.webp",
          "icon" => "fa-solid fa-sun"
        ],
        [
          "title" => "Stronger Brand Credibility",
          "description" => "Elevate your brand image by stepping into the international scene.",
          "cover_url" => "https://jwc.gotra-resources.my.id/web-upload/1740217778-22-02-2025-4N5wfnWhmJcbkXEBRqjPDQTZ26O9yUF8.webp",
          "icon" => "fa-solid fa-guitar"
        ],
        [
          "title" => "Market Expansion & Sales Growth",
          "description" => "Tap into new customer bases and unlock potential revenue streams",
          "cover_url" => "https://jwc.gotra-resources.my.id/web-upload/1740309917-23-02-2025-W2stG7jTugJZlSh6XOdEc0epi8zwQ3x4.webp",
          "icon" => "fa-solid fa-utensils"
        ],
        [
          "title" => "B2B Networking Opportunities",
          "description" => "Meet local business owners and explore potential partnerships.",
          "cover_url" => "https://jwc.gotra-resources.my.id/web-upload/1740309960-23-02-2025-GfKlQYngCHijFXM8IbUTOEodse5h2zWD.webp",
          "icon" => "fa-solid fa-water"
        ],
      ]
    ]))
  ?>
  <header class="_goglobal-header-wrapper">
    <span class="_goglobal-span"><?= $_goglobal->span ?></span>
    <h2 class="_goglobal-title"><?= $_goglobal->title ?></h2>
  </header>
  <div class="_goglobal-content-wrapper">
    <!-- Desktop -->
    <div class="_goglobal-content-desktop">
      <?php $active = 0; ?>
      <?php foreach ($_goglobal->items as $key=>$item): ?>
        <article class="_goglobal-card-desktop <?= ($active == $key) ? '_goglobal-card-desktop-active' : '' ?>" data-index="<?= $key ?>">
          <div class="_goglobal-card-desktop-description-wrapper">
            <p class="_goglobal-card-desktop-title"><?= $item->title ?></p>
            <p class="_goglobal-card-desktop-description"><?= $item->description ?></p>
          </div>
          <img class="_goglobal-card-desktop-image" src="<?= $item->cover_url ?>" alt="global image">
        </article>
      <?php endforeach; ?>
    </div>
    <!-- Mobile -->
    <div class="_goglobal-content-mobile">
      <?php foreach ($_goglobal->items as $key=>$item): ?>
        <article class="_goglobal-card-mobile <?= ($active == $key) ? '_goglobal-card-desktop-active' : '' ?>" data-index="<?= $key ?>">
          <div class="_goglobal-card-mobile-description-wrapper">
            <p class="_goglobal-card-mobile-title"><?= $item->title ?></p>
            <p class="_goglobal-card-mobile-description"><?= $item->description ?></p>
          </div>
          <img class="_goglobal-card-mobile-image" src="<?= $item->cover_url ?>" alt="global image">
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section id="_offer-root">
  <?php
    $_offer = json_decode(json_encode([
      'span' => 'Seamless & Impactful',
      'title' => 'What we offer',
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
  <header class="_offer-header-wrapper">
    <span class="_offer-span"><i class="fa-solid fa-star-of-life"></i> <?= $_offer->span ?> <i class="fa-solid fa-star-of-life"></i></span>
    <h2 class="_offer-title"><?= $_offer->title ?></h2>
  </header>
  <div class="_offer-content-wrapper">
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
</section>

<section style="height: 100vh"></section>

<script src="https://unpkg.com/lenis@1.2.0/dist/lenis.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/motion@latest/dist/motion.js"></script>
<script src="./js/root.js"></script>
<script src="./js/hero.js"></script>
<script src="./js/what.js"></script>
<script src="./js/goglobal.js"></script>
</body>
</html>