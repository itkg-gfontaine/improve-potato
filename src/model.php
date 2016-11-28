<?php

// Return all articles
function getArticles() {
    $bdd = new PDO('mysql:host=172.17.0.2;dbname=microcms;charset=utf8', 'root', 'secret');
    $articles = $bdd->query('select * from t_article order by art_id desc');
    return $articles;
}
