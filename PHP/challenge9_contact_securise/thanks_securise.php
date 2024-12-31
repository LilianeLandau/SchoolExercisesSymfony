<!DOCTYPE html>
<html>

<head>
    <title>Challenge 9 - Thanks</title>
    <meta charset="utf-8" />
</head>

<body>
    <main>
        <h1>Merci de nous avoir contactés !</h1>

        <?php
        //initialisation tableau stockage erreurs
        $errors = [];
        //vérifier si formulaire a été soumis
        if (isset($_POST['send'])) {
            //vérifier si tous les champs sont bien remplis 
            //vérifier champ user_name
            if (empty($_POST['user_name'])) {
                $errors[] = "<p>Le champ nom est obligatoire</p>";
            }
            //vérifier champ user_firstname
            if (empty($_POST['user_firstname'])) {
                $errors[] = "<p>Le champ prénom est obligatoire</p>";
            }
            //vérifier champ user_email non vide
            if (empty($_POST['user_email'])) {
                $errors[] = "<p>Le champ email est obligatoire</p>";
                //vérifier format champ user_email
            } elseif (!filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)) {
                $errors[] = "<p>L'adresse mail indiquée n'a pas le bon format. Merci de saisir une adresse mail valide</p>";
            }
            //vérifier champ user_tel
            if (empty($_POST['user_tel'])) {
                $errors[] = "<p>Le champ téléphone est obligatoire</p>";
                //vérifier format user_tel 
            } elseif (!preg_match("/^[0-9]{10}$/", $_POST['user_tel'])) {
                $errors[] = "<p>Le numéro de téléphone saisi n'est pas valide. Merci de saisir 10 chiffres</p>";
            }
            //vérifier champ sujet
            if (empty($_POST['user_subject'])) {
                $errors[] = "<p>Le champ sujet est obligaoire</p>";
            }
            //vérifier champ message
            if (empty($_POST['user_message'])) {
                $errors[] = "<p>Le champ message est obligatoire</p>";
            }
            //si le tableau $errors est vide
            if (empty($errors)) {
                //alors récupération des données envoyées par POST dans des variables
                //utiliser la fonction htmlspecialchars pour sécuriser le formulaire
                $user_name = htmlspecialchars($_POST['user_name']);
                $user_firstname = htmlspecialchars($_POST['user_firstname']);
                $user_email = htmlspecialchars($_POST['user_email']);
                $user_tel = htmlspecialchars($_POST['user_tel']);
                $user_subject = htmlspecialchars($_POST['user_subject']);
                $user_message = htmlspecialchars($_POST['user_message']);
                //on peut afficher le message de confirmation 
                //utiliser balise <b></b> pour mettre les données envoyées en gras
                echo "<p>Merci <b>$user_firstname $user_name</b> de nous avoir contactés 
                à propos de <b>$user_subject</b></p>";
                echo "<p>Un de nos conseillers vous contactera soit à l'adresse mail <b>$user_email</b> 
                ou par téléphone au numéro <b>$user_tel</b> dans les plus brefs délais pour traiter votre demande :</p>";
                echo "<b>$user_message</b></p>";
            } else {
                //si le tableau $errors n'est pas vide
                //informer l'utilisateur des erreurs
                echo "<p>Il y a des erreurs dans votre saisie. Merci de corriger les champs suivants : </p>";
                foreach ($errors as $error) {
                    echo $error;
                }
            }
        }

        ?>

    </main>
</body>

</html>