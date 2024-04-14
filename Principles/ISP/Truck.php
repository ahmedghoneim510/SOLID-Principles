<?php

namespace SOLID\ISP;

class Truck implements Vehicle , Heavy
{
    public function move()
    {
        echo "Car is moving";
    }

    public function stop()
    {
        echo "Car is stopped";
    }

    public function carryHeavyLoad()
    {
        echo "Car is carrying heavy load";
    }
    

}