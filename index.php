<?php
    include "_config/config.php";
    include "_config/db.php";
    include_once "_classes/DbService/Database.php";
    $db = new Database();

    include_once "_classes/Member.php";
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
    include_once "_classes/Article.php";
    include_once "_classes/Categorie.php";
    include_once "_classes/Message.php";

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