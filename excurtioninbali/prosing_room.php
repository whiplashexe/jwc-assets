<style>
	
@media (min-width: 768px) {
	html:not(.sticky-header-active) .header-body {
	    margin-top: unset !important;
	    border-bottom: 1px solid #7a7a7a45 !important;
	    transition: all ease 1000ms !important;
	    background: white !important;
	}

	html:not(.sticky-header-active) #header.header-transparent .header-nav-main:not(.header-nav-main-dark) nav>ul>li>a {
	    color: #000;
	}

	.conrom { max-width: 1240px; }
}

/*Slick*/

.wrap-resort.slick-slide .wrap-resort2  { 
    transition: opacity 1s ease-out;
    opacity: 0;
    height: 0;
    overflow: hidden;
}

.wrap-resort.slick-slide.slick-current.slick-active.slick-center .wrap-resort2  { 
    opacity: 1;
    height: auto; 
}

.slick-center .slick-list {
    padding:0 25% 0 !important;
}

.slick-slide.wrap-resort {
  margin: 0 10px;
}

@media (max-width: 768px) {
    .slick-center .slick-list, .slick-list.draggable { padding: unset !important; }
}

.slick-slide.wrap-resort img { opacity: 0.6; transition: opacity 500ms ease-in-out; }

.slick-center.wrap-resort img { opacity: 1; transition: opacity 500ms ease-in-out; }

.slick-margin { margin-top:85px; }

.wrap-conrom {
    position: relative;
    padding-right: 3%;
}

.wrap-conrom .title {
	position: relative;
    padding-bottom: 25px;
    border-bottom: 1px solid #ddd;
    margin-bottom: 25px;
}

.wrap-conrom .title span {
    font-family: 'Raleway';
    letter-spacing: 0.1px;
    font-size: 15px;
    color: var(--colors);
    display: block;
    margin-bottom: 10px;
}

.wrap-conrom h1 {
    font-family: var(--primtext);
    font-weight: 800;
    letter-spacing: 0px;
    font-size: 35px;
    line-height: 45px;
    margin-bottom: 17px;
}

.wrap-conrom h2 {
    font-family: var(--primtext);
    font-weight: 800;
    letter-spacing: 0px;
    font-size: 35px;
    line-height: 45px;
    margin-bottom: 25px;
}

.wrap-conrom .title p {
    font-family: 'Raleway';
    margin-bottom: 0px;
}

.wrap-conrom .content {
    position: relative;
    padding-bottom: 25px;
    border-bottom: 1px solid #ddd;
    margin-bottom: 25px;
}

.wrap-conrom .content p {
    font-family: 'Raleway';
    line-height: 30px;
}

.wrap-conrom .content li {
    font-family: 'Raleway';
    margin-bottom: 5px;
    line-height: 30px;
}

/* Book */

.wrap-booking {
    position: relative;
    border: 1px solid #ddd;
    padding: 40px 45px;
}

.wrap-booking .price-main {

}
.wrap-booking .price-atas {
    font-family: 'Raleway';
    display: block;
    margin-bottom: 10px;
    font-size: 13px;
}

.wrap-booking .pricemain span {
    font-weight: 400;
    font-size: 13px;
}
.wrap-booking .pricemain {
    border-bottom: 1px solid #ddd;
    padding-bottom: 20px;
    margin-bottom: 25px;
    font-weight: 600;
    font-family: raleway;
    letter-spacing: 0px;
    font-size: 30px;
}

.wrap-booking label {
    font-family: 'Raleway';
}

.make-me-sticky {
      position: -webkit-sticky;
      position: sticky;
      top: 15%;
      padding: 0 15px;
}

@media (min-width: 768px) {
	.sidebar-item {
	    position: absolute;
	    top: 0;
	    left: 0;
	    width: 100%;
	    height: 100%;
	}
}

@media (max-width: 768px) {
	.make-me-sticky { position: relative; }

	.sidebar-item { margin-bottom: 40px; }

	.header-body { background: var(--color2) !important; }
}

</style>

<section class="slick-margin">
	<div class="slick-center">
		<div class="wrap-resort wow fadeIn" data-wow-duration="2s">
            <img class="img-fluid" alt="<?= $data->result->title ?>" src="<?= $data->result->img_cover_url ?>">
        </div>
        <?php $i=1; foreach ($data->images as $img): ?>
            <div class="wrap-resort wow fadeIn" data-wow-duration="2s">
                <img class="img-fluid" alt="<?= $data->result->title ?>" src="<?= $img->url ?>">
            </div>
        <?php $i++; endforeach ?>
    </div>
</section>

<section class="pt-5 wow fadeIn" data-wow-duration='2s'>
	<div class="container conrom">
		<div class="row">
			<div class="col-md-8">
				<div class="wrap-conrom">
					<div class="title">
						<span>Lovina, Bali</span>
						<h1><?= $data->result->title ?></h1>
						<p><i class="fa-solid fa-bed mr-md-2 mr-2"></i><?= $data->result->custom_field_1 ?></p>
					</div>

					<div class="content">
						<?= $data->result->content ?>
					</div>

				<?php if (!empty($data->addon_contents)): ?>
                	<?php $i=1; foreach ($data->addon_contents as $items): ?>
                		<div class="content">
                			<h2><?= $items->name ?></h2>
                			<?= $items->content ?>
                		</div>
                	<?php $i++; endforeach ?>
                <?php endif ?>
                	<div class="content">
                		<h2>Location Maps</h2>
                		<p>A 30-minute drive from Gitgit Waterfall, Villa Patria provides a peaceful retreat set amidst a natural landscape. It boasts Balinese style accommodation and an infinity swimming pool. Free Wi-Fi access and free scheduled shuttle services drop off and pick up to Lovina area are available.</p>

                		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.11419148446!2d115.0514513116593!3d-8.19125069180631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd185246c4d653f%3A0x48514705c342ca99!2sVilla%20Patria!5e0!3m2!1sen!2sid!4v1710407103000!5m2!1sen!2sid" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                	</div>
				</div>
			</div>

			<div class="col-md-4">
				 <div class="sidebar-item">
                    <div class="make-me-sticky">

						<div class="wrap-booking">
							<span class="price-atas">Start From</span>
							<h3 class="pricemain">IDR <?= number_format($data->result->price) ?> <span>/night</span></h3>

							<?= $func->load('booking_form2') ?>
						</div>

					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<?= $func->sidebar('mainroom') ?>