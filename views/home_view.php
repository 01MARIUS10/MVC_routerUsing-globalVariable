<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once "_shared/head.php";?>
    <title><?= ucfirst($page)?></title>
</head>
<body>
<!--HEADER ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- -->
    <?php include_once "_shared/header.php";?>
    <div class="home">
<!-- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- -->
        <div class="home_background">
            <h1>welcome <?= $memberOn->firstname ?> </h1>
        </div>
<!--FORMULAIRE NEW PUB ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- -->
        <div class="m-5" <?=$display_newPub ?>>
            <form method="post" class="form_content m-2 p-2 border" action="">
                <p class="font-weight-bold">New publish</p>
                <div class="form-group " hidden>
                    <select class="custom-select mr-sm-2" id="pub-author" name="pub-author">
                        <option selected 
                                value=<?= $memberOn->id?>
                                >the Author
                        </option>
                    </select>
                </div>

                <div class="form-group row">
                    <div class="col">
                        <input type="text" class="form-control" id="pub-title" name="pub-title" placeholder="Title ">
                    </div>
                    <div class="col">
                        <select class="custom-select mr-sm-2" id="pub-categorie" name="pub-categorie">
                            <option selected value="">Choose...</option>
                            <?php foreach ($categories as $categorie):?>
                                <option value=
                                    <?= $categorie->id_categorie ?> > 
                                    <?= $categorie->categorie_name ?>
                                </option>
                        <?php endforeach;?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="pub-content" name="pub-content" rows="3" placeholder="something you want to publish "></textarea>
                </div>

                <button type="submit" class="btn btn-primary" name="btn-submit-newPub">Submit</button>
            
                <p <?php displayError($erreurAddPub) ?> class="alert alert-danger"><?= $erreurAddPub ?></p>
            </form>
        </div>
<!--FORMULAIRE CATEGORIE DE TRIAGE ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- -->
        <div class="m-2 d-flex align-items-center" >
            <form action="" method="post" class="w-75 m-auto d-flex align-items-center">
                <label for="categorie">Choose a categorie:</label>
                <select  class="form-select custom-select" aria-label="Default select example"id="categorie" name="categorie">
                    <?php foreach ($categories as $categorie):?>
                        <option value=
                            <?= $categorie->categorie_name ?> 
                            <?php selectedOption($html_placeholder,$categorie->categorie_name);?> > 
                            <?= $categorie->categorie_name ?>
                        </option>
                    <?php endforeach;?>
                    <option value="date" <?php selectedOption($html_placeholder,"date");?> > date</option>
                </select>
                <button class="btn btn-primary" type="submit">Trier</button>
            </form>
            <form action="" method="post" class="m-auto" <?= $display_linkNewPub?> >
                <button class="btn btn-primary" type="submit" name="Add_new-pub"> Add new Pub</button>
            </form>
        </div>
<!--LISTING DES ARTICLES---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- -->  
        <div class="home_list">
            <section class="home_list-section">
                <?php foreach ($articles as $article):?>
                    <article class="home_list-section_article">
                        <div class="home_list-section_articleHead">
                            <h3> <?= $article->article_title ?> <h3>
                            <p> <?= $article->categorie_name ?> </p>
                        </div>
                        <div class="home_list-section_articleContent">
                            <p> <?= $article->article_content ?> </p>
                        </div>
                        <div class="home_list-section_articleAuthor">
                            <h4> <?= "de : ".$article->member_firstname." ".$article->member_lastname ?> <h4>
                            <h4> <?= "at : ".$article->article_date ?> </h4>
                        </div>
                    </article>
                <?php endforeach?>
            </section>
            <div class="indexPage">
                <div class="indexPage_number">
                    <?php if($indexPage>1) :?>
                    <form action="" method="post">
                        <button type="submit" value="<?= $indexPage-1 ?>" name="indexPage">prec</button>
                    </form>
                    <?php endif;?>

                    <?php for($i=0;$i<4;$i++) :?>
                    <form action="" method="post">
                        <button type="submit" value="<?= $i+$indexPage ?>" name="indexPage"><?= $i+$indexPage ?></button>
                    </form>
                    <?php endfor;?>
                    <form action="" method="post">
                        <button type="submit" value="<?=$indexPage+3 ?>" name="indexPage">...</button>
                    </form>
                    
                    <!-- <?= $indexPage ?> -->

                </div>
            </div>
        </div>
<!-- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- -->     
    </div>
    <?php include_once "_shared/footer.php";?>
    </body>
</html>