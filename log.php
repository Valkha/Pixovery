<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log Redha</title>
    <link rel="stylesheet" href="CSS/log_style.css">
</head>

<body>
    <div class="login-form">
    <h1>Connexion</h1>
    <form method="POST" action="login.php">
   
    
<!-- PHP -->    

<?php
require_once './vendor/autoload.php';

if(isset($_GET['error'])){
    echo $_GET['error'];
}
?>
<!-- fin PHP --> 


<div class="txt_field">
                <input type="text" name="username" required placeholder="Identifiant">
            </div>
            <div class="txt_field">
                <input type="password" name="password" required placeholder="Mot de passe">
            </div>
            <input type="submit" value="Connexion">
        </form>
    </div>
</body>

</html>