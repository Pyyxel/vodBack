<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

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
    <h1>Realisateur</h1>
    <div>
        <table class="acteurtab">

            <tr class="colone">
                <td class="ligne">nom</td>
                <td class="ligne">prenom</td>
                <td class="ligne">Image</td>
                <td class="ligne">date de naissance</td>
                <td class="ligne">origine</td>

            </tr>
            <?php
                include '../connectbdd/connectBDD.php';
                $req=$bdd->prepare("SELECT * FROM dbs296644.Realisateur");
                $req->execute();
                while($affichefilm=$req->fetch()){
            ?>

            <tr class="colone">
                <td class="ligne"><?php echo $affichefilm['nom']?></td>
                <td class="ligne"><?php echo $affichefilm['prenom']?></td>
                <td class="ligne"><img height="110px" width="80px" src="<?php echo $affichefilm['Image']?>"></td>
                <td class="ligne"><?php echo $affichefilm['datenaissance']?></td>
                <td class="ligne"><?php echo $affichefilm['origine']?></td>
                <td class="ligne"><a
                href="editrealisateur.php?id=<?php echo $affichefilm['id_realisateur'];?>">Modifier</a><br><a
                href="suprimerrealisateur.php?id=<?php echo $affichefilm['id_realisateur'];?>">Suprimer</a></td>
            </tr>
            <?php
                }
            ?>
        </table>
        <div class="flexadmin">
            <a class="admin" href="formajoutreal.php">ajouter un realisateur</a>
            <a class="admin" href="../include/admin.php">retour au bouton</a>
        </div>
    </div>

    <h5>Realisateur->film<h5>
      <div>
      <table class="filmtab">
        <tr class="colone">
          <td class="ligne">Realisateur</td>
          <td class="ligne">film</td>
        </tr>
        <?php 
                     
                      include '../connectbdd/connectBDD.php';
                      $req=$bdd->prepare("SELECT * FROM dbs296644.Realisateur");
                      $req->execute();
                      while($afficherealisateur=$req->fetch()){
                 
                     ?>
        <tr class="colone">

          <td class="ligne"><?php echo $afficherealisateur['nom']."  ".$afficherealisateur['prenom'];?></td>
          <?php
                        $idrealisateur=$afficherealisateur['id_realisateur'];
                        $req2=$bdd->prepare("SELECT id_film FROM dbs296644.Realiser WHERE id_realisateur=$idrealisateur");
                        $req2->execute();
                        
                    ?>
          <td class="ligne">



            <?php
                    while($realiser=$req2->fetch()){
                          $idfilm=$realiser['id_film'];
                          $req3=$bdd->prepare("SELECT titre,id_film FROM dbs296644.Film WHERE id_film=$idfilm");
                          $req3->execute();
                          while($film=$req3->fetch()){
                          
                           echo $film['titre']." / "; ?>   

            <?php
                          }
                        }

                    ?>
            
          </td>
          <td class="ligne"><a href="formajouterrealisateurfilm.php?&id=<?php echo $afficherealisateur['id_realisateur'];?>">ajouter un film</a><br><a
            href="suprimerrealisateurfilm.php?id=<?php echo $afficherealisateur['id_realisateur']?>">Suprimer un film</a></td>

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