<?php 
    session_start();
    include '../connectbdd/connectBDD.php';
    $pseudo=$_SESSION['username'];
    $req1=$bdd->prepare("SELECT id_user FROM dbs296644.User WHERE pseudo = ?");
    $req1->execute([$pseudo]);
    $id_user=$req1->fetch();
   
    $id_film=$_GET['id'];
    $req=$bdd->prepare("INSERT INTO dbs296644.favoris SET id_film = ? ,id_user =  ?");
    $req->execute([$id_film,$id_user['id_user']]);
    header('Location: ../catalogue.php');
?>