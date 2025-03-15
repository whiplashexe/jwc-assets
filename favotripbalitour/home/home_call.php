<style>

.bg-call {
	position: relative;
	background: var(--colors);
}

.bg-call h3 {
	margin-bottom: 0;
    color: white;
    font-family: var(--subtext);
    text-transform: unset;
    letter-spacing: 0px;
    font-size: 23px;
}

.btn-baru {
	border: 1px solid #fff;
    color: white;
    font-family: var(--subtext);
    padding: 10px 40px;
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: all ease 500ms;
}

.btn-baru:hover {
	transition: all ease 500ms;
	background: black;
	color: white;
}

@media (max-width: 768px) {
	 .bg-call h3 {
        font-size: 20px;
        line-height: 30px;
        padding: 0px 20px;
        margin-bottom: 35px;
    }
}

</style>



<section class="bg-call py-5">

	<div class="container">

		<div class="row">

			<div class="col-md-8 text-center text-md-left align-self-center">

				<h3>If you have a question, our team will be very happy to assist you.</h3>

			</div>



			<div class="col-md-4 text-center" style="align-self: center;">

				<a class="btn btn-baru" href="<?= $func->dm_whatsapp() ?>">Contact Us</a>

			</div>

		</div>

	</div>

</section>