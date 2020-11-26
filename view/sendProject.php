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
    <title>Message</title>
</head>
<body>
    <table border="1" align="center">
        <tr>
            <td height="60px" width="200px" align="center"><b>Send Project to User1</b></td>
        </tr>
        <tr>
            <td height="60px" width="200px">
                <input type="file" name="file"><hr>
                <input type="submit" name="submit">
            </td>
        </tr>
        <tr>
            <td height="60px" width="200px">
                <a href="BuyerProfile.php">Back</a>
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