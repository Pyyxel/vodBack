<?php
    
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $subject=$_POST['sujet'];
    $email=$_POST['mail'];
    $message=$_POST['message'];
    $headers="Email : ".$email." / ".$nom." ".$prenom;
    $to="ax.vassaux@gmail.com";
   
    
    mail($to,$subject,$message,$headers);
    echo "Le mail a bien éte envoyé";
    echo '<a href="../index.php">pour retourner a lacceuil</a>';
   
    
    
    
    
    
    
    


?>