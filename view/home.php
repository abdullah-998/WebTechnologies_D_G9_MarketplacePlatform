<?php

use function PHPSTORM_META\type;

session_start(); 
    if($_SESSION['type']==0)
    {
        setcookie('buyer','ok',time()+3600,'/');
    }
    if($_SESSION['flag'])
    {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <table border="1" align="center">
        <tr>
            <td height="60px" width="900px" colspan="2">
                <img src="../asset/logo.png" height="60" width="110">
                Wel come, <a href="home.php"><?php echo $_SESSION['name']; ?></a>
                <a href="log.php">Log in</a>|
                <a href="../index.php">Mareket Place</a>
                <input type="text" placeholder="search..." name="searchbox">
                <input type="button" value="Search" name="btnserach">
                <a href="message.php">Message</a>
                <a href="notification.php">Notification</a>
                <a href="../php/logout.php">Log out</a>
            </td>
        </tr>
        <tr>
            <td height="600px" width="200px">
                <img src="../asset/user.png" height="180px" width="180px"><br>
                <?php echo "<b>".$_SESSION['name']."</b>";?><hr>
                <ul>
                    <li><a href="profile.php">Profile</a><br></li>
                    <li><a href="post.php">Post</a><br></li>
                </ul>
            </td>
            <td height="600px" width="700px">
                <h1>News Feed...</h1>
            </td>
        </tr>
        <tr>
            <td height="60px" width="900px" align="center" colspan="2">
                copyright &copy 2020
            </td>
        </tr>
    </table>
</body>
</html>
<?php
    }
    else
    {
        header('location: log.php');
    }
?>