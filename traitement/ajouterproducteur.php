<?php 
    include '../connectbdd/connectBDD.php'; 
    $nom=$_POST['nomprod'];
    $prenom=$_POST['prenomprod'];
    $img=$_POST['imgprod'];
    $date=$_POST['dateprod'];
    $origine=$_POST['origineprod'];

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
        $req=$bdd->prepare("INSERT INTO dbs296644.Producteur SET nom = ?, prenom = ?, Image = ? ,datenaissance = ?,origine=?");
        $req->execute([$nom,$prenom,$img,$date,$origine]);
        echo "Le producteur a bien été inséré";
        retour();
    }





    function retour(){
        echo '<a href="afficheproducteur.php">retour</a>';
    }