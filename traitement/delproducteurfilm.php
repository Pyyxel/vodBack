<?php 
    include '../connectbdd/connectBDD.php';
    $idProducteur=$_GET['id'];
    $idfilm=$_POST['idfilm'];
    $req=$bdd->prepare("DELETE FROM dbs296644.Produire WHERE id_film=$idfilm AND id_producteur=$idProducteur");
    $req->execute();
    header('Location: afficheproducteur.php');
?>