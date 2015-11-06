<?php
/**
 * Created by PhpStorm.
 * Author: Vovaxs
 * Date: 09/09/2015
 * Time: 19:49
 */

use NetRacoon\NetRacoonApi\Demo\Demo;
use Silex\Application;

require_once "../vendor/autoload.php";
$app = new \Silex\Application();
$app[ 'debug' ] = false;

$app->get( '/phpinfo', function () {
    return phpinfo();
} );

$app->get( '/demo', function () {
    return (new Demo())->execute();
} );

$app->run();

