<?php 

Class User {
    public $nom;
    public $id;
    private $adresse;
    private $motdepasse;
    private $email;
    private $ville;


    //CONSTRUCTEUR
    //GET
    public function getadresse(){
        return $this->adresse;
    }
    public function getmotdepasse(){
        return $this->motdepasse;
    }
    public function getville(){
        return $this->ville;
    }
    public function getemail(){
        return $this->email;
    }

    //SET
    public function setadresse($newadresse){
        $this->adresse = $newadresse;
    }
    public function setmotdepasse($newmotdepasse){
        $this->motdepasse = $newmotdepasse;
    }
    public function setville($newville){
        $this->ville = $newville;
    }
    public function setemail($newemail){
        $this->email = $newemail;
    }

    //METHODS

    //Inscription
    public function enregistreUser($Bdd){
        $req = "INSERT INTO utilisateur(nom,motdepasse,email) VALUES
        ('$this->nom','$this->motdepasse','$this->email')";//Insère l'User dans la bdd
    }

    //Connexion
    public function getUserbyId($id){
        $req= "SELECT * FROM utilsateur WHERE id = $id";//recherche dans la base de donnée le profil (utlisé pour la BDD)
        $Ores = $Bdd->query($req); // Execute la requete dans la base de donnée
        if ($compte = $Ores->fetch()){//parcour de la base de données jusqu'a trouver $compte (Fetch est utilisé pour les variables)*
            $this->nom = $compte->nom;
            $this->motdepasse = $compte->motdepasse;
        }
    }


     //Mettre a jour les données du profil
    public function updateUser(){
        $req = "UPDATE utilisateur SET motdepasse = '$this->motdepasse',adresse = '$this->adresse', email = '$this->email', ville = '$this->ville'";
        $Ores = $Bdd->query($req);
    }
    //DESTRUCTEUR

}