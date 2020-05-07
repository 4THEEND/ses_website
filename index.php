<!DOCTYPE html>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/save.css" />
<html>
<title>sondage</title>
<body>
   <h1>Sondage SES</h1> 
   <p>
   Veuillez remplir le formulaire ( ne pas mettre de smileys !!!)</br></br></br>
        <form action="request.php" method="post">
        <fieldset>
        <legend>Les questions</legend>
        <label for="prenom">1) Votre prénom</label></br>
        <input type="text" name="prenom" required autofocus/></br></br>
        <label for="genre">Vous êtes ?</label></br>
        <select name="genre">
           <option value="femme">femme</option>
           <option value="homme">homme</option>
        </select></br></br>
        <label for="sport">2) Le sport ou loisir que vous faites (musique, sport, art ...)</label></br>
        <input type="text" name="sport" required/></br></br>
        <label for="raison">3) La raison pour laquelle vous faites ce loisir</label></br>
        <textarea name="raison" raw="200" cols="100" required></textarea></br></br>
       <input type="submit" value="Valider" />
        </fieldset>
    </p>
    <p class="fin">
    Ces données sont confidentielles et le traitement est anonyme.
    </p>
    </form>
</body>

</html>