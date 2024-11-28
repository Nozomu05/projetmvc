<?php
include_once 'bdd.php';

class UsersModel
{
    private $bdd;

    public function __construct()
    {
        $this->bdd = Bdd::connexion();
    }
    
//a modifier selon nos besoins
    public function commande($nom, $prenom, $email, $message, $id_produit)
    {
        $user = $this->bdd->prepare("INSERT INTO commande(nom,prenom,email,message,id_produit) VALUES(?,?,?,?,?)");
        return $user->execute([$nom, $prenom, $email, $message, $id_produit]);
    }
}
