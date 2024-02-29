<?php 
header("Access-Control-Allow-Origin: *");
$title = "Clients";

include "header.php";
$tab = Client::afficher();
$response = "";

foreach ($tab as $t) {
    $response .= "<tr>";
    $response .= "<td>" . $t->get("n") . "</td>";
    $response .= "<td>" . $t->get("a") . "</td>";
    $response .= "<td>" . $t->get("t") . "</td>";
    $response .= "<td>" . $t->get("e") . "</td>";
    $response .= "<td>" . $t->get("p") . "</td>";
    
    $response .= '</tr>';
    
}

echo $response;

include "footer.php";
?>
