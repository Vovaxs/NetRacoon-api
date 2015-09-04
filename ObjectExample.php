<?php
use NetRacoon\ObjectOfStuff;

/**
 * Created by PhpStorm.
 * User: Vovaxs
 * Date: 04/09/2015
 * Time: 21:44
 */
class ObjectExample implements ObjectOfStuff
{
    /**
     * @var
     */
    private $name;

    /**
     * ObjectExample constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getId()
    {
       return 1;
    }
}