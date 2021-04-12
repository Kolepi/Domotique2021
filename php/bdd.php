<?php
    $bdUser = "root"; // Utilisateur de la base de données
    $bdPasswd = ""; // Son mot de passe
    $dbname = "domohome"; // nom de la base de données
    $host= "localhost"; // Hôte
    try
    {
        $Bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $bdUser, $bdPasswd);// SE CONNECTER A LA BDD
        $Bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); // METTRE LE MODE OBJET PAR DEFAUT
    }
    catch (PDOException $e)
    {
        echo ("Erreur : impossible de se connecter à la bdd");
    }

   
    function executeSQL($Bdd, $sql, $params = false) { //préparation et execution de la requête sql
        $query = $Bdd->prepare($sql);
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