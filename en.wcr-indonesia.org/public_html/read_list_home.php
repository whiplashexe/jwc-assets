<?php 
$path = __DIR__.'/theme/front/home';
$files = array_values(array_diff(scandir($path), array('.', '..')));
$data = array();
// remove dir
foreach ($files as $file) {
	$ext = pathinfo($path.$file, PATHINFO_EXTENSION);
	if ($ext == '') {
		continue;
	}
	$data[] = $file;
}

header('Content-Type: application/json');
echo json_encode($data, JSON_PRETTY_PRINT);