<?php

//inclure la classe
require 'Car.php';
?>


<!doctype html>
<html>

<head>
    <meta charset="utf-8" />

    <title>Challenge 1 - POO</title>

    <link rel="stylesheet" href="style.css" />

</head>

<body>
    <header>
        <h1>Challenge 1 - POO</h1>
    </header>

    <?php

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









    ?>















</body>

</html>