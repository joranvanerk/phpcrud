<?php
    // $firstname = "Joran";
    // $age = 16;
    // $shoesize = 42;


    // $user = array("firstname" => "Joran", "age" => 16, "shoesize" => 42);
    
    // //echo "<h3>Mijn voornaam is " .  $user["firstname"] . "</h1>";
    // //echo "<h3>Mijn leeftijd is " .  $user["age"] . "</h1>";
    // //echo "<h3>Mijn schoenmaat is " .  $user["shoesize"] . "</h1>";


    // echo "<h1>Uw ingevulde gegevens:</h1>";
    // echo "<h2>Mijn voornaam is " .  $_POST["firstname"] . "</h1>";
    // echo "<h2>Mijn tussenvoegsel is " .  $_POST["tussenvoegsel"] . "</h1>";
    // echo "<h2>Mijn acternaam is " .  $_POST["achternaam"] . "</h1>";
    // echo "<h2>Ik ben " .  $_POST["lengte"] . " lang</h1>";
    // echo "<h2>Mijn leeftijd is " .  $_POST["age"] . "</h1>";
?>

<?php 

    include("./connect_db.php");

    $voornaam = $_POST["voornaam"];
    $email = $_POST["email"];
    $achternaam = $_POST["achternaam"];
    $wachtwoord = $_POST["wachtwoord"];
    $leeftijd = $_POST["leeftijd"];
    $lengte = $_POST["lengte"];


    $sql = "INSERT INTO `users` (`id`, `voornaam`, `leeftijd`, `achternaam`, `email`, `wachtwoord`, `lengte`) VALUES (NULL, '$voornaam', '$leeftijd', '$achternaam', '$email', '$wachtwoord', '$lengte');";

    mysqli_query($conn, $sql);

    header("Location: ./index.php");

?>