<?php
    session_start();
    include_once('../model/requestService.php');

    if($_SESSION['log'])
    {
        $data = $_REQUEST['mydata'];
        $json = json_decode($data);
        if($json->status!='')
        {
            $status=updateStatus($json->status, $_SESSION['reqq']);
            if($status)
            {
                $_SESSION['order']=true;
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