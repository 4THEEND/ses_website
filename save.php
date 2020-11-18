<!DOCTYPE html>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/save.css" />
<html>

<head>
    <TITle>view</TITle>
</head>

<body>
    <?php
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=ses;charset=utf8', 'your_username', 'your_password');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $reponse = $bdd->query('SELECT nom, RAISON FROM ses');
    while ($donnees = $reponse->fetch()) {
        ?>

        <p>

            <?php echo $donnees['nom']; ?> :<br />
            <?php echo $donnees['RAISON']; ?>
        </p>

    <?php

    }


    $reponse->closeCursor(); // Termine le traitement de la requête

    ?>
</body>

</html>