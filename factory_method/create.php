<?php
/**
 * Created by PhpStorm.
 * User: 49391
 * Date: 2018/5/23
 * Time: 22:11
 */
function __autoload($className){
    require_once $className.".php";
}

$phone = PhoneFactory::createProduct();
$phone->getPrice();
$phone->getImage();
