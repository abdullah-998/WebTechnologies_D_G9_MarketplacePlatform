<?php
    session_start();
    include_once('../model/userService.php');
    include_once('../model/freelancerService.php');
    include_once('../model/buyerService.php');
    if($_SESSION['log'] )
    {
        if($_REQUEST['user_id']!=$_SESSION['id'])
        {
            $id=$_REQUEST['user_id'];
            $userx=userInfoByID($id);
            if($userx==-1)
            {
                header('location: http://localhost/php/webTechnologies_D_G9_MarketplacePlatform/view/error404.php');
            }
            //else if
            else
            {
                if($userx['type']=='Freelancer')
                {
                    $freelancerx=freelancerInfo($id);

                }
                else if($userx['type']=='Buyer')
                {
                    $freelancerx=buyerInfo($id);
                }
            }
        }
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="../asset/style/header.css?v=<?php echo time()?>">
    <link rel="stylesheet" href="../asset/style/main.css?v=<?php echo time()?>">
    <link rel="stylesheet" href="../asset/style/footer.css?v=<?php echo time()?>">
    <link rel="stylesheet" href="../asset/style/TwoPart.css?v=<?php echo time()?>">
</head>
<body>
    <div class="container">
       <?php
            include_once('header.php')
       ?>
       <div class="main-body">
            <div class="left-sidebar">
                <div class="profile__pic">
                    <?php
                        if($_SESSION['id']==$_REQUEST['user_id'])
                        {
                    ?>
                    <img  id="profile_img" height="150px" weight="150px" src="<?= $_SESSION['photo']?>">
                    <div class="name"><?= $_SESSION['name'] ?></div>
                    <?php
                        }
                        else
                        {
                    ?>
                    <img  id="profile_img" height="150px" weight="150px" src="<?= $freelancerx['photo']?>">
                    <div class="name"><?= $freelancerx['name'] ?></div>
                    <?php
                        }
                    ?>
                </div>
                <div class="left-menu">
                    <a class="menu-button" href='home.php'>Home</a>
                    <?php
                        if($_SESSION['id']==$_REQUEST['user_id'])
                        {
                    ?>
                    <a class="menu-button" href="profile.php?user_id=<?=$_SESSION['id']; ?>">Prfolile</a>
                    <?php
                        }
                        else
                        {
                    ?>
                    <a class="menu-button" href="profile.php?user_id=<?=$userx['id'] ?>">Prfolile</a>
                    <?php
                        }
                    ?>

                    <?php
                        if($_SESSION['id']==$_REQUEST['user_id'])
                        {
                    ?>
                        <a class="menu-button" href="http://localhost/php/webTechnologies_D_G9_MarketplacePlatform/view/editProfile.php?user_id=<?=$_SESSION['id']?>">Profile Settings</a>
                        <a class="menu-button" href="http://localhost/php/webTechnologies_D_G9_MarketplacePlatform/view/changePic.php?user_id=<?=$_SESSION['id']?>">Change Profile Picture</a>
                        <a class="menu-button" href="http://localhost/php/webTechnologies_D_G9_MarketplacePlatform/view/DeleteAccount.php?user_id=<?=$_SESSION['id']?>">Delete Account</a>
                        <a class="menu-button" href="http://localhost/php/webTechnologies_D_G9_MarketplacePlatform/view/rp.php?user_id=<?=$_SESSION['id']?>">All Projects</a>
                        <a class="menu-button" href="http://localhost/php/webTechnologies_D_G9_MarketplacePlatform/view/transaction.php?user_id=<?=$_SESSION['id']?>">All Transactions</a>
                        <a class="menu-button" href="http://localhost/php/webTechnologies_D_G9_MarketplacePlatform/view/ePay.php?user_id=<?=$_SESSION['id']?>">ePay</a>
                
                    <?php
                        }
                        else
                        {
                            //there will be new info
                        }
                    ?>
                </div>

            </div>
            <div class="right-side">
                <div class="top_part">
                    <a class="btnXX" href="http://localhost/php/webTechnologies_D_G9_MarketplacePlatform/view/seeReviews.php">See Reviews</a>
                    <?php
                        if($_SESSION['id']!=$_REQUEST['user_id'])
                        {
                            echo '<a class="btnXX" href="http://localhost/php/webTechnologies_D_G9_MarketplacePlatform/view/Message.php">send message</a>';
                        }
                    ?>
                </div>
                <div class="middle_part">
                    <div class="hdr">About Me</div>
                    <div class="info">
                        <?php
                            if($_SESSION['id']==$_REQUEST['user_id'])
                            {
                        ?>
                        <div class="sub_hdr"><span class="sub_hdr2">Name: </span><?=$_SESSION['name']?></div>
                        <div class="sub_hdr"><span class="sub_hdr2">About Me: </span><?=$_SESSION['about']?></div>
                        <div class="sub_hdr"><span class="sub_hdr2">User Type: </span><?=$_SESSION['type']?></div>
                        <div class="sub_hdr"><span class="sub_hdr2">Email: </span><?=$_COOKIE['email']?></div>
                        <div class="sub_hdr"><span class="sub_hdr2">Phone: </span><?=$_SESSION['phone']?></div>
                        <div class="sub_hdr"><span class="sub_hdr2">Address: </span><?=$_SESSION['address']?></div>
                        <div class="sub_hdr"><span class="sub_hdr2">Linkedin Account: </span><?=$_SESSION['link']?></div>
                        <div class="sub_hdr"><span class="sub_hdr2">Github Account: </span><?=$_SESSION['git']?></div>
                        <?php
                            }
                            else
                            {
                        ?>
                        <div class="sub_hdr"><span class="sub_hdr2">Name: </span><?=$freelancerx['name']?></div>
                        <div class="sub_hdr"><span class="sub_hdr2">About Me: </span><?=$freelancerx['about']?></div>
                        <div class="sub_hdr"><span class="sub_hdr2">User Type: </span><?=$userx['type']?></div>
                        <div class="sub_hdr"><span class="sub_hdr2">Email: </span><?=$freelancerx['email']?></div>
                        <div class="sub_hdr"><span class="sub_hdr2">Phone: </span><?=$freelancerx['phone']?></div>
                        <div class="sub_hdr"><span class="sub_hdr2">Address: </span><?=$freelancerx['address']?></div>
                        <div class="sub_hdr"><span class="sub_hdr2">Linkedin Account: </span><?=$freelancerx['link']?></div>
                        <div class="sub_hdr"><span class="sub_hdr2">Github Account: </span><?=$freelancerx['git']?></div>
                        <?php
                            }
                        ?>
                        
                    </div>
                </div>
            </div>
        </div>
        <?php
            include_once('footer.php')
        ?>
    </div>
</body>
</html>
<?php
    }
    else
    {
        header('location: ../index.php');
    }
?> 