<?php

use SOLID\Route;
use \SOLID\SRP\Bus;
use SOLID\SRP\Driver;

require 'vendor/autoload.php';


$bus =new Bus(1);
$mohammed=new Driver('Mohammed', 30, 123456, 'Cairo');
$route=new Route('Cairo','Alexandria',200);
$route2=new Route('Cairo','Aswan',1000);
$bus->setNumberPassenger(50);
$bus->setColor('Red');
$bus->setSpeed(100);
$bus->setDoors(2);
$bus->setDriver($mohammed);

$bus->AddRoute($route);
$bus->AddRoute($route2);
echo "<pre>";
print_r($bus->getDriver());
echo "</pre>";
echo "<br>";
echo $bus->getNumberPassenger();
echo "<br>";
echo $bus->getColor();
echo "<br>";
echo $bus->getSpeed();
echo "<br>";
echo $bus->getDoors();
echo "<br>";
echo $bus->getBusNumber();
echo "<pre>";
print_r($bus->getRoute());
echo "</pre>";
$bus->move();


?>