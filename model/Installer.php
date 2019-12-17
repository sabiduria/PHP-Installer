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

    public function createConfigFile(){
        $filename = "../config/config.php";
        $configFile = fopen($filename, "w");
        fputs($configFile, $this->configFileTemplate());
        fclose($configFile);
    }

    public function configFileTemplate(){
        return "
<?php
if (!defined('DB_SERVER')) define('DB_SERVER', '".$this->host."');
if (!defined('DB_USER')) define('DB_USER', '".$this->username."');
if (!defined('DB_PWD')) define('DB_PWD', '".$this->password."');
if (!defined('DB_NAME')) define('DB_NAME', '".$this->db_name."');
if (!defined('DSN')) define('DSN', 'mysql:host='.DB_SERVER.'; dbname='.DB_NAME);
";
    }
}