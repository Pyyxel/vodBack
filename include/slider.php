  <!--SLIDER-->
  <div class="fotorama" data-width="100%" data-height="100%">
  <?php 
    $req=$bdd->prepare("SELECT image_film FROM dbs296644.affiche");
    $req->execute();
    while($donnee=$req->fetch(PDO::FETCH_OBJ)){ ?>
        <img src=<?php echo $donnee->image_film?>>  
    <?php } ?>
  
  
  
  
   
</div>