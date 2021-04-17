<?php

//Lien avec la bdd
require_once "bdd.php";

header("content-type:application/json; charset=utf-8");

//Creation de la requete SQL
$sql = "DELETE 