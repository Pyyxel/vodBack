 <!--AFFICHE-->
 
 <div class="title-dada-affiche">
    <h2>A l'affiche</h2>
</div>
<div class="center slider">
    <?php
       
        $req=$bdd->prepare("SELECT * FROM dbs296644.affiche");
        $req->execute();
        while($donnee=$req->fetch(PDO::FETCH_OBJ)){ ?>
                <a class="link-poster" href="parasite.php?id=<?php echo $donnee->id_film;?>"><img src=<?php echo $donnee->image_film ?> alt=""></a> 
    <?php } ?>
        
 </div>



