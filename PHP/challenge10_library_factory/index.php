<?php
// On prolonge la session
session_start();

// On teste si la variable de session existe et contient une valeur
if (empty($_SESSION['login'])) {
    // Si la session n'existe pas, demander à se connecter
    echo '<h3 class="text-danger">vous devez vous connecter pour commander</h3>';
    // sinon afficher bienvenue
} else {
    echo '<h3 class="text-success">Vous êtes connecté. Bienvenue ', $_SESSION['login'] . '</h3>';
}
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
        <?php if (isset($_SESSION['login'])) echo "<li class='nav-item'>
            <a class='nav-link' href='cart.php'>Panier</a>
        </li>"; ?>
    </ul>
    <h1>Library Factory - Bienvenue </h1>

    <div class="container my-5">
        <h2>Livres disponibles</h2>
        <div class="col-lg-8 px-0">

            <?php
            $books = [
                "Dr. Jekyll et M. Hyde" => 1886,
                "L'Île au trésor" => 1883,
                "Voyage avec un âne dans les Cévennes" => 1879,
            ];
            asort($books);
            //clé =title
            //valeur=year
            foreach ($books as $title => $year) {
                // Afficher le titre et l'année
                echo "<p>" . $year . " " . $title;


                // Vérifier si utilisateur connecté 
                if (isset($_SESSION['login'])) {
                    //le livre L'Île au trésor s'affiche mal dans le panier (affichage uniquement L')
                    //utiliser urlencode
                    $encodeTitle = urlencode($title);

                    //Alors afficher le lien panier si utilisateur connecté
                    echo " <a href='cart.php?year=$year&title=$encodeTitle' class='btn btn-primary btn-sm'>Ajouter au panier</a>";
                }
                echo "</p>"; // Fermer paragraphe
            }
            ?>




        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="main.js"></script>
</body>

</html>