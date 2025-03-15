<?php $logo = 'logo';
$selected = "1" ?>
<?php if ($selected == "1"): ?>
<a title="<?= $data->web->site_name ?>" href="<?= base_url() ?>" class="logo">
	<img alt="<?= $data->web->site_name ?>" class="img-fluid" src="<?= $logo != 'logo' ? $data->web->site_logo_alternative : $data->web->site_logo ?>">
</a>
<?php endif ?>