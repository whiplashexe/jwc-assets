<footer id="footer" class=" 
<!-- short -->
    color color-primary
">
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <?= $func->load('partials/components/foot_logo'); ?>
            </div>
                <?= $func->load('partials/components/foot_contact_list'); ?>
        </div>
        <div class="row">
            <div class="col">
                <hr class="solid">
                <div class="row">
                    <div class="col-lg-6">
                        <p>© Copyright 2018 <?= $data->web->site_name ?>. All Rights Reserved.</p>
                    </div>
                    <div class="col-lg-6 text-right float-right">
                        <?= $func->load('partials/components/foot_social'); ?>              
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>