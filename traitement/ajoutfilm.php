<?php 
    include '../connectbdd/connectBDD.php'; 
    $titre=$_POST['titre'];
    $synopsis=$_POST['synopsis'];
    $date=$_POST['date'];
    $note=$_POST['note'];
    $duree=$_POST['duree'];
    

    if(empty($titre) && (empty($synopsis)) && (empty($date)) && (empty($note)) && (empty($duree))){
        echo "il y a une erreur lors de lajout du film";
        retour();
    }else{
        $req=$bdd->prepare("INSERT INTO dbs296644.Film SET titre = ?, synopsis = ?, note= ?, duree = ?, datesortie = ?");
        $req->execute([$titre,$synopsis,$note,$duree,$date]);
        header('Location: affichecinema.php');
    }









    function retour(){
        echo '<a href="affichecinema.php">retour</a>';
    }
?>