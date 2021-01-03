<?php
    session_start();
    include_once('../model/postService.php');

    if($_SESSION['log'])
    {
        $data = $_REQUEST['mydata'];
        $json = json_decode($data);
        if($json->price!='' && $json->descr!='' && $json->pname!='')
        {
            $posts=['uid'=>$_SESSION['id'],'pname'=>$json->pname,'descr'=>$json->descr,'price'=>$json->price];

            $status=insertPost($posts);
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