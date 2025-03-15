<?php 

$grid = $item->setting->grid;

$title = $item->setting->title;

$subtitle = $item->setting->subtitle; 

?>

<?php if ($grid == "1"): ?>



<section class="pad6rem">
    <div class="container-global wow fadeIn" data-wow-duration="2s" style="z-index: 4; position: relative;">

        <div class="title-general text-center">
            <span class="tag-ats"><?= $subtitle_2 ?></span>
            <h2 class="title"><?= $title ?></h2>
        </div>



		<div class="row mt-5">

			<?php foreach ($item->data as $items): ?>

				<div class="col-md-6 mb-4 pb-3 mb-md-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">

					<div class="thumb-info thumb-info-hide-wrapper-bg custom-thumb-info-style-1 text-center">

						<div class="thumb-info-wrapper">

				            <iframe class="iframe img-fluid" style="width: 100%; height: 350px" src="https://www.youtube.com/embed/<?= $items->video_id ?>" alt=""></iframe>

						</div>

						<!-- <div class="custom-info-caption pl-3 pr-3">

							<h3 class="font-weight-semibold text-transform-none mb-1 pb-0" title="<?= $item->title ?>" class="text-primary"><?= $items->title ?></h3>

						</div> -->

					</div>

				</div>

			<?php endforeach ?>

		</div>

	</div>

</section>	



<?php endif ?>

