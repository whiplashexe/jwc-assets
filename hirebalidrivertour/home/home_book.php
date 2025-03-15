<style type="text/css">

.form-style {
    position: absolute;
    z-index: 1000;
    bottom: -10%;
    left: 0;
    right: 0;
    max-width: 1240px;
    margin: auto;
    border-radius: 5px;
    overflow: hidden;
    background: white;
    box-shadow: 0px 11px 53px 0px rgb(89 59 36 / 14%);
}

.check-style {
    padding: 20px 5px 20px 10px;
}

.check-style label {
    font-family: var(--primtext);
    color: #4a4a4a;
    font-weight: 600;
    font-size: 16px;
    letter-spacing: 1px;
    margin-bottom: 12px;
}

.booking-style {
    background: var(--colors);
    position: relative;
    border-radius: 80px 0px 0px 90px;
    transition: all ease 500ms;
    height: 100%;
    display: flex;
    align-items: center;
}

.booking-style:hover {
	background: #111;
}

.booking-style .btn-book-wa {
    color: white !important;
    font-family: var(--primtext);
    font-size: 20px;
    line-height: 30px;
    font-weight: 600;
    margin: auto;
    background: unset;
    white-space: wrap;
}

.form-control {
    padding: 10px;
    font-family: var(--subtext);
    background: #f8f8f8;
}

.form-group { 
	margin-bottom:unset; 
	padding-left: 8px !important;
	padding-right: 8px !important;
}

@media (max-width: 768px) {

	.form-style {
        position: relative;
        z-index: 1000;
        bottom: unset;
        max-width: unset;
        margin: auto;
        border-radius: 5px;
        overflow: hidden;
        background: white !important;
        padding: 30px 10px;
        margin-top: 20px;
        box-shadow: unset;
        font-family: var(--primtext);
    }

    .form-style h3 {
    	font-family: var(--primtext);
	    color: var(--colors);
	    font-weight: 600;
	    text-transform: capitalize;
	    font-size: 27px;
	    line-height: 35px;
	    letter-spacing: 0px;
	    margin-bottom: 15px;
    }

	.check-style {
	    padding-left: 0;
	    padding-right: 0;
	    padding-bottom: 10px;

	}

	.check-style label {
	    font-size: 14px;
	    margin-bottom: 11px;
	}

	.booking-style {
	    padding: 0;
	    border-radius: unset;
	}
	.booking-style .btn-book-wa {
		font-size: 16px;

	}
}

</style>

<div class="container mb-3">

	<div class="form-style text-center wow fadeInUp" data-wow-duration="2s">
	
	<h3 class="d-block d-md-none">Booking Taxi Online in Nusa Penida</h3>
	<p class="d-block d-md-none">Check cost on our Whatsapp</p>

<form id="contactForm" action="" method="POST">

	<div class="row ml-0 ml-md-2">
		<div class="form-group col-md-2 col-6">
			<div class="check-style">
				<label class="wow fadeIn" data-wow-duration="2s">From *</label>
				<input type="text" placeholder="Pick Up" class="form-control wow fadeIn" data-wow-duration="2s" name="from" id="dpd1" required>
			</div>
		</div>

		<div class="form-group col-md-2 col-6">
			<div class="check-style">
				<label class="wow fadeIn" data-wow-duration="2s">To *</label>
				<input type="text" placeholder="Destination" class="form-control wow fadeIn" data-wow-duration="2s" name="to" id="dpd2" required>
			</div>
		</div>

		<div class="form-group col-md-2">
			<div class="check-style">
				<label class="wow fadeIn" data-wow-duration="2s">Date *</label>
				<input type="date" placeholder="Date" class="form-control wow fadeIn" data-wow-duration="2s" name="date" id="dpd3" required>
			</div>
		</div>

		<div class="form-group col-md-2">
			<div class="check-style">
				<label class="wow fadeIn" data-wow-duration="2s">Pick up Time *</label>
				<input type="time" placeholder="Pick Up Time" class="form-control wow fadeIn" data-wow-duration="2s" name="time" id="dpd4" required>
			</div>
		</div>

		<div class="form-group col-md-2">
			<div class="check-style">
				<label class="wow fadeIn" data-wow-duration="2s">Message *</label>
				<input type="text" placeholder="Massage" class="form-control wow fadeIn" data-wow-duration="2s" name="message" id="dpd5" required>
			</div>
		</div>


		<div class="form-group col-md-2 mt-4 mt-md-0">
			<div class="booking-style">
				<input name="booking" value="Book Taxi Online" type="submit" class="btn btn-book-wa wow fadeIn" data-wow-duration="2s">
			</div>
		</div>
	</div>

	<?php
	if (isset($_POST['booking'])) {
	    header("location: https://api.whatsapp.com/send?phone=".str_replace('+', '', $data->social->whatsapp)."&text=%2AForm%20Booking%20Taxi%20Online%2A%0D%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%0D%0AFrom%20%3A%20".str_replace(' ', '%20', $_POST['from'])."%0D%0ATo%20%3A%20%20".str_replace(' ', '%20', $_POST['to'])."%0D%0ADate%20%3A%20".str_replace(' ', '%20', $_POST['date'])."%0D%0APickup%20Time%20%3A%20".str_replace(' ', '%20', $_POST['time'])."%0D%0AMessage%20%3A%20".str_replace(' ', '%20', $_POST['message'])."%0D%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D");
	}?>

</form>


	</div>
</div>
