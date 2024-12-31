<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Formulaire de Contact</title>
</head>

<body>
    <main>

        <?php
        //var_dump($_POST);
        ?>

        <h1>Formulaire de contact</h1>

        <form action="thanks.php" method="post">
            <div>
                <label for="name">Nom :</label>
                <input type="text" id="name" name="user_name">
            </div>
            <div>
                <label for="prenom">Prénom :</label>
                <input type="text" id="prenom" name="user_firstname">
            </div>
            <div>
                <label for=" email">Courriel :</label>
                <input type="email" id="email" name="user_email">
            </div>
            <div>
                <label for="user_tel">Téléphone :</label>
                <input type="tel" id="user_tel" name="user_tel">
            </div>
            <div>
                <select name="user_subject">
                    <option value="">Choisir votre sujet dans la liste</option>
                    <option value="php">PHP</option>
                    <option value="html">HTML</option>
                    <option value="css">CSS</option>
                    <option value="js">Javascript</option>
                    <option value="autre">Autre</option>
                </select>
            </div>
            <div>
                <label for="message">Message :</label>
                <textarea id="message" name="user_message"></textarea>
            </div>
            <div class="button">
                <button name="send" type="submit">Envoyer votre message</button>
            </div>
        </form>




    </main>

</body>

</html>