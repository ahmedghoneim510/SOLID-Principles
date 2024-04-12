<?php

namespace SOLID\SRP;

class Bus
{
    private $bus_number;

    /**
     * @return mixed
     */

    private $number_passenger;
    private $color;
    private $route=[]; // array of objects from Route class
    private $speed;
    private $doors;
    private $driver; // object from Driver class

    public function __construct($bus_number)
    {
        $this->setBusNumber($bus_number);
    }

    /**
     * @return mixed
     */
    public function getNumberPassenger()
    {
        return $this->number_passenger;
    }

    /**
     * @param mixed $number_passenger
     */
    public function setNumberPassenger($number_passenger)
    {
        $this->number_passenger = $number_passenger;
    }

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
   /**
     * @return array
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * @param array $route
     */
    public function AddRoute( Route $route)
    {
        $this->route[] = $route;
    }

    /**
     * @return mixed
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @param mixed $speed
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    /**
     * @return mixed
     */
    public function getDoors()
    {
        return $this->doors;
    }

    /**
     * @return mixed
     */
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

    /**
     * @param mixed $doors
     */
    public function setDoors($doors)
    {
        $this->doors = $doors;
    }
    public function getBusNumber()
    {
        return $this->bus_number;
    }

    /**
     * @param mixed $bus_number
     */
    public function setBusNumber($bus_number)
    {
        $this->bus_number = $bus_number;
    }
    public function move(){
        foreach ($this->route as $route){
            echo "The bus is moving from ".$route->getSource()." to ".$route->getDestination()." with distance ".$route->getDistance().
                " with Maximum speed ".$this->speed."<br>";
        }
    }

}