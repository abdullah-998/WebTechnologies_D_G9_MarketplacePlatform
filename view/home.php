<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home||<?php echo "User"?></title>
</head>
<body>
    <table border="1" align="center">
        <tr>
            <td height="60px" width="900px" colspan="2">
                <img src="../asset/logo.png" height="60" width="110">
                Wel come, <a href="home.php"><?php echo "User"; ?></a>
                <a href="view/log.php">Log in</a>|
                <a href="../index.php">Mareket Place</a>
                <input type="text" placeholder="search..." name="searchbox">
                <a href="#">Message</a>
                <a href="#">Notification</a>
                <a href="../php/logout.php">Log out</a>
            </td>
        </tr>
        <tr>
            <td height="600px" width="200px">
                <img src="../asset/user.png" height="180px" width="180px"><br>
                <?php echo "<b>User Name</b>";?><hr>
                <ul>
                    <li><a href="profile.php">Profile</a><br></li>
                    <li><a href="Post.php">Post</a><br></li>
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