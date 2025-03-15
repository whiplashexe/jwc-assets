<?php $selected = "1"; ?>
<?php if ($selected == "1"): ?>
<h4 class="mb-0">Contact Us</h4>
<p>Contact us or give us a call to discover how we can help.</p>
<form id="contactForm" action="<?= base_url('contacting') ?>" method="POST">
	<input type="hidden" name="to" value="<?= $data->company->company_email ?>">
	<input type="hidden" name="web" value="<?= $data->web->site_domain ?>">
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
			<label>Message *</label>
			<textarea maxlength="5000" data-msg-required="Please enter your message." rows="2" class="form-control" name="message" id="message" required></textarea>
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-lg-4">
			<input type="submit" value="Send Message" class="btn btn-primary mb-lg-5" data-loading-text="Loading...">
		</div>
		<div class="form-group col-lg-8">
			<div style="margin-bottom: 10px; margin-left: 5px;"><?= $func->load_captcha() ?></div>
		</div>
		<div class="form-group col-lg-7 ml-auto">
			<?php if ($this->ci->session->flashdata('status') != '' || $this->ci->session->flashdata('status') != null):?>
			<div class="alert alert-success d-none" id="contactSuccess">
				<?= $this->ci->session->flashdata('status'); ?>
			</div>
			<?php else: ?>
			<div class="alert alert-danger d-none" id="contactError">
				Error sending your message.
			</div>
			<?php endif ?>
		</div>
	</div>
</form>
<?php endif ?>