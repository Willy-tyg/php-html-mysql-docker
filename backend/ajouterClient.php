<?php 
header("Access-Control-Allow-Origin: *");
$title = "Clients"; 
include "header.php"; 

$response = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (extract($_POST)) {
        $c = new Client($login, $adresse, $telephone, $email, $pass);
        $c->save();
        $succes = true;
        $response = 'Utilisateur ajouté';
        echo $response;
    }
}

include "footer.php" 

?>
