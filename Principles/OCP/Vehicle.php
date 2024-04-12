<?php

namespace SOLID\OCP;

abstract class Vehicle
{
    private $color;
    private $movable;
    private $route=[]; // array of objects from Route class
    private $driver; // object from Driver class
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }
    public function getRoute()
    {
        return $this->route;
    }


    public function AddRoute( Route $route)
    {
        $this->route[] = $route;
    }
    public function getDriver()
    {
        return $this->driver;
    }

    /**
     * @param mixed $driver
     */
    public function setDriver($driver)
    {
        $this->driver = $driver;
    }
    public function getMovable()
    {
        return $this->movable;
    }

    /**
     * @param mixed $movable
     */
    public function setMovable( $movable)
    {
        $this->movable = $movable;
    }
    public function move(){

        return $this->getMovable()->move();
    }
}