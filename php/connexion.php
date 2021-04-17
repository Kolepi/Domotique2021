<?php 

//Lien avec la bdd
require_once "bdd.php";

header("content-type:application/json; charset=utf-8");

//Creation de la requete SQL
$sql = "SELECT * FROM `utilisateur` WHERE `username` = ? AND `password` = ?";

//Valeurs d'insertion
$query = executeSQL($Bdd,$sql,array($_POST["username"],$_POST["password"]));

//Recuperation des resultats en Bdd
$result=$query->fetch();

//Si le resultat s'initialise , on creer la variable SESSION idUtlisateur et on lui attribue l'id en Bdd
if($result != null) $_SESSION["idUtilisateur"] = $result->id;


//DEBUG
echo json_encode($result != null);