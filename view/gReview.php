<?php
    session_start();
    if($_SESSION['flag'])
    {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
    <table border="1" align="center">
        <tr>
            <td height="60px" width="700px">
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
            <td height="400px" width="700px">
                <form action="../php/gReviewCheck.php" method="POST">
                    <fieldset>
                        <legend><b>Give Review about the Buyer</b></legend>
                        Give rating out of 5&#9733<br><br>
                        <select>
                            <option>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select><br><br>
                        comment<br>
                        <textarea>say something about the buyer..</textarea>
                        <hr><br>
                        <a href="BuyerProfile.php"><input type="button" name="Back" value="Back"></a>
                        <input type="submit" name="submit">
                    
                    </fieldset>
                </form>
            </td>
        <tr>
        </tr>
        <tr>
            <td height="60px" width="700px" align="center">
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