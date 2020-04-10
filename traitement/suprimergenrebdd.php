<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../include/css/style.css">
</head>
<body>
    <div class="container">
    <h1>Suprimer un genre </h1>
    <form id="contact" action="delgenrebdd.php" method="post">
        <select  name="idgenre" tabindex="8" require >
                <?php 
                    include '../connectbdd/connectBDD.php';
                    $req=$bdd->prepare("SELECT * FROM dbs296644.Genre");
                    $req->execute();
                    while($idgenre=$req->fetch()){
                        
                ?>
                <option  value="<?= $idgenre['id_genre']; ?>"> Nom du genre : <?= $idgenre['nom']; ?> </option>
                    <?php } ?>
                
        </select>
        <fieldset>
        <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Envoyer</button>
        </fieldset>
    </form>
</div>
</body>
</html>