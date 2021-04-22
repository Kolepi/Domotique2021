<?php
    session_start();
    $bdUser = "root"; // Utilisateur de la base de données
    $bdPasswd = ""; // Son mot de passe
    $dbname = "domohome"; // nom de la base de données
    $host= "localhost"; // Hôte
    try
    {
        $Bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $bdUser, $bdPasswd);// SE CONNECTER A LA BDD
        $Bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); // METTRE LE MODE OBJET PAR DEFAUT
        $Bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // METTRE LE MODE ERREUR EN EXCEPTION
    }
    catch (PDOException $e)
    {
        echo ("Erreur : impossible de se connecter à la bdd");
    }

    function executeSQL($Bdd, $sql, $params = false) { //préparation et execution de la requête sql
        try {
            $query = $Bdd->prepare($sql);
            if ($params == false)
                $query->execute();
            else
                $query->execute($params);
            return $query;
        } catch (Exception $e) {
            throw new \Exception($e->getMessage() . " " . $sql);
        }
    }

    function getErrorCode($message){
        preg_match("/SQLSTATE\[([0-9]*)\]:(.*?)$/",$message,$matches);
        return $matches;
    }