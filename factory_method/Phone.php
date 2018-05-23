<?php
/**
 * Created by PhpStorm.
 * User: 49391
 * Date: 2018/5/23
 * Time: 21:57
 */
class Phone implements Product {

    public function getPrice()
    {
        echo "this is phone get price method \n";
    }

    public function getImage()
    {
        echo "this is phone image get method \n";
    }
}