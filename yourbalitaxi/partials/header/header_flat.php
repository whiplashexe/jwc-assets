<header id="header" class="header-no-min-height" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 0, 'stickySetTop': '0'}">
	<div class="header-body">
		<div class="header-container container">
			<div class="header-row">
				<div class="header-column">
					<div class="header-row">
						<div class="header-logo">
							<a href="<?= base_url() ?>" title="<?= $data->web->site_name ?>">
								<img alt="<?= $data->web->site_name ?>" width="auto" height="40" src="<?= $data->web->site_logo ?>">
							</a>
						</div>
					</div>
				</div>
				<div class="header-column justify-content-end">
					<div class="header-row">
						<div class="header-nav header-nav-stripe">
							<div class="header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1">
								<nav class="collapse">

									<ul class="nav nav-pills" id="mainNav">
										<li class="nav-item"><a title="Home" class="nav-link" href="index.html">Home </a></li>
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
									<ul class="header-social-icons social-icons d-none d-sm-block">
										<?php if (!empty($data->social->facebook_url)): ?>
											<li class="social-icons-facebook"><a href="<?= $data->social->facebook_url ?>" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
										<?php endif ?>
										<?php if (!empty($data->social->twitter_url)): ?>
											<li class="social-icons-twitter"><a href="<?= $data->social->twitter_url ?>" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
										<?php endif ?>
										<?php if (!empty($data->social->instagram_url)): ?>
											<li class="social-icons-instagram"><a href="<?= $data->social->instagram_url ?>" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
										<?php endif ?>
										<?php if (!empty($data->social->youtube_url)): ?>
											<li class="social-icons-youtube"><a href="<?= $data->social->youtube_url ?>" target="_blank" title="Youtube"><i class="fab fa-youtube"></i></a></li>
										<?php endif ?>
										<?php if (!empty($data->social->googleplus_url)): ?>
											<li class="social-icons-googleplus"><a href="<?= $data->social->googleplus_url ?>" target="_blank" title="Google+"><i class="fab fa-google-plus-g"></i></a></li>
										<?php endif ?>
									</ul>
									<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
										<i class="fas fa-bars"></i>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>