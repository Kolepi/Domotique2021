<?php

//Lien avec la bdd
require_once "bdd.php";

header("content-type:application/json; charset=utf-8");

//Creation de la requete SQL
$sql = "INSERT INTO utilisateur (`username`, `mail`, `password`) VALUES(?,?,?)";
//Valeurs d'insertion
$query = executeSQL($Bdd,$sql,array($_POST["username"],$_POST["email"],$_POST["password"]));

//DEBUG
$result=$Bdd->lastinsertid();

echo json_encode($result > 0);
?>