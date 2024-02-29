<?php  
header("Access-Control-Allow-Origin: *");
include "header.php";

$tab = Produit::alertes();
$response = "";

foreach ($tab as $t) {
    $response .= "<tr>";
    $response .= "<td>" . $t->get("r") . "</td>";
    $response .= "<td>" . $t->get("l") . "</td>";
    $response .= "<td>" . $t->get("p") . "</td>";
    $response .= "<td>" . $t->get("q") . "</td>";
    $response .= "<td>" . $t->get("s") . "</td>";
    
    $response .= "<td>" . $t->get("a") . "</td>";
    $response .= "</tr>";
}
echo $response;
?>

