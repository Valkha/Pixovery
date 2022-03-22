<?php

require_once './vendor/autoload.php';

if (!empty($_POST))

{
    $config = include('config.php');
    $adminUsername = $config['ADMIN_USERNAME'];
    $adminPassword = $config['ADMIN_PASSWORD'];

    $username = $_POST['username'];
    $mdp = $_POST['password'];

    if($adminUsername == $username){

        if($adminPassword == $mdp){
            session_start();
            $_SESSION['username'] = $username;
            header("Location:upload.php");
        }
    }else{
        echo $adminUsername + '<br>';
    
        echo "Identifiant inconnu";
    }
}
?>