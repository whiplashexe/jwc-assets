<?php 
/*
Theme Configuration
Digunakan untuk memasukan ability dari theme, settingan default dan informasi terkait Theme

Created : 07 Juni 2018
Updated : 
*/

require 'jwc_theme_config.php';

// Output
header('Content-Type: application/json');
if (@$_GET['beauty']) {
	echo json_encode($data, JSON_PRETTY_PRINT);
}else{
	echo json_encode($data);
}