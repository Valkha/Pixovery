<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload image</title>
    <link rel="stylesheet" href="CSS/upload_style.css">
</head>

<body>
    <?php
    if(isset($_SESSION['username'])){
        echo "<div class='upload_field'>
        <h1>upload des images<br>(.png ou .jpg)
        </h1>
        <input type='file' id='image_input' accept='image/png, image/jpg'>
    </div>";
    }else{
        header("Location:index.html");
    }  
?>
</body>

</html>