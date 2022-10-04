<?php
class member
{
    private $qb;
    public $id;
    public $firstname;
    public $lastname;
    public $pseudo;
    public $password;
    public $birthdate;
    public $tel;

    function __construct(QueryBuilder $QB){
        if(!$this->qb){
            $this->qb=$QB;
        }
    }

    public function getMemberById($id){
        $reqMember=$this->qb->query('SELECT * ')
                            ->query('FROM member ')
                            ->query('WHERE id_member= ?');
        $reqMember->execute($id);
    
        $data=$reqMember->fetch();

        $this->id        = $data->id_member;
        $this->firstname = $data->member_firstname;
        $this->lastname  = $data->member_lastname;
        $this->pseudo    = $data->member_pseudo;
        $this->password  = $data->member_password;
        $this->birthdate = $data->member_birthdate;
        $this->tel       = $data->member_tel;
       
        return $this;
    }
    public function getName($id){
        $reqMember = $this->qb->query('SELECT member_firstname ')
                            ->query('FROM member ')
                            ->query('WHERE id_member=?');
        $reqMember->execute($id);
        return $reqMember->fetch(PDO::FETCH_OBJ);
    }

    public function getAllMember(){
        $reqMembers=$this->qb->query('SELECT * FROM member');
        $reqMembers->execute();
        return $reqMembers->fetchAll(PDO::FETCH_OBJ);

    }
    public function checkMember($pseudo,$password){
        $reqCheckMember=$this->qb->query("SELECT * FROM member WHERE   `member_pseudo`=? AND `member_password`=?  ;");
        $reqCheckMember->execute($pseudo,$password);
        return $reqCheckMember->fetch(PDO::FETCH_OBJ);
    }
};