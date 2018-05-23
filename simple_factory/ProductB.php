<?php
/**
 * Created by PhpStorm.
 * User: 49391
 * Date: 2018/5/23
 * Time: 21:40
 */
class ProductB extends ProductBase {

    /**
     * ProductB constructor.
     */
    public function __construct()
    {
        echo "ProductB is running \n";
    }

    public function useProduct()
    {
        echo "this is ProductB use \n";
    }
}