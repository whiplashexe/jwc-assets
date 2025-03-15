<style type="text/css">
	.btn-book-wa {
		background: var(--colors);
	    padding: 10px 30px;
	    border-radius: 100px;
	    color: white;
	    font-family: 'Quicksand';
	    font-size: 15px;
	    letter-spacing: 1px;
	    transition: all ease 500ms;
	}

	.btn-book-wa:hover {
		transition: all ease 500ms;
		color: white;
		background: black;
	}
</style>


<form id="contactForm" action="" method="POST">
	<div class="form-row">
		<div class="form-group col-md-4">
			<label>Guest Name</label>
			<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
		</div>

		<div class="form-group col-md-4">
			<label>Email</label>
			<input type="email" name="email" class="form-control" id="email" required>
		</div>

		<div class="form-group col-md-4">
			<label>Phone / Whatsapp</label>
			<input type="text" name="phone/wa" class="form-control" id="phone/wa" required>
		</div>
	</div>

	<div class="form-row">
		<div class="form-group col-md-4">
			<label>Booking Date</label>
			<input type="date" name="bookingdate" class="form-control" id="bookingdate" required>
		</div>

		<div class="form-group col-md-4">
			<label>Villa /  Hotel Name</label>
			<input type="text" name="villa/hotelname" class="form-control" id="villa/hotelname">
		</div>

		<div class="form-group col-md-4">
			<label>Villa /  Hotel Address</label>
			<input type="text" name="villa/hoteladdress" class="form-control" id="villa/hoteladdress">
		</div>
	</div>


	<div class="form-row">
		<div class="form-group col-12">
			<label>Tour Package</label>

			<select id="tour packages" name="tourpackages" class="form-control">
                <option hidden >Select the tour package you want to book</option>
                <?= $func->sidebar('listtour') ?>
            </select>

		</div>
	</div>

	<div class="form-row">

		<div class="form-group col-md-4">
			<label>Adult</label>
			<input type="text" value="" class="form-control" name="adult" id="adult">
		</div>

		<div class="form-group col-md-4">
			<label>Child</label>
			<input type="text" value="" class="form-control" name="child" id="child" placeholder="3-12 years old">
		</div>

		<div class="form-group col-md-4">
			<label>Infant</label>
			<input type="text" value="" class="form-control" name="infant" id="infant" placeholder="<3 years old">
		</div>
	</div>

	<div class="form-row">
		<div class="form-group col-12">
			<label>Payment Type</label>
			<input type="text" value="" class="form-control" name="paymenttype" id="paymenttype">
		</div>
	</div>

	<div class="form-row">
		<div class="form-group col-12">
			<label>Messages</label>
			<textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control" name="message" id="message"></textarea>
		</div>
	</div>

	<div class="form-row">
		<div class="form-group col-12">
			<input type="submit" name="booking" value="Booking Tour Now" class="btn btn-book-wa" data-loading-text="Loading...">
		</div>
	</div>

	<?php
		if (isset($_POST['booking'])) {
		    header("location: https://api.whatsapp.com/send?phone=".str_replace('+', '', $data->social->whatsapp)."&text=%2ABooking%20Form%2A%0D%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%0D%0AGuest%20Name%20%3A%20".str_replace(' ', '%20', $_POST['name'])."%0D%0AEmail%20%3A%20".str_replace(' ', '%20', $_POST['email'])."%0D%0APhone%20%2F%20WA%20%3A%20".str_replace(' ', '%20', $_POST['phone/wa'])."%0D%0ABooking%20Date%20%3A%20".str_replace(' ', '%20', $_POST['bookingdate'])."%0D%0AVilla%20%2F%20Hotel%20Name%20%3A%20".str_replace(' ', '%20', $_POST['villa/hotelname'])."%0D%0AVilla%20%2F%20Hotel%20Addres%20%3A%20".str_replace(' ', '%20', $_POST['villa/hoteladdress'])."%0D%0ATour%20Packages%20%3A%20".str_replace(' ', '%20', $_POST['tourpackages'])."%0D%0AAdult%20%3A%20".str_replace(' ', '%20', $_POST['adult'])."%0D%0AChild%20%3A%20".str_replace(' ', '%20', $_POST['child'])."%0D%0AInfant%20%3A%20".str_replace(' ', '%20', $_POST['infant'])."%0D%0APayment%20Type%20%3A%20".str_replace(' ', '%20', $_POST['paymenttype'])."%0D%0AMessages%20%3A%20".str_replace(' ', '%20', $_POST['message'])."%0D%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D");
		}?>

</form>