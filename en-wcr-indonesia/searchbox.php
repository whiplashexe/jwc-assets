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

<style>
	.search-box {
		background: white;
		height: 30px;
		margin-left: 5px;
		position: relative;
		border-radius: 40px;
		padding: 5px;
		position: relative;
		box-shadow: 2px 0px 7px #0000004f;
	}

	.search-btn {
		color: var(--colors) !important;
		float: right;
		width: 20px;
		height: 20px;
		border-radius: 50%;
		background: white;
		display: flex;
		justify-content: center;
		align-items: center;
		transition: 0.4s;
	}

	.search-txt {
		background: none;
		border: none;
		outline: none;
		float: left;
		padding: 0;
		color: var(--colors);
		font-size: 14px;
		font-family: montserrat;
		transition: 0.4s;
		width: 0px;
	}

	.search-box:hover > .search-txt {
		width: 150px;
		padding: 0 6px; 
	}

	.style-garis {
		font-size: 17px;
    	padding: 0px 10px;
	}

@media (min-width: 768px) {
	.hilang-search {
		display: inherit;
	}
}

@media (max-width: 768px) {
	.search-box:hover > .search-txt {
		width: 210px;
		padding: 0 6px; 
	}

	.hilang-search {
		display: none;
	}
}
</style>

	<span class="style-garis">|</span>
	<form action="<?= base_url('search/').$src ?>">
		<div class="search-box">
			<input class="search-txt" placeholder="Search..." name="q" type="text">
			<a type="submit" class="search-btn"><i class="fas fa-search"></i></a>
		</div>
	</form>	