<?php

    function is_me($authorID):bool{
        $booleen= ($authorID===$_SESSION['UserId']) ? true:false;
        return $booleen;
    }
    function Class_reconnaissance($authorID){
    if(is_me($authorID)){
        echo "message-me";
    }
    else{
        echo "message-other";
    }

}