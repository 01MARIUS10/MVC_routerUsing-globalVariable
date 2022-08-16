<?php if(isset($_POST["btn-submit-login"]) ){
        if(isset($_POST["login-pseudo"]) && isset($_POST["login-password"])){
            if(!empty($_POST["login-pseudo"]) && !empty($_POST["login-password"])){
                $pseudo= str_secure($_POST["login-pseudo"]);
                $password= str_secure($_POST["login-password"]);
                $Iam= Member::checkMember($pseudo,$password);
                if($Iam){
                    $_SESSION["UserId"]=$Iam->id_member;
                }

            }
            else{
                if(empty($_POST["login-pseudo"])){
                    $erreurLogin.= " pas de Pseudo ";
                }
                if(empty($_POST["login-password"])){
                    $erreurLogin.= "<br> pas de mot de passe ";
                }
            }
            
            
        }
        
    }

?>