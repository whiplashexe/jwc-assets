
<div class="row align-items-center maruhuy">
        <div class="col-sm-12">
            <button style="width: 100%;margin-bottom: 23px;font-size: 20px; padding: 45px; font-weight: bold;" class="btn btn-modern btn-primary" data-toggle="modal" data-target="#formModal"><i class="fas fa-envelope"></i>
                Booking Via Email
            </button>

        <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="formModalLabel">Book Form</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>

        <div class="modal-body">
                <form  id="contactForm demo-form" action="<?= base_url('booking') ?>" method="POST" class="mb-4" novalidate="novalidate">
                    <input type="hidden" name="to" value="<?= $data->company->company_email ?>">
                    <input type="hidden" name="web" value="<?= $data->web->site_domain ?>">
                    <input type="hidden" name="link" value="<?= $func->link(ROUTE_PRODUCT_VIEW.$data->result->slug) ?>">
                    <div class="form-row">
                        <div class="form-group col-lg-6">
                            <label>Your name *</label>
                            <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
                        </div>
                        <div class="form-group col-lg-6">
                            <label>Your email address *</label>
                            <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
                        </div>
                        <div class="form-group col-lg-<?= ($data->result->package_id == 1281) ? '12' : '6' ; ?>">
                            <label>Your telephone number *</label>
                            <input type="number" value="" data-msg-required="Please enter your telephone number." class="form-control" name="phone" id="phone" required>
                        </div>
                        <!-- <div class="form-group col-lg-6">
                            <label for="price">Price</label>
                            <select id="price" name="price" class="form-control">
                                <option hidden ></option>
                                <option>Package</option>
                                <option>Per Car</option>
                            </select>
                        </div> -->
                    </div>

                    <div class="form-row">
                        <div class="form-group col-lg-6">
                            <?php if ($data->result->package_id == 1280): ?>
                            <label>Car Type</label>
                            <?php else: ?>
                            <label>Tour Package</label>
                            <?php endif ?>
                                <input type="text" class="form-control" name="tourpackage" id="tourpackage" value ="<?php if (isset($data->is_product)) {
                                echo $data->result->title;
                                } ?>" <?php if (isset($data->is_product)) {
                                    echo "readonly";
                                } ?>>
                            
                        </div>
                        <div class="form-group col-lg-6">
                            <label>Hotel</label>
                            <input type="text" name="hotel" class="form-control" id="hotel">
                        </div>
                        <div class="form-group col-lg-3">
                            <label>Adult *</label>
                            <input type="text" name="adults" class="form-control" id="adults" required>
                        </div>
                        <div class="form-group col-lg-3">
                            <label>Children</label>
                            <input type="text" name="children" class="form-control" id="children">
                        </div>
                        <div class="form-group col-lg-3">
                            <label>Tour Date *</label>
                            <input type="date" name="date" class="form-control" id="date" required>
                        </div>
                        <div class="form-group col-lg-3">
                            <label>Pickup Time *</label>
                            <input type="text" name="time" class="form-control" id="time" required>
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
                            <label>Message</label>
                            <textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control" name="message" id="message"></textarea>
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


        <div class="modal-footer">
            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>
</div>
                                    
</div>
</div>