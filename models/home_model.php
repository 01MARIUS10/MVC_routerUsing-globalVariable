<?php

    /*  FROM DATABASE */
    /*  LES DONNES VENANT DE LA BASE DE DONNE  */
    /*  TO VARIABLE */
    $members = Member::getAllMember();
    $categories = Categorie::getAllCategorie();
    $memberOn = new Member($_SESSION["UserId"]);


    $erreurAddPub="";

    
    

    
?>