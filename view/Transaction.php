<?php
    session_start(); 
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
    <style>
        .table{
            margin: 1rem;
        }
        .row{
            border: .2rem solid rgba(18, 236, 91, 0.856);
            display: block;
        }
        .col{
            display: inline;
            padding: 1rem;
            border-right: .1rem solid rgba(18, 236, 91, 0.856);
        }
    </style>
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
                <div class="table">
                    <div class="row">
                        <div class="col">Order ID</div>
                        <div class="col">Paid</div>
                        <div class="col">Amount</div>
                    </div>
                    <div class="row">
                        <div class="col">11111111</div>
                        <div class="col">Md Sajjad</div>
                        <div class="col">$560</div>
                    </div>
                    <div class="row">
                        <div class="col">11111112</div>
                        <div class="col">Md Sajjad</div>
                        <div class="col">$450</div>
                    </div>
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
    
</body>
</html>
<?php
    }
    else
    {
        header('location: ../index.php');
    }
?>