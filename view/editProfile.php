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
    <title>riverr | Edit Profile</title>
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
                            <a class="menu-button" href="http://localhost/php/webTechnologies_D_G9_MarketplacePlatform/view/editProfile.php?user_id=<?=$_SESSION['id']?>">Profile Settings</a>
                            <a class="menu-button" href="http://localhost/php/webTechnologies_D_G9_MarketplacePlatform/view/changePic.php?user_id=<?=$_SESSION['id']?>">Change Profile Picture</a>
                            <a class="menu-button" href="http://localhost/php/webTechnologies_D_G9_MarketplacePlatform/view/DeleteAccount.php?user_id=<?=$_SESSION['id']?>">Delete Account</a>
                            <a class="menu-button" href="http://localhost/php/webTechnologies_D_G9_MarketplacePlatform/view/rp.php?user_id=<?=$_SESSION['id']?>">All Projects</a>
                            <a class="menu-button" href="http://localhost/php/webTechnologies_D_G9_MarketplacePlatform/view/transaction.php?user_id=<?=$_SESSION['id']?>">All Transactions</a>
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
                    <div class="heading">Address Change</div>
                    <input type="text" class="field" id="address">
                    <input type="button" class="btn" value="Save changes" onclick="addChange('add')">
                    <input type="button" class="btn" value="Discard" onclick="addChange('discard')">
                    <div id="messageAdd"></div>
                </div>
                <div class="area">
                    <div class="heading">About me Change</div>
                    <input type="text" class="field" id="about_me" > 
                    <button class="btn" onclick="aboutChange('about')">Save Changes</button>
                    <button class="btn" onclick="aboutChange('discard')">Discard</button>
                    <div id="messageabt"></div>
                </div>
                <div class="area">
                    <div class="heading">Add Github Account</div>
                    <input type="text" class="field" id="git"> 
                    <button class="btn" onclick="gitChange()">Save Changes</button>
                    <button class="btn" onclick="gitChange()">Discard</button>
                    <div id="msgit"></div>
                </div>
                <div class="area">
                    <div class="heading">Add Linkedin Account</div>
                    <input type="text" class="field" id="linkedin"> 
                    <button class="btn" onclick="linkChange('link')">Save Changes</button>
                    <button class="btn" onclick="linkChange('discard')">Discard</button>
                </div>
                <div class="area">
                    <div class="heading">Change Password</div>
                    <input type="password" class="field" id="password" placeholder="enter old password"> 
                    <input type="password" class="field" id="new_password" placeholder="enter new password"> 
                    <button class="btn" onclick="passChange('pass')">Change Password</button>
                    <button class="btn" onclick="passChange('discard')">Discard</button>
                    <div id="messageChngPass"></div>
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
    <script src="../asset/script/change.js"></script>
    <script src="../asset/script/passChange.js"></script>
    <script src="../asset/script/addrChange.js"></script>
    <script src="../asset/script/abtme.js"></script>
</body>
</body>
</html>
<?php
    }
    else
    {
        header('location: ../index.php');
    }
?>