<?php
// On appelle la session
session_start();

//effacer les variables de session
//ne ferme pas la session
//ne supprime pas la session sur le serveur
//la session reste active
session_unset();

// On détruit la session
//on efface les variables de session
//en plus on détruit la session => session supprimée sur serveur
session_destroy();

//plus bas dans la page on informe l'utilisateur qu'il est déconnecté
//on lui propose un lien vers le login

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

    <h1>LOGOUT - page de déconnexion </h1>

    <div class="container my-5">
        <?php
        echo "<p>Vous êtes bien déconnecté</p>";

        echo '<p> Pour vous connecter à nouveau : <a href="login.php"   class="btn btn-primary btn-sm">LOGIN</a></p>';
        ?>
    </div>

</body>

</html>