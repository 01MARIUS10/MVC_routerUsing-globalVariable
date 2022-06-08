<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once "_shared/head.php";?>
    <title><?= ucfirst($page)?></title>
</head>
<body>
    <div class="container_message">
        <?php include_once "_shared/header.php";?>
        <div class="listing_option">
            <div class="a">
                <img src="../assets/images/logo.jpg" alt="profil">
            </div>
            <div class="icons">
                <div>  <img src="../assets/images/appel.png" alt="audio">           <p>appel</p></div>
                <div>  <img src="../assets/images/lecteur-video.png" alt="video">   <p>video</p></div>
                <div>  <img src="../assets/images/utilisateur.png" alt="profil">    <p>profil</p> </div>
                <div>  <img src="../assets/images/notification.png" alt="sourdine"> <p>sourdine</p> </div>
                
            </div>
            <div class="option">
                <p>autre action</p>
                <ul>
                    <li class="coincoin"><p>contenu multimedia</p><img class="icon" src="../assets/images/multimedia.png" alt="multi"> </li>
                    <li class="coincoin"><p>rechercher une message</p><img class="icon" src="../assets/images/menu.png" alt="ij"> </li>
                </ul>
            </div>
        </div>
        <div class="embleme_message">
            <img src="../assets/images/logo.jpg" alt="profil">
        </div>
        <div class="conversation_message">
            <ul>
                <li class="other">sdfghj</li>
                <li class="other">mojhlcgjxfdg</li>
                <li class="other">ojagpi</li>
                <li class="other">qeogjp</li>
                <li class="me">ok alors</li>
            </ul>

        </div>
        <div class="option_message">
            <input type="text" name="message_content" id="message_content">
        </div>
        <?php include_once "_shared/footer.php";?>
    </div>
    
</body>
</html>