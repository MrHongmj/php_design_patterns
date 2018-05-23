<?php
/**
 * Created by PhpStorm.
 * User: 49391
 * Date: 2018/5/23
 * Time: 21:44
 */
class Factory{
    public static function createProduct($name)
    {
        if($name == 'productA'){
            return new ProductA();
        } elseif ($name == 'productB') {
            return new ProductB();
        }
    }
}

function __autoload($className){
    require_once $className.".php";
}

$productA = Factory::createProduct('productA');
$productA->useProduct();
$productB = Factory::createProduct('productB');
$productB->useProduct();