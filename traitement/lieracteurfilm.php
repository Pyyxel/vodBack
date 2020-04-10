<?php 


include '../connectbdd/connectBDD.php'; 

$idFilm=$_POST['idfilm'];
$idActeur=$_GET['id'];

$req=$bdd->prepare("INSERT INTO dbs296644.Jouer SET id_film=? , id_Acteur=?");
$req->execute([$idFilm,$idActeur]);

header('Location: afficheacteur.php');

?>

