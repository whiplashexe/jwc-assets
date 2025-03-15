<?php 

$segment = $this->ci->uri->segment(1).'/';

$samakan = '';

if ($segment == 'search/') {

	$samakan = $data->search_type;

} 

if ($samakan == ROUTE_SEARCH_VIDEO || $segment == ROUTE_VIDEO_VIEW || $segment == ROUTE_VIDEO_TAG || $segment == ROUTE_VIDEO){

	$list = 'video';

	$src = ROUTE_SEARCH_VIDEO;

} elseif ($samakan == ROUTE_SEARCH_BLOG || $segment == ROUTE_BLOG_VIEW || $segment == ROUTE_BLOG_TAG || $segment == ROUTE_BLOG){

	$list = 'article';

	$src = ROUTE_SEARCH_BLOG;

} else{

	$list = 'product';

	$src = ROUTE_SEARCH_PRODUCT;

} ?>



	<form class="form-inline search-form mt-4 d-flex align-item-center justify-content-center" action="<?= base_url('search/').$src ?>">

		<!--<input class="form-control mr-sm-2" type="search" placeholder="Search Tour Packages" name="q">-->

		<div class="wrap-search">
			<input type="search" class="form-control mr-sm-2" placeholder="Search Tour Packages" name="q" />
			<div class="box">
				<button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
			</div>
		</div>

	</form>	