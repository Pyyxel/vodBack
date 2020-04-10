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
                <td class="ligne">image</td>
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
                <td class="ligne"><img height="110px" width="80px" src=<?php echo $affichefilm['image']?>></td>
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
    <h5>Producteur->film<h5>
      <div>
      <table class="filmtab">
        <tr class="colone">
          <td class="ligne">acteur</td>
          <td class="ligne">film</td>
        </tr>
        <?php 
                     
                      include '../connectbdd/connectBDD.php';
                      $req=$bdd->prepare("SELECT * FROM dbs296644.Producteur");
                      $req->execute();
                      while($afficheproducteur=$req->fetch()){
                 
                     ?>
        <tr class="colone">

          <td class="ligne"><?php echo $afficheproducteur['nom']."  ".$afficheproducteur['prenom'];?></td>
          <?php
                        $idproducteur=$afficheproducteur['id_producteur'];
                        $req2=$bdd->prepare("SELECT id_film FROM dbs296644.Produire WHERE id_producteur=$idproducteur");
                        $req2->execute();
                        
                    ?>
          <td class="ligne">



            <?php
                    while($produire=$req2->fetch()){
                          $idfilm=$produire['id_film'];
                          $req3=$bdd->prepare("SELECT titre,id_film FROM dbs296644.Film WHERE id_film=$idfilm");
                          $req3->execute();
                          while($film=$req3->fetch()){
                          
                           echo $film['titre']." / "; ?>   

            <?php
                          }
                        }

                    ?>
            
          </td>
          <td class="ligne"><a href="formajouterproducteurfilm.php?&id=<?php echo $afficheproducteur['id_producteur'];?>">ajouter un film</a><br><a
            href="suprimerproducteurfilm.php?id=<?php echo $afficheproducteur['id_producteur']?>">Suprimer un film</a></td>

        </tr>
        <?php
                        
                      }
                      ?>
      </table>
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

