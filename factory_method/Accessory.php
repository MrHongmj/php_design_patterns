<?php
/**
 * Created by PhpStorm.
 * User: 49391
 * Date: 2018/5/23
 * Time: 21:57
 */
class Accessory implements Product{

    public function getPrice()
    {
        echo "this is accessory price compute method\n";
    }

    public function getImage()
    {
        echo "this is accessory image get method \n";;
    }
}