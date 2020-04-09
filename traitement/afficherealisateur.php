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

    <div class="container">
        <form id="contact" action="../traitement/lierreal.php" method="post">
            <h3>
                <center>lier un realisateur a un film</center>
            </h3>
            <select name="idfilm" tabindex="8" require>
                <?php
                include '../connectbdd/connectBDD.php'; 

                $req = $bdd->prepare(" SELECT id_film, titre FROM dbs296644.Film");
                $req->execute();

                while ( $donnees = $req->fetch() ){ ?>

                <option value="<?= $donnees['id_film']; ?>"> Nom du realisateur : <?= $donnees['titre']; ?> | id du cinéma :
                    <?= $donnees['id_film']; ?> </option>
                <?php  }
             ?>
            </select>
            <select name="idreal" tabindex="8" require>
                <?php
                $req2 = $bdd->prepare(" SELECT id_realisateur,nom,prenom FROM dbs296644.Realisateur");
                $req2->execute();

                while ( $donnees = $req2->fetch() ){ ?>

                <option value="<?= $donnees['id_realisateur']; ?>"> Nom du real : <?= $donnees['nom']; ?> | prenom du
                    real : <?= $donnees['prenom']; ?> </option>
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