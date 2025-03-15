<style>
  #_hero * {
    padding: 0;
    margin: 0;
    line-height: normal;
  }
  #_hero {
    height: 100vh;
    width: 100%;
    display: grid;
    grid-template-columns: auto 1fr auto;
    grid-template-rows: 60% 40%;
    grid-template-areas: "image-1 title-section title-section" "description-section description-section image-2";
  }
  #_hero ._hero-image-1 {
    grid-area: image-1;
  }
  #_hero ._hero-title-wrapper {
    gap: 1rem;
    grid-area: title-section;
    background-color: var(--primary-pink-col);
    display: flex;
    flex-direction: column;
    justify-content: end;
    align-items: start;
  }
  #_hero ._hero-title-wrapper ._hero_title-animate-wrapper {
    width: 100%;
    overflow: hidden;
  }
  #_hero ._hero-title-wrapper ._hero_title-animate-wrapper ._hero-title {
      color: var(--primary-white-col);
      font-family: var(--primtext);
      width: 100%;
      font-size: clamp(2rem, 5vw, 10rem);
      word-break: keep-all;
      font-weight: 700;
  }
  @media (min-width: 48rem) {
    #_hero ._hero-title-wrapper ._hero_title-animate-wrapper ._hero-title {
      white-space: nowrap;
    }
  }
  #_hero ._hero-title-wrapper ._hero-subtitle-animate-wrapper {
    width: 100%;
    overflow: hidden;
  }
  #_hero ._hero-title-wrapper ._hero-subtitle-animate-wrapper ._hero-subtitle {
    color: var(--primary-white-col);
    font-family: var(--sectext);
    width: 100%;
    font-size: 18px;
    line-height: 30px;
}
  #_hero ._hero-image-2 {
    grid-area: image-2;
  }
  #_hero ._hero-description-wrapper {
    grid-area: description-section;
    background-color: var(--primary-green-col);
    gap: 1rem;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: start;
  }
  #_hero ._hero-description-wrapper ._hero-description {
      color: white;
      font-size: clamp(1rem, 2vw, 2rem);
      font-weight: 500;
      text-transform: unset;
      font-family: var(--primtext);
      font-size: 40px;
      margin-bottom: 15px;
  }
  #_hero ._hero-description-wrapper ._hero-actions {
    display: flex;
    flex-direction: row;
    justify-content: start;
    align-items: stretch;
    gap: 0.6rem;
  }
  #_hero ._hero-description-wrapper ._hero-actions ._hero-explore {
      text-decoration: none;
      color: var(--colors);
      background-color: white;
      padding: 10px 30px;
      font-weight: bold;
      font-size: 20px;
      line-height: 30px;
      align-self: center;
      border-radius: 4px;
  }
  #_hero ._hero-section-wrapper {
    padding: clamp(2rem, 5vw, 8rem);
  }
  #_hero ._hero-image-wrapper {
    position: relative;
    overflow: hidden;
  }
  #_hero ._hero-image-wrapper ._hero-image-overlay-animate {
    z-index: 2;
    position: absolute;
    left: 0;
    width: 100%;
  }
  #_hero ._hero-image-wrapper ._hero-image-overlay-animate-1 {
    bottom: 0;
    background-color: var(--primary-green-col);
  }
  #_hero ._hero-image-wrapper ._hero-image-overlay-animate-2 {
    top: 0;
    background-color: var(--primary-pink-col);
  }
  #_hero ._hero-image-wrapper ._hero-image-overlay {
    z-index: 1;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0.5;
  }
  #_hero ._hero-image-wrapper ._hero-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
  @media (min-width: 48rem) {
    #_hero {
      grid-template-columns: repeat(2, 1fr);
      grid-template-areas: "image-1 title-section" "description-section image-2";
    }
  }

  #_hero ._hero-social {
      display: none;
      background-color: var(--colors);
      justify-content: center;
      align-items: center;
      padding: 10px;
      width: 50px;
      height: 50px;
      border: 2px solid #fff;
      border-radius: 5px;
  }

  #_hero ._hero-social img {
      height: 27px;
  }
  @media (min-width: 40rem) {
    #_hero ._hero-social {
      display: flex;
    }
  }

  @media (min-width: 768px) {
    #_hero ._hero-title-wrapper ._hero_title-animate-wrapper ._hero-title {
        font-size: 50px;
    }

    #_hero ._hero-title-wrapper ._hero-subtitle-animate-wrapper ._hero-subtitle {
        font-size: 15px;
        line-height: 28px;
      }

    #_hero ._hero-description-wrapper ._hero-description { font-size: 30px; }

    #_hero ._hero-description-wrapper ._hero-actions ._hero-explore {
        padding: 7px 20px;
        font-size: 16px;
    }

    #_hero ._hero-social {
        padding: 10px;
        width: 40px;
        height: 40px;
    }

      #_hero ._hero-social img {
          height: 22px;
      }
  }

  @media (min-width: 1280px) {
     #_hero ._hero-title-wrapper ._hero_title-animate-wrapper ._hero-title {
          font-size: 60px;
      }

      #_hero ._hero-title-wrapper ._hero-subtitle-animate-wrapper ._hero-subtitle {
        font-size: 18px;
      }

      #_hero ._hero-description-wrapper ._hero-description { font-size: 35px; }

      #_hero ._hero-description-wrapper ._hero-actions ._hero-explore {
        padding: 10px 30px;
        font-size: 20px;
      }

      #_hero ._hero-social {
          padding: 10px;
          width: 50px;
          height: 50px;
      }

      #_hero ._hero-social img {
          height: 22px;
      }
  }

  @media (max-width: 768px) {
    #_hero {
      height: 85vh;
    }

    #_hero ._hero-title-wrapper ._hero-subtitle-animate-wrapper ._hero-subtitle {
        font-size: 12px;
        line-height: 21px;
    }

    #_hero ._hero-description-wrapper ._hero-description {
        font-size: 22px;
        margin-bottom: 5px;
    }

    #_hero ._hero-description-wrapper ._hero-actions ._hero-explore {
        padding: 5px 15px;
        font-size: 14px;
    }
  }
</style>

<section id="_hero">
  <?php
    $_hero = json_decode(json_encode([
      'title' => 'Pop-Up SanaSini',
      'subtitle' => 'A cost-effective, strategic way to enter international markets. Join PopupSanaSini and showcase your brand worldwide.',
      'description' => 'Taking Local Brand to expand the Market',
      'images' => [
        'image_1_url'=> 'https://jwc.gotra-resources.my.id/web-upload/1741495966-09-03-2025-4FtqmxQIOERsdjiBncVH2WGae3yr5T7J.webp',
        'image_2_url' => 'https://jwc.gotra-resources.my.id/web-upload/1741495970-09-03-2025-vrbdHuBLoVSTQ3FxwGk18gRzZEYD9NmK.webp'
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
      <a class="_hero-social _hero-instagram-btn" href="<?= $_hero->actions->instagram->path ?>">
        <img src="<?= $_hero->actions->instagram->text ?>" alt="social image">
      </a>
      <a class="_hero-social _hero-facebook-btn" href="<?= $_hero->actions->facebook->path ?>">
        <img src="<?= $_hero->actions->facebook->text ?>" alt="social image">
      </a>
    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/motion@latest/dist/motion.js"></script>
<script>

const heroOverlay1 = document.querySelector('#_hero ._hero-image-overlay-animate-1')
const heroOverlay2 = document.querySelector('#_hero ._hero-image-overlay-animate-2')
const heroImage1 = document.querySelector('#_hero ._hero-image-1 img')
const heroImage2 = document.querySelector('#_hero ._hero-image-2 img')
const heroTitle = document.querySelector('#_hero ._hero-title')
const heroSubtitle = document.querySelector('#_hero ._hero-subtitle')

animate(heroOverlay1, { height: ["100%", 0]}, { duration: 2, ease: "anticipate", delay: 0.2 })
animate(heroOverlay2, { height: ["100%", 0]}, { duration: 2, ease: "anticipate", delay: 0.2 })
animate(heroTitle, { y: ["100%", 0]}, { duration: 2, delay: 1, ease: "anticipate" })
animate(heroSubtitle, { y: ["100%", 0]}, { duration: 2, delay: 1, ease: "anticipate" })

</script>