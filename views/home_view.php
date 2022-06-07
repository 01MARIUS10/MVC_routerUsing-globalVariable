<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once "_shared/head.php";?>
    <title><?= ucfirst($page)?></title>
</head>
<body>
    <?php include_once "_shared/header.php";?>
    <div class="container_home">
        <div class="embleme">
            <h1>welcome to JOVObook </h1>
        </div>
        <?php $articles = Article::getAllArticle()?>
        <div class="container_home_list">
            <section>
                <?php foreach ($articles as $article):?>
                    <article>
                        <div class="article_entete">
                            <h3> <?= $article->article_title ?> <h3>
                            <p> <?= $article->categorie_name ?> </p>
                        </div>
                        <div class="article_content">
                            <p> <?= $article->article_content ?> </p>
                        </div>
                        <div class="article_author">
                            <h4> <?= "de : ".$article->member_firstname." ".$article->member_lastname ?> <h4>
                            <h4> <?= "at : ".$article->article_date ?> </h4>
                        </div>
                    </article>
                <?php endforeach?>
            </section>
        </div>
    </div>
    <?php include_once "_shared/footer.php";?>
    </body>
</html>