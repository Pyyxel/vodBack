<?php 
    include '../connectbdd/connectBDD.php'; 
    $idimg=$_GET['id'];
    
    $req=$bdd->prepare("DELETE FROM dbs296644.affiche WHERE id_affiche=$idimg");
    $req->execute();
    header('Location: affichecinema.php');


?>