<?php 
require_once "bdd.php";
header("content-type:application/json; charset=utf-8");

$sql = "UPDATE `device` SET isenable = ? WHERE id = ?";
$query = executeSQL($Bdd,$sql,array(($_POST["isenable"] == "true") ? 1 : 0,$_POST["iddevice"]));

echo json_encode(true);