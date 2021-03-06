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
    <title>Parasite</title>

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




</head>

<body>
<?php 
    include 'connectbdd/connectBDD.php';
        $film=$_GET['id'];
      
        //image du film
        $req=$bdd->prepare("SELECT image_film FROM dbs296644.affiche WHERE id_film=$film");
        $req->execute();
        $img=$req->fetch(PDO::FETCH_OBJ);
        //requete toute les données du film
        $reqsyn=$bdd->prepare("SELECT * FROM dbs296644.Film WHERE id_film=$film");
        $reqsyn->execute();
        $syn=$reqsyn->fetch(PDO::FETCH_OBJ);

         
       
    ?>

    <?php
    include 'include/nav.php';
    include 'include/synopsis.php';
    include 'include/infofilms.php';
    include 'include/acteurs.php';
    include 'include/realba.php';
    include 'include/footer.php';    
    ?>
</body>

</html>