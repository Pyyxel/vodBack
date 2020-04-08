
<?php 

include '../connectbdd/connectBDD.php'; 

$del=$_GET['id'];
$req=$bdd->prepare("DELETE FROM dbs296644.Produire WHERE id_producteur=$del");
$req->execute();

$req=$bdd->prepare("DELETE FROM dbs296644.Producteur WHERE id_producteur=$del");
$req->execute();    
header('Location: afficheproducteur.php');




?>