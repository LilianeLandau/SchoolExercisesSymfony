<?php

require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'Vehicle.php';
require_once 'Car.php';
require_once 'Bike.php';
require_once 'Skateboard.php';


echo "<h1>Tests -  affichage challenge 5</h1>";
//instancier les objets Car et Bike
$car = new Car("CAR_red", 2, "gasoline");
$bike = new Bike("BIKE_yellow", 1, "electric");


echo "<h2>Tests d'affichage pour CAR avec la fonction switchOn() qui retourne true </h2>";
if ($car->switchOn()) {
    echo "<p>Phares allumés</p>";
} else {
    echo "<p>Phares éteints</p>";
}
echo "<h2>Tests d'affichage pour CAR avec la fonction switchOff() qui retourne false</h2>";
if ($car->switchOff()) {
    echo "<p>Phares allumés</p>";
} else {
    echo "<p>Phares éteints</p>";
}

echo "<h2>Tests d'affichage pour BIKE - currentSpeed = 20 
- switchOn() retourne true si currentSpeed>10 
- switchOff() retourne toujours false</h2>";
$bike->setCurrentSpeed(20);

if ($bike->switchOn()) {
    echo "<p>Phares allumés</p>";
} else {
    echo "<p>Phares éteints</p>";
}

echo "<h2>Tests d'affichage pour BIKE - currentSpeed = 8  
- switchOn() retourne true si currentSpeed>10 
- switchOff() retourne toujours false</h2>";
$bike->setCurrentSpeed(8);

if ($bike->switchOn()) {
    echo "<p>Phares allumés</p>";
} else {
    echo "<p>Phares éteints</p>";
}

if ($bike->switchOff()) {
    echo "<p>Phares allumés</p>";
} else {
    echo "<p>Phares éteints</p>";
}
