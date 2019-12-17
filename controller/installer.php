<?php
/**
 * Created by PhpStorm.
 * User: Sabiduria
 * Date: 12/18/2019
 * Time: 12:54 AM
 */
include_once ('../model/autoload.php');
extract($_POST);

switch ($need){
    case 'Step1':
        $installer = new Installer($host, $username, $password, $db_name);
        if ($installer->createDatabase()){
            header('Location:../installer.php?step=2');
        } else{
            header('Location:../installer.php?step=except');
        }
        break;
}