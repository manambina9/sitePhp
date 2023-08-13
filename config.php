<?php 
    $username ="root";
    $servername = "localhost";
    $password = "";
    $bdd = "formation";

    $conn = new mysqli($servername, $username ,$password ,$bdd);

    if($conn->connect_error){
        die("erreur de connexion a la base de donné ");
    }
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        echo " vous avez envoyé des donnés ";
    } else{
        echo " erreur de l'envoye des donnés vers le phpmyadmin ";
    }