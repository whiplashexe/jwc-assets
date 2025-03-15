<style type="text/css">

.form-style {
    position: absolute;
    z-index: 1000;
    bottom: 7%;
    left: 0;
    right: 0;
    width: 85%;
    margin: auto;
    overflow: hidden;
    border-radius: 0px;
    backdrop-filter: blur(10px);
    padding: 1rem 1.2rem;
    background: var(--colors);
    box-shadow: 0px 11px 53px 0px rgb(89 59 36 / 14%);
}


.check-style label {
    font-family: var(--subtext);
    color: #eee;
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
    color: #000 !important;
    font-family: var(--subtext);
    font-size: 17px;
    line-height: 20px;
    font-weight: 500;
	padding: .9rem 1rem;
    border-radius: 0px;
    margin: auto;
	margin-bottom: 0;
    background: #fff;
}

.form-control {
    padding: .6rem 1.2rem;
    border-radius: 0px;
    width: 100%;
    height: 100%;
	height: 50px;
    color: #eee;
	font-family: var(--subtext);
    background-color: transparent;
    border: 1px solid #eee;
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
        position:relative;
	    bottom: 3%;
        width: 90%;
	    background: white;
	    margin-top: -30px;
	    box-shadow: unset;
        border-radius: 8px;
        padding: 1rem .8rem;
	    border: 1px solid #ccc;
	}

	.check-style {
	    padding: 8px;
	    padding-bottom: 0px;
	}

	.check-style label {
	    color: black;
	}
    select.form-control:not([size]):not([multiple]) {height: 40px;}
	.form-control {
	    color: black;
	    background-color: #f1f1f1;	
        height: 40px;
    }
	.booking-style {
	    padding: 20px 8px;
	    border-radius: unset;
	}
	.form-style .row .col-custom {
		width: 100%;
	}
    .booking-style .btn-book-wa {
        background: var(--colors);
        color: #fff !important;
    }
}

</style>



<div class="form-style text-center wow fadeInUp mt-4" data-wow-duration="2s">
	

<form id="contactForm" action="<?= base_url() ?>booking-taxi-online" method="POST">
    <div class="row mx-0 px-0">
        <div class="form-group col-custom px-2">
            <div class="check-style">
                <label>From *</label>
                <input type="text" class="form-control" name="pickup" id="pickup" placeholder="Pick Up" required>
            </div>
        </div>

        <div class="form-group col-custom px-2">
            <div class="check-style">
                <label>Drop Off *</label>
                <input type="text" class="form-control" name="dropoff" id="dropoff" placeholder="Destination" required>
            </div>
        </div>

        <div class="form-group col-custom px-2">
            <div class="check-style">
                <label>Date *</label>
                <input type="date" class="form-control" name="pick_date"  required>
            </div>
        </div>

        <div class="form-group col-custom px-2">
            <div class="check-style">
                <label>Pick Up Time *</label>
                <input type="time" class="form-control" name="pick_time"  required>
            </div>
        </div>


        <div class="form-group col-custom px-2 d-flex align-items-end">
            <div class="booking-style w-100">
                <button type="submit" class="btn btn-book-wa w-100">Continue Booking</button>
            </div>
        </div>
    </div>
</form>


</div>
