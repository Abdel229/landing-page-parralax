<?php 
    session_start();
    if(!isset($_SESSION) || empty($_SESSION)){
        header('Location:index.php');
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmer</title>
    <style>
    .retour {
	box-shadow:inset 0px 0px 24px -24px #e184f3;
	background:linear-gradient(to bottom, #c123de 5%, #a20dbd 100%);
	background-color:#c123de;
	border-radius:6px;
	border:1px solid #a511c0;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Impact;
	font-size:26px;
	font-weight:bold;
	padding:12px 31px;
	text-decoration:none;
	text-shadow:-2px -6px 0px #9b14b3;
}
.retour:hover {
	background:linear-gradient(to bottom, #a20dbd 5%, #c123de 100%);
	background-color:#a20dbd;
}
.retour:active {
	position:relative;
	top:1px;
}

        p{
            position: absolute;
            width: 100vw;
            display: flex;
            align-items:center;
            justify-content:center;
            height:200px;
            background-color: blue;
            color:white;
            font-size: 2em;
        }
    </style>
</head>
<body>
    

<a href="index.php" class="retour">Accueil</a>

   <?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


//mail et nom du client


//Load Composer's autoloader
require 'vendor/autoload.php';
require 'model/connexion.php';
require 'model/get-info-client.php';
$res=model_getinfo($_GET['client']);



//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0/*SMTP::DEBUG_SERVER*/;                    //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'rakibeabdelaboudou@gmail.com';                     //SMTP username
    $mail->Password   = 'Abd,emmanuela.';                               //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

//die(var_dump($mail->Username));
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
    echo '<p>Vous receverez un mail de confirmation</p>';
    ;
} catch (Exception $e) {
    //echo "<p>Un problème est survenu,veuillez réssayer: {$mail->ErrorInfo}</p>";
    echo "<p>Vos informations ont été reçu avec succès</p> ";
}
?>
</body>
</html>



