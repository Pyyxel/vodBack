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
  </div>
  <!--
film  !

 -->
<div class="container">
  <form id="contact" action="../traitement/ajoutfilm.php" method="post">
    <h3><center>Admin-allo Simplon</center></h3>
    <h5><center>Ajouter film</center></h5>
    <fieldset>
      <input placeholder="Titre film" name="titre" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="date de sortie" name="date" type="date" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="synopsis" name="synopsis" type="text" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="note" name="note" type="number" step="any" tabindex="4" required>
    </fieldset>
    <fieldset>
      <input placeholder="durée" name="duree" type="time" tabindex="5" required>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Envoyer</button>
    </fieldset>
  </form>
</div>

<!-- suprimer film -->
<div class="container">
  <form id="contact" action="../traitement/suprimerfilm.php" method="post">
    
    <h3><center>suprimer film</center></h3>
    <fieldset>
           <select  name="delfilm" tabindex="8" require >
            <?php
                include '../connectbdd/connectBDD.php'; 

                $req = $bdd->prepare(" SELECT id_film, titre FROM dbs296644.Film");
                $req->execute();

                while ( $donnees = $req->fetch() ){ ?>

                  <option  value="<?= $donnees['id_film']; ?>"> Nom du Cinéma : <?= $donnees['titre']; ?> | id du cinéma : <?= $donnees['id_film']; ?> </option>
              <?php  }
             ?>
            </select>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">suprimer</button>
    </fieldset>
  </form>
</div>



<!--partie real-->

<div class="container">
  <form id="contact" action="../traitement/ajoutreal.php" method="post">
    
    <h3><center>ajouter realisateur</center></h3>
    <fieldset>
      <input placeholder="Nom du realisateur" name="nomreal" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Prenom du realisateur" name="prenomreal" type="text" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Image du realisateur" name="imgreal" type="text" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="Date de naissance du realisateur" name="datereal" type="date" step="any" tabindex="4" required>
    </fieldset>
    <fieldset>
      <input placeholder="Originine du realisateur" name="originereal" type="text" tabindex="5" required>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Envoyer</button>
    </fieldset>
  </form>
</div>


<!--realiser par-->


<div class="container">
  <form id="contact" action="../traitement/lierreal.php" method="post">
    <h3><center>lier un realisateur a un film</center></h3>
    <select  name="idfilm" tabindex="8" require >
            <?php
                include '../connectbdd/connectBDD.php'; 

                $req = $bdd->prepare(" SELECT id_film, titre FROM dbs296644.Film");
                $req->execute();

                while ( $donnees = $req->fetch() ){ ?>

                  <option  value="<?= $donnees['id_film']; ?>"> Nom du Cinéma : <?= $donnees['titre']; ?> | id du cinéma : <?= $donnees['id_film']; ?> </option>
              <?php  }
             ?>
            </select>
    <select  name="idreal" tabindex="8" require >
            <?php
                $req2 = $bdd->prepare(" SELECT id_realisateur,nom,prenom FROM dbs296644.Realisateur");
                $req2->execute();

                while ( $donnees = $req2->fetch() ){ ?>

                  <option  value="<?= $donnees['id_realisateur']; ?>"> Nom du real : <?= $donnees['nom']; ?> | prenom du real : <?= $donnees['prenom']; ?> </option>
              <?php  }
             ?>
            </select>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Envoyer</button>
    </fieldset>
  </form>
</div>

<!--ajouté acteur-->
<div class="container">
  <form id="contact" action="../traitement/ajouteracteur.php" method="post"> 
    <h3><center>ajouter acteur</center></h3>
    <fieldset>
      <input placeholder="Nom de l'acteur" name="nomact" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Prenom de l'acteur" name="prenomact" type="text" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Image de l'acteur" name="imgact" type="text" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="Date de naissance de l'acteur" name="dateact" type="date" step="any" tabindex="4" required>
    </fieldset>
    <fieldset>
      <input placeholder="Originine de l'acteur" name="origineact" type="text" tabindex="5" required>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Envoyer</button>
    </fieldset>
  </form>
</div>

<!--lier acteur film-->

<div class="container">
  <form id="contact" action="../traitement/lieracteur.php" method="post">
    <h3><center>lier un acteur a un film</center></h3>
    <select  name="idfilm" tabindex="8" require >
            <?php
                include '../connectbdd/connectBDD.php'; 

                $req = $bdd->prepare(" SELECT id_film, titre FROM dbs296644.Film");
                $req->execute();

                while ( $donnees = $req->fetch() ){ ?>

                  <option  value="<?= $donnees['id_film']; ?>"> Nom du film : <?= $donnees['titre']; ?> | id du film : <?= $donnees['id_film']; ?> </option>
              <?php  }
             ?>
            </select>
    <select  name="idacteur" tabindex="8" require >
            <?php
                $req2 = $bdd->prepare(" SELECT id_acteur,nom,prenom FROM dbs296644.Acteur");
                $req2->execute();

                while ( $donnees = $req2->fetch() ){ ?>

                  <option  value="<?= $donnees['id_acteur']; ?>"> Nom de l'acteur : <?= $donnees['nom']; ?> | prenom de l'acteur : <?= $donnees['prenom']; ?> </option>
              <?php  }
             ?>
            </select>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Envoyer</button>
    </fieldset>
  </form>
</div>
<!--ajouter producteur-->


<div class="container">
  <form id="contact" action="../traitement/ajouterproducteur.php" method="post"> 
    <h3><center>ajouter producteur</center></h3>
    <fieldset>
      <input placeholder="Nom du producteur" name="nomprod" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Prenom du producteur" name="prenomprod" type="text" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Image du producteur" name="imgprod" type="text" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="Date de naissance du product" name="dateprod" type="date" step="any" tabindex="4" required>
    </fieldset>
    <fieldset>
      <input placeholder="Originine du producteur" name="origineprod" type="text" tabindex="5" required>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Envoyer</button>
    </fieldset>
  </form>
</div>

<!--lier producteur a film-->

<div class="container">
  <form id="contact" action="../traitement/lierproducteur.php" method="post">
    <h3><center>lier un producteur a un film</center></h3>
    <select  name="idfilm" tabindex="8" require >
            <?php
                include '../connectbdd/connectBDD.php'; 

                $req = $bdd->prepare(" SELECT id_film, titre FROM dbs296644.Film");
                $req->execute();

                while ( $donnees = $req->fetch() ){ ?>

                  <option  value="<?= $donnees['id_film']; ?>"> Nom du film : <?= $donnees['titre']; ?> | id du film : <?= $donnees['id_film']; ?> </option>
              <?php  }
             ?>
            </select>
    <select  name="idprod" tabindex="8" require >
            <?php
                $req2 = $bdd->prepare(" SELECT id_producteur,nom,prenom FROM dbs296644.Producteur");
                $req2->execute();

                while ( $donnees = $req2->fetch() ){ ?>

                  <option  value="<?= $donnees['id_producteur']; ?>"> Nom du producteur : <?= $donnees['nom']; ?> | prenom du producteur : <?= $donnees['prenom']; ?> </option>
              <?php  }
             ?>
            </select>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Envoyer</button>
    </fieldset>
  </form>
</div>
<!--ajouté genre-->

<div class="container">
  <form id="contact" action="../traitement/ajoutergenre.php" method="post"> 
    <h3><center>ajouter un genre</center></h3>
    <fieldset>
      <input placeholder="Genre" name="nom" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Envoyer</button>
    </fieldset>
  </form>
</div>

<!--lié genre a film-->
<div class="container">
  <form id="contact" action="../traitement/liergenre.php" method="post">
    <h3><center>lier un genre a un film</center></h3>
    <select  name="idfilm" tabindex="8" require >
            <?php
                include '../connectbdd/connectBDD.php'; 

                $req = $bdd->prepare(" SELECT id_film, titre FROM dbs296644.Film");
                $req->execute();

                while ( $donnees = $req->fetch() ){ ?>

                  <option  value="<?= $donnees['id_film']; ?>"> Nom du film : <?= $donnees['titre']; ?> | id du film : <?= $donnees['id_film']; ?> </option>
              <?php  }
             ?>
            </select>
    <select  name="idgenre" tabindex="8" require >
            <?php
                $req2 = $bdd->prepare(" SELECT id_genre,nom FROM dbs296644.Genre");
                $req2->execute();

                while ( $donnees = $req2->fetch() ){ ?>

                  <option  value="<?= $donnees['id_genre']; ?>"> Nom du genre : <?= $donnees['nom']; ?> </option>
              <?php  }
             ?>
            </select>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Envoyer</button>
    </fieldset>
  </form>
</div>
<!--ajouter une image a un film-->

<div class="container">
  <form id="contact" action="../traitement/ajouterimage.php" method="post"> 
    <h3><center>ajouter image</center></h3>
    <fieldset>
      <input placeholder="lien de l'image" name="img" type="text" tabindex="1" required autofocus>
    </fieldset>
    <select  name="idfilm" tabindex="8" require >
            <?php
                include '../connectbdd/connectBDD.php'; 

                $req = $bdd->prepare(" SELECT id_film, titre FROM dbs296644.Film");
                $req->execute();

                while ( $donnees = $req->fetch() ){ ?>

                  <option  value="<?= $donnees['id_film']; ?>"> Nom du film : <?= $donnees['titre']; ?> | id du film : <?= $donnees['id_film']; ?> </option>
              <?php  }
             ?>
    </select>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Envoyer</button>
    </fieldset>
  </form>
</div>

<div class="container">
  <form id="contact" action="../traitement/changerdroit.php" method="post"> 
    <h3><center>changer droit utilisateur</center></h3>
    <select  name="iduser" tabindex="8" require >
            <?php
                include '../connectbdd/connectBDD.php'; 

                $req = $bdd->prepare(" SELECT id_user,pseudo,nom,prenom FROM dbs296644.User");
                $req->execute();

                while ( $donnees = $req->fetch() ){ ?>
                  <option  value="<?= $donnees['id_user']; ?>"> Nom : <?= $donnees['nom']; ?> | prenom : <?= $donnees['prenom']."   Pseudo : ".$donnees['pseudo']; ?> </option>
              <?php  }
             ?>
    </select>
    
    <select  name="idtype" tabindex="8" require >
            <?php
                include '../connectbdd/connectBDD.php'; 

                $req = $bdd->prepare(" SELECT id_typeuser,droit FROM dbs296644.typeUser");
                $req->execute();

                while ( $donnees = $req->fetch() ){ ?>

                  <option  value="<?= $donnees['id_typeuser']; ?>"> droit a mettre a l'utilisateur : <?= $donnees['droit']; ?>  </option>
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
