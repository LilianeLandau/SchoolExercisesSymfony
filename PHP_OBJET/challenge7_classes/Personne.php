<?php
class Personne
{
    private string $lastname;
    private string $firstname;
    private string $address;

    private DateTime $birthdate;

    // Constructeur
    public function __construct(string $lastname, string $firstname, string $address, string $birthdate)
    {
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->address = $address;
        //initialiser la date de naissance avec l'objet DateTime
        $this->birthdate = new DateTime($birthdate);
    }

    //méthode pour calculer âge de la personne 
    //et l'afficher sous form d'un entier
    public function getAge(): int
    {
        //$now indique la date actuelle
        //crée un objet DateTime pour la date actuelle
        //on pourra ensuite comparer $now à $birthdate
        $now = new DateTime();

        //on utilise une fonction native de php date_diff()
        //qui calcule la différence entre deux dates
        //$this->birthdate appelle la date de naissance
        //$now représente la date actuelle
        $age = date_diff($this->birthdate, $now);

        //la fonction date_diff() retourne un OBJET
        //de type dateInterval qui contient l'an, le mois,
        //le jour, heure, minute; seconde...
        //on ne peut pas écrire directement return->$age
        //car $age est un objet et non une valeur
        //on doit préciser que dans l'objet $age, 
        //on veut uniquement la valeur de l'année
        return $age->y;
    }

    //méthode pour afficher les informations de la personne
    public function displayPersonne(): string
    {
        //initialiser une variable pour stocker les informations
        $display = "";
        $display .= "<p>Nom : $this->lastname </p>";
        $display .= "<p>Prénom : $this->firstname </p>";
        $display .= "<p>Adresse : $this->address</p>";
        //utiliser format() pour afficher correctement la date
        //au format français
        $display .= "<p>Date de naissance :" . $this->birthdate->format('d/m/Y');
        "</p>";
        //appel de la méthode getAge() pour afficher l'âge
        $display .= "<p>Age : " . $this->getAge() . " ans </p>";

        return $display;
    }

    //méthode pour modifier l'adresse
    public function setAddress(string $newAdress): void
    {
        $this->address = $newAdress;
    }


    //    *** VARIANTE  ***
    //méthode pour modifier l'adresse
    //ICI RETURN SELF ET RETURN $THIS
    public function setAddress1(string $newAdress): self
    {
        $this->address = $newAdress;
        return $this;
    }
}
