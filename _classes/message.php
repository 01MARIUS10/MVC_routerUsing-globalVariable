<?php
class message
{
    public $id;
    public $content;
    public $date;
    public $authorID;

    function __construct($content,$authorID){
        global $db;

        $reqNewMessage= $db->prepare("INSERT INTO `message`(`message_content`,`id_from`)
                                        VALUES (?,?);");
        $reqNewMessage->execute([$content,$authorID]);

        $theRecentMessage= $this->getLast0neMessage($authorID);

        $this->id       = $theRecentMessage->id_message;
        $this->date     = $theRecentMessage->message_date;
        $this->content  = $theRecentMessage->message_content;
        $this->authorID = $theRecentMessage->id_from;

       
    }

    static function getLast0neMessage($idAuthor){
        global $db;

        $reqOneMessage = $db->prepare("SELECT * FROM `message` WHERE `id_from`=?  ORDER BY `message_date` DESC LIMIT 1 ;");

        $reqOneMessage->execute([$idAuthor]);

        return $reqOneMessage->fetch(PDO::FETCH_OBJ);
    }

    static function getAllMessages(){
        global $db;

        $reqMessage = $db->prepare("SELECT * FROM `message` ORDER BY `message_date`;");

        $reqMessage->execute([]);

        return $reqMessage->fetchAll(PDO::FETCH_OBJ);
    }

    static function getRecentMessages(){
        global $db;

        $reqMessage = $db->prepare("SELECT * FROM `message` ORDER BY `message_date`DESC LIMIT 5 ;");

        $reqMessage->execute([]);

        return array_reverse($reqMessage->fetchAll(PDO::FETCH_OBJ));
    }
};