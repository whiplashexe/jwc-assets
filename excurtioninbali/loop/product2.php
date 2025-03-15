<article class="post post-large blog-single-post mg0">
	<div class="post-content">
		<a class="post-link" href="<?= $func->link(ROUTE_PRODUCT_VIEW.$item->slug) ?>">
		<h2 class="heading-dark p-2"><strong><?= $item->title ?></strong></h2>
		<?= $item->content  ?>
		</a>                     
	</div>
	<hr class="solid mb-3 mt-1">
</article>