<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
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
                    <li><a href="ChangePicture.php">Change Profile Picture</a></li>
                    <li><a href="ChangePassword.php">Change Password</a></li>
                    <li><a href="UpdateGeeg.php">Change Geeg</a></li>
                    <li><a href="RunningProject.php">Running Project</a></li>
                    <li><a href="Deactivate.php">Deactivate</a></li>
                    <li><a href="Transaction.php">My Transaction</a></li>
                </ul>
            </td>
            <td height="500px" width="700px" align="center">
                
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