<?php 
    include '../connectbdd/connectBDD.php'; 

    $idReal=$_POST['idreal'];
    $idFilm=$_POST['idfilm'];

    $req=$bdd->prepare("INSERT INTO dbs296644.Realiser SET id_realisateur=? , id_film=?");
    $req->execute([$idReal,$idFilm]);

    echo "le le realisateur a bien éte lié";
    echo '<a href="../include/admin.php">retour</a>';

?>