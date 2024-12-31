<?php
//un camion e des propriétés spécifiques 
//•	sa capacité de stockage.
//•	son chargement, qui est initialement à zéro.
//La capacité de stockage doit être saisie au moment 
//de l’Instanciation de l’objet, en plus de la couleur,
// du nombre de sièges et de l’énergie.
//Il a également une méthode qui permet de savoir s’il 
//est plein ou non. Celle-ci retourne in filling quand 
//il n’est pas plein et full quand il est plein.

require_once 'Car.php';
class Truck extends Car
{

    //stock est la capacité du camion
    private int $stock;

    //load est le chargement du camion
    private int $load = 0;

    // Constructeur
    public function __construct(string $color, int $nbSeats, string $energy, int $stock)
    {
        //ici on appelle le constructeur de la classe parent pour 
        //les 3 paramètres
        parent::__construct($color, $nbSeats, $energy);

        // Initialise les propriétés spécifiques à Truck
        //la propriété load est initialisée à 0
        $this->stock = $stock;
    }
    //GETTERS et SETTERS
    public function getStock(): int
    {
        return $this->stock;
    }
    public function setStock(int $stock): self
    {
        $this->stock = $stock;
        return $this;
    }

    public function getLoad(): int
    {
        return $this->load;
    }

    public function setLoad(int $load): self
    {
        $this->load = $load;
        return $this;
    }

    // Méthode pour vérifier si le camion est plein ou non
    public function isFilling(): string
    {
        //les propriétés $load et $stock sont définies dans cette classe
        //pour accéder à ces propriétés et pouvoir les comparer
        //il faut faire appel à $this-> pour indiquer que je veux 
        //la propriété de cette instance

        //$this->load est la quantité de marchandise dans le camion
        // $this->stock est la capacité du camion
        if ($this->load >= $this->stock) {
            return "<p>It is full</p>";
        }
        return "<p>It is in filling</p>";
    }
    // Méthode pour vérifier si le camion est plein ou non 
    //et calculer la différence entre la capacité et la quantité de marchandise
    //afficher si on peut ou non charger
    public function isFillingHowMuch(): string
    {
        //les propriétés $load et $stock sont définies dans cette classe
        //pour accéder à ces propriétés et pouvoir les comparer
        //il faut faire appel à $this-> pour indiquer que je veux 
        //la propriété de cette instance

        $difference = 0;
        //différence = chargement load - capacité stock
        $difference = $this->load - $this->stock;
        $loadTruck = $this->load;
        $stockTruck = $this->stock;
        //$this->load est la quantité de marchandise dans le camion
        // $this->stock est la capacité du camion
        if ($this->load >= $this->stock and $difference < $this->stock) {
            return "<p>Capacity is " . $stockTruck .   " the quantity of goods is  " . $loadTruck  .  " it remains NO place for " . $difference . " kg</p>";
        }
        if ($this->stock >= $this->load and $difference < $this->stock) {
            return "<p>Capacity is " . $stockTruck .   " the quantity of goods is  " . $loadTruck  .  " it remains place for " . -$difference . " kg</p>";
        }
    }
}
