<!DOCTYPE html>
<html>

<head>
    <title>Challenge 8 - Thanks</title>
    <meta charset="utf-8" />
</head>

<body>
    <main>
        <h1>Merci de nous avoir contactés !</h1>

        <?php
        //Cette page reçoit les données du formulaire challenge8_contact.php
        //vérifications : l'utiisateur a-t-il cliqué sur envoi pour transmettre le formulaire ? Les champs du formulaires existent-ils ? 
        if (
            isset($_POST['send']) && isset($_POST['user_name']) && isset($_POST['user_firstname'])
            && isset($_POST['user_email']) && isset($_POST['user_tel']) && isset($_POST['user_subject'])
            && isset($_POST['user_message'])
        ) {
            //récupération des données envoyées par POST dans des variables
            $user_name = $_POST['user_name'];
            $user_firstname = $_POST['user_firstname'];
            $user_email = $_POST['user_email'];
            $user_tel = $_POST['user_tel'];
            $user_subject = $_POST['user_subject'];
            $user_message = $_POST['user_message'];

            //affichage des données transmises
            //utilisation de htmlspecialchars() pour sécuriser l'affichage des données
            //affichage des données transmises dans les balises <b></b> pour mettre en gras et faciliter la lecture
            echo "<p>Merci <b>" . htmlspecialchars($user_firstname) . " " . htmlspecialchars($user_name) . "</b> de nous avoir contactés 
            à propos de <b>" . htmlspecialchars($user_subject) . ".</b></p>";

            echo "<p>Un de nos conseillers vous contactera soit à l'adresse mail <b>" . htmlspecialchars($user_email) . " 
           </b> ou par téléphone au numéro <b>" . htmlspecialchars($user_tel) . "</b> dans les plus brefs délais pour traiter votre demande : 
            <b>" . $user_message . "</b></p>";
        } else {
            echo "<p>Nous sommes navrés. Il semble qu'un souci se soit produit. Merci d'essayer à nouveau.</p>";
        }


        ?>

    </main>
</body>

</html>