<?php
$name = $_POST['author'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['comment'];
$formcontent=" From: $name \n Email: $email \n Subject: $subject \n Message: $message";
$recipient = "doomblood2345@gmail.com";
$mailheader = "From: agrawalkm@rknec.edu \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header( 'Location: contact.html' ) ;
?>
