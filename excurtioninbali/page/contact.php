<style>
	.title-coninfo {
	    color: #282828;
	    font-family: var(--primtext);
	    font-weight: 500;
	    text-transform: capitalize;
	    font-size: 30px;
	    margin-bottom: 20px;
	    line-height: 30px;
	    letter-spacing: 0.5px;
	}

	.p-coninfo {
		font-family: lato;
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
	    background: white;
	}

	.wrap-coninfo .icon-coninfo {
		font-size: 40px;
	    color: var(--colors);
	    margin-bottom: 20px;
	}

	.wrap-coninfo h3 {
	    margin-bottom: 9px;
	    text-transform: capitalize;
	    font-family: var(--primtext);
	    letter-spacing: 0.5px;
	    font-weight: 500;
	    font-size: 20px;
	    color: #282828;
	}

	.wrap-coninfo p {
	    font-family: var(--subtext);
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
		font-family: var(--primtext); 
	}

	.toggle-content p {
		font-family: var(--primtext);
	    line-height: 26px;
	    font-size: 14px;
	    color: #2a2929;
	}

	.image-profile { 
		padding: 0;
		margin-bottom: 20px; 
	}

@media (min-width: 768px) {
    #header.header-no-min-height .header-body { margin-top:-3px; }
}

</style>

<section class="section-allpage lazyload" data-bgset="https://jwc.gotra-resources.my.id/web-upload/1739339808-product_image-12-02-2025-QLVaGCsZtwhBFAlf.webp
">
    <div class="text wow fadeIn" data-wow-duration="2s">
        <h1>Contact Us</h1>
        <p>Home - Contact Us</p>
    </div>
</section>

<section class="pad6rem">
<div class="container-global">
	<div class="row">

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
                <p><?= $data->company->company_telp ?></p>
                <p><?= $data->company->company_email ?></p>
			</div>
		</div>

		<div class="col-md-4">
			<div class="wrap-coninfo">
				<i class="fas fa-share-alt icon-coninfo"></i>
                <h3>Stay in Touch</h3>
                <p>Follow us on Social Media</p>
                 <ul class="social-icons mt-3">
                    <li class="social-icons-instagram"><a style="font-size: 17px;" href="<?= $data->social->instagram_url ?>" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                    <li class="social-icons-instagram"><a style="font-size: 17px;" href="https://api.whatsapp.com/send?phone=<?= $data->social->whatsapp ?>&text=Hello%2C%20I%20got%20this%20number%20from%20the%20website%20https%3A%2F%2Ftreenityexperiences.com.%20I%E2%80%99d%20like%20to%20ask%20something%20can%20you%20help%20me%3F" target="_blank" title="Instagram"><i class="fab fa-whatsapp"></i></a></li>
               </ul>
			</div>
		</div>

	</div>

	<div class="row justify-content-center my-5">
		<div class="col-lg-12">
			<h3 class="title-coninfo">Location Map</h3>
			<iframe class="mb-2" src="<?= $data->google_maps ?>" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>

		</div>
	</div>

</div>

</section>

<?= $func->load('home/home_why') ?>

<?= $func->load('home/home_faq') ?>
