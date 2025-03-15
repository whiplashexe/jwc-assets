<?php $selected = "1"; ?>
<?php if ($selected == "1"): ?>
<h4><?= $data->company->company_name ?></h4>
<p><?= substr(strip_tags($data->company->company_desc),0,200).'...' ?><a href="<?= $func->link('/about-us') ?>" class="btn-flat btn-xs" title="View">View More <i class="fas fa-arrow-right"></i></a></p>
<?php endif ?>