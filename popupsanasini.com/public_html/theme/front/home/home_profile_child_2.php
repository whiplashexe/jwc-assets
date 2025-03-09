<div class="row mg0">	<div class="col-md-6 pd0">
	<section class="background-color-light border-0 my-0">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="mt-4"><strong><?= $data->company->company_name ?></strong></h2>
				</div>
				<div class="col-md-5">
					<img class="float-left img-fluid" src="<?= $data->company->company_image ?>" alt="<?= $data->company->company_name ?>">
				</div>
				<div class="col-md-7">
					<?= $data->company->company_desc ?>
				</div>                    
			</div>
		</div>
	</section>
</div>
