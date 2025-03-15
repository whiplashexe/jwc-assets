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
              <h2>Our Founders</h2>
              <p>Through this platform, we introduce local heroes who fight to protect the rights of women, children and youth, and promote equality, social inclusion and sustainable development.</p>
          </div>
      </div>


<div class="row">
	  	<div class="col-md-4 mb-3 mb-md-0">
	  		<div class="wrap-ourteam">
	  			<img class="img-fluid" src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1707464281-09-02-2024-Ti0U9OG8VSJEPHpBZc7fznFqKwYv2Rxs.webp" alt="people behind wcr indonesia">
	  			<h3 class="_founder-name"><a href="https://www.linkedin.com/in/margaretha-hanita/"  style="text-decoration: none; color: inherit;" >Dr. Margaretha Hanita, S.H., M.Si.</a></h3>
	  			<span>Founder and Director</span>
	  		</div>
	  	</div>

	  	<div class="col-md-4 mb-3 mb-md-0">
	  		<div class="wrap-ourteam">
	  			<img class="img-fluid" src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1707464922-09-02-2024-sUiOfoZdgBy7pY3zKV8q4QJTI9GwDxab.webp" alt="people behind wcr indonesia">
	  			<h3 class="_founder-name"><a href="https://scholar.google.co.id/citations?user=bo56jQgAAAAJ&hl=id" style="text-decoration: none; color: inherit;">Prof. Dr. Suswandari, M.Pd.</a></h3>
	  			<span>Co-Founder and Secretary</span>
	  		</div>
	  	</div>


	  	<!-- <div class="col-md-4 mb-3 mb-md-0">
	  		<div class="wrap-ourteam">
	  			<img class="img-fluid" src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1707464922-09-02-2024-fHPUTsqoFElik7WZrAgb0zjBadhC8QwJ.webp" alt="people behind wcr indonesia">
	  			<h3>H. Febby Dt Bangso Sst.Par M.Par</h3>
	  			<span>Dewan Pembina</span>
	  		</div>
	  	</div> -->

	  	<div class="col-md-4 mb-3 mb-md-0">
	  		<div class="wrap-ourteam">
	  			<img class="img-fluid" src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1707464919-09-02-2024-AlVaUQg2PjO4TBEuLp7fh6DrbWNyFZ31.webp" alt="people behind wcr indonesia">
	  			<h3 class="_founder-name"><a href="https://www.linkedin.com/in/stefani-selina/" style="text-decoration: none; color: inherit;">Selina Prameswari, S.Sos.</a></h3>
	  			<span>Co-Founder and Head of Research and Development</span>
	  		</div>
	  	</div>
	  </div>

    </div>
</section>


<?= $func->sidebar('gallery') ?>