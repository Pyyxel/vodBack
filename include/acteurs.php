<!--Liste acteurs-->
<div class="acteurs-titre">Acteurs</div>
<section class="liste-acteurs">
<?php
        //requete id acteur
        $reqidact=$bdd->prepare("SELECT id_acteur FROM dbs296644.Jouer WHERE id_film=$film");
        $reqidact->execute();
        while($idact=$reqidact->fetch(PDO::FETCH_OBJ)){
            $reqact=$bdd->prepare("SELECT * FROM dbs296644.Acteur WHERE id_acteur= ? ");
            $reqact->execute(["$idact->id_acteur"]);
            $donnee=$reqact->fetch(PDO::FETCH_OBJ);
        ?>

            
                
                    <div class="acteur">
                        
                        <img class="img-acteur" src=<?php echo $donnee->image;?> alt="">
                        <div><?php echo $donnee->prenom."   ".$donnee->nom;?></div>
                    </div>
               
           



        <?php } ?>
 </section>
        
        
