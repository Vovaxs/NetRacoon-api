<?php

namespace htdocs\NetRacoon\logic;

use C\xampp\htdocs\NetRacoon\MysqlUserGateway;



/**
 * Created by PhpStorm.
 * Author: Zirka
 * Date: 05.09.2015
 * Time: 14:46
 */
class Register
{
    private $gateway;

    /**
     * @param User $user
     */
    public function registerUser(User $user)
    {
        $this->gateway = new MysqlUserGateway();
        echo "<br />Регістрація пройшла успішно<br />" . "Name: " . $user->getName() . "<br />" . "Pass: " . $user->getPass();

    }
}