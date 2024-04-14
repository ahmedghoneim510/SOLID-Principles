<?php

namespace SOLID\ISP;

class Car implements Vehicle ,Speedable,Intertaiment
{
    public function move()
    {
        echo "Car is moving";
    }
    public function accelerate()
    {
        echo "Car is accelerating";
    }
    public function musicPlayer()
    {
        echo "Car is playing music";
    }
    public function stop()
    {
        echo "Car is stopped";
    }
    public function pause()
    {
        echo "Car is paused";
    }
    public function rewind()
    {
        echo "Car is rewinding";
    }

}