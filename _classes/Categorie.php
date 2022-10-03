<?php
class categorie
{
    private $db;
    public $id;
    public $name;

    public function __construct(\PDO $PDO){
        if(!$this->db){
            $this->db = $PDO;
        }
    }

    public function getCategorieById($id){
        $reqMember=$this->db->prepare('SELECT * FROM categorie WHERE id_categorie= ?');
        $reqMember->execute([$id]);

        $data=$reqMember->fetch();
        $this->id   = $data['id_categorie'];
        $this->name = $data['categorie_name'];
        $reqMember->closeCursor();
    }

    public function getAllCategorie(){
        $reqCategories=$this->db->prepare('SELECT * FROM categorie ');
        $reqCategories->execute([]);
        return $reqCategories->fetchAll(PDO::FETCH_OBJ);
    }
}
?>