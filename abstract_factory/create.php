<?php
/**
 * Created by PhpStorm.
 * User: 49391
 * Date: 2018/5/23
 * Time: 22:39
 */
function __autoload($className){
    require_once $className.".php";
}
$phone = NubiaProductFactory::createPhone();
$phone->call();
$tv = NubiaProductFactory::createTV();
$tv = $tv->watchMovie();