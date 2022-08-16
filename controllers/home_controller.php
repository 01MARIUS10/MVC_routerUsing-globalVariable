<?php 

    /*  FROM VIEW */
    /*  TRAITEMENT DES NOUVEAU PUBLICATION  */
    /*  TO DATABASE */
    if(isset($_POST["btn-submit-newPub"])){
        if(isset($_POST["pub-title"]) && isset($_POST["pub-content"])  && isset($_POST["pub-author"]) && isset($_POST["pub-categorie"])  ){
            if(!empty($_POST["pub-title"])  && !empty($_POST["pub-content"]) && !empty($_POST["pub-author"]) && !empty($_POST["pub-categorie"]) ){
                $title=str_secure($_POST["pub-title"]);
                $content=str_secure($_POST["pub-content"]);
                $authorID=str_secure($_POST["pub-author"]);
                $categorieID=str_secure($_POST["pub-categorie"]);

                $boolSucces = Article::addNewArticle($title,$content,$authorID,$categorieID);
            }
            else{
                if(empty($_POST["pub-title"])){
                    $erreurAddPub= "pas de titre ";
                }
                if(empty($_POST["pub-content"])){
                    $erreurAddPub.= "<br> pas de contenu ";
                }
                if(empty($_POST["pub-author"])){
                    $erreurAddPub.= "<br> pas de auteur ";
                }
                if(empty($_POST["pub-categorie"])){
                    $erreurAddPub.= "<br> pas de categorie ";
                }
            }
            
            
        }

    }

    /*  FROM VIEW   */
    /*  LE CATEGORIE DE TRIAGE DE LA LISTE  */
    /*  FROM DATABASE TO VARIABLE */
    if(isset($_POST["categorie"]) && !empty($_POST["categorie"]) && $_POST["categorie"]!="date"){
        //l'article selon la categorie triée
        $articles = Article::getAllArticleByCategorie($_POST["categorie"]);
        $html_placeholder = $_POST["categorie"];
    }
    else{
        $articles = Article::getAllArticle();
        $html_placeholder = "date";
    }
    
?>