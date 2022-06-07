<?php
class article
{
    public $id;
    public $title;
    public $content;
    public $date;
    public $author;
    public $categorie;

    function __construct($id){
        global $db;

        $reqArticle=$db->prepare('SELECT article.* , member.member_firstname , member.member_lastname , categorie.categorie_name 
                                FROM article 
                                INNER JOIN member ON member.id_member = article.id_article
                                INNER JOIN categorie  ON categorie.id_categorie = article.id_article 
                                WHERE article.id_article = ?');
        $reqArticle->execute([$id]);


        $data=$reqArticle->fetch();

        $this->id        = $data["id_article"];
        $this->title     = $data["article_title"];
        $this->content   = $data["article_content"];
        $this->date      = $data["article_date"];
        $this->author    = $data["member_firstname"].$data["member_lastname"];
        $this->categorie = $data["categorie_name"];
        
    }

    static function getAllArticle(){
        global $db;

        $reqArticles=$db->prepare('SELECT article.* , member.member_firstname , member.member_lastname , categorie.categorie_name 
                                FROM article 
                                INNER JOIN member  ON member.id_member = article.id_article
                                INNER JOIN categorie  ON categorie.id_categorie = article.id_article ');
                                
        $reqArticles->execute([]);

        return $reqArticles->fetchAll(PDO::FETCH_OBJ);
    }

};