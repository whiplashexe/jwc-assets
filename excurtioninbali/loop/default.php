<?php $sp = $data->site_position;
if ($sp == "product" || $sp == "product_category" || $sp == "tag_product") {
	$route = ROUTE_PRODUCT_VIEW;
	$img_thumb = $item->img_thumb_url;
}elseif ($sp == "blog" || $sp == "blog_category" || $sp == "tag_blog") {
	$route = ROUTE_BLOG_VIEW;
	$img_thumb = $item->img_thumb_url;
}elseif ($sp == "video" || $sp == "video_category" || $sp == "tag_video") {
	$route = ROUTE_VIDEO_VIEW;
	$img_thumb = 'https://img.youtube.com/vi/'.$item->video_id.'/0.jpg';
}else {
	$route = '';
	$img_thumb = '';
} ?>
<div class="col-lg-4 mb-3">
	<span class="thumb-info thumb-info-hide-wrapper-bg">
		<span class="thumb-info-wrapper">
			<img src="<?= $img_thumb ?>" class="img-fluid" alt="">
		</span>
		<span class="thumb-info-caption">
			<span class="thumb-info-caption-text">
				<h3 class="heading-primary mb-2"><?= $item->title ?></h3>
				<?= $func->trailer($item, 100)  ?>
				<?php if(!empty($route)): ?>
				<a href="<?= $func->link($route.$item->slug) ?>" class="btn btn-outline btn-primary btn-sm mt-2 mb-2">View More</a>
				<?php endif ?>
			</span>		
		</span>
	</span>
</div>