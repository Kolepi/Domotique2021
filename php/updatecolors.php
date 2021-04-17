<?php

//Lien avec la bdd
require_once "bdd.php";

header("content-type:application/json; charset=utf-8");

//Creation de la requete SQL
$sql = "UPDATE `device` SET color1=? , color2=? , color3=? WHERE id = ?";
$query = executeSQL($Bdd,$sql,array($_POST["color1"],$_POST["color2"],$_POST["color3"],$_POST['deviceid']));