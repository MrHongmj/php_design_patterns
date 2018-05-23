<?php
/**
 * Created by PhpStorm.
 * User: 49391
 * Date: 2018/5/23
 * Time: 22:01
 */
class AccessoryFactory extends AbstractFactory{

    public static function createProduct()
    {
        return new Accessory();
    }
}