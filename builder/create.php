<?php
/**
 * Created by PhpStorm.
 * User: 49391
 * Date: 2018/5/23
 * Time: 23:39
 */
function __autoload($className){
    require_once $className.".php";
}

$redMagicBuilder = new RedMagicPhoneBuilder();
$director = new Director();
$director->setBuilder($redMagicBuilder);
$director->startBuild();
var_dump($redMagicBuilder);