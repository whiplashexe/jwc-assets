

<style>
	.title-contact {
		color: #fff;
	    margin-bottom: 0;
	    font-family: Montserrat;
	    font-weight: 700;
	    font-size: 28px;
	    text-transform: capitalize;
	    line-height: 40px;
	    letter-spacing: 0px;
	}

	.content-contact {
	    margin-top: 10px;
	    font-family: 'Poppins';
	    color: #eee;
	    line-height: 30px;
	    font-size: 14px;
	    font-weight: 300;
	}

	.btn-contact1 {
		background: #000;
	    color: #fff;
	    font-family: Poppins;
	    font-size: 15px;
	    text-transform: uppercase;
	    font-weight: 600;
	    padding: 15px 40px;
	    transition: all ease 500ms;
	    letter-spacing: 1px;
	}

	.btn-contact1:hover {
		background: white;
		border-color: white;
		color: #222;
		transition: all ease 500ms;
	}

	@media (max-width: 768px) {
		.title-contact { 
		    margin-bottom: 0;
		    font-weight: 700;
		    font-size: 23px;
		    text-transform: capitalize;
		    line-height: 36px;
		    letter-spacing: 0px;
		    text-align: center;
		}

		.bg-cb {
			padding: 2rem 1rem !important;
		}

		.center-android {
			text-align: center;
		}

		.content-contact {
			text-align: center;
			margin-top: 10px;
		    font-size: 14px;
		    line-height: 24px;
		    font-weight: 300;
		}

		.btn-contact1 {
		    font-size: 14px;
		    text-transform: uppercase;
		    font-weight: 600;
		    padding: 15px 25px;
		    transition: all ease 500ms;
		    letter-spacing: 1px;
		}
	}

	@media (min-width: 768px) {
		.center-android {
			text-align: right;
		}
	}

</style>

<section class="bg-cb wow fadeIn" data-wow-duration="2s" data-wow-delay='0.5s' style="background: var(--colors); padding: 2rem; margin-bottom: 0px;">
	<div class="container" style="max-width: 1240px;">
		<div class="row wow fadeIn" data-wow-duration="2s">
			<div class="col-md-8">
				<h3 class="title-contact">Booking Tour Now!</h3>
				<p class="content-contact">At Hey Taxi Penida, our mission is to transform ordinary trips into extraordinary journeys. We're dedicated to ensuring your time on Nusa Penida is marked by adventure, relaxation, and authentic connections.</p>
			</div>

			<div class="col-md-4 center-android" style="align-self: center;">
				<a class="btn btn-contact1" href="<?= $func->dm_whatsapp() ?>">Booking Now!</a>
			</div>
		</div>
	</div>
</section>