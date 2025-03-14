<?php
/*
* JWC Update
* Mini Function library for Script Maintenance
* 11 May 2023
*/
function read($url){
	//  Initiate curl
	$ch = curl_init();
	// Disable SSL verification
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	// Will return the response, if false it print the response
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	// Set the url
	curl_setopt($ch, CURLOPT_URL,$url);
	// Execute
	$result=curl_exec($ch);
	// Closing
	curl_close($ch);
	return json_decode($result, true);
}

function read_string($url){
	//  Initiate curl
	$ch = curl_init();
	// Disable SSL verification
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	// Will return the response, if false it print the response
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	// Set the url
	curl_setopt($ch, CURLOPT_URL,$url);
	// Execute
	$result=curl_exec($ch);
	// Closing
	curl_close($ch);
	return $result;
}

// Redirect http to https
if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === "off") {
    $location = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $location);
    exit;
}


function download_update($file_url, $save_to){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_POST, 0); 
	curl_setopt($ch,CURLOPT_URL,$file_url); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	$file_content = curl_exec($ch);
	curl_close($ch);

	$downloaded_file = fopen($save_to, 'w');
	fwrite($downloaded_file, $file_content);
	fclose($downloaded_file);
}

function check_last_updated(){
	$uri = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
	$uri .= "://".$_SERVER['HTTP_HOST'];
	$uri .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
	if (!file_exists('updated.txt')) {
		fopen("updated.txt", "w");
	}
	$last = read($uri.'updated.txt');
	$latest = read('https://cpanel.gotrasoft.com/client/updated.txt');
	$is_update = false;
	if ($last < $latest) {
		$is_update = true;
	}
	if ($is_update == true && WEB_AUTO_UPDATE == true) {
		$myfile = fopen("updated.txt", "w") or die("Unable to open file!");
		fwrite($myfile, $latest);
		fclose($myfile);
		download_update('https://cpanel.gotrasoft.com/client/update.zip','app.zip');
		read($uri.'sync.php?install=1');
	}
	
}