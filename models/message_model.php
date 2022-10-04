<?php
    $MessageEntity = $MessageEntity ?? new Message($QueryBuilder);
    $MemberEntity = $MemberEntity ?? new Member($QueryBuilder);

    $countMessage = $MessageEntity->getCountMessages();
    $messages = $MessageEntity->getRecentMessages($indexMessage,$countMessage);
    $erreurMessage="";
    $users =$MemberEntity->getAllMember();


?>
