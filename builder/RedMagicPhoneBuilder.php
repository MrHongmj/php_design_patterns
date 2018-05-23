<?php
/**
 * Created by PhpStorm.
 * User: 49391
 * Date: 2018/5/23
 * Time: 23:10
 */
//红魔手机的建造者
class RedMagicPhoneBuilder extends Builder {
    protected $phone;

    /**
     * PhoneBuilder constructor.
     * @param $phone
     */
    public function __construct()
    {
        $this->phone = new Phone();
    }

    public function buildCpu()
    {
        $this->phone->setCpu("MSM8998");
    }

    public function buildScreen()
    {
        $this->phone->setScreen("全面屏");
    }

    public function buildMemory()
    {
        $this->phone->setMemory("6GB/8GB RAM");
    }
    public function __toString()
    {
        return "cpu:".$this->phone->getCpu().",内存：".$this->phone->getMemory()."屏幕：".$this->phone->getScreen();
    }
}