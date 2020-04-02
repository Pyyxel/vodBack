 <!--REAL BA-->

 <div class="real-real">Réalisateur</div>

<div class="real-ba">
    <?php 
        $req=$bdd->prepare("SELECT id_producteur  FROM dbs296644.Produire WHERE id_film=$film");
        $req->execute();
        $donnee=$req->fetch(PDO::FETCH_OBJ);
        $req2=$bdd->prepare("SELECT * FROM dbs296644.Producteur WHERE id_producteur=?");
        $req2->execute([$donnee->id_producteur]);
        $donnee2=$req2->fetch(PDO::FETCH_OBJ);
    ?>

    <div class="real">
        <div class="img-real">
            <img src=<?php echo $donnee2->image;?>alt="">
            <div><p><?php echo $donnee2->prenom."   ".$donnee2->nom;?></div>
        </div>
        <div class="text-real">
            Pour son film Parasite, il remporte la Palme d'or au festival de Cannes 2019, puis en 2020, le prix du
            meilleur film en langue étrangère aux Golden Globes, quatre Oscars (meilleur scénario original, meilleur
            film international, meilleur réalisateur, et meilleur film) et le César du meilleur film étranger.
        </div>
    </div>

    <div class="ba-yt">
        <iframe width="400" height="250" src="https://www.youtube.com/embed/BboKKBYx7-0" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
    </div>

</div>
