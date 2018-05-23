<?php
/**
 * Created by PhpStorm.
 * User: 49391
 * Date: 2018/5/23
 * Time: 23:07
 */
class Phone{
    /**
     * @return mixed
     */
    public function getScreen()
    {
        return $this->screen;
    }

    /**
     * @return mixed
     */
    public function getCpu()
    {
        return $this->cpu;
    }

    /**
     * @return mixed
     */
    public function getMemory()
    {
        return $this->memory;
    }
    protected $screen;
    protected $cpu;
    protected $memory;


    /**
     * @param mixed $screen
     */
    public function setScreen($screen)
    {
        $this->screen = $screen;
    }


    /**
     * @param mixed $cpu
     */
    public function setCpu($cpu)
    {
        $this->cpu = $cpu;
    }


    /**
     * @param mixed $memory
     */
    public function setMemory($memory)
    {
        $this->memory = $memory;
    }
}