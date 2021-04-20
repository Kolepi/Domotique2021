<?php

//Lien avec la bdd
require_once "bdd.php";

header("content-type:application/json; charset=utf-8");

//Creation de la requete SQL
$sql = "INSERT INTO utilisateur (`username`, `mail`, `password`,`secret`) VALUES(?,?,?,?)";
//Valeurs d'insertion
try {
    $query = executeSQL($Bdd,$sql,array($_POST["username"],$_POST["email"],$_POST["password"],$_POST["secret"]));
}
catch (\Exception $e) {
    $messageerr = getErrorCode($e->getMessage());
    echo json_encode(array(
        "errorCode" =>$messageerr[1],
        "message" => $messageerr[2] 
    ));
    die();
}
//DEBUG
$result=$Bdd->lastinsertid();

echo json_encode($result > 0);