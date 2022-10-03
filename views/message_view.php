<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once "_shared/head.php";?>
    <title><?= ucfirst($page)?></title>
</head>
<body>
    <?php include_once "_shared/header.php";?>
<div class="message py-2">
    <div class=" message mt-1">
        <div class="row mx-3">
            <div class="col-sm-3 pr-0 ">
                <div class="block1  border border-danger h-100 px-1">
                    <div class="input-box p-4">
                        <input type="text" class="form-control">
                        <i class="fa fa-search"></i>                    
                    </div><div class="search">

                    </div>
                    <div class="userConnected">
                        <ul class="list-group list-user">
                            <?php foreach ($users as $user): ?>
                            <li class="list-group-item "><?= $user->member_firstname?></li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-9 px-4  ">
                <div class="block2 border border-danger">
                    <div class=" p-4  mb-1 text-light message-embleme">
                        <img src="../assets/images/logo.jpg" alt="logo">
                    </div>
                    <div class="lastMessage text-center p-3">
                        <?php if(($countMessage-($indexMessage*3)+1)>=3) :?>
                        <form action="" method="post">
                            <button class="p-4 border border-danger" type="submit" name="latestMessage" value=".">
                                latest
                                <img src="../assets/icon/fleche.svg" alt="fleche">
                            </button>
                            <?= $indexMessage ?>
                        </form>
                        <?php endif ;?>
                    </div>
                    <ul class="message-conversation">
                        <?php foreach($messages as $message):?>
                        <li class=<?php Class_reconnaissance($message->id_from) ?> >
                            <div class="message_about">
                                <span><?php if(!is_me($message->id_from)){echo ($MemberEntity->getName($message->id_from))->member_firstname;}  ?></span>
                                <p><?= $message->message_content ?></p>
                            </div>
                            <span class="message_time"><?= ($message->message_date) ?></span>
                        </li>
                        <?php endforeach ;?>
                    </ul>
                    <div class="lastMessage text-center p-3">
                        <?php if($indexMessage!=1) :?>
                            <form action="" method="post">
                                <button class="p-4 border border-danger" type="submit" name="ownerMessage" value=".">
                                    owner
                                    <img src="../assets/icon/fleche.svg" alt="fleche">
                                </button>
                                <?= $indexMessage ?>
                            </form>
                        <?php endif ;?>
                    </div>
                    <div class="message-form form-group">
                        <form class="m-2" action="" method="post">
                            <div class="d-flex">
                                <textarea  class="form-control" type="text" name="message_content" id="message_content" cols="3" rows="1"></textarea>
                                <button type="submit" class="btn btn-primary" name="btn-message" >envoyer</button>
                            </div>
                            <p <?php displayError($erreurMessage) ?> class="alert alert-danger"><?= $erreurMessage ?></p>
                        
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
</body>
</html>