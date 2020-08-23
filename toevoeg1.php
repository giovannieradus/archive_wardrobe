<?php
require 'config.php';


$Brand = $_POST['Brand'];
$Model = $_POST['Model'];
$Decade = $_POST['Decade'];
$Art = $_POST['Art'];
$Information = $_POST['Information'];
$Foto1 = $_FILES['Foto1']; 
$Naam1 = $Foto1['name'];

if (isset($Foto1)){

    $file_name =  $Foto1['name'];
    $file_type =  $Foto1['type'];
    $file_size =  $Foto1['size'];
    $file_tem_loc = $Foto1['tmp_name'];
    $file_store = "Img/" . $file_name;  

    if(move_uploaded_file($file_tem_loc, $file_store)){
     echo "het is gelukt";
    }
    else{
        echo "foutje";
    }
}


$query = "INSERT INTO `archive_fashion`
VALUES (NULL, '$Brand', '$Model', '$Decade', '$Art', '$Information', '$Naam1', '')";



if (mysqli_query($mysqli ,$query)) {
    header("Location: index.php");
   
   

}
else {
    echo $query;

}
?>