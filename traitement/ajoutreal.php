<?php 
    include '../connectbdd/connectBDD.php'; 
    $nom=$_POST['nomreal'];
    $prenom=$_POST['prenomreal'];
    $img=$_POST['imgreal'];
    $date=$_POST['datereal'];
    $origine=$_POST['originereal'];

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
        echo "Erreur dnas la l'origine";
        retour();
    }else{
        $req=$bdd->prepare("INSERT INTO dbs296644.Realisateur SET nom = ?, prenom = ?, Image = ? ,datenaissance = ?,origine=?");
        $req->execute([$nom,$prenom,$img,$date,$origine]);
        echo "Le realisateur a bien été inséré";
        retour();
    }





    function retour(){
        echo '<a href="afficherealisateur.php">retour</a>';
    }