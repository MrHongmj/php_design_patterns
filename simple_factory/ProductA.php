<?php
/**
 * Created by PhpStorm.
 * User: 49391
 * Date: 2018/5/23
 * Time: 21:40
 */
class ProductA extends ProductBase{


    /**
     * ProductA constructor.
     */
    public function __construct()
    {
        echo "ProductA is running\n";
    }

    public function useProduct()
    {
        echo "this is productA use\n";
    }
}