<?php

namespace htdocs\NetRacoon\Entity;

use htdocs\NetRacoon\UseCase\User;

/**
 * Created by PhpStorm.
 * Author: Zirka
 * Date: 05.09.2015
 * Time: 15:33
 */
class StandartUser implements User
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $pass;
    /**
     * @var string
     */
    private $bio;
    /**
     * @var string
     */
    private $ava;

    /**
     * StandartUser constructor.
     * @param string $name
     * @param string $pass
     * @param string $bio
     * @param string $ava
     */
    public function __construct($name, $pass, $bio, $ava)
    {
        $this->name = $name;
        $this->pass = $pass;
        $this->bio = $bio;
        $this->ava = $ava;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPass()
    {
        return $this->pass;
    }

    public function getBio()
    {
        return $this->bio;
    }

    public function getAva()
    {
        return $this->ava;
    }
}