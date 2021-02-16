

<?php 

    // includen van de database
    include("./connect_db.php");

    // schoonmaken
    function cleaning($raw_data) {
        global $conn;
        $data = mysqli_real_escape_string($conn, $raw_data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // alle variabelen binnenhalen
    $voornaam = cleaning($_POST["voornaam"]);
    $email = cleaning($_POST["email"]);
    $achternaam = cleaning($_POST["achternaam"]);
    $wachtwoord = cleaning($_POST["wachtwoord"]);
    $leeftijd = cleaning($_POST["leeftijd"]);
    $lengte = cleaning($_POST["lengte"]);

    // de mysql query
    $sql = "INSERT INTO `users` (`id`, `voornaam`, `leeftijd`, `achternaam`, `email`, `wachtwoord`, `lengte`) VALUES (NULL, '$voornaam', '$leeftijd', '$achternaam', '$email', '$wachtwoord', '$lengte');";

    // connectie opzetten
    mysqli_query($conn, $sql);

    // return
    header("Location: ./read.php");

?>