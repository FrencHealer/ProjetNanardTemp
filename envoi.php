<?php
session_start();
try{
    $mysqli = new PDO("mysql:host=localhost;dbname=dbnanard;charset=utf8",'root','');
}catch(PDOException $e) { 
    die('Erreur :'.$e->getMessage());}
    $erreur = '';
    $requete = $mysqli->prepare("select ID from loginachat where mail=? and mdp=? limit 1");
    $requete->execute(array($_SESSION["login"], $_SESSION["password"]));
    $user = $requete->fetchAll();
    #print_r($user[0]['ID']);


        $my_Insert_Statement = $mysqli->prepare("INSERT INTO forumtable (Message, ID_Messager) VALUES (?,?)");
        $tab = array($_POST["messageEnvoi"],$user[0]['ID']);
        $my_Insert_Statement->execute($tab);
        header('Location: forum.php');
        exit();

?>

