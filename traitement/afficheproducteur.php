<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Crud Cinema - Correction</title>
  <link rel="stylesheet" href="../css/style.css">

</head>
<body>
    <h1>Producteur</h1>
    <div>
        <table>
           
            <tr>
                <td>nom</td>
                <td>prenom</td>
                <td>date de naissance</td>
                <td>origine</td>
                
            </tr>
            <?php
                include '../connectbdd/connectBDD.php';
                $req=$bdd->prepare("SELECT * FROM dbs296644.Producteur");
                $req->execute();
                while($affichefilm=$req->fetch()){
            ?>
    
            <tr>
                <td><?php echo $affichefilm['nom']?></td>
                <td><?php echo $affichefilm['prenom']?></td>
                <td><?php echo $affichefilm['datenaissance']?></td>
                <td><?php echo $affichefilm['origine']?></td>
                <td><a href="editproducteur.php?id=<?php echo $affichefilm['id_producteur']?>">Modifier</a><br><a href="suprimerproducteur.php?id=<?php echo $affichefilm['id_producteur']?>">Suprimer</a></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </div>
</body>
</html>

