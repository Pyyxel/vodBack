<?php 
include '../connectbdd/connectBDD.php';
$idfilm=$_GET['id'];
$idgenre=$_POST['idgenre'];
$req=$bdd->prepare("DELETE FROM dbs296644.genrer WHERE id_film=$idfilm AND id_genre=$idgenre");
$req->execute();
header('Location: affichecinema.php');
?>