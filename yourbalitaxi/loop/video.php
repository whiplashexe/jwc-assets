<div class="col-md-4 mb-4 pb-3 mb-md-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
	<div class="thumb-info thumb-info-hide-wrapper-bg custom-thumb-info-style-1 text-center">
		<div class="thumb-info-wrapper">
                      
                        <iframe class="iframe img-fluid" style="width: 100%; height: 250px" src="https://www.youtube.com/embed/<?= $item->video_id ?>" alt=""></iframe>

			<?php if ($item->hide_price != '1' && $data->web->hide_price != '1' && number_format($item->price)) : ?>
				<div class="thumb-info-price background-color-primary font-weight-semibold">
					<span><?= $func->price($item) ?></span>
				</div>
			<?php endif ?>
		</div>
		<div class="custom-info-caption pl-3 pr-3">
			<h3 class="font-weight-semibold text-transform-none mb-1 pb-0" style="font-family: 'RocknRoll One'; letter-spacing: 0.5px; font-size: 19px;" title="<?= $item->title ?>" class="text-primary"><?= $item->title ?></h3>
		</div>
	</div>
</div>