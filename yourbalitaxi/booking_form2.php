<style type="text/css">
.btn-book-wa {
    background: var(--colors);
    padding: 10px 25px;
    border-radius: 5px;
    color: black;
    margin-top: 5px;
    width: 100%;
    font-family: var(--primtext);
    text-transform: uppercase;
    font-size: 18px;
    font-weight: 500;
    letter-spacing: 3px;
    transition: all ease 500ms;
}

.btn-book-wa:hover {
	transition: all ease 500ms;
	color: white;
	background: black;
}

.form-style {
    background: white;
    padding: 35px;
    border-radius: 10px;
    font-family: var(--subtext);
}

.form-style label {
    font-family: var(--subtext);
    font-size: 14px;
}
</style>

<?php 

$repl = str_replace('&', 'And', $data->result->title);

 ?>

<form id="contactForm" action="<?= base_url() ?>booking-taxi-online" method="POST">

    <div class="form-row">

		<div class="form-group col-12 mb-0">
			<label>Your Route</label>
		</div>

		<div class="form-group col-12">
			<input type="text" value="" placeholder="From ( Airport, Port, Address )" class="form-control" name="from_route" id="from_route" required>
		</div>

		<div class="form-group col-12">
			<input type="text" value="" placeholder="To ( Airport, Port, Address )" class="form-control" name="to_route" id="to_route" required>
		</div>

	</div>

	<div class="form-row">

		<div class="form-group col-6">
			<label>Pickup Date</label>
			<input type="date" name="pickup_date" class="form-control">
		</div>

		<div class="form-group col-6">
			<label>Time</label>
			<input type="time" name="pickup_time" class="form-control">
		</div>


	</div>

	<div class="form-row">
		<div class="form-group col-12">
			<input type="submit" name="booking" value="Continue Booking" class="btn btn-book-wa" data-loading-text="Loading...">
		</div>
	</div>

</form>

<style>
	
.icon-bawah {
    display: flex;
    position: relative;
    margin-top: 15px;
}

.icon-bawah i {
    color: black;
    width: 45px;
    height: 45px;
    line-height: 45px;
    background: var(--colors);
    border-radius: 100px;
    text-align: center;
    font-size: 20px;
}

.icon-bawah p {
    color: #777;
    font-size: 14px;
    line-height: 23px;
    margin-bottom: 0;
}

</style>

<div class="icon-bawah">
	<div class="icon mr-4 align-self-center">
		<i class="fas fa-users"></i>
	</div>

	<div class="content align-self-center">
		<p>Over 25,000 satisfied travelers in Bali have trusted us for airport transfers this year.</p>
	</div>
</div>