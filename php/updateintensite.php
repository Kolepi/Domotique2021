<?php

//Lien avec la bdd
require_once "bdd.php";

header("content-type:application/json; charset=utf-8");

//Creation de la requete SQL
$sql = "UPDATE `device` SET intensite=? WHERE id = ?";
$query = executeSQL($Bdd,$sql,array($_POST["intensite"],$_POST['deviceid']));

?>