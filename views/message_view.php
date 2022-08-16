<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once "_shared/head.php";?>
    <title><?= ucfirst($page)?></title>
</head>
<body>
    <?php include_once "_shared/header.php";?>

    <div class="container mt-1">
        <div class="row">
            <div class="col-sm-3">
                <div class="">
                    <img src="#../assets/images/logo.jpg" alt="profil">
                </div>
                <div class="">
                    <div>  <img class="icon" src="#../assets/images/appel.png" alt="audio">           <p>appel</p></div>
                    <div>  <img class="icon" src="#../assets/images/lecteur-video.png" alt="video">   <p>video</p></div>
                    <div>  <img class="icon" src="#../assets/images/utilisateur.png" alt="profil">    <p>profil</p> </div>
                    <div>  <img class="icon" src="#../assets/images/notification.png" alt="sourdine"> <p>sourdine</p> </div>
                    
                </div>
                <div class="">
                    <p>autre action</p>
                    <ul>
                        <li class=""><p>contenu multimedia</p><img class="icon" src="#../assets/images/multimedia.png" alt="multi"> </li>
                        <li class=""><p>rechercher une message</p><img class="icon" src="#../assets/images/menu.png" alt="ij"> </li>
                    </ul>
                </div>
            </div>
            <div class="message-conversation col-sm-9">
                <div class="text-center bg-dark p-2 text-light">Chat</div>
                <ul class="message-conversation_listing">
                    <?php foreach($messages as $message):?>
                    <li class=<?php Class_reconnaissance($message->id_from) ?> >
                        <div class="message_about">
                            <span><?php if(!is_me($message->id_from)){echo (Member::getName($message->id_from))->member_firstname;}  ?></span>
                            <p><?= $message->message_content ?></p>
                        </div>
                        <span class="message_time"><?= $message->message_date ?></span>
                    </li>
                    <?php endforeach ;?>
                </ul>
                <div class="message-form form-group">
                    <form class="m-2" action="" method="post">
                        <textarea  class="form-control" type="text" name="message_content" id="message_content" cols="3" rows="3"></textarea>
                        <button type="submit" name="btn-message" >envoyer</button>
                        <p <?php displayError($erreurMessage) ?> class="alert alert-danger"><?= $erreurMessage ?></p>
                    
                    </form>
                </div>
            </div>
            
        </div>
    </div>
    
</body>
</html>