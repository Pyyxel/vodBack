<?php 
    include '../connectbdd/connectBDD.php'; 

    $idAct=$_POST['idacteur'];
    $idFilm=$_POST['idfilm'];

    $req=$bdd->prepare("INSERT INTO dbs296644.Jouer SET id_acteur=? , id_film=?");
    $req->execute([$idAct,$idFilm]);

    echo "le le realisateur a bien éte lié";
    echo '<a href="../include/admin.php">retour</a>';

?>