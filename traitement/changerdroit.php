<?php
 include '../connectbdd/connectBDD.php'; 
$iduser=$_POST['iduser'];
$idtype=$_POST['idtype'];
$req=$bdd->prepare("UPDATE dbs296644.User  SET id_typeuser=? WHERE id_user= ?");
$req->execute([$idtype,$iduser]);

header('Location: ../include/admin.php');
?>