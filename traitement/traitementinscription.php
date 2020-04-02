<?php 

include '../connectbdd/connectBDD.php';
$errors=array();

if(empty($_POST['Nom']) || !preg_match('/^[a-zA-Z]+$/',$_POST['Nom'])){
    $errors['Nom']="Le nom est incorect";
}

if(empty($_POST['Prenom']) || !preg_match('/^[a-zA-Z]+$/',$_POST['Prenom'])){
    $errors['Prenom']="Le prenom est incorect";
}

if(empty($_POST['Mail']) || !filter_var($_POST['Mail'],FILTER_VALIDATE_EMAIL)){
    $errors['Mail']="L'email est incorect";
}else{
    $vermail=$bdd->prepare("SELECT id_user FROM dbs296644.User WHERE mail= ? ");
    $vermail->execute([$_POST['Mail']]);
    $mail=$vermail->fetch();
    if($mail){
        $errors['Mail']="L'adresse mail existe deja";
    }
}

if(empty($_POST['Pseudo']) || !preg_match('/^[a-zA-Z0-9_]+$/',$_POST['Pseudo'])){
    $errors['Pseudo']="Le pseudo est incorect";
}else{
    $ver=$bdd->prepare("SELECT id_user FROM dbs296644.User WHERE pseudo= ? ");
    $ver->execute([$_POST['Pseudo']]);
    $pseudo=$ver->fetch();
    if($pseudo){
        $errors['Pseudo']="Le pseudo existe deja";
    }

}

if(empty($_POST['Password']) || $_POST['Password']!=$_POST['Confirmpassword']){
    $errors['Password']="Le mot de passe est incorect";
}


if(empty($errors)){
    $req=$bdd->prepare("INSERT INTO dbs296644.User SET pseudo = ? , nom = ? , prenom = ?, mdp = ? , mail = ? ,id_typeuser = ?" );
    $password=password_hash($_POST['Password'],PASSWORD_BCRYPT);
    $req->execute([$_POST['Pseudo'],$_POST['Nom'], $_POST['Prenom'],$password,$_POST['Mail'],2]);
    echo "<p>inscription reussie</p>";
    echo '<a href="../connexion.php">onglet connexion</a>';
}else{

    debug($errors);
}



function debug($variable){
    echo '<pre>'.print_r($variable,true).'<pre>';
}
?>