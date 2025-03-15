<?php $sp = $data->site_position;
if ($sp == "product" || $sp == "view_product" || $sp == "tag_product" || $sp == "product_category") {
	$title = 'Product';
}elseif($sp == "blog" || $sp == "view_blog" || $sp == "tag_blog" || $sp == "blog_category"){
	$title = 'Blog';
}elseif ($sp == 'video' || $sp == "view_video" || $sp == "tag_video" || $sp == "video_category") {
	$title = 'Video';
}elseif ($sp == "gallery" || $sp == "view_gallery" || $sp == "tag_gallery" || $sp == "gallery_category") {
	$title = "Gallery";
}else{
	$title = '';
} ?>
<section class="section section-primary mt-0">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 mt-5 text-center">
				<h2 class="mt-5 font-weight-semibold text-uppercase">
					<?php if (isset($data->is_all) && $data->is_all == true) : ?>
                    	All <?= $title ?>
                    <?php elseif (isset($data->tag_name) && $data->tag_name !=''): ?>
                    	Tag - <?= $data->tag_name ?>
					<?php elseif (isset($data->category_name) && $data->category_name != ''): ?>						
                        Category - <?= $data->category_name ?>
					<?php elseif ($sp == "contact"): ?>						
                        Contact
                    <?php else : ?>
                    	<?= $data->result->title ?>
                    <?php endif ?>
				</h2>
				<div class="text-center">
					<ul class="breadcrumb justify-content-center">
	                    <li><a href="<?= base_url() ?>">Home </a> / </li>
	                    <?php if (!empty($title)): ?>
							<li>
			                    <?php if($sp == "view_product" || $sp == "view_blog" || $sp == "view_video" || $sp == "view_gallery"): ?>
			                    <a href="<?= $func->link(ROUTE_PRODUCT.$data->cat_data->slug) ?>"><?= $data->cat_data->name ?> </a> / 
			                    <?php else:?>
			                    <a href="<?= $func->link(ROUTE_PRODUCT.'all') ?>"><?= $title ?> </a> / 
			                    <?php endif ?>
		                    </li>                   	
	                    <?php endif ?>
	                    <li class="active">
	                        <?php if (isset($data->is_all) && $data->is_all == true) : ?>
		                    	All
		                    <?php elseif (isset($data->tag_name) && $data->tag_name !=''): ?>
		                    	Tag / <?= $data->tag_name ?>
							<?php elseif (isset($data->category_name) && $data->category_name != ''): ?>						
		                        Category / <?= $data->category_name ?>
		                    <?php elseif ($sp == "contact"): ?>						
	                        	Contact
		                    <?php else : ?>
		                    	<?= $data->result->title ?>
		                    <?php endif ?>
	                    </li>
	                </ul>
				</div>
			</div>			
		</div>
	</div>
</section>