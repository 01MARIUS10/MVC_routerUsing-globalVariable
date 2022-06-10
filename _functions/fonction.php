<?php
    function str_secure($input){
        return trim(htmlentities($input));
    }
    function displayError($error){
        if(empty($error)){
            echo "hidden";
        }
    }