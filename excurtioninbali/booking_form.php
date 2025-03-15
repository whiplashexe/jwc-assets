<style type="text/css">
	.btn-book-wa {
		background: var(--colors);
	    padding: 10px 30px;
	    border-radius: 100px;
	    color: white;
	    font-family: 'Poppins';
	    font-size: 17px;
	    letter-spacing: 1px;
	    transition: all ease 500ms;
	}

	.btn-book-wa:hover {
		transition: all ease 500ms;
		color: white;
		background: black;
	}
</style>


<form id="contactForm" action="https://secure-booking.gotrabook.com/direct" method="POST">
	<input type="hidden" name="to" value="<?= $data->company->company_email ?>">
	<input type="hidden" name="web" value="<?= $data->web->site_domain ?>">
	<input type="hidden" name="logo" value="<?= $data->web->site_logo_alternative ?>">
	<input type="hidden" name="link" value="<?= $func->link(ROUTE_PRODUCT_VIEW.$data->result->slug) ?>">

	<div class="form-row">
		<div class="form-group col-12">
			<label>Name</label>
			<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name">
		</div>

		<div class="form-group col-12">
			<label>Tour Date</label>
			<input type="date" value="" class="form-control" name="tour date" id="tour date">
		</div>

		<div class="form-group col-12">
			<label>Hotel Name & Address</label>
			<input type="text" value="" class="form-control" name="hotel address" id="hotel address">
		</div>
	</div>

	<div class="form-row">
		<div class="form-group col-12">
			<label>Packages Name</label>
			<input 
			type="text" 
			class="form-control" 
			name="packages name" 
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
			<label>Number of People</label>
			<input type="text" value="" class="form-control" name="number of people" id="number">
		</div>
	</div>

	<div class="form-row">
		<div class="form-group col-12">
			<label>Note ( Opsional )</label>
			<textarea maxlength="5000" data-msg-required="Please enter your message." rows="4" class="form-control" name="message note" id="message"></textarea>
		</div>
	</div>

	<div class="form-row">
		<div class="form-group col-12">
			<input type="submit" name="booking" value="Booking Now" class="btn btn-book-wa" data-loading-text="Loading...">
		</div>
	</div>

</form>