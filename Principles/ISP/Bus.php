<?php

namespace SOLID\ISP;

class Bus implements Vehicle
{
    public function move()
    {
        echo "Car is moving";
    }
    public function stop()
    {
        echo "Car is stopped";
    }

    

}