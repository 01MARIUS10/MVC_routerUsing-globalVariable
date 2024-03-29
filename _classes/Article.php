<?php
class Article
{
    public $qb;
    public $id;
    public $title;
    public $content;
    public $date;
    public $author;
    public $categorie;

    public function __construct(QueryBuilder $QB){
        if(!$this->qb){
            $this->qb = $QB;
        }
    }
    public function getArticleById($id){

        $reqArticle=$this->qb->query('SELECT article.* , member.member_firstname , member.member_lastname , categorie.categorie_name 
                                FROM article 
                                INNER JOIN member ON member.id_member = article.id_article
                                INNER JOIN categorie  ON categorie.id_categorie = article.id_article 
                                WHERE article.id_article = ?');
        $reqArticle->execute($id);


        $data=$reqArticle->fetch();

        $this->id        = $data->id_article;
        $this->title     = $data->article_title;
        $this->content   = $data->article_content;
        $this->date      = $data->article_date;
        $this->author    = $data->member_firstname.$data->member_lastname;
        $this->categorie = $data->categorie_name;

    }

    public function getAllArticle(){
        $reqArticles=$this->qb->query('SELECT article.* , member.member_firstname , member.member_lastname , categorie.categorie_name ')
                    ->query(' FROM article ')
                    ->query('INNER JOIN member  ON member.id_member = article.article_authorId ')
                    ->query('INNER JOIN categorie  ON categorie.id_categorie = article.article_categorieId ')
                    ->query('ORDER BY article_date DESC');
                                
        $reqArticles->execute();

        return $reqArticles->fetchAll(PDO::FETCH_OBJ);
    }

    public function getHomeArticle($index){
        $reqArticles=$this->qb->query('SELECT article.* , member.member_firstname , member.member_lastname , categorie.categorie_name 
                                FROM article 
                                INNER JOIN member  ON member.id_member = article.article_authorId
                                INNER JOIN categorie  ON categorie.id_categorie = article.article_categorieId
                                WHERE id_article BETWEEN ? AND ?
                                ORDER BY article_date DESC'
                                );
                                
        $reqArticles->execute((($index-1)*3)+1,(($index-1)*3)+3);

        return $reqArticles->fetchAll(PDO::FETCH_OBJ);
    }
    
    public function getAllArticleByCategorie($categorie="informatif"){
        $reqArticles=$this->qb->query('SELECT article.* , member.member_firstname , member.member_lastname , categorie.categorie_name 
                                FROM article 
                                INNER JOIN member  ON member.id_member = article.article_authorId
                                INNER JOIN categorie  ON categorie.id_categorie = article.article_categorieId
                                WHERE categorie.categorie_name = ?
                                ORDER BY article_date DESC');
                                
        $reqArticles->execute($categorie);

        return $reqArticles->fetchAll(PDO::FETCH_OBJ);
    }

    public function addNewArticle($title,$content,$author,$categorie){
        $reqAddArticle = $this->qb->query("
            INSERT INTO `article`(`article_title`,`article_content`,`article_authorId`,`article_categorieId`)
            VALUES (?,?,?,?);");

        $reqAddArticle->execute($title,$content,$author,$categorie);

        return true;
    }

};