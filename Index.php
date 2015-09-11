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
$app['debug'] = true;

$app->get('/', function(){
    return new Symfony\Component\HttpFoundation\Response("Hello world!");
});

$app->get('/demo', function(){
    return new Symfony\Component\HttpFoundation\Response("Demo Ta DA!!!!");
});

$app->get("/demo/{id}", function($id){
    return "ID - {$id}";
});

$app->run();