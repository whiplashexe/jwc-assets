<?php 
$selected = "1";
$withsearch = "0";
$stripe = 'true';
$colored = 'false';
$top_line = 'false'; ?>
<?php if ($selected == "1"): ?>
	<div class="header-nav 
	<?= $stripe == 'true' ? 'header-nav-stripe' : ''; ?> 
	<?= $colored == 'true' ? 'header-nav-primary-dropdown' : ''; ?> 
	<?= $top_line == 'true' ? 'header-nav-top-line' : ''; ?> ">
		<div class="header-nav-main 
		<?= $stripe == 'true' ? 'header-nav-main-square' : ''; ?> 
		<?= $top_line == 'true' ? 'header-nav-main-no-arrows' : ''; ?>
		 header-nav-main-effect-1 header-nav-main-sub-effect-1">
			<nav class="collapse">
				<ul class="nav nav-pills" id="mainNav">
					<li><a title="Home" class="nav-link active" href="<?= base_url() ?>">Home</a></li>
					<?php foreach ($data->menu->primary_menu as $key => $menu) : ?>
						<?php if (array_key_exists('child', $menu)) : ?>
							<li class="dropdown">
								<a class="dropdown-item dropdown-toggle" href="javascript:void(0);" title="<?= $menu->label ?>"><?= $menu->label ?></a>

								<ul class="dropdown-menu">
									<?php foreach ($menu->child as $key => $menu) : ?>
										<?php if (array_key_exists('child', $menu)) : ?>
											<li class="dropdown-submenu">
												<a class="dropdown-item" href="javascript:void(0);" title="<?= $menu->label ?>"><?= $menu->label ?></a>
												<ul class="dropdown-menu">
													<?php foreach ($menu->child as $key => $menu) : ?>
														<li><a class="dropdown-item" href="<?= $menu->link ?>" title="<?= $menu->label ?>"><?= $menu->label ?></a></li>
													<?php endforeach ?>
												</ul>
											</li>
											<?php else : ?>
												<li><a class="dropdown-item" href="<?= $menu->link ?>" title="<?= $menu->label ?>"><?= $menu->label ?></a></li>
											<?php endif ?>
										<?php endforeach ?>                                                            
									</ul>

								</li>
								<?php else : ?>
									<li><a class="nav-link" href="<?= $menu->link ?>" title="<?= $menu->label ?>"><?= $menu->label ?></a></li>
								<?php endif ?>
							<?php endforeach ?>
							
						</ul>

					</nav>

				</div>
				<?php if ($withsearch == "1"): ?>
					<?= $func->load('partials/components/head_search') ?>
				<?php endif ?>
				<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
					<i class="fas fa-bars"></i>
				</button>
			</div>

			<?php endif	 ?>