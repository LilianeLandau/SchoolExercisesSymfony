<?php
require_once('connect.php');
//initialisation tableau stockage erreurs
$errors = [];
//vérifier si formulaire a été soumis
if (isset($_POST['send'])) {
    //vérifier si tous les champs sont bien remplis 
    //vérifier champ existe
    if (empty($_POST['firstname'])) {
        $errors[] = "<p class='text-danger'>Le champ prénom est obligatoire</p>";
    }
    //vérifier longueur champ 
    if (strlen($_POST['firstname']) > 45) {
        $errors[] = "<p class='text-danger'>Le champ prénom doit compter moins de 45 caractères </p>";
    }
    //imposer une saisie de lettres uniquement
    if (!preg_match("/^[\p{L}]+$/u", $_POST['firstname'])) {
        $errors[] = "<p class='text-danger'>Le prénom ne doit contenir que des lettres, (y compris les lettres accentuées)</p>";
    }

    //vérifier champ existe
    if (empty($_POST['lastname'])) {
        $errors[] = "<p class='text-danger'>Le champ nom est obligatoire</p>";
    }
    //vérifier longueur champ 
    if (strlen($_POST['lastname']) > 45) {
        $errors[] = "<p class='text-danger'>Le champ nom doit compter moins de 45 caractères </p>";
    }
    //imposer une saisie de lettres uniquement
    //imposer une saisie de lettres uniquement
    if (!preg_match("/^[\p{L}]+$/u", $_POST['firstname'])) {
        $errors[] = "<p class='text-danger'>Le nom ne doit contenir que des lettres, (y compris les lettres accentuées)</p>";
    }
    //si le tableau $errors est vide
    if (empty($errors)) {

        // Récupérer les données envoyées par le formulaire
        //utiliser trim() et htmlspecialchars() avant le insert
        $firstname = htmlspecialchars(trim($_POST['firstname']));
        $lastname = htmlspecialchars(trim($_POST['lastname']));


        //insérer les données en base
        $query = 'INSERT INTO friend (firstname, lastname) VALUES (:firstname, :lastname)';
        $statement = $mysqlClient->prepare($query);
        //la méthode prepare() retourne un odbjet PDOStatement
        //sur l'objet PDOStatment on utilise la méthode bindValue()
        //qui permet de relier un placeholder à une valeur,
        //comme par exemple :firstname à  $firstname
        //la méthode prend un 3ème paramètre optionnel (une constante de la classe PDO)
        //permettant de restreindre le type de valeur qui prendra la place
        //du placeholder (par exemple : uniquement un string, un integer, etc...)

        $statement->bindValue(':firstname', $firstname, PDO::PARAM_STR);
        $statement->bindValue(':lastname', $lastname, PDO::PARAM_STR);

        //pour exécuter la requête préparée il faut utiliser
        //la méthode execute() de l'objet PDOStatement
        //IMPORTANT : NE PAS CONFONDRE AVEC LA METHODE exec()  !
        $statement->execute();
        // On redirige vers le fichier index.php
        //cela évite un enregistrement en double
        header('Location: index.php');
        //on termine l'action une fois l'utilisateur dirigé vers index
        exit();
    } else {
        //si le tableau $errors n'est pas vide
        //informer l'utilisateur des erreurs
        echo "<p class='text-danger'>Il y a des erreurs dans votre saisie. Merci de corriger les champs suivants : </p>";
        foreach ($errors as $error) {
            echo $error;
        }
    }
}

?>


<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Friends</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>

<body>


    <main class="container-fluid">
        <h1>Friends </h1>
        <div class="container-fluid  mt-4">
            <h2>Insert a new friend</h2>
            <form action="index.php" method="post">
                <div class="form-group">
                    <label for="firstname">First Name</label>
                    <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Enter first name" required>
                </div>
                <div class="form-group">
                    <label for="lastname">Last name</label>
                    <input type="text" name="lastname" class="form-control" id="lastname" placeholder="enter last name" required>
                </div>
                <button name="send" type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>


        <div class="container-fluid mt-4">
            <h2>List of friends</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Firstname</th>
                        <th scope="col">Lastname</th>
                    </tr>
                </thead>
                <tbody></tbody>
                <?php
                //connexion BDD et affichage
                //demander tout le contenu de la table friend
                //ordonner le id inverse, afin que la dernière insertion 
                //soit immédiatement visible en haut du tableau
                $sqlQueryFriends = 'SELECT * FROM friend ORDER by id DESC';
                //prepare la demande de données
                $friendsStatement = $mysqlClient->prepare($sqlQueryFriends);
                //exécute la demande de données
                $friendsStatement->execute();
                //affiche les données demandées sous forme d'objet
                $friends = $friendsStatement->fetchAll(PDO::FETCH_OBJ);
                //boucle foreach pour afficher les données dans une table
                foreach ($friends as $friend) {
                    echo "<tr><th>" . htmlspecialchars($friend->id) . '</th><td>' . htmlspecialchars($friend->firstname) . ' </td><td>' . htmlspecialchars($friend->lastname) . "</td></tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="main.js"></script>
</body>

</html>