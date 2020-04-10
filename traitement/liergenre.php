<?php 
    include '../connectbdd/connectBDD.php'; 

    $idGenre=$_POST['idgenre'];
    $idFilm=$_GET['id'];

    $req=$bdd->prepare("INSERT INTO dbs296644.genrer SET id_genre=? , id_film=?");
    $req->execute([$idGenre,$idFilm]);

    header('Location: affichecinema.php');

?>