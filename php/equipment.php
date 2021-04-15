<?php
require_once "bdd.php";

header("content-type:application/json; charset=utf-8");

$sql = "SELECT * FROM `device` WHERE `idUtilisateur` = ?";
$query = executeSQL($Bdd, $sql, array($_SESSION["idUtilisateur"]));

$results=$query->fetchAll();


echo json_encode($results);
?>