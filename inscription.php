<?php

try{
    $mysqli = new PDO("mysql:host=localhost;dbname=nanard;charset=utf8",'root','');
}catch(PDOException $e) { 
    die('Erreur :'.$e->getMessage());}
    $erreur = '';


    if (empty($_POST["mail"])) $erreur = "Le champ mail est obligatoire!";
    elseif (empty($_POST["pseudo"])) $erreur = "Le champ pseudo est obligatoire!";
    elseif (empty($_POST["password"])) $erreur = "Le champ mot de passe est obligatoire!";
    elseif ($_POST["password"] != $_POST["passconf"]) $erreur = "Mots de passe differents!";
    else{
        $my_Insert_Statement = $mysqli->prepare("INSERT INTO loginachat (mail, pseudo, mdp) VALUES (?,?,?)");
        $tab = array($_POST["mail"],$_POST["pseudo"],$_POST["password"]);
        if ($my_Insert_Statement->execute($tab)) {
            echo "Nouveau enregistrement créé avec succès";
        } else {
            echo "Impossible de créer l'enregistrement";
        }
    }

?>

<html>
<head>

</head>
<body>
<div  class="erreur"><?php  echo  $erreur  ?></div>
<form  name="Inscription"  method="POST"  action="inscription.php">
<input  type="text"  name="mail"  placeholder="Votre adresse mail"  value=""  /><br  />
<input  type="text"  name="pseudo"  placeholder="Votre Pseudo"  value=""  /><br  />
<input  type="password"  name="password"  placeholder="Mot de passe"  /><br  />
<input  type="password"  name="passconf"  placeholder="Confirmer votre Mot de passe"  /><br  />
<input  type="submit"  name="inscrire"  value="S'inscrire"  />
<a  href="login.php">Deja un compte</a>
</form>
</body>
</html>
