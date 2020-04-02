<?php 
    include '../connectbdd/connectBDD.php'; 

    $nom=$_POST['nomact'];
    $prenom=$_POST['prenomact'];
    $img=$_POST['imgact'];
    $date=$_POST['dateact'];
    $origine=$_POST['origineact'];

    if(empty($nom)){
        echo "Erreur dans le nom";
        retour();
    }else if(empty($prenom)){
        echo "Erreur dans le prenom";
        retour();
    }else if(empty($img)){
        echo "Erreur dans l'img";
        retour();
    }else if(empty($date)){
        echo "Erreur dans la date";
        retour();
    }else if(empty($origine)){
        echo "Erreur dans la l'origine";
        retour();
    }else{
        $req=$bdd->prepare("INSERT INTO dbs296644.Acteur SET nom = ?, prenom = ?, image = ? ,datenaissance = ?,origine=?");
        $req->execute([$nom,$prenom,$img,$date,$origine]);
        echo "L acteur a bien été inséré";
        retour();
    }





    function retour(){
        echo '<a href="../include/admin.php">retour</a>';
    }


?>