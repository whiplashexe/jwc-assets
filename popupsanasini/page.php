<style>

    .content-page {
        position: relative;
        font-family: var(--subtext);
    }

    .content-page p {
        font-size: 15px;
        line-height: 30px;
        color: #333;
    }

    .content-page ul li {
        font-size: 15px;
        line-height: 30px;
        color: #333;
        margin-bottom: 10px;
    }

    .content-page h2 {
        line-height: 50px;
        color: var(--colors);
        letter-spacing: 0px;
        font-weight: 600;
        margin-bottom: 5px;
    }
.legality h3 {
    margin-bottom: 9px;
    text-transform: capitalize;
    font-family: var(--primtext);
    letter-spacing: 0.5px;
    font-weight: 700;
    font-size: 20px;
    color: #282828;
}
.img-contain .img-thumbnail {
    border: solid .5px #00000020;
    box-shadow: 5px 5px 10px #00000020;
    margin: 10px;
}
.img-contain img {
    aspect-ratio: 1 / 1;
    width: 460px;
    object-fit: contain;
}

</style>

<section class="section-allpage lazyload" data-bgset="https://jwc.gotra-resources.my.id/web-upload/1741427198-08-03-2025-hzMk4ReAJ01CE967FgbaBvcmldOWNXsf.webp">
    <div class="text wow fadeIn" data-wow-duration="2s">
        <div class="text-center w-100">
            <h1><?= $data->result->title ?></h1>
            <p>Home - <?= $data->result->title ?></p>
        </div>
    </div> 
</section>

<?php if ($data->result->title == 'What We Offers'): ?>
    
    <?= $func->load('home/home_offer') ?>

<?php elseif($data->result->title == 'How It Works'): ?>




<!-- HOW IT WORKS -->

<style>

#_works-root {
  display: flex;
  flex-direction: column;
  justify-content: start;
  align-items: stretch;
  background-color: var(--primary-white-col);
}
#_works-root ._works-header-wrapper {
  padding: clamp(1rem, 4vw, 4rem);
}
#_works-root ._works-content-wrapper {
  position: relative;
  display: flex;
  flex-direction: column;
  justify-content: start;
  align-items: stretch;
}
#_works-root ._works-content-wrapper ._works-card {
  position: sticky;
  top: 0;
  padding: clamp(1rem, 4vw, 4rem);
  gap: 1.6rem;
  height: auto;
  background-color: var(--primary-white-col);
  display: flex;
  justify-content: center;
  align-items: center;
}
@media (max-width: 48rem) {
  #_works-root ._works-content-wrapper ._works-card {
    flex-direction: column-reverse !important;
  }
}
@media (min-width: 48rem) {
  #_works-root ._works-content-wrapper ._works-card {
    height: 50vh;
  }
}
#_works-root ._works-content-wrapper ._works-card ._works-card-description-wrapper {
  width: 100%;
  overflow: auto;
  display: flex;
  flex-direction: column;
  justify-content: start;
  align-items: stretch;
  gap: 1rem;
}
@media (min-width: 48rem) {
  #_works-root ._works-content-wrapper ._works-card ._works-card-description-wrapper {
    width: 50%;
  }
}
#_works-root ._works-content-wrapper ._works-card ._works-card-description-wrapper ._works-card-icon {
  font-size: clamp(2rem, 3vw, 4rem);
  color: var(--primary-pink-col);
}
#_works-root ._works-content-wrapper ._works-card ._works-card-description-wrapper ._works-card-title {
  font-size: clamp(1.4rem, 2vw, 2.2rem);
  padding: 0!important;
  margin: 0!important;
  color: var(--primary-pink-col);
  font-weight: bold;
  font-family: var(--primtext);
}
#_works-root ._works-content-wrapper ._works-card ._works-card-description-wrapper ._works-card-description {
  font-size: clamp(0.8rem, 2vw, 0.9rem);
  line-height: 150%;
  padding: 0!important;
  margin: 0!important;
  color: var(--primary-gray-col);
}
#_works-root ._works-content-wrapper ._works-card ._works-card-image-wrapper {
  overflow: hidden;
  height: 200px;
  width: 100%;
  position: relative;
}
@media (min-width: 48rem) {
  #_works-root ._works-content-wrapper ._works-card ._works-card-image-wrapper {
    width: 50%;
    display: flex;
    height: 100%;
  }
}
#_works-root ._works-content-wrapper ._works-card ._works-card-image-wrapper ._works-card-image {
  width: 100%;
  height: 100%;
  object-fit: cover;
  z-index: 1;
  border-radius: 1rem;
}

#_works-root ._works-content-wrapper ._works-card ._works-card-image-wrapper ._works-card-image-step {
  font-size: clamp(3rem, 2.5vw, 5rem);
  font-weight: bold;
  position: absolute;
  z-index: 2;
  left: 0;
  top: 50px;
  font-style: italic;
  margin: 1rem;
  color: var(--primary-white-col);
}

/*# sourceMappingURL=works.css.map */
</style>

<!--<section class="pad6rem">
    <div class="container-global content-page">
        <h2><?= $data->result->title ?></h2>
        <?= $data->result->content ?>
    </div>
</section>-->

<section id="_works-root" class="pad6rem">

  <?php
    $_works = json_decode(json_encode([
      'span' => 'How It Works',
      'headline' => 'Take Your Brand Global in 5 Simple Steps',
      'description' => 'Expanding your brand internationally has never been easier. From strategic planning to digital exposure, discover how our pop-up stores help you enter global markets effortlessly.',
      'items' => [
        [
          'title' => 'Planning & Strategy',
          'description' => 'We analyze your brand’s goals, conduct market research, and select prime locations. A tailored strategy covers logistics, budgeting, and event customization to ensure a seamless global expansion through high-impact pop-up stores.',
          'icon' => 'fas fa-chart-line',
          'image' => 'https://jwc.gotra-resources.my.id/web-upload/1741584041-10-03-2025-1CahvlrygW0XJ6KDemcpdtGwEoijuLb3.webp',
          'background' => 'red',
        ],
        [
          'title' => 'Pop-Up Store Setup',
          'description' => 'From securing high-traffic venues to designing an immersive retail space, we manage logistics, inventory, and staff training. Our goal is to create a visually captivating and fully operational pop-up that attracts customers and drives engagement.',
          'icon' => 'fas fa-store',
          'image' => 'https://jwc.gotra-resources.my.id/web-upload/1741584041-10-03-2025-0CtXAOL7vEYdlVbiQuRDIqBF8ZNkT3re.webp',
          'background' => 'pink',
        ],
        [
          'title' => 'Event Execution',
          'description' => 'We deliver an unforgettable brand experience with interactive demos, real-time engagement, and strong on-site support. By capturing valuable customer feedback and ensuring smooth operations, your pop-up becomes an impactful marketing and sales tool.',
          'icon' => 'fas fa-bullhorn',
          'image' => 'https://jwc.gotra-resources.my.id/web-upload/1741584041-10-03-2025-jdZ26Sv7EKYhn0Cgpom4cNUIeRsTrL5B.webp',
          'background' => 'yellow',
        ],
        [
          'title' => 'Digital Branding & Exposure',
          'description' => 'Our content-driven approach leverages social media, influencer partnerships, and live streaming to amplify your brand beyond the event. User-generated content and PR outreach ensure maximum visibility, turning your pop-up into a lasting digital asset.',
          'icon' => 'fas fa-broadcast-tower',
          'image' => 'https://jwc.gotra-resources.my.id/web-upload/1741584041-10-03-2025-1CahvlrygW0XJ6KDemcpdtGwEoijuLb3.webp',
          'background' => 'green',
        ],
        [
          'title' => 'Post-Event Growth Strategy',
          'description' => 'We analyze key metrics, follow up with potential partners, and refine your brand’s international strategy. With data-driven insights, retargeting campaigns, and future expansion planning, we ensure long-term success beyond the pop-up event.',
          'icon' => 'fas fa-chart-pie',
          'image' => 'https://jwc.gotra-resources.my.id/web-upload/1741584041-10-03-2025-5JDGpRxL0jc3YEQtNbdiKFkMInsflO1X.webp',
          'background' => 'blue',
        ]
      ]
    ]))
  ?>
  
  <div class="_works-header-wrapper">

    <div class="row title-product unique-title efect-up ">
      <div class="col-md-9">
        <span class="tag-atas"><i class="fa-solid fa-star-of-life mr-2"></i> <?= $_works->span ?></span>
        <h2><?= $_works->headline ?></h2>
        <p style="subcus"><?= $_works->description ?></p>
      </div>

      <div class="col-md-3 align-self-center">
        <div class="text-md-right text-left"><a class="btn btn-gene" href="<?= $func->dm_whatsapp() ?>">Contact Us</a></div>
      </div>
    </div>

  </div>
  <div class="_works-content-wrapper">
    <?php foreach ($_works->items as $key=>$item): ?>
      <div
        class="_works-card"
        style="z-index: <?= $key ?>; flex-direction: <?php if ($key % 2 == 0): echo 'row'; else: echo 'row-reverse'; endif;?>"
      >
        <div class="_works-card-description-wrapper">
          <i class="_works-card-icon <?= $item->icon ?>"></i>
          <p class="_works-card-title"><?= $item->title ?></p>
          <p class="_works-card-description"><?= $item->description ?></p>
        </div>
        <div class="_works-card-image-wrapper">
          <p class="_works-card-image-step">0<?= $key + 1 ?></p>
          <img class="_works-card-image" src="<?= $item->image ?>" alt="step image">
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<script>
  document.querySelectorAll("#_works-root ._works-card-image-wrapper").forEach((section) => {
    const step = section.querySelector("._works-card-image-step")
    scroll(animate(step, { y: [-50, 50] }, { ease: "linear" }), {
      target: step,
    })
  })
</script>


<!-- HOW IT WORKS END -->


<?php else: ?>



<?php endif ?>


<?= $func->load('home/home_paralax') ?>

<?= $func->load('home/home_faq') ?>