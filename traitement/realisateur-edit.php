<?php
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $image=$_POST['image'];
    $daten=$_POST['datenaissance'];
    $origine=$_POST['origine'];
    $id=$_GET['id'];
    
    
    include '../connectbdd/connectBDD.php';
    if(!empty($nom)){
        $req=$bdd->prepare("UPDATE dbs296644.Realisateur SET nom = ? WHERE id_realisateur=$id");
        $req->execute([$nom]);
    }
    if(!empty($prenom)){
        $req=$bdd->prepare("UPDATE dbs296644.Realisateur SET prenom = ? WHERE id_realisateur=$id");
        $req->execute([$prenom]);
   }
   if(!empty($image)){
    $req=$bdd->prepare("UPDATE dbs296644.Realisateur SET image = ? WHERE id_realisateur=$id");
    $req->execute([$image]);
}
    if(!empty($daten)){
        $req=$bdd->prepare("UPDATE dbs296644.Realisateur SET datenaissance = ? WHERE id_realisateur=$id");
        $req->execute([$daten]);
    }
    
    if(!empty($origine)){
        $req=$bdd->prepare("UPDATE dbs296644.Realisateur SET origine = ? WHERE id_realisateur=$id");
        $req->execute([$origine]); 
    }

    header('Location: afficherealisateur.php');

?>