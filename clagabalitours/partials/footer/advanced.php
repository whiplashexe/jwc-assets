<footer id="footer" class="
    <!-- short -->
    color color-primary
">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <?= $func->load('partials/components/foot_desc'); ?>
                <hr class="light">
                <div class="row">
                    <?= $func->sidebar('main') ?>
                </div>
            </div>
            <div class="col-lg-3">
                <?= $func->load('partials/components/foot_contact_list'); ?>
                <?= $func->load('partials/components/foot_social'); ?>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-1">
                    <?= $func->load('partials/components/foot_logo'); ?>
                </div>
                <div class="col-lg-11">
                    <p>© Copyright 2018. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>