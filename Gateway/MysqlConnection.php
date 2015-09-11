<?php
namespace htdocs\NetRacoon\Gateway;
/**
 * Created by PhpStorm.
 * Author: Zirka
 * Date: 05.09.2015
 * Time: 17:23
 */
class MysqlConnection
{
    private $conn;

    /**
     * @return mysqli
     */
    public function getConnection()
    {
        return $this->conn;
    }

    /**
     * MysqlConnection constructor.
     */
    public function __construct()
    {
        define("DB_HOST", "127.0.0.1");
        define("DB_NAME", "netracoon");
        define("DB_USER", "root");
        define("DB_PASS", "");
        $this->conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    }
    public function testConnection(){
        if(!$this->conn){
            echo "ERROR: ".mysqli_error($this->conn);
        }else{
            echo "SUCCESSFUL";
        }
    }
}