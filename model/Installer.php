<?php
/**
 * Created by PhpStorm.
 * User: Sabiduria
 * Date: 12/18/2019
 * Time: 12:22 AM
 */

class installer
{
    private $host;
    private $username;
    private $password;
    private $db_name;

    /**
     * installer constructor.
     * @param $host
     * @param $username
     * @param $password
     * @param $db_name
     */
    public function __construct($host, $username, $password, $db_name)
    {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->db_name = $db_name;
    }


    public function createDatabase(){
        try {
            $connexion = new PDO("mysql:host=$this->host", $this->username, $this->password);
            if($connexion->exec("CREATE DATABASE `$this->db_name`;")){
                return true;
            } else{
                return false;
                //die(print_r($connexion->errorInfo(), true));
            }


        } catch (PDOException $e) {
            die("DB ERROR: ". $e->getMessage());
        }
    }
}