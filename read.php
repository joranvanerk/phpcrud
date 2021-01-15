<?php

include("./connect_db.php");

$sql = "SELECT * FROM `users`";

$result = mysqli_query($conn, $sql);

$recordss = "";
  while ($records = mysqli_fetch_assoc($result)) {
    $recordss .= "<tr><th scope='row'>" . $records["id"] . "</th>
    <td>" . $records["voornaam"] . "</td>
    <td>" . $records["achternaam"] . "</td>
    <td>" . $records["email"] . "</td>
    <td>" . $records["wachtwoord"] . "</td>
    <td>" . $records["leeftijd"] . "</td>
    <td>" . $records["lengte"] . "</td>
    <td>
      <a href='./update.php?id=" . $records["id"] ."'>
        <img src='./img/icons/pen.png' alt='edit'</td>
        </a>
    </tr>";
  }

// echo "<pre>" . var_dump($records) . "</pre>";

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
            <p class="lead">Alle inzendingen bekijken..</p>
            <pre><a href="./index.php" class="lead">Inzenden</a>/</pre>
          </div>
        </div>
        <div class="col2">
        <!-- Op deze plek komt de tabel -->
        <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Voornaam</th>
            <th scope="col">Achternaam</th>
            <th scope="col">Email</th>
            <th scope="col">Wachtwoord</th>
            <th scope="col">Leeftijd</th>
            <th scope="col">Lengte</th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
          <?php
            echo $recordss
          ?>
        </tbody>
        </table>
        </div>
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