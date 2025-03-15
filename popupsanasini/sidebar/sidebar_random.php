<?php $no = 1; foreach ($sidebar as $key => $item): ?>
	<?php if ($no == 1): ?>
    <?php $func->sidebar_type($item,'post-random') ?>
	<?php endif ?>
<?php $no++; endforeach ?>      