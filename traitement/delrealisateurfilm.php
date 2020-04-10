<?php 
    include '../connectbdd/connectBDD.php';
    $idRealisateur=$_GET['id'];
    $idfilm=$_POST['idfilm'];
    $req=$bdd->prepare("DELETE FROM dbs296644.Realiser WHERE id_film=$idfilm AND id_realisateur=$idRealisateur");
    $req->execute();
    header('Location: afficherealisateur.php');
?>