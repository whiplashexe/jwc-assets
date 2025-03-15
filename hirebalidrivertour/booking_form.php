<style type="text/css">
	.btn-book-wa {
		background: var(--colors);
	    padding: 10px 30px;
	    border-radius: 100px;
	    color: white;
	    font-family: var(--primtext);
	    font-size: 15px;
	    letter-spacing: 1px;
        width: 100%;
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

<form id="contactForm" action="https://secure-booking.gotrabook.com/direct" method="POST" class="mt-4">
	<input type="hidden" name="to" value="<?= $data->company->company_email ?>">

	<div class="form-row">
		<div class="form-group col-12">
			<label>Name</label>
			<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name">
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

	<!-- <div class="form-row">
		<div class="form-group col-12">
			<label>Opsi Paket</label>
			<select id="opsi" name="opsi" class="form-control">
                <option hidden >Pilih Salah Satu</option>
                <option value="Single">Single</option>
                <option value="Tandem">Tandem</option>
            </select>
		</div>
	</div> -->

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
</form>