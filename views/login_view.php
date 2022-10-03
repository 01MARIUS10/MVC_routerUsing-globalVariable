<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once "_shared/head.php";?>
    <title><?= ucfirst($page)?></title>
</head>
<body>
    <div class="login-container">
        <div class="login-formulaire">
            <form method="post" class="" action="">
                <div class="login-head">
                    <img src="/assets/images/logo.jpg" alt="logo" >
                </div>
                
                <div class="form-group ">
                   <input type="text" class="form-control" id="login-pseudo" name="login-pseudo" placeholder="your pseudo">
                </div>
                <div class="form-group ">
                   <input type="password" class="form-control" id="login-password" name="login-password" placeholder="password">
                </div>
                <div class="login-button mt-4">
                    <button type="submit" class="" name="btn-submit-login">Se connecter</button>
                </div>
                <p <?php displayError($erreurLogin) ?> class="alert alert-danger"><?= $erreurLogin ?></p>
            <form>
            <a  class="redirectionSignIn" name="btn-go-signin">S'inscrire</a>
        </div>
    </div>
</body>
</html>