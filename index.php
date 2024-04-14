<?php

use SOLID\OCP\Bus;
use SOLID\OCP\Car;
use SOLID\OCP\Driver;
use SOLID\OCP\Plane;
use SOLID\OCP\Route;
use SOLID\OCP\Trip;
use SOLID\OCP\MoveOnRoad;
use SOLID\LSP\Rectangle;
require 'vendor/autoload.php';


$rectange = new Rectangle();
$rectange->setWidth(5);
$rectange->setHeight(10);
echo $rectange->CalculateArea();



?>