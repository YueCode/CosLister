<?php
// include Config File & QCLOUD COS SDk
require('./config.inc.php');
use Qcloud_cos\Auth;
use Qcloud_cos\Cosapi;

//include Slim2
require 'Slim/Slim.php';
\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim();

$app->get(
    '/',
    function () {
       echo "Hello World!";
    }
);
$app->get(
	'/:dir',
	function ($dir){
	   $dir = str_replace('-','/',$dir);
       $listRet = Cosapi::listFolder(BUCKET,$dir);
	   $listRet	= $listRet['data'];
       $listRet	= json_encode($listRet);
       echo $listRet;
	}
);

$app->run();
