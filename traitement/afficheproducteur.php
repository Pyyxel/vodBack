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
    <h1>Producteur</h1>
    <div>
        <table class="acteurtab">
           
            <tr class="colone">
                <td class="ligne">nom</td>
                <td class="ligne">prenom</td>
                <td class="ligne">date de naissance</td>
                <td class="ligne">origine</td>
                
            </tr>
            <?php
                include '../connectbdd/connectBDD.php';
                $req=$bdd->prepare("SELECT * FROM dbs296644.Producteur");
                $req->execute();
                while($affichefilm=$req->fetch()){
            ?>
    
            <tr class="colone">
                <td class="ligne"><?php echo $affichefilm['nom']?></td>
                <td class="ligne"><?php echo $affichefilm['prenom']?></td>
                <td class="ligne"><?php echo $affichefilm['datenaissance']?></td>
                <td class="ligne"><?php echo $affichefilm['origine']?></td>
                <td class="ligne"><a href="editproducteur.php?id=<?php echo $affichefilm['id_producteur']?>">Modifier</a><br><a href="suprimerproducteur.php?id=<?php echo $affichefilm['id_producteur']?>">Suprimer</a></td>
            </tr>
            <?php
                }
            ?>
        </table>
        <div class="flexadmin">
            <a class="admin" href="formajoutproducteur.php">ajouter un producteur</a>
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

