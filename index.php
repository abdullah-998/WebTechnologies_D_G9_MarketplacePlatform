<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index | Riverr</title>
    <link rel="stylesheet" type="text/css" href="asset/style/main.css?v=<?php echo time()?>">
    <link rel="stylesheet" type="text/css" href="asset/style/header2.css?v=<?php echo time()?>">
    <link rel="stylesheet" type="text/css" href="asset/style/footer.css?v=<?php echo time()?>">
    <link rel="stylesheet" type="text/css" href="asset/style/index.css?v=<?php echo time()?>">
    <style>
        .error{
            color: red;
            font-size: 1.4rem;
        }
    </style>
</head>
<body>
    <div class="cotainer">
        <div class="index-header">
            <div class="header">
                <h1 class="header__name">Riverr<span id="dot">.</span></h1>
            </div>
            <div class="header-right">
                <form method="POST" action="controller/logCheck.php" class="form_log">
                    <span class="log-text">Email</span> <input type="email" id="log_email" class="header-right--email" name="log_email">
                    <span class="log-text">Password</span> <input type="password" id="log_pass" class="header-right--pass" name="log_password">
                    <input type="submit" name="login" id="log_in" value="Log in" class="header-right--btn"> 
                </form> 
                <div id="message">
                <?php
                    if(isset($_REQUEST['msg']))
                    {
                        if($_REQUEST['msg']=='null')
                        {
                            echo '<span class="error">Null submission<span>';
                        }
                        else if($_REQUEST['msg']=='invalid')
                        {
                            echo '<span class="error">Email and password is not valid<span>';
                        }
                        else if($_REQUEST['msg']=='deactive')
                        {
                            echo '<span class="error">This account has deactivated<span>';
                        }
                        else if($_REQUEST['msg']=='wrong')
                        {
                            echo '<span class="error">Something went wrong...<span>';
                        }
                    }
                ?>
                </div>
            </div>
        </div>
        <div class="main-body">
            <div class="side-info">
                <h1 class="header1">Wel Come to world largest freelancer site</h1>
                <div class="short_des">Where you can find out variety of freealncer...</div>
            </div>
            <div class="registration_form">
                <form  class="reg_form" method="POST">
                    <span class="reg-font">Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> <input type="text" name="name" id="name_user" class="rule1" placeholder="enter your full name" onkeyup="nameCheck()"> <span id="info_name"></span><br>
                    <span class="reg-font">Birth-date<span> <input type="tel" name="day" id="day_user" placeholder="dd" onkeyup="dateCheck('day')" size="2" class="rule2"><span class="reg-font">/<span>
                    <input type="tel" name="month" placeholder="mm" size="2" id="month_user" class="rule2" onkeyup="dateCheck('month')"> <span class="reg-font">/<span>
                    <input type="tel" name="year" placeholder="yyyy" size="2" id="year_user" onkeyup="dateCheck('year')" class="rule2"><span id="info_date"></span><br>
                    <span class="reg-font">Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> <input type="email" id="email_user" onkeyup="emailCheck()" name="email" placeholder="enter your email" class="rule1"><span id="info_email"></span><br>
                    <span class="reg-font">Phone&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> <input type="text" name="phone" id="phone_user" onkeyup="phoneCheck()" placeholder="enter your contact number" class="rule1"><span id="info_number"></span><br>
                    <span class="reg-font">Password&nbsp;</span> <input type="password" class="pass_field" onkeyup="passCheck()" name="password" placeholder="enter a 8 digit or greater passowrd"><span id="info_password"></span><br>
                    <span class="reg-font">Chose category</span> 
                    <select class="rule3" id="type_user">
                        <option >Buyer</option>
                        <option>Freelancer</option>
                        <option>Visitor</option>
                    </select><span id="info_type"></span><br>
                    <input type="checkbox" class="check" name="check"><span> I have accepted all terms and policy</span><br>
                    <input type="submit" name="submit" value="Register" class="btn">
                </form>
                <div class="register_info"></div>
            </div>
        </div>
        <div class="footer">
            copyright &copy 2020 Riverr Inc.<br>
            <a href="view/FAQ.php" class="footer-text">FAQ</a>
            <a href="view/PandP.php" class="footer-text">Privacy and Policy</a>
        </div>
       <script src="asset/script/index.js"></script>
    </div>
</body>
</html>