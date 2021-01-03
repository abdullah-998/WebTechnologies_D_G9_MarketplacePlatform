<?php
    session_start();
    include_once('../model/userService.php');

    if($_SESSION['log'])
    {
        $data = $_REQUEST['mydata'];
        $json = json_decode($data);
        if($json->password!='' && strlen($json->newpassword)>=8 && $json->newpassword!='' && $_SESSION['password']==$json->password)
        {
            $status=changeUserPassword($json->newpassword,$_SESSION['id']);
            if($status)
            {
                $msg=json_encode(['msg'=>'pass']);
                echo $msg;
            }
            else
            {
                $msg=json_encode(['msg'=>'fail']);
                echo $msg;
            }
        }
    }
    else
    {
        header('location: ../index.php');
    }
?>