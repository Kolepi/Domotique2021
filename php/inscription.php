<?php
require_once "bdd.php";
header("content-type:application/json; charset=utf-8");
$sql = "INSERT INTO utilisateur (`username`, `mail`, `password`) VALUES(?,?,?)";
$query = executeSQL($Bdd,$sql,array($_POST["username"],$_POST["email"],$_POST["password"]));

$result=$Bdd->lastinsertid();

echo json_encode($result > 0);
?>