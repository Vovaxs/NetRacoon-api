<?php
/**
 * Created by PhpStorm.
 * Author: Zirka
 * Date: 02.09.2015
 * Time: 22:36
 */

include "ObjectGetter.php";
include "ObjectOfStuff.php";
include "ObjectExample.php";
include "User.php";

$getter = new ObjectGetter();
$example = new ObjectExample("Vasa");
$user = new User();

$arrayOfObjects = [$example, $user, new ObjectExample("This is Awesome")];

foreach ($arrayOfObjects as $object) {
    $getter->getNameFromTheObject($object);
}