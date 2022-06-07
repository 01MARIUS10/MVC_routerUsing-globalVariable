<?php
class member
{
    public $id;
    public $firstname;
    public $lastname;
    public $birthdate;
    public $tel;

    function __construct($id){
        global $db;

        $reqMember=$db->prepare('SELECT * FROM member WHERE id_member= ?');
        $reqMember->execute([$id]);

        $data=$reqMember->fetch();

        $this->id        = $data['id_member'];
        $this->firstname = $data['member_firstname'];
        $this->lastname  = $data['member_lastname'];
        $this->birthdate = $data['member_birthdate'];
        $this->tel       = $data['member_tel'];

        $reqMember->closeCursor();        
    }

    static function getAllMember(){
        global $db;

        $reqMembers=$db->prepare('SELECT * FROM member');
        $reqMembers->execute([]);
        return $reqMembers->fetchAll(PDO::FETCH_OBJ);

    }
};