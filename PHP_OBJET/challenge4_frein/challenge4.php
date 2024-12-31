<?php

require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'Vehicle.php';
require_once 'Car.php';
require_once 'Bike.php';
require_once 'Skateboard.php';

echo "<h1>Test affichage challenge 4</h1>";

echo "<h2>Tests - fonction setParkBrake - affichage des exceptions</h2>";

//créer une classe dédiée pour les exceptions de type Brake
class BrakeException extends Exception {}
try {
    //créer une instance de Car 
    //dans un bloc try catch pour tester la méthode hasParkBrake
    $car = new Car("CAR_red", 2, "gasoline");
    //essayer de démarrer la voiture
    $car->startCar();
} catch (BrakeException $e) {
    //ici gérer l'exception de type BrakeException
    echo "<p>Il y a un problème : " . $e->getMessage() . "</p>";
    //désactiver le frein à main avec la fonction 
    //en passant l'argument false en paramètre de la fonction
    $car->setParkBrake(false);
    //afficher l'information
    echo "<p>Le frein à main est désactivé, la voiture peut maintenant démarrer</p>";
    //nouvel essai de démarrage
    $car->startCar();
} catch (Exception $e) {
    // Gestion de toute autre exception
    echo "Une erreru s'est produite :  " . $e->getMessage() . "\n";
} finally {
    //ce bloc s'affiche dans tous les cas 
    echo "<p>Ma voiture roule comme un donut</p>";
}
