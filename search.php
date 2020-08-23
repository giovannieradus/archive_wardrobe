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
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php"><img style='max-height:55px; max-height:55px;' src='Img/Logo.png'></a>
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
  <div class="container">
<?php

$Naam = $_POST['naam'];

require_once 'config.php';

$query = "SELECT * FROM `archive_fashion` WHERE `Model` LIKE '%%%%$Naam%%%'" ;
$result = mysqli_query($mysqli, $query);
if (mysqli_num_rows($result) == 0)
{
echo "<p>Er zijn geen resultaten gevonden.</p>";
}
while ($rij = mysqli_fetch_array ($result) )
{
  foreach ($result as $item) {
    echo "
        <div class='card'>
  <div class='content'>
      <div class='content-overlay'></div>
      <img class='content-image' src='Img/" . $item['Photo'] . "'>
      <div class='content-details fadeIn-top'>
        <a id='button1' href='clothes.php?ID=" . $item['ID'] . "'>" . $item['Brand'] . " " . $item['Model'] . "</a><br>
      </div>
    </a>
  </div>
  </div>
<style>

.content{
  margin: 0 auto;
}

.card{
  display: inline-block;
  width: 250px; 
  height: 250px;
  margin-left:20px;
  
}


.content-image{
  display: block;
  margin-left: auto;
  margin-right: auto;
  max-width: 230px;
max-height: 230px;
}
.content .content-overlay {
  background: rgba(0,0,0,0.5);
  position: absolute;
  height: 100%;
  width: 100%;
  left: 0;
  top: 0;
  bottom: 0;
  right: 0;
  opacity: 0;
  -webkit-transition: all 0.4s ease-in-out 0s;
  -moz-transition: all 0.4s ease-in-out 0s;
  transition: all 0.4s ease-in-out 0s;
}

.content:hover .content-overlay{
  opacity: 1;
}
.content:hover .content-details{
  top: 50%;
  left: 50%;
  opacity: 1;
}
.fadeIn-top{
  top: 20%;
}
@media screen and (max-width: 600px) {
  .card {
    width: 150px; height: 150px;
  }
  .content-image{
    display: block;
    margin-left: auto;
    margin-right: auto;
    max-width: 130px;
  max-height: 130px;
  }
  #button1{
    color:white;
    font-size:12px;
  }
}

.content-details {
  position: absolute;
  text-align: center;
  padding-left: 1em;
  padding-right: 1em;
  width: 100%;
  top: 50%;
  left: 50%;
  opacity: 0;
  -webkit-transform: translate(-50%, -50%);
  -moz-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  -webkit-transition: all 0.3s ease-in-out 0s;
  -moz-transition: all 0.3s ease-in-out 0s;
  transition: all 0.3s ease-in-out 0s;
}
#button1{
  color:white;
  font-family: 'Alata', sans-serif;
  font-size:18px;
}
</style>
";
}
}

?>

  </div> 
</body>
</html>


