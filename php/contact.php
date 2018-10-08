<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'AMT PRACOWNIA ARCHITEKTURY';
$email_subject = 'Nowa wiadomosc AMT';
$email_body = "Name: $name.\n".
                "Email: $email.\n".
                "Message: $message.\n";

$to = "biuro@amtpracownia.pl";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("locaction: kontakt.html");


?>

