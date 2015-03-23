<?php
//changed from local


error_reporting(E_ALL);
ini_set('display_errors', 1);

if(strpos($_SERVER['SERVER_NAME'],'hometodoor-object90.rhcloud.com') !== false){  // if online
	
	$OPENSHIFT_REPO_DIR = '/var/lib/openshift/550712f75973ca21b500007a/app-root/repo';
	
	// HTTP
	define('HTTP_SERVER', 'http://hometodoor-object90.rhcloud.com/');
	define('HTTP_CATALOG', 'http://hometodoor-object90.rhcloud.com/');
	// HTTPS
	define('HTTPS_SERVER', 'http://hometodoor-object90.rhcloud.com/');
	define('HTTPS_CATALOG', 'http://hometodoor-object90.rhcloud.com/');
	
	
	
	// DIR
	define('DIR_APPLICATION',$OPENSHIFT_REPO_DIR.'/catalog/');
	define('DIR_SYSTEM', $OPENSHIFT_REPO_DIR.'/system/');
	define('DIR_DATABASE',$OPENSHIFT_REPO_DIR.'/system/database/');
	define('DIR_LANGUAGE', $OPENSHIFT_REPO_DIR.'/catalog/language/');
	define('DIR_TEMPLATE', $OPENSHIFT_REPO_DIR.'/catalog/view/theme/');
	define('DIR_CONFIG', $OPENSHIFT_REPO_DIR.'/system/config/');
	define('DIR_IMAGE',$OPENSHIFT_REPO_DIR.'/image/');
	define('DIR_CACHE', $OPENSHIFT_REPO_DIR.'/system/cache/');
	define('DIR_DOWNLOAD',$OPENSHIFT_REPO_DIR.'/download/');
	define('DIR_LOGS', $OPENSHIFT_REPO_DIR.'/system/logs/');
	
	
	// DB
	define('DB_DRIVER', 'mysqli');
	define('DB_HOSTNAME', '127.6.214.2:3306');
	define('DB_USERNAME', 'adminmRr8rlm');
	define('DB_PASSWORD', '6H7AVHISPTGd');
	define('DB_DATABASE', 'hometodoor');
	define('DB_PREFIX', 'oc_');
	
	
	
}
else{
	
// HTTP
define('HTTP_SERVER', 'http://192.168.0.101/hometodoor/');
define('HTTP_CATALOG', 'http://192.168.0.101/hometodoor/');
// HTTPS
define('HTTPS_SERVER', 'http://192.168.0.101/hometodoor/');
define('HTTPS_CATALOG', 'http://192.168.0.101/hometodoor/');

// DIR
define('DIR_APPLICATION', '/var/www/hometodoor/catalog/');
define('DIR_SYSTEM', '/var/www/hometodoor/system/');
define('DIR_DATABASE', '/var/www/hometodoor/system/database/');
define('DIR_LANGUAGE', '/var/www/hometodoor/catalog/language/');
define('DIR_TEMPLATE', '/var/www/hometodoor/catalog/view/theme/');
define('DIR_CONFIG', '/var/www/hometodoor/system/config/');
define('DIR_IMAGE', '/var/www/hometodoor/image/');
define('DIR_CACHE', '/var/www/hometodoor/system/cache/');
define('DIR_DOWNLOAD', '/var/www/hometodoor/download/');
define('DIR_LOGS', '/var/www/hometodoor/system/logs/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'password');
define('DB_DATABASE', 'hometodoor');
define('DB_PREFIX', 'oc_');
}
?>
