<?php

namespace SOLID\OCP;

class Bus extends Vehicle
{

    private $bus_number;

    /**
     * @return mixed
     */

    private $number_passenger;
    private $speed;
    private $doors;

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


    /**
     * @return mixed
     */
   /**
     * @return array
     */


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

    /**
     * @return mixed
     */




}