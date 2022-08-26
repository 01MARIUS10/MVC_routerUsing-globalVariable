<header class="header">
    <ul class="header_nav1">
        <li><a href="index.php?page=Home" <?php if($page=="home"){echo "class='pageOn'";}?> >Home</a></li>
        <li><a href="index.php?page=Message" <?php if($page=="message"){echo "class='pageOn'";}?>>Message</a></li>
        <li><a href="index.php?page=Profil" <?php if($page=="profil"){echo "class='pageOn'";}?>>Profil</a></li>
        <li><a href="index.php?page=Notification" <?php if($page=="notification"){echo "class='pageOn'";}?>>Notification</a></li>
        <li><a href="index.php?page=Menu" <?php if($page=="menu"){echo "class='pageOn'";}?>>Menu</a></li>
        
    </ul> 
    <form action="" method="post">
        <button class="btn btn-danger" name="Deconnection">Deconnection</button>
    </form>
    
</header>