<?php
include_once 'bdd.php';

class UsersModel
{
    private $bdd;

    public function __construct()
    {
        $this->bdd = Bdd::connexion();
    }

    public function inscription($nom, $prenom, $tel, $email, $mdp)
    {
        $user = $this->bdd->prepare("INSERT INTO users(nom,prenom,tel,email,mdp) VALUES(?,?,?,?,?)");
        return $user->execute([$nom, $prenom, $tel, $email, $mdp]);
    }

    public function getUserByEmail($email)
    {
        return $this->bdd->query("SELECT * FROM users WHERE email='$email'")->fetch(PDO::FETCH_ASSOC);
    }
}
