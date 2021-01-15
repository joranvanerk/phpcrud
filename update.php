<?php

    $id = $_GET["id"];

    include("./connect_db.php");

    $sql = "SELECT * FROM `users` WHERE `id` = $id";

    $result = mysqli_query($conn, $sql);

    $record = mysqli_fetch_assoc($result);

    
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>


  <main class="container">
    <div class="col12">
    <div class="jumbotron jumbotron-fluid">
          <div class="container">
            <h1 class="display-5">Mini-disco</h1>
            <p class="lead">Een inzending bijwerken..</p>
            <pre><a href="./index.php" class="lead">Inzenden</a>/<a href="./read.php" class="lead">Inzendingen bekijken</a></pre>
          </div>
        </div>
    </div>
        <div class="col6">
          <form action="./update_script.php" method="POST">
            <div class="form-group">
              <label for="voornaam">Voornaam</label>
              <input type="text" name="voornaam" class="form-control" id="voornaam" aria-describedby="firstnameHelp" placeholder="Invoer voornaam" value="<?php echo $record["voornaam"]; ?>">
            </div>
            <div class="form-group">
              <label for="achternaam">Achternaam</label>
              <input type="text" name="achternaam" class="form-control" id="achternaam" aria-describedby="lastnameHelp" placeholder="Invoer achternaam" value="<?php echo $record["achternaam"]; ?>">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" name="email" class="form-control" id="email" aria-describedby="lastnameHelp" placeholder="Invoer email" value="<?php echo $record["email"]; ?>">
            </div>
            <div class="form-group">
              <label for="infix">Leeftijd</label>
              <input type="number" name="leeftijd" class="form-control" id="leeftijd" aria-describedby="infixhelp" placeholder="Invoer leeftijd" value="<?php echo $record["leeftijd"]; ?>">
            </div>
            <div class="form-group">
              <label for="lengte">Lengte</label>
              <input type="number" name="lengte" class="form-control" id="lengte" aria-describedby="infixhelp" placeholder="Invoer lengte" value="<?php echo $record["lengte"]; ?>">
            </div>
            <div class="form-group">
              <label for="wachtwoord">Wachtwoord</label>
              <input type="password" name="wachtwoord" class="form-control" id="wachtwoord" aria-describedby="infixhelp" placeholder="Invoer wachtwoord" value="<?php echo $record["wachtwoord"]; ?>">
            </div>
            <input type="hidden" value="<?php echo $id; ?>" name="id">
            <button type="submit" class="btn btn-primary">Versturen</button>
          </form>
        <div class="col6"></div>
    </div>
    <div class="row">
        <div class="col12"></div>
        <p>We zien je graag terug bij de mini-disco!</p>
    </div>
  </main>
</form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="./js/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>