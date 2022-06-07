<?php
class categorie
{
    public $id;
    public $name;

    // function __constructor($categorie_name){
    //     global $db;
    //     echo "<h1>io eh</h1>";
    //     $reqInit=$db->prepare('INSERT INTO categorie(`categorie_name`) VALUES(?)');
    //     $reqInit->execute([$categorie_name]);
    //     echo "io eh";
       
    // }

    function __construct($id){
        global $db;
        $reqMember=$db->prepare('SELECT * FROM categorie WHERE id_categorie= ?');
        $reqMember->execute([$id]);

        $data=$reqMember->fetch();

        $this->id   = $data['id_categorie'];
        $this->name = $data['categorie_name'];
        
        $reqMember->closeCursor();
    }

    static function getAllCategorie(){
        global $db;

        $reqCategories=$db->prepare('SELECT * FROM categorie ');
        $reqCategories->execute([]);


        return $reqCategories->fetchAll(PDO::FETCH_OBJ);
    }
}
?>