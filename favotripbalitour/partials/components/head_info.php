<?php $selected = "3"; ?>



<?php if ($selected == "1"): ?>
	<p>
		Get in touch! <span class="ml-1"><i class="fas fa-phone"></i> <a href="<?= $func->dm_telphone() ?>" title="Telp"> <?= $data->company->company_telp ?></a></span><span class="d-none d-sm-inline-block pl-1"> | <a title="Email" href="<?= $func->dm_email() ?>"><?= $data->company->company_email ?></a></span>
	</p>
<?php elseif($selected == "2"): ?>
	<li>
		<div class="feature-box align-items-center">
			<div class="feature-box-icon">
				<i class="fas fa-phone"></i>
			</div>
			<div class="feature-box-info">
				<h4 class="mb-0"><a href="<?= $func->dm_telphone() ?>" title="Telp"> <?= $data->company->company_telp ?></a></h4>
				<p><small>Get in touch with us</small></p>
			</div>
		</div>
	</li>
	<li>
		<div class="feature-box align-items-center">
			<div class="feature-box-icon">
				<i class="far fa-envelope"></i>
			</div>
			<div class="feature-box-info">
				<h4 class="mb-0"><a title="Email" href="<?= $func->dm_email() ?>"><?= $data->company->company_email ?></a></h4>
				<p><small>Send us an e-mail</small></p>
			</div>
		</div>
	</li>
<?php elseif ($selected == "3"):?>
	<nav>
		<ul class="nav nav-pills">
			<li class="nav-item d-none d-sm-block">
				<a class="nav-link" href="<?= $func->link('/about-us') ?>" title="About"><i class="fas fa-angle-right"></i> About Us</a>
			</li>
			<li class="nav-item d-none d-sm-block">
				<a class="nav-link" href="<?= $func->link('/contact') ?>" title="Contact"><i class="fas fa-angle-right"></i> Contact Us</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= $func->dm_telphone() ?>" title="Telp"> <i class="fas fa-phone"></i> <?= $data->company->company_telp ?></a>
			</li>
		</ul>
	</nav>
<?php endif ?>