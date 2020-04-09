<?php
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $daten=$_POST['datenaissance'];
    $origine=$_POST['origine'];
    $id=$_GET['id'];

   
    
    include '../connectbdd/connectBDD.php';
    if(!empty($nom)){
        $req=$bdd->prepare("UPDATE dbs296644.Producteur SET nom = ? WHERE id_producteur=$id");
        $req->execute([$nom]);
    }
    if(!empty($prenom)){
        $req=$bdd->prepare("UPDATE dbs296644.Producteur SET prenom = ? WHERE id_producteur=$id");
        $req->execute([$prenom]);
       
   }
    if(!empty($daten)){
        $req=$bdd->prepare("UPDATE dbs296644.Producteur SET datenaissance = ? WHERE id_producteur=$id");
        $req->execute([$daten]);
    }
    
    if(!empty($origine)){
        $req=$bdd->prepare("UPDATE dbs296644.Producteur SET origine = ? WHERE id_producteur=$id");
        $req->execute([$origine]); 
    }

    header('Location: afficheproducteur.php');

?>