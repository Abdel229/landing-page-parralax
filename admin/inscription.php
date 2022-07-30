<?php 
    session_start();
    if(!isset($_SESSION) || empty($_SESSION)){
        header('Location:index.php');
    }
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
    'Les mots de passe ne sont pas identique',
    'Une erreur est survenue,veillez réssayer'
];
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/css/indexadmin.css">
        <title>Admin</title>
        <style>
        form{
            justify-content:space-between;
            align-items:center;
            height:50%;
        }
        </style>
    </head>
    <body>
        <div>
    <h2>
        <?php if(isset($n)){echo $error[$n];}?></h2>
        <h1>Creation d'un admin</h1>
        <form action="../controller/inscrit_admin.php" method="post">
            <input type="text" name="nom" id="" placeholder="Nom"  autocomplete="off" required>
            <input type="password" name="pswd" id="pswd" placeholder="Mot de passe" autocomplete="off" required>
            <input type="password" name="confpswd" id="confpswd"  placeholder="confirmation mot de passe" autocomplete="off" required>
            <button type="submit">Envoyer</button>
        </form>
        </div>
    </body>
    </html>