<?php

require_once "car.php";
require_once "bicycle.php";

$bike = new Bicycle();

$myCar = new Car("red", 5, "fuel");

var_dump($bike);
echo $bike->forward() . "<br>";
var_dump($bike) . "<br>";
echo $bike->brake() . "<br>";



var_dump($myCar);
echo $myCar->start() . "<br>";
echo $myCar->forward() . "<br>";
echo $myCar->brake() . "<br>";
echo $myCar->getNbSeats() . "<br>";
