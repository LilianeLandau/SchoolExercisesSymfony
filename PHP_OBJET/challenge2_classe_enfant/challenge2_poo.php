<?php

//inclure la classe
require 'Car.php';
require 'Truck.php';
?>


<!doctype html>
<html>

<head>
    <meta charset="utf-8" />

    <title>Challenge 2 - POO</title>

    <link rel="stylesheet" href="style.css" />

</head>

<body>
    <header>
        <h1>Challenge 2 - POO</h1>
    </header>

    <?php

    echo "<h2>Var_dump de la nouvelle instance TRUCK</h2>";
    $truck = new Truck("white", 3, "diesel", 100);
    $truck->setLoad(50);
    echo $truck->isFilling(); // Affiche "in filling"
    $truck->setLoad(500);
    echo $truck->isFilling(); // Affiche "is full"

    echo $truck->start();
    echo $truck->brake();
    echo $truck->forward();

    echo "<h2>Var_dump de la nouvelle instance TRUCK2</h2>";
    $truck2 = new Truck("red", 4, "gas", 60);
    $truck2->setLoad(80);
    echo $truck2->isFilling();
    echo $truck2->isFillingHowMuch();

    $truck2->setLoad(10);
    echo $truck2->isFilling();

    echo $truck2->isFillingHowMuch();

    echo $truck2->start();
    echo $truck2->brake();
    echo $truck2->forward();



    /*

    // instancier la classe pour avoir une JAGUAR
    $jaguar = new Car("blue", 4, "gas");

    echo "<h2>Var_dump de la nouvelle instance JAGUAR</h2>";
    var_dump($jaguar);

    echo "<h3>Var_dump de la nouvelle instance avec la méthode start()</h3>";
    echo $jaguar->start();
    var_dump($jaguar);


    echo "<h3>Var_dump de la nouvelle instance avec la méthode forward()</h3>";
    echo $jaguar->forward();
    var_dump($jaguar);


    echo "<h3>Var_dump de la nouvelle instance avec la méthode brake()</h3>";
    echo $jaguar->brake();
    var_dump($jaguar);





    // instancier la classe pour avoir une MERCEDES
    $mercedes = new Car("red", 2, "gasoline");

    echo "<h2>Var_dump de la nouvelle instance MERCEDES</h2>";
    var_dump($mercedes);

    echo "<h3>Var_dump de la nouvelle instance avec la méthode start()</h3>";
    echo $jaguar->start();
    var_dump($mercedes);


    echo "<h3>Var_dump de la nouvelle instance avec la méthode forward()</h3>";
    echo $jaguar->forward();
    var_dump($mercedes);


    echo "<h3>Var_dump de la nouvelle instance avec la méthode brake()</h3>";
    echo $jaguar->brake();
    var_dump($mercedes);

*/







    ?>















</body>

</html>