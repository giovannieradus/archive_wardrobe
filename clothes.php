<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" 
      type="image/png" 
      href="Img/Logo.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>ArchiveFashion</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php"><img style='max-height:55px; max-height:55px;' src='Img/LogoWit.png'></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    <li class="nav-item active">
          <a class="nav-link" href="index.php">Pieces</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="toevoeg.php">Toevoegen</a>
        </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action='search.php' method='POST'>
      <input class="form-control mr-sm-2" type="search" name='naam' placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
  <div class='container'>
<?php
//Voeg het bestand config.php toe:
require_once 'config.php';
//Maak de query
$ID = $_GET[ID];

$query = "SELECT * FROM archive_fashion WHERE ID = " . $ID;


$result = mysqli_query($mysqli, $query);

while ($rij = mysqli_fetch_array ($result) ){
    foreach ($result as $item) {
        echo "
        <div id='schoeninfo'>
        <div class='row'>
    <div class='col'>
        <img src='Img/" . $item['Photo'] . "' style='max-width:400px; max-height:400px;'>
        </div>
        <div class='col'>
        <div id='blok'>
        <p id='modelc'>" . $item['Model'] . "</p>
        <p id='brandc' style='text-align:right'>" . $item['Brand'] . "</p>
        <p id='decadec'>Decade: " . $item['Decade'] . "</p>
        <p id='artnumberc'>Art Number: " . $item['Art Number'] . "</p>
        <p id='informationc' style='text-align:right'>Information: <br>" . $item['Information'] . "</p>
        </div>
        </div>
        </div>
        </div>
";

      
    }
    }
?>
</div>
</body>
</html>