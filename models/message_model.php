<?php
    $countMessage = Message::getCountMessages();
    $messages = Message::getRecentMessages($indexMessage,$countMessage);
    $erreurMessage="";
    $users = Member::getAllMember();

?>
