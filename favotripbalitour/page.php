<style>
    html.sticky-header-active #header .header-body {
        background: var(--colors) !important;
    }
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

    .content-page h3 {
        line-height: 50px;
        letter-spacing: 0px;
        font-weight: 600;
        margin-bottom: 5px;
        text-transform: capitalize;
        margin-top: 20px;
    }
</style>

<section class="section-allpage lazyload" data-bgset="https://jwc.gotra-resources.my.id/web-upload/1739354266-12-02-2025-4M0ZJpywqImUhjGkloYN7nbVXDeOxWgv.webp">
  <div class="text wow fadeIn" data-wow-duration="2s">
    <h1><?= $data->result->title ?></h1>
    <p>Home - <?= $data->result->title ?></p>
  </div>
  <div class="bg-overlay"></div>
</section>

<?php if ($data->result->title == 'About Us'): ?>

    <?= $func->load('home/home_profile') ?>

<?php else: ?>

<section class="pad6rem">
    <div class="container-global content-page">
        <h2><?= $data->result->title ?></h2>
        <?= $data->result->content ?>
    </div>
</section>

<?php endif ?>