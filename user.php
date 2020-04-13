<?php
session_start();
header('Content-type: text/html; charset=utf-8');
require_once 'styleswitcher.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALLO SIMPLON</title>

    <!--SLICK-->

    <link rel="stylesheet" type="text/css" href="slick\slick\slick.css" />
    <link rel="stylesheet" type="text/css" href="slick\slick\slick-theme.css" />




    <!--CSS-->

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" media="screen, projection" type="text/css" id="css" href="<?php echo $url; ?>" />


    <!--GOOGLE FONTS-->

    <link
        href="https://fonts.googleapis.com/css?family=Baloo+Tammudu+2:400,500,600,700,800|Ubuntu:300,300i,400,400i,500,500i,700,700i&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Rubik:300,300i,400,400i,500,500i,700,700i,900,900i&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Asap:400,400i,500,500i,600,600i,700,700i|Bellota+Text:300,300i,400,400i,700,700i&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Orbitron:700,800,900|Quicksand:300,400,500,600,700&display=swap"
        rel="stylesheet">







    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--FOTORAMA-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>


    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>


</head>

<body>
    <?php 
        include 'connectbdd/connectBDD.php'; 
        //sliderInterstellar
        $slid1=$bdd->prepare("SELECT image_film FROM dbs296644.affiche WHERE id_affiche=12");
        $slid1->execute();
        $slider1=$slid1->fetch(PDO::FETCH_OBJ);
        //sliderLeprestige
        $slid2=$bdd->prepare("SELECT image_film FROM dbs296644.affiche WHERE id_affiche=13");
        $slid2->execute();
        $slider2=$slid2->fetch(PDO::FETCH_OBJ);
        //sliderTunetueraspoint
        $slid3=$bdd->prepare("SELECT image_film FROM dbs296644.affiche WHERE id_affiche=14");
        $slid3->execute();
        $slider3=$slid3->fetch(PDO::FETCH_OBJ);
    ?>
    <?php
    include 'include/nav.php';?>
    <h2 style="color:orange;"><center>Dnnnée du compte de : <?php echo $_SESSION['username'];?></center></h2>
    <?php 
    include 'connectbdd/connectBDD.php';
    $pseudo=$_SESSION['username'];
    $req=$bdd->prepare("SELECT * FROM dbs296644.User WHERE pseudo= ?");
    $req->execute([$pseudo]);
    $user=$req->fetch();
?>
<div id="container">
        <form id="contact" action="traitement/user-edit.php?id=<?= $user['id_user']?>" method="POST" enctype="multipart/form-data">
          
            <label for="nom">Mot de passe actuel : </label>
            <input type="text" id="nom" name="mdpact" placeholder="mote de passe actuelle"><br>

            <h2>Modifier <?=$user['pseudo']?></h2>

            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom" placeholder="<?=$user['nom']?>"><br>

            <label for="dateSortie">Email : 
            </label>  
            <input type="email" id="dateSortie" name="email" placeholder="<?=$user['mail']?>"><br>


            <label for="duree">mot de passe : </label>
            <input type="text" id="duree" name="mdp1" placeholder="nouveau mot de passe"><br>
            
            <label for="note">verif mdp : </label>
            <input type="text" step="any" id="note" name="mdp2" placeholder="copie mdp"><br>

                       
            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Envoyer</button>
            </fieldset>
            
        </form>
      
        
</div>

<div>
    <h2 style="color:orange;">Favoris : <br></h2>
    <?php 
        $iduser=$user['id_user'];
        $req1=$bdd->prepare("SELECT id_film FROM dbs296644.favoris WHERE id_user= ? ");
        $req1->execute([$iduser]);
        while ($id_film=$req1->fetch()){
            $req2=$bdd->prepare("SELECT image_film FROM dbs296644.affiche WHERE id_film=?");
            $req2->execute([$id_film['id_film']]);
            $affiche=$req2->fetch();
    ?>
    <a  href="parasite.php?id=<?php echo $id_film['id_film'];?>"><img width="180px" height="300px" src=<?php echo $affiche['image_film']; ?>></div>
    <?php
        }
    include 'include/tarifs.php';
    include 'include/footer.php';
    ?>


    <script type="text/javascript" src="slick\slick\slick.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {

            $('.center').slick({
                dots: true,
                autoplay: true,
                arrows: true,
                centerMode: true,
                centerPadding: '60px',
                slidesToShow: 3,
                responsive: [{
                        breakpoint: 768,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 1
                        }
                    }
                ]
            });
        });
    </script>
</body>

</html>