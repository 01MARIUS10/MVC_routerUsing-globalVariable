<?php
    $CategorieEntity = $CategorieEntity ?? new Categorie($QueryBuilder);
    $MemberEntity = $MemberEntity ?? new Member($QueryBuilder);

    /*  FROM DATABASE */
    /*  LES DONNES VENANT DE LA BASE DE DONNE  */
    /*  TO VARIABLE */
    $members = $MemberEntity->getAllMember();
    $categories = $CategorieEntity->getAllCategorie();
    $memberOn = $MemberEntity->getMemberById($_SESSION["UserId"]);

    $erreurAddPub="";    
?>