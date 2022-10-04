<?php
class message
{
    private $qb;
    public $id;
    public $content;
    public $date;
    public $authorID;

    function __construct(QueryBuilder $QB){
        if(!$this->qb){
            $this->qb=$QB;
        }        
    }

    public function addNewMessage($content,$authorID){
        $reqNewMessage= $this->qb->query("INSERT INTO `message`(`message_content`,`id_from`) ")
                                ->query("VALUES (?,?)");
        $reqNewMessage->execute($content,$authorID);

        $theRecentMessage= $this->getLast0neMessage($authorID);

        $this->id       = $theRecentMessage->id_message;
        $this->date     = $theRecentMessage->message_date;
        $this->content  = $theRecentMessage->message_content;
        $this->authorID = $theRecentMessage->id_from;

    }

    public function getLast0neMessage($idAuthor){
        $reqOneMessage = $this->qb->query("SELECT * ")
                                ->query("FROM `message` ")
                                ->query("WHERE `id_from`=?  ")
                                ->query("ORDER BY `message_date` ")
                                ->query("DESC LIMIT 1 ");
        $reqOneMessage->execute($idAuthor);
        return $reqOneMessage->fetch(PDO::FETCH_OBJ);
    }

    public function getAllMessages(){
        $reqMessage = $this->qb->query("SELECT * ")
                            ->query("FROM `message` ")
                            ->query("ORDER BY `message_date`");
        $reqMessage->execute();
        return $reqMessage->fetchAll(PDO::FETCH_OBJ);
    }

    public function getRecentMessages($indexMessage ,$countMessage){
        $reqMessage = $this->qb->query("SELECT * ")
                            ->query("FROM `message` WHERE `id_message` ")
                            ->query("BETWEEN ? ")
                            ->query("AND ? ");
        $reqMessage->execute($countMessage-($indexMessage*3)+1,$countMessage-(($indexMessage-1)*3));
        return ($reqMessage->fetchAll(PDO::FETCH_OBJ));
    }

    public function getCountMessages(){
        $reqMessage = $this->qb->query("SELECT COUNT(*) ")
                            ->query("FROM `message` ");
        $reqMessage->execute();

        return $reqMessage->fetch(PDO::FETCH_ASSOC)["COUNT(*)"];
    }
};