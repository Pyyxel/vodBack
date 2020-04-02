<!--CATALOGUE FILMS-->

<div class="axeldroite">
    <?php 
        include 'connectbdd/connectBDD.php'; 
        //req id film
        $reqIdFilm = $bdd->prepare("SELECT id_film,titre,note,duree FROM dbs296644.Film");
        $reqIdFilm ->execute();
        //boucle id film
        while( $donnees = $reqIdFilm->fetch(PDO::FETCH_OBJ) ) {
        //req img film
        $reqImgFilm=$bdd->prepare("SELECT image_film FROM dbs296644.affiche WHERE id_film=$donnees->id_film");
        $reqImgFilm->execute();
        $imgFilm=$reqImgFilm->fetch(PDO::FETCH_OBJ);
    ?>
    <a href=<?php echo "parasite.php?id=".$donnees->id_film; ?> class="versfilm">
        <div class="cardaxel">
                <img class="poster-img" src=<?php echo $imgFilm->image_film ;?> alt="">
                <div class="titrefilm"><?php echo $donnees->titre;?></div>
                <div class="infoaxel">
                    <div class="textaxel">
                       <p><?php echo $donnees->note;?></p> 
                       <p><?php echo $donnees->duree;?></p> 
                       <p>Thriller</p>    
                    </div>
                </div>
        </div>
        <?php } ;?>
    </a>
    
</div>
</div>



