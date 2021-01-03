<?php
    session_start(); 
    if(isset($_SESSION['log']) and $_SESSION['id']==$_REQUEST['user_id'])
    {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>riverr | Home</title>
    <link rel="stylesheet" type="text/css" href="../asset/style/header.css?v=<?php echo time()?>">
    <link rel="stylesheet" type="text/css" href="../asset/style/footer.css?v=<?php echo time()?>">
    <link rel="stylesheet" type="text/css" href="../asset/style/main.css?v=<?php echo time()?>">
    <link rel="stylesheet" type="text/css" href="../asset/style/home.css?v=<?php echo time()?>">
    <link rel="stylesheet" type="text/css" href="../asset/style/editProfile.css?v=<?php echo time()?>">
</head>
<body>
    <div class="main_container"> 
        <div>
            <?php include_once('header.php')?>
        </div>
        <div class="main-body">
            <div class="left-sidebar">
                <div class="left-menu">
                    <a class="menu-button" href='http://localhost/php/webTechnologies_D_G9_MarketplacePlatform/view/home.php'>Home</a>
                    <a class="menu-button" href="http://localhost/php/webTechnologies_D_G9_MarketplacePlatform/view/profile.php?user_id=<?=$_SESSION['id']?>" class="header-right-menus">Profile</a>
                    <?php
                        if($_SESSION['id']==$_REQUEST['user_id'])
                        {
                    ?>
                            <a class="menu-button" href="http://localhost/php/webTechnologies_D_G9_MarketplacePlatform/view/editProfile.php?user_id=<?=$_SESSION['id']?>">Profile Setting</a>
                            <a class="menu-button" href="http://localhost/php/webTechnologies_D_G9_MarketplacePlatform/view/changePic.php?user_id=<?=$_SESSION['id']?>">Change Profile Picture</a>
                            <a class="menu-button" href="http://localhost/php/webTechnologies_D_G9_MarketplacePlatform/view/DeleteAccount.php?user_id=<?=$_SESSION['id']?>">Delete Account</a>
                            <a class="menu-button" href="http://localhost/php/webTechnologies_D_G9_MarketplacePlatform/view/RuningProject.php">Runing Project</a>
                            <a class="menu-button" href="http://localhost/php/webTechnologies_D_G9_MarketplacePlatform/view/.php">Transaction</a>
                    <?php
                        }
                        else
                        {

                        }
                    ?>
                </div>
            </div>
            <div class="newsfeed">
                <div class="area">
                    <div class="heading">Delete Account</div>
                    <input type="password" class="field" id="password" placeholder="enter your password"> 
                    <button class="btn" onclick="deleteAccount()">Confirm Delete</button>
                    <div id="msg"></div>
                </div>
            </div>
            <div class="right-sidebar">
                <div class="recent">
                    <div class="hd">Most recents</div>
                    <div class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio omnis saepe corporis vero quas? Accusamus a dolorem animi omnis beatae.</div>
                    <div class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio omnis saepe corporis vero quas? Accusamus a dolorem animi omnis beatae.</div>
                </div>
                <div class="adv">
                    <div class="hd2">Advertisements</div>
                    <div class="hd">Wanna be a freelancer?</div>
                    <div class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam ducimus maxime, aperiam saepe doloremque magnam natus ad temporibus voluptates incidunt, velit perferendis accusamus animi. Pariatur ratione voluptatem cupiditate repellat illum!</div>
                    <div class="hd">Looking for experienced SEO?</div>
                    <div class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam ducimus maxime, aperiam saepe doloremque magnam natus ad temporibus voluptates incidunt, velit perferendis accusamus animi. Pariatur ratione voluptatem cupiditate repellat illum!</div>
                </div>
            </div>
        </div>
        <div>
            <?php include_once('footer.php')?>
        </div>
    </div>
    <script src="../asset/script/deactive.js"></script>
</body>
</html>
<?php
    }
    else
    {
        header('location: ../index.php');
    }
?>