<div class="col-lg-6 col-xl-4 isotope-item <?= $item->slug ?>">
	<div class="portfolio-item">
		<a href="<?= $item->url_img?>">
			<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
				<span class="thumb-info-wrapper">
					<img src="<?= $item->url_img_thumb?>" class="img-fluid" alt="">
					<span class="thumb-info-title">
						<span class="thumb-info-inner text-2"><?= $item->title ?></span>
					</span>
				</span>
			</span>
		</a>
	</div>
</div>  