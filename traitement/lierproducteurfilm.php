<?php 


include '../connectbdd/connectBDD.php'; 

$idFilm=$_POST['idfilm'];
$idProducteur=$_GET['id'];

$req=$bdd->prepare("INSERT INTO dbs296644.Produire SET id_film=? , id_producteur=?");
$req->execute([$idFilm,$idProducteur]);

header('Location: afficheproducteur.php');

?>

