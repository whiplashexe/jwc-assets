<?php $logo = 'logo';
$selected = "1" ?>
<?php if ($selected == "1"): ?>
	<div class="header-logo">
		<a href="<?= base_url() ?>" title="<?= $data->web->site_name ?>">
			<img alt="<?= $data->web->site_name ?>" width="111" height="54" data-sticky-width="82" data-sticky-height="40" data-sticky-top="33" src="<?= $logo != 'logo' ? $data->web->site_logo_alternative : $data->web->site_logo ?>">
		</a>
	</div>
<?php endif ?>