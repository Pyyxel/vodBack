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
        <td class="ligne"><a href="editerfilm.php?id=<?php echo $affichefilm['id_film']?>">Modifier</a><br><a
            href="suprimerfilm.php?id=<?php echo $affichefilm['id_film']?>">Suprimer</a></td>
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
  <h5>Genre<h5>
      </div class="tab-genre">
      <table class="filmtab">
        <tr class="colone">
          <td class="ligne">film</td>
          <td class="ligne">genre</td>
        </tr>
        <?php 
                     
                      include '../connectbdd/connectBDD.php';
                      $req=$bdd->prepare("SELECT * FROM dbs296644.Film");
                      $req->execute();
                      while($affichefilm=$req->fetch()){
                 
                     ?>
        <tr class="colone">

          <td class="ligne"><?php echo $affichefilm['titre'];?></td>
          <?php
                      $idfilm=$affichefilm['id_film'];
                        $req2=$bdd->prepare("SELECT * FROM dbs296644.genrer WHERE id_film=$idfilm");
                        $req2->execute();
                        
                    ?>
          <td class="ligne">



            <?php
                    while($genrer=$req2->fetch()){
                          $idgenre=$genrer['id_genre'];
                          $req3=$bdd->prepare("SELECT * FROM dbs296644.Genre WHERE id_genre=$idgenre");
                          $req3->execute();
                          $genre=$req3->fetch();
                          
                           echo $genre['nom']." / "; ?>

            <?php
                        }

                    ?>
            
          </td>
          <td class="ligne"><a href="ajoutergenrefilm.php?id=<?php echo $affichefilm['id_film']?>">ajouter un genre</a><br><a
            href="suprimergenre.php?id=<?php echo $affichefilm['id_film']?>">Suprimer un genre</a></td>

        </tr>
        <?php
                        
                      }
                      ?>
      </table>
      </div>
      <div class="flexadmin">
        <a class="admin" href="suprimergenrebdd.php">suprimer genre</a>
        <a class="admin" href="ajoutergenrebdd.php">ajouter un genre</a>
      </div>
      <div>
    <table class="filmtab">

      <tr class="colone">
        <td class="ligne">Titre</td>
        <td class="ligne">Image</td>
      </tr>
      <?php
                include '../connectbdd/connectBDD.php';
                $req=$bdd->prepare("SELECT titre,id_film FROM dbs296644.Film");
                $req->execute();
                while($affichefilm=$req->fetch()){
            ?>
      <tr class="colone">
        <td class="ligne" width="20%"><?php echo $affichefilm['titre']?></td>
                  <?php $idfilm=$affichefilm['id_film'];
                        $req2=$bdd->prepare("SELECT image_film FROM dbs296644.affiche WHERE id_film=$idfilm");
                        $req2->execute();
                        while($affiche=$req2->fetch()){

                  ?>
        <td class="ligne" width="30%"><img height="30%" width="50%" src=<?php echo "../".$affiche['image_film']?> alt=""></td>
                        <?php } ?>
       
        <td class="ligne"><a href="formajouterimg.php?id=<?php echo $affichefilm['id_film']?>">ajouter une image a ce film</a><br><a
            href="suprimerimgform.php?id=<?php echo $affichefilm['id_film']?>">Suprimer l'image</a></td>
      </tr>
      <?php
                }
            ?>
    </table>
    <div class="flexadmin">
  
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