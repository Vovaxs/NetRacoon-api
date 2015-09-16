<?php

/**
 * Created by PhpStorm.
 * Author: Vovaxs
 * Date: 09/09/2015
 * Time: 19:49
 */

use Silex\Application;

require_once "vendor/autoload.php";
$app = new \Silex\Application();
$app[ 'debug' ] = true;
$obj = new Demo();

$app->get( '/', function () {
    return new \Symfony\Component\HttpFoundation\Response( "Hello world!" );
} );
$app->get( '/demo', function () {

    return new \Symfony\Component\HttpFoundation\Response( "helloasdasd" );
} );

$app->get( "/demo/{id}", function ( $id ) {
    return "ID - {$id}";
} );
echo $obj->execute();
$app->run();

