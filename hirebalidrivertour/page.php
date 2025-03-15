<style>

#header.header-no-min-height .header-body {
    background: var(--colors)!important;
}

</style>

<section class="section-allpage lazyload" data-bgset="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1741847252-13-03-2025-n956XKrvGfpsHYbRaSCMq8UwitJzPd2j.webp">
    <div class="text wow fadeIn" data-wow-duration="2s">
        <div class="text-center w-100">
            <h1><?= $data->result->title ?></h1>
            <p>Home - <?= $data->result->title ?></p>
        </div>
    </div> 
</section>

<?= $func->load('home/home_profile') ?>

<?= $func->load('home/home_why') ?>

<?= $func->load('home/home_faq') ?>