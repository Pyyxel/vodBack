<?php 
    include '../connectbdd/connectBDD.php';
    $idacteur=$_GET['id'];
    $idfilm=$_POST['idgenre'];
    $req=$bdd->prepare("DELETE FROM dbs296644.Jouer WHERE id_film=$idfilm AND id_acteur=$idacteur");
    $req->execute();
    header('Location: afficheacteur.php');
?>