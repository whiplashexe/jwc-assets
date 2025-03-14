<style type="text/css">
	.btn-book-wa {
		background: black;
	    padding: 10px 30px;
	    border-radius: 100px;
	    color: white;
	    font-family: 'Poppins';
	    font-size: 15px;
	    letter-spacing: 1px;
	    transition: all ease 500ms;
	}

	.btn-book-wa:hover {
		transition: all ease 500ms;
		color: white;
		background: var(--colors);
	}
</style>


<form id="contactForm" action="" method="POST">
	<div class="form-row">
		<div class="form-group col">
			<label>Name *</label>
			<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
		</div>

		<div class="form-group col">
			<label>Phone*</label>
			<input type="number" value="" data-msg-required="Please enter your telephone number." class="form-control" name="phone" id="phone" required>
		</div>
	</div>

	<div class="form-row">
		<div class="form-group col">
			<label>Email*</label>
			<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
		</div>
	</div>

	<div class="form-row">
		<div class="form-group col">
			<label>Tour Package</label>
			<input 
			type="text" 
			class="form-control" 
			name="tourpackage" 
			id="tourpackage" 
			value ="<?php if (isset($data->is_product)) {
				echo $data->result->title;
			} ?>" <?php if (isset($data->is_product)) {
				echo "readonly";
			} ?>>
		</div>
	</div>

	<div class="form-row">
		<div class="form-group col">
			<label>Tour Date*</label>
			<input type="date" name="date" class="form-control" id="date" required>
		</div>

		<div class="form-group col">
			<label>Country *</label>
			<select class="form-control" name="country" id="country">
				<option selected hidden="">-- Choose One ---</option>
		        <option value="Indonesia">Indonesia</option>
		        <option value="Overseas">Overseas</option>
		      </select>
		</div>
	</div>

	<div class="form-row">
		<div class="form-group col-12">
			<label>Pax</label>
		      <select class="form-control" name="pax2" id="pax2" onchange="populate(this.id, 'price2')">
		        <option selected>-- Tour Pax ---</option>
		        <option value="2 Pax">2 Pax</option>
		        <option value="3 Pax">3 Pax</option>
		        <option value="4 Pax">4 Pax</option>
		        <option value="5 Pax">5 Pax</option>
		        <option value="6 Pax">6 Pax</option>
		        <option value="7 Pax">7 Pax</option>
		        <option value="8 Pax">8 Pax</option>
		      </select>
		</div>

		<div class="form-group col-12">
			<label>Total Price</label>
		      <select class="form-control" name="price2" id="price2"></select>
		</div>
	</div>

	<div class="form-row">
		<div class="form-group col">
			<input type="submit" name="booking" value="Booking Now" class="btn btn-book-wa" data-loading-text="Loading...">
		</div>
	</div>


	 <?php
		if (isset($_POST['booking'])) {
		    header("location: https://api.whatsapp.com/send?phone=".str_replace('+', '', $data->social->whatsapp)."&text=Hello%20admin%2C%20I%20want%20to%20book%20a%20tour%20package%20with%20the%20following%20information%3A%0D%0A%0D%0AName%20%3A%20".str_replace(' ', '%20', $_POST['name'])."%0D%0APhone%20%3A%20".str_replace(' ', '%20', $_POST['phone'])."%0D%0AEmail%20%3A%20".str_replace(' ', '%20', $_POST['email'])."%0D%0ATour%20Package%20%3A%20".str_replace(' ', '%20', $_POST['tourpackage'])."%0D%0ATour%20Date%20%3A%20".str_replace(' ', '%20', $_POST['date'])."%0D%0ACountry%20%3A%20".str_replace(' ', '%20', $_POST['country'])."%0D%0APax%20%3A%20".str_replace(' ', '%20', $_POST['pax'])."%0D%0ATotal%20Price%20%3A%0D%0AIDR%20".str_replace(' ', '%20', $_POST['price'])."");
		}?>

</form>