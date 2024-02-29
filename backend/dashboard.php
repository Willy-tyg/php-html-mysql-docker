<?php
require("DAO.php");
session_start();



require "client.php";

$pdo = new PDO("mysql:host=mysql;dbname=cloud;", "willy", "root");

$stmt = $pdo->prepare("SELECT idClient as id FROM client;");
$stmt->execute();
$response = $stmt->rowCount();

$pdo1 = new PDO("mysql:host=mysql;dbname=cloud;", "willy", "root");

$stmt1 = $pdo1->prepare("SELECT * FROM produit");
$stmt1->execute();
$response1 = $stmt1->rowCount();

$data = [
    'response' => $response,
    'response1' => $response1
];

header('Content-Type: application/json');
echo json_encode($data);
?>
