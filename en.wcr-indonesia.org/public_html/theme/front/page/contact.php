<style>
	.title-coninfo {
	    color: #282828;
	    font-family: 'DINNextRoundedLTW01-Light';
	    font-weight: 700;
	    text-transform: capitalize;
	    font-size: 30px;
	    margin-bottom: 20px;
	    line-height: 30px;
	    letter-spacing: 0.5px;
	}

	.p-coninfo {
		font-family: DINNextRoundedLTW01-Light;
	    font-size: 17px;
	    color: #616265;
	    text-align: justify;
	    letter-spacing: 0px;
	}

	.wrap-coninfo {
		padding: 35px 20px;
	    text-align: center;
	    border: 1px solid #ececec;
	    border-radius: 3px;
	}

	.wrap-coninfo .icon-coninfo {
		font-size: 40px;
	    color: var(--colors);
	    margin-bottom: 20px;
	}

	.wrap-coninfo h3 {
	    margin-bottom: 9px;
	    text-transform: capitalize;
	    font-family: 'DINNextRoundedLTW01-Light';
	    letter-spacing: 0.5px;
	    font-weight: bold;
	    font-size: 20px;
	    color: #282828;
	}

	.wrap-coninfo p {
	    font-family: 'DINNextRoundedLTW01-Light';
	    color: #8f8f8f;
	    font-size: 14px;
	    margin-bottom: 2px;
	}

	@media (max-width: 768px) {
		.title-coninfo {
			font-size: 32px !important;
			line-height: 35px !important;
		}
	}

	html .toggle-primary .toggle label {
		font-family: 'DINNextRoundedLTW01-Light'; 
	}

	.toggle-content p {
		font-family: 'DINNextRoundedLTW01-Light';
	    line-height: 26px;
	    font-size: 14px;
	    color: #2a2929;
	}

	.image-profile { 
		padding: 0;
		margin-bottom: 20px; 
	}

.logo1 { display: none; }

@media (min-width: 768px) {
    .header-body {
        background-color: white !important;
    }
}

html:not(.sticky-header-active) .logo2 {
    display: block;
}
</style>

<section class="bg-primarypage" style="background: var(--colors);">
    <div class="title-primarypage text-center wow fadeInUp" style="z-index: 1; position: relative;">
        <h1>Kontak Kami</h1>
        <p>Home - Kontak Kami</p>
    </div>
</section>
<section>
<div class="container">
	<div class="row mt-5">

		<div class="col-md-4">
			<div class="wrap-coninfo">
				<i class="fas fa-map-marker-alt icon-coninfo"></i>
                <h3>Our Address</h3>
                <p><?= $data->company->company_address ?></p>
			</div>
		</div>

		<div class="col-md-4">
			<div class="wrap-coninfo">
				<i class="fas fa-mobile-alt icon-coninfo"></i>
                <h3>Phone & Email</h3>
                <p>+<?= $data->company->company_telp ?></p>
                <p><?= $data->company->company_email ?></p>
			</div>
		</div>

		<div class="col-md-4">
			<div class="wrap-coninfo">
				<i class="fas fa-share-alt icon-coninfo"></i>
                <h3>Stay in Touch</h3>
                <p>Follow us on Social Media</p>
                 
                 <ul class="header-social-icons social-icons my-3">
                    <?php if (!empty($data->social->facebook_url)): ?>
                        <li class="social-icons-facebook"><a href="<?= $data->social->facebook_url ?>" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <?php endif ?>
                    <?php if (!empty($data->social->twitter_url)): ?>
                        <li class="social-icons-twitter"><a href="<?= $data->social->twitter_url ?>" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                    <?php endif ?>
                    <?php if (!empty($data->social->instagram_url)): ?>
                        <li class="social-icons-instagram"><a href="<?= $data->social->instagram_url ?>" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                    <?php endif ?>
                    <?php if (!empty($data->social->youtube_url)): ?>
                        <li class="social-icons-youtube"><a href="<?= $data->social->youtube_url ?>" target="_blank" title="Youtube"><i class="fab fa-youtube"></i></a></li>
                    <?php endif ?>
                    <?php if (!empty($data->social->googleplus_url)): ?>
                        <li class="social-icons-googleplus"><a href="<?= $data->social->googleplus_url ?>" target="_blank" title="Google+"><i class="fab fa-google-plus-g"></i></a></li>
                    <?php endif ?>

                    <li class="social-icons-googleplus"><a href="https://www.tiktok.com/@subaktibuminusantara" target="_blank" title="Google+"><i class="fab fa-tiktok"></i></a></li>
                    <li class="social-icons-googleplus"><a href="https://www.linkedin.com/in/yayasan-subakti-bumi-nusantara-8a248426a/" target="_blank" title="Google+"><i class="fab fa-linkedin"></i></a></li>

                </ul>
                 
			</div>
		</div>

	</div>

	<div class="row justify-content-center mt-5">
		<div class="col-lg-12">
			<h3 class="title-coninfo">Location Map</h3>
			<iframe class="mb-2" src="<?= $data->google_maps ?>" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>

		</div>
	</div>

</div>

</section>
