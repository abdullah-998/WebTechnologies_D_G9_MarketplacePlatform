<?php
    session_start();
    include_once('../model/requestService.php');

    $data = $_REQUEST['mydata'];
    $json = json_decode($data);

    if($_SESSION['log'] && $json->req)
    {
        $reqs=['fid'=>$_SESSION['id'],'bid'=>$_SESSION['bid'],'pid'=>$_SESSION['pid'],'price'=>$_SESSION['price']];
        $status=insertRequest($reqs);
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
        header('location: ../index.php');
    }
?>