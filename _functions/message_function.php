<?php
    function Class_reconnaissance($authorID){
    if($authorID===$_SESSION['UserId']){
        echo "message-me";
    }
    else{
        echo "message-other";
    }
    // function displayError($error){
    //     if(empty($error)){
    //         echo "hidden";
    //     }
    // }
}