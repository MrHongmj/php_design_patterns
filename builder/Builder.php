<?php
/**
 * Created by PhpStorm.
 * User: 49391
 * Date: 2018/5/23
 * Time: 23:12
 */
abstract class Builder{
    protected $phone;
    protected abstract function  buildCpu();
    protected abstract function  buildScreen();
    protected abstract function  buildMemory();
}
