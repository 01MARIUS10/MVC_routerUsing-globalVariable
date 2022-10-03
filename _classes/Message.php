<?php
class message
{
    private $db;
    public $id;
    public $content;
    public $date;
    public $authorID;

    function __construct(\PDO $PDO){
        if(!$this->db){
            $this->db=$PDO;
        }        
    }

    public function addNewMessage($content,$authorID){
        $reqNewMessage= $this->db->prepare("INSERT INTO `message`(`message_content`,`id_from`)
                                        VALUES (?,?);");
        $reqNewMessage->execute([$content,$authorID]);

        $theRecentMessage= $this->getLast0neMessage($authorID);

        $this->id       = $theRecentMessage->id_message;
        $this->date     = $theRecentMessage->message_date;
        $this->content  = $theRecentMessage->message_content;
        $this->authorID = $theRecentMessage->id_from;

    }

    public function getLast0neMessage($idAuthor){
        $reqOneMessage = $this->db->prepare("SELECT * FROM `message` WHERE `id_from`=?  ORDER BY `message_date` DESC LIMIT 1 ;");
        $reqOneMessage->execute([$idAuthor]);
        return $reqOneMessage->fetch(PDO::FETCH_OBJ);
    }

    public function getAllMessages(){
        $reqMessage = $this->db->prepare("SELECT * FROM `message` ORDER BY `message_date`;");
        $reqMessage->execute([]);
        return $reqMessage->fetchAll(PDO::FETCH_OBJ);
    }

    public function getRecentMessages($indexMessage ,$countMessage){
        $reqMessage = $this->db->prepare("SELECT * FROM `message` WHERE `id_message` BETWEEN ? AND ?  ;");
        $reqMessage->execute([$countMessage-($indexMessage*3)+1,$countMessage-(($indexMessage-1)*3)]);
        return ($reqMessage->fetchAll(PDO::FETCH_OBJ));
    }

    public function getCountMessages(){
        $reqMessage = $this->db->prepare("SELECT COUNT(*) FROM `message` ;");
        $reqMessage->execute([]);
        return $reqMessage->fetch()[0];
    }
};