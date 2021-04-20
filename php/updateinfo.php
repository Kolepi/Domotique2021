<?php 

//Lien avec la bdd
require_once "bdd.php";

header("content-type:application/json; charset=utf-8");

//Creation de la requete SQL
$sql = "";
$param=array();
if (isset($_POST["email"]) && !empty(trim($_POST["email"]) && isset($_POST["password"]) && !empty(trim($_POST["password"]))))
{
    $sql = "UPDATE `utilisateur` SET mail=?, `password`=? WHERE id = ?";
    $param= array($_POST["email"],$_POST["password"],$_SESSION["idUtilisateur"]);
}
elseif (isset($_POST["email"]) && !empty(trim($_POST["email"])))
{
    $sql = "UPDATE `utilisateur` SET mail=? WHERE id = ?";
    $param= array($_POST["email"],$_SESSION["idUtilisateur"]);
}
elseif(isset($_POST["password"]) && !empty(trim($_POST["password"]))){
    $sql = "UPDATE `utilisateur` SET `password`=? WHERE id = ?";
    $param= array($_POST["email"],$_SESSION["idUtilisateur"]);
}

$query = executeSQL($Bdd,$sql,$param);

header('Location: ../html/dashboard.html');

?>