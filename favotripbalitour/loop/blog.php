<div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
	<article class="thumb-info thumb-info-hide-wrapper-bg mb-5 border-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
		<div class="thumb-info-wrapper m-0">
			<a title="<?= $item->title ?>" href="<?= $func->link(ROUTE_BLOG_VIEW.$item->slug) ?>"><img src="<?= $item->img_thumb_url ?>" class="img-fluid" alt="<?= $item->title ?>"></a>
		</div>
		<div class="thumb-info-caption custom-padding-4">
			<span class="text-color-primary font-weight-semibold d-block mb-2"><?= $func->published($item->created_at) ?></span>
			<h3 class="custom-primary-font text-transform-none text-5 mb-3"><a title="<?= $item->title ?>" href="<?= $func->link(ROUTE_BLOG_VIEW.$item->slug) ?>" class="text-decoration-none custom-link-style-1"><?= $item->title ?></a></h3>
			<span class="thumb-info-caption-text line-height-md text-3 p-0 m-0"><?= $func->trailer($item, 100,' ')  ?></span>
		</div>
	</article>
</div> 