<?php 
    include '../connectbdd/connectBDD.php'; 

    $idProd=$_POST['idprod'];
    $idFilm=$_POST['idfilm'];

    $req=$bdd->prepare("INSERT INTO dbs296644.Produire SET id_producteur=? , id_film=?");
    $req->execute([$idProd,$idFilm]);

    echo "le le realisateur a bien éte lié";
    echo '<a href="../include/admin.php">retour</a>';

?>