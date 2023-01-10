<?php

try{
    $mysqli = new PDO("mysql:host=localhost;dbname=nanard;charset=utf8",'root','');
}catch(PDOException $e) { 
    die('Erreur :'.$e->getMessage());}
    $erreur = "";


    if (empty($_POST["mail"])) $erreur = "Le champ mail est obligatoire!";
    elseif (empty($_POST["password"])) $erreur = "Le chanmp mot de passe est obligatoire!";
    else{
        $requete = $mysqli->prepare("select * from loginachat where mail=? and mdp=? limit 1");
        $requete->execute(array($_POST["mail"], $_POST["password"]));
        $user = $requete->fetchAll();
        if (count($user) > 0) {
            
        }else{
            $erreur = "Mauvais login ou mot de passe!";
            }
    }

?>
        Bienvenue <?php echo htmlentities(trim($_SESSION['login'])); ?> !<br />
<html>
<head>

</head>
<body>
<div  class="erreur"><?php  echo  $erreur  ?></div>
<form  name="Inscription"  method="POST"  action="login.php">
<input  type="text"  name="mail"  placeholder="Votre adresse mail"  value=""  /><br  />
<input  type="password"  name="password"  placeholder="Mot de passe"  /><br  />
<input  type="submit"  name="inscrire"  value="Se connecter"  />
<a  href="inscription.php">Inscrivez-vous</a>
</form>
</body>
</html>