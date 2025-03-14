<?php 
header('Access-Control-Allow-Origin: *'); 
header("Access-Control-Allow-Credentials: true");
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
header('Access-Control-Max-Age: 1000');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization');
$WEBROOT = dirname ( __FILE__ ).'/';
set_time_limit(0);

if (@$_GET['clean_install']) {
	echo "Downloading...<br/>";
	download('https://cpanel.gotrasoft.com/client/app.zip','app');
	echo "Done...<br/>";
}
if (@$_GET['install_theme_default']) {
	echo "Downloading...<br/>";
	download('https://cpanel.gotrasoft.com/client/theme.zip','app');
	echo "Done...<br/>";
}

if (@$_GET['install_theme_from']) {
	$target = @$_GET['domain'];
	echo "Creating Backup...";
	read('https://'.$target.'/sync.php?backup=1');
	echo "Downloading...<br/>";
	download('https://'.$target.'/backup-'.date('Y-m-d').'.zip','app');
	read('https://'.$target.'/sync.php?delete_backup=1');
	
	echo "Done...<br/>";
}

if (@$_GET['delete_backup']) {
	unlink('backup-'.date('Y-m-d').'.zip');
}


if (@$_GET['uninstall_theme']) {
	// Remove Current Theme
	$theme_old = 'theme/front';
	$asset = 'assets/front';
	Delete($theme_old);
	Delete($asset);
	
}
if (@$_GET['install_theme']) {
	// Extract & Installation
	$theme = 'theme.zip';
	$path = pathinfo(realpath($theme), PATHINFO_DIRNAME);
	$zip = new ZipArchive;
	if ($zip->open($theme) === TRUE) {
	    $zip->extractTo($path);
	    $zip->close();
	}
	// Remove zip
	unlink($theme);
}

if (@$_GET['install']) {
	$app = 'app.zip';
	$path = pathinfo(realpath($app), PATHINFO_DIRNAME);
	$zip = new ZipArchive;
	if ($zip->open($app) === TRUE) {
	    $zip->extractTo($path);
	    $zip->close();
	}
	unlink($app);
}
if (@$_GET['backup']) {
	$app = 'backup-'.date('Y-m-d').'.zip';
	$files = array(
		'application',
		'assets',
		'system',
		'theme',
		'.htaccess',
		'index.php',
		'sync.php',
		'robots.txt',
		'updated.txt',
		'file_editor.php',
		'ThemeConfig.php',
		'read_list_home.php',
		'jwc_config.php',
		'jwc_theme_config.php',
		'jwc_theme_config_load.php',
		'jwc_update.php',
	);
	create_zip($files,$app);
}
if (@$_GET['clean']) {
	Delete('./');
}

if (@$_GET['delete_app']) {
	Delete('application');
	Delete('system');
	Delete('.htaccess');
	Delete('fb_sdk_code.txt');
	Delete('index.php');
	Delete('status.txt');
	Delete('robots.txt');
	echo "Done!";
}

function Delete($path)
{
    if (is_dir($path) === true)
    {
        $files = array_diff(scandir($path), array('.', '..'));

        foreach ($files as $file)
        {
            Delete(realpath($path) . '/' . $file);
        }

        return rmdir($path);
    }

    else if (is_file($path) === true)
    {
        return unlink($path);
    }

    return false;
}



function download($url='',$file)
{
    set_time_limit(0);
    //This is the file where we save the    information
    $fp = fopen (dirname(__FILE__) . '/'.$file.'.zip', 'w+');
    //Here is the file we are downloading, replace spaces with %20
    $ch = curl_init(str_replace(" ","%20",$url));
    curl_setopt($ch, CURLOPT_TIMEOUT, 50);
    // write curl response to file
    curl_setopt($ch, CURLOPT_FILE, $fp); 
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    // get curl response
    curl_exec($ch); 
    curl_close($ch);
    fclose($fp);
}

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

/* creates a compressed zip file */
function create_zip($data_file = array(),$destination = '',$overwrite = false) {
	//if the zip file already exists and overwrite is false, return false
	if(file_exists($destination) && !$overwrite) { return false; }
	//if we have good files...
	if(count($data_file)) {
		//create the archive
		$zip = new ZipArchive();
		if($zip->open($destination,$overwrite ? ZIPARCHIVE::OVERWRITE : ZIPARCHIVE::CREATE) !== true) {
			return false;
		}
		//add the files
		foreach($data_file as $item) {
			if (is_dir($item) === true) {
	            $iterator = new RecursiveDirectoryIterator($item);
                // skip dot files while iterating 
                $iterator->setFlags(RecursiveDirectoryIterator::SKIP_DOTS);
                $files = new RecursiveIteratorIterator($iterator, RecursiveIteratorIterator::SELF_FIRST);
	            foreach ($files as $file) {
	                // $file = realpath($file);
	                if (is_dir($file) === true) {
	                    $zip->addEmptyDir($file);
	                } else if (is_file($file) === true) {
	                    $zip->addFromString($file, file_get_contents($file));
	                }
	            }
	        } else if (is_file($item) === true) {
	            $zip->addFromString(basename($item), file_get_contents($item));
	        }
		}

		//debug
		//echo 'The zip archive contains ',$zip->numFiles,' files with a status of ',$zip->status;
		
		//close the zip -- done!
		$zip->close();
		
		//check to make sure the file exists
		return file_exists($destination);
	}
	else
	{
		return false;
	}
}