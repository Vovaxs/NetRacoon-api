<?php

namespace htdocs\NetRacoon\UseCase;
/**
 * Created by PhpStorm.
 * Author: Zirka
 * Date: 05.09.2015
 * Time: 15:23
 */
interface User
{
    public function getName();
    public function getPass();
    public function getBio();
    public function getAva();
}