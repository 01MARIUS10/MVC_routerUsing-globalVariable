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
        <div class="categorie_home">
            <form action="" method="post">
                <label for="categie">Choose a categorie:</label>
                <select id="categorie" name="categorie"  >
                    <?php foreach ($categories as $categorie):?>
                        <option value=<?= $categorie->categorie_name ?> > <?= $categorie->categorie_name ?></option>
                    <?php endforeach;?>
                    <option value="date" selected> date</option>
                </select>
                <button type="submit">Trier</button>
            </form>
        </div>
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