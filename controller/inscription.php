<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require '../model/inscription.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
// require 'vendor/autoload.php';


// require '../model/student-existe.php';

// si rien n'est envoyé, notifié à la page d'accueil
if (empty($_POST) || !isset($_POST)) {
   header('Location:../index.php#formulaire?error=0');
   exit();
   
}


extract($_POST);

$nom = htmlspecialchars($nom);
$prenoms = htmlspecialchars($prenoms);
$mail = htmlspecialchars($mail);
$number = htmlspecialchars($number);

//verification si les infos existe déja
//   $exist=exist($nom,$prenoms,$mail);
//   var_dump($exist);
//   if(!empty($exist)){
//     header('Location:../index.php?error=1');
//    echo 'lol';
//      exit();

//   }
//   echo 'ok';
//insertion des éléménts dans la base de donnée
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function


//Create an instance; passing `true` enables exceptions
// $mail = new PHPMailer(true);

// try {
//     //Server settings
//     $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
//     $mail->isSMTP();                                            //Send using SMTP
//     $mail->Host       = 'smtp.example.com';                     //Set the SMTP server to send through
//     $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
//     $mail->Username   = 'devmaster229@gmail.com';                     //SMTP username
//     $mail->Password   = 'epitech229';                               //SMTP password
//     $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
//     $mail->Port       = 465;   
//     $mail->CharSet='UTF-8';                                 //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
//     echo "lol<br>";
//     //Recipients
//     $mail->setFrom('devmaster229@gmail.com', 'Dev Master');
//     $mail->addAddress($mail, $prenom);     //Add a recipient
//                 //Name is optional
//     // $mail->addReplyTo('info@example.com', 'Information');
//     // $mail->addCC('cc@example.com');
//     // $mail->addBCC('bcc@example.com');

//     //Attachments
//     // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
//     // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

//     //Content
//     $mail->isHTML(true);                                  //Set email format to HTML
//     $mail->Subject = 'Accusé de réception';
//     $mail->Body    = 'Vos information ont été reçu avec succès<br>Nous vous ferons un retour pour confirmer votre inscription';
//     $mail->AltBody = 'Vos information ont été reçu avec succès. Nous vous ferons un retour pour confirmer votre inscription';

//     $mail->send();
//     echo 'succès';
    
// } catch (Exception $e) {
//     echo "Une erreur est survenu: {$mail->ErrorInfo}";
//     exit();

insert($nom, $prenoms, $mail, $number);
//envoi d'un mail à l'étudiant


//  verification si les éléménts ont étés insérés

   header('Location:../view/confirmation.php'); //informations inscrit

   

