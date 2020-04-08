
<?php 

include '../connectbdd/connectBDD.php'; 

$del=$_GET['id'];
$req=$bdd->prepare("DELETE FROM dbs296644.Jouer WHERE id_acteur=$del");
$req->execute();

$req=$bdd->prepare("DELETE FROM dbs296644.Acteur WHERE id_acteur=$del");
$req->execute();    
header('Location: afficheacteur.php');




?>