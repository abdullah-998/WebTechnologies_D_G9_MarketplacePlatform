<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
</head>
<body>
    <table border="1" align="center">
        <tr>
            <td height="60px" width="900px" colspan="2">
                <img src="../asset/logo.png" height="60" width="110">
                <a href="../index.php">Mareket Place</a>
                <input type="text" placeholder="search..." name="searchbox">
                <input type="button" value="Search" name="btnserach">
                <a href="message.php">Message</a>
                <a href="notification.php">Notification</a>
                <a href="../php/logout.php">Log out</a>
                <a href="home.php"><img src="../asset/user.png" height="40px" width="40px"></a>
            </td>
        </tr>
        <tr>
            <td height="500px" width="200px">
                <img src="../asset/user.png" height="180px" width="180px"><br>
                <?php echo "<b>User Name</b>";?><hr>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="editProfile.php">Edit Profile</a></li>
                </ul>
            </td>
            <td height="500px" width="700px">
                <form action="../php/ePCheck.php" method="POST">
                    <fieldset>
                        <legend><b>Edit Profile</b></legend>
                        About:<input type="text" name="aboutme"><br><hr>
                        Email:<input type="email" name="email">
                        Confirm email:<input type="email" name="cemail">
                        <br><hr>
                        Address<input type="text" name="add"><br><hr>
                        Website:<input type="url" name="web"><br><hr>
                        Linkedin:<input type="url" name="lk"><br><hr>
                        Git Hub:<input type="url" name="git"><br><hr>
                        Twitter:<input type="url" name="twitter"><br><hr>
                        Facebook:<input type="url" name="fb"><br><hr>
                        Instragram:<input type="url" name="ins"><br><hr>
                        <input type="submit" name="submitChange" value="Save Changes">
                    </fieldset>
                </form>
            </td>
        </tr>
        <tr>
            <td height="60px" width="900px" colspan="2" align="center">
            copyright &copy 2020
            </td>
        </tr>
    </table>
</body>
</html>