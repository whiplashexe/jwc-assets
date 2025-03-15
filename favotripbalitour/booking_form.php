<style type="text/css">
	.btn-book-wa {
		background: var(--colors);
	    padding: 10px 30px;
	    border-radius: 100px;
	    color: white;
	    font-family: var(--primtext);
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

<?php 

$repl = str_replace('&', 'And', $data->result->title);

 ?>

<form id="contactForm" action="" method="POST">
	<div class="form-row">
		<div class="form-group col-12">
			<label>Name</label>
			<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name">
		</div>

		<div class="form-group col-12">
			<label>Phone Number</label>
			<input type="text" value="" class="form-control" name="phone" id="phone" required>
		</div>

		<div class="form-group col-12">
			<label>Email</label>
			<input type="email" value="" class="form-control" name="email" id="email" required>
		</div>

		<div class="form-group col-12">
			<label>Booking Date</label>
			<input type="date" value="" class="form-control" name="tourdate" id="tourdate">
		</div>

		<div class="form-group col-12">
			<label>Number of People</label>
			<input type="text" name="tourparticipant" class="form-control" id="tourparticipant">
		</div>

		<div class="form-group col-12">
			<label>Hotel & Address</label>
			<input type="text" value="" class="form-control" name="hotel" id="hotel">
		</div>
	</div>

	<div class="form-row">
		<div class="form-group col-12">
			<label>Tour Packages</label>
			<input 
			type="text" 
			class="form-control" 
			name="tourpackage" 
			id="tourpackage" 
			value ="<?= $repl ?>" readonly>
		</div>
	</div>

	<div class="form-row">
		<div class="form-group col-12">
			<label>Note ( Optional )</label>
			<textarea maxlength="5000" data-msg-required="Please enter your message." rows="4" class="form-control" name="message" id="message"></textarea>
		</div>
	</div>

	<div class="form-row">
		<div class="form-group col-12">
			<input type="submit" name="booking" value="Booking Now" class="btn btn-book-wa" data-loading-text="Loading...">
		</div>
	</div>


	 <?php
		if (isset($_POST['booking'])) {
		    header("location: https://api.whatsapp.com/send?phone=".str_replace('+', '', $data->social->whatsapp)."&text=Form%20booking%20%2A".$repl."%2A%0D%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%20%0D%0AName%20%3A%20".str_replace(' ', '%20', $_POST['name'])."%0D%0ABooking%20Date%20%3A%20".str_replace(' ', '%20', $_POST['tourdate'])."%0D%0AEmail%20%3A%20".str_replace(' ', '%20', $_POST['email'])."%0D%0APhone%20Number%20%3A%20".str_replace(' ', '%20', $_POST['phone'])."%0D%0ANumber%20of%20People%20%3A%20".str_replace(' ', '%20', $_POST['tourparticipant'])."%0D%0AHotel%20%3A%20".str_replace(' ', '%20', $_POST['hotel'])."%0D%0ATour%20Packages%20%3A%20".str_replace(' ', '%20', $_POST['tourpackage'])."%0D%0ANote%20%28%20Optional%20%29%20%3A%20".str_replace(' ', '%20', $_POST['message'])."%0D%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D");
		}?>


</form>