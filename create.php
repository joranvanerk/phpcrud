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

    function cleaning($raw_data) {
        global $conn;
        $data = mysqli_real_escape_string($conn, $raw_data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $voornaam = cleaning($_POST["voornaam"]);
    $email = cleaning($_POST["email"]);
    $achternaam = cleaning($_POST["achternaam"]);
    $wachtwoord = cleaning($_POST["wachtwoord"]);
    $leeftijd = cleaning($_POST["leeftijd"]);
    $lengte = cleaning($_POST["lengte"]);


    $sql = "INSERT INTO `users` (`id`, `voornaam`, `leeftijd`, `achternaam`, `email`, `wachtwoord`, `lengte`) VALUES (NULL, '$voornaam', '$leeftijd', '$achternaam', '$email', '$wachtwoord', '$lengte');";

    mysqli_query($conn, $sql);

    header("Location: ./read.php");

?>