
<?php 

include '../connectbdd/connectBDD.php'; 

$del=$_GET['id'];
$req=$bdd->prepare("DELETE FROM dbs296644.Realiser WHERE id_realisateur=$del");
$req->execute();

$req=$bdd->prepare("DELETE FROM dbs296644.Realisateur WHERE id_realisateur=$del");
$req->execute();    
header('Location: afficherealisateur.php');




?>