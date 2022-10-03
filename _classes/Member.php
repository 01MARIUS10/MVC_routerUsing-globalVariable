<?php
class member
{
    private $db;
    public $id;
    public $firstname;
    public $lastname;
    public $pseudo;
    public $password;
    public $birthdate;
    public $tel;

    function __construct(\PDO $PDO){
        if(!$this->db){
            $this->db=$PDO;
        }
    }

    public function getMemberById($id){
        $reqMember=$this->db->prepare('SELECT * FROM member WHERE id_member= ?');
        $reqMember->execute([$id]);
    
        $data=$reqMember->fetch();
    
        $this->id        = $data['id_member'];
        $this->firstname = $data['member_firstname'];
        $this->lastname  = $data['member_lastname'];
        $this->pseudo    = $data["member_pseudo"];
        $this->password  = $data["member_password"];
        $this->birthdate = $data['member_birthdate'];
        $this->tel       = $data['member_tel'];
    
        $reqMember->closeCursor();        
        return $this;
    }
    public function getName($id){
        $reqMember = $this->db->prepare('SELECT member_firstname FROM member WHERE id_member=?');
        $reqMember->execute([$id]);
        return $reqMember->fetch(PDO::FETCH_OBJ);
    }

    public function getAllMember(){
        $reqMembers=$this->db->prepare('SELECT * FROM member');
        $reqMembers->execute([]);
        return $reqMembers->fetchAll(PDO::FETCH_OBJ);

    }
    public function checkMember($pseudo,$password){
        $reqCheckMember=$this->db->prepare("SELECT * FROM member WHERE   `member_pseudo`=? AND `member_password`=?  ;");
        $reqCheckMember->execute([$pseudo,$password]);
        return $reqCheckMember->fetch(PDO::FETCH_OBJ);
    }
};