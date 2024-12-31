<?php
require_once 'Personne.php';

echo "<h1>Tests Affichage Challenge 7</h1>";

echo "<h2>Création d'une personne - affichage de ses informations</h2>";

// Création d'une personne
$personne1 = new Personne('Jean', 'Dupont', 'Rue des Oliviers 75008 Paris', '1985-05-15');
echo $personne1->displayPersonne();



echo "<h2>Modification de l'adresse avec la fonction setAddress() -  affichage de ses informations</h2>";
$personne1->setAddress('nouvelle adresse avec setAddress()');
echo $personne1->displayPersonne();



echo "<h2>Modification de l'adresse avec la fonction setAddress1() -  affichage de ses informations</h2>";
$personne1->setAddress1('nouvelle adresse avec cette fois-ci setAddress1()');
echo $personne1->displayPersonne();
