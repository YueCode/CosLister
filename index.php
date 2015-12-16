<?php
// include Config File & QCLOUD COS SDk
require('./config.inc.php');
use Qcloud_cos\Auth;
use Qcloud_cos\Cosapi;

//include Slim2
require 'Slim/Slim.php';
\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim();

// Get Directory List
$app->get(
    '/',
    function () {
       echo "Hello World!";
    }
);

$app->get(
	'/dirs',
	function () {
       $listRet = Cosapi::listFolder(BUCKET, "/");
       $listRet	= $listRet['data'];
       $listRet	= json_encode($listRet);
       echo $listRet;
    }
);
$app->get(
	'/dir/:name',
	function ($name){
	    $listRet = Cosapi::listFolder(BUCKET,$name);
	    $listRet	= $listRet['data'];
        $listRet	= json_encode($listRet);
        echo $listRet;
	}
);
// POST route
$app->post(
    '/post',
    function () {
        echo 'This is a POST route';
    }
);

// PUT route
$app->put(
    '/put',
    function () {
        echo 'This is a PUT route';
    }
);

// PATCH route
$app->patch('/patch', function () {
    echo 'This is a PATCH route';
});

// DELETE route
$app->delete(
    '/delete',
    function () {
        echo 'This is a DELETE route';
    }
);

$app->run();
