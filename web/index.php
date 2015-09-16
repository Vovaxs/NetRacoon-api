<?php
namespace web;

/**
 * Created by PhpStorm.
 * Author: Vovaxs
 * Date: 09/09/2015
 * Time: 19:49
 */

use Silex\Application;
use Vovaxs\NetRacoonApi\Demo\Demo;

require_once "../vendor/autoload.php";
$app = new \Silex\Application();
$app[ 'debug' ] = true;

$app->get( '/', function () {
    return new \Symfony\Component\HttpFoundation\Response( "Hello world!" );
} );
$app->get( '/demo', function () {
    $obj = new Demo();
    return new \Symfony\Component\HttpFoundation\Response( $obj->execute() );
} );

$app->get( "/demo/{id}", function ( $id ) {
    return "ID - {$id}";
} );

$app->run();