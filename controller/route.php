<?php

$page = isset($_GET['page']) ? $_GET['page'] : 'accueil';

switch ($page){
    case "accueil":
        include_once 'controller/articlesController.php';
        $lastarticle = new ArticlesController();
        $lastarticle = getLastArticle();
        break;
    case "produits":
        include_once 'controller/articlesController.php';
        $allArticle = new ArticlesController();
        $allArticle = getArticles();
        break;
    case "commander":
        include_once "controller/articlesController.php";
        $articles = new ArticlesController();
        $articles = getArticlesCommande();
        break;
    case "article":
        include_once "controller/articlesController.php";
        $article = new ArticlesController();
        $article = getArticlesbyId();

    default: 
        include "view/404.php";
}