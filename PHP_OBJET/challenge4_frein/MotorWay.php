<?php

require_once 'Highway.php';

final class MotorWay extends HighWay
{
    //constructeur 
    public function __construct()
    {
        //on appelle le constructeur de la classe parent
        //on initialise avec 4 voies et 130km/h
        //ces propriétés ont déjà été déclarées dans
        //la classe parent abstraite HighWay
        parent::__construct(4, 130);
    }


    //méthode pour vérifier si l'objet
    //est de type autorisé
    public function addVehicle(Vehicle $vehicle): void
    {
        //dans instanceof :
        //objet à tester à GAUCHE
        //classe à comparer à DROITE
        //question : est-ce que $Vehicle
        //est un objet de type Car 
        //ou alors : est-ce que l'objet $Vehicle
        //est une instance de la classe Car
        //question générale à poser : est-ce que
        //cet objet est une instance de cette classe ?
        //if ($objet instanceof Classe) {
        // L'objet est une instance de Classe (ou d'une sous-classe de Classe)
        //}
        //Vehicle est la classe de base
        //Car hérite de Vehicle
        //mais cet ordre n'intervient pas ici
        //instanceof vérifie un objet particulier
        //ici $Vehicle et non la relation entre classes

        if ($vehicle instanceof Car) {
            //vérifie si le Vehicle est un Car
            $this->currentVehicles[] = $vehicle;
        }
    }
}
