<?php
include_once 'model/articlesModel.php';

class ArticlesController
{
    private $model;

    public function __construct()
    {
        $this->model = new ArticlesModel;
    }

    public function getArticles(){
        $articles = $this->model->getArticles();
        include_once 'view/commander.php';
    }
    public function getArticlesbyId(){
        $articlesId = $this->model->getArticlesbyId($_GET['id']);
        include_once 'view/commander.php'
    }
    public function getLastArticle(){
        $lastarticle = $this->model->getLastArticle();
        include_once 'view/accueil.php'
    }

}
