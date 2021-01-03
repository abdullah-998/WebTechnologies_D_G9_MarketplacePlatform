<?php
    session_start();
    include_once('../model/userService.php');

    if($_SESSION['log'])
    {
        $data = $_REQUEST['mydata'];
        $json = json_decode($data);
        if($json->about!='')
        {
            $status=changeUserAbout($json->about,$_SESSION['id']);
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
        else
        {
            $msg=json_encode(['msg'=>'null']);
                echo $msg;
        }
    }
    else
    {
        header('location: ../index.php');
    }
?>