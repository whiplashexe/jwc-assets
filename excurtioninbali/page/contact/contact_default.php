<div class="container">

	<div class="row justify-content-center mt-5">
		<div class="col-lg-4">
			<h4 class="mt-3 mb-0">Info Contact</h4>
			<ul class="list list-icons mt-3">
				<li><i class="fas fa-map-marker-alt"></i><strong>Address : </strong><?= $data->company->company_address ?></li>
				<li><i class="fas fa-phone"></i><strong>Telphone : </strong><a href="<?= $func->dm_telphone() ?>"><?= $data->company->company_telp ?></a></li>
				<?php if (!empty($data->company->company_email)) : ?>
					<li><i class="far fa-envelope"></i> <strong>Email : </strong> <a href="<?= $func->dm_email() ?>"><?= $data->company->company_email ?></a></li>
				<?php endif ?>
				<li><i class="fab fa-whatsapp"></i><strong>Whatsapp : </strong><a href="<?= $func->dm_whatsapp() ?>"><?= $data->company->company_phone ?></a></li>
				<?php if (!empty($data->social->line)) : ?>
					<li><i class="fab fa-line"></i><strong>LINE : </strong><a href="<?= $func->dm_line() ?>"><?= $data->social->line ?></a></li>
				<?php endif ?>
				<?php if (!empty($data->social->bbm)) : ?>
					<li><i class="far fa-blackberry"></i><strong>BBM : </strong><a href="<?= $func->dm_bbm() ?>"><?= $data->social->bbm ?></a></li>
				<?php endif ?>	
			</ul>
		</div>
		<div class="col-lg-8">
			<h4 class="mb-0 mt-3 font-weight-semibold">Send us a Message.</h4>
			<div <?php if ($this->ci->session->flashdata('status') != '' || $this->ci->session->flashdata('status') != null): ?>
			class="alert alert-success d-none mt-4" id="contactSuccess"
			<?php endif ?>
			>
			<strong><?= $this->ci->session->flashdata('status'); ?></strong>
			</div>
	<form id="contactForm" action="<?= base_url('contacting') ?>" method="POST">
		<div class="form-row">
			<div class="form-group col-lg-6">
				<label>Your name *</label>
				<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
			</div>
			<div class="form-group col-lg-6">
				<label>Your email address *</label>
				<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col">
				<label>Subject</label>
				<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col">
				<label>Message *</label>
				<textarea maxlength="5000" data-msg-required="Please enter your message." rows="3" class="form-control" name="message" id="message" required></textarea>
			</div>
		</div>
		<div class="form-row">
			<div style="margin-bottom: 10px; margin-left: 5px;"><?= $func->load_captcha() ?></div>
		</div>
		<div class="form-row">
			<div class="form-group col">
				<input type="submit" value="Send Message" class="btn btn-primary btn-lg" data-loading-text="Loading...">
			</div>
		</div>
	</form>
</div>

</div>

</div>

<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
<div class="google-map">
	<iframe src="<?= $data->google_maps ?>" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>