<?php
$bdd = new PDO('mysql:host=172.17.0.5;dbname=microcms;charset=utf8', 'root', 'secret');
$articles = $bdd->query('select * from t_article order by art_id desc');

require 'view.php';
