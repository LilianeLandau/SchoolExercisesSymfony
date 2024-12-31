<?php
//les variables de connexion sont sauvegardées 
//dans les constantes
const MYSQL_HOST = 'localhost';
const MYSQL_PORT = 3306;
const MYSQL_NAME = 'donkey_friends';
const MYSQL_USER = 'root';
const MYSQL_PASSWORD = '';



//pour se connecter à la base de données
//instancier le PDO
//se connecter à la base en utilisant les constantes définies
try {
    $mysqlClient = new PDO(
        sprintf('mysql:host=%s;dbname=%s;port=%s;charset=utf8', MYSQL_HOST, MYSQL_NAME, MYSQL_PORT),
        MYSQL_USER,
        MYSQL_PASSWORD
    );
    //s'agissant d'un exercice, permettre l'affichage des erreurs 
    $mysqlClient->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $exception) {
    die('Erreur : ' . $exception->getMessage());
}
