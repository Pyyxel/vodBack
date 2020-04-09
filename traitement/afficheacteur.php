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
    <div class="afficheacteur"></div>
        <h1>Acteur</h1>
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
                    $req=$bdd->prepare("SELECT * FROM dbs296644.Acteur");
                    $req->execute();
                    while($affichefilm=$req->fetch()){
                ?>
        
                <tr class="colone">
                    <td class="ligne"><?php echo $affichefilm['nom']?></td>
                    <td class="ligne"><?php echo $affichefilm['prenom']?></td>
                    <td class="ligne"><?php echo $affichefilm['image']?></td>
                    <td class="ligne"><?php echo $affichefilm['datenaissance']?></td>
                    <td class="ligne"><?php echo $affichefilm['origine']?></td>
                    <td class="ligne"><a href="editeracteur.php?id=<?php echo $affichefilm['id_acteur'];?>">modifier</a><br><a href="suprimeracteur.php?id=<?php echo $affichefilm['id_acteur'];?>">suprimer</a></td>
                </tr>
                <?php
                    }
                ?>
            </table>
            <div class="flexadmin">
                <a class="admin" href="formajoutacteur.php">ajouter un acteur</a>
                <a class="admin" href="../include/admin.php">retour au bouton</a>
            </div>
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

