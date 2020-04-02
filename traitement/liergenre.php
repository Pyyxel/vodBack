<?php 
    include '../connectbdd/connectBDD.php'; 

    $idGenre=$_POST['idgenre'];
    $idFilm=$_POST['idfilm'];

    $req=$bdd->prepare("INSERT INTO dbs296644.genrer SET id_genre=? , id_film=?");
    $req->execute([$idGenre,$idFilm]);

    echo "le genre a bien éte lié";
    echo '<a href="../include/admin.php">retour</a>';

?>