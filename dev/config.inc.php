<?php
define ('DATE_FORMAT', 'Y-m-d\TH:i:s\Z');

define('AWS_ACCESS_KEY_ID', '<Your Access Key ID>');
define('AWS_SECRET_ACCESS_KEY', '<Your Secret Access Key>');

define('APPLICATION_NAME', '<Your Application Name>');
define('APPLICATION_VERSION', '<Your Application Version or Build Number>');

define ('MERCHANT_ID', '<Your Merchant ID>');

// set include paths
$paths = array(
    get_include_path(),
    realpath(__DIR__.'/'),
    realpath(__DIR__.'/../src'),
);
set_include_path(implode(PATH_SEPARATOR, $paths));
unset($paths);

// 
function __autoload($className){
    $filePath = str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';
    $includePaths = explode(PATH_SEPARATOR, get_include_path());
    foreach($includePaths as $includePath){
        if(file_exists($includePath . DIRECTORY_SEPARATOR . $filePath)){
            require_once $filePath;
            return;
        }
    }
}



