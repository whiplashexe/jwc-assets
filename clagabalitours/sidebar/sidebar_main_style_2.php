<hr class="invisible mt-4 mb-2"> 
<h5 class="heading-light background-color-tertiary pd10"><strong>Social Media</strong></h5>
<ul class="social-icons box">
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

<hr class="invisible mt-5 mb-2">