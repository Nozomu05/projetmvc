<?php

class Bdd{

    public static function connexion()
    {
        try
        {
           // $bdd = new PDO("mysql:host=localhost;port=3307;dbname=news","login","mdp");
            $bdd = new PDO("mysql:host=localhost;port=3307;dbname=smartbike","root","");
          ///  echo "connexion BDD OK";
            return $bdd;
        }
        catch(Exception $e)
        {
            echo $e;
        }
    }

}

// test bdd
//$bdd = new Bdd;
//$bdd->connexion();

//$bdd = Bdd::connexion();