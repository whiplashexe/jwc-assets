<style type="text/css">

.form-style {
    z-index: 1000;
    bottom: 3%;
    left: 0;
    right: 0;
    width: 85%;
    margin: auto;
    overflow: hidden;
    border-radius: 12px;
	padding: 1rem 1.2rem;
    background: #ffffff50;
    backdrop-filter: blur(10px);
    box-shadow: 0px 11px 53px 0px rgb(89 59 36 / 14%);
}


.check-style label {
    font-family: var(--subtext);
    color: #fff;
    font-weight: 500;
    font-size: 15px;
    letter-spacing: 0px;
    margin-bottom: 8px;
}

.booking-style {
    /* background: var(--colors); */
    /* position: relative;
    transition: all ease 500ms;
    display: flex;
    align-items: center; */
}

.booking-style:hover {
	/* background: #111; */
}

.booking-style .btn-book-wa {
    color: #fff !important;
    font-family: var(--subtext);
    font-size: 17px;
    line-height: 20px;
    font-weight: 500;
	padding: .9rem 1rem;
    border-radius: 25px;
    margin: auto;
	margin-bottom: 0;
    background: var(--colors);
}

.form-control {
    padding: .6rem 1.2rem;
    border-radius: 25px;
    width: 100%;
    height: 100%;
	height: 50px;
    color: #fff;
	font-family: var(--subtext);
    background-color: transparent;
    border: 1px solid #fff;
}
select.form-control:not([size]):not([multiple]) {
	font-family: var(--subtext);
	height: 50px;
}

.form-group { margin-bottom:unset; }

.form-style .row .col-custom {
	width: 20%;
}
@media (max-width: 768px) {

	.form-style {
	    bottom: 3%;
	    background: white;
	    margin-top: -30px;
	    box-shadow: unset;
	    border: 1px solid #ccc;
	}

	.check-style {
	    padding: 8px;
	    padding-bottom: 0px;
	}

	.check-style label {
	    color: black;
	}

	.form-control {
	    color: black;
	    background-color: #f1f1f1;	}

	.booking-style {
	    padding: 20px 15px;
	    border-radius: unset;
	}
	.form-style .row .col-custom {
		width: 100%;
	}
}

</style>



<div class="form-style text-center wow fadeInUp mt-4" data-wow-duration="2s">
	
<form id="contactForm" action="" method="POST">

	<div class="row mx-0 px-0">
		<div class="form-group col-custom px-2" >
			<div class="check-style">
				<label class="wow fadeIn" data-wow-duration="2s">Check In *</label>
				<input type="date" value="" class="form-control wow fadeIn" data-wow-duration="2s" name="checkin" id="dpd1" required>
			</div>
		</div>

		<div class="form-group col-custom px-2" >
			<div class="check-style">
				<label class="wow fadeIn" data-wow-duration="2s">Check Out *</label>
				<input type="date" value="" class="form-control wow fadeIn" data-wow-duration="2s" name="checkout" id="dpd2" required>
			</div>
		</div>

		<div class="form-group col-custom px-2" >
			<div class="check-style">
				<label class="wow fadeIn" data-wow-duration="2s">Number of Guest *</label>
				<input type="number" value="" class="form-control wow fadeIn" data-wow-duration="2s" placeholder="Number of Guest" name="Guest" id="dpd2" required>
			</div>
		</div>

		<div class="form-group col-custom px-2" >
			<div class="check-style">
				
				<label class="wow fadeIn" data-wow-duration="2s">Select Rooms*</label>
				<select id="tour packages" name="rooms" class="form-control">
	                <option hidden >Select Your Rooms</option>
	                <option value="Deluxe Bungalow with Garden View" >Deluxe Bungalow with Garden View</option>
	               	<option value="Deluxe Bungalow with Ocean View" >Deluxe Bungalow with Ocean View</option>
	               	<option value="Two-Bedroom Family Room" >Two-Bedroom Family Room</option>
	               	<option value="Three-Bedroom Family Room" >Three-Bedroom Family Room</option>
	            </select> 
			</div>
		</div>

		<div class="form-group col-custom px-2  d-flex align-items-end">
			<div class="booking-style w-100">
				<input value="Check Availability" name="booking" type="submit" class="btn btn-book-wa w-100 wow fadeIn" data-wow-duration="2s">
			</div>
		</div>
	</div>
</form>

<?php
		if (isset($_POST['booking'])) {
		    header("location: https://api.whatsapp.com/send?phone=".str_replace('+', '', $data->social->whatsapp)."&text=Hello%2C%20I%20want%20to%20book%20a%20room%20with%20the%20details%20as%20below%3A%0D%0A%0D%0ACheck-In%20%3A%20".str_replace(' ', '%20', $_POST['checkin'])."%0D%0ACheck-Out%20%3A%20".str_replace(' ', '%20', $_POST['checkout'])."%0D%0ANumber%20of%20People%20%3A%20".str_replace(' ', '%20', $_POST['guest'])."%0D%0ARooms%20Name%20%3A%20".str_replace(' ', '%20', $_POST['rooms'])."%0D%0A%0D%0AIs%20it%20still%20available%3F");
		}?>

</div>
