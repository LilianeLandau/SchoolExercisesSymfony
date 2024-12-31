<?php
// On prolonge la session
session_start();

//ajout livre au panier
if (!empty($_GET['title']) && (!empty($_GET['year']))) {

    if (!isset($_SESSION['panier'])) {
        $_SESSION['panier'] = array();
    }
    $_SESSION['panier']['title'] = $_GET['title'];
    $_SESSION['panier']['year'] = $_GET['year'];
}
//var_dump($_SESSION['panier']);
?>


<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Library Factory</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active" href="index.php">Library Factory</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="cart.php">Panier</a>
        </li>
    </ul>

    <h1>Library Factory - Votre panier d'achat</h1>

    <div class="container my-5">
        <h2>Votre panier d'achat contient : </h2>

        <?php
        //si un livre a bien été choisi
        if (!empty($_GET['title']) && (!empty($_GET['year']))) {
            // afficher le livre, utiliser <b></b> pour mettre le résultat en exergue
            echo "<p>Le livre  <b>" . $_GET['title'] . "</b>  publié en  <b>" .  $_GET['year'] . "</b></p>";
        } else {
            echo "<p>Le panier est vide</p>";
        }

        ?>

    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="main.js"></script>
</body>

</html>