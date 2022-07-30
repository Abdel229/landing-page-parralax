<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
include '../model/formulaire.php';
require '../vendor/autoload.php';
require '../model/get-info-client.php';
    /*vérification des infos envoyé par le formulaire*/
//Vérification si le post est vide

     if(!isset($_POST) || empty($_POST)){
         header('Location:../formulaire.php?n=0');
         exit;
     }



    //Vérification du nom et prénom
    // if(!isset($_POST['nom']) && empty($_POST['nom'])){
    //     header('Location:../formulaire.php?n=1');
    //     exit();
    // }
    //vérifie si le nom contient des caractères spéciaux
    if(preg_match('#[0-9@\?\*\:]#',$_POST['nom'])){
        header('Location:../formulaire.php?n=1');
        exit();
    }

    //vérification de la nationnalité
    if(preg_match('#[0-9@\?\*\:]#',$_POST['countries'])){
       header('Location:../formulaire.php?n=2');
        exit() ;
    }

    //vérification de l'adresse mail
    if(!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)){
        header('Location:../formulaire.php?n=3');
        exit() ;
    }

    //vérification du numéro de téléphone
    if(preg_match('#[a-zA-Z]#',$_POST['phone_number'])){
        header('Location:../formulaire.php?n=4');
        exit() ;
    }

    //Vérification du pays et ville de résidence
    if(preg_match('#[0-9@\?\*\:]#',$_POST['city'])){
        header('Location:../formulaire.php?n=5');
         exit() ;
     }
// vérification si les infos existe déja
$exist=exist($_POST);

if($exist){
    header('Location:../formulaire.php?n=6');
            exit();
}
//vérification si les infos ont été inséré
    $confirmation=insert($_POST);
    if($confirmation){
        session_start();
        $_SESSION['nom']='succès';
        $val=$_POST['nom'];

//envoi du mail à l'admin
  
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function


//mail et nom du client


//Load Composer's autoloader

$res=model_getinfo($_POST['nom']);



//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'ftpupload.net';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'epiz_31929849';                     //SMTP username
    $mail->Password   = '29K1LedOYoRUl';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`


    $mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        )
        );
    //Recipients
    $mail->setFrom('sionmarkgroup@gmail.com', 'Master class');
    $mail->addAddress($res['mail'], $res['nom']);     //Add a recipient
   // $mail->addAddress('ellen@example.com');               //Name is optional
    $mail->addReplyTo('sionmarkgroup@gmail.com', 'SION MARK');
 //   $mail->addCC('cc@example.com');
   // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'confirmation';
    $mail->Body    = 'Votre inscription à la master class a été recu avec succès <br> Vous aure un retour dans les plus bref délais';
    $mail->AltBody = 'Votre mail a été recu';

    $mail->send();
    
} catch (Exception $e) {
    echo "<p>Un problème est survenu,veuillez réssayer: {$mail->ErrorInfo}</p>";
}

        header('Location:../confirmation.php?client='.$val);


        
    }else{
        header('Location:../formulaire.php?n=7');
        exit();
    }

    

     