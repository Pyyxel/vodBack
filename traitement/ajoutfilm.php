<?php 
    include '../connectbdd/connectBDD.php'; 
    $titre=$_POST['titre'];
    $synopsis=$_POST['synopsis'];
    $date=$_POST['date'];
    $note=$_POST['note'];
    $duree=$_POST['duree'];
    

    if(empty($titre)){
        $bool=false;
        echo "il y a une erreur lors de lajout du film";
        retour();
    }else if(empty($synopsis)){
        echo "il y a une erreur lors de lajout du film";
        retour();
    }else if(empty($date)){
        echo "il y a une erreur lors de lajout du film";
        retour();
    }else if(empty($note)){
        echo "il y a une erreur lors de lajout du film";
        retour();
    }else if(empty($duree)){
        echo "il y a une erreur lors de lajout du film";
        retour();
    }else{
        $req=$bdd->prepare("INSERT INTO dbs296644.Film SET titre = ?, synopsis = ?, note= ?, duree = ?, datesortie = ?");
        $req->execute([$titre,$synopsis,$note,$duree,$date]);
        echo "insertion reussie";
        retour();
    }









    function retour(){
        echo '<a href="affichecinema.php">retour</a>';
    }
?>