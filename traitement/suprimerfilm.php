
<?php 

    include '../connectbdd/connectBDD.php'; 

    $del=$_GET['id'];
    $req=$bdd->prepare("DELETE FROM dbs296644.Jouer WHERE id_film=$del");
    $req->execute();
    $req=$bdd->prepare("DELETE FROM dbs296644.genrer WHERE id_film=$del");
    $req->execute();
    $req=$bdd->prepare("DELETE FROM dbs296644.Realiser WHERE id_film=$del");
    $req->execute();
    $req=$bdd->prepare("DELETE FROM dbs296644.Produire WHERE id_film=$del");
    $req->execute();
    $req=$bdd->prepare("DELETE FROM dbs296644.affiche WHERE id_film=$del");
    $req->execute();
    $req=$bdd->prepare("DELETE FROM dbs296644.Film WHERE id_film=$del");
    $req->execute();    
    header('Location: affichecinema.php');




?>