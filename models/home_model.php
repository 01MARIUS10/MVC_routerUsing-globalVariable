<?php
    $CategorieEntity = $CategorieEntity ?? new Categorie(Database::getPDO());
    $MemberEntity = $MemberEntity ?? new Member(Database::getPDO());

    /*  FROM DATABASE */
    /*  LES DONNES VENANT DE LA BASE DE DONNE  */
    /*  TO VARIABLE */
    $members = $MemberEntity->getAllMember();
    $categories = $CategorieEntity->getAllCategorie();
    $memberOn = $MemberEntity->getMemberById($_SESSION["UserId"]);

    $erreurAddPub="";    
?>