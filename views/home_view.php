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
        <div class="home_addNewPub m-5">
            <form method="post" class="m-2 p-2 border bg-secondary" action="">

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
        <div class="home_form form-group m-2">
            <form action="" method="post" class="">
                <label for="categorie">Choose a categorie:</label>
                <select  class="w-25 form-select mr-sm-2" aria-label="Default select example"id="categorie" name="categorie">
                    <?php foreach ($categories as $categorie):?>
                        <option value=
                            <?= $categorie->categorie_name ?> 
                            <?php selectedOption($html_placeholder,$categorie->categorie_name);?> > 
                            <?= $categorie->categorie_name ?>
                        </option>
                        
                    <?php endforeach;?>
                    <option value="date" <?php selectedOption($html_placeholder,"date");?> > date</option>
                </select>
                <button type="submit">Trier</button>
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
        </div>
<!-- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- -->     
    </div>
    <?php include_once "_shared/footer.php";?>
    </body>
</html>