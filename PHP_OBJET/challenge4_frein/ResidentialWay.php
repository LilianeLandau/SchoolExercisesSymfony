<?php

require_once 'Highway.php';

final class ResidentialWay extends HighWay
{
    //constructeur 
    public function __construct()
    {
        //on appelle le constructeur de la classe parent
        //on initialise avec 2 voies et 50Km/h
        parent::__construct(2, 50);
    }


    //méthode pour vérifier si l'objet
    //Vehicle est une instance autorisée
    public function addVehicle(Vehicle $vehicle): void
    {
        if ($vehicle instanceof Car) {
            //vérifie si le Vehicle est un Car
            $this->currentVehicles[] = $vehicle;
        }
    }
}
