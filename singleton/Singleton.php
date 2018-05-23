<?php
/**
 * Created by PhpStorm.
 * User: 49391
 * Date: 2018/5/23
 * Time: 23:45
 */
class Singleton{
    private static $instance;
    private function __construct()
    {
        //私有构造方法，禁止使用new创建对象
    }
    private function __clone()
    {
        //将克隆方法设为私有，禁止克隆对象
    }
    public static function getInstance(){
        if(!isset(self::$instance)){
            self::$instance = new self();
        }
        return self::$instance;
    }
}