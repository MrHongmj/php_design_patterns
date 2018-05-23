<?php
/**
 * Created by PhpStorm.
 * User: 49391
 * Date: 2018/5/23
 * Time: 23:20
 */
class Director{
    public $myBuilder;

    public function startBuild()
    {
        $this->myBuilder->buildCpu();
        $this->myBuilder->buildScreen();
        $this->myBuilder->buildMemory();

    }
    public function setBuilder(Builder $builder){
        $this->myBuilder = $builder;
    }
}