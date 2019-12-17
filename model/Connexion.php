<?php
/**
 * Created by PhpStorm.
 * User: Sabiduria
 * Date: 12/18/2019
 * Time: 12:26 AM
 */

if (!defined('DB_SERVER')) define('DB_SERVER', '');
if (!defined('DB_USER')) define('DB_USER', '');
if (!defined('DB_PWD')) define('DB_PWD', '');
if (!defined('DB_NAME')) define('DB_NAME', '');
if (!defined('DSN')) define('DSN', 'mysql:host='.DB_SERVER.'; dbname='.DB_NAME);
class connexion
{
    private static $resource;

    private function __construct()
    {
    }

    // Usage du Design Pattern Singleton
    public static  function getConnexion(){
        if (self::$resource==null){
            // En developpement
            self::$resource = new PDO (DSN,
                DB_USER,
                DB_PWD,
                array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

            // En production
            //self::$resource = new PDO (DSN, DB_USER, DB_PWD, array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_SILENT));

            return self::$resource;
        } else{
            return self::$resource;
        }
    }

}