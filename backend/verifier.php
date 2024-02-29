<?php
require("DAO.php");

    
    extract($_POST);
    session_start();
    
    $dao = new DAO();
    if($dao->authentification($nom, $pass) == 1) {
        $_SESSION['login'] = $nom;
        $_SESSION['pass'] = $pass;
        
        
        exit();
    }
    else {
        $response = "Login ou mot de passe incorrect !";
        echo $response;
    }
?>
