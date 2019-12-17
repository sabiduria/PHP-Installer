<?php
/**
 * Created by PhpStorm.
 * User: Sabiduria
 * Date: 12/18/2019
 * Time: 12:23 AM
 */

function autoload($class){
    require dirname(__FILE__)."\\".$class.".php";
}

spl_autoload_register('autoload');