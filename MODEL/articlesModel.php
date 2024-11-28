<?php
include_once 'bdd.php';

class ArticlesModel
{
    private $bdd;

    public function __construct()
    {
       $this->bdd = Bdd::connexion();
    }

// a modifier en fonction de nos besoins
    public function getlastArticles()
    {
        return $this->bdd->query("SELECT * FROM produits WHERE id_produit=4")->fetchAll(PDO::FETCH_ASSOC);
    }

}