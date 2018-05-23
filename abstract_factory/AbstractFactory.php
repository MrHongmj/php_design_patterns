<?php
/**
 * Created by PhpStorm.
 * User: 49391
 * Date: 2018/5/23
 * Time: 22:22
 */
abstract class AbstractFactory{
    public abstract static function createPhone();
    public abstract static function createTV();
}