<?php

// NAME
if (isset($_POST['submit'])) {

  $name = $_POST["name"];
  $email = $_POST["email"];
  $msg_sub = $_POST["msg_sub"];
  $message = $_POST["message"];


$message = wordwrap($message,70);

$EmailTo = "adonay1314@gmail.com";
$Subject = "New Message from Adonayverrett.com";
$From = "Adonayverrett.com";

// prepare email body text
$body = "\n This is a message from the Contact section of Adonayverrett.com \n \n Name: $name \n Email: $email \n Message Subject: $msg_sub \n Service Description: $message";

// send email
mail($EmailTo, $Subject, $body, "From: $From");

header('Location: index.html');
}

?>

	  