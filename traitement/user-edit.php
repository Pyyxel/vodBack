<?php
    $mdpact=$_POST['mdpact'];
    $nom=$_POST['nom'];
    $email=$_POST['email'];
    $mdp1=$_POST['mdp1'];
    $mdp2=$_POST['mdp2'];
    $id=$_GET['id'];
   
    
    include '../connectbdd/connectBDD.php';
    $req=$bdd->prepare("SELECT * FROM dbs296644.User WHERE id_user=$id");
    $req->execute();
    $user=$req->fetch();
    $mdpuser=$user['mdp'];
    if((!empty($mdpact)) && (password_verify($mdpact,$mdpuser))){
        if(!empty($nom)){
            $req=$bdd->prepare("UPDATE dbs296644.User SET nom = ? WHERE id_user=$id");
            $req->execute([$nom]);
        }
        
        if((!empty($mdp1))&&(!empty($mdp2))&&($mdp1==$mdp2)){
            $password=password_hash($mdp1,PASSWORD_BCRYPT);
            $req=$bdd->prepare("UPDATE dbs296644.User SET mdp = ? WHERE id_user=$id");
            $req->execute([$password]);
        }
        if(!empty($email)){
            $req=$bdd->prepare("UPDATE dbs296644.User SET mail = ? WHERE id_user=$id");
            $req->execute([$email]);
        }
        header('Location: ../user.php');
    }else{
        echo "Erreur lors du mot passe, entrez votre mot de passe actuelle pour modifier";
        echo '<a href="../user.php"><p>retour</p></a>';
    }
    

    

?>