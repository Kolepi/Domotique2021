<?php
//Lien avec la bdd
require_once "bdd.php";

header("content-type:application/json; charset=utf-8");

//Creation de la requete SQL
$sql = "SELECT * FROM `device` WHERE `idUtilisateur` = ?";

//Valeurs d'insertion
$query = executeSQL($Bdd, $sql, array($_SESSION["idUtilisateur"]));

//Recuperation des resultats en Bdd
$results=$query->fetchAll();

//DEBUG
echo json_encode($results);
?>