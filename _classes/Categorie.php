<?php
class categorie
{
    private $qb;
    public $id;
    public $name;

    public function __construct(QueryBuilder $QB){
        if(!$this->qb){
            $this->qb = $QB;
        }
    }

    public function getCategorieById($id){
        $reqMember=$this->qb->query('SELECT * ')
                            ->query('FROM categorie ')
                            ->query('WHERE id_categorie= ?');
        $reqMember->execute($id);

        $data=$reqMember->fetch();
        $this->id   = $data->id_categorie;
        $this->name = $data->categorie_name;
    }

    public function getAllCategorie(){
        $reqCategories=$this->qb->query('SELECT * ')
                                ->query('FROM categorie ');
        $reqCategories->execute();
        return $reqCategories->fetchAll(PDO::FETCH_OBJ);
    }
}
?>