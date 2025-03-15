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
	    text-transform: uppercase;
	    font-weight: 600;
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
		<div class="form-group col-6">
			<label>Name</label>
			<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
		</div>

		<div class="form-group col-6">
			<label>Arrival Date in Bali</label>
			<input type="date" value="" class="form-control" name="arrivaldate" id="arrivaldate" required>
		</div>

		<div class="form-group col-6">
			<label>Phone/Whatsapp</label>
			<input type="text" name="phwas" class="form-control" id="phwas" required>
		</div>

		<div class="form-group col-6">
			<label>Email Address</label>
			<input type="email" value="" class="form-control" name="email" id="email" required>
		</div>
	</div>

	<div class="form-row">
		<div class="form-group col-12">
			<label>Packages</label>
			<input 
			type="text" 
			class="form-control" 
			name="packages" 
			id="packages" 
			value ="<?= $repl ?>" readonly>
		</div>
	</div>

	<div class="form-row">
		<div class="form-group col-12">
			<label>Order Note ( Optional )</label>
			<textarea maxlength="5000" data-msg-required="Please enter your message." rows="4" class="form-control" name="message" id="message"></textarea>
		</div>
	</div>

	<div class="col-12">
        <div class="form-group">
          <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
    	  <label class="form-check-label" for="exampleCheck1">By checking this box, I confirm that my device supports eSIM and is unlocked for network use. I acknowledge that refunds will not be provided if my device is locked or incompatible. *</label>

    	  <label style="font-style: italic; display: block; margin-top: 10px;">Your eSIM QR code will be sent at least 3 days before your arrival.</label>
        </div>
    </div>

	<div class="form-row">
		<div class="form-group col-12">
			<input type="submit" name="booking" value="Buy Now!" class="btn btn-book-wa" data-loading-text="Loading...">
		</div>
	</div>


	 <?php
		if (isset($_POST['booking'])) {
		    header("location: https://api.whatsapp.com/send?phone=".str_replace('+', '', $data->social->whatsapp)."&text=%2AOrder%20Details%2A%0D%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%0D%0A%0D%0AName%20%3A%20".str_replace(' ', '%20', $_POST['name'])."%0D%0A%0D%0AArrival%20Date%20in%20Bali%20%3A%20".str_replace(' ', '%20', $_POST['arrivaldate'])."%0D%0A%0D%0APhone%2FWhatsapp%20%3A%20".str_replace(' ', '%20', $_POST['phwas'])."%0D%0A%0D%0AEmail%20Address%20%3A%20".str_replace(' ', '%20', $_POST['email'])."%0D%0A%0D%0APackages%20%3A%20".str_replace(' ', '%20', $_POST['packages'])."%0D%0A%0D%0AOrder%20Note%20%3A%20".str_replace(' ', '%20', $_POST['message'])."%0D%0A%0D%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D");
		}?>


</form>