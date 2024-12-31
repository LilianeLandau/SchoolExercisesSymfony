<?php

require_once 'Highway.php';

final class PedestrianWay extends HighWay
{
    //constructeur 
    public function __construct()
    {
        //on appelle le constructeur de la classe parent
        //on initialise avec 1 voie et 10Km/h
        parent::__construct(1, 10);
    }


    //méthode pour vérifier si l'objet
    //Vehicle est une instance autorisée

    public function addVehicle(Vehicle $vehicle): void
    {
        // Vérifie si le véhicule est un Bike ou un Skateboard
        if ($vehicle instanceof Bike || $vehicle instanceof Skateboard) {
            $this->currentVehicles[] = $vehicle;
        }
    }
}
