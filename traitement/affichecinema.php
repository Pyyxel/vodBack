<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Crud Cinema - Correction</title>
  <link rel="stylesheet" href="../include/css/style.css">

</head>
<body>
    <?php 
    if(isset($_SESSION['typeuser'])){
    if ($_SESSION['typeuser']==1){
    ?>
    <h1>Film</h1>
    <div>
        <table class="filmtab">
           
            <tr class="colone">
                <td class="ligne">Titre</td>
                <td class="ligne">Synopsis</td>
                <td class="ligne">Note</td>
                <td class="ligne">Duree</td>
                <td class="ligne">Date de sortit</td>
                <td class="ligne">Option</td>
            </tr>
            <?php
                include '../connectbdd/connectBDD.php';
                $req=$bdd->prepare("SELECT * FROM dbs296644.Film");
                $req->execute();
                while($affichefilm=$req->fetch()){
            ?>
    
            <tr class="colone">
                <td class="ligne" width="20%"><?php echo $affichefilm['titre']?></td>
                <td class="ligne" width="30%"><?php echo $affichefilm['synopsis']?></td>
                <td class="ligne"><?php echo $affichefilm['note']?></td>
                <td class="ligne"><?php echo $affichefilm['duree']?></td>
                <td class="ligne"><?php echo $affichefilm['datesortie']?></td>
                <td class="ligne"><a href="editerfilm.php?id=<?php echo $affichefilm['id_film']?>">Modifier</a><br><a href="suprimerfilm.php?id=<?php echo $affichefilm['id_film']?>">Suprimer</a></td>
            </tr>
            <?php
                }
            ?>
        </table>
        <div class="flexadmin">
                <a class="admin" href="formajoutfilm.php">ajouter un film</a>
                <a class="admin" href="../include/admin.php">retour au bouton</a>
            </div>
    </div>
            <?php
                }else{
                      header('Location: ../index.php');
                    }
                  ?>
                 
             
              

                <?php }else{
                  header('Location: ../index.php');
                } ?>

</body>
</html>

