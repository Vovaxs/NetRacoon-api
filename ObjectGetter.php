<?php
use NetRacoon\ObjectOfStuff;

/**
 * Created by PhpStorm.
 * User: Vovaxs
 * Date: 04/09/2015
 * Time: 21:45
 */
class ObjectGetter
{

    /**
     * @param ObjectOfStuff $stuff
     */
    public function getNameFromTheObject(ObjectOfStuff $stuff){
        echo $stuff->getName()."<br />";
        echo $stuff->getId()."<br />"."<hr />";
    }

}