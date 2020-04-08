<?php
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $daten=$_POST['datenaissance'];
    $origine=$_POST['origine'];
    $image=$_POST['image'];
    $id=$_GET['id'];
    
    
    include '../connectbdd/connectBDD.php';
    if(!empty($nom)){
        $req=$bdd->prepare("UPDATE dbs296644.Acteur SET nom = ? WHERE id_acteur=$id");
        $req->execute([$nom]);
    }
    if(!empty($penom)){
        $req=$bdd->prepare("UPDATE dbs296644.Acteur SET prenom = ? WHERE id_acteur=$id");
        $req->execute([$prenom]);
   }

    if(!empty($image)){
        $req=$bdd->prepare("UPDATE dbs296644.Acteur SET image = ? WHERE id_acteur=$id");
        $req->execute([$image]);
    }

    if(!empty($daten)){
        $req=$bdd->prepare("UPDATE dbs296644.Acteur SET datenaissance = ? WHERE id_acteur=$id");
        $req->execute([$daten]);
    }
    
    if(!empty($origine)){
        $req=$bdd->prepare("UPDATE dbs296644.Acteur SET origine = ? WHERE id_acteur=$id");
        $req->execute([$origine]); 
    }

    header('Location: afficheacteur.php');

?>