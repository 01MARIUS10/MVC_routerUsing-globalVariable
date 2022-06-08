<?php 
    
    if(isset($_POST["categorie"]) && !empty($_POST["categorie"]) && $_POST["categorie"]!="date"){
        $articles = Article::getAllArticleByCategorie($_POST["categorie"]);
    }
    else{
        $articles = Article::getAllArticle();
    }
    $categories = Categorie::getAllCategorie();
?>