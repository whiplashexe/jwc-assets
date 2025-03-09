<?php $selected = "1"; ?>
<?php if ($selected == "1"): ?>
	<h5>Menu</h5>
	<ul class="list list-icons list-icons-sm">
		<?php foreach ($data->menu->footer_menu as $key => $value): ?>
			<li><i class="fas fa-caret-right"></i> <a title="<?= $value->text ?>" href="<?= $value->url ?>"><?= $value->text ?></a></li>
		<?php endforeach ?>
	</ul>
<?php elseif ($selected == "2"): ?>
	<nav>
		<ul>
			<?php foreach ($data->menu->footer_menu as $key => $value): ?>
				<li><a href="<?= $value->url ?>" title="<?= $value->text ?>"><?= $value->text ?></a></li>
			<?php endforeach ?>
		</ul>
	</nav>
<?php endif ?>