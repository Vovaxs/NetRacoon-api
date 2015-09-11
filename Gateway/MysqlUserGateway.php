<?php
namespace C\xampp\htdocs\NetRacoon;
/**
 * Created by PhpStorm.
 * Author: Zirka
 * Date: 05.09.2015
 * Time: 17:21
 */
class MysqlUserGateway
{
    private $conn;
    private $connObject;

    /**
     * MysqlUserGateway constructor.
     */
    public function __construct()
    {
        $this->connObject = new MysqlConnection();
        $this->conn = $this->connObject->getConnection();
        $this->connObject->testConnection();
    }
}