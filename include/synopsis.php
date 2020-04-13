<h2 class="page-film"><?php echo $syn->titre;?></h2>

    <!--SYNOPSIS-->
    <a style="color:orange;"href="traitement/ajoutfavoris.php?id=<?php echo $syn->id_film ?>">Ajouter ce film au favoris</a>
    <div class="img-resume">
        <img class="img-film" src=<?php echo $img->image_film?> alt="">
        
        <div class="synop">
                <p class="synop-title">Synopsis</p>
                <p><?php echo $syn->synopsis ?></p>
                
        </div>
    </div>
