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
    <title>Deactivate</title>
</head>
<body>
    <table border="1" align="center">
        <tr>
            <td>
                <form action="../php/DeactivateCheck.php" method="POST">
                    <fieldset>
                        <legend><b>Deactivate</b></legend>
                        Are you sure you want to <b>Deactivate</b> your account?<br><br>
                        Enter Password: 
                        <input type="password" name="pass"><br><hr>
                        <a href="home.php">Back</a>
                        <input type="submit" value="Deactivate" name="submit">
                    </fieldset>
                </form> 
                <?php
                    if(isset($_REQUEST['msg']))
                    {
                        if($_REQUEST['msg']=='null')
                        {
                            echo "Please enter your password..<br>";
                        }
                        if($_REQUEST['msg']=='pass')
                        {
                            echo "Wrong password..<br>";
                        }
                    }
                ?>
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