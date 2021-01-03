<?php
    session_start(); 
    include_once('../model/epayService.php');
    if(isset($_SESSION['log']))
    {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>riverr | ePay</title>
    <link rel="stylesheet" type="text/css" href="../asset/style/header.css?v=<?php echo time()?>">
    <link rel="stylesheet" type="text/css" href="../asset/style/footer.css?v=<?php echo time()?>">
    <link rel="stylesheet" type="text/css" href="../asset/style/main.css?v=<?php echo time()?>">
    <link rel="stylesheet" type="text/css" href="../asset/style/oneUnit.css?v=<?php echo time()?>">
    <style>
        .epay{
            display: inline;
        }
    </style>
</head>
<body>
    <div class="main_container"> 
        <div>
            <?php include_once('header.php')?>
        </div>
        <div class="main-body">
            <div class="main-body-unit">
                <div class="epay">
                <?php 
                    $row=epayInfo($_SESSION['id']);
                    if($row==-1)
                    {
                        $userx=['id'=>$_SESSION['id'],'balance'=>50];
                        $status=insertEpay($userx);
                    
                ?>
                Your current balance is $ 50<br>
                <?php
                    }
                    else
                    {
                   
                ?>
                Current balance is $ <?=$row['balance']?>
                <?php
                    }
                ?>
                </div>
            </div>
        </div>    
        <div>
            <?php include_once('footer.php')?>
        </div>
    </div>
    
</body>
</html>
<?php
    }
    else
    {
        header('location: ../index.php');
    }
?>