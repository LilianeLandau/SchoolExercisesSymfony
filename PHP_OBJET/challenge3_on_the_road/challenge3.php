<?php

require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'Vehicle.php';
require_once 'Car.php';
require_once 'Bike.php';
require_once 'Skateboard.php';

echo "<h1>test affichage challenge 3</h1>";
echo "<p>MotorWay accepte uniquement les Car</p>";
echo "<p>ResidentialWay accepte uniquement les Car</p>";
echo "<p>PedestrianWay accepte uniquement les Bike et Skateboard</p>";


echo "<h2>Tests sur MotorWay - instancier Car, Bike, Skateboard ==> seul car est accepté</h2>";
$car = new Car("CAR_red", 2, "gasoline");
$bike = new Bike("BIKE_yellow", 1, "electric");
$skateboard = new Skateboard("SKATE_black", 4, "electric");
$motorway = new MotorWay();
$motorway->addVehicle($car);
$motorway->addVehicle($bike);
$motorway->addVehicle($skateboard);
echo "<pre>";
print_r($motorway->getCurrentVehicles());
echo "</pre>";

echo "<h2>Tests sur ResidentialWay - instancier Car, Bike, Skateboard ==> seul Car est accepté</h2>";
$car = new Car("CAR_red", 2, "gasoline");
$bike = new Bike("BIKE_yellow", 1, "electric");
$skateboard = new Skateboard("SKATE_black", 4, "electric");
$residentialway = new ResidentialWay();
$residentialway->addVehicle($car);
$residentialway->addVehicle($bike);
$residentialway->addVehicle($skateboard);
echo "<pre>";
print_r($residentialway->getCurrentVehicles());
echo "</pre>";


echo "<h2>Tests sur PedestrianWay - instancier Car, Bike, Skateboard ==> seuls Bike et Skateboard sont acceptés</h2>";
$car = new Car("CAR_red", 2, "gasoline");
$bike = new Bike("BIKE_yellow", 1, "electric");
$skateboard = new Skateboard("SKATE_black", 4, "electric");
$pedestrianway = new PedestrianWay();
$pedestrianway->addVehicle($car);
$pedestrianway->addVehicle($bike);
$pedestrianway->addVehicle($skateboard);
echo "<pre>";
print_r($pedestrianway->getCurrentVehicles());
echo "</pre>";
