<?php 
  session_start();
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Crud Cinema - Correction</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<?php 
   if(isset($_SESSION['typeuser'])){
    if ($_SESSION['typeuser']==1){
      ?>
    

  <div class="flexadmin">
    <a class="admin" href="../traitement/affichecinema.php">vers l'affichage de cinema</a>
    <a class="admin" href="../traitement/afficheacteur.php">vers l'affichage des acteurs</a>
    <a class="admin" href="../traitement/afficheproducteur.php">vers l'affichage des producteurs</a>
    <a class="admin" href="../traitement/afficherealisateur.php">vers l'affichage des realisateurs</a>
    <a class="admin" href="../index.php">vers l'acceuil</a>
  </div>



<!--changer droit-->



<div class="container">
  <form id="contact" action="../traitement/changerdroit.php" method="post"> 
    <h3><center>changer droit utilisateur</center></h3>
    <select  name="iduser" tabindex="8" require >
            <?php
                include '../connectbdd/connectBDD.php'; 
                
                $req = $bdd->prepare(" SELECT id_user,pseudo,nom,prenom,id_typeuser FROM dbs296644.User");
                $req->execute();

                while ( $donnees = $req->fetch() ){ 
                  $idType=$donnees['id_typeuser'];
                  $r=$bdd->prepare("SELECT droit FROM dbs296644.typeUser WHERE id_typeuser=$idType");
                  $r->execute();
                  $droit=$r->fetch();
                  ?>
                  
                  <option  value="<?= $donnees['id_user']; ?>"> Nom : <?= $donnees['nom']; ?> | prenom : <?= $donnees['prenom']."   Pseudo : ".$donnees['pseudo']; ?>  <?= "   Droit : ".$droit['droit']; ?> </option>
              <?php  }
             ?>
    </select>
    
    <select  name="idtype" tabindex="8" require >
            <?php
                include '../connectbdd/connectBDD.php'; 

                $req = $bdd->prepare(" SELECT id_typeuser,droit FROM dbs296644.typeUser");
                $req->execute();

                while ( $donnees = $req->fetch() ){ ?>

                  <option  value="<?= $donnees['id_typeuser']; ?>"> droit a mettre a l'utilisateur : <?= $donnees['droit']; ?> / id_typeuser: <?= $donnees['id_typeuser']; ?> </option>
              <?php  }
             ?>
    </select>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Envoyer</button>
    </fieldset>
  </form>
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
