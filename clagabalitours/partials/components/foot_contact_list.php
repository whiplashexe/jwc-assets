<?php $selected = "1"; ?>
<?php if ($selected == "1"): ?>
    <div class="contact-details">
        <h4>Kontak</h4>
        <ul class="contact">
            <li><p><i class="fas fa-map-marker-alt"></i> <strong>Address:</strong> <?= $data->company->company_address ?></p></li>
            <?php if ($data->company->company_telp != ""): ?>
                <li><p><i class="fas fa-phone"></i> <strong>Telp:</strong> <a title="<?= 'Telp '.$data->company->company_telp ?>" href="<?= $func->dm_telphone() ?>"><?= $data->company->company_telp ?></a></p></li>
            <?php endif ?>
            <?php if ($data->social->whatsapp != ""): ?>
                <li><p><i class="fab fa-whatsapp"></i> <strong>Phone / Whatsapp:</strong> <a title="<?= 'Phone / Whatsapp '.$data->social->whatsapp ?>" href="<?= $func->dm_whatsapp() ?>"><?= $data->social->whatsapp ?></a></p></li>
            <?php endif ?>
            <?php if ($data->company->company_email != ""): ?>                            
                <li><p><i class="fas fa-envelope"></i> <strong>Email:</strong> <a title="<?= 'Email '.$data->company->company_email ?>" href="<?= $func->dm_email() ?>"><?= $data->company->company_email ?></a></p></li>
            <?php endif ?>
            <?php if ($data->social->line != ""): ?>                            
                <li><p><i class="fab fa-line"></i> <strong>LINE:</strong> <a title="<?= 'LINE '.$data->social->line ?>" href="<?= $func->dm_line() ?>"><?= $data->social->line ?></a></p></li>
            <?php endif ?>
            <?php if ($data->social->bbm != ""): ?>
                <li><p><i class="fab fa-blackberry"></i> <strong>BBM:</strong> <a title="<?= 'BBM '.$data->social->bbm ?>" href="<?= $func->dm_bbm() ?>"><?= $data->social->bbm ?></a></p></li>
            <?php endif ?>
        </ul>
    </div>
    <?php elseif ($selected == "2"): ?>
        <div class="col-sm-3 col-lg-2 text-sm-right ml-sm-auto mb-0">
            <h5 class="mb-2">Telphone</h5>
            <span class="phone text-2"><i class="fas fa-phone text-color-primary"></i> <a title="Telphone" href="<?= $func->dm_telphone() ?>"><?= $data->company->company_telp ?></a></span>
        </div>
        <div class="col-sm-3 col-lg-2 text-sm-right">
            <h5 class="mb-2">Whatsapp</h5>
            <span class="phone text-2"><i class="fab fa-whatsapp text-color-primary"></i> <a title="Whatsapp" href="<?= $func->dm_whatsapp() ?>"><?= $data->social->whatsapp ?></a></span>
        </div>
        <div class="col-sm-3 col-lg-2 text-sm-right">
            <h5 class="mb-2">Email</h5>
            <span class="phone text-2"><i class="fas fa-envelope text-color-primary"></i> <a title="Email" href="<?= $func->dm_email() ?>"><?= $data->company->company_email ?></a></span>
        </div>
        <?php if ($data->social->line != ""): ?>                
            <div class="col-sm-3 col-lg-2 text-sm-right">
                <h5 class="mb-2">LINE</h5>
                <span class="phone text-2"><i class="fas fa-envelope text-color-primary"></i> <a title="LINE" href="<?= $func->dm_line() ?>"><?= $data->social->line ?></a></span>
            </div>
        <?php endif ?>
        <?php if ($data->social->bbm != ""): ?>

            <div class="col-sm-3 col-lg-2 text-sm-right">
                <h5 class="mb-2">BBM</h5>
                <span class="phone text-2"><i class="fas fa-envelope text-color-primary"></i> <a title="BBM" href="<?= $func->dm_bbm() ?>"><?= $data->social->bbm ?></a></span>
            </div>
        <?php endif ?>
        <?php endif ?>