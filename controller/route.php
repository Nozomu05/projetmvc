<?php

$page = isset($_GET['page']) ? $_GET['page'] : 'accueil';

switch ($page){
    case "accueil":
        include_once 'controller/articlesController.php';
        $lastarticle = new ArticlesController();
        $lastarticle = getLastArticleById();
        break;
    case "commander":
        include_once "controller/articlesController.php";
        $articleId = new ArticlesController();
        $articleId = getArticlesbyId();
        $articles = new ArticlesController();
        $articles = getArticles();
        break;

    default: 
        include "view/404.php";
}