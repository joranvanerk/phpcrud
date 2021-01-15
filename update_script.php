<?php

include ("connect_db.php");

$voornaam = $_POST["voornaam"];
$email = $_POST["email"];
$achternaam = $_POST["achternaam"];
$wachtwoord = $_POST["wachtwoord"];
$leeftijd = $_POST["leeftijd"];
$lengte = $_POST["lengte"];
$id = $_POST["id"];

$sql = "UPDATE `users`
 SET `voornaam` = '$voornaam',
  `leeftijd` = '$leeftijd',
   `achternaam` = '$achternaam',
    `email` = '$email',
     `wachtwoord` = '$wachtwoord',
      `lengte` = '$lengte'
       WHERE `id` = $id;";

mysqli_query($conn, $sql);

header("Location: ./read.php")

?>