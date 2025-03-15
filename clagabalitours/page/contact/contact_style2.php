<div class="container">
    <div class="row">    
        <div class="col-lg-9">
            <div class="row">
                
            <div class="col-md-6">
            <h2 class="mt-4"><strong>Kontak</strong></h2>                          
            <ul class="list list-unstyled">
                <li><strong>Address : </strong><?= $data->company->company_address ?></li>
                <li><strong>SMS / Telphone : </strong><a href="<?= $func->dm_telphone() ?>"><?= $data->company->company_telp ?></a></li>
                <?php if (!empty($data->company->company_email)) : ?>
                <li><strong>Email : </strong> <a href="<?= $func->dm_email() ?>"><?= $data->company->company_email ?></a></li>
                <?php endif ?>
                <li><strong>SMS / Telphone / Whatsapp : </strong><a href="<?= $func->dm_whatsapp() ?>"><?= $data->company->company_phone ?></a></li>
                <?php if (!empty($data->social->line)) : ?>
                    <li></i><strong>LINE : </strong><a href="<?= $func->dm_line() ?>"><?= $data->social->line ?></a></li>
                <?php endif ?>
                <?php if (!empty($data->social->bbm)) : ?>
                    <li><strong>BBM : </strong><a href="<?= $func->dm_bbm() ?>"><?= $data->social->bbm ?></a></li>
                <?php endif ?>
            </ul>
                
            </div>
            <div class="col-md-6">
            <iframe src="<?= $data->google_maps ?>" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                
            </div>
            </div>

            <div
            <?php if ($this->ci->session->flashdata('status') != '' || $this->ci->session->flashdata('status') != null): ?> 
            class="alert alert-success d-none mt-4" id="contactSuccess"
        <?php endif ?>
        >
        <strong><?= $this->ci->session->flashdata('status'); ?></strong>
    </div>
    <h2 class="mb-3 mt-2"><strong>Contact</strong> Us</h2>

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
                <textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control" name="message" id="message" required></textarea>
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
<div class="col-lg-3">
    <aside class="sidebar mt-2">                
        <div class="container">
            <?= $func->sidebar('main') ?>
        </div>
    </aside>
</div>
</div>
</div>