<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" align="center">
        <tr>
            <td height="60px" width="700px">
                <img src="../asset/logo.png" height="60" width="110">
                <a href="log.php">Log in</a>|
                <a href="../index.php">Mareket Place</a>
            </td>
        </tr>
        <tr>
            <td height="500px" width="700px">
                <form action="../php/regCheck.php" method="POST">
                    <fieldset>
                        <legend><b>Registration</b></legend>
                        Name <input type="text" name="sname"><br><br>
                        Email <input type="email" name="email"><br><br>
                        Password <input type="password" name="pass"><br><br>
                        Confirm Password <input type="password" name="cpass"><br><br>
                        Chose Category<select name="ac_type[]">
                            <option value="buyer">Buyer</option>
                            <option value="freelancer">Freelancer</option>
                            <option value="visitor">Visitor</option>
                        </select>
                        <hr>
                        <input type="checkbox" name="checkreg"><b>I have accepted all terms and policy</b><br>
                        <input type="submit" name="reg" value="Register">
                    </fieldset>
                </form>
                <?php
                    if(isset($_REQUEST['msg']))
                    {
                        if($_REQUEST['msg']=='null')
                        {
                            echo "One or more fields are null...<br>";
                        }
                        if($_REQUEST['msg']=='pass_match')
                        {
                            echo "Password did not match...<br>";
                        }
                        if($_REQUEST['msg']=='pass_short')
                        {
                            echo "Please chose a strong password more tha 7 characters...<br>";
                        }
                        if($_REQUEST['msg']=='invalid_name')
                        {
                            echo "Invalid name..<br>";
                        }
                        if($_REQUEST['msg']=='create')
                        {
                            echo "Your account have create succesfully..<br>Please log in<br>";
                        }
                    }
                ?>
            </td>
        </tr>
        <tr>
            <td height="60px" width="700px" align="center">
                copyright &copy 2020
            </td>
        </tr>
    </table>
</body>
</html>