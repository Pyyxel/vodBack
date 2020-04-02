
<?php 

    include '../connectbdd/connectBDD.php'; 

    $del=$_POST['delfilm'];

    $req=$bdd->prepare("DELETE FROM dbs296644.Film WHERE id_film=$del");
    $req->execute();
    echo "supression reussie ";
    echo '<a href="../include/admin.php">retour</a>';




?>