<?php

abstract class HighWay
{
    //PROPRIETES EN PROTECTED 
    //ACCESSIBLES DANS LA CLASSE ABSTRAITE
    //ET DANS LES CLASSES QUI EN HERITENT

    //initialiser le tableau vide
    protected array $currentVehicles = [];
    protected int $nbLane;
    protected int $maxSpeed;

    //METHODE CONSTRUCTEUR
    public function __construct(int $nbLane, int $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    //GETTERS ET SETTERS
    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles(array $currentVehicles): self
    {
        $this->currentVehicles = $currentVehicles;
        return $this;
    }
    public function getNbLane(): int
    {
        return $this->nbLane;
    }
    public function setNbLane(int $nbLane): self
    {
        $this->nbLane = $nbLane;
        return $this;
    }
    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }
    public function setMaxSpeed(int $maxSpeed): self
    {
        $this->maxSpeed = $maxSpeed;
        return $this;
    }
    //METHODE ABSTRAITE
    //les détails seront précisés dans les classes finales
    abstract public function addVehicle(Vehicle $vehicle): void;
}
