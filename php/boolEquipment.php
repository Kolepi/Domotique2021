<?php 

//Lien avec la bdd
require_once "bdd.php";

header("content-type:application/json; charset=utf-8");

//Creation de la requete SQL
$sql = "UPDATE `device` SET isenable = ? WHERE id = ?";

//Valeurs d'insertion
$query = executeSQL($Bdd,$sql,array(($_POST["isenable"] == "true") ? 1 : 0,$_POST["iddevice"]));


//DEBUG
echo json_encode(true);