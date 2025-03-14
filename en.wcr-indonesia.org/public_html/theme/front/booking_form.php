<style type="text/css">
	.btn-book-wa {
		background: var(--colors);
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
		background: black;
	}
</style>


<form id="contactForm" action="" method="POST">
	<div class="form-row">
		<div class="form-group col-12">
			<label>Name *</label>
			<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
		</div>

		<div class="form-group col-12">
			<label>Tanggal Booking *</label>
			<input type="date" value="" class="form-control" name="tglbooking" id="phone" required>
		</div>
	</div>

	<div class="form-row">
		<div class="form-group col">
			<label>Alamat *</label>
			<input type="text" value="" class="form-control" name="alamat" id="alamat" required>
		</div>
	</div>

	<div class="form-row">
		<div class="form-group col">
			<label>Pilihan Trip</label>
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
		<div class="form-group col-12">
			<label>Jumlah Orang *</label>
			<input type="text" name="jmlhorang" class="form-control" id="jmlhorang" required>
		</div>

		<div class="form-group col-12">
			<label>Instagram *</label>
			<input type="text" name="instagram" class="form-control" id="instagram" required>
		</div>
	</div>

	<div class="form-row">
		<div class="form-group col">
			<input type="submit" name="booking" value="Booking Now" class="btn btn-book-wa" data-loading-text="Loading...">
		</div>
	</div>


	 <?php
		if (isset($_POST['booking'])) {
		    header("location: https://api.whatsapp.com/send?phone=".str_replace('+', '', $data->social->whatsapp)."&text=Form%20booking%20".$data->result->title."%20%0D%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%0D%0A%0D%0ATgl%20booking%20%3A%2021%20".str_replace(' ', '%20', $_POST['tglbooking'])."%202021%0D%0A%0D%0ANama%20%3A%20".str_replace(' ', '%20', $_POST['name'])."%20%0D%0A%0D%0AAlamat%20%3A%20".str_replace(' ', '%20', $_POST['alamat'])."%0D%0A%0D%0AJumlah%3A%20".str_replace(' ', '%20', $_POST['jmlhorang'])."%0D%0A%0D%0APilihan%20trip%3A%20".str_replace(' ', '%20', $_POST['tourpackage'])."%0D%0A%0D%0AInstagram%20%20%20%20%3A%20".str_replace(' ', '%20', $_POST['instagram'])."");
		}?>

</form>