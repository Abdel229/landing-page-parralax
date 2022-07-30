<?php
session_start();
$_SESSION=array();
session_destroy();
require '../model/verifie_admin.php';
//vérification du get
if(isset($_GET) && !empty($_GET)){
    extract($_GET);
    $n=(int)$n;
    if(is_int($n)){
        if($n<0 && $n>=2){
            $n=2;
        }
    }
    else{
        $n=2;
    }
}
//tableau d'erreur
$error=[
    'Formulaire non rempli',
    'Coordonnées non correct',
    'Une erreur est survenue,veillez réssayer'
];
//vérification si un admin existe
function verifie_admin(){


if(!exist_admin()){
    session_start();
    $_SESSION['admin']='yes';
    header('Location:inscription.php');
    exit();
}
}
verifie_admin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/indexadmin.css">
    <title>Admin</title>

</head>
<body>
    <div>
    <h2><?php if(isset($n)){echo $error[$n];}?></h2>
    <h1>Connexion admin</h1>
    <form action="../controller/verifie_admin.php" method="post">
        <p><input type="text" name="nom" id="" placeholder="Nom" autocomplete="off" required></p>
        <p><input type="password" name="pswd" id="" placeholder="Mot de passe" autocomplete="off" required></p>
        <p><button type="submit">Envoyer</button></p>
    </form>
    </div>
</body>
</html>