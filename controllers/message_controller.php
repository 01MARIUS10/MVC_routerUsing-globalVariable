<?php
    if(isset($_POST["btn-message"])){
        if(isset($_POST["message_content"]) && !empty($_POST["message_content"])){
            $newMessage= new Message($_POST["message_content"], $_SESSION["UserId"]);
        }
        else{
            if(empty($_POST["message_content"])){
                $erreurMessage = "le champ est vide";
            }
        }
    }

?>