<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Car extends Vehicle implements LightableInterface
{
    //par défaut le frein à main est activé
    private bool $hasParkBrake = true;


    //méthode pour modifier le frein à main
    //selon le paramètre qui sera passé en argument
    //true pour activer le frein à main
    //false pour désactiver le frein à main
    public function setParkBrake(bool $hasParkBrake): self
    {
        $this->hasParkBrake = $hasParkBrake;
        return $this;
    }

    //méthode pour démarrer le véhicule
    //et afficher une erreur si le frein à main est activé
    public function startCar(): void
    {
        if ($this->hasParkBrake) {
            //une classe dédiée aux exceptions de type Brake
            //est créee sur la page d'affichage
            throw new BrakeException("Le frein à main est activé. Vous ne pouvez pas démarrer.");
        }
    }

    //retourne toujours true
    public function switchOn(): bool
    {
        return true;
    }
    //retourne toujours false
    public function switchOff(): bool
    {
        return false;
    }
}
