<?php

namespace SOLID\OCP;

class Trip
{
    private $vehicle; // object from Bus class
    private $tripNumber;

    private $tripPrice;

    private $duration;
    public function __construct(Vehicle $vehicle, $tripNumber, $tripPrice, $duration)
    {
        $this->setVehicle($vehicle);
        $this->setTripNumber($tripNumber);
        $this->setTripPrice($tripPrice);
        $this->setDuration($duration);
    }

    /**
     * @return mixed
     */
    public function getVehicle()
    {
        return $this->vehicle;
    }

    /**
     * @param mixed $vehicle
     */
    public function setVehicle($vehicle)
    {
        $this->vehicle = $vehicle;
    }

    /**
     * @return mixed
     */
    public function getTripNumber()
    {
        return $this->tripNumber;
    }

    /**
     * @param mixed $tripNumber
     */
    public function setTripNumber($tripNumber)
    {
        $this->tripNumber = $tripNumber;
    }

    /**
     * @return mixed
     */
    public function getTripPrice()
    {
        return $this->tripPrice;
    }

    /**
     * @param mixed $tripPrice
     */
    public function setTripPrice($tripPrice)
    {
        $this->tripPrice = $tripPrice;
    }

    /**
     * @return mixed
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param mixed $duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
    }
    public function move()
    {
        return $this->getVehicle()->move();
    }
}