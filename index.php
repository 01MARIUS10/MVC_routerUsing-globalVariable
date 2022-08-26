<?php
    include "_config/config.php";
    include "_config/db.php";
    

    include_once "_classes/member.php";
    include_once "_functions/fonction.php";
    include_once "controllers/basicController.php";


if(!isset($_SESSION["UserId"]) || empty($_SESSION["UserId"])){
    if(isset($_GET["page"]) && !empty($_GET["page"]) && !isset($_POST["Deconnection"])){
        $page = "error";
        echo"errorrrrr";
    }
    else{
        $page = "login";
    }
}
else{
    include_once "_classes/article.php";
    include_once "_classes/categorie.php";
    include_once "_classes/message.php";

    //definition de la page courante
    if(isset($_GET["page"]) && !empty($_GET["page"])){
        $page = trim(strtolower($_GET["page"]));
    }
    else{
        $page = "home";
    } 
}
    $allPages=scandir("controllers/");

    if(!in_array($page."_controller.php",$allPages)){
        $page="error";
    } 
    include_once "_functions/".$page."_function.php";
    include_once "controllers/".$page."_controller.php";
    include_once "models/".$page."_model.php";
    include_once "views/".$page."_view.php";
?>