<?php

class Speedometer
{
    // Constantes pour les facteurs de conversion
    private const KM_TO_MILES_RELATION = 0.621371;
    private const MILES_TO_KM_RELATION = 1.60934;


    //fonction pour convertir les km en miles
    //utiliser round() pour afficher 2 décimales
    public static function convertKmToMiles($km): float
    {
        $miles = $km * self::KM_TO_MILES_RELATION;
        return round($miles, 2);
    }

    //fonction pour convertir les km en miles
    //utiliser round() pour afficher 2 décimales
    public static function convertMilesToKm($miles): float
    {
        $km = $miles * self::MILES_TO_KM_RELATION;
        return round($km, 2);
    }
    /*
    //FONCTIONS DE CONVERSION SANS UTILISATION 
    //DE ROUND POUR LIMITER LE NOMBRE DE DECIMALES
    // Conversion de kilomètres en miles
    public static function convertKmToMiles(float $km): float
    {
        return $km * self::KM_TO_MILES_RELATION;
    }

    // Conversion de miles en kilomètres
    public static function convertMilesToKm(float $miles): float
    {
        return $miles * self::MILES_TO_KM_RELATION;
    }
        */
}
