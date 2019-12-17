<?php
/**
 * Created by PhpStorm.
 * User: Sabiduria
 * Date: 12/18/2019
 * Time: 12:38 AM
 */
include_once ('model/autoload.php');
$filename = 'config/ok.txt';

// Check if the project is already configure by the user
if (!file_exists($filename)) {
    header('Location:installer.php?step=1');
}