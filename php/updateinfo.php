<?php 

//Lien avec la bdd
require_once "bdd.php";

header("content-type:application/json; charset=utf-8");

//Creation de la requete SQL
$sql = "";
$param=array();



if ( isset($_POST["password"]) && !empty(trim($_POST["password"])) && strlen($_POST["password"])<8){
    echo json_encode(array(
        "errorCode" =>19,
        "message" =>"Votre mot de passe est trop court"
    ));
    die();
}




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
    $param= array($_POST["password"],$_SESSION["idUtilisateur"]);
}
try {
    $query = executeSQL($Bdd,$sql,$param);
}
catch (\Exception $e) {
    $messageerr = getErrorCode($e->getMessage());
    echo json_encode(array(
        "errorCode" =>$messageerr[1],
        "message" => $messageerr[2] 
    ));
    die();
}
echo json_encode(true);




?>