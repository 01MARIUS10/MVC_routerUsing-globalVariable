<?php
    include "_config/config.php";
    include "_config/db.php";

    include_once "_classes/article.php";
    include_once "_classes/categorie.php";
    include_once "_classes/member.php";

   
    //definition de la page courante
    if(isset($_GET["page"]) && !empty($_GET["page"])){
        $page = trim(strtolower($_GET["page"]));
    }
    else{
        $page = "home";
    }

    $allPages=scandir("controllers/");

    if(in_array($page."_controller.php",$allPages)){
        include_once "models/".$page."_model.php";
        include_once "views/".$page."_view.php";
        include_once "controllers/".$page."_controller.php";
    }
    else{
        include_once "views/error_view.php";
    }
?>
