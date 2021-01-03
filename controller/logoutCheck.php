<?php
    session_start();
    session_destroy();

    //destroying cookies
    setcookie('email',$freelancerinf['email'],time()-3600,'/');
    setcookie('id',$row['id'],time()-3600,'/');
    setcookie('password',$freelancerinf['password'],time()-3600,'/');


    header('location: ../index.php');
?>