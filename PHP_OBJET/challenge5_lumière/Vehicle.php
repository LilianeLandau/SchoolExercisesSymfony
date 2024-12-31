<?php

class Vehicle
{

    private int $nbWheels = 4; //initialiser à 4
    private int $currentSpeed = 0; // Initialiser à 0
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel = 5; // Initialiser à 5
    //si energyLevel initialisé à 0, message d'erreur, car ne démarre pas


    //METHODE CONSTRUCTEUR
    //on instancie avec color, nbSeats, energy
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }


    //METHODE FORWARD 
    //UNIQUEMENT SI LE NIVEAU D'ENERGIE EST >0
    //ALORS LA VITESSE EST INITIALISEE A 5
    public function forward(): string
    {
        // On vérifie. On avance uniquement si  le niveau d'énergie est suffisant
        if ($this->energyLevel <= 0) {
            return "<p>Car cannot advance because it has not enough energy</p>";
        }
        //si le niveau d'énergie est suffisant, la vitesse est inilialisée à 5
        $this->currentSpeed = 5;
        return "<p>Car is advancing now</p>";
    }

    //METHODE BRAKE
    //LA VOITURE NE FREINE QUE SI ELLE A DEMARRE
    //DONC SI LE NIVEAU D'ENERGIE EST >0
    //SI LA VOITURE A BIEN DEMARRE ALORS ELLE FREINE 
    //SI LA VITESSE EST DE 5 ALORS AFFICHAGE 5 FOIS "voiture ralentit et freine"
    //UNE FOIS LA BOUCLE WHILE TERMINEE, AFFICHER "voiture arrêtée"
    public function brake(): string
    {
        // Vérification : Freiner uniquement si le niveau d'énergie est suffisant
        if ($this->energyLevel <= 0) {
            return "<p>Car cannot brake because it has not started yet</p>";
        }

        $message = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $message .= "<p>Car is slowing and breaking</p>";
        }
        $message .= "<p>Car has stopped</p>";
        return $message;
    }

    //METHODE START
    //LA VOITURE NE DEMARRE QUE SI ELLE A ASSEZ D'ENERGIE
    public function start(): string
    {
        // Vérification du niveau d'énergie
        if ($this->energyLevel > 0) {
            return "<p>Car has started</p>";
        } else {
            return "<p>Sorry, the car has not enough energy to start</p>";
        }
    }

    //GETTERS ET SETTERS

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed($currentSpeed): self
    {
        $this->currentSpeed = $currentSpeed;
        return $this;
    }


    public function getColor(): string
    {
        return $this->color;
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    // Méthode pour définir le niveau d'énergie
    public function setEnergyLevel(int $level): void
    {
        $this->energyLevel = $level;
    }
}
