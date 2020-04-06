<?php
    $titre=$_POST['nom'];
    $date=$_POST['dateSortie'];
    $duree=$_POST['duree'];
    $note=$_POST['note'];
    $synopsis=$_POST['synopsis'];
    $id=$_GET['id'];
   
    
    include '../connectbdd/connectBDD.php';
    if(isset($titre)){
        $req=$bdd->prepare("UPDATE dbs296644.Film SET titre = ? WHERE id_film=$id");
        $req->execute([$titre]);
    }
    if(isset($date)){
        $req=$bdd->prepare("UPDATE dbs296644.Film SET datesortie = ? WHERE id_film=$id");
        $req->execute([$date]);
   }
    if(isset($duree)){
        $req=$bdd->prepare("UPDATE dbs296644.Film SET duree = ? WHERE id_film=$id");
        $req->execute([$duree]);
    }
    if(isset($note)){
        $req=$bdd->prepare("UPDATE dbs296644.Film SET note = ? WHERE id_film=$id");
        $req->execute([$note]);
    }
    if(isset($synopsis)){
        $req=$bdd->prepare("UPDATE dbs296644.Film SET synopsis = ? WHERE id_film=$id");
        $req->execute([$synopsis]); 
    }

    header('Location: affichecinema.php');

?>