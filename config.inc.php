<?php
//init COS
// >= php 5.3.0
spl_autoload_register(function($class){
    $dir = dirname(__FILE__);
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
    include($dir.DIRECTORY_SEPARATOR.$class); 
});

//请到http://console.qcloud.com/cos去获取你的appid、sid、skey
define('COSAPPID', 'ID');
define('COSSECRETID','SID');
define('COSSECRETKEY','SK');
define('BUCKET','Bucket');