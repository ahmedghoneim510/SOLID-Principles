<?php

use SOLID\OCP\Bus;
use SOLID\OCP\Car;
use SOLID\OCP\Driver;
use SOLID\OCP\Plane;
use SOLID\OCP\Route;
use SOLID\OCP\Trip;
use SOLID\OCP\MoveOnRoad;
require 'vendor/autoload.php';


$bus =new Bus(1);
$mohammed=new Driver('Mohammed', 30, 123456, 'Cairo');
$route=new Route('Cairo','Alexandria',200);
$route2=new Route('Cairo','Aswan',1000);
$plane=new Plane();
$car=new Car();


$trip=new Trip($car, 1, 100, 5);
//$car->setNumberPassenger(50);
$car->setColor('Red');
//$car->setSpeed(100);
//$car->setDoors(2);
$car->setDriver($mohammed);
$car->AddRoute($route);
$car->AddRoute($route2);

$car->setMovable(new MoveOnRoad());


echo $trip->move();





?>