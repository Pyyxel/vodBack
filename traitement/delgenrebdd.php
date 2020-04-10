<?php
$idgenre=$_POST['idgenre'];
include '../connectbdd/connectBDD.php';
$req=$bdd->prepare("DELETE FROM dbs296644.Genre WHERE id_genre=$idgenre");
$req->execute();
header('Location: affichecinema.php');
?>