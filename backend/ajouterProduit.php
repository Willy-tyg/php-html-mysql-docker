<?php 
header("Access-Control-Allow-Origin: *");
$title = "Produits" ;
include "header.php";
$response = "";
if(isset($_POST)){
    if(extract($_POST)){
        $c = new Produit($reference,$libelle,$prix,$quantite,$seuil,$achat);
        $c->save();
        $succes=true;
        $response = 'produit ajouté';
        echo $response;
    }
}

include "footer.php" 
?>

