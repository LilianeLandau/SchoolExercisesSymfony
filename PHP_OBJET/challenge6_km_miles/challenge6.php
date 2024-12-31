<?php

include_once 'Speedometer.php';

echo "<h1>Tests d'affichage - challenge 6 - nombre de décimales limité à 2 avec la fonction round()</h1>";


echo "<h2>Test d'affichage - convertir 10 Km en Miles - 10 passé en paramètre de la fonction</h2>";

echo Speedometer::convertKmToMiles(10);


echo "<h2>Test d'affichage - convertir 10 Miles en Km - 10 passé en paramètre de la fonction</h2>";
echo Speedometer::convertMilesToKm(10);

echo "<h2>Test d'affichage - convertir 100 Km en Miles - afficher dans une phrase </h2>";
$km = 100;
$miles = Speedometer::convertKmToMiles($km);
echo "$km km valent $miles miles.<br>";



echo "<h2>Test d'affichage - convertir 100 Miles en Km - afficher dans une phrase  </h2>";
$miles = 100;
$km = Speedometer::convertMilesToKm($miles);
echo "$miles miles valent $km km.<br>";
