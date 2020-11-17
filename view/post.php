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
            <td height="600px" width="200px">
            <form action="postCheck3" method="POST">
                    <fieldset>
                        <legend><b>Search</b></legend>
                        <input type="text" name="typesrch" placeholder="search"><br><br>
                        <input type="submit" name="typrbtn" value="search">
                    </fieldset>
                </form>
                <form action="postCheck3" method="POST">
                    <fieldset>
                        <legend><b>Filter</b></legend>
                        Chose category
                        <select>
                            <option>Web Dev</option>
                            <option>Graphic Design</option>
                            <option>Desktop Applicaton</option>
                            <option>Android Dev</option>
                            <option>IOS Dev</option>
                            <option>Typing</option>
                        </select><br><br>
                        Chose Tags
                        <input type="text" name="ftag"><br><br>
                        Pricing
                        <input type="tel" size="2" name="from" placeholder="$"> to <input type="tel" size="2" name="to" placeholder="$"><br><br>
                        <input type="button" name="filter" value="apply filter">
                    </fieldset>
                </form>
            </td>
            <td height="600px" width="700px">
                <form action="postCheck.php" method="POST">
                    <fieldset>
                        <legend><b>Create a Post</b></legend>
                        Description:<br>
                        <textarea name="post" form="usrform">Enter text here...</textarea><br>
                        Chose category<br>
                        <select>
                            <option>Web Dev</option>
                            <option>Graphic Design</option>
                            <option>Desktop Applicaton</option>
                            <option>Android Dev</option>
                            <option>IOS Dev</option>
                            <option>Typing</option>
                        </select><br>
                        <hr>
                        Experience Year <input type="number" name="experience"><br><br>
                        Pricing amount $<input type="text" name="amount"><br><br>
                        Add Tag <input type="text" name="tag">
                        <hr>
                        <input type="submit" name="post" value="Post">
                    </fieldset>
                </form>
                <form action="postCheck2.php" method="POST">
                    <fieldset>
                        <legend><b>Posts</b></legend>
                        I need a high skilled web devoloper<br>
                        Type: Web Dev<br>
                        Tags: html,php<br>
                        Price: $500<br>
                        <hr>
                        <input type="text" name="cmnt">
                        <input type="button" name="btncmnt" value="comment"><br>
                        <hr>
                        <input type="button" name="btnapply" value="apply"> 
                        <input type="button" name="btnmsg" value="send message"><br>
                        <hr><hr>
                        I need a high skilled web devoloper<br>
                        Type: Web Dev<br>
                        Tags: html,php<br>
                        Price: $500<br>
                        <hr>
                        <input type="text" name="cmnt">
                        <input type="button" name="btncmnt" value="comment"><br>
                        <hr>
                        <input type="button" name="btnapply" value="apply"> 
                        <input type="button" name="btnmsg" value="send message"><br>
                    </fieldset>
                </form>
                
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