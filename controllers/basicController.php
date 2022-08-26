<?php 
if(isset($_POST["Deconnection"])){
    unset($_SESSION["UserId"]);
}
include_once("login_controller.php");
?>