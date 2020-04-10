<?php 


include '../connectbdd/connectBDD.php'; 

$idFilm=$_POST['idfilm'];
$idrealisateur=$_GET['id'];

$req=$bdd->prepare("INSERT INTO dbs296644.Realiser SET id_film=? , id_realisateur=?");
$req->execute([$idFilm,$idrealisateur]);

header('Location: afficherealisateur.php');

?>

