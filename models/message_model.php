<?php
    $MessageEntity = $MessageEntity ?? new Message(Database::getPDO());
    $MemberEntity = $MemberEntity ?? new Member(Database::getPDO());

    $countMessage = $MessageEntity->getCountMessages();
    $messages = $MessageEntity->getRecentMessages($indexMessage,$countMessage);
    $erreurMessage="";
    $users =$MemberEntity->getAllMember();


?>
