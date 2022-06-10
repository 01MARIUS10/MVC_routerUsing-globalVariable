<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once "_shared/head.php";?>
    <title><?= ucfirst($page)?></title>
</head>
<body>
    <div class="message">
        <div class="message-head">
            <?php include_once "_shared/header.php";?>
        </div>
        <div class="message-parameter">
            <div class="message-parameter_embleme">
                <img src="../assets/images/logo.jpg" alt="profil">
            </div>
            <div class="message-parameter_icons">
                <div>  <img class="icon" src="../assets/images/appel.png" alt="audio">           <p>appel</p></div>
                <div>  <img class="icon" src="../assets/images/lecteur-video.png" alt="video">   <p>video</p></div>
                <div>  <img class="icon" src="../assets/images/utilisateur.png" alt="profil">    <p>profil</p> </div>
                <div>  <img class="icon" src="../assets/images/notification.png" alt="sourdine"> <p>sourdine</p> </div>
                
            </div>
            <div class="message-parameter_option">
                <p>autre action</p>
                <ul>
                    <li class=""><p>contenu multimedia</p><img class="icon" src="../assets/images/multimedia.png" alt="multi"> </li>
                    <li class=""><p>rechercher une message</p><img class="icon" src="../assets/images/menu.png" alt="ij"> </li>
                </ul>
            </div>
        </div>
        <div class="message-embleme">
            <img src="../assets/images/logo.jpg" alt="profil">
        </div>
        <div class="message-conversation">
            <ul class="message-conversation_listing">

                <?php foreach($messages as $message):?>
                <li class=<?php Class_reconnaissance($message->id_from) ?> >
                    <div class="message_about">
                        <span><?=(Member::getName($message->id_from))->member_firstname;  ?></span>
                        <p><?= $message->message_content ?></p>
                    </div>
                    <span class="message_time"><?= $message->message_date ?></span>
                </li>
                <?php endforeach ;?>

            </ul>

        </div>
        <div class="message-form form-group">
            <form class="m-2" action="" method="post">
                <textarea  class="form-control" type="text" name="message_content" id="message_content" cols="3" rows="3"></textarea>
                <button type="submit" name="btn-message" >envoyer</button>
                <p <?php displayError($erreurMessage) ?> class="alert alert-danger"><?= $erreurMessage ?></p>
            
            </form>
        </div>
        <div class="message-foot">
            <?php include_once "_shared/footer.php";?>
        </div>
    </div>
    
</body>
</html>