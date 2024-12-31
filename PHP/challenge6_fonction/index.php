<!DOCTYPE html>
<html>

<head>
    <title>Challenge 6 - Fonction</title>
    <meta charset="utf-8" />
</head>

<body>
    <main>
        <h1>Fonction Phrase Mystère</h1>
        <h2>Write your secret sentence</h2>

        <?php
        if (isset($_GET['send']) && isset($_GET['phrase1']) && isset($_GET['phrase2'])) {
            $phrase1 = $_GET['phrase1'];
            $phrase2 = $_GET['phrase2'];

            function writeSecretSentence($userInput1, $userInput2): string
            {
                $secret = $userInput1 . " s'incline face à " . $userInput2;
                return $secret;
            }

            echo writeSecretSentence($phrase1,  $phrase2);
        }
        ?>

        <form action="challenge6_fonction.php" role="form" method="get" enctype="multipart/form-data">
            <p><label for="phrase1">Write your first sentence :</label></p>
            <p><input type="text" id="phrase1" name="phrase1" placeholder="write the 1st sentence" value="<?php $phrase1;
                                                                                                            ?>" /></p>
            <p><label for="phrase1">Write your second sentence :</label></p>
            <p><input type="text" id="phrase2" name="phrase2" placeholder="write the 2nd sentence" value="<?php $phrase2;
                                                                                                            ?>" /></p>
            <button type="submit" name="send" value="write">Enter</button>
            <p><a href="challenge6_fonction.php">Retour</a></p>
        </form>
    </main>
</body>

</html>