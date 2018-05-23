<?php
/**
 * Created by PhpStorm.
 * User: 49391
 * Date: 2018/5/23
 * Time: 22:24
 */
class NubiaProductFactory extends AbstractFactory{

    public static function  createPhone()
    {
        return new NubiaPhone();
    }

    public static function createTV()
    {
        return new NubiaTv();
    }
}