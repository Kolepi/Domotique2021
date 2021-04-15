<?php 
require_once "bdd.php";
header("content-type:application/json; charset=utf-8");

$sql = "SELECT * FROM `utilisateur` WHERE `username` = ? AND `password` = ?";
$query = executeSQL($Bdd,$sql,array($_POST["username"],$_POST["password"]));

$result=$query->fetch();

if($result != null) $_SESSION["idUtilisateur"] = $result->id;

echo json_encode($result != null);