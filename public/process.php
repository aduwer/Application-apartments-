<?php

function wyslij_email(){

include 'PHPMailer.php';
require 'SMTP.php';


$mail = new PHPMailer;

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com'; 
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'ajdhjaff@gmail.com';                 // SMTP username
$mail->Password = 'qwerty1!2@'; 
$mail->Port = 587; // not 587 for ssl 
$mail->SMTPDebug = 0; 
$mail->SMTPSecure = "tls";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 

$mail->From = 'ajdhjaff@gmail.com';
$mail->FromName = 'Rezerwacja';
$mail->addAddress("adrian.duwer@gmail.com");     // Add a recipient


$mail->isHTML(true);                                  // Set email format to HTML


$name = $_POST['imie'];
$surname = $_POST['nazwisko'];
$email = $_POST['email'];
$number = $_POST['telefon'];
$wiadomosc = $_POST['wiadomosc'];

//print_r($_POST);

$mail->Subject = 'Apartamenty - rezerwacja';
$mail->Body    = 'Wiadomość od: ' .$name .' ' .$surname .'<br/>' .'Adres email: ' .$email .'<br/>' .'Numer telefonu: ' .$number .'<br/>' .'Treść wiadomości: '.$wiadomosc;


if(!$mail->Send()) {
  echo "Error while sending Email.";
  // var_dump($mail);
} else {
  
}

header("Location: http://localhost:8000");
;
die();

}
?>
