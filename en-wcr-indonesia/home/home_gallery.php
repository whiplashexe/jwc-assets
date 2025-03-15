<style>
	.wrap-gallery {
       position: relative;
       background-position: center;
       background-size: cover;
       background-repeat: no-repeat;
       height: 250px;
    }

    .wrap-gallery2 {
    	width: 100% !important;
    	height: 250px;
    	object-fit: cover;;
    }

    @media (max-width: 768px) {
    	.wrap-gallery, .wrap-gallery2 { height: 160px; }

    	.slide-fix {
    		position: relative;
    		z-index: 99;
    		overflow-y: scroll;
    	}
    }

.category-gal-con h3 {
    margin-bottom: 0;
    font-family: 'DINNextRoundedLTW01-Light';
    text-transform: capitalize;
    font-weight: 600;
    color: var(--colors);
    letter-spacing: 0px;
}
.category-gal-con {
    padding: 23px 10px;
}

.category-gal img {
    height: 350px;
    width: 100%;
    object-fit: cover;
}
.category-gal {
    background: #fff6f1;
    border-radius: 10px;
    text-align: center;
    transition: all ease 500ms;
    overflow: hidden;
}

.category-gal:hover {
	transition: all ease 500ms;
	transform: translateY(-5px);
}


</style>
<?php
$title = $item->setting->title;
$subtitle = $item->setting->subtitle;
$grid = $item->setting->grid;
$route = ROUTE_PRODUCT_VIEW;
?>

<?php if ( $grid == 1): ?>

<section class="py-5">
	<div class="container">

		<div class="row mb-4 title-product text-center justify-content-center">
		      <div class="col-md-8">
		          <h2><?= $title ?></h2>
		          <p><?= $subtitle ?></p>
		      </div>
		  </div>
		
		<div class="row">
			<?php foreach ($data->gallery_category as $index => $cate): ?>
			<?php if ($index === 2) continue; // Skip iteration on the 3rd loop (0-based index) ?>
			<div class="col-md-6 mb-3 mb-md-0">
				<a style="text-decoration: none;" href="<?= $func->link(ROUTE_GALLERY, $cate->slug) ?>">
				<div class="category-gal">
					<img class="img-fluid" src="<?= $cate->image ?>" alt="<?= $cate->name ?>">

					<div class="category-gal-con">
						<h3><?= $cate->name ?></h3>
					</div>
				</div>
				</a>
			</div>
		<?php endforeach ?>

		</div>

	</div>
</section>

<?php elseif ( $grid == 2): ?>

<section class="pt-5">
	<div class="text-center title-product wow fadeInUp">
			<span>Hotel Partner</span>
            <h2><?= $title ?></h2>
            <hr>
            <p>Get Bali Tour Packages Prices at affordable rates. Our company <?= $data->web->site_name ?> provide the best facilities for Bali Tour passengers. Enjoy fun travel services from <?= $data->web->site_name ?>.</p>
        </div>

    <div class="owl-carousel owl-theme" data-plugin-options="{'responsive': {'0': {'items': 2}, '479': {'items': 2}, '768': {'items': 6}, '979': {'items': 6}, '1199': {'items': 6}}, 'loop': true, 'dots':false, 'margin': 10, 'autoplay': true, 'autoplayTimeout': 3000}">
		<?php foreach ($item->data as $items): ?>
				<div class="slide-fix" style="padding: 0;">
					<a class="img-thumbnail-no-borders img-thumbnail-hover-icon lightbox" style="border-radius: 0px;" href="<?= $items->url_img ?>" data-plugin-options="{'type':'image'}">
						<img class="img-fluid wrap-gallery2" src="<?= $items->url_img_thumb ?>" alt="<?= $items->title ?>">
					</a>
				</div>
		<?php endforeach ?>
	</div>
</section>

<?php elseif ( $grid == 3): ?>

<section class="py-5">
	<div class="container">
		<div class="row mb-4 title-product text-center justify-content-center">
		    <div class="col-md-8">
		        <h2><?= $title ?></h2>
		        <p><?= $subtitle ?></p>
		    </div>
		</div>
	</div>
	<div class="lightbox" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}, 'mainClass': 'mfp-with-zoom', 'zoom': {'enabled': true, 'duration': 300}}">
        <div class="carousel-wall mb-3">
            <?php $i=1; foreach ($item->data as $items): ?>
                <?php if ($i <= '12'): ?>
                    <div class="px-2">
                        <div class="wrp-img">
                            <a class="lightbox" href="<?= $items->url_img ?>">
                                <img class="img-fluid w-100" src="<?= $items->url_img ?>" alt="Partners">
                            </a>
                        </div>
                    </div>
                <?php endif ?>
            <?php $i++; endforeach ?>
        </div>


        <div class="carousel-wall1 mb-5">
            <?php $i=1; foreach ($item->data as $items): ?>
                <?php if ($i >= '13'): ?>
                    <div class="px-2">
                        <div class="wrp-img">
                            <a class="lightbox" href="<?= $items->url_img ?>">
                                <img class="img-fluid w-100" src="<?= $items->url_img ?>" alt="Partners">
                            </a>
                        </div>
                    </div>
                <?php endif ?>
            <?php $i++; endforeach ?>
        </div>
	
    </div>
	<div class="mt-4 text-center">
		<a class="btn btn-proak" href="<?= $func->dm_email() ?>">Contact Us</a>
	</div>

</section>

<?php else : ?>
<section class="mt-5">
	<div class="container">
		<div class="row mb-3">
			<div class="col-md-10 justify-content-start wow fadeInRight">
				<h3 class="title-gallery" style="margin-bottom: 5px;"><?= $item->setting->title ?></h3>
				<p><?= $item->setting->subtitle ?></p>
			</div>

			<div class="col-md-2 col-cus wow fadeInRight">
				<a class="btn btn-primary-cus" href="http://thedesaubud.com/gallery/all">View All</a>
			</div>
		</div>

		<div class="row">
			<?php foreach ($item->data as $items): ?>
			<div class="col-md-4 mb-2 wow fadeInUp" style="padding: 0; padding-right: 10px;">
				<a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href="<?= $items->url_img ?>" data-plugin-options="{'type':'image'}">
					<img class="img-fluid" style="width: 100%; height: 250px;" src="<?= $items->url_img_thumb ?>" alt="<?= $items->title ?>">
				</a>
			</div>
			<?php endforeach ?>
		</div>
		
	</div>
</section>
<?php endif ?>