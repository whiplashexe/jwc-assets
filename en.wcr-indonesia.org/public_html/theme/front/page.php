<style type="text/css">

.header-body {
    background-color: white !important;
}

.style-page h3 {
    font-family: 'DINNextRoundedLTW01-Light';
    text-transform: capitalize;
    letter-spacing: 0px;
    font-size: 35px;
    line-height: 45px;
}

.style-page p {
    font-family: 'DINNextRoundedLTW01-Light';
    font-size: 18px;
    line-height: 30px;
}
	
</style>

<section class="bg-primarypage" style="background: var(--colors);">
    <div class="title-primarypage text-center wow fadeInUp" style="z-index: 1; position: relative;">
        <h1><?= $data->result->title ?></h1>
        <p>Home - <?= $data->result->title ?></p>
    </div>
</section>

<section class="py-5">
  <div class="container style-page">
    <?= $data->result->content ?>
  </div>
</section>

<?= $func->load('home/home_visimisi') ?>

<section class="py-5">
    <div class="container wow fadeInUp" data-wow-duration="2s">
        
        <div class="row title-product mb-4 text-center justify-content-center">
          <div class="col-md-8">
              <h2>People Behind</h2>
              <p>Melalui platform ini, kami memperkenalkan para pahlawan lokal yang berjuang untuk melindungi hak-hak perempuan, anak-anak, dan pemuda, serta mempromosikan kesetaraan, inklusi sosial, dan pembangunan berkelanjutan. </p>
          </div>
      </div>


      <div class="row">
        <div class="col-md-4 mb-3 mb-md-0">
            <div class="wrap-ourteam">
                <img class="img-fluid" src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1707464281-09-02-2024-Ti0U9OG8VSJEPHpBZc7fznFqKwYv2Rxs.webp" alt="people behind wcr indonesia">
                <h3>Dr. Margaretha Hanita, S.H., M.Si.</h3>
                <span>Direktur / Pendiri</span>
            </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
            <div class="wrap-ourteam">
                <img class="img-fluid" src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1707464922-09-02-2024-sUiOfoZdgBy7pY3zKV8q4QJTI9GwDxab.webp" alt="people behind wcr indonesia">
                <h3>Prof. Dr. Suswandari, M.Pd.</h3>
                <span>Sekretaris / Pendiri</span>
            </div>
        </div>


        <div class="col-md-4 mb-3 mb-md-0">
            <div class="wrap-ourteam">
                <img class="img-fluid" src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1707464919-09-02-2024-AlVaUQg2PjO4TBEuLp7fh6DrbWNyFZ31.webp" alt="people behind wcr indonesia">
                <h3>Selina Prameswari, S.Sos.</h3>
                <span>Ketua Program / Pendiri</span>
            </div>
        </div>
      </div>

    </div>
</section>

<?= $func->sidebar('gallery') ?>