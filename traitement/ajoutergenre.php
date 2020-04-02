<?php 
    include '../connectbdd/connectBDD.php'; 
    $nom=$_POST['nom'];
    
    if(empty($nom)){
        echo "Erreur dans le nom";
        
    }else{
        $req=$bdd->prepare("INSERT INTO dbs296644.Genre SET nom = ?");
        $req->execute([$nom]);
        echo "Le genre a bien été ajouté";
        echo '<a href="../include/admin.php">retour</a>';
    }





?>