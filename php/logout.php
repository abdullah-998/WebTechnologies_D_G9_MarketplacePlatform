<?php
    session_start();
    session_destroy();

    setcookie('uid',$user1[5],time()-3600,'/');

    header('location: ../view/log.php');
?>