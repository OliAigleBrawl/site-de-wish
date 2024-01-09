<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n"

$recipient = "olivezeau@hotmail.com";

mail($recipient, $subject, $message, $mailheader)or die("Error")

echo'

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins&display=swap" 
  rel="stylesheet">
  <link rel="stylesheet" href="contact.css">
</head>
<body>
  <div class="container">
    <h1>Merci de m'avoir contacter. Je viendrai à vous le plus rapidement possible</h1>
    <p class="back">Retourner à la <a href="contact.html">page d'accueil</a>.</p>
  </div>
  </body>
</html>



';


?>