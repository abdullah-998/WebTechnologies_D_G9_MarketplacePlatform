<?php
    session_start(); 
    include_once('../model/buyerService.php');
    include_once('../model/postService.php');
    if(isset($_SESSION['log']))
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
    <link rel="stylesheet" type="text/css" href="../asset/style/post.css?v=<?php echo time()?>">
</head>
<body>
    <div class="main_container"> 
        <div>
            <?php include_once('header.php')?>
        </div>
        <div class="main-body">
            <div class="left-sidebar">
                <div class="left-menu">
                    <a class="menu-button" href="http://localhost/php/webTechnologies_D_G9_MarketplacePlatform/view/profile.php?user_id=<?=$_SESSION['id']?>" class="header-right-menus">Profile</a>
                    <a class="menu-button" href='post.php'>Post</a>
                </div>
            </div>
            <div class="newsfeed">
                <div class="post">
                    <?php 
                        $posts=postInfo($_REQUEST['pid']);
                        $buyer=buyerInfo($posts['uid']);

                        $_SESSION['bid']=$buyer['id'];
                        $_SESSION['price']=$posts['price'];
                        $_SESSION['pid']=$posts['pid'];
                    ?>   
                    <a class="link" href="http://localhost/php/webTechnologies_D_G9_MarketplacePlatform/view/profile.php?user_id=<?=$posts['uid'] ?>"><?=$buyer['name']?></a><br>
                    <div class="projectName">Project Name: <?=$posts['pname']?></div>
                    <div class="projectName">Project Description: <?=$posts['descr']?></div>
                    <div class="projectPrice">Price $: <?=$posts['price']?></div>
                    <?php 
                        if($_SESSION['type']=='Freelancer')
                        {
                    ?>
                    <button class="btnxy" onclick="request()">Request</button><br>
                    <?php }?>
                    <div class="messagex"></div>
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
    <script src="../asset/script/request.js"></script>
</body>
</html>
<?php
    }
    else
    {
        header('location: ../index.php');
    }
?>