<?php
//init COS
// >= php 5.3.0
spl_autoload_register(function($class){
    $dir = dirname(__FILE__);
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
    include($dir.DIRECTORY_SEPARATOR.$class); 
});

//请到http://console.qcloud.com/cos去获取你的appid、sid、skey
//替换下方对应文字
define('COSAPPID', '10008065');
define('COSSECRETID','AKIDyQOi493U2ymtah7M8qsLfGQEipTLHJ1I');
define('COSSECRETKEY','LalrU2rVJldDLi6WgDLnxVhDqi3bMoaZ');
define('BUCKET','amhltt=');
