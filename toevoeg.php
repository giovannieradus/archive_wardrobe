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
    <div class="row">
      <div class="col-lg">
        <div class="form-group">
<script>
         function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                document.getElementById("foto1").style.maxWidth = "400px";
            document.getElementById("foto1").style.maxHeight = "400px";
        }

                reader.onload = function (e) {
                    $('#foto1')
                        .attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
           
</script>
<img src="Img/download.png" width="300px" height="300px" id="foto1"  alt="your image" />
          </div>
      </div>
      <div class="col-md">
        <form method="POST" action="toevoeg1.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="Merk">Brand</label>
                <input type="text" class="form-control" id="Brand" name="Brand"  placeholder="Dior">
              </div>
            <div class="form-group">
              <label for="Naam">Model</label>
              <input type="text" class="form-control" id="Model" name="Model" placeholder="Moshpit Tee">
            </div>
            <div class="form-group">
                <label for="Conditie">Decade</label>
                <input type="text" class="form-control" id="Decade" name="Decade"  placeholder="10s">
              </div>
              <div class="form-group">
                <label for="Prijs">Art Number</label>
                <input type="text" class="form-control" id="Art" name="Art"  placeholder="HMM28772">
              </div>
              <div class="form-group">
                <label for="Informatie">Information</label>
                <input type="text" rows='3' class="form-control" id="Information" name="Information"  placeholder=" 350 V2. Fresh off the heels of NBA All-Star Weekend, these Yeezy's are nicknamed the "Zebras," and come in a classic white, black and red color scheme. Sporting a white-based Primeknit upper with black accents giving off a Zebra stripe vibe, “SPLY-350” displayed across the sides in red finished off by a translucent BOOST cushioned sole. To date they are the most limited adidas Yeezy release and have instantly">
              </div>
              <label for="exampleFormControlFile1">Picture</label>
            <div class="form-group">
              <input type="file" accept='image/*' class="form-control-file" name="Foto1" id="Foto1"
            onchange="readURL(this);">
        </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          
        </form>
      </div>
    
    </div>
  </div>
</body>
</html>