<?php 
    session_start();
    include '../connectbdd/connectBDD.php';
    $pseudo=$_POST['username'];
    $password=$_POST['password_user'];
 
    $reqpseudo=$bdd->prepare("SELECT pseudo,id_user,id_typeuser FROM dbs296644.User");
    $reqpseudo->execute();
    $bool="false";
    while($donnéepseudo=$reqpseudo->fetch(PDO::FETCH_OBJ)){
        if($pseudo==$donnéepseudo->pseudo){
            $bool="true";
            $id=$donnéepseudo->id_user;
            $idType=$donnéepseudo->id_typeuser;
            
        }
    }
    if($bool){
        $reqmdp=$bdd->prepare("SELECT mdp FROM dbs296644.User WHERE  id_user=$id");
        $reqmdp->execute();
        $mdpuser=$reqmdp->fetch(PDO::FETCH_OBJ);
        $mdpuser=$mdpuser->mdp;
        var_dump($mdpuser);
        $mdpval=password_verify($password,$mdpuser);
       
        if($mdpval){
            $_SESSION['ETAT']="conection reussie";
            $_SESSION['username'] = $pseudo; 
            $_SESSION['typeuser'] = $idType;
            header('Location: ../index.php');
        }else{
            $_SESSION['ETAT']="Mot de passe invalide";
            header('Location: ../index.php');

        }
        
    }
    
?>