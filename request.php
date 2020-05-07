<?php
session_start();
?>
<!DOCTYPE html>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/save.css" />
<html>
<head>
    <title>recup</title>
</head>

<body>
    <?php
        $genre = htmlspecialchars($_POST['genre']);
        $name = htmlspecialchars($_POST['prenom']);
        $reason = htmlspecialchars($_POST['raison']);
        $sport = htmlspecialchars($_POST['sport']);
        if (!empty($reason) && !empty($name) && $reason != '' && $name != '' )
        {
        $bdd = new PDO('mysql:host=localhost;dbname=ses;charset=utf8', 'your_username', 'your_password');
        $bdd ->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $req = $bdd->prepare('INSERT INTO ses(nom, RAISON, sport, genre) VALUES(:nom, :possesseur, :sport, :genre)');
        $req->execute(array(
            'nom' => $name,
            'sport' => $sport,
            'possesseur' => $reason,
            'genre' => $genre,
        ));
        ?>
        <script>
        window.alert('Votre participation a bien été enregistrée')
        </script>
        <form action="index.php" method="post">
        <input type="submit" value="retourner à l'accueil" />       
        </form>
       <?php
       }
       else 
       {
        echo('non valide');
        ?>
        <form action="index.php" method="post">
        <input type="submit" value="retourner à l'accueil" />
        </form>
        <?php
       }
    ?>
</body>
</html>