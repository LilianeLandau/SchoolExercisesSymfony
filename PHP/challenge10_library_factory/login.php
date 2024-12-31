<<?php
    //ouverture session
    session_start();

    //initialiser message erreur
    $errorMessage = '';

    // Test de l'envoi du formulaire
    if (!empty($_POST)) {
        // Vérifier si un identifiant est transmis
        //par choix, pas fixé le login dans une constante
        //il suffit que l'utilisateur saisisse un texte pour se connecter
        //par choix, pas de tests supplémentaires pour vérifier la saisie de l'utilisateur
        if (!empty($_POST['login'])) {
            // On enregistre l'identifiant transmis 
            $_SESSION['login'] = $_POST['login'];

            //Initialisation du panier 
            //le panier est un tableau
            $_SESSION['panier'] = array();

            // On redirige vers le fichier index.php
            header('Location: index.php');
        } else {
            $errorMessage = 'Il est obligatoire de saisir un identifiant';
        }
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

        <h1>LOGIN - page de connexion </h1>


        <?php
        // Rencontre-t-on une erreur ?
        if (!empty($errorMessage)) {
            echo '<p>' . $errorMessage . '</p>';
        }
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <div class="form-group form-control-lg">
                <label for="login">LOGIN</label>
                <input type="text" name="login" class="form-control" id="login" placeholder="Saisissez votre login">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </body>

    </html>