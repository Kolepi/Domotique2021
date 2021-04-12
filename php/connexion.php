<?php 

    $sql = "SELECT * FROM `utilisateur` WHERE `username` = ? AND `password` = ? ";
    $query = executeSQL($pdo,$sql,array($_POST["username"],$_POST["password"]));

    $result=$query->fetch();
    
    function executeSQL($pdo, $sql, $params = false) { //préparation et execution de la requête sql
        $query = $pdo->prepare($sql);
        try {
            if ($params == false)
                $query->execute();
            else
                $query->execute($params);
        } catch (PDOException $e) {
            throw  new \Exception($e->getMessage() . " " . $sql);
        }
        return $query;
    }

