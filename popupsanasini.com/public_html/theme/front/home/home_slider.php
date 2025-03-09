<!--ANIMATION LIB-->

<!--HERO-->
<style>
  :root {
    --min-width-tablet: 768px;
    --min-width-desktop: 1280px;
    --text-mobile-size: 2rem;
    --text-tablet-size: 2.25rem;
    --text-desktop-size: 3rem;
  }

  /*FORMATING*/
  #__hero-root * {
    margin: 0;
  }

  /*MOBILE*/
  #__hero-root {
    box-sizing: border-box;
    background: white;
    padding: 12rem 0 8rem;
    font-family: var(--primtext), serif;
  }
  #__hero-root .wrapper {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: start;
    gap: 2rem;
  }
  #__hero-root .description-wrapper {
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: start;
    align-items: start;
    gap: 1.5rem;
  }
  #__hero-root .logo {
    width: 72px;
    aspect-ratio: 4/4;
    border-radius: 999em;
  }
  #__hero-root .title {
    font-weight: bold;
    font-size: 2rem;
    color: var(--colors);
  }
  #__hero-root .description {
    font-size: calc(var(--text-mobile-size) / 2);
    line-height: 2rem;
    color: #555;
  }
  #__hero-root .actions {
      display: flex;
      justify-content: start;
      align-items: center;
      gap: 1rem;
      margin-top: 0.9rem;
  }
  #__hero-root .actions > .button {
    border-radius: 999em;
    padding: 12px 30px;
    border: 1px solid var(--colors);
    overflow: hidden;
    font-weight: 600;
    font-size: calc(var(--text-mobile-size) / 2);
    text-align: center;
}
  #__hero-root .actions > .button:first-child {
    background-color: var(--colors);
    color: white;
    transition: all ease 500ms;
  }
  #__hero-root .actions > .button:last-child {
    position: relative;
    color: var(--colors);
    transition: all ease 500ms;
  }

  #__hero-root .actions > .button:hover {
    background-color: black;
    color: white;
  }

  #__hero-root .actions > .button:last-child .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: var(--colors);
    opacity: 0.2;
  }
  #__hero-root .images-wrapper {
    display: none;
    grid-template-rows: auto 1fr;
    gap: 0.7rem;
    grid-template-columns: repeat(2, 1fr);
    grid-template-areas: "image-2 main-image" "image-3 main-image";
  }
  #__hero-root .images-wrapper > .image img {
    width: 100%;
    border-radius: 1rem;
  }
  #__hero-root .images-wrapper > .image {
    position: relative;
    overflow: hidden;
  }
  #__hero-root .images-wrapper > .image .img-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    background-color: white;
  }
  #__hero-root .images-wrapper > .image .img-overlay:last-child {
    width: 70%;
  }
  #__hero-root .image-1 {
    grid-area: main-image;
  }
  #__hero-root .image-2 {
    grid-area: image-2;
  }
  #__hero-root .image-3 {
    grid-area: image-3;
    display: flex;
    justify-content: end;
    align-items: start;
  }
  #__hero-root .image-3 img {
    margin-left: auto;
    width: 70%!important;
  }
  #__hero-root .image-wrapper-mobile {
    width: 100%;
  }
  #__hero-root .image-wrapper-mobile img {
    width: 100%;
    aspect-ratio: 16/14;
    object-fit: cover;
    margin: 0 10px;
    border-radius: 1rem;
    object-position: top;
  }
  /*TABLET*/
  @media (min-width: 768px) {
    #__hero-root .description-wrapper {
      width: 50%;
    }
    #__hero-root .images-wrapper {
      width: 50%;
      display: grid;
    }
    #__hero-root .title {
      font-size: 2.25rem;
      letter-spacing: 0;
    }
    #__hero-root .description {
        font-size: calc(var(--text-tablet-size) / 2 - 4px);
        line-height: 27px;
    }
    #__hero-root .actions > .button {
        font-size: calc(var(--text-tablet-size) / 2 - 4px);
        padding: 10px 20px;
    }
    #__hero-root .image-wrapper-mobile {
      display: none;
    }
  }

  /*DESKTOP*/
  @media (min-width: 1280px) {
    #__hero-root .logo {
        width: 70px;
        margin-bottom: 20px;
    }
    #__hero-root .title {
        font-size: 2.5rem;
        letter-spacing: 0;
    }
    #__hero-root .description {
      font-size: calc(var(--text-desktop-size) / 2 - 6.5px);
      line-height: 2rem;
    }
    #__hero-root .actions > .button {
        font-size: calc(var(--text-desktop-size) / 2 - 7px);
        padding: 12px 30px;
    }
  }

  @media (max-width: 768px) {
    #__hero-root .logo { display:none; }

    #__hero-root {
      padding: 8rem 0 5rem;
      text-align: center;
    }

    #__hero-root .title {
        font-size: 27px;
        text-align: center;
        margin: auto;
        letter-spacing: 0px;
    }

    #__hero-root .description {
        font-size: 15px;
        line-height: 28px;
        color: #555;
    }

    #__hero-root .actions > .button {
        padding: 10px 20px;
        border: 1px solid var(--colors);
        font-size: 15px;
    }

    #__hero-root .actions { align-self:center; }
  }
</style>
<section id="__hero-root">
  <div class="container-global wrapper">
    <?php $i=1; foreach ($item->data as $slide): ?>
      <div class="description-wrapper">
        <img class="logo" src="<?= $slide->img ?>" alt="Logo E-Baki Kitchen & Music">
        <h1 class="title">
         <?= $slide->title ?>
        </h1>
        <div class="image-wrapper-mobile hero-slick-mobile ss-arrow">
          <img src="https://jwc.gotra-resources.my.id/web-upload/1740217778-22-02-2025-4N5wfnWhmJcbkXEBRqjPDQTZ26O9yUF8.webp" alt="image">
          <img src="https://jwc.gotra-resources.my.id/web-upload/1740217777-22-02-2025-paiqgmr9MnF3dIu7hSevBLyRDczWVjJb.webp" alt="image">
          <img src="https://jwc.gotra-resources.my.id/web-upload/1740217777-22-02-2025-LWhfQOsav1x5crSwJtm7izRBpHGyDnFl.webp" alt="image">
        </div>
        <p class="description">
          <?= $slide->text ?>
        </p>
        <div class="actions">
          <a class="button" href="<?= $slide->url ?>"><?= $slide->text_url ?></a>
          <a class="button" href="<?= base_url() ?>contact">
            Visit Us <i class="fas fa-arrow-right ml-2"></i>
            <div class="overlay"></div>
          </a>
        </div>
      <?php $i++; endforeach ?>
    </div>
    <div class="images-wrapper">
      <div class="image image-1">
        <div class="img-overlay"></div>
        <img src="https://jwc.gotra-resources.my.id/web-upload/1740217778-22-02-2025-4N5wfnWhmJcbkXEBRqjPDQTZ26O9yUF8.webp" alt="image">
      </div>
      <div class="image image-2">
        <div class="img-overlay"></div>
        <img src="https://jwc.gotra-resources.my.id/web-upload/1740217777-22-02-2025-paiqgmr9MnF3dIu7hSevBLyRDczWVjJb.webp" alt="image">
      </div>
      <div class="image image-3">
        <div class="img-overlay"></div>
        <img src="https://jwc.gotra-resources.my.id/web-upload/1740217777-22-02-2025-LWhfQOsav1x5crSwJtm7izRBpHGyDnFl.webp" alt="image">
      </div>
    </div>
  </div>
</section>
<script>
  const _slider_logo = document.querySelector("#__hero-root .logo")
  const _slider_title = document.querySelector("#__hero-root .title")
  const _slider_desc = document.querySelector("#__hero-root .description")
  const _slider_actions = document.querySelector("#__hero-root .actions")
  const _slider_images = document.querySelectorAll("#__hero-root .image");
  const _slider_imageOverlay = document.querySelectorAll("#__hero-root .img-overlay");
  const _slider_imageItems = document.querySelectorAll("#__hero-root .image img");

  animate(_slider_logo,{opacity: [0, 1]}, { duration: 1.5, ease: "anticipate" })
  animate(_slider_title,{opacity: [0, 1]}, { duration: 1.5, ease: "anticipate", delay: 0.2 })
  animate(_slider_desc,{opacity: [0, 1]}, { duration: 1.5, ease: "anticipate", delay: 0.4 })
  animate(_slider_actions,{opacity: [0, 1]}, { duration: 1.5, ease: "anticipate", delay: 0.8 })
  animate(_slider_imageOverlay, {height: ["100%", "0"], filter: ["grayscale(1)", "grayscale(0)"]}, {delay: stagger(0.4), duration: 1.5, ease: "anticipate"})
  animate(_slider_imageItems, {borderRadius: ["0", "1rem"]}, {delay: stagger(0.7), duration: 2, ease: "anticipate"})

  document.addEventListener("DOMContentLoaded", function () {
    $('.hero-slick-mobile').slick({
      autoplay: true,
      draggable: true,
      prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa-solid fa-chevron-left"></i></button>',
      nextArrow: '<button class="slide-arrow next-arrow"><i class="fa-solid fa-chevron-right"></i></button>',
      dots: false,
      cssEase: 'cubic-bezier(0.075, 0.82, 0.165, 1)',
      autoplaySpeed: 3000,
      speed: 1000,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
    });
  });
</script>
