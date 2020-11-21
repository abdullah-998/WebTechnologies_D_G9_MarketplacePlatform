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
                <form action="../php/Deactivate.php" method="POST">
                    <fieldset>
                        <legend><b>Deactivate</b></legend>
                        Are you sure you want to <b>Deactivate</b> your account?<br>
                        <input type="password" name="pass"><br><hr>
                        <input type="submit" value="go back" name="bak">
                        <input type="submit" value="Deactivate" name="submit">
                    </fieldset>
                </form> 
            </td>
        </tr>
    </table>
</body>
</html>