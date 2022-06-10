<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once "_shared/head.php";?>
    <title><?= ucfirst($page)?></title>
</head>
<body>
    <div class="login-container">
        <div class="login-formulaire">
            <form method="post" class="m-2 p-2 border bg-secondary" action="">
                <p class="font-weight-bold">Se connecter</p>
                <div class="form-group ">
                   <input type="text" class="form-control" id="login-pseudo" name="login-pseudo" placeholder="your pseudo">
                </div>
                <div class="form-group ">
                   <input type="password" class="form-control" id="login-password" name="login-password" placeholder="password">
                </div>
                <button type="submit" class="btn btn-primary" name="btn-submit-login">Se connecter</button>
                <p <?php displayError($erreurLogin) ?> class="alert alert-danger"><?= $erreurLogin ?></p>
            <form>
            <button  class="btn btn-primary" name="btn-go-signin">S'inscrire</button>
        </div>
    </div>
</body>
</html>