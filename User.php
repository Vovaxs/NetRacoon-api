<?php
use NetRacoon\ObjectOfStuff;

/**
 * Created by PhpStorm.
 * User: Vovaxs
 * Date: 04/09/2015
 * Time: 21:59
 */
class User implements ObjectOfStuff
{

    /**
     * @return string
     */
    public function getName()
    {
        return "User Vasa";
    }

    /**
     * @return string
     */
    public function getId()
    {
        return 123112312312342;
    }
}