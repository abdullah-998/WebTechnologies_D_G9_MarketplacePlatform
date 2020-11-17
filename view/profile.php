<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
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
            <td height="550px" width="200px">
                <img src="../asset/user.png" height="180px" width="180px"><br>
                <?php echo "<b>User Name</b>";?><hr>
                <ul>
                    <li><a href="home.php">Home</a></li>
                </ul>
            </td>
            <td height="550px" width="700px">
               <fieldset>
                   <legend><b>Reviews</b></legend>
                   <img src="../asset/rvw.jpg" height="40px" width="200px" alt="review"><br>
                   5 STAR Ratings<br>
                   Gold freelancers<br>
        
                   <a href="review.php"><input type="button" name="review" value="see reviews"></a>
                   <a href="message.php"><input type="button" name="review" value="send message"></a>
                   <a href="gig.php"><input type="button" name="gig" value="see geeg"></a>
               </fieldset>
               <fieldset>
                   <legend><b>About</b></legend>
                   Name: User name<br><hr>
                   About Me: I am a senior devoloper<br><hr>
                   Join Date: 19-Aug-2019<br><hr>
                   Gender: Male<br><hr>
                   Birth Date: 12-December-1990<br><hr>
                   Website: <a href="#">www.user.com</a><br><hr>
                   Email: usera@gmail.com<br><hr>
                   Address: Dhaka, Bangladesh<br><hr>
                   
               </fieldset>
               <fieldset>
                   <legend><b>Social Media Link</b></legend>
                   <a href="https://www.linkedin.com"><img src="../asset/lk.webp" height="40px" width="40px"></a>       
                   <a href="https://www.twitter.com"><img src="../asset/tw.jpg" height="40px" width="40px"></a>       
                   <a href="https://www.facebook.com"><img src="../asset/fb.png" height="40px" width="40px"></a>       
                   <a href="https://www.instragram.com"><img src="../asset/ins.webp" height="40px" width="40px"></a>       
               </fieldset>
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