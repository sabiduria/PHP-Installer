<?php
/**
 * Created by PhpStorm.
 * User: Sabiduria
 * Date: 12/18/2019
 * Time: 12:54 AM
 */
if (file_exists('../config/config.php')){
    include_once ('../config/config.php');
}
include_once ('../model/autoload.php');
extract($_POST);
//extract($_FILES);

switch ($need){
    case 'Step1':
        $installer = new Installer($host, $username, $password, $db_name);
        if ($installer->createDatabase()){
            $installer->createConfigFile();
            header('Location:../installer.php?step=2');
        } else{
            header('Location:../installer.php?step=except');
        }
        break;

    case 'Step2':
        $installer = new Installer(null, null, null, null);
        $installer->importScript();
        break;
}