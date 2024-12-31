<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Bike extends Vehicle implements LightableInterface
{
    // Implémentation de switchOn() : seulement si la vitesse est > 10 km/h
    public function switchOn(): bool
    {
        return $this->getCurrentSpeed() > 10;
    }

    //retourne toujours false
    public function switchOff(): bool
    {
        return false;
    }
}
