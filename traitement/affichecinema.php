<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Crud Cinema - Correction</title>
  <link rel="stylesheet" href="../css/style.css">

</head>
<body>
    <h1>Film</h1>
    <div>
        <table>
           
            <tr>
                <td>Titre</td>
                <td>Synopsis</td>
                <td>Note</td>
                <td>Duree</td>
                <td>Date de sortit</td>
                <td>Option</td>
            </tr>
            <?php
                include '../connectbdd/connectBDD.php';
                $req=$bdd->prepare("SELECT * FROM dbs296644.Film");
                $req->execute();
                while($affichefilm=$req->fetch()){
            ?>
    
            <tr>
                <td width="20%"><?php echo $affichefilm['titre']?></td>
                <td width="30%"><?php echo $affichefilm['synopsis']?></td>
                <td><?php echo $affichefilm['note']?></td>
                <td><?php echo $affichefilm['duree']?></td>
                <td><?php echo $affichefilm['datesortie']?></td>
                <td><a href="editerfilm.php?id=<?php echo $affichefilm['id_film']?>">Modifier</a><br><a href="suprimerfilm.php?id=<?php echo $affichefilm['id_film']?>">Suprimer</a></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </div>
</body>
</html>

